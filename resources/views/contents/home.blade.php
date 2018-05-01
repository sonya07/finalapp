@extends('layouts.app')
<!-- this uses the layout director and app.blade.php -->

@section('content')
<div class="content">
    <div class="title m-b-md">
        The Mail List  {{ $version }}<br>
        @auth
        WELCOME  {{ Auth::user()->name }}  !
        @endauth
    </div>
</div>
@endsection
