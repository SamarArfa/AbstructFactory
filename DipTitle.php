<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DipTitle implements Title {

	/**
	 * @access public
	 * @param aString title
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function view($aString_title) {
		echo  "Diploma degree course with Title: ".$aString_title;
	}
}