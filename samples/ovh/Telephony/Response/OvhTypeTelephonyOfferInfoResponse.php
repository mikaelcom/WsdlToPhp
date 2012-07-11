<?php
/**
 * Class file for OvhTypeTelephonyOfferInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyOfferInfoResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyOfferInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeTelephonyOfferInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyOfferInfoReturn return
	 * @return OvhTypeTelephonyOfferInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param telephonyOfferInfoReturn return
	 * @return telephonyOfferInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypetelephonyOfferInfoReturn
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