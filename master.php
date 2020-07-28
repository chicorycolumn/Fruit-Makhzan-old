<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/master.css" type="text/css">
  <meta charset="utf-8">
  <title>Fruit-Makhzan</title>
  <link rel="icon" href="../images/favicon.ico" type="image/ico">
</head>
<body>
<div class="wrapper" onclick="false ? window.location.href = '../play' : ''">

  <header class="mainHeader">
 
  <a href="/fruit_makhzan/home">Home</a>
  <a href="/fruit_makhzan/play/create.php">Create</a>
  <a href="/fruit_makhzan/play">Play</a>
          
          
  </header>

  <div class="contentWrapper">
    <section class="content">
      <?php echo $content; ?>
    </section>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>