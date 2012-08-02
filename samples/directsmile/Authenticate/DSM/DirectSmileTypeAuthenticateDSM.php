<?php
/**
 * Class file for DirectSmileTypeAuthenticateDSM
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeAuthenticateDSM
 * @date 02/08/2012
 */
class DirectSmileTypeAuthenticateDSM extends DirectSmileWsdlClass
{
	/**
	 * The UserName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserName;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * Constructor
	 * @param string UserName
	 * @param string Password
	 * @return DirectSmileTypeAuthenticateDSM
	 */
	public function __construct($_UserName = null,$_Password = null)
	{
		parent::__construct(array('UserName'=>$_UserName,'Password'=>$_Password));
	}
	/**
	 * Set UserName
	 * @param string UserName
	 * @return string
	 */
	public function setUserName($_UserName)
	{
		return ($this->UserName = $_UserName);
	}
	/**
	 * Get UserName
	 * @return string
	 */
	public function getUserName()
	{
		return $this->UserName;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
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