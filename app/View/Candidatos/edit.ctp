<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="false">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
            <?php echo $this->Form->create('Candidato');?>
                <div class="modal-header">
                    <legend><strong>Editar</strong></legend>
                    <a class="close" aria-label="Close" href="<?php echo $this->Html->url(array('controller'=>'candidatos', 'action'=>'index')); ?>"></a>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset>
                        <div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>ID</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 25%; font-size: 0.8em'>Nome</label>
                        </div>

                        <div class="form-group d-flex mt-0">
                            <input value="<?php echo $this->request->data['Candidato']['user_id']; ?>" name="data[Candidato][user_id]" class="form-control d-flex mr-1" type="text" id="CandidatoUserId" style='width: 25%;'>
                            <input value="<?php echo $this->request->data['Candidato']['nome']; ?>" name="data[Candidato][nome]" class="form-control d-flex ml-1" type="text" id="CandidatoNome" style='width: 70%;'>
                        </div>

                        <div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>Idade</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 22%; font-size: 0.8em'>GitHub User</label>
                        </div>

                        <div class="form-group d-flex mt-0">
                            <input value="<?php echo $this->request->data['Candidato']['idade']; ?>" name="data[Candidato][idade]" class="form-control d-flex mr-1" placeholder="0" type="number" id="CandidatoIdade" style='width: 25%;'>
                            <input value="<?php echo $this->request->data['Candidato']['github']; ?>" name="data[Candidato][github]" class="form-control d-flex ml-1" placeholder="Usuário do GitHub" type="text" id="CandidatoGithub" style='width: 70%;'>
                        </div>

                        <div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>CEP</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 13%; font-size: 0.8em'>Estado</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 11%; font-size: 0.8em'>Cidade</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 30.5%; font-size: 0.8em'>Bairro</label>
                        </div>

                        <div class="form-group d-flex mt-0">
                            <input value="<?php echo $this->request->data['Candidato']['cep']; ?>" name="data[Candidato][cep]" class="form-control d-flex mr-1" placeholder="00000000" type="" id="CandidatoCep" style='width: 15%;'>
                            <select name="data[Candidato][estado]" class="form-control d-flex ml-1 mr-1" id="CandidatoEstado" style='width: 15%;'>
								<option value="<?php echo $this->request->data['Candidato']['estado']; ?>"><?php echo $this->request->data['Candidato']['estado']; ?></option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PR">PR</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                            <input value="<?php echo $this->request->data['Candidato']['cidade']; ?>" name="data[Candidato][cidade]" class="form-control d-flex mr-1 ml-1" placeholder="Informe a Cidade" type="text" id="CandidatoCidade" style='width: 35%;'>
                            <input value="<?php echo $this->request->data['Candidato']['bairro']; ?>" name="data[Candidato][bairro]" class="form-control d-flex ml-1" placeholder="Informe o Bairro" type="text" id="CandidatoBairro" style='width: 28%;'>
                        </div>

						<div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>Rua</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 42%; font-size: 0.8em'>Número</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 5%; font-size: 0.8em'>Complemento</label>
                        </div>

						<div class="form-group d-flex mt-0">
                            <input value="<?php echo $this->request->data['Candidato']['logradouro']; ?>" name="data[Candidato][logradouro]" class="form-control d-flex mr-1" placeholder="Logradouro" type="text" id="CandidatoLogradouro" style='width: 44%;'>
                            <input value="<?php echo $this->request->data['Candidato']['numero']; ?>" name="data[Candidato][numero]" class="form-control d-flex ml-1 mr-1" placeholder="---" type="text" id="CandidatoNumero" style='width: 10%;'>
							<input value="<?php echo $this->request->data['Candidato']['complemento']; ?>" name="data[Candidato][complemento]" class="form-control d-flex ml-1" placeholder="Ex.: Casa 01, Apto 202" type="text" id="CandidatoComplemento" style='width: 40%;'>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo $this->Html->url(array('controller'=>'candidatos', 'action'=>'index')); ?>" class="btn float-right mt-2 mr-2" aria-label="Close" style="border-color: #E2B874; background-color: white; color: #E2B874;">Cancelar</a>
                    <button id="saveButton" type="submit" class="btn float-right mt-2" style="background-color: #E2B874; color: white;">Salvar</button>
                </div>
            </form>
		</div>
	</div>
</div> <!-- Fim Modal Edit -->

<script>
	// Surgimento e Travamento da Modal após o carregamento do DOM
	$(document).ready(function() {
		setTimeout(function () {
			$('#modalEdit').modal({ backdrop: 'static', keyboard: false })
			$('#modalEdit').modal('show')
		}, 50)
	})

	// Máscara correta no CEP
	$(function() {
		$("#CandidatoCep").inputmask("99.999-999");
	});

	// Quando o campo cep perde o foco.
	$("#CandidatoCep").blur(function() {

		// Variável "cep" somente com dígitos.
		let cep = $(this).val().replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			// Expressão regular para validar o CEP.
			let validacep = /^[0-9]{8}$/;

			// Valida o formato do CEP.
			if(validacep.test(cep)) {

				// Consulta o webservice viacep.com.br/
				$.getJSON("https://viacep.com.br/ws/"+cep+"/json/?callback=?", function(dados) {

					if (!("erro" in dados)) {
						// Atualiza os campos com os valores da consulta.
						if(dados.logradouro == ''){
							document.getElementById('CandidatoLogradouro').removeAttribute('readonly');
							document.getElementById('CandidatoBairro').removeAttribute('readonly');
							document.getElementById('CandidatoCidade').removeAttribute('readonly');
							document.getElementById('CandidatoEstado').removeAttribute('readonly');
						} else {
							document.getElementById('CandidatoLogradouro').setAttribute('readonly','readonly');
							document.getElementById('CandidatoBairro').setAttribute('readonly','readonly');
							document.getElementById('CandidatoCidade').setAttribute('readonly','readonly');
							document.getElementById('CandidatoEstado').setAttribute('readonly','readonly');
							document.getElementById('CandidatoEstado').setAttribute('style','width: 15%; pointer-events:none; touch-action: none');
							document.getElementById('CandidatoEstado').setAttribute('tabindex','-1');
							$("#CandidatoLogradouro").val(dados.logradouro);
							$("#CandidatoBairro").val(dados.bairro);
							$("#CandidatoCidade").val(dados.localidade);
							$("#CandidatoEstado").val(dados.uf);
							document.getElementById('CandidatoNumero').focus();
						}
					}
				});
			}
		} else {
			document.getElementById('CandidatoLogradouro').removeAttribute('readonly');
			document.getElementById('CandidatoBairro').removeAttribute('readonly');
			document.getElementById('CandidatoCidade').removeAttribute('readonly');
			document.getElementById('CandidatoEstado').removeAttribute('readonly');
			$("#CandidatoLogradouro").val('');
			$("#CandidatoBairro").val('');
			$("#CandidatoCidade").val('');
			$("#CandidatoEstado").val('');
			document.getElementById('CandidatoEstado').focus();
		}
	});
</script>
