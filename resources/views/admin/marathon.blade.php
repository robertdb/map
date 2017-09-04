@extends('layouts.master_admin')

@section('content')

<h1>Marathon map</h1>

<div class="container">

      <div id="map">

      </div>

    {!! Form::open(array('url' => 'foo/bar')) !!}

      {!! Form::Label('Carrera','name') !!}

      {!! Form::select('carrera',$marathonName,null,['id' => 'name']) !!}

    {!! Form::close() !!}

</div>
@endsection
