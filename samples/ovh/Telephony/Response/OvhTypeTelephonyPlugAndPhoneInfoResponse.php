<?php
/**
 * Class file for OvhTypeTelephonyPlugAndPhoneInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPlugAndPhoneInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyPlugAndPhoneInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyPlugAndPhoneInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyPlugAndPhoneInfoReturn return
	 * @return OvhTypeTelephonyPlugAndPhoneInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyPlugAndPhoneInfoReturn return
	 * @return telephonyPlugAndPhoneInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyPlugAndPhoneInfoReturn
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