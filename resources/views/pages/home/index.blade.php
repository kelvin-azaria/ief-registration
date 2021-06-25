@extends('layouts.user')

@section('content')
<section id="landing" class=" m-responsive">
  <div class="container p-1rem">
    <div class="row">
      <div class="col-md-6 mt-1rem align-self-center">
        <img class="w-100 side-image" src="{{ asset('img/youth-camp-logo.png') }}" alt="youth-camp-logo">
      </div>
      <div class="col-md-6 mt-1rem">
        <p>Program sosialisasi dan induksi kepada  Generasi Muda untuk meningkatkan pengetahuan dan aksi nyata perlindungan lingkungan hidup yang di-launching pada peringatan World Environment Day 2021 oleh IEF</p>
        <a class="btn btn-primary my-3 font-weight-bold text-capitalize p-4" href="{{ url('/') }}#about" role="button">pelajari lebih lanjut</a>
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
  <img src="{{ asset('img/green-background-head-1.svg') }}" alt="">
</div>
<section id="about" class="relative-pos bg-green text-white">
  {{-- <img class="bg-image" src="{{ asset('img/green-background-1.svg') }}" alt=""> --}}
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 text-center">
        <h3 class="text-white my-3 font-weight-bolder">Tentang IEF</h3>
        <p>Badan Pengelola Dana Lingkungan Hidup (BPDLH) didirikan sebagai amanat dari Peraturan Pemerintah nomor 46 tahun 2017 Pasal 30, yaitu bahwa pengelolaan pendanaan lingkungan hidup yang berasal dari dana penanggulangan pencemaran dan/atau kerusakan dan pemulihan lingkungan hidup dan dana amanah/bantuan konservasi dikelola oleh pemerintah pusat melalui mekanisme pola pengelolaan keuangan badan layanan umum. Amanat tersebut kemudian diturunkan melalui Peraturan Presiden nomor 77 tahun 2018 tentang Pengelolaan Dana Lingkungan Hidup Pasal 8 dan Pasal 10 bahwa organisasi pengelolaan dana lingkungan hidup berbentuk Badan Layanan Umum yang diarahkan oleh 10 (sepuluh) Menteri, yaitu Menteri Koordinator Bidang Perekonomian, Menteri Lingkungan Hidup dan Kehutanan, Menteri Keuangan, Menteri Dalam Negeri, Menteri Energi dan Sumber Daya Mineral, Menteri Perhubungan, Menteri Pertanian, Menteri Perencanaan Pembangunan Nasional/Kepala Badan Perencana Pembangunan Nasional, Menteri Perindustrian, dan Menteri Kelautan dan Perikanan.</p>
      </div>
    </div>
  </div>
</section>
<div class="background-tail-img">
  <img src="{{ asset('img/green-background-bottom-1.svg') }}" alt="">
</div>

<section id="contest" class="py-3">
  <div class="container p-1rem">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="image-container px-4">
          <img height="20rem" src="{{ asset('img/jumbotron-background.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div>
          <h1 class="section-title text-uppercase w-100 text-center my-2">Video Contest</h1>
          <p class="outline-pill text-center font-weight-bold">Generasi Muda, Generasi Youngvironment</p>
        </div>
        <p class="pb-1">Sampaikan Pesan dan kepedulianmu terhadap lingkungan, upload aksi kamu dan jadilah Youngvironment</p>
        <a class="btn btn-primary w-100 text-center p-3 font-weight-bold my-3" href="{{ route('contestant.create') }}" role="button">Registrasi</a>
      </div>
    </div>
  </div>
</section>

<section id="siteVisits" class=" m-responsive">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-5">-- camp activities --</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 p-4 align-self-center high-line-height">
        <ol>
          <li><span class="text-green font-weight-bold">Jakarta</span><span class="text-small"> (TPA Bantar Gebang, TWA  Angke, Kapuk, TransJakarta - MRT)</span></li>
          <li><span class="text-green font-weight-bold">Bogor</span> <span  class="text-small"> (Recycling Center Bogor,	Rehabilitasi Elang)</span></li>
          <li><span class="text-green font-weight-bold">Garut</span> <span  class="text-small"> (Sekolah Kopi Sunda Hejo, Perkebunan Kopi, Tanaman Obat Ciwidey)</span></li>
          <li><span class="text-green font-weight-bold">Surabaya</span> <span  class="text-small"> (ITS Surabaya (konservasi energi & lingkungan), TPA Benowo, Pusat Daur Ulang Jambangan)</span></li>
          <li><span class="text-green font-weight-bold">Medan</span>  <span  class="text-small"> (Bank Sampah Sicanang, PLTBG, Ekowisata Danau Toba)</span></li>
          <li><span class="text-green font-weight-bold">Makassar</span>  <span  class="text-small"> (Bank Sampah Induk Kota Makassar, PLTB Sidrap, TN Bantimurung)</span></li>
          <li><span class="text-green font-weight-bold">Mataram</span>  <span  class="text-small"> (PLTU Jeranjang, TPA Kota Mataram, Pengelolaan Sampah Berbasis Masyarakat Hj. Ummi Ningsih)</span></li>
          <li><span class="text-green font-weight-bold">Manado</span>  <span  class="text-small"> (Bank Sampah Induk Kota Makassar, PLTB Sidrap, TN Bantimurung)</span></li>
        </ol>
      </div>
      <div class="col-md-6 font-weight-bold">
        <p class="free-pill text-uppercase">Free!</p>
        <h1 class="section-title text-capital">Site Visit</h1>
        <div class="row">
          <div class="col"><p><span class="pill">Lokasi</span> 8 lokasi</span> </p></div>
          <div class="col"><p><span class="pill">Sifat</span> Offline</p></div>
        </div>
        <div class="row">
          <div class="col min-h-50 align-self-center">
            <div class="image-round-container">
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
  </div>
