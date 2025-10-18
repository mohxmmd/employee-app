<!DOCTYPE html>
<html>

<head>
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/employee.css') }}">

</head>

<body class="container mt-5">

    <div class="filter-container">
        <h2 class="mb-0">Employee List</h2>
        <div class="filter-dropdown">
            <button class="filter-btn" id="filterButton">
                <i class="fas fa-filter"></i>
            </button>
            <div class="dropdown-menu" id="dropdownMenu">
                <button class="dropdown-item" data-filter="all">All Employees</button>
                <button class="dropdown-item" data-filter="5+ Years Active">5+ Years Active</button>
            </div>
        </div>
    </div>

    <p id="employeeCount">Total Employees: {{ $employees->count() }}</p>

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Position</th>
                <th>Joining Date</th>
                <th>Years in Company</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="employeeTableBody">
            @foreach($employees as $index => $employee)
                @php
                    $years = \Carbon\Carbon::now()->year - $employee->joining_date->year;
                    $highlight = $employee->is_active && $years > 5;
                @endphp

                <tr class="{{ $highlight ? 'highlight' : '' }}" data-active="{{ $employee->is_active ? 'true' : 'false' }}"
                    data-years="{{ $years }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->role }}</td>
                    <td>{{ $employee->joining_date->format('Y-m-d') }}</td>
                    <td>{{ $years }}</td>
                    <td class="status">{{ $employee->is_active ? 'Active' : 'Inactive' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ asset('js/employee.js') }}"></script>
</body>

</html>