  <form class="form" action="<?= base_url() ?>login" method="post">
    <div class="card">
      <div class="card-top">
        <img class="imglogin" src="<?=  base_url('assets/img/person-circle.svg') ?>">
        <h2 class="painel">Painel de Acessos</h2>
        <p>Controle de Acessos</p>
      </div>
      <div class="card-group">
        <label>Usuario</label>
        <input type="text" name="usuario" placeholder="Informe seu Usuario" required="O campo usuario é obrigatorio">
      </div>
       <div class="card-group">
        <label>Email</label>
        <input type="text" name="usuario" placeholder="Informe seu email" required="O campo email é obrigatorio">
      </div>
      <div class="card-group">
        <label>Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required="A senha é obrigatoria">
      </div>
      <div class="card-group btn">
        <button type="submit">Criar</button>
      </div>
   </form>     
