<!--            Formulaire création marque -->
	<div class="content-box-large">
		<div class="panel-body">
			<form class="form-horizontal" role="form" method="post" action="index.php?c=listeFournisseurs&a=ajout">
	<!--        Nom input -->
				<div class="form-group">
					<label for="nomMarque" class="col-sm-2 control-label">Nom</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="nomMarque">
					</div>
				</div>
	<!--        Logo input -->
				<div class="form-group">
					<label for="logoMarque" class="col-md-2 control-label">Logo</label>
						<div class="col-md-10">
							<input type="file" class="btn btn-default" name="logoMarque">
                            <input type="submit" name="submit" class="btn btn-success" value="Enregistrer">
						</div>
				</div>
			</form>
		</div>
	</div>