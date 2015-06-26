@extends( 'tpl.base' )

@section( 'content' )
	<section id="main-container">
		<div class="container">
			<div class="col-md-12 exam-lists">
				<h3>Choose exam to take:</h3>
				<form action="{{ url( 'user/begin-test' ) }}">
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Science" required>
							Science
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Design and technology (ICT)" required>
							Design and technology (ICT)
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="History" required>
							History
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Geography" required>
							Geography
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Art and design" required>
							Art and design
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Physical Education" required>
							Physical Education
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Music" required>
							Music
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Religious education" required>
							Religious education (parents have the right to withdraw children from these lessons if they choose)
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="PSHE" required>
							PSHE (personal, social and health education)
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="Citizenship" required>
							Citizenship
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="optionsRadios" value="A modern foreign language" required>
							A modern foreign language
						</label>
					</div>
					<div class="btn-proceed pull-left">
						<button class="btn btn-success">Proceed <i class="fa fa-arrow-circle-o-right"></i></button>
					</div>
				</form>
				
				<div class="action">
					<nav class="text-right pull-right">
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
	</section>
@endsection