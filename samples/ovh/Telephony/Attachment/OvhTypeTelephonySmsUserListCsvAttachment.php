<?php
/**
 * Class file for OvhTypeTelephonySmsUserListCsvAttachment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserListCsvAttachment
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserListCsvAttachment extends OvhWsdlClass
{
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
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
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string smsAccount
	 * @param string login
	 * @param string password
	 * @param string id
	 * @return OvhTypeTelephonySmsUserListCsvAttachment
	 */
	public function __construct($_smsAccount = null,$_login = null,$_password = null,$_id = null)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'login'=>$_login,'password'=>$_password,'id'=>$_id));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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