<?php
/**
 * Class file for OvhTypeTelephonyLineLogsNotificationOptionsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsNotificationOptionsResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsNotificationOptionsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyLineLogsNotificationOptionsReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyLineLogsNotificationOptionsReturn return
	 * @return OvhTypeTelephonyLineLogsNotificationOptionsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyLineLogsNotificationOptionsReturn return
	 * @return telephonyLineLogsNotificationOptionsReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyLineLogsNotificationOptionsReturn
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