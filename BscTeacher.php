<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BscTeacher implements Teacher {

	/**
	 * @access public
	 * @param aString teacher
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function view($aString_teacher) {
			echo "Bachelor degree course with Teacher: ".$aString_teacher;
	}
}