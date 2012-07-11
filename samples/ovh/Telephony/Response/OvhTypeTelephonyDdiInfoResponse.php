<?php
/**
 * Class file for OvhTypeTelephonyDdiInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDdiInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyDdiInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyDdiInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyDdiInfoReturn return
	 * @return OvhTypeTelephonyDdiInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyDdiInfoReturn return
	 * @return telephonyDdiInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyDdiInfoReturn
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