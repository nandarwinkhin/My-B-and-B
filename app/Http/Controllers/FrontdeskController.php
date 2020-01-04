<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomType;

class FrontdeskController extends Controller
{
//    public $month;
//    public $year;

    function index($col = 5)
    {
        $dateObj = new FrontdeskController();

        $rooms = Room::all();
        $roomtypes = RoomType::all();
//        $dateObj->year = 2020;
//        $dateObj->month = 1;
//        $mon = $dateObj->month;
//        $year = $dateObj->year;
        $mon=1;
        $year=2020;
        if ($col == 5)
            $col = cal_days_in_month(CAL_GREGORIAN, $mon, $year);
        return view('frontdesk.index', compact("rooms", 'roomtypes', 'mon', 'year', 'col'));
    }
}
