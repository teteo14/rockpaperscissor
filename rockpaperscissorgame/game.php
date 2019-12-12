<?php
$r = $_REQUEST['r'];

if ($r == 0) {
iavsplayer("rock");
} 
if ($r == 1) {
iavsplayer("paper");
} 
if ($r == 2) {
iavsplayer("scissor");
}
if ($r == 3) {
iavsia();
}

// Player VS IA
        function iavsplayer($x) {    
            $array = array('rock','paper','scissor');
            $ia = array_rand($array,1); 
            if ($x == $array[$ia])  //egality 
                  {
                  echo '<html><img src="img/'.$array[$ia].'2.png" width="150" height="110"/></html>';
                  echo '<html><br/><h1>draw !<h1></html>';
                  }
                   if (($x=="rock" AND $array[$ia]=="paper")OR($x=="paper" AND $array[$ia]=="scissor")OR($x=="scissor" AND $array[$ia]=="rock"))  //IA Win
                      {
                      echo '<html><img src="img/'.$array[$ia].'2.png" width="150" height="110"/></html>';
                      echo '<html><br/><h1>you lose !<h1></html>';
                      }
                        if (($x=="rock" AND $array[$ia]=="scissor")OR($x=="paper" AND $array[$ia]=="rock")OR($x=="scissor" AND $array[$ia]=="paper")) //IA lose
                          { 
                          echo '<html><img src="img/'.$array[$ia].'2.png" width="150" height="110"/></html>';
                          echo '<html><br/><h1>you win !<h1></html>';
                          }
                        }
// IA VS IA
        function iavsia() {
            $array = array('rock','paper','scissor');
            $ia = array_rand($array,1); 
            $ia2 = array_rand($array,1);
            if ($array[$ia2] == $array[$ia]) 
                   {
                  echo '<html><img src="img/'.$array[$ia].'.png" width="150" height="110"/></html>';
                  echo '<html><img src="img/'.$array[$ia].'2.png" width="150" height="110"/></html>';
                  echo '<html><br/><h1> Draw !<h1></html>';
                   }
                   if (($array[$ia2]=="rock" AND $array[$ia]=="paper")OR($array[$ia2]=="paper" AND $array[$ia]=="scissor")OR($array[$ia2]=="scissor" AND $array[$ia]=="rock")) 
                    {
                    echo '<html><img src="img/'.$array[$ia].'.png" width="150" height="110"/></html>';
                    echo '<html><img src="img/'.$array[$ia2].'2.png" width="150" height="110"/></html>';
                    echo '<html><br/><h1> IA 1 Won !<h1></html>';
                    }
                    if (($array[$ia2]=="rock" AND $array[$ia]=="scissor")OR($array[$ia2]=="paper" AND $array[$ia]=="rock")OR($array[$ia2]=="scissor" AND $array[$ia]=="paper"))
                    {
                    echo '<html><img src="img/'.$array[$ia2].'.png" width="150" height="110"/></html>';
                    echo '<html><img src="img/'.$array[$ia].'2.png" width="150" height="110"/></html>';
                    echo '<html><br/><h1> IA 2 Won !<h1></html>';
                    }
        }
 ?>