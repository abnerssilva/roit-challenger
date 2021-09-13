<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
            <?php echo $this->Form->create('Candidato', ['url' => ['controller'=>'candidatos', 'action' => 'add']]);?>
                <div class="modal-header">
                    <legend><strong>Adicionar</strong></legend>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="window.location.reload();">
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
                            <input name="data[Candidato][user_id]" class="form-control d-flex mr-1" placeholder="Digite um Id" type="text" id="CandidatoUserId" style='width: 25%;'>
                            <input name="data[Candidato][nome]" class="form-control d-flex ml-1" placeholder="Digite um nome" type="text" id="CandidatoNome" style='width: 70%;'>
                        </div>

                        <div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>Idade</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 22%; font-size: 0.8em'>GitHub User</label>
                        </div>

                        <div class="form-group d-flex mt-0">
                            <input name="data[Candidato][idade]" class="form-control d-flex mr-1" placeholder="0" type="number" id="CandidatoIdade" style='width: 25%;'>
                            <input name="data[Candidato][github]" class="form-control d-flex ml-1" placeholder="Usuário do GitHub" type="text" id="CandidatoGithub" style='width: 70%;'>
                        </div>

                        <div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>CEP</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 13%; font-size: 0.8em'>Estado</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 11%; font-size: 0.8em'>Cidade</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 30.5%; font-size: 0.8em'>Bairro</label>
                        </div>

                        <div class="form-group d-flex mt-0">
                            <input name="data[Candidato][cep]" class="form-control d-flex mr-1" placeholder="00.000-000" type="" id="CandidatoCep" style='width: 15%;'>
                            <select name="data[Candidato][estado]" class="form-control d-flex ml-1 mr-1" id="CandidatoEstado" style='width: 15%;'>
                                <option value="">---</option>
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
                            <input name="data[Candidato][cidade]" class="form-control d-flex mr-1 ml-1" placeholder="Informe a Cidade" type="text" id="CandidatoCidade" style='width: 35%;'>
                            <input name="data[Candidato][bairro]" class="form-control d-flex ml-1" placeholder="Informe o Bairro" type="text" id="CandidatoBairro" style='width: 28%;'>
                        </div>

						<div class="form-group d-flex mb-0">
                            <label class="d-flex mb-0" for="" style='font-size: 0.8em'>Rua</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 42%; font-size: 0.8em'>Número</label>
                            <label class="d-flex mb-0" for="" style='margin-left: 5%; font-size: 0.8em'>Complemento</label>
                        </div>

						<div class="form-group d-flex mt-0">
                            <input name="data[Candidato][logradouro]" class="form-control d-flex mr-1" placeholder="Logradouro" type="text" id="CandidatoLogradouro" style='width: 44%;'>
                            <input name="data[Candidato][numero]" class="form-control d-flex ml-1 mr-1" placeholder="---" type="text" id="CandidatoNumero" style='width: 10%;'>
							<input name="data[Candidato][complemento]" class="form-control d-flex ml-1" placeholder="Ex.: Casa 01, Apto 202" type="text" id="CandidatoComplemento" style='width: 40%;'>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" onClick="window.location.reload();" class="btn float-right mt-2 mr-2" data-dismiss="modal" aria-label="Close" style="border-color: #E2B874; background-color: white; color: #E2B874;">Cancelar</button>
                    <button id="saveButton" type="submit" class="btn float-right mt-2" style="background-color: #E2B874; color: white;">Salvar</button>
                </div>
				<img src="">
            </form>
		</div>
	</div>
</div> <!-- Fim Modal Add -->

<?php

// Trigger Modal
echo $this->Html->link(
	'Cadastrar',
	[
		'full_base' => true
	], [
		'class' => 'btn ml-2 mt-2 mb-3 float-left',
		'data-toggle' => 'modal',
		'data-target' => '#modalAdd',
        'style' => 'background-color: #E2B874; color: white;'
	]
);

echo $this->Form->create('Candidato', [
	'url' => ['controller' => 'candidatos', 'action' => 'index'],
	'class' => 'form',
	'type' => 'get'
]);
if($this->params['url']['nome']) {
	$nomeCandidato = $this->params['url']['nome'];
} else {
	$nomeCandidato = '';
}
?>

	<div class="row float-right mt-2">
		<div class="col-12">
			<button type="submit" class="float-right" style="border: none; background-color: #fff"><i class="fas fa-search pt-2" style="color: gray;"></i></button>
			<input class="form-control float-left" name="nome" type="text" placeholder="Busca" value="<?php echo $nomeCandidato; ?>" style="width: 88%;">
		</div>
	</div>
