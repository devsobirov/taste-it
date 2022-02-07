<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    protected $fillable = ['name', 'description'];
    //protected $guarded = [];

    protected $perPage = 15;

    public function food()
    {
        return $this->hasMany(Food::class, 'category_id', 'id');
    }

}
