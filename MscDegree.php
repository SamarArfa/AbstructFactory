<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MscDegree implements Degree {

	/**
	 * @access public
	 * @return Title
	 * @ReturnType Title
	 */
	public function getTitle() {
		return new MscTitle();
	}

	/**
	 * @access public
	 * @return Content
	 * @ReturnType Content
	 */
	public function getContent() {
		 return new MscContent();
	}

	/**
	 * @access public
	 * @return Teacher
	 * @ReturnType Teacher
	 */
	public function getTeacher() {
		 return new MscTeacher();
	}
}