</form>
<?php

$paginator = $this->Paginator;

echo "<table class='table table-condensed table-hover mt-5'>";
	echo "<thead style='background-color: #EDEEEF;'>";
		echo "<th>" . $paginator->sort('user_id', 'ID', ['style' => 'color: #0000008A; text-decoration: none;']) . $this->Html->image('filter.png', ['class' => 'ml-1 pb-1 img-responsive']) . "</th>";
		echo "<th>" . $paginator->sort('nome', 'Nome', ['style' => 'color: #0000008A; text-decoration: none;']) . $this->Html->image('filter.png', ['class' => 'ml-1 pb-1 img-responsive']) . "</th>";
		echo "<th>" . $paginator->sort('idade', 'Idade', ['style' => 'color: #0000008A; text-decoration: none;']) . $this->Html->image('filter.png', ['class' => 'ml-1 pb-1 img-responsive']) . "</th>";
        echo "<th>" . $paginator->sort('github', 'GitHub User', ['style' => 'color: #0000008A; text-decoration: none;']) . $this->Html->image('filter.png', ['class' => 'ml-1 pb-1 img-responsive']) . "</th>";
		echo "<th style='color: #0000008A;'>Endereço"  . $this->Html->image('filter.png', ['class' => 'ml-1 pb-1 img-responsive']) . "</th>";
		echo "<th style='color: #0000008A;'>Ações</th>";
	echo "</thead>";

    echo '<tbody>';
	foreach ($listaCandidatos as $candidato) {
		echo '<tr>';
			echo "<td>".$candidato['Candidato']['user_id']."</td>";
			echo "<td>".$candidato['Candidato']['nome']."</td>";
			echo "<td>".$candidato['Candidato']['idade']."</td>";
			echo "<td>".$candidato['Candidato']['github']."</td>";
			echo "<td>".$candidato['Candidato']['logradouro'].', '.$candidato['Candidato']['numero'].' - '.$candidato['Candidato']['bairro'].' - '.$candidato['Candidato']['cidade'].'/'.$candidato['Candidato']['estado']."</td>";
			echo "<td>";

                echo $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-eye', 'style' => 'color: gray;']).'',
                    [
                        'controller' => 'candidatos',
                        'action' => 'edit',
                        $candidato['Candidato']['id']],
                    [
                        'escape' => false,]);

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;" ;

                    echo $this->Html->link(
                    $this->Html->tag('i', '', ['class' => 'fa fa-trash', 'style' => 'color: red;']).'',
                    [
                        'controller' => 'candidatos',
                        'action' => 'delete',
                        $candidato['Candidato']['id']],
                    [
                        'escape' => false,]);

			echo "</td>";
		echo "</tr>";
	}
    echo '</tbody>';
echo "</table>";


// pagination section
echo "<div class='d-block'>";
	echo "<div class='row d-flex'>";
		echo "<div class='col-md-6'>";
		echo $this->Paginator->counter(
			'Exibindo {:start} - {:end} de {:count} registros.'
		);
		echo "</div>";
		echo "<div class='col-md-6 paging pl-5' style='text-align: right;'>";

		// Botão de Página Inicial
		echo $paginator->first("Início")."&nbsp;&nbsp;";

		// Botão Anterior
		if($paginator->hasPrev()){
			echo $paginator->prev("<<")." | ";
		}

		// Número da Paginação
		echo $paginator->numbers(array('modulus' => 3));

		// Botão Próxima
		if($paginator->hasNext()){
			echo " | ".$paginator->next(">>")."&nbsp;&nbsp;";
		}

		// Botão de Página Final
		echo $paginator->last("Final");

	echo "</div>";
	echo "</div>";

echo "</div>";
?>

<script>
	// Máscara correta no CEP
	$(function() {
		$("#CandidatoCep").inputmask("99.999-999");
	});

	// Quando o campo cep perde o foco.
	$("#CandidatoCep").blur(function() {

		// Nova variável "cep" somente com dígitos.
		let cep = $(this).val().replace(/\D/g, '');

		// Verifica se campo cep possui valor informado.
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
		} else { // Se o CEP não for preenchido
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
