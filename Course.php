<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Course {
	/**
	 * @AttributeType Title
	 */
	private $atitle;
	/**
	 * @AttributeType Content
	 */
	private $acontent;
	/**
	 * @AttributeType Teacher
	 */
	private $ateacher;
	/**
	 * @AttributeType Course
	 */
	private static $acourse;
	/**
	 * @AttributeType Degree
	 */
	private $adegree;

	/**
	 * @access public
	 * @return Course
	 * @ReturnType Course
	 */
	public function getCourse() {
		if(course::$acourse==null){
            $acourse=new Course();
        }
        return $acourse;
	}

	/**
	 * @access public
	 * @param aString title
	 * @param aString content
	 * @param aString teacger
	 * @return void
	 * 
	 * 
	 * 
	 * @ReturnType void
	 */
	public function view($aString_title, $aString_content, $aString_teacger) {
		$this->atitle = $this->adegree->getTitle();
        $this->acontent= $this->adegree->getContent();
         $this->ateacher= $this->adegree->getTeacher();
        echo "==================   ";
        echo "Processing course info: ";
        $this->atitle->view($aString_title);
        $this->acontent->view($aString_content);
        $this->ateacher->view($aString_teacger);
	}

	/**
	 * @access public
	 * @param aDegree degree
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function setdegree($aDegree_degree) {
		$this->adegree=$aDegree_degree;
	}

	/**
	 * @access private
	 */
	private function Coure() {
		// Not yet implemented
	}
}