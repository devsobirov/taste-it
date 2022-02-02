<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    //protected $fillable = ['name','category_id'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }


    public function scopeFilter($query, $request)
    {
        $category_id =  $request->category;
        $search = $request->name;

        if (!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
        if (!empty($search)) {
            $query->where('name', 'like', "%$search%");
        }
    }
}
