
@extends('layouts.main')
    
    @section('content')
        
        <div class="container m-5 p-5">
            <div class="d-flex justify-content-between">
                <h3 class="text-primary">A number to be written with the plastic digits.</h3>
                <a href="/palindrom">Go to palindrom page</a>
            </div>
            <form action="{{ route('index') }}" method="POST">
                @csrf
                <div class="form-group mt-5">
                    <label for="">Number: </label>
                    <input type="number" name="digit" placeholder="insert number:" class="form-control" >
                    @error('digit')
                        <p class="alert alert-danger">{{ $message }}</p> 
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Submit" class="btn btn-primary btn-lg">
                </div>
            </form>
        </div>
        
    @endsection

