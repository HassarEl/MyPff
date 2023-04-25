@extends('layouts.master')

@section('title')
    Plante
@endsection

@section('css')

@endsection

@section('title_header')
    Les Plantes
@endsection

@section('title_page1')
    <a class="btn btn-outline-secondary" href="{{url('/')}}">Home</a>
@endsection

@section('title_page2')
    
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col pl-5 pb-2">
            <a class="btn btn-primary" href="{{url('plante/create')}}">Ajouter Une Plante</a>
        </div>
    </div>
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
        <h2 class="card-title">Plante</h2>
      </div>

      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr align="center">
                    <th>
                        NumP
                    </th>
                    <th>
                        Nom Plante
                    </th>
                    <th>
                        Origine
                    </th>
                    <th>
                        Prix
                    </th>
                    <th>
                        Acction
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($plantes as $plante)
                <tr align="center">
                    <td>
                        {{$plante->id}}
                    </td>
                    <td>
                        {{$plante->name}}
                    </td>
                    <td>
                        {{$plante->origin}}
                    </td>
                    <td>
                        {{$plante->price}}
                    </td>
                    <td>

                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
      </div>

    </div>


</section>
@endsection

@section('scripts')

@endsection