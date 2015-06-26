@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 result">
				<h3>Result</h3>
				<div class="result-panel">
					<table class="table ">
						<tr class="danger">
							<th>Exam taken</th>
							<td>Art and design</td>
						</tr>
						<tr class="active">
							<th>Date</th>
							<td>June 20, 2015</td>
						</tr>
						<tr class="danger">
							<th>Time Started</th>
							<td>2:00 pm</td>
						</tr>
						<tr class="success">
							<th>Time Finished</th>
							<td>2:58 pm</td>
						</tr>
						<tr class="warning">
							<th>Duration</th>
							<td>58 minutes</td>
						</tr>
						<tr class="info">
							<th>Total Items</th>
							<td>25</td>
						</tr>
						<tr class="active">
							<th>Mistakes</th>
							<td>5</td>
						</tr>
						<tr class="danger">
							<th>Total Score</th>
							<td>20 / 25</td>
						</tr>
					</table>

					<div class="btn-action">
						<a href="{{ url( 'user/preview' ) }}" class="btn btn-success"><i class="fa fa-eye"></i> View previews exam taken</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection