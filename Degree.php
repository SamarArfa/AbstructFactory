<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Degree {

	/**
	 * @access public
	 * @return Title
	 * @ReturnType Title
	 */
	public function getTitle();

	/**
	 * @access public
	 * @return Content
	 * @ReturnType Content
	 */
	public function getContent();

	/**
	 * @access public
	 * @return Teacher
	 * @ReturnType Teacher
	 */
	public function getTeacher();
}