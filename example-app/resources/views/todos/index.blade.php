@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
      <form action="{{ route('todos') }}" method="POST" enctype="multipart/form-data">

          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">tarea</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">


              
            </div>
           
            
            <button type="submit" class="btn btn-primary">crear tarea</button>
          </form>
    </div>
@endsection
