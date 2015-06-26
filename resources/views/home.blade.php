@extends( 'tpl.home' )

@section( 'content' )
<section id="main-container">
		<div class="container-fluid">
			<div class="banner-wrapper">
				<div class="container">
					<div class="banner-caption">
						<h3>
							Visualizing student understanding has never been clearer
						</h3>
						<div class="btn-create-account">
							<a href="{{ url( 'auth/register' ) }}"><button class="btn btn-default">CREATE FREE ACCOUNT</button></a>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="container contents">
			<div class="col-md-12">
				<div class="how-it-works">
					<h1>How it Works</h1>
					<div class="explaination">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="featured-container">
						<div class="col-md-3 features">
							<i class="fa fa-group icon" style="width:132px;"></i>
							<h4>Networking</h4>
							<p>Only new acquaintances will take your career into new heights. Students, professors and professionals from all over the world are here to <strong>HELP YOU</strong> extending your network.</p>
						</div>
						<div class="col-md-3 features">
							<i class="fa fa-comments-o icon" style="width:132px;"></i>
							<h4>Interaction</h4>
							<p>Communication is the key for success! Not only will you <strong>COMMUNICATE</strong> you skills to the network you will also be able to <strong>INTERACT</strong> with other teachers, students and future employees.</p>
						</div>
						<div class="col-md-3 features">
							<i class="fa fa fa-bar-chart-o icon" style="width:132px;"></i>
							<h4>Numbers</h4>
							<p>Statistics are facts that create an overview for <strong>YOU</strong> and your <strong>NETWORK</strong>. Demonstrate your results in numbers and be able to improve by joining our <strong>FREE</strong> online courses.</p>
						</div>
						<div class="col-md-3 features">
							<i class="fa fa-wrench icon" style="width:132px;"></i>
							<h4>Tools</h4>
							<p>Learnapolis will provide you with all the instruments to succeed. Online tools will help you learn <strong>EASIER</strong> and <strong>FASTER</strong>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid slide">
			<div>
				<ul id="slippry-demo">
					<li>
						<a href="#slide1"><img src="{{ asset( 'img/info-01.jpg' ) }}" alt="It gives you the ability to network with friends and students already in your class, but also to seek out new friends, other teachers to help you and to network with potential future employees.!"></a>
					</li>
					<li>
						<a href="#slide2"><img src="{{ asset( 'img/info-02.jpg' ) }}"  alt="Learn and play at the same time"></a>
					</li>
					<li>
						<a href="#slide3"><img src="{{ asset( 'img/info-03.jpg' ) }}" alt="With online learning you decide when to learn."></a>
					</li>
				</ul>				
			</div>	
		</div>
	</section>
@endsection