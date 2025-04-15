<?php
// url : example.com/input?name=Tengku Arya Saputra
// input : <scipt>alert(1)</script>
$nama1 = $_GET['name']; // output <scritp>alert(1)</script>
$nama2 = htmlspecialchars($_GET['name']); //output  &lt;script&gt;alert(&#039;XSS!&#039;)&lt;/script&gt; -> encode tag html
$nama3 =  strip_tags($_GET['name']); // alert('XSS!') -> menghilangkan tag HTML
$nama4 = htmlentities($_GET['name']); // &lt;script&gt;alert(&#039;XSS!&#039;)&lt;/script&gt; -> dijalankan sebagai seperti text biasa
$nama5 = htmlentities(strip_tags(htmlspecialchars($_GET['name']))); // Secure Validation
?>

<html>
  <head>
    <title>TEsted</title>
  </head>
  <body>
    <span>Vulnerable : <?= $nama1 ?></span><br>
    <span>Htmlspecialchars : <?= $nama2 ?></span><br>
    <span>Strip_tags : <?= $nama3 ?></span><br>
    <span>Htmlentities : <?= $nama4 ?></span><br>
    <span>Htmlentities + strip_tags + htmlspecialchars : <?= $nama5 ?></span><br>
  </body>
</html>
