@extends('layouts.user')

@section('content')
<div class="landing-page">
  <section id="landing">
    <div class="container p-1rem">
      <div class="row mt-1rem justify-content-between ">
        <div class="col-md-5 align-self-center my-4">
          <img class="w-100" src="{{ asset('img/yc-logo.png') }}" alt="youth-camp-logo">
        </div>
        <div class="col-md-6 my-4">
          <h1 class="font-weight-bold dark-text-green my-4 title-text">Kalian Pemuda yang Peduli Lingkungan?</h1>
          <p class="my-4">Yuk ikuti Program menarik dari Youth Camp yang pastinya sayang banget untuk dilewatkan.</p>
          <a class="btn cta-button my-3 font-weight-bold text-capitalize p-4" href="{{ url('/') }}#about" role="button">pelajari lebih lanjut <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section id="support" class=" m-responsive m-minus">
    <div class="container p-1rem">
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <h1 class="font-weight-bold text-muted w-100 text-center pb-2 support-text">Supported By:</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-6">
          <img class="w-100 px-3" src="{{ asset('img/kemenkeu-ief-logo.png') }}" alt="kemenkeu-ief-logo">
        </div>
      </div>
    </div>
  </section>

  <div class="background-tail-img">
    <svg viewBox="0 0 1440 222" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <g filter="url(#filter0_d)">
      <path d="M0 76C565.042 212.332 880.189 205.279 1440 76V655.484C1440 655.484 1189.56 726.422 1018.5 747.5C759.782 779.379 629.631 642.259 370 655.484C216.626 663.296 0 850 0 850V76Z" fill="#32631A"/>
      </g>
      <g filter="url(#filter1_d)">
      <path d="M0 117C565.042 225.174 880.189 219.577 1440 117V550.292C1440 550.292 1177.56 668.776 1006.5 685.5C747.782 710.795 635.131 627.507 375.5 638C222.126 644.199 0 809 0 809V117Z" fill="#2B8E29"/>
      </g>
      </g>
      <defs>
      <filter id="filter0_d" x="-64" y="36" width="1568" height="902" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
      <feOffset dy="24"/>
      <feGaussianBlur stdDeviation="32"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
      </filter>
      <filter id="filter1_d" x="-64" y="77" width="1568" height="820" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
      <feOffset dy="24"/>
      <feGaussianBlur stdDeviation="32"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
      </filter>
      <clipPath id="clip0">
      <rect width="1440" height="222" fill="white"/>
      </clipPath>
      </defs>
    </svg>
  </div>
  <section id="about" class="relative-pos bg-green text-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 text-center">
          <h3 class="text-white my-4 title-text font-weight-bolder">Tentang IEF</h3>
          <p>Badan Pengelola Dana Lingkungan Hidup (BPDLH) didirikan sebagai amanat dari Peraturan Pemerintah nomor 46 tahun 2017 Pasal 30, yaitu bahwa pengelolaan pendanaan lingkungan hidup yang berasal dari dana penanggulangan pencemaran dan/atau kerusakan dan pemulihan lingkungan hidup dan dana amanah/bantuan konservasi dikelola oleh pemerintah pusat melalui mekanisme pola pengelolaan keuangan badan layanan umum. Amanat tersebut kemudian diturunkan melalui Peraturan Presiden nomor 77 tahun 2018 tentang Pengelolaan Dana Lingkungan Hidup Pasal 8 dan Pasal 10 bahwa organisasi pengelolaan dana lingkungan hidup berbentuk Badan Layanan Umum yang diarahkan oleh 10 (sepuluh) Menteri, yaitu Menteri Koordinator Bidang Perekonomian, Menteri Lingkungan Hidup dan Kehutanan, Menteri Keuangan, Menteri Dalam Negeri, Menteri Energi dan Sumber Daya Mineral, Menteri Perhubungan, Menteri Pertanian, Menteri Perencanaan Pembangunan Nasional/Kepala Badan Perencana Pembangunan Nasional, Menteri Perindustrian, dan Menteri Kelautan dan Perikanan.</p>
          <p>Selanjutnya, melalui PMK 137/PMK.01/2019 sebagaimana telah diubah dengan PMK Nomor 24/PMK.01/2021 tentang Organisasi dan Tata Kerja Badan Pengelola Dana Lingkungan Hidup dijelaskan bahwa unit organisasi yang melaksanakan pengelolaan dana lingkungan hidup adalah unit organisasi non eselon yang dibentuk oleh Menteri Keuangan dengan menggunakan pola pengelolaan keuangan Badan Layanan Umum (BLU). Dalam pelaksanaan kegiatan penghimpunan dan penyaluran dana dapat menggunakan nomenklatur Indonesian Environment Fund (IEF).</p>
        </div>
      </div>
    </div>
  </section>
  <div class="background-cream">{{-- cream-color --}}
  <div class="background-tail-img">
    <img src="{{ asset('img/green-background-bottom-1.svg') }}" alt="">
  </div>

  <section id="contest" class="py-3">
    <div class="container p-1rem">
      <div class="row justify-content-center">
        <div class="col align-self-center">
          <h1 class="outline-pill text-center font-weight-bold pill-title-text">Generasi Muda, Generasi YoungVironMen<h1>
        </div>
      </div>
      <div class="row my-3 justify-content-center">
        <div class="col align-self-center">
          <div class="image-container py-4">
            <img height="20rem" src="{{ asset('img/yc-logo.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="row justify-content-center my-3">
        <div class="col align-self-center">
          <div class="my-5">
            <h3 class="font-weight-bold text-muted w-100 text-center">Sampaikan Pesan dan Kepedulianmu Terhadap Lingkungan</h3>
            <p class="font-weight-bold text-green w-100 text-center my-2"> Upload aksi kamu dan jadilah YoungVironMen</p>
          </div>
          <a class="btn cta-button w-100 text-center p-3 font-weight-bold my-3" href="{{ route('contestant.create') }}" role="button">Registrasi Gratis <i class="px-2 fas fa-pen-alt"></i></a>
        </div>
      </div>
    </div>
  </section>

  <section id="siteVisits">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-5">-- camp activities --</h2>
        </div>
      </div>
      <div class="row justify-content-between">
        {{-- <div class="col-md-6 p-4 align-self-center high-line-height">
          <ol>
            <li><span class="text-green font-weight-bold">Jakarta</span><span class="text-small"> (TPA Bantar Gebang, TWA  Angke, Kapuk, TransJakarta - MRT)</span></li>
            <li><span class="text-green font-weight-bold">Bogor</span> <span  class="text-small"> (Recycling Center Bogor,	Rehabilitasi Elang)</span></li>
            <li><span class="text-green font-weight-bold">Garut</span> <span  class="text-small"> (Sekolah Kopi Sunda Hejo, Perkebunan Kopi, Tanaman Obat Ciwidey)</span></li>
            <li><span class="text-green font-weight-bold">Surabaya</span> <span  class="text-small"> (ITS Surabaya (konservasi energi & lingkungan), TPA Benowo, Pusat Daur Ulang Jambangan)</span></li>
            <li><span class="text-green font-weight-bold">Medan</span>  <span  class="text-small"> (Bank Sampah Sicanang, PLTBG, Ekowisata Danau Toba)</span></li>
            <li><span class="text-green font-weight-bold">Makassar</span>  <span  class="text-small"> (Bank Sampah Induk Kota Makassar, PLTB Sidrap, TN Bantimurung)</span></li>
            <li><span class="text-green font-weight-bold">Mataram</span>  <span  class="text-small"> (PLTU Jeranjang, TPA Kota Mataram, Pengelolaan Sampah Berbasis Masyarakat Hj. Ummi Ningsih)</span></li>
            <li><span class="text-green font-weight-bold">Manado</span>  <span  class="text-small"> (Desa Proklim, PLTP Lahendong,	TN Bunaken)</span></li>
          </ol>
        </div> --}}
        <div class="col font-weight-bold">
          <p class="free-pill text-uppercase">Tanpa Dipungut Biaya Apapun!</p>
          <h1 class="title-text dark-text-green font-weight-bold text-capital">Site Visit</h1>
          <div class="row">
            <div class="col-auto"><p><span class="pill">Lokasi</span> 9 lokasi</span> </p></div>
            <div class="col"><p><span class="pill">Sifat</span> Offline</p></div>
          </div>
          <div class="row">
            <div class="col align-self-center">
              <div class="image-container my-4">
                <img src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center"><p><span class="pill">Durasi</span> 5 hari</p></div>
          </div>
          <div class="row">
            <div class="col text-center text-small"><p>(2 Hari Perjalanan 3 Hari Kunjungan)</p></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center text-center text-muted font-weight-bold">
        Jakarta • Bogor • Cirebon dan Kuningan • Garut • Surabaya • Medan • Mataram • Makassar • Balikpapan
      </div>
    </div>
  </section>

  <div class="background-tail-img">
    <svg viewBox="0 0 1440 222" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0)">
      <g filter="url(#filter0_d)">
      <path d="M0 76C565.042 212.332 880.189 205.279 1440 76V655.484C1440 655.484 1189.56 726.422 1018.5 747.5C759.782 779.379 629.631 642.259 370 655.484C216.626 663.296 0 850 0 850V76Z" fill="#32631A"/>
      </g>
      <g filter="url(#filter1_d)">
      <path d="M0 117C565.042 225.174 880.189 219.577 1440 117V550.292C1440 550.292 1177.56 668.776 1006.5 685.5C747.782 710.795 635.131 627.507 375.5 638C222.126 644.199 0 809 0 809V117Z" fill="#2B8E29"/>
      </g>
      </g>
      <defs>
      <filter id="filter0_d" x="-64" y="36" width="1568" height="902" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
      <feOffset dy="24"/>
      <feGaussianBlur stdDeviation="32"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
      </filter>
      <filter id="filter1_d" x="-64" y="77" width="1568" height="820" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
      <feOffset dy="24"/>
      <feGaussianBlur stdDeviation="32"/>
      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
      </filter>
      <clipPath id="clip0">
      <rect width="1440" height="222" fill="white"/>
      </clipPath>
      </defs>
    </svg>
  </div>
  </div>{{-- cream-color --}}
  <section id="onlineClass" class=" py-3 bg-green text-white">
    <div class="container p-1rem">
      <div class="row justify-content-between">
        <div class="col-md-5 font-weight-bold">
          <p class="free-pill text-uppercase">Tanpa Dipungut Biaya Apapun!</p>
          <h1 class="title-text text-white font-weight-bold text-capital">Online Class</h1>
          <div class="row">
            <div class="col"><p><span class="pill pill-dark tablet-size-pill">Durasi</span> 4 hari</p></div>
            <div class="col"><p><span class="pill pill-dark tablet-size-pill">Sifat</span> Offline</p></div>
          </div>
          <div class="row">
            <div class="col min-h-50 align-self-center">
              <div class="image-round-container">
                <img src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col text-center"><p><span class="pill pill-dark">Materi</span> @90 menit</p></div>
          </div>
        </div>
        <div class="col-md-6 align-self-center font-weight-bold high-line-height">
          <ol>
            <li>Sustainable Finance for Now and Future</li>
            <li>Youth Activism in Addressing Eco-Socio-Environment Issues</li>
            <li>Waste Management for People and Economy</li>
            <li>Local & Indigenous Peoples and Their Protection of Environment</li>
            <li>Renewable Energy is Our Future</li>
            <li>Building a Personal Branding</li>
            <li>Forest, Ecosystem, Economy, and Us</li>
            <li>Social Media Nowadays and Yours</li>
            <li>Road to Site Visit</li>
          </ol>
        </div>
      </div>
      <div class="row justify-content-center my-5">
        <div class="col">
          <p class="text-white text-small text-center font-weight-bold">* Jika terjadi perubahan, akan diinformasikan kepada peserta *</p>
        </div>
      </div>
    </div>
  </section>
  <div class="background-tail-img">
    <img src="{{ asset('img/green-background-bottom-1.svg') }}" alt="">
  </div>

  <section id="rewards">
    <div class="container p-1rem">
      <div class="row justify-content-between">
        <div class="col-md-5">
          <h3 class="pill pill-title-text text-center font-weight-bold dark-text-green bg-light-green">Prizes</h3>
          <div class="row">
            <div class="col-sm-6">
              <div class="image-round-container">
                <img src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
              </div>
              <p class="text-center">Tabungan pendidikan</p>
            </div>
            <div class="col-sm-6">
              <div class="image-round-container">
                <img src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
              </div>
              <p class="text-center">Voucher</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">pendaftaran</h2>
          <p>Calon Peserta mendaftar secara online dengan mengupload video bertema 
            <span class="text-green font-weight-bold">“Jika Aku menjadi Youngvironment”</span> 
            pada salah satu topik:
            </p>
          <ul>
            <li>Waste Management</li>
            <li>Ecosystem Restoration</li>
            <li>Fight Against Climate Change</li>
            <li>Social Forestry</li>
            <li>Renewable Energy</li>
            <li>Sustainable Finance</li>
          </ul>
        </div>
      </div>
      <div class="row class mt-5 justify-content-between">
        <div class="col-md-5">
          <h3 class="pill pill-title-text text-center font-weight-bold dark-text-green bg-light-green">Total Hadiah</h3>
          <div class="row mb-3">
            <div class="col">
              <h3 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Daily Rewards</h3>
              <p class="text-center">5 Peserta yang mengupload content dengan pesan dan audiovisual terbaik mendapatkan reward berupa voucher @Rp100 ribu</p>
              <h3 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Winner</h3>
              <div class="row text-center pb-3">
                <div class="col text-green font-weight-bold">Juara 1</div>
                <div class="col">Rp 13,000,000,-</div>
              </div>
              <div class="row text-center pb-3">
                <div class="col text-green font-weight-bold">Juara 2</div>
                <div class="col">Rp 9,000,000,-</div>
              </div>
              <div class="row text-center pb-3">
                <div class="col text-green font-weight-bold">Juara 3</div>
                <div class="col">Rp 5,000,000,-</div>
              </div>
              <div class="row text-center pb-3">
                <div class="col text-green font-weight-bold">Juara Favorit <br>(3 orang)</div>
                <div class="col">Rp 1,000,000,-</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Benefits</h2>

          <ul>
            <li class="pb-2">Seluruh Peserta mendapatkan
              <ul>
                <li>exclusive classes dari Leading Experts (kelas daring)</li>
                <li>Berkunjung ke lokasi terkait lingkungan hidup (kunjungan lapangan),dan</li>
                <li>Sertifikat keikutsertaan</li>
              </ul>
            </li>
            <li class="pb-2">5 Pemenang daily challenges mendapatkan @Rp100.000.</li>
            <li class="pb-2">3 Peserta dengan content yang mendapatkan jumlah “Like” paling banyak s.d. tanggal 15 Agustus 2021 ditetapkan sebagai Juara Favorit</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="timeline">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-5">-- Timeline --</h2>
        </div>
      </div>
      <div class="row justify-content-between">
        <div class="col font-weight-bold">
          <div class="row">
            <div class="col align-self-center">
              <div class="image-container my-4">
                <img src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="terms" class="m-responsive">
    <div class="container border-top">
      <div class="row">
        <div class="col">
          <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-5">-- Syarat Pendaftaran --</h2>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="text-center">Untuk detail lebih lajut mengenai syarat dan ketentuan silahkan download booklet dibawah</p>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <a class="btn cta-button my-3 font-weight-bold text-capitalize p-4" href="{{ route('download.booklet','booklet.docx') }}#about" role="button">
            Unduh Booklet <i class="fa fa-angle-double-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
