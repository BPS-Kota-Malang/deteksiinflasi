<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

   
    /**
     * Displays the analytics screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function analytics()
    {
        return view('pages/dashboard/analytics');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }

    public function landingpage()
    {
        return view('pages/dashboard/landingpage');
    }

    public function bawangmerah()
    {
        return view('pages/lookerstudio/bawangmerah');
    }

    public function bawangputih()
    {
        return view('pages/lookerstudio/bawangputih');
    }

    public function beras()
    {
        return view('pages/lookerstudio/beras');
    }
    public function cabaimerah()
    {
        return view('pages/lookerstudio/cabaimerah');
    }
    public function cabairawit()
    {
        return view('pages/lookerstudio/cabairawit');
    }
    public function ayamras()
    {
        return view('pages/lookerstudio/ayamras');
    }
    public function sapi()
    {
        return view('pages/lookerstudio/sapi');
    }
    public function gula()
    {
        return view('pages/lookerstudio/gula');
    }
    public function kembung()
    {
        return view('pages/lookerstudio/kembung');
    }
    public function jeruk()
    {
        return view('pages/lookerstudio/jeruk');
    }
    public function miekering()
    {
        return view('pages/lookerstudio/miekering');
    }
    public function minyak()
    {
        return view('pages/lookerstudio/minyak');
    }
    public function pisang()
    {
        return view('pages/lookerstudio/pisang');
    }
    public function susububuk()
    {
        return view('pages/lookerstudio/susububuk');
    }

    public function susubalita()
    {
        return view('pages/lookerstudio/susubalita');
    }

    public function tahu()
    {
        return view('pages/lookerstudio/tahu');
    }
    public function telur()
    {
        return view('pages/lookerstudio/telur');
    }
    public function tempe()
    {
        return view('pages/lookerstudio/tempe');
    }
    public function tepung()
    {
        return view('pages/lookerstudio/tepung');
    }
    public function udang()
    {
        return view('pages/lookerstudio/udang');
    }
    public function inflasiyoy()
    {
        return view('pages/lookerstudio/inflasiyoy');
    }
    public function inflasiytd()
    {
        return view('pages/lookerstudio/inflasiytd');
    }
    public function inflasimtm()
    {
        return view('pages/lookerstudio/inflasimtm');
    }
}
