@extends('layouts.master')

@section('title')
    jardinier
@endsection

@section('css')

@endsection

@section('title_header')
    <h3>Liste Jardinier</h3>
@endsection

@section('title_page1')
    
@endsection

@section('title_page2')
    
@endsection

@section('content')
<div class="content">
    @if (session()->has('message'))
    <div class="alert alert-success  alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" data-bs-target="#my-alert" aria-label="Close"></button>
      </div>
    @endif
</div>
<section class="content pl-5 pr-5">

    <div class="card">
      <div class="card-header">
        <h2 class="card-title">Jardin</h2>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr align="center">
                    <th>
                        jardinier
                    </th>
                </tr>
            </thead>
            <tbody>

                
                <tr>
                    <td></td>
                </tr>
                
            </tbody>
        </table>
      </div>

    </div>


</section>
@endsection

@section('scripts')

@endsection