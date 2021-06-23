@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Form') }}</div>
        <div class="card-body">
          <h1>Submitted</h1>
          <form>
            <fieldset disabled>
              <div class="form-group">
                <label>Nama</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->name }}"
                >
              </div>
              <div class="form-group">
                <label>Foto KTM</label> <br>
                <img src="{{ asset($contestant->image()) }}" width="650">
              </div>
              <div class="form-group">
                <label>Nama Kampus</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->campus_name }}"
                >
              </div>
              <div class="form-group">
                <label>Provinsi Asal Kampus</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->campus_province }}"
                >
              </div>
              <div class="form-group">
                <label>Kota Asal Kampus</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->campus_city }}"
                >
              </div>
              <div class="form-group">
                <label>Alamat pada KTP</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->id_card_address }}"
                >
              </div>
              <div class="form-group">
                <label>Alamat Domisili</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->residence_address }}"
                >
              </div>
              <div class="form-group">
                <label>No. Whatsapp</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->phone }}"
                >
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->birth_date }}"
                >
              </div>
              <div class="form-group">
                <label>URL Video Instagram</label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->instagram_video_url }}"
                >
              </div>
              <div class="form-group">
                <label>
                  Apa yang bisa kamu lakukan untuk lingkungan yang lebih baik untuk masa kini dan masa depan
                </label>
                <input 
                  type="text"
                  class="form-control"
                  value="{{ $contestant->description }}"
                >
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
