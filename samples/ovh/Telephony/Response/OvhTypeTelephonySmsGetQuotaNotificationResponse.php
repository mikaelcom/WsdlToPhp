<?php
/**
 * Class file for OvhTypeTelephonySmsGetQuotaNotificationResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsGetQuotaNotificationResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsGetQuotaNotificationResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyNotificationSmsUserStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyNotificationSmsUserStruct return
	 * @return OvhTypeTelephonySmsGetQuotaNotificationResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyNotificationSmsUserStruct return
	 * @return telephonyNotificationSmsUserStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyNotificationSmsUserStruct
	 */
	public function getReturn()
	{
		return $this->return;
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