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

    <div>
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
            <img src="{{Vite::asset('resources/img/service-icon-1.png')}}" alt="Service Icon" />
          </div>
            <h3>Event Promotion</h3>
            <p>
              Promosi yang efektif adalah kunci untuk menarik audiens dan
              menjamin kesuksesan acara Anda.
            </p>
            <div class="service-price">
              <a>Mulai Rp. 1.000.000,-</a>
            </div>
            <div class="services-list">
              <div class="service-list-title">
              <a>Terdiri dari :</a>
            </div>
              <ul>
                  <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Kampanye Pemasaran Kreatif</a></li>
                  <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Penggunaan Multi-Platform</a></li>
                  <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Strategi SEO dan SEM</a></li>
                  <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Desain Materi Promosi</a></li>
                </ul>
              </div>
            <span class="service-btn">
              <a href="#" class="btn">Detail</a>
            </span>
          </div>
          <div class="service-mid">
            <div class="service-mid-image">
              <img src="{{Vite::asset('resources/img/service-icon-2.png')}}" alt="Service Icon" />
            </div>
              <h3>Ticketing System</h3>
              <p>
                Memberikan kemudahan dan keamanan dalam setiap proses ticketing acara Anda.
              </p>
              <div class="service-mid-price">
                <a>GRATIS!</a>
              </div>
              <div class="services-mid-list">
                <div class="service-mid-list-title">
                <a>Terdiri dari :</a>
              </div>
                <ul>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Registrasi Acara</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Pengaturan Tiket</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Promosi dan Penjualan</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Monitoring</a></li>
                  </ul>
                </div>
            <span class="service-mid-btn">
              <a href="#" class="btn">Detail</a>
            </span>
          </div>
          <div class="service">
            <div class="service-image">
              <img src="{{Vite::asset('resources/img/service-icon-3.png')}}" alt="Service Icon" />
            </div>
              <h3>Event Organizer</h3>
              <p>
                Mewujudkan setiap detail acara Anda dengan sempurna.
              </p>
              <div class="service-price">
                <a>Mulai Rp. 5.000.000,-</a>
              </div>
              <div class="services-list">
                <div class="service-list-title">
                <a>Terdiri dari :</a>
              </div>
                <ul>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Perencanaan yang mendetail</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Konsep Kreatif dan Inovatif</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Koordinasi yang Efisien</a></li>
                    <li><a><img src="{{Vite::asset('resources/img/check.png')}}" alt="check"> Eksekusi yang Sempurna</a></li>
                  </ul>
                </div>
            <span class="service-btn">
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
  </div>

    <section class="gallery">
      <div class="container">
        <h2>Galeri</h2>
        <p>
          Mari bergabung bersama Cerita Acara dan buat kisah anda menjadi seru.
        </p>
        <div class="gallery-grid">
          <div class="gallery-item">
            <img src="gallery-image-1.jpg" alt="Gallery Image" />
          </div>
          <div class="gallery-item">
            <img src="gallery-image-2.jpg" alt="Gallery Image" />
          </div>
          <div class="gallery-item">
            <img src="gallery-image-3.jpg" alt="Gallery Image" />
          </div>
          <div class="gallery-item">
            <img src="gallery-image-4.jpg" alt="Gallery Image" />
          </div>
          <div class="gallery-item">
            <img src="gallery-image-5.jpg" alt="Gallery Image" />
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials">
      <div class="container">
        <h2>Cerita Mereka</h2>
        <p>Dengar cerita mereka yang telah bekerja sama dengan Cerita Acara.</p>
        <div class="testimonials-grid">
          <div class="testimonial">
            <img src="testimonial-profile-1.jpg" alt="Testimonial Profile" />
            <h4>Kenny Putra</h4>
            <p>
              Bekerja sama dengan Cerita Acara sangat menyenangkan karena
              dibantu dengan para tim yang ahli dan hasil kerja mereka sangat
              memuaskan.
            </p>
            <div class="rating">★★★★★</div>
          </div>
          <div class="testimonial">
            <img src="testimonial-profile-2.jpg" alt="Testimonial Profile" />
            <h4>Kenny Putra</h4>
            <p>
              Bekerja sama dengan Cerita Acara sangat menyenangkan karena
              dibantu dengan para tim yang ahli dan hasil kerja mereka sangat
              memuaskan.
            </p>
            <div class="rating">★★★★★</div>
          </div>
          <div class="testimonial">
            <img src="testimonial-profile-3.jpg" alt="Testimonial Profile" />
            <h4>Kenny Putra</h4>
            <p>
              Bekerja sama dengan Cerita Acara sangat menyenangkan karena
              dibantu dengan para tim yang ahli dan hasil kerja mereka sangat
              memuaskan.
            </p>
            <div class="rating">★★★★★</div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="footer-content">
          <a href="#" class="logo">
            <img src="logo.png" alt="Cerita Acara Logo" />
          </a>
          <p>
            Kami membantu anda mengelola acara penting anda mulai dari sistem
            ticketing yang efisien hingga promosi acara yang tepat sasaran.
          </p>
          <ul class="social-media">
            <li>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Product</h3>
          <ul>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Case studies</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Updates</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Company</h3>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Culture</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="footer-links">
          <h3>Support</h3>
          <ul>
            <li><a href="#">Getting started</a></li>
            <li><a href="#">Help center</a></li>
            <li><a href="#">Server status</a></li>
            <li><a href="#">Report a bug</a></li>
            <li><a href="#">Chat support</a></li>
          </ul>
        </div>
      </div>
      <div class="copyright">
        <p>© 2024 Weza Solutions. All Rights Reserved.</p>
      </div>
    </footer>
@endsection