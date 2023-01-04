<div class="col-xl-8">
    <div>
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crime Report in Santa Rosa, Laguna 2022</h5>

                        <!-- Line Chart -->
                        <canvas id="lineChart" style="345241max-height: 400px; display: block; box-sizing: border-box; height: 260px; width: 520.8px;" width="651" height="325"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#lineChart'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['Brngy 1','Brngy 2','Brngy 3','Brngy 4','Brngy 5','Brngy 6','Brngy 7','Brngy 8'],
                                        datasets: [{
                                            label: 'homicide',
                                            // data: [90, 59, 80, 81, 56, 55, 40],
                                            data: [0, 27, 32, 55, 6, 49, 62, 65],
                                            fill: false,
                                            borderColor: 'rgb(255, 99, 132)',
                                            backgroundColor: 'rgb(255, 99, 132)',
                                            tension: 0.1
                                        },
                                            {
                                                label: 'physical injury',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [27 ,33, 97, 92, 14, 29, 69, 12],
                                                fill: false,
                                                borderColor: 'rgb(255, 159, 64)',
                                                backgroundColor: 'rgb(255, 159, 64)',
                                                tension: 0.1
                                            },
                                            {
                                                label: 'rape',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [54, 89, 33, 31, 86 ,44 ,34 ,42],
                                                fill: false,
                                                borderColor: 'rgb(255, 205, 86)',
                                                backgroundColor: 'rgb(255, 205, 86)',
                                                tension: 0.1
                                            },
                                            {
                                                label: 'robbery',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [78, 71, 65, 76, 9, 82, 3, 99],
                                                fill: false,
                                                borderColor: 'rgb(54, 162, 235)',
                                                backgroundColor: 'rgb(54, 162, 235)',
                                                tension: 0.1
                                            },
                                            {
                                                label: 'theft',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [95, 25, 9, 4, 79, 64, 14, 88],
                                                fill: false,
                                                borderColor: 'rgb(153, 102, 255)',
                                                backgroundColor: 'rgb(153, 102, 255)',
                                                tension: 0.1
                                            },
                                            {
                                                label: 'carnapping of motor vehicles',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [16, 86, 39, 100, 7, 76, 34, 63],
                                                fill: false,
                                                borderColor: 'rgb(201, 203, 207)',
                                                backgroundColor: 'rgb(201, 203, 207)',
                                                tension: 0.1
                                            },
                                            {
                                                label: 'carnapping of motorcycles',
                                                // data: [90, 59, 80, 81, 56, 55, 40],
                                                data: [31, 52, 89, 58, 72, 62, 35, 38],
                                                fill: false,
                                                borderColor: 'rgb(75, 192, 192)',
                                                backgroundColor: 'rgb(75, 192, 192)',
                                                tension: 0.1
                                            },
                                        ]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    },
                                    layout: {
                                        padding: 20
                                    }
                                });
                            });
                        </script>
                        <!-- End Line CHart -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
