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
<a class="btn btn-outline-secondary" href="{{route('dashboard')}}">Home</a>
@endsection

@section('title_page2')
    <a class="btn btn-outline-secondary" href="{{route('contenu.index')}}">Contenu</a>
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
                        <div class="row">
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Composition</label>
                                <table class="table table-bordere">
                                  <thead>
                                    <tr>
                                      <th>Plante</th>
                                      <th>Quantite</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                      @foreach($plantes as $plante)
                                          <tr>
                                                <td>
                                                    {{$plante->name}}
                                                </td>
                                                <td>
                                                    <input name="quantité" type="text" class="form-control">
                                                </td>
                                          </tr>
                                      @endforeach
                                      
                                  </tbody>
                                </table>
                              </div>
                        </div>

                        <br>
                        {{-- <div class="col-12">
                            <select class="form-select" name="" id="">
                                <option selected>Selection La Plante</option>
                                @foreach($plantes as $plante)
                                    <option value="{{$plante->id}}">{{$plante->name}}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        

                        <div class="col-12">
                          <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection