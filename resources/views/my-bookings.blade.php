@extends('layouts.app')

@section('title', 'My Bookings')

@section('content')
<div class="page-container">
    <h2 class="section-title">📅 My Bookings</h2>

    <div class="bookings-container">
        @forelse ($bookings as $booking)
            @php
                $status = strtolower($booking->status);
            @endphp
            <div class="booking-card {{ $status }}">
                <div class="booking-header">
                    <span class="booking-date">🗓 {{ $booking->date }} - {{ $booking->time }}</span>
                    <span class="booking-status">{{ ucfirst($booking->status) }}</span>
                </div>
                <div class="booking-body">
                    <p><strong>📂 Case Type:</strong> {{ $booking->case_type }}</p>
                    <p><strong>⚖️ Lawyer:</strong> {{ $booking->lawyer_name ?? 'Not Assigned' }}</p>
                    @if (!empty($booking->admin_note))
                        <p><strong>📝 Admin Note:</strong> {{ $booking->admin_note }}</p>
                    @endif
                </div>
            </div>
        @empty
            <p>No bookings found.</p>
        @endforelse
    </div>
</div>
@endsection
