<html>
<head>
  <title>Recherche</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style/compte.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
</head>

<?php
require('headerpilote.php');
?>

<body>

  <div>
    <canvas id="myChart" style="margin-top:7rem;"></canvas>
  </div>

  <script>

    // Recupère les valeurs depuis le php
    var names = <?php echo json_encode($nom);?>;
    var tdr = <?php echo json_encode($tdr);?>;

    // Calcule la moyenne des temps de réaction
    var sum = 0;
    for (var i = 0; i < tdr.length; i++) {
      sum += tdr[i];
    };

    var medium = sum / tdr.length;

    // Créer un array pour une ligne constante sur le graph (moyenne)
    /*
    moyenne = [];

    for (var i = 0; i < tdr.length; i++) {
      moyenne[i] = medium;
    };
    */

    Chart.defaults.global.defaultFontFamily = "'Montserrat', sans-serif";
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: names,
            datasets: [{
                label: 'Temps de réaction des différents pilotes',
                data: tdr,
                fill: true,
                pointStyle: 'circle',
                pointRadius: 5,
                pointHoverRadius: 5,
                pointBackgroundColor: '#FECB00',
                pointBorderColor: '#FECB00',
                borderColor: ['#FECB00'],
                borderWidth: 1
            }]
        },
        options:{
          legend: {
            display: false
          },
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true,
					fontColor: "black"
				}
			}],
			xAxis:[{
				ticks: {
					fontColor: "black"
				}
			}]
		}
        }
    });

  </script>
</body>

<?php
require('footer.php');
?>

</html>