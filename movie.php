

<?php
include 'header.php';
require_once 'imdb.php';
require_once 'database.php';


$imdbs = imdb::getImdbId();

$imdb_array = [];
foreach ($imdbs as $imdb)
{
    $imdb_array[] = $imdb->id;
}


?>
	<div class="backgroundcolor">
		<a href="homepage.php"><img src="images/title.jpg" alt="title_picture"></div></a>
		<hr>
		<div class="with-child">
			<a href="movie.php" class="defaultmovie">Movies</a>
			<a href="actor.php" class="defaultactor">Actress</a>
			<div class="moveleft">
				<h2 class="moviename">Rogue One</h2> Year: 2016
				<h3>Rating:  8 / 10  </h3>
				<h3>Plot:</h3>
				As the rebellion captures and spreads its influence among people,the Galactic empire builds a super weapon cab able to destroy a whole planet. So the rebellion sent a group of rebels to steal plans that hide secrets how to destroy this weapon of mass destruction
				The Rebel Alliance makes a risky move to steal the plans for the Death Star, setting up the epic saga to follow.
				
			</div>
			<h3 class="cast">Cast:</h3>
			<div class="felfloat">
				<span class="caption">Felicity Jones</span>
				<a href="actor.php"><img src="images/felicity-jones.jpg" alt="Felicity Picture" style="width:100px;height:130px"></a>
				
				
				<span class="caption">Diego Luna</span>
				<img src="images/diego-luna.jpg" alt="Diego Picture" style="width:100px;height:130px">
			</div>
			<div class="alanfloat">
				<span class="caption">Alan Tudyk</span>
				<img src="images/alan-tudyk.jpg" alt="Alan Picture" style="width:100px;height:130px">
				
				
				<span class="caption">Donnie Yen</span>
				<img src="images/donnie-yen.jpg" alt="Donnie Picture" style="width:100px;height:130px">
			</div>
		</div>


		<div class="child">
			<h3>Reviews:</h3>

			<h4>Quick, spoiler-less thoughts from Hollywood Premiere Attendee</h4>

			<p class="movie">
				Rogue One was quite awesome, and quite different from the movies that came before. It was frightening, tense, very dark, VERY dirty (literally: maybe Mon Mothma was the only character without a layer of filth make-upped onto her face. And she looked so much like Mothma from ROTJ!) Some differences were somewhat striking, but overall it absolutely felt like a Star Wars movie should feel. Lots of familiar faces to see, super tense and exciting and beautiful. I was SO fortunate to be able to attend the premiere at the Pantages Saturday night, and can't wait to see it again Thursday night! There's never been a better time to be a Star Wars fan!
			</p>


			<h4>I feel like the void left in my heart by episode VII has been filled now.</h4>

			<p class="movie">
				<strong>Maybe it's because I had higher expectations for episode VII and almost none for this one, I feel like this movie managed to achieve what the other one couldn't.</strong>
				<br>
				I'm not saying that it was perfect, but it sure was good enough for me, and it will be good enough for many other die-hard SW fans. Leading female actor wasn't that good in my opinion, but otherwise this movie had everything a SW fan could wish for. Good old characters, good old places, and an overall good old SW feeling. Fits into the story line quite well, CGI was a bold move, could've gone bad, but it played out quite nicely. 
				<br>
				Overall I think SW fans will love it, but anybody not deeply immersed in the saga would also enjoy it.
			</p>
		</div>
	</div>
</body>
</html>