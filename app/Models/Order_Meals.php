<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Meals extends Model
{
    use HasFactory;

    protected $table = 'order_meals' ;
    protected $fillable =['id','order_id','meal_id','option_id'];


    public function getmeals(){
        return $this->hasMany(Meal::class , 'id','id');
    }

    public function allmeal(){
        return $this->hasMany(Meal::class,'id','meal_id');
    }

    public function order(){
        return $this->hasMany(Order::class , 'order_id' , 'id');
    }
}
