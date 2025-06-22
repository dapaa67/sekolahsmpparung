@extends('layouts.app')
@php
    use App\Models\Agenda;
    $agendas = Agenda::orderBy('created_at')->get();
@endphp
@section('title', 'Kalender Akademik - SMP Islam Parung')

@section('content')
<div class="container academic-calendar">
    <!-- Header Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/ekskul-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-5 fw-bold mb-2" style="font-family: 'Merriweather', serif;">KALENDER AKADEMIK</h1>
                        <div class="d-flex align-items-center">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                            <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        </div>
                        <p class="mt-3 mb-0 fs-5 fw-bold">2024/2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Calendar Table -->
<div class="calendar-table-container">
    <div class="table-header">
        <h3 class="table-title">Semua Agenda</h3>
    </div>

    <div class="table-responsive table-scroll">
        <table class="modern-table">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="event-date">Tanggal</th>
                    <th class="event-activity">Kegiatan Sekolah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendas as $index => $agenda)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="date-range">{{ $agenda->tanggal }}</td>
                        <td class="activity">{{ $agenda->kegiatan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<style>
/* General Styles */
.academic-calendar {
    padding: 2rem 0;
    font-family: 'Poppins', sans-serif;
    max-width: 1200px;
    margin: 0 auto;
}

/* Header Styles */
.calendar-header {
    position: relative;
    padding-bottom: 1.5rem;
    margin-bottom: 2rem;
}

.title {
    color: #1b5e20;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    letter-spacing: -0.5px;
}

.academic-year {
    color: #666;
    font-size: 1.2rem;
    letter-spacing: 1px;
    font-weight: 500;
}

.header-divider {
    width: 100px;
    height: 4px;
    background: #1b5e20;
    margin: 1rem auto;
    position: relative;
}

.header-divider::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 2px;
    background: #FFD700;
}

/* Table Container Styles */
.calendar-table-container {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    padding: 2rem;
    margin-bottom: 3rem;
}

.table-header {
    border-bottom: 3px solid #1b5e20;
    margin-bottom: 1.5rem;
    padding-bottom: 0.5rem;
}

.table-title {
    color: #1b5e20;
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0;
}

/* Table Scroll Styles */
.table-scroll {
    max-height: 600px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #1b5e20 #f0f0f0;
    padding: 0 1rem;
}

.table-scroll::-webkit-scrollbar {
    width: 8px;
}

.table-scroll::-webkit-scrollbar-track {
    background: #f0f0f0;
    border-radius: 4px;
}

.table-scroll::-webkit-scrollbar-thumb {
    background: #1b5e20;
    border-radius: 4px;
}

.table-scroll::-webkit-scrollbar-thumb:hover {
    background: #134718;
}

/* Table Styles */
.modern-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-bottom: 0;
}

.modern-table thead th {
    background: #1b5e20;
    color: white;
    font-weight: 600;
    padding: 1.25rem 1.5rem;
    text-transform: uppercase;
    font-size: 0.9rem;
    letter-spacing: 0.5px;
    border: none;
    position: sticky;
    top: 0;
    z-index: 1;
    white-space: nowrap;
}

.modern-table tbody tr {
    transition: all 0.3s ease;
    background: white;
}

.modern-table tbody tr:hover {
    background-color: rgba(27, 94, 32, 0.05);
}

.modern-table td {
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid #eee;
    color: #444;
    font-size: 0.95rem;
    vertical-align: middle;
}

.modern-table tbody tr:last-child td {
    border-bottom: none;
}

/* Column Specific Styles */
.serial-number {
    font-weight: 600;
    color: #1b5e20;
    background: rgba(27, 94, 32, 0.1);
    border-radius: 8px;
    width: 60px;
}

.date-range {
    font-weight: 500;
    color: #666;
    min-width: 150px;
    font-size: 0.95rem;
}

.activity {
    color: #444;
    font-weight: 500;
    line-height: 1.4;
    font-size: 0.95rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .academic-calendar {
        padding: 1rem;
    }

    .title {
        font-size: 2rem;
    }

    .calendar-table-container {
        padding: 1rem;
    }

    .table-scroll {
        padding: 0 0.5rem;
    }

    .modern-table thead {
        display: none;
    }

    .modern-table tbody tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid #eee;
        border-radius: 10px;
    }

    .modern-table td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #eee;
    }

    .modern-table td:last-child {
        border-bottom: none;
    }

    .modern-table td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #1b5e20;
        margin-right: 1rem;
    }

    .serial-number {
        border-radius: 8px 8px 0 0;
        justify-content: center;
    }
}

/* Print Styles */
@media print {
    .academic-calendar {
        padding: 0;
    }

    .modern-table {
        border-spacing: 0;
    }

    .modern-table tbody tr {
        box-shadow: none;
        border: 1px solid #dee2e6;
    }

    .modern-table td {
        padding: 0.75rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add data labels for mobile view
    const tableCells = document.querySelectorAll('.modern-table td');
    tableCells.forEach(cell => {
        const header = cell.closest('tr').querySelector('th:nth-child(' + (Array.from(cell.parentNode.children).indexOf(cell) + 1) + ')');
        if (header) {
            cell.setAttribute('data-label', header.textContent);
        }
    });
});
</script>
@endsection
