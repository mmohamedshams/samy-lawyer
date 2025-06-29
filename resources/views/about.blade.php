@extends('layouts.app') {{-- أو اسم layout الخاص بك --}}
@section('content')
@section('title', 'aboutUs')
<body>
  <section class="about-section">
    <div class="about-container">
      <div class="about-header">
        <h1>About Our Law Office</h1>
        <p>Trusted Legal Advisors with Years of Experience</p>
      </div>

      <div class="about-content">
        <div class="about-image">
          <img src="https://k2space.imgix.net/app/uploads/2023/09/Law-Firm-Office-Design-Current-and-Future-Trends-scaled.jpg?auto=format&fit=max&w=5000&q=90" alt="Law Office" />
        </div>
        <div class="about-text">
          <h2>Who We Are</h2>
          <p>We are a team of experienced lawyers dedicated to providing professional legal services in civil, criminal, and corporate law.</p>
          <h3>Our Vision</h3>
          <p>To be the leading law firm known for integrity, professionalism, and client satisfaction.</p>
          <h3>Our Mission</h3>
          <p>Delivering effective legal solutions tailored to each client's unique situation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- سلايدر الفريق -->
  <section class="team-section">
    <div class="about-container">
      <h2>Meet Our Team</h2>
      <div class="team-slider">
        <div class="team-card">
          <img src="https://www.scoutnetworkblog.com/wp-content/uploads/2020/03/Legal-Professional-Office-201712-002.jpg" alt="Ahmed Farouk" />
          <h4>Ahmed Farouk</h4>
          <p>Senior Lawyer</p>
        </div>
        <div class="team-card">
          <img src="https://www.workitdaily.com/media-library/law-student-has-the-skills-needed-to-become-a-successful-lawyer.jpg?id=22661511&width=1200&height=800&quality=85&coordinates=2%2C0%2C2%2C0" alt="Sarah Youssef" />
          <h4>Sarah Youssef</h4>
          <p>Legal Consultant</p>
        </div>
        <div class="team-card">
          <img src="https://www.acronyms.co.uk/wp-content/uploads/2024/12/IT_Support_Important_Legal_Firms.png" alt="Khaled Nabil" />
          <h4>Khaled Nabil</h4>
          <p>Corporate Advisor</p>
        </div>
      </div>
    </div>
  </section>

  
  <!-- فيديو تعريفي -->
<section class="video-section">
  <div class="about-container">
    <h2>Introduction Video</h2>
    <div class="video-wrapper">
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/MiDZ9WFX5rQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>


  <!-- إحصائيات القضايا -->
  <section class="stats-section">
    <div class="about-container">
      <h2>Our Case Success Rates</h2>
      <canvas id="caseChart" width="400" height="200"></canvas>
    </div>
  </section>

  <script>
    const ctx = document.getElementById('caseChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Civil', 'Criminal', 'Corporate', 'Family', 'International'],
        datasets: [{
          label: 'Success Rate %',
          data: [92, 85, 88, 90, 80],
          backgroundColor: '#5d4037'
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: { beginAtZero: true, max: 100 }
        }
      }
    });
  </script>

</body>
</html>
@endsection