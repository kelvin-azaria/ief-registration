@extends('layouts.user')

@section('content')
<section id="banner">
  <div class="container-fluid p-0">
    <div class="jumbotron text-center text-white">
      <h1 class="display-4">Youth Camp for Future Leader on Environment</h1>
      <p class="lead">Crash Program</p>
      <hr class="my-4">
      <a class="btn btn-primary btn-lg" href="#" role="button">Join Program</a>
    </div>
  </div>
</section>
<section class="my-10" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 align-self-center">
        <h1 class="w-100">Youngvironment</h1>
        <p>Program sosialisasi dan induksi kepada  Generasi Muda untuk meningkatkan pengetahuan dan aksi nyata perlindungan lingkungan hidup yang di-launching pada peringatan World Environment Day 2021 oleh IEF</p>
      </div>
      <div class="col-lg-8">
        <div class="row">
          <div class="col-md my-2">
            <div class="card card-size">
              <img src={{asset('img/ief-logo.png')}} alt="Logo" class="card-img-top card-img-size" alt="ief Logo">
              <div class="card-body">
                <h5 class="card-title">IEF</h5>
                <p class="card-text">institusi pemerintah yang ditugasi mengelola dana lingkungan hidup.</p>
              </div>
            </div>
          </div>
          <div class="col-md my-2">
            <div class="card card-size">
              <img src="{{asset('img/taking-care-of-the earth-pana.svg')}}" class="card-img-top card-img-size" alt="taking-care-of-the earth-pana">
              <div class="card-body">
                <h5 class="card-title">World Environment Day</h5>
                <p class="card-text">Momen untuk mendorong kepedulian terhadap lingkungan hidup.</p>
              </div>
            </div>
          </div>
          <div class="col-md my-2">
            <div class="card card-size">
              <img src="{{asset('img/k-pop-band-rafiki.svg')}}" class="card-img-top card-img-size" alt="k-pop-band-rafiki">
              <div class="card-body">
                <h5 class="card-title">Generasi Muda</h5>
                <p class="card-text">Agen pembangunan dan pemimpin masa depan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-10" id="topic">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="w-100 text-capitalize">kategori yang dapat di ikuti</h1>
        <p>Peserta mendaftar secara online dengan mengupload video bertema “Jika Aku menjadi Youngvironment” pada salah satu topik:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/hazardous-waste-rafiki.svg')}}" class="card-img-top card-img-size" alt="hazardous-waste-rafiki">
          <div class="card-body">
            <p class="card-text text-center">Waste Management</p>
          </div>
        </div>
      </div>
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/ecosystem-rafiki.svg')}}" class="card-img-top card-img-size" alt="ecosystem-rafiki">
          <div class="card-body">
            <p class="card-text text-center">Ecosystem Restoration</p>
          </div>
        </div>
      </div>
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/world-bicycle-day-rafiki.svg')}}" class="card-img-top card-img-size" alt="world-bicycle-day-rafiki">
          <div class="card-body">
            <p class="card-text text-center">Fight Against Climate Change</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/environmental-study-bro.svg')}}" class="card-img-top card-img-size" alt="environmental-study-bro">
          <div class="card-body">
            <p class="card-text text-center">Social Forestry</p>
          </div>
        </div>
      </div>
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/environment-cuate.svg')}}" class="card-img-top card-img-size" alt="environment-cuate">
          <div class="card-body">
            <p class="card-text text-center">Renewable Energy</p>
          </div>
        </div>
      </div>
      <div class="col-md my-2">
        <div class="card card-size">
          <img src="{{asset('img/finance-bro.svg')}}" class="card-img-top card-img-size" alt="finance-bro">
          <div class="card-body">
            <p class="card-text text-center">Sustainable Finance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-10" id="reward">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Daily Rewards</h1>
        <p class="my-5">5 Peserta yang mengupload content dengan pesan dan audiovisual terbaik mendapatkan reward berupa voucher @Rp100 ribu</p>
      </div>
      <div class="col-md-8">
        <h1>Champion</h1>

        <div class="row text-center my-5">
          <div class="col-md-4"><h5>Rp 4 000 000 ,-</h5></div>
          <div class="col-md-4"><h4> Rp 7 000 000 ,-</h4></div>
          <div class="col-md-4"><h3>Rp 10 000 000,-</h3> </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="my-5" id="activities">
  <div class="container">
    <div class="row">
      <h1 class="text-center text-capitalize w-100">in (online) activity</h1>
    </div>
    <div class="row">
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div>
  </div>
</section>
<section class="my-5" id="challenge">
</section> --}}
{{-- <section class="my-5" id="siteVisitLocation">

</section> --}}
<section class="mt-10" id="termsAndCondition">
  <div class="container">
    <div class="row my-5">
      <div class="col">
        <h1 class="text-center w-100 my-3">Persyaratan Umum</h1>
        <ul>
          <li>Kompetisi Youth Camp terbuka untuk seluruh mahasiswa : Mahasiswa/i berumur 18 – 23 tahun</li>
          <li>warga Indonesia yang memiliki kartu tanda penduduk resmi atau kartu mahasiswa yang masih berlaku.</li>
          <li>Seluruh peserta kompetisi ini tidak dipungut biaya pendaftaran.</li>
          <li>Peserta  wajib membuat	kreasi digital yang sesuai dengan tema Jika Aku menjadi Youngvironmen </li>
        </ul>
      </div>
    </div>
    <div class="row my-5">
      <div class="col">
        <h1 class="text-center w-100 my-3">Syarat dan Ketentuan Kompetisi</h1>
        <ul>
          <li>Peserta wajib memposting hasil video ke Instagram peserta, buat caption yang menarik tentang karya tersebut, lalu tag dan mention @bpdlh.id dengan hashtag #YouthCamp #youngvironmen #bpdlhid #Kitamudakitabisa Peserta wajib follow akun media sosial Official BPDLH ID</li>
          <li>Peserta merupakan pemilik VIDEO yang resmi untuk kompetisi ini dan merupakan ide dan gagasan diri sendiri (original).</li>
          <li>Videografi yang disubmit sepenuhnya akan menjadi hak milik BPDLH</li>
          <li>Periode submit mulai tanggal…..</li>
          <li>Keputusan panitia tidak dapat diganggu gugat.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

{{-- <div class="container">
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
</div> --}}
@endsection
