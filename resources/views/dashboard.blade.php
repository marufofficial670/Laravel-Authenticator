<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-black-800 dark:text-black-200 leading-tight">
            Welcome to Your Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Dashboard Overview</h2>
                        <a href="#" class="text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">View All</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-blue-100 dark:bg-blue-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-blue-800 dark:text-blue-200 mb-2">Users</h3>
                            <p class="text-sm text-blue-600 dark:text-blue-300">Total Users: {{ Auth::user()->count() }}</p>
                        </div>
                        <!-- Card 2 -->
                        <div class="bg-green-100 dark:bg-green-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-green-800 dark:text-green-200 mb-2">Revenue</h3>
                            <p class="text-sm text-green-600 dark:text-green-300">$10,000</p>
                        </div>
                        <!-- Card 3 -->
                        <div class="bg-yellow-100 dark:bg-yellow-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-yellow-800 dark:text-yellow-200 mb-2">Orders</h3>
                            <p class="text-sm text-yellow-600 dark:text-yellow-300">Total Orders: 50</p>
                        </div>
                        <!-- Card 4 -->
                        <div class="bg-pink-100 dark:bg-pink-800 p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-semibold text-pink-800 dark:text-pink-200 mb-2">Feedback</h3>
                            <p class="text-sm text-pink-600 dark:text-pink-300">New Feedback: 10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Custom CSS for Dashboard */

/* Background and Card Styling */
.bg-white {
    background-color: #ffffff;
}

.bg-gray-800 {
    background-color: #1f2937;
}

.shadow-lg {
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.rounded-lg {
    border-radius: 0.75rem;
}

.overflow-hidden {
    overflow: hidden;
}

/* Header Styling */
.text-gray-900 {
    color: #374151;
}

.text-gray-100 {
    color: #f3f4f6;
}

.text-3xl {
    font-size: 1.875rem;
}

/* Card Styling */
.p-6 {
    padding: 1.5rem;
}

.mb-6 {
    margin-bottom: 1.5rem;
}

.grid {
    display: grid;
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}

.sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.gap-6 {
    gap: 1.5rem;
}

.text-lg {
    font-size: 1.125rem;
}

.text-sm {
    font-size: 0.875rem;
}

.font-semibold {
    font-weight: 600;
}

/* Link Styling */
.text-blue-500 {
    color: #3b82f6;
}

.text-blue-600:hover {
    color: #2563eb;
}

.text-blue-400 {
    color: #93c5fd;
}

.text-blue-300:hover {
    color: #a5b4fc;
}

    </style>
</x-app-layout>
