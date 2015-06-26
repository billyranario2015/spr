@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 questions">
				<h3>Art and design <small class="text-info">(25 items)</small></h3>
				<div class="questionaires">
					<div class="alert alert-info">
						<p>Make sure to answer all the questions</p>
					</div>
					<form action="{{ url( 'user/confirm-submit' ) }}">
						<div class="form-group">
							<label>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group q-box">
							<label>2. Lorem ipsum dolor sit amet, consectetur adipisicing elit? (choose 3 answers)</label>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Choice 1
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Choice 2
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Choice 3
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Choice 4
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" value="">
									Choice 5
								</label>
							</div>
							
						</div>
						<div class="form-group q-box">
							<label>3. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Choice 1
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Choice 2
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Choice 3
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
									Choice 4
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>4. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>5. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>6. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>7. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>8. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>9. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="form-group">
							<label>10. Lorem ipsum dolor sit amet, consectetur adipisicing elit?</label>
							<input type="text" class="form-control" placeholder="Write your answer">
						</div>
						<div class="btn-submit pull-right">
							<button class="btn btn-success">Submit <i class="fa fa-check-circle-o"></i></button>
						</div>
					</form>
					<div class="action">
						<nav class="text-left pull-left">
							<ul class="pagination">
								<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2 <span class="sr-only"></span></a></li>
								<li><a href="#">3 <span class="sr-only"></span></a></li>
								<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>					
							</ul>
						</nav>	
					</div>	
				</div>
			</div>
		</div>
	</section>
@endsection