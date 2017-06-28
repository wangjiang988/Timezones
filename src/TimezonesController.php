<?php

namespace Wj\Timezones;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{
    
    public function index($timezone = NULL)
    {
        $current_time  = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        // echo $time->toDateTimeString();
        return view('timezones::time', compact('current_time'));

    }


}
