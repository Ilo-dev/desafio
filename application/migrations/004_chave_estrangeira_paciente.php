<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_chave_estrangeira_paciente extends CI_Migration {

        public function up()
        {
          $columns = [
         'paciente_id'    =>  [
         'type'              =>  'SERIAL'
  ]
];

$this->dbforge->add_column ('endereco', $columns);
$this->dbforge->add_field('FOREIGN KEY(paciente_id) REFERENCES paciente(paciente_id) on delete cascade');
        }

        public function down()
        {
                $this->dbforge->drop_table('endereco');
        }
}