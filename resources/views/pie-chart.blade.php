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
    label: 'Skill Proficiency Level',
    data: @json($data['data']),
    backgroundColor: [
        'rgba(18, 31, 137)',
      'rgba(106, 18, 137)',
      'rgba(75, 192, 192, 1)',
      'rgba(248, 203, 0)'
    ],
    hoverOffset: 4
  }]
}});
    </script>
    </body>
</html>