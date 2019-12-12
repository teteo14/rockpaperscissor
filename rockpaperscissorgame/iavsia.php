<!doctype html>
<html lang="en">
 <head>
<?php require('header.php') ?>
</head>

<body>
  <div class="relative">
    <p>
        <div class="alert alert-primary" role="alert" id="text2">
       <h1>IA VS IA</h1>
      Just use the button Play to see a battle of rock paper scissor against 2 IA
      <p><p>
      <button type="button" class="btn btn-primary" onclick="get(3)">Play</button>
        </div>
      <p>
      <p>
  <div id="result">
</div>
</div>

<!--Javascript used to send to  -->
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