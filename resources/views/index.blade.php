@extends('layout.main')

@section('content')
    <!-- Main Content Area -->
    <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Dashboard Overview</h2>
            <p class="text-gray-600">Welcome back! Here's what's happening with your business today.</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Revenue</p>
                        <h3 class="text-2xl font-bold">$24,780</h3>
                        <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i> 12.5% from last
                            month</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-dollar-sign text-blue-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">New Customers</p>
                        <h3 class="text-2xl font-bold">1,245</h3>
                        <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i> 8.2% from last
                            month</p>
                    </div>
                    <div class="bg-green-100 p-3 rounded-full">
                        <i class="fas fa-users text-green-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Pending Orders</p>
                        <h3 class="text-2xl font-bold">56</h3>
                        <p class="text-red-500 text-sm"><i class="fas fa-arrow-down mr-1"></i> 3.4% from last
                            month</p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-shopping-cart text-yellow-500 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Active Users</p>
                        <h3 class="text-2xl font-bold">3,456</h3>
                        <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i> 5.7% from last
                            month</p>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-user-check text-purple-500 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Tables Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow p-6 lg:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold">Recent Activity</h3>
                    <button class="text-blue-500 hover:text-blue-700">View All</button>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-2 rounded-full mr-3">
                            <i class="fas fa-shopping-cart text-blue-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">New order #1234</p>
                            <p class="text-gray-500 text-sm">Customer: John Smith - 2 min ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-green-100 p-2 rounded-full mr-3">
                            <i class="fas fa-user-plus text-green-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">New customer registered</p>
                            <p class="text-gray-500 text-sm">Sarah Johnson - 15 min ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-yellow-100 p-2 rounded-full mr-3">
                            <i class="fas fa-exclamation-triangle text-yellow-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">High traffic alert</p>
                            <p class="text-gray-500 text-sm">Server load at 85% - 30 min ago</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-purple-100 p-2 rounded-full mr-3">
                            <i class="fas fa-chart-line text-purple-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">Monthly report generated</p>
                            <p class="text-gray-500 text-sm">View your performance - 1 hour ago</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Quick Stats</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-gray-500">Conversion Rate</p>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 65%"></div>
                            </div>
                            <span class="text-sm font-medium">65%</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-500">Bounce Rate</p>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-red-500 h-2.5 rounded-full" style="width: 28%"></div>
                            </div>
                            <span class="text-sm font-medium">28%</span>
                        </div>
                    </div>
                    <div>
                        <p class="text-gray-500">Avg. Session Duration</p>
                        <div class="flex items-center">
                            <div class="w-full bg-gray-200 rounded-full h-2.5 mr-2">
                                <div class="bg-green-500 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-sm font-medium">4m 35s</span>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-download mr-2"></i>
                        Download Report
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
