<!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cerita Acara</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        /* Basic Styling */

</style>

  </head>
  <body>
    <header>
      <div class="container">
        <a href="#" class="logo">
          <img src="logo.png" alt="Cerita Acara Logo" />
        </a>
        <nav>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Galeri</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <h1>Setiap Acara Punya Cerita</h1>
          <p>
            Cerita Acara hadir untuk membantu mewujudkan setiap detail rancangan
            acara anda dengan sempurna.
          </p>
          <a href="#" class="btn">Lihat Layanan</a>
        </div>
        <div class="hero-images">
          <div class="image">
            <img src="wedding.jpg" alt="Wedding Event" />
            <p>Wedding Event</p>
          </div>
          <div class="image">
            <img src="seminar.jpg" alt="Seminar Event" />
            <p>Seminar Event</p>
          </div>
          <div class="image">
            <img src="gathering.jpg" alt="Gathering Event" />
            <p>Gathering Event</p>
          </div>
          <div class="image">
            <img src="product-launch.jpg" alt="Product Launch" />
            <p>Product Launch</p>
          </div>
          <div class="image">
            <img src="exhibition.jpg" alt="Exhibition" />
            <p>Exhibition</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="container">
        <div class="about-content">
          <h2>Tentang Cerita Acara</h2>
          <p>
            Tim kami yang berpengalaman siap membantu Anda mengatur setiap
            detail acara dengan sempurna.
          </p>
          <a href="#" class="btn">Selengkapnya</a>
        </div>
        <div class="about-image">
          <img src="about-image.jpg" alt="About Cerita Acara" />
        </div>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h2>Layanan Kami</h2>
        <p>Nikmati kemudahan tanpa batas dalam mengelola acara penting anda.</p>
        <div class="services-grid">
          <div class="service">
            <img src="service-icon-1.png" alt="Service Icon" />
            <h3>Event Promotion</h3>
            <p>
              Promosi yang efektif adalah kunci untuk menarik audiens dan
              menjamin kesuksesan acara Anda.
            </p>
            <a href="#" class="btn">Detail</a>
          </div>
          <div class="service">
            <img src="service-icon-2.png" alt="Service Icon" />
            <h3>Ticketing System</h3>
            <p>
              Memberikan kemudahan dan keamanan dalam setiap proses ticketing
              acara Anda.
            </p>
            <a href="#" class="btn">Detail</a>
          </div>
          <div class="service">
            <img src="service-icon-3.png" alt="Service Icon" />
            <h3>Event Organizer</h3>
            <p>Mewujudkan setiap detail acara Anda dengan sempurna.</p>
            <a href="#" class="btn">Detail</a>
          </div>
        </div>
      </div>
    </section>

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
    <script
      src="https://kit.fontawesome.com/your-fontawesome-kit-id.js"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
