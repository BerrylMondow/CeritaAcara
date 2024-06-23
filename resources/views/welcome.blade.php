<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cerita Acara</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{Vite::asset('style.css')}}" />
    <style>/* Basic Styling */body {font-family: sans-serif; margin: 0; background-color: #111;color: #fff;}.container {max-width: 1200px;margin: 0 auto;padding: 0 20px;}/* Header */header {background-color: #111;padding: 20px 0;text-align: center;}.logo {display: inline-block;}nav {display: inline-block;margin-left: auto;}nav ul {list-style: none;margin: 0;padding: 0;}nav li { display: inline-block;margin-left: 20px;}nav a {text-decoration: none;color: #fff;}/* Hero Section */.hero {position: relative;background-color: #222;padding: 100px 0;}.hero-content {text-align: center;}.hero-images {display: flex;justify-content: space-between;margin-top: 50px;}.image {width: 200px;height: 150px;margin-bottom: 20px;background-color: #333;overflow: hidden;position: relative;text-align: center;}.image img {width: 100%;height: 100%;object-fit: cover;transition: transform 0.3s ease;}.image p {position: absolute;bottom: 10px;left: 0;right: 0;color: #fff;}.hero-images .image:hover img {transform: scale(1.1);}/* About Section */.about {padding: 100px 0;display: flex;justify-content: space-between;}.about-content {flex: 1;}.about-image {flex: 1;}.about-image img {width: 100%;height: auto;}/* Services Section */.services {padding: 100px 0;}.services-grid {display: grid;grid-template-columns: repeat(3, 1fr);gap: 30px;margin-top: 50px;}.service {text-align: center;padding: 20px;background-color: #333;border-radius: 10px;}.service img {width: 50px;height: 50px;margin-bottom: 20px;}/* Gallery Section */.gallery {padding: 100px 0;}.gallery-grid {display: grid;grid-template-columns: repeat(5, 1fr);gap: 20px;margin-top: 50px;}.gallery-item {width: 100%;height: 200px;background-color: #333;overflow: hidden;}.gallery-item img {width: 100%;height: 100%;object-fit: cover;}/* Testimonials Section */.testimonials {padding: 100px 0;}.testimonials-grid {display: grid;grid-template-columns: repeat(3, 1fr);gap: 30px;margin-top: 50px;}.testimonial {padding: 20px;background-color: #333;border-radius: 10px;text-align: center;}.testimonial img {width: 80px;height: 80px;border-radius: 50%;margin-bottom: 20px;}.rating {color: #ffc107;font-size: 20px;margin-bottom: 10px;}/* Footer */footer {background-color: #111;padding: 50px 0;text-align: center;}.footer-content {display: flex;justify-content: space-between;align-items: center;}.footer-links {margin-left: 50px;}.social-media {list-style: none;margin: 0;padding: 0;}.social-media li {display: inline-block;margin-left: 10px;}.social-media a {color: #fff;font-size: 20px;}.copyright {padding: 20px 0;background-color: #222;}/* Buttons */.btn {display: inline-block;padding: 10px 20px;background-color: #007bff;color: #fff;border: none;border-radius: 5px;text-decoration: none;transition: background-color 0.3s ease;}.btn:hover {background-color: #0056b3;}/* Responsive Design */@media (max-width: 768px) {.hero-images {display: block;text-align: center;}.image {width: 80%;margin: 0 auto 20px;}.about {flex-direction: column;}.about-content,.about-image {width: 100%;}.services-grid {grid-template-columns: 1fr;}.gallery-grid {grid-template-columns: 1fr;}.testimonials-grid {grid-template-columns: 1fr;}.footer-content {flex-direction: column;align-items: flex-start;}.footer-links {margin-left: 0;margin-top: 20px;}}</style>

  </head>
  <body>
    <header>
      <div class="container">
        <a href="#" class="logo">
          <img src="{{Vite::asset('resources/img/logo.png')}}" alt="Cerita Acara Logo" style="width: 5%; position: absolute; margin-right: 10px; margin-btom: 5px;"/>
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
            <img src="{{Vite::asset('resources/img/wedding.jpg')}}" alt="Wedding Event">

            <p>Wedding Event</p>
          </div>
          <div class="image">
            <img src="{{Vite::asset('resources/img/seminar.jpg')}}" alt="Seminar Event" />
            <p>Seminar Event</p>
          </div>
          <div class="image">
            <img src="{{Vite::asset('resources/img/gathering.jpg')}}" alt="Gathering Event" />
            <p>Gathering Event</p>
          </div>
          <div class="image">
            <img src="{{Vite::asset('resources/img/product-launch.jpg')}}" alt="Product Launch" />
            <p>Product Launch</p>
          </div>
          <div class="image">
            <img src="{{Vite::asset('resources/img/exhibition.jpg')}}" alt="Exhibition" />
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

    @vite('resources/js/app.js')
</body>
</html>
