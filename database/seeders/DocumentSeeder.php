<?php

namespace Database\Seeders;

use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Document::factory(10)->create();
        // DB::table('document')->incert([
        //     'title'=> Str::random(10),
        //     'discription'=> Str::random(30),
        //     'owner'=> Str::random(7).' '.Str::random(12),
        //     'referance'=> Str::random(5),
        //     'fileLocation'=> Str::random(5),
        //     'revision'=> Str::random(3),
        //     'type'=> 'DS/KM: Doc support', // SM: System manual /PR: Procedure /WI: Work Instructuction /SD/SP/MN
        //     'permission'=> Str::random(3), // Might controle by document type
        //     'status'=> Str::random(10),

        //     'fk_user_owner'=>Str::random(5),
        //     'type'=>'DS/KM: Doc support',
        //     'objective'=>Str::random(5), //push from list
        //     'title'=>Str::random(10),
        //     'discription'=>Str::random(65),
        //     'revision'=>0, // default to 0 incrimental by 1
        //     'record_life'=>'2', // life of record of this document ~(x)Years
        //     'date_effective'=>date('d-m-y'),
        //     'date_approve'=>null, // nulled until action
        //     'fk_user_approve'=>null, // nulled until action
        //     'status'=>'pending', // pending / reject / approved
        //     'file_location'=>Str::random(5),
        //     'permission'=>Str::random(5) //get default from doc type
        // ]);
    }
}
