<template>
    <Frontend>
        <div class="flex flex-col justify-center items-center px-24 py-[100px] container-fluid bg-gray-100">
            <div class="flex flex-col items-center justify-center max-w-md p-8 mx-auto mb-12 rounded-lg shadow-lg bg-gray-50">
                <!-- Upload Section Title -->
                <p class="mb-4 text-xl font-semibold text-gray-800">Upload Raw Data:</p>

                <!-- File Input Section -->
                <div class="flex flex-col items-center w-full space-y-4">
                    <!-- File Input Label -->
                    <label for="file-upload" class="text-lg font-medium text-gray-600">Select a file to upload:</label>

                    <!-- File Upload Input -->
                    <input
                        id="file-upload"
                        type="file"
                        accept=".txt"
                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    />

                    <!-- Optional Instruction Text -->
                    <p class="mt-2 text-sm text-gray-500">Only .txt files are allowed</p>
                </div>
            </div>

            <!-- Chart Container -->
            <div class="w-[1000px] h-[550px] bg-blue-100 rounded-xl">
                <canvas id="myChart"></canvas>
            </div>
            <div class="p-6 rounded-lg shadow-lg mt-14 bg-gray-50">
                <label class="block mb-4 text-2xl font-semibold text-gray-800 shadow-xl bg-gradient-to-r from-yellow-400 to-yellow-100 max-w-36">FIRST LAYER</label>
                <!-- Table with Full Width -->
                <table class="overflow-hidden border border-gray-300 rounded-lg shadow-2xl table-auto">
                    <thead class="text-white bg-gradient-to-r from-blue-700 to-blue-400">
                        <tr>
                            <th class="px-3 py-2 text-sm font-medium text-center">Date</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Code&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Order&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Type</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Lot&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Furnace&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Coating&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Zone</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Pass&nbsp;No</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Br</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">iHc</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">iHk</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">BHMax</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Hr95</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Hr98</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">iHciHk</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Br4pai</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">bHc</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Squareness</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">4paild</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">4pails</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">4paila</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Tracer</th>
                            <th class="px-3 py-2 text-sm font-medium text-center">Sample with&nbsp;Variance</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td colspan="24" class="px-3 py-3 text-sm text-center bg-gradient-to-r from-blue-700 to-blue-400"></td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">AVG</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">MAX</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">MIN</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700">0</td>
                            <td class="px-3 py-2 text-sm text-center text-gray-700"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Frontend>
  </template>

  <script setup>
    import Frontend from '@/Layouts/FrontendLayout.vue';
    import { ref, onMounted } from 'vue';
    import { Chart, registerables } from 'chart.js'; // Import all required components

    // Register all components from Chart.js
    Chart.register(...registerables); // Register the necessary components (e.g., linear scale, etc.)

    onMounted(() => {
    const ctx = document.getElementById('myChart').getContext('2d');

    // Initialize Chart.js with static data
    new Chart(ctx, {
        type: 'line', // Line chart type
        data: {
        datasets: [
            {
            label: 'Dataset 1',
            data: [
                { x: 4783.843, y: -0.234 },
                { x: 4784.391, y: 12747.743 },
                { x: 4894.063, y: 13747.097 },
                { x: 5094.673, y: 14747.050 },
                { x: 5294.509, y: 14847.401 },
                { x: 20100.481, y: 14947.628 },
                { x: 23400.450, y: 15147.370 },
                { x: 23421.419, y: 15147.449 },
            ],
            borderColor: 'blue',
            fill: false,
            xAxisID: 'x1', // Link to the first x-axis
            },
            {
            label: 'Dataset 2',
            data: [
                { x: 0, y: -2500 },
                { x: 0, y: 14500 },
                { x: 1500, y: 15600 },
                { x: 3000, y: 16500 },
                { x: 19000, y: 17000 }
            ],
            borderColor: 'green',
            fill: false,
            xAxisID: 'x2', // Link to the second x-axis
            },
            {
            label: 'Dataset 3',
            data: [
                { x: -5000, y: 2500 },
                { x: -5000, y: 17500 },
                { x: 6500, y: 19600 },
                { x: 19000, y: 19600 },
                { x: 19000, y: 19600 }
            ],
            borderColor: 'yellow',
            fill: false,
            xAxisID: 'x3', // Link to the second x-axis
            }
        ]
        },
        options: {
        responsive: true,
        scales: {
            x1: {
            type: 'linear', // Linear scale for the first x-axis
            position: 'bottom', // Position it at the bottom
            min: -50000,   // Set the minimum value for the x-axis
            max: 50000,  // Set the maximum value for the x-axis
            },
            x2: {
            type: 'linear', // Linear scale for the second x-axis
            position: 'top', // Position it at the top
            min: -50000,   // Set the minimum value for the x-axis
            max: 50000,  // Set the maximum value for the x-axis
            ticks: {
                display: false, // Hide the x-axis ticks (labels)
            },
            },
            x3: {
            type: 'linear', // Linear scale for the second x-axis
            //position: 'top', // Position it at the top
            min: -50000,   // Set the minimum value for the x-axis
            max: 50000,  // Set the maximum value for the x-axis
            ticks: {
                display: false, // Hide the x-axis ticks (labels)
            },
            },
            y: {
            type: 'linear', // Use a linear scale for the y-axis
            position: 'left', // Position it on the left
            min: -20000,   // Set the minimum value for the x-axis
            max: 20000,  // Set the maximum value for the x-axis
            },
        },
        },
    });
    });
  </script>
