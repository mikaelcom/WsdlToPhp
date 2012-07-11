<?php
/**
 * Class file for OvhTypeTelephonyToneStatusResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyToneStatusResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyToneStatusResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyToneStatusReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyToneStatusReturn return
	 * @return OvhTypeTelephonyToneStatusResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyToneStatusReturn return
	 * @return telephonyToneStatusReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyToneStatusReturn
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