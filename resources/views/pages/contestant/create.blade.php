@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 align-self-center">
      <h1 class="text-capitalize my-3 text-center">Form Pendaftaran</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 my-3 round-border">
      <form method="POST" action="{{ route('contestant.store') }}" 
          enctype="multipart/form-data">
          @csrf
            
          @include('pages.contestant._form')

        <button type="submit" class="btn btn-success btn-block">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection
