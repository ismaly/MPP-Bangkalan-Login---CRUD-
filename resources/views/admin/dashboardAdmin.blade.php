@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Dashboard Header -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Welcome to the Admin Dashboard</h1>
        </div>
    </div>

    <!-- Dashboard Cards -->
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <h2 class="card-text">1,234</h2>
                    <p class="text-muted">Users registered in the system.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <h2 class="card-text">567</h2>
                    <p class="text-muted">Orders placed this month.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <h2 class="card-text">$12,345</h2>
                    <p class="text-muted">Total revenue generated.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Sales Overview</h5>
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Recent Activities</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>New user registered</span>
                            <span class="badge badge-primary badge-pill">Just now</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Order #1234 shipped</span>
                            <span class="badge badge-success badge-pill">2 hours ago</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Revenue report generated</span>
                            <span class="badge badge-info badge-pill">1 day ago</span>
                        </li>
                        <!-- Add more recent activities as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart.js script
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales',
                data: [10, 20, 15, 30, 25, 35],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection

