      <h2 align="center">Listas de Pacientes</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Nome da mãe</th>
              <th>Data de Nascimento</th>
              <th>CPF</th>
              <th>CND</th>
              <th>ACÕES</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($paciente as $pacientes) : ?>
            <tr>
              <td><?= $pacientes['paciente_id'] ?></td>
              <td><?= $pacientes['nome_paciente'] ?></td>
              <td><?= $pacientes['mae_paciente'] ?></td>
              <td><?= $pacientes['data_nascimento'] ?></td>
              <td><?= $pacientes['cpf'] ?></td>
              <td><?= $pacientes['cns'] ?></td>
              <td>
                <a href="<?=  base_url() ?>paciente/editar_paciente/<?= $pacientes['paciente_id']?>" class="btn btn-primary btn-warning"><i class="fas fa-pencil-alt"></i>
                EDITAR
                </a>
                <a href="<?=  base_url() ?>paciente/delete/<?= $pacientes['paciente_id']?>" class="btn btn-primary btn-danger"><i class="fas fa-pencil-alt"></i>
                DELETAR
                </a>
              </td>
            </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
