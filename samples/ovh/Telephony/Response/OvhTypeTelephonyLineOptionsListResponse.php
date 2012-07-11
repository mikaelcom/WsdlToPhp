<?php
/**
 * Class file for OvhTypeTelephonyLineOptionsListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineOptionsListResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineOptionsListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyLineOptionsListReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyLineOptionsListReturn return
	 * @return OvhTypeTelephonyLineOptionsListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyLineOptionsListReturn return
	 * @return telephonyLineOptionsListReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyLineOptionsListReturn
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