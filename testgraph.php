<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="path/to/chartjs/dist/chart.js"></script>
</head>
<body>

    <div>
      <canvas id="myChart" width="400" height="400"></canvas>
    </div>

  <script>

    <?php 
    $nom = ['bleu', 'blanc', 'rouge', 'vert', 'jaune', 'noir'];
    $tdr = [12, 4, 2, 6, 5, 1];
    ?>
    var names = <?php echo json_encode($nom);?>;
    var tdr = <?php echo json_encode($tdr);?>;

    //var names = ['bleu', 'blanc', 'rouge', 'vert', 'jaune', 'noir'];
    //var tdr = [12, 4, 2, 6, 5, 1];

    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: names,
            datasets: [{
                label: '# of Votes',
                data: tdr,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
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
</body>
</html>