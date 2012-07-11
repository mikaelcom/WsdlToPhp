<?php
/**
 * Class file for OvhTypeTelephonySmsUserSend
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserSend
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserSend extends OvhWsdlClass
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
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The numberFrom
	 * @var string
	 */
	public $numberFrom;
	/**
	 * The numberTo
	 * @var string
	 */
	public $numberTo;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * The smsValidity
	 * @var int
	 */
	public $smsValidity;
	/**
	 * The smsClass
	 * @var int
	 */
	public $smsClass;
	/**
	 * The smsDeferred
	 * @var int
	 */
	public $smsDeferred;
	/**
	 * The smsPriority
	 * @var int
	 */
	public $smsPriority;
	/**
	 * The smsCoding
	 * @var int
	 */
	public $smsCoding;
	/**
	 * The tag
	 * @var string
	 */
	public $tag;
	/**
	 * Constructor
	 * @param string login
	 * @param string password
	 * @param string smsAccount
	 * @param string numberFrom
	 * @param string numberTo
	 * @param string message
	 * @param int smsValidity
	 * @param int smsClass
	 * @param int smsDeferred
	 * @param int smsPriority
	 * @param int smsCoding
	 * @param string tag
	 * @return OvhTypeTelephonySmsUserSend
	 */
	public function __construct($_login = null,$_password = null,$_smsAccount = null,$_numberFrom = null,$_numberTo = null,$_message = null,$_smsValidity = null,$_smsClass = null,$_smsDeferred = null,$_smsPriority = null,$_smsCoding = null,$_tag = null)
	{
		parent::__construct(array('login'=>$_login,'password'=>$_password,'smsAccount'=>$_smsAccount,'numberFrom'=>$_numberFrom,'numberTo'=>$_numberTo,'message'=>$_message,'smsValidity'=>$_smsValidity,'smsClass'=>$_smsClass,'smsDeferred'=>$_smsDeferred,'smsPriority'=>$_smsPriority,'smsCoding'=>$_smsCoding,'tag'=>$_tag));
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
	 * Set numberFrom
	 * @param string numberFrom
	 * @return string
	 */
	public function setNumberFrom($_numberFrom)
	{
		return ($this->numberFrom = $_numberFrom);
	}
	/**
	 * Get numberFrom
	 * @return string
	 */
	public function getNumberFrom()
	{
		return $this->numberFrom;
	}
	/**
	 * Set numberTo
	 * @param string numberTo
	 * @return string
	 */
	public function setNumberTo($_numberTo)
	{
		return ($this->numberTo = $_numberTo);
	}
	/**
	 * Get numberTo
	 * @return string
	 */
	public function getNumberTo()
	{
		return $this->numberTo;
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set smsValidity
	 * @param int smsValidity
	 * @return int
	 */
	public function setSmsValidity($_smsValidity)
	{
		return ($this->smsValidity = $_smsValidity);
	}
	/**
	 * Get smsValidity
	 * @return int
	 */
	public function getSmsValidity()
	{
		return $this->smsValidity;
	}
	/**
	 * Set smsClass
	 * @param int smsClass
	 * @return int
	 */
	public function setSmsClass($_smsClass)
	{
		return ($this->smsClass = $_smsClass);
	}
	/**
	 * Get smsClass
	 * @return int
	 */
	public function getSmsClass()
	{
		return $this->smsClass;
	}
	/**
	 * Set smsDeferred
	 * @param int smsDeferred
	 * @return int
	 */
	public function setSmsDeferred($_smsDeferred)
	{
		return ($this->smsDeferred = $_smsDeferred);
	}
	/**
	 * Get smsDeferred
	 * @return int
	 */
	public function getSmsDeferred()
	{
		return $this->smsDeferred;
	}
	/**
	 * Set smsPriority
	 * @param int smsPriority
	 * @return int
	 */
	public function setSmsPriority($_smsPriority)
	{
		return ($this->smsPriority = $_smsPriority);
	}
	/**
	 * Get smsPriority
	 * @return int
	 */
	public function getSmsPriority()
	{
		return $this->smsPriority;
	}
	/**
	 * Set smsCoding
	 * @param int smsCoding
	 * @return int
	 */
	public function setSmsCoding($_smsCoding)
	{
		return ($this->smsCoding = $_smsCoding);
	}
	/**
	 * Get smsCoding
	 * @return int
	 */
	public function getSmsCoding()
	{
		return $this->smsCoding;
	}
	/**
	 * Set tag
	 * @param string tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get tag
	 * @return string
	 */
	public function getTag()
	{
		return $this->tag;
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