@extends('layouts.app') {{-- أو اسم layout الخاص بك --}}
@section('content')
@section('title', 'Booking')
<div class="content">
    <h2 class="section-title">Book an Appointment</h2>
    <title>Samy Lawer | Booking</title>
    <link rel="stylesheet" href="/samy_lawyer/css/style.css">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $lawyer_id = $_POST['lawyer_id'];
        $case_type = $_POST['case_type'];
        $notes = $_POST['notes'];

        $stmt = $pdo->prepare("INSERT INTO bookings (user_id, lawyer_id, date, time, case_type, notes, status)
                               VALUES (?, ?, ?, ?, ?, ?, 'Pending')");
        $stmt->execute([$_SESSION['user_id'], $lawyer_id, $date, $time, $case_type, $notes]);

        echo "<div class='success-message'>✅ Appointment booked successfully!</div>";
    }
    ?>
<form method="post">
@csrf
  <div class="row g-3">
    <div class="col-md-6">
      <label class="custom-label">Choose a Date:</label>
      <input type="date" name="date" class="form-control custom-input" required>
    </div>

    <div class="col-md-6">
      <label class="custom-label">Choose a Time:</label>
      <input type="time" name="time" class="form-control custom-input" required>
    </div>

    <div class="col-md-6">
      <label class="custom-label">Case Type:</label>
      <select name="case_type" id="case_type" class="form-select custom-input" required>
        <option value="">-- Select Type --</option>
        <option value="Political">Political</option>
        <option value="Criminal">Criminal</option>
        <option value="Family">Family</option>
        <option value="Civil">Civil</option>
        <option value="Commercial">Commercial</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="custom-label">Select a Lawyer:</label>
      <select name="lawyer_id" id="lawyer_id" class="form-select custom-input" required>
        <option value="">-- Select a Lawyer --</option>
      </select>
    </div>

    <div class="col-12">
      <label class="custom-label">Notes:</label>
      <textarea name="notes" class="form-control custom-input" rows="4" placeholder="Write any details..."></textarea>
    </div>

    <div class="col-12 d-grid">
      <button type="submit" class="btn btn-primary mt-3">Book Appointment</button>
    </div>
  </div>
</form>

</div>

<script>
    const allLawyers = {!! $lawyers_json !!};

    const caseTypeSelect = document.getElementById('case_type');
    const lawyerSelect = document.getElementById('lawyer_id');

    caseTypeSelect.addEventListener('change', function () {
        const selectedCase = this.value;

        // تصفية المحامين حسب نوع القضية
        const filteredLawyers = allLawyers.filter(lawyer => lawyer.specialty === selectedCase);

        // تحديث قائمة المحامين
        lawyerSelect.innerHTML = '<option value="">-- Select a Lawyer --</option>';
        filteredLawyers.forEach(lawyer => {
            const option = document.createElement('option');
            option.value = lawyer.id;
            option.textContent = lawyer.name;
            lawyerSelect.appendChild(option);
        });
    });
</script>
@endsection