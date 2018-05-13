<?php

namespace App\Http\Controllers;
use App\User;
use PDF;
use Illuminate\Http\Request;
use Response;

class UserController extends Controller
{
    
    public function browse() {
  
        $users = User::all();
        return view('users.browse',compact('users'));
      
    }

    public function __construct( User $user )
    {
        $this->user = $user;
    }

    public function downloadPDF() {
        $users = User::all();
        $orientation = 'landscape';
        $customPaper = array(0,0,950,950);
        //$this->setPaper($customPaper, $orientation);
        $pdf = PDF::loadView('users.print', compact('users'));
        return $pdf->download('Users.pdf');
    }

    public function show($user_id)
    {
        $data = []; $data['user_id'] = $user_id;
        $user_data = $this->user->find($user_id);
        $data['name'] = $user_data->name;
        $data['email'] = $user_data->email;
        $data['modify'] = 1;
        
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

            return redirect('users')->with(['success' => 'Successful update !']);
        }
        
        return view('users/form', $data);
    }

    public function newUser(Request $request, User $user ) {
        $data = [];
        
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = bcrypt(request('password'));;


        if( $request->isMethod('post') )
        {
           // dd($data);
            $this->validate(
                $request,
                [
                    'name' => 'required|min:5',
                    'email' => 'required|string|email|max:255',
                    'password' => 'required|between:8,255|confirmed',
                    'password_confirmation' => 'required',
                ]
            );

            $user->insert($data);

            return redirect('/users')->with(['success' => 'Successful add!']);
        }
        $data['modify'] = 0;
        return view('users/form', $data);
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with(['success' => 'Successful delete!']);
    }
}
