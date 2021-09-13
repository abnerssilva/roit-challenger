<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">
            <?php echo $this->Form->create('Candidato');?>
                <div class="modal-header">
                    <legend><strong>Excluir</strong></legend>
                    <a class="close" aria-label="Close" href="<?php echo $this->Html->url(array('controller'=>'candidatos', 'action'=>'index')); ?>"></a>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<input value="<?php echo $this->request->data['Candidato']['id']; ?>" name="data[Candidato][id]" class="form-control d-flex mr-1" type="hidden" id="CandidatoId" style='width: 25%;'>
					<input value="0" name="data[Candidato][status]" type="hidden" id="CandidatoStatus">
					<?php echo $this->Html->image('checagem_errada.png', ['class' => 'img-responsive']); ?>
					<span style="font-size: 12px;">&nbsp;&nbsp;Confirma a exclusão desse registro?</span>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo $this->Html->url(array('controller'=>'candidatos', 'action'=>'index')); ?>" class="btn float-right mt-2 mr-2" aria-label="Close" style="border-color: #E2B874; background-color: white; color: #D83636;">Cancelar</a>
                    <button id="saveButton" type="submit" class="btn float-right mt-2" style="background-color: #D83636; color: white;">Excluir</button>
                </div>
            </form>
		</div>
	</div>
</div> <!-- Fim Modal Delete -->

<script>
	$(document).ready(function() {
		setTimeout(function () {
			$('#modalDelete').modal({ backdrop: 'static', keyboard: false })
			$('#modalDelete').modal('show')
		}, 50)
	})
</script>
