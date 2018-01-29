<!DOCTYPE html>

<HTML lang="fr">
	<HEAD>
		<meta charset="UTF-8">
		<link rel="icon" type="image/png" src="http://piq.codeus.net/static/media/userpics/piq_261595_400x400.png">
		<link type="text/css" rel="stylesheet" href="style.css">
		<script src="./resp.js"></script>
	</HEAD>
	<BODY>


			<a id="top" href="#bot">TO BOTTOM</a>
		<div id="bg">
			<div id="content">
				<div id="portrait">
					<img src="./resources/troll.png" title="portrait" alt="troll" />
				</div>
				<div id="div1">
					<div id="div2">
						<H2 onclick="myFunction2('para_info')">Infos perso</H2>
						<p id="para_info"><?php $para='info'; include 'lorem_ipsum.php';?></p>
						<H2 onclick="myFunction2('para_info2')">Infos perso</H2>
						<p id="para_info2"><?php $para='info'; include 'lorem_ipsum.php';?></p>
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
							<img id="hob_img" src="resources/hobbits.jpeg" title="Hobbit" alt="Hobbit" />
						</div>
					</div>
					<div id="div4">
						<H2>Projets</H2>
						<ul>
							<li><a href="">EOE		</a></li>
							<li><a href="">IVL-2	</a></li>
							<li><a href="">ft_ls	</a></li>
							<li><a href="">ft_printf</a></li>
							<li><a href="">push_swap</a></li>
						</ul>
						<H2>Projets</H2>
						<ul>
							<li id="but">Click me!</li>
							<ul id="projects">
								<li>EOE</li>
								<li>IVL-2</li>
								<li>ft_ls</li>
								<li>ft_printf</li>
								<li>push_swap</li>
							</ul>
						</ul>
					</div>
				</div><!--portrait-->
			</div><!--content-->
		</div><!--bg-->
		<nav>
		<a id="bot" href="#top">TO TOP</a>
		</nav>
	</BODY>
</HTML>

