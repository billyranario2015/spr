@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 begin-test">
				<h3>Exam Confirmation: <span class="text-info">Art and design</span></h3>
				<div class="alert alert-warning confirm-panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="{{ url( 'user/exams' ) }}" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Back</a>
					<a href="{{ url( 'user/questions' ) }}"><button class="btn btn-info btn-proceed">Begin Exam <i class="fa fa-arrow-circle-o-right"></i></button></a>
				</div>
			</div>
		</div>
	</section>
@endsection