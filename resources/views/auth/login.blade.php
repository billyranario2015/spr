@extends('tpl.auth')

@section('content')
	<section id="main-container">
		<div class="container">
			<div class="panel-register">
				<div class="auth-form form-login">
					<form action="{{ url( 'user/exams' ) }}">
						<h4 class="text-center">Sign-in</h4>
						<div class="input-form">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" required>
							</div>
						</div>
						<div class="col-md-12 text-center action-button">
							<a href="{{ '/' }}" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Cancel</a>
							<button class="btn btn-success"><i class="fa fa-check-circle-o"></i> Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
