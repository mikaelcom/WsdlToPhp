<?php
/**
 * Class file for OvhTypeTelephonyNotificationSmsUserStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNotificationSmsUserStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyNotificationSmsUserStruct extends OvhWsdlClass
{
	/**
	 * The support
	 * @var string
	 */
	public $support;
	/**
	 * The alertThreshold
	 * @var string
	 */
	public $alertThreshold;
	/**
	 * The alertNumber
	 * @var string
	 */
	public $alertNumber;
	/**
	 * Constructor
	 * @param string support
	 * @param string alertThreshold
	 * @param string alertNumber
	 * @return OvhTypeTelephonyNotificationSmsUserStruct
	 */
	public function __construct($_support = null,$_alertThreshold = null,$_alertNumber = null)
	{
		parent::__construct(array('support'=>$_support,'alertThreshold'=>$_alertThreshold,'alertNumber'=>$_alertNumber));
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