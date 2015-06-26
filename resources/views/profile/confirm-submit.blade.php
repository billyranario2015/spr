@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 confirm-submit">
				<h3>Art and design <small class="text-info">(25 items)</small></h3>
				<div class="exam-details">
					<ul class="list-unstyled">
						<li>
							<label>Time started:</label> <span>2:00 pm</span>
						</li>
						<li>
							<label>Time Finished:</label> <span>2:58 pm</span>
						</li>
						<li>
							<label>Duration:</label> <span>58 minutes</span>
						</li>
					</ul>
					<div class="btn-action">
						<a href="{{ url( 'user/questions' ) }}" class="btn btn-default"><i class="fa fa-arrow-circle-o-left"></i> Back</a>
						<a href="{{ url( 'user/result' ) }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i> Show result</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection