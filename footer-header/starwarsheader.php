<!DOCTYPE html>
<html>
<head>

  <title>Meine Seite</title>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);
html,
body {
  background: #222;
}

* {
  box-sizing: border-box;
}

#container {
  width: 80px;
  height: 80px;
  position: absolute;
  top: 0%;
  left: 0%;
}

#burger {
  cursor: pointer;
  opacity: 0;
  animation: fadein 0.2s ease 1s forwards;
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100%;
}
#burger .filling, #burger .bun {
  display: block;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%) rotate(0deg);
  height: 10%;
  width: 70%;
  transform-origin: 50% 50%;
  transition: top 0.4s ease 0.4s, transform 0.4s ease 0.4s;
}
#burger .filling:before, #burger .bun:before, #burger .filling:after, #burger .bun:after {
  content: "";
  display: block;
  height: 40%;
  background: white;
  position: absolute;
  top: 50%;
  transform: translate(0%, -45%);
  transition: background 0.2s ease, box-shadow 0.2s ease;
}
#burger .filling:before, #burger .bun:before {
  left: 0;
  width: calc(-1px + 75%);
  border-radius: 10px 0px 0px 10px;
}
#burger .filling:after, #burger .bun:after {
  right: 0;
  width: calc(-1px + 25%);
}
#burger:hover .bun.top:before {
  background: #fee;
  box-shadow: #f00 0px 0px 10px 1px;
}
#burger:hover .bun.bottom:before {
  background: #dff;
  box-shadow: #0ff 0px 0px 10px 1px;
}
#burger:hover .filling:before {
  background: #efe;
  box-shadow: #0f0 0px 0px 10px 1px;
}
#burger .bun.top {
  top: 25%;
}
#burger .bun.bottom {
  top: 75%;
}
#burger .filling {
  top: 50%;
  transform: translate(-50%, -50%) rotate(180deg);
  animation: green-ls-out 0.8s ease forwards;
}
#burger.active .bun {
  border-radius: 3px;
  top: 50%;
  transition: top 0.4s ease, transform 0.4s ease;
}
#burger.active .bun.top {
  transform: translate(-50%, -50%) rotate(-225deg);
}
#burger.active .bun.bottom {
  transform: translate(-50%, -50%) rotate(405deg);
}
#burger.active .filling {
  transform: translate(-50%, -50%) rotate(-90deg);
  animation: green-ls-in 0.8s ease forwards;
}

nav {
  font-family: Open Sans;
  color: white;
  background: #111;
  position: absolute;
  transform: translatex(-100%);
  transition: transform 0.2s ease;
  top: 80px;
  bottom: 0px;
  padding-right: 16px;
  width: 300px;
}
nav.show {
  transform: translatex(0%);
}
nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
nav ul li {
  background: #ecfcff;
  box-shadow: #4df 0px 0px 0px 2px;
  font-size: 1.75em;
  line-height: 1.25em;
  padding: 0px;
  padding-left: 0px;
  margin: 16px 0px;
  width: 0;
  border-radius: 0px 100px 100px 0px;
  transition: width 0.2s ease, padding 0.2s ease, color 0.2s ease, text-shadow 0.2s ease;
}
nav ul li:hover {
  box-shadow: #4df 0px 0px 20px 2px;
  text-shadow: #4df 0px 0px 6px, #4df 0px 0px 10px;
}
nav ul li:hover {
  width: 100%;
  padding: 0px 16px 0px 0px;
  color: black;
}
nav ul li a {
  display: block;
  text-decoration: none;
  width: 300px;
  color: inherit;
  padding-left: 16px;
}
nav ul li.green {
  background: #e6ffe6;
  box-shadow: #0f0 0px 0px 0px 2px;
}
nav ul li.green:hover {
  box-shadow: #0f0 0px 0px 20px 2px;
  text-shadow: #0f0 0px 0px 6px, #0f0 0px 0px 10px;
}
nav ul li.red {
  background: #ffe6e6;
  box-shadow: #f00 0px 0px 0px 2px;
}
nav ul li.red:hover {
  box-shadow: #f00 0px 0px 20px 2px;
  text-shadow: #f00 0px 0px 6px, #f00 0px 0px 10px;
}
nav ul li.purple {
  background: #fae6fa;
  box-shadow: #c0c 0px 0px 0px 2px;
}
nav ul li.purple:hover {
  box-shadow: #c0c 0px 0px 20px 2px;
  text-shadow: #c0c 0px 0px 6px, #c0c 0px 0px 10px;
}
nav ul li.yellow {
  background: #ffffe6;
  box-shadow: #ff0 0px 0px 0px 2px;
}
nav ul li.yellow:hover {
  box-shadow: #ff0 0px 0px 20px 2px;
  text-shadow: #ff0 0px 0px 6px, #ff0 0px 0px 10px;
}

@keyframes green-ls-in {
  0% {
    transform: translate(-50%, -50%) rotate(180deg);
  }
  50% {
    transform: translate(-50%, -50%) rotate(-90deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(-90deg) translate(200%, 0%);
  }
}
@keyframes green-ls-out {
  0% {
    transform: translate(-50%, -200%) rotate(-90deg);
  }
  50% {
    transform: translate(-50%, -50%) rotate(-90deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(180deg);
  }
}
@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}/*# sourceMappingURL=scsssw.css.map */
</style>
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
