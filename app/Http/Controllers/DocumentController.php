<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    public function index(){
        return view('documents.index',[
            'documents'=>Document::all(),
        ]);
    }

    public function show(Document $documents){
        // dd ($documents);
        
        return view('documents.show',[
            'document' => Document::find($documents['id'])
        ]);
    }

    public function create(){
        return view('documents.create');
    }
}
