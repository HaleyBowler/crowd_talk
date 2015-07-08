<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Thoughts extends CI_Migration {

            public function up()
            {
                    $this->dbforge->add_field(array(
                            'thought_id' => array(
                                    'type' => 'INT',
                                    'constraint' => 5,
                                    'unsigned' => TRUE,
                                    'auto_increment' => TRUE
                            ),
                            'body' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '800'
                            ),
                            'timestamp' => array(
                                    'type' => 'TIMESTAMP'
                            )
                    ));
                    $this->dbforge->add_key('thought_id', TRUE);
                    $this->dbforge->create_table('thought');
            }

            public function down()
            {
                    $this->dbforge->drop_table('thought');
            }
    }

?>