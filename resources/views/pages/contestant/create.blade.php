@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Form') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('contestant.store') }}" 
                enctype="multipart/form-data">
            @csrf
            
            @include('pages.contestant._form')

            <button type="submit" class="btn btn-success btn-block">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
