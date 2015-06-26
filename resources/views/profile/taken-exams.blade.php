@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 result">
				<h3>Recently taken exams:</h3>
				<div class="result-panel">
					<table class="table table-hovered table-condensed">
						<thead>
							<tr>
								<th>Subject</th>
								<th>Date Taken</th>
								<th>Duration</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="active">
								<td>Art and design</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>58 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="info">
								<td>Physical Education</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="warning">
								<td>Geography</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="danger">
								<td>Music</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="active">
								<td>Art and design</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>58 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="info">
								<td>Physical Education</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="warning">
								<td>Geography</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
							<tr class="danger">
								<td>Music</td>
								<td>June 20, 2015 1:00 pm</td>
								<td>36 minutes</td>
								<td>
									<a href="{{ url( 'user/result' ) }}"><i class="fa fa-eye"></i> Show Details</a>
								</td>
							</tr>
						</tbody>
					</table>

				
					<div class="action">
						<nav class="text-center">
							<ul class="pagination">
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2 <span class="sr-only"></span></a></li>
								<li><a href="#">3 <span class="sr-only"></span></a></li>
								<li><a href="#">4 <span class="sr-only"></span></a></li>
								<li><a href="#">5 <span class="sr-only"></span></a></li>
								<li><a href="#">6 <span class="sr-only"></span></a></li>
								<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>					
							</ul>
						</nav>	
					</div>	
				</div>
			</div>
		</div>
	</section>
@endsection