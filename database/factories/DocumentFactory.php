<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fk_user_owner'=>$this->faker->name(),
            'type'=>'DS/KM: Doc support',
            'objective'=>$this->faker->word(), 
            'title'=>$this->faker->word(),
            'discription'=>$this->faker->paragraph(),
            'revision'=>$this->faker->semver(), 
            'record_life'=>$this->faker->randomDigitNotNull(), 
            'date_effective'=>date('d-m-y'),
            'date_approve'=>null, 
            'fk_user_approve'=>null, 
            'status'=>'approved', 
            'file_location'=>'documents/sample.pdf',
            'permission'=>$this->faker->word(),
        ];
        // return [
        //     'fk_user_owner'=>$this->faker->name(),
        //     'type'=>'DS/KM: Doc support',
        //     'objective'=>$this->faker->word(), //push from list
        //     'title'=>$this->faker->word(),
        //     'discription'=>$this->faker->paragraph(),
        //     'revision'=>$this->faker->semver(), // default to 0 incrimental by 1
        //     'record_life'=>$this->faker->randomDigitNotNull(), // life of record of this document ~(x)Years
        //     'date_effective'=>$this->faker->unixTime(new DateTime('+3 weeks')),
        //     'date_approve'=>null, // nulled until action
        //     'fk_user_approve'=>null, // nulled until action
        //     'status'=>'approved', // pending / reject / approved
        //     'file_location'=>'documents/sample.pdf',
        //     'permission'=>$this->faker->word() //get default from doc type
        // ];
        // 'file_location'=>$this->faker->file(),
    }
}
