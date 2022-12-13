<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable=[
        'name',
        'description',
        'price',
        'brand', 
        'category_id',
        'user_id',
        
        
    ];

    public function toSearchableArray(){
        $category = $this->category;
        $array=[
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'brand' => $this->brand,
            'category'=>$category,

        ];
        return $array;
    }




    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()  {
        return Product::where('is_accepted', null)->count();
    }

    // prova
    public function getDescriptionSubstring() {
        if(strlen($this->description) > 50 ){
            return substr($this->description, 0, 50) . '...';
        }else{
            return $this->description;
        }
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

//    public function getFormattedDate() {
//     return $this->created_at->format('d/m/y');
//    }
}


           