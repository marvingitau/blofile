@extends('layout')
@section('cont')
  {{-- <bold>County area</bold> --}}
  <h1> {{ $inchi-> title }} </h1>

  <div class="content"> {{ $inchi->description }} <br>
  <a href="../{{ $inchi->id }}/edit" class="btn btn-info" role="button">Edit</a>
    </div>

  @if($inchi->tasks->count())
  <div >
    @foreach($inchi->tasks as $task)

    <form method="POST" action="../../tasks/{{ $task->id }}">
      @method("PATCH")
      @csrf
      
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" onchange="this.form.submit();">
            <label class="form-check-label" for="exampleCheck1">{{ $task->description }}</label><br>
          </div>
    </form>
     
    @endforeach

  </div>
  @endif

  {{-- <input type="button" class="btb btn-info" href="./{{ $inchi->id }}/edit"  value="edit"/> --}}
  
  


@endsection