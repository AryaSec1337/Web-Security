<?php
// url : example.com/input?name=Tengku Arya Saputra
// input : <scipt>alert(1)</script>
$nama = $_GET['name']; // output <scritp>alert(1)</script>
$nama = htmlspecialchars($_GET['name']); //output  &lt;script&gt;alert(&#039;XSS!&#039;)&lt;/script&gt; -> encode tag html
$nama =  strip_tags($_GET['name']); // alert('XSS!') -> menghilangkan tag HTML
$nama = htmlentities($_GET['name']); // &lt;script&gt;alert(&#039;XSS!&#039;)&lt;/script&gt; -> dijalankan sebagai seperti text biasa
$name = htmlentities(strip_tags(htmlspecialchars($_GET['name']))); // Secure Validation
?>

<html>
  <head>
    <title>TEsted</title>
  </head>
  <body>
    <span>Hallo semuanya nama saya <?= $nama ?></span>
  </body>
</html>
