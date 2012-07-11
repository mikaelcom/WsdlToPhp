<?php
/**
 * Class file for OvhTypeTelephonySmsSenderValidate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSenderValidate
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSenderValidate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The code
	 * @var int
	 */
	public $code;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string number
	 * @param int code
	 * @return OvhTypeTelephonySmsSenderValidate
	 */
	public function __construct($_session = null,$_smsAccount = null,$_number = null,$_code = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'number'=>$_number,'code'=>$_code));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set smsAccount
	 * @param string smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsAccount
	 * @return string
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set code
	 * @param int code
	 * @return int
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
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