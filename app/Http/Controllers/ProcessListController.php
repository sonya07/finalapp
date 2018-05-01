<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProcessList extends Controller
{
    
    public function index() {
        $users = DB::table('users')->get();   
        $users = User::all();
        //return view('users.index',compact('users'));
        return view('user.index', ['users' => $users]);
      
    }

    /*public function __construct( User $user )
    {
        $this->user = $user;
    }

    public function print() {
        return view('users/print');
    }

    public function show($user_id)
    {
        $data = []; $data['user_id'] = $user_id;
        $user_data = $this->user->find($user_id);
        $data['name'] = $user_data->name;
        $data['email'] = $user_data->email;
        
        return view('users/form', $data);
    }

    public function modify( Request $request, $user_id, User $user )
    {
        $data = [];

        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        
        if( $request->isMethod('post') )
        {
            //dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:5',
                    'email' => 'required',

                ]
            );

            $user_data = $this->user->find($user_id);

            $user_data->name = $request->input('name');
            $user_data->email = $request->input('email');

            $user_data->save();

            return redirect('users');
        }
        
        return view('users/form', $data);
    }
*/
}
