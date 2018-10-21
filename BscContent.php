<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BscContent implements Content {

	/**
	 * @access public
	 * @param aString content
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function view($aString_content) {
		echo "Bachelor degree course with Content: ".$aString_content;
	}
}