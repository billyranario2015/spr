@extends('tpl.auth')

@section('content')
	<section id="main-container">
		<div class="container">
			<div class="panel-register">
				<div class="auth-form form-reg">
					<form>
						<h4 class="text-left">CREATE AN ACCOUNT</h4>
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<label>Middle Name</label>
								<input type="text" class="form-control" placeholder="Middle Name" required>
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" placeholder="Last Name" required>
							</div>	
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="Email" required>
							</div>
						</div>
						<div class="col-md-6">	
							<div class="form-group">
								<label>Birthdate</label>
								<input type="date" class="form-control">
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="email" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" required>
							</div>
							<div class="form-group">
								<label>Re-type Password</label>
								<input type="password" class="form-control" placeholder="Re-type Password" required>
							</div>
						</div>
						<div class="col-md-12 text-center action-button">
							<a href="{{ '/' }}" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Cancel</a>
							<button class="btn btn-success"><i class="fa fa-check-circle-o"></i> Create Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
