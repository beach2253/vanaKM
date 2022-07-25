<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use App\Models\RegisterDoc;
use Illuminate\Http\Request;
// use App\Models\File;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use  Illuminate\Http\UploadedFile;

class DocumentController extends Controller
{
    //
    public function index(){
        return view('documents.index',[
            'documents'=>Document::all(),
        ]);
    }

    public function show(Document $documents){
        dd ($documents);
        
        return view('documents.show',[
            'document' => Document::find($documents['Doc_Name'])
        ]);
    }

    public function create(request $add){
        // dd($add);
            //ตรวจสอบข้อมูล
            $add->validate(
                [
                    'file'=>'required'
                ],
                [
                    'file'=>'กรุณาเลือกไฟล์ PDF'
                ]
                );
            // dd($add->file);

            //อัพโหลดไฟล์
            // $name = $add->file('file');
            // $path = $add->file('file')->create('public/files');
            
            // $save = new File;
            // $save->name = $name;
            // $save->path = $path;


            $NameFile = $add->file('file')->getClientOriginalName();
            // dd($NameFile);

            $upload_location = '/image/FilePDF/';
            $full_path = $upload_location.$NameFile;
            // dd($full_path);

           
            // //บันทึกข้อมูล 
            $documents = new RegisterDoc;
            $documents->Doc_Code = $add->DocCode;
            $documents->Doc_Name = $add->Doc_Name;
            $documents->User_Code = Auth::user()->id;
            $documents->Doc_Type = $add->type;
            $documents->Doc_Obj = $add->objective;
            $documents->Doc_Description = $add->info;
            $documents->Doc_Life = $add->Year;
            $documents->Doc_ver = '1';
            $documents->Doc_Timestamp = $add->date;
            $documents->Doc_StartDate = $add->usedate;
            $documents->Doc_Location = $full_path;
            $documents->Doc_Status ='1';
            // //upload PDF

            // dd( $add->file('file') );
            $file = $add->file('file');
            // dd($file->getClientOriginalName());
            // Storage:: move( $upload_location, $file);
            Storage::putFileAs($upload_location,$file,$file->getClientOriginalName());

            $visibility = Storage::getVisibility($upload_location);
            // dd($visibility);


            // gettype($add);
            
            // dd( Storage::disk('local') );
            // $add->file($NameFile)->store($upload_location);


//  dd($documents);
            $documents->save();
       
    }
}
