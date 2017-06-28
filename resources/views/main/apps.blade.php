@extends('layouts.master')


@section('body')

<div id="wordy">
	
	<h1 style="text-align: center; font-size: 60px; color: lightblue; text-shadow: 3px 3px 3px red; font-family:serif; "><img src="/img/wordy/wordyIcon.png" alt="wordY.icon" height="80px">ordY</h1>

	<div class="container">
		<div class="row" >
			<div class="col-md-3" >
				<p><h4>About Game</h4><span style="color: grey;">wordY is a Desktop Game that enhances Spelling and General Word Knowledge. It provides you with over 240K words for you to guess. It a dictionary based game that generates strings of words to screen for you to guess any word from it correctly.</span></p>
			</div>

			<div class="col-md-3">
				<p><h4>Game Play</h4> <span style="color:grey"> You are to form words from the displayed string which is a bonus word for you to start with. Points are Awarded or Deducted based on each letter place of value in the English Alphabets, in your guessed word. "a"=1 and "z"=26. Seconds are also awarded or deducted based on the your guessed word length. You have 245s at start up.</span></p>
			</div>

			<div class="col-md-3">
				<p><h4>Game Extras</h4><span style="color:grey">Seconds or number of generated words can be bought with your points obtained. You get a 1 life each from reaching a 1000 point which is not affected by wrong word guessed. Check game Readme.txt file for more info.</span></p>
			</div>

			<div class="col-md-3">
				<p><h4>Download</h4>
					<span class="glyphicon glyphicon-download" style="color:green;"></span><a href="{{ route('wordy.get')}}">wordY_2.2.2.exe</a><br>
					<span class="glyphicon glyphicon-download" style="color:green;"></span><a href="{{ route('readme.get')}}">Readme.txt</a>

					<h1>Description</h1>
					<pre style="font-size: 12px;">
<i>Name:</i>		wordY
<i>Version:</i>		v2.2.2
<i>Company:</i>	AstroSoft Corporation
<i>Author:</i>		Osei Clement
<i>Nicky:</i>		AstroBoy
<i>Email:</i>		frimpsastro@gmail.com
					</pre>
				</p>
			</div>
		</div>
	</div>

	<div class="container" id="screenshots">
		<div class="row">
			<h3><span class="glyphicon glyphicon-camera"></span>SCREEN SHOTS</h3>
			
			<div class="col-md-3">
				<h4>Splash Screen</h4>
				<a href="/img/wordy/splash.png"  title="View full image"><img src="/img/wordy/splash.png" height="250px" width="200px" alt="splash_screen"></a>
			</div>


			<div class="col-md-3">
				<h4>Start Screen</h4>
				<a href="/img/wordy/start.png"  title="View full image"><img src="/img/wordy/start.png" height="250px" width="200px" alt="splash_screen"></a>
			</div>

			<div class="col-md-6">
				<h4>Game Play Screen</h4>
				<a href="/img/wordy/in_game.png"  title="View full image"><img src="/img/wordy/in_game.png" height="250px" width="500px" alt="splash_screen"></a>
			</div>
		</div>
						<hr class="lhr">

		<div class="row">
			<div class="col-md-4">
				<h4>Game Play Screen 2</h4>
				<a href="/img/wordy/in_game2.png"  title="View full image"><img src="/img/wordy/in_game2.png" height="250px" width="350px" alt="splash_screen"></a>
			</div>


			<div class="col-md-4">
				<h4>Game Over Screen</h4>
				<a href="/img/wordy/game_over.png"  title="View full image"><img src="/img/wordy/game_over.png" height="250px" width="350px" alt="splash_screen"></a>
			</div>

			<div class="col-md-4">
				<h4>ScoreBoard Screen</h4>
				<a href="/img/wordy/scoreboard.png" title="View full image"><img src="/img/wordy/scoreboard.png" height="250px" width="200px" alt="splash_screen"></a>
			</div>
		</div>
	</div>
	
	<div style="text-align: center;">
		<h1>Download Wordy</h1> 
		<span class="glyphicon glyphicon-download" style="color:green;"><a href="{{ route('wordy.get') }}">wordY_2.2.2_x64-x32.exe</a><br>
		<span class="glyphicon glyphicon-download" style="color:green;" ><a href="{{ route('readme.get')}}">Readme.txt</a>
	</div>
</div>
<hr class="dhr">
@endsection