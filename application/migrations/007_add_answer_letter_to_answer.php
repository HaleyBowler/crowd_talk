<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Answer_Letter_To_Answer extends CI_Migration {

        public function up()
        {
                $fields = array(
                        'answer_letter' => array(
                        	'type' => 'VARCHAR',
                        	'constraint' => '800')
                );
                $this->dbforge->add_column('answer', $fields);
        }
}

?>