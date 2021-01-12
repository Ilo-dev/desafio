<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_foto_paciente extends CI_Migration {

        public function up()
        {
          $columns = [
         'foto_paciente'    =>  [
         'type'              =>  'VARCHAR',
         'constraint' => '200',
  ]
];

$this->dbforge->add_column ('paciente', $columns);
        }

        public function down()
        {
                $this->dbforge->drop_table('paciente');
        }
}