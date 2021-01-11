<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_endereco extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_endereco' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'rua' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'cep' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'bairro' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                          'cidade' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                            'uf' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                            'ibge' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                            'numero_casa' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '100',
                            ),   
                           
                ));
                $this->dbforge->add_key('id_endereco', TRUE);
                $this->dbforge->create_table('endereco');
        }

        public function down()
        {
                $this->dbforge->drop_table('endereco');
        }
}