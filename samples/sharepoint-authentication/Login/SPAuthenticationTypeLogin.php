<?php
/**
 * Class file for SPAuthenticationTypeLogin
 * @date 06/07/2012
 */
/**
 * Class SPAuthenticationTypeLogin
 * @date 06/07/2012
 */
class SPAuthenticationTypeLogin extends SPAuthenticationWsdlClass
{
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * Constructor
	 * @param string username
	 * @param string password
	 * @return SPAuthenticationTypeLogin
	 */
	public function __construct($_username = null,$_password = null)
	{
		parent::__construct(array('username'=>$_username,'password'=>$_password));
	}
	/**
	 * Set username
	 * @param string username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get username
	 * @return string
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set password
	 * @param string password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->password;
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