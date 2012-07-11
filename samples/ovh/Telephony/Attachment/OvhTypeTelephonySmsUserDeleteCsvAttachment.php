<?php
/**
 * Class file for OvhTypeTelephonySmsUserDeleteCsvAttachment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserDeleteCsvAttachment
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserDeleteCsvAttachment extends OvhWsdlClass
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
	 * The ids
	 * @var OvhTypeMyArrayOfIntType
	 */
	public $ids;
	/**
	 * Constructor
	 * @param string smsAccount
	 * @param string login
	 * @param string password
	 * @param OvhTypeMyArrayOfIntType ids
	 * @return OvhTypeTelephonySmsUserDeleteCsvAttachment
	 */
	public function __construct($_smsAccount = null,$_login = null,$_password = null,$_ids = null)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'login'=>$_login,'password'=>$_password,'ids'=>new OvhTypeMyArrayOfIntType($_ids)));
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
	 * Set ids
	 * @param MyArrayOfIntType ids
	 * @return MyArrayOfIntType
	 */
	public function setIds($_ids)
	{
		return ($this->ids = $_ids);
	}
	/**
	 * Get ids
	 * @return OvhTypeMyArrayOfIntType
	 */
	public function getIds()
	{
		return $this->ids;
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