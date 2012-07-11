<?php
/**
 * Class file for OvhTypeTelephonyTonesOptionsListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyTonesOptionsListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyTonesOptionsListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyTonesOptionsListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyTonesOptionsListReturn return
	 * @return OvhTypeTelephonyTonesOptionsListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyTonesOptionsListReturn return
	 * @return telephonyTonesOptionsListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyTonesOptionsListReturn
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