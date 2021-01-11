<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_paciente extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'paciente_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'nome_paciente' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'mae_paciente' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'cpf' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                          'cns' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                            'data_nascimento' => array(
                                'type' => 'DATE',
                        ),
                       
                ));
                $this->dbforge->add_key('paciente_id', TRUE);
                $this->dbforge->create_table('paciente');
        }

        public function down()
        {
                $this->dbforge->drop_table('paciente');
        }
}