<?php


namespace App\Http\Controllers;


use App\Models\Agenda;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

//use MaddHatter\LaravelFullcalendar\Calendar;

class AgendaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


        $events = [];
        $data = Agenda::all();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->obs,
                    false,
                    '2019-12-27T10:30:00',// new \DateTime($value->data_ini),
                    '2019-12-27T11:30:00',//new \DateTime($value->data_fim . ' +1 day'),
                    $value->id_agenda,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => '/home',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);


        // dd($events);

        return view('home', compact('calendar'));


    }


}
