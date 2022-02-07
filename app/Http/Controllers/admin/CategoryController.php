<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Admin sahifada barcha kategoriyalarni ko'rsatish
     *
     */
    public function index()
    {
        //$categories = DB::table('categories')->orderBy('id','desc')->get();
        //$categories = DB::table('categories')->orderByDesc('id')->get();
        //$categories = DB::table('categories')->latest()->get();

        $categories = Category::with(['food:id,name,category_id'])->paginate();
        //dd($categories);
       return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        //$request->all();
        //$request->input()
        //$request->input('name')
        //$request->description
        //$request->only(['_token','name'])
        //$request->except(['_token','name'])

//        $name = $request->name,
//        $description = $request->description;
//        $categoryData = [
//            'name' => $name,
//            'description' => $description
//        ];

//        $categoryData = [
//            'name' => $request->name,
//            'description' => $request->description
//        ];
//        $categoryData = $request->input();
        //$created = DB::table('categories')->insert($request->except(['_token']));

//        $created = Category::create([
//            'name' => $request->name,
//            'description' => $request->description
//        ]);
        $created = Category::create($request->input());

        if( $created ) {
          return redirect()->route('admin.categories.index')->with(['success' => 'Muvaffaqiyatli yaratildi']);
        }
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //$item = $categories = DB::table('categories')->where('id', $id)->first();
        //$item = Category::find($id);
        $item = Category::findOrFail($id);
        return view('admin.category.edit', compact('item'));
    }

    public function update($id, Request $request)
    {
        /** 1- usul
            $name = [];
            $name['uz'] = $request->input('name_uz');
            $name['ru'] = $request->input('name_ru');
            $name['en'] = $request->input('name_en');
         **/
        $category = Category::find($id);
        $category->update($request->input());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.categories.index')->with(['success' => 'Muvaffaqiyatli o\'chirildi']);
    }
}
