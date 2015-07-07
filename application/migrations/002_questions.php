<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Questions extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'question_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'body' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '800'
                        ),

                        
                ));
                $this->dbforge->add_key('question_id', TRUE);
                $this->dbforge->create_table('question');
        }

        public function down()
        {
                $this->dbforge->drop_table('question');
        }
}

?>