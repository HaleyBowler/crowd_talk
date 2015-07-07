<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Timestamp_To_Thought extends CI_Migration {

        public function up()
        {
                $fields = array(
                        'timestamp' => array('type' => 'TIMESTAMP')
                );
                $this->dbforge->add_column('thought', $fields);
        }
}

?>