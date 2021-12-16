@extends('layouts.main')
    
    @section('content')
        
        <div class="container m-5 p-5">
            <div class="d-flex justify-content-between">
                <h3 class="text-primary">Create palindrom from a string.</h3>
                <a href="/">Go to plastc number</a>
            </div>    
            <form action="{{ route('makeit') }}" method="POST">
                @csrf
                <div class="form-group mt-5">
                    <label for="string">String: </label>
                    <input type="text" name="string" placeholder="insert string:" class="form-control"  id="string">
                    @error('string')
                        <p class="alert alert-danger">{{ $message }}</p> 
                    @enderror
                </div>
                <div class="form-group mt-3">
                    <input type="submit" value="Submit" class="btn btn-primary btn-lg">
                </div>
            </form>
        </div>
    @endsection