<?php
/**
 * Class file for OvhTypeTelephonyHuntingInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyHuntingInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyHuntingInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyHuntingInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyHuntingInfoReturn return
	 * @return OvhTypeTelephonyHuntingInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyHuntingInfoReturn return
	 * @return telephonyHuntingInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyHuntingInfoReturn
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