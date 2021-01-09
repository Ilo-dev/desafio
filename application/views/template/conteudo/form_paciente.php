<form class="row g-3" action="<?= base_url() ?>paciente/inserir_paciente" method="post">
	
  <div class="col-6">
	 <input type="file" multiple id="addFotoGaleria">
  	<div class="galeria">
      
    </div>
	</div>
	<div class="col-6">
	  <label for="formGroupExampleInput" class="form-label">Nome:</label>
	  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nome do Paciente" name="nome_paciente">
	</div>

	<div class="col-md-4">
    <label for="inputCity" class="form-label">Data de Nascimento:</label>
    <input type="text" class="form-control" id="inputCity" name="data_nascimento">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">CPF:</label>
    <input type="text" class="form-control" name="cpf">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">CNS:</label>
    <input type="text" class="form-control" name="cns">
  </div>
	<div class="mb-3">
	  <label for="formGroupExampleInput2" class="form-label">Mãe:</label>
	  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nome da Mãe do Paciente" name="mae_paciente">
	</div>
  <div class="col-md-2">
     <label for="inputZip" class="form-label">CEP</label>
     <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onblur="pesquisacep(this.value);">
  </div>
  <div class="col-8">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="rua" placeholder="Endereço do paciente" name="rua">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">N° Casa: </label>
    <input type="text" class="form-control" id="numero_casa" name="numero_casa">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <input type="text" class="form-control" id="uf" name="uf">
  </div>
  <div class="col-md-2">
     <label for="inputZip" class="form-label">IBGE</label>
     <input class="form-control" name="ibge" type="text" id="ibge" value="" size="30" maxlength="9" onblur="pesquisacep(this.value);">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>