<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function blog_single()
    {
        return view('blog-single');
    }

    public function blog()
    {
        return view('blog');
    }

    public function chef()
    {
        $chefs = Chef::all();

        return view('chef')->with('chefs', $chefs);
    }

    public function contact()
    {
        return view('contact');
    }

    public function menu(Request $request)
    {
        $categories = Category::select(['id','name'])->get();
        $foods = Food::select(['id','category_id','name','image','recept','price'])
            ->filter($request)
            ->get();
//            ->where(function ($query) use ($category_id, $search){
//                if (!empty($category_id)) {
//                    $query->where('category_id', $category_id);
//                }
//                if (!empty($search)) {
//                    $query->where('name', 'like', "%$search%");
//                }
//            })

        if ($request->expectsJson()) {
            return response()->json($foods);
        }
        return view('menu', compact('categories','foods'));
    }

    public function reservation()
    {
        return view('reservation');
    }

}
