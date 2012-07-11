<?php
/**
 * Class file for OvhTypeTelephonyRedirectInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyRedirectInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyRedirectInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyRedirectInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyRedirectInfoReturn return
	 * @return OvhTypeTelephonyRedirectInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyRedirectInfoReturn return
	 * @return telephonyRedirectInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyRedirectInfoReturn
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