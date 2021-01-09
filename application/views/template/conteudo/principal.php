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
              <th>xxx</th>
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
              <td>acoes</td>
            </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
