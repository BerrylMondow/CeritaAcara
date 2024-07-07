@extends('layouts.app')
@section('content')    
    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <img src="{{Vite::asset('resources/img/frame1.png')}}" width="400" class="hero-image" alt="">
          <h1>Setiap Acara Punya Cerita</h1>
          <p>
            Cerita Acara hadir untuk membantu mewujudkan setiap detail rancangan
            acara anda dengan sempurna.
          </p>
          <a href="#" class="hero-btn">Lihat Layanan</a>
        </div>
        <div class="hero-images">
            <img src="{{Vite::asset('resources/img/wed.png')}}" width="270" height="220" style="transform: rotate(-10deg); position: absolute; margin-right: 20px;" alt="Wedding Event">
            <img src="{{Vite::asset('resources/img/13.png')}}" width="240" style="transform: rotate(15deg); position: absolute; margin-left: 200px; margin-top: 30px;" alt="Seminar Event" />
            <img src="{{Vite::asset('resources/img/gat.png')}}" style="position: absolute; transform:rotate(-20deg); margin-left: 450px;" width="250" alt="Gathering Event" />
            <img src="{{Vite::asset('resources/img/product.png')}}" width="250" height="240" style="margin-left: 680px; transform:rotate(2deg); position: absolute;" alt="Product Launch" />
            <img src="{{Vite::asset('resources/img/exhi.png')}}" width="230" style="position: absolute; margin-left: 900px; transform:rotate(16deg);" alt="Exhibition" />
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <div class="about-content">
          <div class="about-text">
          <a class="about-title"><img src="{{Vite::asset('resources/img/info.png')}}" width="23" alt="">Tentang Cerita Acara</a>
          <p>
            Tim kami yang berpengalaman siap membantu Anda mengatur setiap
            detail acara dengan sempurna.
          </p>
          <a href="#" class="btn">Selengkapnya <img src="{{Vite::asset('resources/img/diagonal-arrow.svg')}}" alt=""></a>
        </div>
          <div class="about-image">
            <div class="about-ticket">
              
            </div>
            <div class="about-image1">
              <div class="ticket-background"></div>
              <img class="ticket-image" src="{{Vite::asset('resources/img/ion_ticket.png')}}" alt="ticket">
              <img class="image-parent" src="{{Vite::asset('resources/img/about-img1.png')}}" alt="">
          </div>
          <div class="about-image2">
            <img src="{{Vite::asset('resources/img/about-img2.png')}}" alt="">
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <div class="services-content">
        <div class="services-image">
          <img src="{{Vite::asset('resources/img/photo1.png')}}" alt="">
        </div>
        <div class="services-text">
        <a class="services-title"><img src="{{Vite::asset('resources/img/calendar.png')}}" width="24" alt="calendar"> Layanan Kami</a>
        <p class="service-content-paragraph-1">Nikmati kemudahan tanpa batas dalam mengelola acara penting anda.</p>
        <p class="service-content-paragraph-2">Kami menawarkan layanan lengkap yang mencakup semua kebutuhan acara Anda.</p>
      </div>
    </div>
    <div class="services-grid">
      <div class="service">
          <div class="service-image">
              <img src="{{ Vite::asset('resources/img/service-icon-1.png') }}" alt="Ikon Promosi Acara" />
          </div>
          <h1>Event Promotion</h1>
          <p>Promosi yang efektif adalah kunci untuk menarik audiens dan menjamin kesuksesan acara Anda.</p>
          <div class="service-price">
              <a>Mulai Rp. 1.000.000,-</a>
          </div>
          <div class="services-list">
              <div class="service-list-title">
                  <a>Terdiri dari :</a>
              </div>
              <ul>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Kampanye Pemasaran Kreatif</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Penggunaan Multi-Platform</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Strategi SEO dan SEM</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Desain Materi Promosi</a></li>
              </ul>
          </div>
          <span class="services-btn">
              <a href="#" class="btn">Detail</a>
          </span>
      </div>
      
      <div class="service">
          <div class="service-image">
              <img src="{{ Vite::asset('resources/img/service-icon-2.png') }}" alt="Ikon Sistem Ticketing" />
          </div>
          <h1>Ticketing System</h1>
          <p>Memberikan kemudahan dan keamanan dalam setiap proses ticketing acara Anda.</p>
          <div class="service-price">
              <a>GRATIS!</a>
          </div>
          <div class="services-list">
              <div class="service-list-title">
                  <a>Terdiri dari :</a>
              </div>
              <ul>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Registrasi Acara</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Pengaturan Tiket</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Promosi dan Penjualan</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Monitoring</a></li>
              </ul>
          </div>
          <span class="services-btn">
              <a href="#" class="btn">Detail</a>
          </span>
      </div>
  
      <div class="service">
          <div class="service-image">
              <img src="{{ Vite::asset('resources/img/service-icon-3.png') }}" alt="Ikon Event Organizer" />
          </div>
          <h1>Event Organizer</h1>
          <p>Mewujudkan setiap detail acara Anda dengan sempurna.</p>
          <div class="service-price">
              <a>Mulai Rp. 5.000.000,-</a>
          </div>
          <div class="services-list">
              <div class="service-list-title">
                  <a>Terdiri dari :</a>
              </div>
              <ul>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Perencanaan yang mendetail</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Konsep Kreatif dan Inovatif</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Koordinasi yang Efisien</a></li>
                  <li><a><img src="{{ Vite::asset('resources/img/check.png') }}" alt="check"> Eksekusi yang Sempurna</a></li>
              </ul>
          </div>
          <span class="services-btn">
              <a href="#" class="btn">Detail</a>
          </span>
      </div>
  </div>
  
        <div class="service-end">
          <a>Dapatkan bantuan dalam memilih jasa di <b>Cerita Acara</b></a>
          <a class="service-end-btn" href="#">disini</a>
        </div>
      </div>
    </section>

    <section class="gallery">
      <div class="container">
        <div class="gallery-title">
        <a class="gallery-title-content"><img src="{{Vite::asset('resources/img/gallery.png')}}" width="25" alt="gallery"> Galeri</a>
        </div>
        <div class="gallery-paragraph">
        <p>
          Mari bergabung bersama Cerita Acara dan buat <br>kisah anda menjadi seru.
        </p>
      </div>
      <div class="gallery-frames">
        <div class="gallery-frame-1">
          <img src="{{Vite::asset('resources/img/gallery-frame1.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame2.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame3.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame4.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame5.png')}}" alt="">
        </div>
        <div class="gallery-frame-2">
          <img src="{{Vite::asset('resources/img/gallery-frame6.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame7.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame8.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame9.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame10.png')}}" alt="">
        </div>
        <div class="gallery-frame-3">
          <img src="{{Vite::asset('resources/img/gallery-frame11.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame12.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame13.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame14.png')}}" alt="">
          <img src="{{Vite::asset('resources/img/gallery-frame15.png')}}" alt="">
        </div>
      </div>
      </div>
    </section>

    <section class="testimonials">
      <div class="container">
        <div class="testimonial-top">
        <div class="testimonial-text">
        <div class="testimonial-title">
        <a class="testimonial-title-head"><img src="{{Vite::asset('resources/img/calendar.png')}}" alt=""> Cerita Mereka</a>
      </div>
        <p  class="testimonial-paragraph">Dengar cerita mereka yang telah bekerja sama dengan Cerita Acara.</p>
        <p class="testimonial-paragraph-end">Simak rangkuman ulasan dari mereka yang telah puas bekerja sama dengan kami</p>
      </div>
        <div class="testimonial-image">
          <img src="{{Vite::asset('resources/img/photo2.png')}}" alt="">
        </div>
      </div>

      <!-- testimonial content -->
      <div class="testimonials-grid">
        <div class="testimonial-content">
          <div class="testimonial-customer">
            <div class="testimonial-customer-name">
              <h3>Kenny Putra</h3>
            </div>
            <div class="testimonial-rate">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
            </div>
            <div class="testimonial-comment">
              <div class="testimonial-comment-title">
                <a><b>Sangat Membantu</b></a>
              </div>
              <div class="testimonial-comment-paragraph">
                <p>
                  Bekerja sama dengan Cerita Acara sangat menyenangkan karena dibantu dengan para tim yang ahli dan hasil kerja mereka sangat memuaskan.
                </p>
              </div>
            </div>
          </div>
          <div class="testimonial-customer">
            <div class="testimonial-customer-name">
              <h3>Kenny Putra</h3>
            </div>
            <div class="testimonial-rate">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
            </div>
            <div class="testimonial-comment">
              <div class="testimonial-comment-title">
                <a><b>Sangat Membantu</b></a>
              </div>
              <div class="testimonial-comment-paragraph">
                <p>
                  Bekerja sama dengan Cerita Acara sangat menyenangkan karena dibantu dengan para tim yang ahli dan hasil kerja mereka sangat memuaskan.
                </p>
              </div>
            </div>
          </div>
          <div class="testimonial-customer">
            <div class="testimonial-customer-name">
              <h3>Kenny Putra</h3>
            </div>
            <div class="testimonial-rate">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
            </div>
            <div class="testimonial-comment">
              <div class="testimonial-comment-title">
                <a><b>Sangat Membantu</b></a>
              </div>
              <div class="testimonial-comment-paragraph">
                <p>
                  Bekerja sama dengan Cerita Acara sangat menyenangkan karena dibantu dengan para tim yang ahli dan hasil kerja mereka sangat memuaskan.
                </p>
              </div>
            </div>
          </div>
          <div class="testimonial-customer">
            <div class="testimonial-customer-name">
              <h3>Kenny Putra</h3>
            </div>
            <div class="testimonial-rate">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
              <img src="{{Vite::asset('resources/img/rate.png')}}" alt="star">
            </div>
            <div class="testimonial-comment">
              <div class="testimonial-comment-title">
                <a><b>Sangat Membantu</b></a>
              </div>
              <div class="testimonial-comment-paragraph">
                <p>
                  Bekerja sama dengan Cerita Acara sangat menyenangkan karena dibantu dengan para tim yang ahli dan hasil kerja mereka sangat memuaskan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- testimonial content end -->

        </div>
        </div>
      </div>
    </section>
    

    <script>
  document.addEventListener("DOMContentLoaded", function() {
  const gallery = document.querySelector('.gallery-frame-1');
  let scrollSpeed = 2; // atur kecepatan

  // fungsi untuk animasi scroll agar berkelanjutan
  function cloneImages() {
    const images = Array.from(gallery.querySelectorAll('img'));
    images.forEach(img => {
      const clone = img.cloneNode(true);
      gallery.appendChild(clone);
    });
  }

  function startScrolling() {
    gallery.scrollLeft += scrollSpeed;

    if (gallery.scrollLeft >= gallery.scrollWidth / 2) {
      gallery.scrollLeft = 0;
    }

    requestAnimationFrame(startScrolling);
  }

  cloneImages();
  startScrolling();
});
    </script>

    <script>
