<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_usuario extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id_usuario' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'login' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'senha' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                          
                ));
                $this->dbforge->add_key('id_usuario', TRUE);
                $this->dbforge->create_table('usuario');
        }

        public function down()
        {
                $this->dbforge->drop_table('usuario');
        }
}