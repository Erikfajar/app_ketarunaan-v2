<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- script Chart Pelanggaran --}}
<script>
      var dates = {!! json_encode($dates) !!};
    var countsA = {!! json_encode($countsA) !!};
    var countsB = {!! json_encode($countsB) !!};
    var countsC = {!! json_encode($countsC) !!};

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // Tipe grafik: 'line'
        data: {
            labels: dates,
            datasets: [
                {
                    label: 'Tingkat 1',
                    data: countsA,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(144, 238, 144, 0.2)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                },
                {
                    label: 'Tingkat 2',
                    data: countsB,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(144, 238, 144, 0.2)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                },
                {
                    label: 'Tingkat 3',
                    data: countsC,
                    borderColor: 'rgba(255, 206, 86, 1)',
                    backgroundColor: 'rgba(144, 238, 144, 0.2)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                }
            ]
        },
        options: {
            responsive: true,
        maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

{{-- Script Chart Prestasi --}}
<script>
      var datess = {!! json_encode($datess) !!};
    var countsD = {!! json_encode($countsD) !!};
    var countsE = {!! json_encode($countsE) !!};
    var countsF = {!! json_encode($countsF) !!};

    var ctx = document.getElementById('myChartt').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // Tipe grafik: 'line'
        data: {
            labels: datess,
            datasets: [
                {
                    label: 'Tingkat 1',
                    data: countsD,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                    
                },
                {
                    label: 'Tingkat 2',
                    data: countsE,
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                    
                },
                {
                    label: 'Tingkat 3',
                    data: countsF,
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 3,
                    fill: true,
                    showLine: true, // Ini yang mengatur garis
            pointRadius: 0, // Ini yang menghilangkan titik
                    
                }
            ]
        },
        options: {
            responsive: true,
        maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<script>
    // Data dari controller
    var data = {!! json_encode($data) !!};
    var labels = {!! json_encode($labels) !!};
    var backgroundColor = {!! json_encode($backgroundColor) !!};

    var ctx = document.getElementById('donutChart').getContext('2d');
    var donutChart = new Chart(ctx, {
        type: 'doughnut', // Tipe grafik Donut
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColor,
                borderWidth: 0, // Tidak ada border
            }]
        },
        options: {
            responsive: true,
            // Menonaktifkan aspek rasio
        }
    });
</script>
<script>
    // Data dari controller
    var dataP = {!! json_encode($dataP) !!};
    var labelsP = {!! json_encode($labelsP) !!};
    var backgroundColorP = {!! json_encode($backgroundColorP) !!};

    var ctx = document.getElementById('donutChartt').getContext('2d');
    var donutChart = new Chart(ctx, {
        type: 'doughnut', // Tipe grafik Donut
        data: {
            labels: labelsP,
            datasets: [{
                data: dataP,
                backgroundColor: backgroundColorP,
                borderWidth: 0, // Tidak ada border
            }]
        },
        options: {
            responsive: true,
        }
    });
</script>