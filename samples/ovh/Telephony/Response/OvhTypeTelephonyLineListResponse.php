<?php
/**
 * Class file for OvhTypeTelephonyLineListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyLineListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyLineListReturn return
	 * @return OvhTypeTelephonyLineListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyLineListReturn return
	 * @return telephonyLineListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyLineListReturn
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