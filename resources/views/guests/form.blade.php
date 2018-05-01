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
                              <h4>{{ $modify == 1 ? 'Modify Guest' : 'New Guest' }}</h4>
                              <form action="{{ $modify == 1 ? route('update_guest', [ 'guest_id' => $guest_id ]) : route('create_guest') }}" method="post">
                                <div class="medium-4  columns">
                                  <label>First Name</label>
                                  <input name="first_name" type="text" value="{{ old('first_name') ? old('first_name') : $first_name }}">
                                  <small class="error">{{$errors->first('first_name')}}</small>
                                </div>
                                <div class="medium-4  columns">
                                  <label>Last Name</label>
                                  <input name="last_name" type="text" value="{{ old('last_name') ? old('last_name') : $last_name }}">
                                  <small class="error">{{$errors->first('last_name')}}</small>
                                </div>
                                <div class="medium-8  columns">
                                  <label>Address</label>
                                  <input name="address_1" type="text" value="{{ old('address_1') ? old('address_1') : $address_1 }}">
                                  <small class="error">{{$errors->first('address_1')}}</small>
                                </div>
                                <div class="medium-8  columns">
                                  <label>Address 2</label>
                                  <input name="address_2" type="text" value="{{ old('address_2') ? old('address_2') : $address_2 }}">
                                  <small class="error">{{$errors->first('address_2')}}</small>
                                </div>
                                <div class="medium-4  columns">
                                  <label>Zip</label>
                                  <input name="zip" type="text" value="{{ old('zip') ? old('zip') : $zip }}">
                                  <small class="error">{{$errors->first('zip')}}</small>
                                </div>
                                <div class="medium-4  columns">
                                  <label>City</label>
                                  <input name="city" type="text" value="{{ old('city') ? old('city') : $city }}">
                                  <small class="error">{{$errors->first('city')}}</small>
                                </div>
                                <div class="medium-4  columns">
                                  <label>State</label>
                                  <input name="state" type="text" value="{{ old('state') ? old('state'): $state }}">
                                  <small class="error">{{$errors->first('state')}}</small>
                                </div>
                                <div class="medium-12  columns">
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