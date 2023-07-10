<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="scsssw.css"> <!--css style für startwars header-->

  <title>Meine Seite</title>
</head>
<body>
  <div id="container">
    <div id="burger">
      <div class="bun top"></div>
      <div class="filling"></div>
      <div class="bun bottom"></div>
    </div>
  </div>

  <nav>
    <ul>
      <li>
        <a href="">Result</a>
      </li>
      <li class="green">
        <a href="index.php">Startseite</a>
      </li>
      <li class="red">
        <a href="form.php">form</a>
      </li>
      <li class="yellow">
        <a href="fibo.php">Fibonacci</a>
      </li>
      <li class="purple">
        <a href="geoscript.html">IP JS</a>
      </li>
    </ul>
  </nav>

  <script>
   const nav = document.querySelector('nav')

document.querySelector('#burger').addEventListener('click',(e) => {
  e.currentTarget.classList.toggle("active")
  nav.classList.toggle('show')
})

  </script>
</body>
</html>
