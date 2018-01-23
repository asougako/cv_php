<!DOCTYPE html>

<HTML lang="fr">
	<HEAD>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="./style.css">
		<script src="./resp.js"></script>
	</HEAD>
	<BODY>
		<div id="bg">
			<div id="content">
				<div id="portrait">
					<img src="./resources/troll.png" title="portrait" alt="troll" />
				</div>
				<div id="div1">
					<div id="div2">
						<H2 onclick="myFunction('para_info')">Infos perso</H2>
						<p id="para_info"><?php $para='info'; include 'lorem_ipsum.php';?></p>
					</div>
					<div id="div3">
						<div id="comp">
							<H2 onclick="myFunction('para_comp')">Competences</H2>
							<p id="para_comp"><?php $para='comp'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="form">
							<H2 onclick="myFunction('para_form')">Formations</H2>
							<p id="para_form"><?php $para='form'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="exp">
							<H2 onclick="myFunction('para_exp')">Experiences</H2>
							<p id="para_exp"><?php $para='exp'; include 'lorem_ipsum.php';?></p>
						</div>
						<div id="hob">
							<H2 onclick="myFunction('hob_img')">Hobbits</H2>
							<img id="hob_img" src="./resources/hobbits.jpeg" title="Hobbit" alt="Hobbit" />
						</div>
					</div>
					<div id="div4">
						<H2>Projets</H2>
						<p><a href="">ft_ls</a></p>
						<p><a href="">ft_printf</a></p>
						<p><a href="">push_swap</a></p>
						<p><a href="">ft_projet</a></p>
						<p><a href="">ft_projet</a></p>
					</div>
				</div><!--portrait-->
			</div><!--content-->
		</div><!--bg-->
	</BODY>
</HTML>





