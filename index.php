<?php

require_once("config.php"); //config
require_once("db.php"); //$link
require_once("getTweets.php"); //$tweets

?>


<!DOCTYPE html>
<html lang="ru">
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>Твиттер — Ксения Филиппова</title>
    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" href="css/main.css">
				<!-- GOOGLE FONTS -->
				<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,400i&amp;subset=cyrillic-ext" rel="stylesheet"> 
				<!-- FONT AWESOME -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	</head>
	<body>
			<div class="container">
					<div class="row">
							<!-- Left Column -->
							<div class="col-md-4">
								<div class="card mb-3">
									<div class="profile-background"></div>
												<div class="profile-avatar">
															<img src="img/avatar.jpg" alt="Ксения Филиппова">
												</div>
												<div class="card-body">
														<h2 class="profile-title">Ксения Филиппова</h2>
														<div class="profile-description">
																<p>Пишу о жизни и веб-разработке.</p>
														</div>

														<ul class="stats">
																<li class="stats-item">
																			<b class="stats-title">Твиты</b>
																			<b class="stats-count" id="tweetsCounter"><?php echo $numRows;?></b>
																</li>
															<!-- 	<li class="stats-item">
																			<b class="stats-title">Лайки</b>
																			<b class="stats-count">112</b>
																</li>
																<li class="stats-item">
																			<b class="stats-title">Репосты</b>
																			<b class="stats-count">72</b>
																</li> -->
														</ul>

												</div>
												
								</div>

							</div>
							<!-- Right Column -->
							<div class="col-md-8">
								<!-- Make a tweet -->
										<div class="card mb-3">
													<div class="card-body">
																<form id="postNewTweet">
																  <div class="form-group">
																    <input type="text" id="tweetText" class="form-control" id="exampleInputEmail1"  placeholder="Что нового">
																  </div>
																  <button type="submit" class="btn btn-primary">Твитнуть</button>
																</form>
													</div>
										</div>
										<!-- ///Make a tweet -->
								<div id="resultSuccess" class="alert alert-success hide" role="alert">
										Твит успешно добавлен!
								</div>

								<div id="resultError" class="alert alert-danger hide" role="alert">
										При добавлении произошла ошибка
								</div>





											<div class="card card-title-only tweet-card-rounded-top">
															<div class="h4 mb-0">Твиты пользователя</div>
											</div>

											<!-- Tweets List -->
									<div id="tweetsList">
									
										<!-- обходим циклом все твитты пользователя -->

									<?php foreach ($tweets as $tweet) { ?>
								
										<!-- Single tweet -->
											<div class="card tweet-card">
												<div class="tweet-date"><?php echo $tweet['date']?></div>

												<?php
															$textClass = "font-size-normal";
															$stringNoTags = strip_tags($tweet['text']);

																if ( mb_strlen($stringNoTags) < 100 ) {
																	$textClass = "font-size-large";
																} else if (mb_strlen($stringNoTags) > 150 ){
																			$textClass = "font-size-small";
																}

												?>


												<div class="tweet-text <?php echo $textClass; ?>">
													<p><?php echo $tweet['text']?></p>
												</div>
											</div>
											<!-- // Single tweet -->




									<?php }?>


									</div>
				<!-- // Tweets List -->
								<!-- FOOTER -->

									<footer class="footer">
												<p class="footer-copyright">
																© Ксения Филиппова 2018 <br>
																Сверстано с <i class="fa fa-heart"></i>в <a href="http://webcademy.ru" class="footer-link" target="blank">WebCademy.ru</a> в 2018 году
												</p>
									</footer>

								<!-- /// FOOTER ///-->


							</div>
							<!-- Right Column -->

					</div>
			</div>
			<!-- jquery script -->
			
			<!-- ///jquery script ///-->
			<!-- popper -->
	
			<!-- ///popper ///-->
			<!-- bootstrap script -->
			
			<!--/// bootstrap script ///-->
			<!-- main jsscript -->
			<script src="libs/jquery/jquery-3.3.1.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 	<script src="libs/bootstrap/js/bootstrap.min.js"></script>
 	<!-- MAIN SCRIPT -->
 	<script src="js/main.js"></script>
	</body>
</html>