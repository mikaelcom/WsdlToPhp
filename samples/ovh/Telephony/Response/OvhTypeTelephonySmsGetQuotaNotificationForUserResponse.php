<?php
/**
 * Class file for OvhTypeTelephonySmsGetQuotaNotificationForUserResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsGetQuotaNotificationForUserResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsGetQuotaNotificationForUserResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyNotificationSmsUserStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyNotificationSmsUserStruct return
	 * @return OvhTypeTelephonySmsGetQuotaNotificationForUserResponse
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