  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Clinica</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar paciente" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>paciente">
              Principal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>paciente/novo_paciente">
              Cadastrar Paciente
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>paciente">
               Consultar Paciente
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>paciente/editar_paciente">
              <span data-feather="users"></span>
              Editar Paciente
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Excluir Paciente
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Principal</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="<?= base_url() ?>paciente/novo_paciente" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i>Novo Paciente</a>
          </div>
        </div>
      </div>