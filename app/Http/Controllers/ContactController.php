<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Kontakt sahifasioni koprsatish
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Joinatilgan POST zapros bilan ishlash
     * @param Request $request
     */
    public function contact(Request $request)
    {
        dd($request->input());
    }
}
