<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Migration_Question_Submits extends CI_Migration {

            public function up()
            {
                    $this->dbforge->add_field(array(
                            'id' => array(
                                    'type' => 'INT',
                                    'constraint' => 5,
                                    'unsigned' => TRUE,
                                    'auto_increment' => TRUE
                            ),
                           'answer_letter' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '800'
                            ),
                            'question_id' => array(
                                    'type' => 'INT',
                                    'constraint' => 5,
                            ),
                            'answer_body' => array(
                                    'type' => 'VARCHAR',
                                    'constraint' => '800'
                            )
                    ));
                    $this->dbforge->add_key('id', TRUE);
                    $this->dbforge->create_table('answer');
            }

            public function down()
            {
                    $this->dbforge->drop_table('Question_Submit');
            }
    }

?>