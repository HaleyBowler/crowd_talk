<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Submissions extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'submission_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'date' => array(
                                'type' => 'DATE'
                        )
                        /* TODO: Add lat and long */
                ));
                $this->dbforge->add_key('submission_id', TRUE);
                $this->dbforge->create_table('submission');
        }

        public function down()
        {
                $this->dbforge->drop_table('submission');
        }
}

?>