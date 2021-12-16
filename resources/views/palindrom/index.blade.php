@extends('layouts.main')

@section('content')
    <div class="m-3 p-3 d-flex justify-content-between">
        <h3>{{$palindrom}}</h3>
        <a href="/palindrom">Go back</a>
    </div>
@endsection