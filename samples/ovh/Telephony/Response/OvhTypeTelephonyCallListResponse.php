<?php
/**
 * Class file for OvhTypeTelephonyCallListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyCallListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyCallListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyCallListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyCallListReturn return
	 * @return OvhTypeTelephonyCallListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyCallListReturn return
	 * @return telephonyCallListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyCallListReturn
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