</section>

<div class="background-tail-img">
  <img src="{{ asset('img/green-background-head-1.svg') }}" alt="">
</div>
<section id="onlineClass" class=" py-3 bg-green text-white">
  <div class="container p-1rem">
    <div class="row">
      <div class="col-md-6 font-weight-bold">
        <p class="free-pill text-uppercase">Free!</p>
        <h1 class="section-title text-capital text-white">Online Class</h1>
        <div class="row">
          <div class="col"><p><span class="pill pill-dark">Durasi</span> 4 hari</p></div>
          <div class="col"><p><span class="pill pill-dark">Sifat</span> Offline</p></div>
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
          <li>Youth Activism in Addressing Eco-Socio-Environment Issues</li>
          <li>Sustainable Finance for Sustainable Livelihood</li>
          <li>Fight Againts Climate Change, Save The Earth</li>
          <li>Waste Management for People and Economy</li>
          <li>Renewable Energy is Our Future</li>
          <li>Forest, Ecosystem, Economy, and Us</li>
          <li>Social Media Nowadays and Yours</li>
          <li>Building a Personal Branding</li>
        </ol>
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
        <h3 class="pill pill-title-text text-center">Hadiah Pemenang</h3>
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
        <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center ">pendaftaran</h2>
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
        <h3 class="pill pill-title-text text-center">Total Hadiah</h3>
        <div class="row">
          <div class="col">
            <h3 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Daily Rewards</h3>
            <p class="text-center">5 Peserta yang mengupload content dengan pesan dan audiovisual terbaik mendapatkan reward berupa voucher @Rp100 ribu</p>
            <h3 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Champion</h3>
            <div class="row text-center">
              <div class="col text-green font-weight-bold">Juara 1</div>
              <div class="col">Rp 10,000,000,-</div>
            </div>
            <div class="row text-center">
              <div class="col text-green font-weight-bold">Juara 2</div>
              <div class="col">Rp 7,000,000,-</div>
            </div>
            <div class="row text-center">
              <div class="col text-green font-weight-bold">Juara 3</div>
              <div class="col">Rp 4,000,000,-</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-4">Dapatkan</h2>
        <ul>
          <li>76 Peserta terpilih akan difollow akun instagram resmi Kemenkeu</li>
          <li>Kesempatan menghadari IEF Expose yang akan dihadiri oleh para menteri</li>
          <li>Kegiatan Site Visit dengan protokol kesehatan ketat selama 5 hari secara gratis (akomodasi dan biaya lain yang timbul akan ditanggung oleh BPDLH)</li>
          <li>Online Class dengan narasumber profesional</li>
          <li>Daily Reward, Pemenang Favorit, dan Grand Reward</li>
          <li>Seminar KIT</li>
        </ul>
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
        <ul>
          <li>Kompetisi Youth Camp terbuka untuk seluruh mahasiswa/mahasiswi berumur 18 – 25 tahun</li>
          <li>Peserta merupakan Warga Negara Indonesia yang memiliki kartu tanda penduduk resmi dan kartu mahasiswa yang masih berlaku</li>
          <li>Peserta memiliki akun media sosial Instagram</li>
          <li>Akun peserta tidak boleh dikunci (private)</li>
        </ul>
      </div>
    </div>
    <div class="row ">
      <div class="col">
        <h2 class="text-capitalize font-weight-bold subsection-title w-100 text-center my-5">-- Ketentuan Pendaftaran --</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <ul>
          <li>Peserta wajib mengisi form pendaftaran di <a href="//youthcamp.bpdlh.id">youthcamp.bpdlh.id</a>	</li>
          <li>Peserta wajib membuat kreasi digital berupa video dengan durasi maksimal 60 detik yang sesuai dengan tema "Jika Aku Menjadi #YoungVironMen"</li>
          <li>Peserta wajib menyertakan caption pada karya video yang diposting	</li>
          <li>Peserta merupakan pemilik VIDEO yang resmi dan merupakan ide dan gagasan diri sendiri (original)</li>
          <li>Peserta wajib:
            <ul>
              <li>Follow akun instagram official @bpdlh.id</li>
              <li>Tag akun instagram Official @bpdlh.id	</li>
              <li>Tag minimal ke 5 teman</li>
            </ul>
          </li>
          <li>Postingan video wajib menggunakan hashtag <span class="long-hashtag text-green">#YouthCamp#YoungVironMen#bpdlhid#MudaPeduliLingkungan</span></li>
          <li>Seluruh video yang telah disubmit peserta akan menjadi hak milik BPDLH</li>
          <li>Periode pendaftaran dan posting dimulai tanggal 26 Juni sampai dengan 04 Juli 2021</li>
          <li>Kompetisi ini tidak dipungut biaya apapun (gratis)</li>
          <li>Keputusan panitia dan dewan juri tidak dapat diganggu gugat.</li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
