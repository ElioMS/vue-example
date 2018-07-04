@extends('template')

@section('content')

    <div class="row">
        <div class="col-md-3">
            <h2 class="title"> Filtros </h2>
            <filters></filters>
        </div>
        <div class="col-md-8">
            <h2 class="title"> Listado de anuncios </h2>
            <announcement-list></announcement-list>
        </div>
    </div>

@endsection
