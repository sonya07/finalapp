@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users <a class="hollow button" href="{{ route('print_user') }}">PRINT</a></div>
                @include('flash-message')
                <div class="card-body">
                    <div class = "container">
                    <div class="medium-2  columns"><a class="button hollow success" href="{{ route('create_user') }}">ADD NEW USER</a></div>
                    @foreach($users as $user)
                    <div class = "row">
                        <div class = "col-md-2">
                             {{ $user->id }}
                        </div>
                        <div class = "col-md-2">
                            {{ $user->name }}
                        </div>
                        <div class = "col-md-4">
                             {{ $user->email }}
                        </div>
                        <div class = "col-md-1">
                            <a class="hollow button" href="{{ route('show_user',['id'=>$user->id]) }}">EDIT</a>
                        </div>
                        <div class = "col-md-1">
                            {!! Form::open(array('url' => '/users/delete/' . $user->id)) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('DELETE', array('class' => 'btn btn-danger')) !!}
                            {!! Form::close() !!}
                        </div>
                        
                    </div>
                    @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
