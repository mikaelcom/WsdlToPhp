<?php
/**
 * Class file for OvhTypeTelephonySmsSenderDescription
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSenderDescription
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSenderDescription extends OvhWsdlClass
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
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string session
	 * @param string smsAccount
	 * @param string number
	 * @param string description
	 * @return OvhTypeTelephonySmsSenderDescription
	 */
	public function __construct($_session = null,$_smsAccount = null,$_number = null,$_description = null)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'number'=>$_number,'description'=>$_description));
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
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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