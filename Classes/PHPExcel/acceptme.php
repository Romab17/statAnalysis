<?php 
require_once 'IOFactory.php'; // IOFactory отвечает за чтение Excel-файлов
	include 'PHPExcel.php';
 $objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
 $objWriter->save('php://output');
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
  <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <h1>StatAnalys</h1>
	<div style="color: green;text-align:center;">
	Данные успешно изменены.<br>
	Выбирете дальнейшие действия.
	</div>
<div class="inputg" style="margin: 0 auto; text-align: center;margin-top:5%;">
      <form action="gapsfill.php" method="POST">
    <p><input type="submit" value="Заполнение пропусков"><br></p>
     </form>
	 
	 <form action="dublicates.php" method="POST">
    <p><input type="submit" value="Поиск дубликатов"><br></p>
     </form>
	 
	 <form action="anomedit.php" method="POST">
    <p><input type="submit" value="Поиск аномальных значений"><br></p>
     </form>
	 
	 <form action="downloader.php" method="POST">
    <p><input type="submit" value="Получить файл"><br></p>
     </form>
    </div>
	</div>
</body>
</html>