<?php
  include_once'fh/header.php'
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Order Confermation </title>
    </head>
<body style="text-align: center">
<h1>Thank you for your order</h1>
<h2>Thank you for shopping with us</h2>
<h3 style="display:inline;">Order namber# </h3><h3 style="display:inline"; id="order"></h3>

<h3 id="long">Click here to see how long is taking for you order to arive</h3>
<h1 id="arrive"></h1>
<div align="center"><button   onclick="show_date()" >click</button></div>
<br><br>

<script type="text/javascript">
		

		
			var orderNum=Math.floor(Math.random() * (100000000 - 10000000 + 1) + 100000000);
			document.getElementById("order").innerHTML= orderNum;


			function change_date(){
			setTimeout('show_date()',1000);
		}

		function show_date(){
			var curr_date =new Date();
			
			document.getElementById("long").innerHTML= "until your order to arrive ";
			var traget_date= new Date(2022,8,0,10,0,0);

			

			var diff= traget_date - curr_date;

			//document.getElementById("diif_date").innerHTML= diff;

			var diff_d=Math.floor(diff/(1000*60*60*24));
			var diff_h=Math.floor(diff%(1000*60*60*24)/(1000*60*60));
			var diff_m=Math.floor(diff%(1000*60*60)/(1000*60));
			var diff_s=Math.floor(diff%(1000*60)/(1000));

			document.getElementById("arrive").innerHTML=diff_d+":"+diff_h+":"+diff_m+":"+diff_s;



			
			change_date();
		}

			
		
		
		
	</script>
<?php
  include_once'fh/foot.php'
?>