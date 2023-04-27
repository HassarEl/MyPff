@extends('layouts.master')

@section('title')
    Contenu
@endsection

@section('css')

@endsection

@section('title_header')
    Contenu De Jardin
@endsection

@section('title_page1')
    
@endsection

@section('title_page2')
    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="card m-0">
                <div class="card-header">
                  Contenu Jardin Plante
                </div>
                <div class="card-body">
                  
                    <form class="form">
                        <div class="col-12">
                          <label for="inputEmail4" class="form-label">Liste Jardins</label>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Select Jardin</option>
                            @foreach($jardins as $jardin)
                            <option value="{{$jardin->nomJardin}}">{{$jardin->nomJardin}}</option>
                            @endforeach
                          </select>
                        </div>
                        <br>
                        <div class="col-12">
                          <label for="inputPassword4" class="form-label">Composition</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        
                        <div class="col-md-2">
                          <label for="inputZip" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection