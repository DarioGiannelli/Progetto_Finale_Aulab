<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon');
            $table->timestamps();
        });

        $categories = [
            ['name'=>'Elettronica', 'icon'=>'fa-solid fa-tachograph-digital'],
            ['name'=>'Sport', 'icon'=>'fa-solid fa-futbol'] , 
            ['name'=>'Casa', 'icon'=>'fa-solid fa-house'], 
            ['name'=>'Console e Videogame', 'icon'=>'fa-solid fa-gamepad'], 
            ['name'=>'Motori', 'icon'=>'fa-solid fa-car-on'],
            ['name'=>'Fai da te', 'icon'=>'fa-solid fa-image'], 
            ['name'=>'Abbigliamento', 'icon'=>'fas fa-tshirt'], 
            ['name'=>'Salute', 'icon'=>'fa-solid fa-pump-medical'], 
            ['name'=>'Multimedia', 'icon'=>'fa-solid fa-headset'], 
            ['name'=>'Libri', 'icon'=>'fa-solid fa-book'], 
            ['name'=>'Infanzia', 'icon'=>'fa-solid fa-baby'], 
            ['name'=>'Animali', 'icon'=>'fa-solid fa-paw']
        ];

        
        
        foreach ($categories as $category){
            Category::create([ 'name'=>$category['name'] ,'icon'=>$category['icon'] ]);
        }  

         
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
