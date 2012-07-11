<?php
/**
 * Class file for OvhTypeTelephonyClick2CallDo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyClick2CallDo
 * @date 02/07/2012
 */
class OvhTypeTelephonyClick2CallDo extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The calling
	 * @var string
	 */
	public $calling;
	/**
	 * The called
	 * @var string
	 */
	public $called;
	/**
	 * The billingNumber
	 * @var string
	 */
	public $billingNumber;
	/**
	 * Constructor
	 * @param string login
	 * @param string password
	 * @param string calling
	 * @param string called
	 * @param string billingNumber
	 * @return OvhTypeTelephonyClick2CallDo
	 */
	public function __construct($_login = null,$_password = null,$_calling = null,$_called = null,$_billingNumber = null)
	{
		parent::__construct(array('login'=>$_login,'password'=>$_password,'calling'=>$_calling,'called'=>$_called,'billingNumber'=>$_billingNumber));
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
	 * Set calling
	 * @param string calling
	 * @return string
	 */
	public function setCalling($_calling)
	{
		return ($this->calling = $_calling);
	}
	/**
	 * Get calling
	 * @return string
	 */
	public function getCalling()
	{
		return $this->calling;
	}
	/**
	 * Set called
	 * @param string called
	 * @return string
	 */
	public function setCalled($_called)
	{
		return ($this->called = $_called);
	}
	/**
	 * Get called
	 * @return string
	 */
	public function getCalled()
	{
		return $this->called;
	}
	/**
	 * Set billingNumber
	 * @param string billingNumber
	 * @return string
	 */
	public function setBillingNumber($_billingNumber)
	{
		return ($this->billingNumber = $_billingNumber);
	}
	/**
	 * Get billingNumber
	 * @return string
	 */
	public function getBillingNumber()
	{
		return $this->billingNumber;
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