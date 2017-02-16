<?php
session_start();
include_once("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
#display_area 
{   position:absolute;
    top:0px;
    left:0px;
    padding:0px;
    width:499px;
    height:520px;
}
</style>

<script language="javascript">
function display(option)
{
    var blank = document.getElementById('blank');
    blank.style.zindex=0;
    var frozen_food = document.getElementById('frozen_food');
    frozen_food.style.zindex=0;
    var fresh_food = document.getElementById('fresh_food');
    fresh_food.style.zindex=0;
    var beverages = document.getElementById('beverages');
    beverages.style.zindex=0;
	var home_health = document.getElementById('home_health');
	home_health.style.zindex=0;
	var pet_food = document.getElementById('pet_food');
	pet_food.style.zindex=0;
    blank.style.visibility="hidden";
    frozen_food.style.visibility="hidden";
    fresh_food.style.visibility="hidden";
    beverages.style.visibility="hidden";
	home_health.style.visibility="hidden";
	pet_food.style.visibility="hidden";

    if (option == 1 )
    {
        frozen_food.style.zindex=5;
        frozen_food.style.visibility="visible";
    }
    if (option == 2 )
    {
        fresh_food.style.zindex=5;
        fresh_food.style.visibility="visible";
    }
    if (option == 3 )
    {
        beverages.style.zindex=5;
        beverages.style.visibility="visible";
    }
	if (option == 4 )
	{
		home_health.style.zindex=5;
		home_health.style.visibility="visible";
	}
	if (option == 5 )
	{
		pet_food.style.zindex=5;
		pet_food.style.visibility="visible";
	}
}
</script>
</head>

<body>
<div id="display_area" name="display_area">
<div id="top_half" style="position:absolute; visibility:visible" width="499" height="181" >
	<img src="images/top_half.png" width="499" height="181" border="0" usemap="#tophalfmap">    
	<map name="tophalfmap">
		<area shape="rect" coords="7,140,87,180" onmouseover="display(1); return true;">
     	<area shape="rect" coords="102,141,182,180" onmouseover="display(2); return true">      
     	<area shape="rect" coords="197,141,277,180" onmouseover="display(3); return true">				
		<area shape="rect" coords="293,141,373,180" onmouseover="display(4); return true">				
		<area shape="rect" coords="387,141,467,180" onmouseover="display(5); return true">
	</map>
</div>

<div id="bottomhalf" style="position:relative; top:181; width:499; height:339">
<!-- blank image -->
<img src="images/bottom_half.png" id="blank" width="499" height="339" border="0" style="z-index: 5; visibility:visible;">

<!-- frozen_food image -->
<img src="images/frozen_food.png" id="frozen_food" width="499" height="339" border="0" style="z-index: 0; position: relative; top: -339px; visibility:hidden;" usemap="#frozenfoodmap">
	<map name="frozenfoodmap">
		<area shape="rect" coords="7,132,88,171"; href="product_information.php?id=1002" target="top_right">
		<area shape="rect" coords="62,250,142,289"; href="product_information.php?id=1000" target="top_right">
		<area shape="rect" coords="156,250,236,289"; href="product_information.php?id=1001" target="top_right">
		<area shape="rect" coords="197,133,277,172"; href="product_information.php?id=1003" target="top_right">
		<area shape="rect" coords="255,249,335,288"; href="product_information.php?id=1004" target="top_right">
		<area shape="rect" coords="349,249,429,288"; href="product_information.php?id=1005" target="top_right">
	</map>
<!-- fresh_food image -->
<img src="images/fresh_food.png" id="fresh_food" width="499" height="339" border="0" style="z-index: 0; position: relative; top: -678px; visibility:hidden;" usemap="#freshfoodmap">
	<map name="freshfoodmap">
		<area alt="" title="" href="product_information.php?id=3002" shape="rect" coords="6,131,68,169" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3000" shape="rect" coords="35,250,115,289" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3001" shape="rect" coords="129,250,209,289" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3003" shape="rect" coords="143,131,205,170" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3004" shape="rect" coords="214,131,276,169" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3006" shape="rect" coords="283,131,344,168" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3007" shape="rect" coords="352,132,415,168" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=3005" shape="rect" coords="421,131,483,169" target="top_right"/>
	</map>

<!-- beverages image -->
<img src="images/beverages.png" id="beverages" width="499" height="339" border="0" style="z-index: 0; position: relative; top: -1017px; visibility:hidden;" usemap="#beveragesmap">
	<map name="beveragesmap">
		<area alt="" title="" href="product_information.php?id=4003" shape="rect" coords="21,245,83,283" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=4004" shape="rect" coords="91,245,152,283" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=4000" shape="rect" coords="161,245,223,284" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=4001" shape="rect" coords="230,244,292,283" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=4002" shape="rect" coords="300,245,362,283" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=4005" shape="rect" coords="394,137,474,176" target="top_right"/>
	</map>

<!-- home_health image -->
<img src="images/home_health.png" id="home_health" width="499" height="339" border="0" style="z-index: 0; position: relative; top: -1356px; visibility:hidden;" usemap="#homehealthmap">
	<map name="homehealthmap">
		<area alt="" title="" href="product_information.php?id=2002" shape="rect" coords="8,131,88,169" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2000" shape="rect" coords="63,250,143,289" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2001" shape="rect" coords="157,250,237,289" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2005" shape="rect" coords="198,131,279,170" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2003" shape="rect" coords="256,249,336,288" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2004" shape="rect" coords="350,249,430,288" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=2006" shape="rect" coords="389,131,469,170" target="top_right"/>
	</map>
		
<!-- pet_food image -->
<img src="images/pet_food.png" id="pet_food" width="499" height="339" border="0" style="z-index: 0; position: relative; top: -1695px; visibility:hidden;" usemap="#petfoodmap">
	<map name="petfoodmap">
		<area alt="" title="" href="product_information.php?id=5002" shape="rect" coords="103,131,183,170" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=5003" shape="rect" coords="198,131,278,170" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=5001" shape="rect" coords="256,249,336,288" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=5000" shape="rect" coords="350,249,430,288" target="top_right"/>
		<area alt="" title="" href="product_information.php?id=5004" shape="rect" coords="389,131,469,170" target="top_right"/>
	</map>
</div>
</div>
</body>
</html>