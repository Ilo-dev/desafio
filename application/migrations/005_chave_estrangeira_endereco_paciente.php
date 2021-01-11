<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_chave_estrangeira_endereco_paciente extends CI_Migration {

        public function up()
        {
                $columns = [
         'id_endereco'    =>  [
         'type'              =>  'SERIAL'
  ]
];

$this->dbforge->add_column ('id_endereco', $columns);
$this->dbforge->add_field('FOREIGN KEY(id_endereco) REFERENCES endereco(id_endereco) on delete cascade');
        }

        public function down()
        {
                $this->dbforge->drop_table('endereco');
        }
}