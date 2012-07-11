<?php
/**
 * Class file for OvhTypeTelephonyPortabilityOrderSpecialNumberResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPortabilityOrderSpecialNumberResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPortabilityOrderSpecialNumberResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyNumberOrderReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyNumberOrderReturn return
	 * @return OvhTypeTelephonyPortabilityOrderSpecialNumberResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyNumberOrderReturn return
	 * @return telephonyNumberOrderReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyNumberOrderReturn
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