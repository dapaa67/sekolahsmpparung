@extends('layouts.app')

@section('title', 'Guru & Staff')

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
    <!-- Hero Section -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="position-relative overflow-hidden rounded-4 shadow-lg" style="height: 300px;">
                    <div class="position-absolute w-100 h-100" style="background: #1b5e20 url('{{ asset('images/teachers-bg.jpg') }}') center/cover;"></div>
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 text-white px-3">
                        <h1 class="display-4 fw-bold mb-3" style="font-family: 'Merriweather', serif;">GURU & STAFF</h1>
                        <div class="d-flex align-items-center">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                            <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="mx-3" style="width: 100px;">
                            <div class="border-top" style="width: 60px; border-color: #FFFF00!important;"></div>
                        </div>
                        <p class="mt-3 mb-0 fs-5 fw-bold">SMP ISLAM PARUNG</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Content Section -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-success text-white py-4 rounded-top-4">
                        <h3 class="card-title mb-0 text-center fw-bold">DAFTAR GURU</h3>
                    </div>
                    <div class="card-body p-4">
                        <!-- Search Box -->
                        <div class="row mb-4">
                            <div class="col-md-6 mx-auto">
                                <div class="input-group">
                                    <span class="input-group-text bg-success text-white">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama guru, mata pelajaran, atau keterangan...">
                                </div>
                            </div>
                        </div>

                        <!-- Table Guru -->
                        <div class="table-responsive">
                            <table class="table table-hover" id="teacherTable">
                                <thead class="table-success">
                                    <tr>
                                        <th class="text-center" style="width: 60px;">NO</th>
                                        <th>NAMA GURU</th>
                                        <th>MATA PELAJARAN</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        use App\Models\Guru;
                                        $gurus = Guru::all();
                                    @endphp

                                    @foreach($gurus as $index => $guru)
                                        <tr>
                                            <td class="text-center">{{ $index + 1 }}</td>
                                            <td>{{ $guru->nama }}</td>
                                            <td>{{ $guru->mapel }}</td>
                                            <td>{{ $guru->keterangan ?? '-' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Custom CSS -->
<style>
    .table {
        margin-bottom: 0;
    }

    .table th {
        font-weight: 600;
        white-space: nowrap;
    }

    .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(27, 94, 32, 0.05);
    }

    .table-success {
        background-color: #1b5e20 !important;
        color: white;
    }

    .table-success th {
        border-color: #1b5e20;
    }

    /* Search Box Styles */
    .input-group-text {
        border: none;
        background-color: #1b5e20 !important;
    }

    .input-group .form-control {
        border-left: none;
    }

    .input-group .form-control:focus {
        box-shadow: none;
        border-color: #dee2e6;
    }

    .input-group:focus-within {
        box-shadow: 0 0 0 0.25rem rgba(27, 94, 32, 0.25);
        border-radius: 0.375rem;
    }

    .bg-success {
        background-color: #1b5e20 !important;
    }
</style>

<!-- Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('teacherTable');
    const rows = table.getElementsByTagName('tr');

    searchInput.addEventListener('keyup', function() {
        const searchText = this.value.toLowerCase();

        // Start from index 1 to skip header row
        for (let i = 1; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let found = false;

            // Search in all cells except the first one (NO)
            for (let j = 1; j < cells.length; j++) {
                const cellText = cells[j].textContent.toLowerCase();
                if (cellText.includes(searchText)) {
                    found = true;
                    break;
                }
            }

            // Show/hide row based on search result
            row.style.display = found ? '' : 'none';
        }
    });
});
</script>
<script>
    document.getElementById("searchInput").addEventListener("keyup", function () {
        const query = this.value.toLowerCase();
        const rows = document.querySelectorAll("#teacherTable tbody tr");

        rows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(query) ? "" : "none";
        });
    });
</script>

@endsection
