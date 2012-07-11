<?php
/**
 * Class file for OvhTypeTelephonyLineSwitchOfferPossibilityResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineSwitchOfferPossibilityResponse
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineSwitchOfferPossibilityResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType return
	 * @return OvhTypeTelephonyLineSwitchOfferPossibilityResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfTelephonyLineSwitchPossibilityPriceStructType return
	 * @return MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
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