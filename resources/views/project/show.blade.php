@extends('layout')
@section('cont')
  {{-- <bold>County area</bold> --}}
  <h1> {{ $inchi-> title }} </h1>

  <div class="content"> {{ $inchi->description }} </div>

  {{-- <input type="button" class="btb btn-info" href="./{{ $inchi->id }}/edit"  value="edit"/> --}}
  <a href="../{{ $inchi->id }}/edit" class="btn btn-info" role="button">Edit</a>
  


@endsection