<form method="post" id="contato" action="">
	<div class="row contato">
		<div class="col-12 text-center">
			<div class="resp"></div> 
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<input type="text" class="form-control" name="nome" required placeholder="Nome*">	
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<input type="text" class="form-control" name="assunto" placeholder="Assunto" >	
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div class="form-group">
				<input type="email" class="form-control" name="email" required placeholder="E-mail*">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<textarea placeholder="Escreva sua mensagem aqui*" class="form-control" rows="3" required style="resize: none;" name="mensagem"></textarea>
				<small class="mt-2">*campos obrigatórios</small>
			</div>
			<button type="submit" class="btn btn-secondary bgc-1 text-uppercase mt-2 float-right">enviar</button>
		</div>
	</div>
</form>