<?php
/**
 * Class file for JmDataMovieAppTypeRegisterUserResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeRegisterUserResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeRegisterUserResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The RegisterUserResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $RegisterUserResult;
	/**
	 * Constructor
	 * @param int RegisterUserResult
	 * @return JmDataMovieAppTypeRegisterUserResponse
	 */
	public function __construct($_RegisterUserResult)
	{
		parent::__construct(array('RegisterUserResult'=>$_RegisterUserResult));
	}
	/**
	 * Set RegisterUserResult
	 * @param int RegisterUserResult
	 * @return int
	 */
	public function setRegisterUserResult($_RegisterUserResult)
	{
		return ($this->RegisterUserResult = $_RegisterUserResult);
	}
	/**
	 * Get RegisterUserResult
	 * @return int
	 */
	public function getRegisterUserResult()
	{
		return $this->RegisterUserResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>