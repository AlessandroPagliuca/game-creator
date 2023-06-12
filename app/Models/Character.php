<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable =['name', 'level' , 'class', 'race' , 'lifepoint', 'strength', 'agility', 'main_weapon', 'type'];

    public function type()
    {
        return $this->belongsTo(Type::class);

     }
    public function weapons(){
        return $this->belongsToMany(Weapon::class);

    }
    
}
