<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_chave_estrangeira_paciente extends CI_Migration {

        public function up()
        {
        $this->db->query('ALTER TABLE `paciente` ADD FOREIGN KEY(`id_paciente`) REFERENCES `endereco`(`id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE');        }

        public function down()
        {
                $this->dbforge->drop_table('paciente');
        }
}