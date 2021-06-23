@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Home') }}</div>
        <div class="card-body text-center">
          <a href="{{ route('contestant.create') }}" class="btn btn-primary">Daftar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
