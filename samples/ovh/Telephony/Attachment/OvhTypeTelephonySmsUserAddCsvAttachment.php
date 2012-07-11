<?php
/**
 * Class file for OvhTypeTelephonySmsUserAddCsvAttachment
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserAddCsvAttachment
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserAddCsvAttachment extends OvhWsdlClass
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
	 * The csvUrl
	 * @var string
	 */
	public $csvUrl;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string smsAccount
	 * @param string login
	 * @param string password
	 * @param string csvUrl
	 * @param string id
	 * @param string name
	 * @return OvhTypeTelephonySmsUserAddCsvAttachment
	 */
	public function __construct($_smsAccount = null,$_login = null,$_password = null,$_csvUrl = null,$_id = null,$_name = null)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'login'=>$_login,'password'=>$_password,'csvUrl'=>$_csvUrl,'id'=>$_id,'name'=>$_name));
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
	 * Set csvUrl
	 * @param string csvUrl
	 * @return string
	 */
	public function setCsvUrl($_csvUrl)
	{
		return ($this->csvUrl = $_csvUrl);
	}
	/**
	 * Get csvUrl
	 * @return string
	 */
	public function getCsvUrl()
	{
		return $this->csvUrl;
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
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