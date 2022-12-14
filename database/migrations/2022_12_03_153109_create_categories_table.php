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
            $table->string('name_en');
            $table->string('icon');
            $table->timestamps();
        });

        $categories = [
            ['name'=>'Elettronica', 'name_en'=>'Tech', 'icon'=>'fa-solid fa-tachograph-digital'],
            ['name'=>'Sport', 'name_en'=>'Sport', 'icon'=>'fa-solid fa-futbol'] , 
            ['name'=>'Casa', 'name_en'=>'Home','icon'=>'fa-solid fa-house'], 
            ['name'=>'Console e Videogame', 'name_en'=>'Console and Videogames','icon'=>'fa-solid fa-gamepad'], 
            ['name'=>'Motori', 'name_en'=>'Motors','icon'=>'fa-solid fa-car-on'],
            ['name'=>'Fai da te', 'name_en'=>'Do-it-yourself', 'icon'=>'fa-solid fa-image'], 
            ['name'=>'Abbigliamento', 'name_en'=>'Clothing', 'icon'=>'fas fa-tshirt'], 
            ['name'=>'Salute', 'name_en'=>'Health', 'icon'=>'fa-solid fa-pump-medical'], 
            ['name'=>'Multimedia', 'name_en'=>'Multimedia', 'icon'=>'fa-solid fa-headset'], 
            ['name'=>'Libri', 'name_en'=>'Books', 'icon'=>'fa-solid fa-book'], 
            ['name'=>'Infanzia', 'name_en'=>'Infancy', 'icon'=>'fa-solid fa-baby'], 
            ['name'=>'Animali', 'name_en'=>'Animals', 'icon'=>'fa-solid fa-paw']
        ];

        
        
        foreach ($categories as $category){
            Category::create([ 'name'=>$category['name'] ,'name_en'=>$category['name_en'], 'icon'=>$category['icon'] ]);
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
