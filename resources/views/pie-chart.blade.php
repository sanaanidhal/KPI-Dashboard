<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bar Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 100%; margin: auto;">
        <canvas id="pieChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('pieChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($data['labels']),
                datasets: [{
    label: 'Niveau de maîtrise des compétences',
    data: @json($data['data']),
    backgroundColor: [
        'rgb(186,225,255)',
      'rgb(186,255,201)',
      'rgb(54, 162, 235)',
      'rgb(0, 163, 108)'
    ],
    hoverOffset: 4
  }]
}});
    </script>
    </body>
</html>