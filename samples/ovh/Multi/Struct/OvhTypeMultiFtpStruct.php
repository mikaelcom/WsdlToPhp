<?php
/**
 * Class file for OvhTypeMultiFtpStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiFtpStruct
 * @date 02/07/2012
 */
class OvhTypeMultiFtpStruct extends OvhWsdlClass
{
	/**
	 * The subdir
	 * @var string
	 */
	public $subdir;
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * Constructor
	 * @param string subdir
	 * @param string login
	 * @return OvhTypeMultiFtpStruct
	 */
	public function __construct($_subdir = null,$_login = null)
	{
		parent::__construct(array('subdir'=>$_subdir,'login'=>$_login));
	}
	/**
	 * Set subdir
	 * @param string subdir
	 * @return string
	 */
	public function setSubdir($_subdir)
	{
		return ($this->subdir = $_subdir);
	}
	/**
	 * Get subdir
	 * @return string
	 */
	public function getSubdir()
	{
		return $this->subdir;
	}
	/**
	 * Set login
	 * @param string login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get login
	 * @return string
	 */
	public function getLogin()
	{
		return $this->login;
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