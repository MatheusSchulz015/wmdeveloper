<section id="contact">
<div class="container">

		<div class="row text-center clearfix">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="contact-heading">
					<h2 class="title-one">Contato</h2>
					<p>Entre já em contato conosco!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="contact-details">
			<div class="pattern"></div>
			<div class="row text-center clearfix">
				<div class="col-sm-6">
					<div class="contact-address"><address><p><span>W</span>M</p><strong>71 99132-7600<br>71 98625-5964<br> 71 98172-4441</strong><br><small>( Todos os contatos disponíveis no whatsapp )</small></address>
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
				 @if (Session::has('msg'))
           
    <div class="alert alert-success">{{ Session::get('msg') }}</div>
@endif
				<div class="col-sm-6"> 
					<div id="contact-form-section">
						<div class="status alert alert-success" style="display: none"></div>
						<form id="contact-form" class="contact"  name="contact-form" method="post" action="{{url('/email')}}">
							<div class="form-group">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="text" name="nome" class="form-control name-field" required="required" placeholder="Seu nome">
							</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Seu Email">
								</div> 
								<div class="form-group">
									<textarea name="msg" id="message" required="required" class="form-control" rows="8" placeholder="Sua Mensagem"></textarea>
								</div> 
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Enviar</button>
								</div>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div> 
	</section> <!--/#contact--> 