<?php
/**
 * Class file for OvhTypeTelephonySmsUserStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsUserStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsUserStruct extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The quota
	 * @var string
	 */
	public $quota;
	/**
	 * The quotaStatus
	 * @var string
	 */
	public $quotaStatus;
	/**
	 * The alertThreshold
	 * @var string
	 */
	public $alertThreshold;
	/**
	 * The support
	 * @var string
	 */
	public $support;
	/**
	 * The alertNumber
	 * @var string
	 */
	public $alertNumber;
	/**
	 * Constructor
	 * @param string login
	 * @param string quota
	 * @param string quotaStatus
	 * @param string alertThreshold
	 * @param string support
	 * @param string alertNumber
	 * @return OvhTypeTelephonySmsUserStruct
	 */
	public function __construct($_login = null,$_quota = null,$_quotaStatus = null,$_alertThreshold = null,$_support = null,$_alertNumber = null)
	{
		parent::__construct(array('login'=>$_login,'quota'=>$_quota,'quotaStatus'=>$_quotaStatus,'alertThreshold'=>$_alertThreshold,'support'=>$_support,'alertNumber'=>$_alertNumber));
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
	 * Set quota
	 * @param string quota
	 * @return string
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quota
	 * @return string
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quotaStatus
	 * @param string quotaStatus
	 * @return string
	 */
	public function setQuotaStatus($_quotaStatus)
	{
		return ($this->quotaStatus = $_quotaStatus);
	}
	/**
	 * Get quotaStatus
	 * @return string
	 */
	public function getQuotaStatus()
	{
		return $this->quotaStatus;
	}
	/**
	 * Set alertThreshold
	 * @param string alertThreshold
	 * @return string
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
	}
	/**
	 * Get alertThreshold
	 * @return string
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
	}
	/**
	 * Set support
	 * @param string support
	 * @return string
	 */
	public function setSupport($_support)
	{
		return ($this->support = $_support);
	}
	/**
	 * Get support
	 * @return string
	 */
	public function getSupport()
	{
		return $this->support;
	}
	/**
	 * Set alertNumber
	 * @param string alertNumber
	 * @return string
	 */
	public function setAlertNumber($_alertNumber)
	{
		return ($this->alertNumber = $_alertNumber);
	}
	/**
	 * Get alertNumber
	 * @return string
	 */
	public function getAlertNumber()
	{
		return $this->alertNumber;
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