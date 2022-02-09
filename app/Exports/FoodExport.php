<?php

namespace App\Exports;

use App\Models\Food;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class FoodExport implements FromView
{

    public function view(): View
    {
        $food = Food::with('category:id,name')->get();
        return view('docs.excel', [
            'food' => $food
        ]);
    }

//    /** Trait */
//    use Exportable;
//
//    public function collection()
//    {
//        return Food::all();
//    }

//    public function query()
//    {
////       return Food::query()->select(['id','name','category_id'])
////           ->with(['category:id,name']);
//        return DB::table('food')
//            ->select(['food.id as food_id','food.name','categories.name as category'])
//            ->join('categories', 'categories.id', '=', 'food.category_id')
//            ->orderBy('food.id', 'asc');
//    }
}
