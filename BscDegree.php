<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BscDegree implements Degree {

	/**
	 * @access public
	 * @return Title
	 * @ReturnType Title
	 */
	public function getTitle() {
		 return new BscTitle();
	}

	/**
	 * @access public
	 * @return Content
	 * @ReturnType Content
	 */
	public function getContent() {
		   return new BscContent();
	}

	/**
	 * @access public
	 * @return Teacher
	 * @ReturnType Teacher
	 */
	public function getTeacher() {
	  return new BscTeacher();
	}
}