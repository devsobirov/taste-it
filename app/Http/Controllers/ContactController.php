<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackMessage;
use Mockery\Exception;

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
        $error= false;
        $tg_id = 70130832;
        $message = $request->input();


        $users = [70130832,70130832,70130832,70130832,70130832,70130832,70130832,70130832,70130832,70130832];

        for ($i = 1; $i < 1000; $i++) {
            sleep(0.1);
            $message['subject'] = $i;
            try {
                Notification::send(1189371511, new FeedbackMessage($message));
            } catch (Exception $e) {
                $error = "xato boldi";
            }
        }

        foreach ($users as $id) {
            try {
                Notification::send($id, new FeedbackMessage($message));
            } catch (Exception $e) {
                $error = "xato boldi";
            }
        }

        return redirect()->back()->with(['msg' => $error]);
    }
}
