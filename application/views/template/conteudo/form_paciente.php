<?php if(!isset($paciente)):?>
<form name="form" class="row g-3" action="<?= base_url() ?>paciente/inserir_paciente" method="post">
  <?php elseif(isset($paciente)) :?>
  <form name="form" class="row g-3" action="<?= base_url()?>paciente/update" method="post">
    <input type="hidden" name="paciente_id" value="<?= isset($paciente) ? $paciente["paciente_id"] : "" ?>">
     <?php else :?>
  <form name="form" class="row g-3" action="<?= base_url()?>paciente/editar_paciente" method="post">
    <input type="hidden" name="paciente_id" value="<?= isset($paciente) ? $paciente["paciente_id"] : "" ?>">
  <?php endif; ?>
  <div class="col-6">
  	 <input type="file" multiple id="foto" name="foto">
    	<div id="foto_upload"> 

      </div>
  </div>
	<div class="col-6">
	  <label class="form-label"><h11>*</h11>Nome:</label>
	  <input type="text" class="form-control input-md" id="nome_paciente" name="nome_paciente" value="<?= isset($paciente) ? $paciente["nome_paciente"] : "" ?>" required>
	</div>

	<div class="col-md-4">
    <label class="form-label"><h11>*</h11>Data de Nascimento:</label>
    <input id="data_nascimento" name="data_nascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" value="<?= isset($paciente) ? $paciente["data_nascimento"] : "" ?>">
  </div>
  <div class="col-md-4">
    <label class="form-label"><h11>*</h11>CPF:</label>
    <input class="form-control" id="cpf" name="cpf" required="required" pattern="[0-9]+$" maxlength="11" size="11" placeholder="CPF" onblur="TestaCPF(this.value)"  value="<?= isset($paciente) ? $paciente["cpf"] : "" ?>">
  </div>
  <div class="col-md-4">
    <label class="form-label"><h11>*</h11>CNS:</label>
    <input class="form-control" id="cns" name="cns" required="required" pattern="[0-9]+$" maxlength="15" size="15" placeholder="CNS" onblur="TestaCNS(this.value)"  value="<?= isset($paciente) ? $paciente["cns"] : "" ?>">
  </div>
	<div class="mb-3">
	  <label class="form-label"><h11>*</h11>Mãe:</label>
	  <input type="text" class="form-control" placeholder="Nome da Mãe do Paciente" name="mae_paciente"  value="<?= isset($paciente) ? $paciente["mae_paciente"] : "" ?>"required>
	</div>
  <div class="col-md-2">
     <label class="form-label"><h11>*</h11>CEP</label>
     <input class="form-control" name="cep" type="text" id="cep"  value="<?= isset($endereco['cep']) ? $endereco["cep"] : "" ?>" size="10" maxlength="9" onblur="pesquisacep(this.value);">
  </div>
  <div class="col-8">
    <label class="form-label"><h11>*</h11>Endereço</label>
    <input type="text" class="form-control" id="rua" placeholder="Endereço do paciente" name="rua" value="<?= isset($endereco['rua']) ? $endereco["rua"] : "" ?>" required>
  </div>
  <div class="col-4">
    <label class="form-label"><h11>*</h11>N° Casa: </label>
    <input type="text" class="form-control" id="numero_casa" name="numero_casa"  value="<?= isset($endereco['numero_casa']) ? $endereco["numero_casa"] : "" ?>"required>
  </div>
  <div class="col-md-6">
    <label class="form-label"><h11>*</h11>Cidade</label>
    <input type="text" class="form-control" id="cidade" name="cidade"  value="<?= isset($endereco['cidade']) ? $endereco["cidade"] : "" ?>"required>
  </div>
  <div class="col-md-6">
    <label class="form-label"><h11>*</h11>Bairro</label>
    <input type="text" class="form-control" id="bairro" name="bairro"  value="<?= isset($endereco['bairro']) ? $endereco["bairro"] : "" ?>"required>
  </div>
  <div class="col-md-4">
    <label class="form-label"><h11>*</h11>Estado</label>
    <input type="text" class="form-control" id="uf" name="uf"  value="<?= isset($endereco['uf']) ? $endereco["uf"] : "" ?>"required>
  </div>
  <div class="col-md-2">
     <label class="form-label"><h11>*</h11>IBGE</label>
     <input class="form-control" name="ibge" type="text" id="ibge" size="30" value="<?= isset($endereco['ibge']) ? $endereco["ibge"] : "" ?>" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
