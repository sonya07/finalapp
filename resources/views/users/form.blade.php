@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modify User</div>
                    <form action="{{ route('modify_user', [ 'user_id' => $user_id ]) }}" method="post">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input name="name" type="text" value="{{ old('first_name') ? old('first_name') : $first_name }}">
                            <small class="error">{{$errors->first('first_name')}}</small>
                        </div>
     
                        <div class="col-md-6">
                            <label>Email</label>
                            <input name="email" type="text" value="{{ old('email') ? old('email') : $email }}">
                            <small class="error">{{$errors->first('email')}}</small>
                        </div>

                        <div class="col-md-12">
                            <input value="SAVE" class="button success hollow" type="submit">
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
@endsection