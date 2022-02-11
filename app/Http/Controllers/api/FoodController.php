<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index()
    {
        $foods = Food::orderByDesc('id')->limit(20)->get();

        return response()->json($foods, 200);
    }


    public function store(Request $request)
    {
        $food = Food::create($request->input());
        if ( $food) {
            return response()->json($food, 201);
        }
        return response('Error Occured', 422);
    }


    public function show($id)
    {
        $food = Food::find($id);
        if ($food) {
            return response()->json($food);
        }

        return response()->json($food,404);
    }


    public function update(Request $request, $id)
    {
        $food = Food::find($id);
        $updated = $food->update($request->input());

        if ($updated) {
            return response()->json($updated, 200);
        }
        return response('', 500);
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $result = $food->delete();
        return response()->json($result,204);
    }
}
