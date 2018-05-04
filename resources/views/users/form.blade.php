@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class = "container">
                      <div class="row">
                            <div class="medium-12 large-12 columns">
                                <h4>{{ $modify == 1 ? 'Modify User' : 'New User' }}</h4>
                                <form action="{{ $modify == 1 ? route('update_user', [ 'user_id' => $user_id ]) : route('create_user') }}" method="post">
                                    <div class="medium-4  columns">
                                        <label>Name</label>
                                        <input name="name" type="text" value="{{ old('name') ? old('name') : $name }}">
                                        <small class="error">{{$errors->first('name')}}</small>
                                    </div>
                
                                    <div class="medium-4  columns">
                                        <label>Email</label>
                                        <input name="email" type="text" value="{{ old('email') ? old('email') : $email }}">
                                        <small class="error">{{$errors->first('email')}}</small>
                                    </div>
                                    @if( $modify == 0) 
                                    <div class="medium-4  columns">
                                        <label>Password</label>
                                        <input name="password" type="text">
                                        <small class="error">{{$errors->first('password')}}</small>
                                    </div>
                                    <div class="medium-4  columns">
                                        <label>Confirm Password</label>
                                        <input id="password-confirm" type="password" name="password_confirmation">
                                        <small class="error">{{$errors->first('password')}}</small>
                                    </div>
                                     
                                    @endif
                                    

                                    <div class="col-md-12">
                                        <input value="SAVE" class="button success hollow" type="submit">
                                    </div>
                                </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
    @endsection