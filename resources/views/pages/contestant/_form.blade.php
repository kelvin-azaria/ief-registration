@component('components.errors')
@endcomponent

<div class="form-group">
  <label>Nama</label>
  <input 
    type="text" 
    name="name" 
    class="form-control"
    placeholder="Masukan nama peserta anda"
    value="{{ old('name',$contestant->name ?? null) }}"/>
</div>

{{-- Kampus --}}
<div class="form-group">
  <label>Nama Kampus Asal</label>
  <input 
    type="text"
    name="campus_name" 
    class="form-control"
    placeholder="Masukan nama dari kampus asal anda"
    value="{{ old('campus_name', $contestant->campus_name ?? null) }}"/>
</div>
<div class="form-group">
  <label>Provinsi Asal Kampus</label>
  <input 
    type="text"
    name="campus_province" 
    class="form-control"
    placeholder="Masukan provinsi asal kampus anda"
    value="{{ old('campus_province', $contestant->campus_province ?? null) }}"/>
</div>
<div class="form-group">
  <label>Kota Asal Kampus</label>
  <input 
    type="text"
    name="campus_city" 
    class="form-control"
    placeholder="Masukan nama kota asal kampus anda"
    value="{{ old('campus_city', $contestant->campus_city ?? null) }}"/>
</div>

{{-- ALAMAT KTP --}}
<div class="form-group">
  <label>Alamat KTP</label>
  <input 
    type="text"
    name="id_card_address" 
    class="form-control"
    placeholder="Masukan alamat lengkap yang tertera pada KTP anda"
    value="{{ old('id_card_address', $contestant->id_card_address ?? null) }}"/>
</div>

{{-- ALAMAT DOMISILI --}}
<div class="form-group">
  <label>Alamat Domisili</label>
  <input 
    type="text"
    name="residence_address" 
    class="form-control"
    placeholder="Masukan alamat tempat tinggal anda sekarang"
    value="{{ old('residence_address', $contestant->residence_address ?? null) }}"/>
</div>

{{-- NO HP --}}
<div class="form-group">
  <label>Nomor Whatsapp</label>
  <input 
    type="text"
    name="phone" 
    class="form-control"
    placeholder="Masukan nomor Whatsapp anda"
    value="{{ old('phone', $contestant->phone ?? null) }}"/>
</div>

{{-- TANGGAL LAHIR --}}
<div class="form-group">
  <label>Tanggal Lahir</label>
  <input 
    type="date"
    name="birth_date" 
    class="form-control"
    placeholder="Masukan tanggal lahir anda"
    value="{{ old('birth_date', $contestant->birth_date ?? null) }}"/>
</div>

{{-- URL VIDEO --}}
<div class="form-group">
  <label>Link Video Instagram</label>
  <input 
    type="text"
    name="instagram_video_url" 
    class="form-control"
    placeholder="Masukan link dari video instagram anda"
    value="{{ old('instagram_video_url', $contestant->instagram_video_url ?? null) }}"/>
</div>

{{-- ALASAN --}}
<div class="form-group">
  <label>
    Apa yang bisa kamu lakukan untuk lingkungan yang lebih baik untuk masa kini dan masa depan
  </label>
  <textarea 
    name="description" 
    cols="30" 
    rows="10"
  >{{ old('description', $contestant->description ?? null) }}</textarea>
  
</div>