<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Http\Requests\FoodCreateRequest;

class FoodController extends Controller
{

    public function index()
    {
        $foods = Food::with(['category:id,name'])->paginate();

        return view('admin.food.index', compact('foods'));
    }


    public function create()
    {
        $categories = Category::select(['id','name'])->get();
        return view('admin.food.create', compact('categories'));
    }

    public function store(FoodCreateRequest $request)
    {
//        $validatedData = $request->validate([
//            'name' => 'required|string| min:3|max:255',
//            'price' => ['nullable','numeric','min:0','max:9999999'],
//            'category_id' => 'required|integer',
//            'recept' => 'nullable|max: 255',
//        ]);

        $validatedData = $request->validated();
        //dd($validatedData);
        $full_path = null;
        if ($uploaded = $request->file('image')) {

            // Rasm uchun unikal nom yasash
            // Yuklangan rasmni vaqticha (temporary) xotiradan asosiysiga
            $uploaded = $request->file('image');

            //$name = $uploaded->getClientOriginalName();
            //$name = $uploaded->getMimeType();
            $extension = $uploaded->getClientOriginalExtension();
            $img_name = time(). '_img'. ".$extension";
            $uploaded->move(public_path('images/food'), $img_name);
            $full_path = '/images/food/' . $img_name;
        }

        $validatedData['image'] = $full_path;
        $created = Food::create($validatedData);

        if ($created) {
           return redirect()->route('admin.foods.index')->with(['success' => 'Таом тури муваффакиятли яратилди!']);
        }

        return  redirect()->back()->withErrors(['msg' => 'Номаълум хатолик, кайта уриниб куринг']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect()->back();
    }
}