document.addEventListener("DOMContentLoaded", function() {
  const gallery = document.querySelector('.gallery-frame-2');
  let scrollSpeed = 1; // Kecepatan scroll

  // Fungsi untuk menggandakan gambar-gambar dalam galeri
  function cloneImages() {
    const images = Array.from(gallery.querySelectorAll('img'));
    images.forEach(img => {
      const clone = img.cloneNode(true);
      gallery.appendChild(clone);
    });
  }

  // Memulai animasi scroll dari kanan ke kiri
  function startScrolling() {
    gallery.style.overflow = 'hidden'; // Menghindari overflow

    // Mengatur interval untuk animasi scroll
    setInterval(function() {
      gallery.scrollLeft -= scrollSpeed; // Menggeser ke kiri
      if (gallery.scrollLeft <= 0) {
        gallery.scrollLeft = gallery.scrollWidth / 2; // Reset ke setengah lebar galeri setelah habis
      }
    }, 10); // Mengatur interval agar animasi lebih halus
  }

  cloneImages();
  startScrolling();
});




    </script>

    <script>
document.addEventListener("DOMContentLoaded", function() {
  const gallery = document.querySelector('.gallery-frame-3');
  let scrollSpeed = 2; // atur kecepatan

  // fungsi untuk animasi scroll agar berkelanjutan
  function cloneImages() {
    const images = Array.from(gallery.querySelectorAll('img'));
    images.forEach(img => {
      const clone = img.cloneNode(true);
      gallery.appendChild(clone);
    });
  }

  function startScrolling() {
    gallery.scrollLeft += scrollSpeed;

    if (gallery.scrollLeft >= gallery.scrollWidth / 2) {
      gallery.scrollLeft = 0;
    }

    requestAnimationFrame(startScrolling);
  }

  cloneImages();
  startScrolling();
});



    </script>

   


  

@endsection