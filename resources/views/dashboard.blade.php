@extends('layouts.master')

@section('title')
    
@endsection

@section('css')

@endsection

@section('title_header')
    {{auth()->user()->name}}
@endsection

@section('title_page1')
    
@endsection

@section('title_page2')
    
@endsection

@section('content')
{{-- Question 4 --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h2>Bienvenu {{auth()->user()->name}}</h2>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection