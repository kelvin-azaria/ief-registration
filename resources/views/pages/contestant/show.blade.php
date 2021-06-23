@extends('layouts.user')

@section('content')
<div class="container">
  <div class="row my-5">
    <div class="col-md-12 round-border">
      <div class="row">
        <div class="col">
          <h1>Data Terkirim</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="image-container my-3">
            <img src="{{ asset($contestant->image()) }}" width="650">
          </div>
          <p class="text-muted m-0">Nama</p>
          <h2 class="mb-3">{{ $contestant->name }}</h2>
          <p class="text-muted m-0">Tanggal Lahir</p>
          <h3 class="mb-3">{{ $contestant->birth_date }}</h3>
        </div>
        <div class="col-md-5">
          <p class="text-muted m-0">Nama Kampus</p>
          <h5 class="mb-3">{{ $contestant->campus_name }}</h5>
          <p class="text-muted m-0">Provinsi Asal Kampus</p>
          <h5 class="mb-3">{{ $contestant->campus_province }}</h5>
          <p class="text-muted m-0">Kota Asal Kampus</p>
          <h5 class="mb-3">{{ $contestant->campus_city }}</h5>
          <p class="text-muted m-0">Alamat Pada KTP</p>
          <h5 class="mb-3">{{ $contestant->id_card_address }}</h5>
          <p class="text-muted m-0">Alamat Domisili</p>
          <h5 class="mb-3">{{ $contestant->residence_address }}</h5>
          <p class="text-muted m-0">Nomor WhatsApp</p>
          <h5 class="mb-3">{{ $contestant->phone }}</h5>
          <p class="text-muted m-0">Url Video Instagram</p>
          <h5 class="mb-3">{{ $contestant->instagram_video_url }}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-12 round-border small-radius">
          <p class="text-muted m-0">Apa yang bisa kamu lakukan untuk lingkungan yang lebih baik untuk masa kini dan masa depan</p>
          <h5 class="my-3">{{ $contestant->description }}</h5>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
