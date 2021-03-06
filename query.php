<!DOCTYPE html>
<html style="height:100%">
<head>
<link rel="stylesheet" type="text/css" href="t.css"/>
<script async type="text/javascript" id="_fed_an_ua_tag" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=HHS&subagency=NIH-NIA"></script>
</head>
<body style="height:100%">

<div style="width:1000px;height:100px;position:absolute;left:0;top:0;overflow:hidden;background-color:#617f10">
	<img style="position:absolute;top:5px;left:45px" src="logo2.bmp" height=90px>
	<ul id="main-nav">
		<li id="main-navli"><a id="main-navli" href="#"><u>Home</u></a></li>
		<li id="main-navli"><a id="main-navli" href="features.php">Features</a></li>
		<li id="main-navli"><a id="main-navli" href="tutorial.php">Tutorial</a></li>
		<li id="main-navli"><a id="main-navli" href="about.php">About</a></li>
		<li id="main-navli"><a id="main-navli" href="contact.php">Contact</a></li>
	</ul>
</div>

<div style="width:1000px;height:50px;position:absolute;left:0;top:100px;overflow:hidden;background-color:#7A991A"> 
	<h1 style="color:#FFFFFF;margin:0;padding:5px;font-family:Verdana,Geneva,sans-serif;position:absolute;left:50px">SEARCH</h1>
	<p> 
		<form style="position:absolute;left:500px;top:25%" name = "input" action = "client.cgi" method="GET">
		<input type="text" id="text" name ="genes">
		<input type="submit" id="submit" value="Submit">
		</form> 
	</p>
</div>

<div style="width:1000px;position:absolute;left:0px;top:150px;bottom:10px;overflow:auto;background-color:#EEEEEE">
	<div style="width:700px;height:100%;position:absolute;left:150px;top:0px;bottom:10px;overflow:auto:background-color:#FFFFFF">
	<h3><i>Textrous!</i> : Finding Word Associations from Gene Sets</h3>
	<hr />
	<p style="text-indent:50px"><i>Textrous!</i> uses latent semantic indexing to find word associations from relevant PubMed abstracts, free PubMed full-length articles, Jackson Laboratory Phenotype Annotations, and the Online Mendelian Inheritance in Man. </p>
	<p style="text-indent:50px">To begin your search, type or paste one or more genes delimited by a space into the search box. </p>
	<br/>
	<img width=700px src="front.png">
	</div>
</div>

</body>
</html>
