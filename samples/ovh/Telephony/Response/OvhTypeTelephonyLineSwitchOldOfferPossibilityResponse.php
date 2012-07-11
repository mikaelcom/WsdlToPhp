<?php
/**
 * Class file for OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType return
	 * @return OvhTypeTelephonyLineSwitchOldOfferPossibilityResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyLineSwitchOldOfferStructType return
	 * @return MyArrayOfTelephonyLineSwitchOldOfferStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType
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