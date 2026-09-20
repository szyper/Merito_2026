<?php
    require_once "./classes/student.php";

$student1 = new Student("Jan", 18, "ZSK");
$student2 = new Student("Anna", 20, "ZSŁ");

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
	  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Uczniowie</h1>
  <h2>Informacje o uczniach</h2>

  <?php
    echo $student1->getInfo()."<br>".$student2->getInfo()."<hr>";
  ?>

		<h2>Informacje HTML - HEREDOC</h2>
  <?php
	  echo $student1->getHtml();
	  echo $student2->getHtml();

  ?>
</body>
</html>

