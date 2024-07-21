@extends('template.master')

@section('content-master')
   <!-- Hero Section -->
   <section class="hero-section" id="beranda">
    <div class="container hero-content">
        <h1>Tingkatkan Performa Bisnis Anda</h1>
        <p>Semua solusi untuk mempermudah Training dan Upskiling karyawan di perusahaan Anda</p>
        <button class="btn btn-demo mt-4">Ajukan Demo</button>
    </div>
</section>

<!-- Partner Section -->
<section class="partner-section">
    <div class="container">
        <h2><strong>Telah Dipercaya oleh 10.000+ Profesional User dari</strong></h2>
        <div class="partner-logos">
            <img src="{{ asset('assets/img/ieg.png') }}" alt="Logo SCTC" class="img-fluid">
            <img src="{{ asset('assets/img/iep.png') }}" alt="Logo ID Cloud Host" class="img-fluid">
            <img src="{{ asset('assets/img/sctv.png') }}" alt="Logo SCTC" class="img-fluid">
            <img src="{{ asset('assets/img/emtek.png') }}" alt="Logo ID Cloud Host" class="img-fluid">
            <img src="{{ asset('assets/img/sicepat.png') }}" alt="Logo SCTC" class="img-fluid">
            <img src="{{ asset('assets/img/cloudhost.png') }}" alt="Logo ID Cloud Host" class="img-fluid">
            <img src="{{ asset('assets/img/adirect.png') }}" alt="Logo SCTC" class="img-fluid">
            <img src="{{ asset('assets/img/volta.png') }}" alt="Logo ID Cloud Host" class="img-fluid">
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="info-section" id="benefit">
    <div class="container">
        <h2><strong>Bagaimana Kelas Center Membantu Anda?</strong></h2>
        <p>Kami mengharapkan platform pembelajaran yang komprehensif untuk memberdayakan karyawan Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
        <div class="btn-group">
            <button class="btn btn-demo me-2">LMS</button>
            <button class="btn btn-outline btn-masuk">Featured</button>
            <button class="btn btn-outline btn-masuk">Video Learning + Live Webinar</button>
            <button class="btn btn-outline btn-masuk">Inquiry Learning</button>
        </div>

        <div class="row info-details">
            @foreach ($settings as $item)
            <div class="col-md-6 order-md-2 info-text">
                <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar" class="img-fluid">
            </div>
            <div class="col-md-6 order-md-1">

                <div class="card">
                    <h3><b>{{$item->title}}</b></h3>
                    <p>{{ $item->description }}</p>
                    <h5 class="card-header"><i style="color: green;" class="fa fa-check"></i> {{ $item->certificate }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $item->desc1 }}</p>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header"><i style="color: green;" class="fa fa-check"></i> {{ $item->boarding }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $item->desc2 }}</p>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header"><i style="color: green;" class="fa fa-check"></i> {{ $item->demand }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $item->desc3 }}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section>

<!-- Package Section -->
<section class="package-section" id="paket">
    <div class="container">
        <h2><strong>Pilihan Paket untuk di Kelas Center</strong></h2>

            <div class="row">
                @foreach ($package as $item)
                <div class="col-md-4">
                    <div class="package-card" style="text-align: left;">
                        <h3><i class="fa fa-lightbulb"></i> {{ $item->name }}</h3>
                        <ul>
                            <li> Kelebihan</li>
                            <li><i class="fa fa-circle-check"></i> {{ $item->package_name }}</li>
                            <li><i class="fa fa-circle-check"></i> {{ $item->max_users }}</li>
                            <li><i class="fa fa-circle-check"></i> {{ $item->charge_users }}</li>
                            <li><i class="fa fa-circle-check"></i> {{ $item->max_class_options }}</li>
                            <li><i class="fa fa-circle-check"></i> {{ $item->class_update_frequency }}</li>
                            <li>
                                <i class="fa fa-circle-check"></i>
                                <?php if ($item->certificate_included == 1): ?>
                                    Sertifikat
                                <?php elseif ($item->certificate_included == 0): ?>
                                    Tidak Sertifikat
                                <?php endif; ?>
                            </li>
                            <li>
                                <i class="fa fa-circle-check"></i>
                                <?php if ($item->free_consultation == 1): ?>
                                Konsultasi Gratis
                                <?php elseif ($item->free_consultation == 0): ?>
                                    Tidak Konsultasi Gratis
                                <?php endif; ?>
                            </li>
                            <li>
                                <i class="fa fa-circle-check"></i>
                                <?php if ($item->dedicated_assistant == 1): ?>
                                Dedicated assistant
                                <?php elseif ($item->dedicated_assistant == 0): ?>
                                    Tidak Dedicated assistant
                                <?php endif; ?>
                            </li>
                            <li>
                                <i class="fa fa-circle-check"></i>
                                <?php if ($item->full_support == 1): ?>
                                Full support 7x24 jam
                                <?php elseif ($item->full_support == 0): ?>
                                    Tidak Full support 7x24 jam
                                <?php endif; ?>
                            </li>

                        </ul>
                        <div class="price">
                            <div class="price-dashed"></div>
                            <span class="discount-price">Rp187.500</span>
                            <br> Rp{{ $item->price_per_month }}bulan
                        </div>
                        <button style="background-color: cadetblue; color: #1A1A1A;" class="btn btn-package">Pilih Paket</button>
                    </div>
                </div>
                @endforeach



            </div>



            <div class="container mt-5">
                <div class="custom-card">
                    <h3><i class="fas fa-building"></i> Enterprise </h3>
                    <p class="card-text">
                        <i class="fa fa-circle-check"></i> > 100 users <br>
                        <i class="fa fa-circle-check"></i> All Access Class <br>
                        <i class="fa fa-circle-check"></i> More Features
                    </p>
                    <button class="contact-button">Contact Us</button>
                </div>
            </div>




    </div>
</section>

<!-- News Section -->
<section class="news-section" id="kelas">
<div class="container">
    <h2>Lebih dari 2000+ Learning Video</h2>
    <p>Kami juga sudah menyediakan banyak pelatihan yang beragam, pelatihan disusun dan dibuat oleh tim kurikulum profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi.</p>
    <div class="btn-group">
        <button class="btn btn-primary">Kelas.com</button>
        <button class="btn btn-primary">Kelas.work</button>
        <button class="btn btn-primary">Bootcamp</button>
    </div>
    <!-- <div class="col-md-12"> -->
      <div class="row">
        @foreach ($learnings as $item)
        <div class="col-md-3 col-sm-6">
            <div class="card">

                <img src="https://img.youtube.com/vi/{{ $item->video }}/hqdefault.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title">{{ $item->name }}</p>
                    <p class="card-text">{{ $item->description }}
                    </p>
                 </div>
              </div>
        </div>
        @endforeach

    </div>
<!-- </div> -->
</section>

<!-- Enhancement Section -->
<section class="enhancement-section" style="background-color: #EEE5D8F2;">
<div class="container text-center py-5">
    <h2>Tingkatkan Kualitas Perusahaan Anda</h2>
    <p>Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat membantu dalam mengelola pelatihan dan membuat prosesnya lebih cepat dan lebih mudah.</p>
    <button class="btn btn-demo">Ajukan Demo</button>
</div>
</section>
@endsection
