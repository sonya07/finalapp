<?php

namespace App\Http\Controllers;
use App\Guest as Guest;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class GuestsController extends Controller
{

    public function __construct( Guest $guest )
    {
        $this->guest = $guest;
    }

    public function browse() {

        $data = [];

        $data['guests'] = //$this->guest->all();
            Guest::
            limit(100)
            ->orderby('last_name')
            ->get();  

        return view('guests.browse_cosmos', $data);

    }

    public function export() {
        return view('guests/export');
    }

    public function newGuest(Request $request, Guest $guest) {
        $data = [];
        
        $data['first_name'] = $request->input('first_name');
        $data['last_name'] = $request->input('last_name');
        $data['address_1'] = $request->input('address_1');
        $data['address_2'] = $request->input('address_2');
        $data['zip'] = $request->input('zip');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
    
        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'address_1' => 'required',
                    'zip' => 'required',
                    'city' => 'required',
                    'state' => 'required',

                ]
            );

            $guest->insert($data);

            return redirect('guests/browse');
        }
        $data['modify'] = 0;
        return view('guests/form', $data);
    }

    public function create(){
        return view('guests/create');
    }

    public function modify(Request $request, $guest_id, Guest $guest ){
        $data = [];

        $data['first_name'] = $request->input('first_name');
        $data['last_name'] = $request->input('last_name');
        $data['address_1'] = $request->input('address_1');
        $data['address_2'] = $request->input('address_2');
        $data['zip'] = $request->input('zip');
        $data['city'] = $request->input('city');
        $data['state'] = $request->input('state');
    
        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'address_1' => 'required',                 
                    'zip' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                ]
            );

            $guest_data = $this->guest->find($guest_id);

            $guest_data->first_name = $request->input('first_name');
            $guest_data->last_name = $request->input('last_name');
            $guest_data->address_1 = $request->input('address_1');
            $guest_data->address_2 = $request->input('address_2');            
            $guest_data->zip = $request->input('zip');
            $guest_data->city = $request->input('city');
            $guest_data->state = $request->input('state');

            $guest_data->save();

            return redirect('guests/browse');
        }
        
        return view('guests/form', $data);
    }

    public function years() {
        $guests = \DB::table('guest')
            ->select(\DB::raw('YEAR(created_at) as year, COUNT(*) as total')) 
            ->where('mail_list','<>',0)
            ->groupBy('year')
            ->orderBy('year','desc')
            ->get();

        return view('guests.years',compact('guests'));
    }

    public function show($guest_id)
    {
        $data = []; $data['guest_id'] = $guest_id;
        $data['modify'] = 1;
        $guest_data = $this->guest->find($guest_id);
        $data['first_name'] = $guest_data->first_name;
        $data['last_name'] = $guest_data->last_name;
        $data['address_1'] = $guest_data->address_1;
        $data['address_2'] = $guest_data->address_2;
        $data['zip'] = $guest_data->zip;
        $data['city'] = $guest_data->city;
        $data['state'] = $guest_data->state;
        
        return view('guests/form', $data);
    }

}