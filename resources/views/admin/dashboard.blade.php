@extends('layouts.admin')
@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">📊 Admin Dashboard</h1>

    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card border-primary shadow rounded">
                <div class="card-body">
                    <h5>👥 Total Users</h5>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-success shadow rounded">
                <div class="card-body">
                    <h5>⚖️ Total Lawyers</h5>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card border-warning shadow rounded">
                <div class="card-body">
                    <h5>📅 Total Bookings</h5>
                   
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5 shadow">
        <div class="card-body">
            <h5 class="mb-3">📈 Bookings in Last 7 Days</h5>
            <canvas id="bookingChart" height="100"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   

    const dates = bookingStats.map(stat => stat.date);
    const counts = bookingStats.map(stat => stat.count);

    new Chart(document.getElementById('bookingChart'), {
        type: 'line',
        data: {
            labels: dates,
            datasets: [{
                label: 'Bookings',
                data: counts,
                fill: true,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>
@endsection
