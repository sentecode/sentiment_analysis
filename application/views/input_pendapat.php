	<div class="row" style="text-align: center; padding: 15%;">
		<h3 style="margin-bottom: 2%;">Masukkan Pendapat Anda</h3>
		<div>
			<?php if(isset($msg)) {
				echo $msg;	
			}
			?>
		</div>
		<?= form_open('Proses/input') ?>
			<div class="form-group">
				<textarea class="form-control" name="text_input"></textarea>
				<button type="submit" name="submit-input" class="btn btn-success" value="Submit" style="margin-top: 2%;"><i class="fa fa-check"> Submit</i></button>
			</div>
		<?= form_close() ?>
	</div>
	
	<?php if(isset($sentence_splitter)): ?>
	<div class="row">
		<div class="col-md-4">
			<table class="table table-stripped">
				<tr>Sentence Splitter</tr>
				<?php foreach($sentence_splitter as $sentence):  ?>
					<tr>
						<td><?= $sentence ?></td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
	<?php else: ?>
	<div>
		<h1>Tidak Terpenuhi</h1>
	</div>
	<?php endif; ?>
