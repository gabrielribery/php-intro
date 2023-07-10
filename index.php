<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/textstyle.css">
    <title>Document</title>
</head>

<body>
<style>
    html, body {
        cursor: url('cursor/unicorn.cur'), auto;
    }
</style>
<?php
session_set_cookie_params(10800); //sek. also wenn nach 30 sek ein refresh gemacht wird geht der benutzer counter hoch
session_start();

?>

<?php include 'footer-header/header.php';?>
<?php echo '<h2>Gratulation. Du bist besucher Nr.:</h2>';
?>
<?php
$counterstand = intval(file_get_contents("counter.txt"));
 
if(!isset($_SESSION['counter_ip']))
   {
   $counterstand++;
   file_put_contents("counter.txt", $counterstand);
 
   $_SESSION['counter_ip'] = true;
   }
 
echo $counterstand;
?>


<?php
echo '<h2>Holla</h2>';
echo "<h3>Heute ist " . date("l") . " der " . date("d/m/Y") . "</h3>";
echo 'have fun to fill out the form<br/>';
echo 'crying is allowed but please do it quietly<br/>';
echo 'tears should not fall on the keyboard cause its not waterproof<br/>';
?>

<div class="gif">
    <img src="rainbow.gif" alt="GIF">
</div>

<?php include 'footer-header/footer.php'; ?>
<canvas id="myCanvas" style="position: fixed; top: 0; left: 0; z-index: -1; background-color: pink;"></canvas>
<script>
    var c = document.getElementById('myCanvas');
c.width = window.innerWidth;
c.height = window.innerHeight;

var ctx = c.getContext('2d');
var id;
var x_off;
var y_off;

var min_dist = 0;
var max_dist = 32;
var d = 150;
var n_stars = 250;

var Point = {
  x: 0,
  y: 0
};

var elements = [];

function project2d(point, dist) {
  var p = Object.create(Point);
  p.x = Math.round(d * point.x / (dist));
  p.y = Math.round(d * point.y / (dist));
  return p;
}

var StarElement = {
  p1: null,
  width: 3,
  dist: 0,

  draw: function() {

    var p2 = project2d(this.p1, this.dist);

    if (p2.x + x_off <= 0 || p2.x + x_off > c.width || p2.y + y_off <= 0 || p2.y + y_off > c.height) {
      this.dist = max_dist;
    } else {
      
      var percent = (1 - this.dist / max_dist);

      ctx.beginPath();
      ctx.strokeStyle = 'hsl(330, 100%, ' + percent * 100 + '%)'; //farbe gold -> ändern zu pink ctx.strokeStyle = 'hsl(, 100%, ' + percent * 100 + '%)';


      this.width = percent * 3;
      ctx.rect(p2.x + x_off, p2.y + y_off, this.width, this.width);

      ctx.stroke();
      ctx.closePath();
    }
  }
};

function createElements() {

  for (var i = 0; i < n_stars; i++) {

    var elem = Object.create(StarElement);
    elem.p1 = Object.create(Point);
    elem.p1.x = randomRange(-50, 50);
    elem.p1.y = randomRange(-50, 50);
    elem.dist = randomRange(0, max_dist);
    elements.push(elem);
  }
}

function update() {

  ctx.clearRect(0, 0, c.width, c.height);

  elements.forEach(function(elem, i, arr) {
    elem.dist = elem.dist - 0.2;
    elem.draw();
  });

}

function restart() {

  ctx.strokeStyle = 'hsl(50,100%,80%)';
  ctx.clearRect(0, 0, c.width, c.height);
  ctx.lineWidth = 2;
  ctx.moveTo(0, 0);

  x_off = c.width / 2;
  y_off = c.height / 2;

  elements = [];
  createElements();
  id = setInterval(update, 30);
}

restart();

window.onresize = function() {

  c.width = this.innerWidth;
  c.height = this.innerHeight;

  clearInterval(id);
  restart();
};

function randomRange(minVal, maxVal) {
  return Math.floor(Math.random() * (maxVal - minVal - 1)) + minVal;
}
</script>
</body>
</html>
