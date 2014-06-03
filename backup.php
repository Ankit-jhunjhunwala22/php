
<?php
session_start();
if(isset($_SESSION['name']))
{
echo "<!doctype html>";
echo "<html>";
echo "<head>";   
echo "<i><h1 align='center' style='background:#A683BA' color='yellow'>welcome".$_SESSION['name']."</h1></i>";

$con=mysqli_connect("localhost","root","","girls") or die("not conneted");
$result = mysqli_query($con,"select name,rating from first order by rating desc");
$p=array();
$c=0;
while($row=mysqli_fetch_assoc($result)){
$p[$c] = $row['name'];
$t[$c] = $row['rating'];
$c++;
}
?>
<script type="text/javascript" src="js/jeq.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="ind.js"></script>
<link rel="stylesheet" type="text/css" href="ui/indd.css" />
<link rel="stylesheet" type="text/css" href="ui/jquery-ui-1.10.3.custom.css" />
</head>

<body>
 <div id="div5" >
<h1>Hottest Brand</h1>
<p color=#50553d>A/c overall rating<img src="images/<?php echo $p[0] ?>.jpg" style="height:100px;width:100px"/><br><?php echo $p[0] ?>
<br>
</p>
<h1>Dumb Brand</h1>
<p color=#50553d>A/c overall rating<img src="images/<?php echo $p[--$c] ?>.jpg" style="height:100px;width:100px"/><br><?php echo $p[6] ?>
<br>
</p>
<h1>Sources</h1>
<p>google+<br>facebook;<br>rating
<br>left associative<br></p>
<h1>objection</h1>
<p>Sorry,can-t help<br>
want to submit nice pic</br>
<span color="white" style="background:#50553d;padding:5px">submit</span></p>
<h1>logout</h1>
<a href="unset.php" ><span color="white" style="background:#50553d;padding:5px">submit</span></p></a>

	</div>
	<div>
<table >
<tr>
<td  align="center" >
<td align="center">
  <div id="div1" class="poi" align="center" style="left:35%">
  <?php echo "<br>rating:".$t[0]."<br>".$p[0];?>
  <a href="trial.php?name=<?php echo $p[0];?>" >
  <button >vote</button></a>
  </div>
</td>
<td align="center">
<img  style="left:15%;top:0%;border-radius:30%;" id="qw" src="images/<?php echo $p[0];?>.jpg"/>
</td>
<br>
</tr>
<tr>
<td>
<div id="div11" class="poi" align="center">
<?php echo "<br>rating:".$t[1]."<br>".$p[1];?>
<a href="trial.php?name=<?php echo $p[1];?>" >
<button>vote</button>
</a>
</div>
</td>
<td>
<img class="fast" id="w" src="images/<?php echo $p[1];?>.jpg" />
</td>
<td>
<div id="div2" class="move" align="center">
<?php echo "<br>rating:".$t[2]."<br>".$p[2];?>
<a href="trial.php?name=<?php echo $p[2];?>" >
<button>vote</button>
</a>
</div>
</td>
<td  id="sec_data" >
<img  id="sec" src="images/<?php echo $p[2];?>.jpg" />
</td>
</tr>
<tr>
<td>
<div id="div3" class="poi" align="center">
<?php echo "<br>rating:".$t[3]."<br>".$p[3];?>
<a href="trial.php?name=<?php echo $p[3];?>" >
<button>vote</button>
</a>
</div>
</td>
<td id="sec_data">
<img  id="three" src="images/<?php echo $p[3];?>.jpg" />
</td>
<td>
<div class="move" id="div33" align="center">
<a href="trial.php?name=<?php echo $p[4];?>" >
<button>vote</button></a><?php echo "<br>rating:".$t[4]."<br>".$p[4];?>
</div>
</td>
<td id="first">
<img id="q" src="images/<?php echo $p[4];?>.jpg" />
</td>
<tr>
<td>
<div id="div4" class="poi" align="center">
<a href="trial.php?name=<?php echo $p[5];?>" >
<button>vote</button>
</a>
<?php echo "<br>rating:".$t[5]."<br>".$p[5];?>
</div>
</td>
<td id="third_data" >
<img  id="third" src="images/<?php echo $p[5]; ?>.jpg" />
</td>
<td>
<div id="seven" class="move" align="center">
<a href="trial.php?name=<?php echo $p[6];?>" >
<button>vote</button>
</a>
<?php echo "<br>rating:".$t[6]."<br>".$p[6];?>
</div>
</td>
<td id="third_data" >
<img  id="qwe" src="images/<?php echo $p[6]; ?>.jpg" />
</td>
</tr>
</table>
</div>
</div>
</body>
</html>
<?php
}
else
{
echo "<h1 align='center'>NOT LOGGED IN<h1>";
include 'login.php';
}
?>
