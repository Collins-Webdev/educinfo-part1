<?php 
session_start() ;
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style étudiant.css">

	<title>Etudiant X's Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
        <a href="#" class="brand">
            <i class="fa fa-hand-sparkles"></i>
            <span class="text">Hello
				<?php  
				echo $_SESSION['prenom'] ;
				?>
				</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class="fa fa-chalkboard-teacher"></i>
                    <!-- <i class="fa fa-border-all"></i> -->
                    <span class="text"><?php  
				echo $_SESSION['prenom'] . "&nbsp" . $_SESSION['nom'] ;
				?></span>
                </a>
            </li>
            <li>
                <a href="./img/5.jpg" target="_blank">
                    <i class="fa fa-trophy"></i>
                    <span class="text">Mes résultats</span>
                </a>
            </li>
            <li>
                <a>
                    <i class="fa fa-book-reader"></i>
                    <!-- <i class="fa fa-school"></i> -->
                    <span class="text">Programme des cours</span>
                </a>
            </li>
            <li>
                <a>
                    <i class="fa fa-pencil-ruler"></i>
                    <span class="text">Programme des devoirs</span>
                </a>
            </li>
            <li>
                <a href="./img/sc.jpg" target="_blank">
                    <i class="fa fa-dollar-sign"></i>
                    <span class="text">Point sur la scolarité</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="text">Paramètre</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class="fa fa-sign-out-alt"></i>
                    <span class="text">Déconnexion</span>
                </a>
            </li>
        </ul>
    </section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class="fa fa-bars "></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Rechercher..">
                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                </div>
				
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='fa fa-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>
						<?php  
				echo $_SESSION['prenom'] . "&nbsp" . $_SESSION['nom'] ; ?>
				 </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Industriel</a>
						</li>
						<li><i class='fa fa-angle-right' ></i></li>
						<li>
							<a class="active" href="#">Licence 3</a>
						</li>
					</ul>
				</div>
				<a href="./img/bulletin étudiant X.docx" class="btn-download">
					<i class='fa fa-cloud-download-alt' ></i>
					<span class="text">Télécharger Bulletin</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='fa fa-calendar-check'></i>
					<span class="text">
					<a href="img/5.jpg" target="_blank"><h3 class="rtt">Résultats</h3></a>

					<a href="img/5.jpg" target="_blank"><p class="rtt">Bulletin</p></a>
					</span>
				</li>
				<li>
					<i class='fa fa-eye' ></i>
					<span class="text">
					<a href="presence.html" target="_blank">	<h3 class="rtt">Présence</h3>
						<p class="rtt">Aux cours</p></a>
					</span>
				</li>
				<li>
					<i class='fa fa-comment-dots' ></i>
					<span class="text">
						<h3 class="rtt">Méssages</h3>
						<p class="rtt">Chat box de classe</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Programme des cours</h3>
						<i class='fa fa-search' ></i>
						<i class='fa fa-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>MATIÈRES</th>
								<th>DATES</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="img/gk.png">
									<p>Bases de <br> Données</p>
								</td>
								<td>17-03-2023</td>
							</tr>
							<tr>
								<td>
									<img src="img/hg.png">
									<p>Calculs <br>Matriciels</p>
								</td>
								<td>17-03-2023</td>
							</tr>
							<tr>
								<td>
									<img src="img/se.png">
									<p>Informatique <br> Fondamantale</p>
								</td>
								<td>18-03-2023</td>
							</tr>
							<tr>
								<td>
									<img src="img/aj.png">
									<p>Language <br> C++</p>
								</td>
								<td>18-03-2023</td>
							</tr>
							<tr>
								<td>
									<img src="img/kl.png">
									<!-- <i class='fa fa-user' ></i> -->
									<p>ÉLectronique <br> Analogique</p>
								</td>
								<td>19-03-2023</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Programme des devoirs</h3>
						<i class='fa fa-plus' ></i>
						<i class='fa fa-filter' ></i>
					</div>

					<table>
						<thead>
							<tr class="yosh">
								<th class="droit">MATIÈRES</th>
								<th class="gauche">DATES</th>
							</tr>
					</thead>
					</table>	
					 <ul class="todo-list">
						<li class="completed">
							<p>ÉLectronique <br> Numérique</p>
							<span>12-07-2023</span>
						</li>
						<li class="completed">
							<p>Circuits <br> Logiques</p>
							<span>12-07-2023</span>
						</li>
						<li class="completed">
							<p>ÉLectronique <br> Analogique</p>
							<span>13-07-2023</span>
						</li>
						<li class="completed">
							<p>Droit des <br> Affaires</p>
							<span>13-07-2023</span>
						</li>
						<li class="completed">
							<p>Analyse <br> Combinatoire</p>
							<span>14-07-2023</span>
						</li>
						
					</ul> 
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>