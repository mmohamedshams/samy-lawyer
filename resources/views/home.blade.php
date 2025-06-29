@extends('layouts.app')
@section('title', 'Home')
@section('content')

<section class="video-bg-section">
  <iframe
    src="https://www.youtube.com/embed/7IGZ3-iVRW8?autoplay=1&mute=1&controls=0&loop=1&playlist=7IGZ3-iVRW8&modestbranding=1&showinfo=0"
    frameborder="0"
    allow="autoplay; encrypted-media"
    allowfullscreen
    title="Background Video"
  ></iframe>
  <div class="video-overlay"></div>
  <div class="video-content container">
    <h1>Latest Legal News & Judgements</h1>
    <p>Your trusted source for comprehensive legal updates, court rulings, and expert analysis.</p>
    <a href="#" class="btn btn-primary btn-lg">Explore News</a>
  </div>
</section>

<section class="services" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
  <h2>Our Legal Services</h2>
  <div class="row g-4">
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-gavel"></i></div>
        <h4>Civil Law</h4>
        <p>Comprehensive legal support in contracts, property disputes, and civil rights.</p>
      </div>
    </div>
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="700">
      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-balance-scale"></i></div>
        <h4>Criminal Law</h4>
        <p>Strong defense and representation in criminal cases and investigations.</p>
      </div>
    </div>
    <div class="col-md-4" data-aos="zoom-in" data-aos-delay="900">
      <div class="service-card">
        <div class="service-icon"><i class="fa-solid fa-users"></i></div>
        <h4>Family Law</h4>
        <p>Expertise in divorce, custody, inheritance, and family dispute resolution.</p>
      </div>
    </div>
  </div>
</section>

<section class="news-highlights" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="1500">
  <h2>Featured Legal News</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="news-card">
        <img src="https://i.ytimg.com/vi/KEM4d7ph4Dk/maxresdefault.jpg" alt="News 1" />
        <div class="news-card-body">
          <div class="news-card-title">Major Commercial Case Verdict Protects Investors</div>
          <div class="news-card-text">The supreme court ruled in favor of investment protection in a landmark commercial dispute.</div>
          <button class="btn-read-more" onclick="location.href='#'">Read More &raquo;</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="news-card">
        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=800&q=80" alt="News 2" />
        <div class="news-card-body">
          <div class="news-card-title">New Legislation to Streamline Civil Procedures</div>
          <div class="news-card-text">Parliament passed new laws aimed at reducing delays in civil courts.</div>
          <button class="btn-read-more" onclick="location.href='#'">Read More &raquo;</button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="news-card">
        <img src="https://images.unsplash.com/photo-1542744173-05336fcc7ad4?auto=format&fit=crop&w=800&q=80" alt="News 3" />
        <div class="news-card-body">
          <div class="news-card-title">Legal Experts Discuss Family Law Trends</div>
          <div class="news-card-text">A recent seminar highlighted emerging trends in family law and dispute resolution.</div>
          <button class="btn-read-more" onclick="location.href='#'">Read More &raquo;</button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
