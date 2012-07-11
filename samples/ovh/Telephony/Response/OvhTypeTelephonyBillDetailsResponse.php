<?php
/**
 * Class file for OvhTypeTelephonyBillDetailsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillDetailsResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillDetailsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyBillDetailsReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyBillDetailsReturn return
	 * @return OvhTypeTelephonyBillDetailsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyBillDetailsReturn return
	 * @return telephonyBillDetailsReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyBillDetailsReturn
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