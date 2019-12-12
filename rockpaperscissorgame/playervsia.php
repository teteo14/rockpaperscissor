<!doctype html>
<html lang="en">
  <head>
<?php require('header.php') ?>
</head>

<body>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <p><h1>Player</h1><p>
<a class="bouton1"  onclick="get(0)"/></a>
<a class="bouton2"  onclick="get(1)"/></a>
<a class="bouton3"  onclick="get(2)"/></a>
    </div>
    <div class="col-sm">
      <p id="par">VS</p>
    </div>
    <div class="col-sm">
      <p id='title'>IA</p>
    <div id="result">
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
        <div class="alert alert-primary" role="alert" id="text2">
       <h1>Rules :</h1>
      You just had to choose between rock,paper or scissor by selecting it with your mouse.
        </div>
   </div>
  </div>

<script>
function get(int) {
  var xmlhttp= new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200 || this.status == 0) {
      document.getElementById("result").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","game.php?r="+int,true);
  xmlhttp.send();
}
</script>
  </body>
</html>