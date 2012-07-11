<?php
/**
 * Class file for SOGeoPhoneWirelessTypeValidateNumberResponse
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneWirelessTypeValidateNumberResponse
 * @date 08/07/2012
 */
class SOGeoPhoneWirelessTypeValidateNumberResponse extends SOGeoPhoneWirelessWsdlClass
{
	/**
	 * The ValidateNumberResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOGeoPhoneWirelessTypeGeophoneWirelessResult
	 */
	public $ValidateNumberResult;
	/**
	 * Constructor
	 * @param SOGeoPhoneWirelessTypeGeophoneWirelessResult ValidateNumberResult
	 * @return SOGeoPhoneWirelessTypeValidateNumberResponse
	 */
	public function __construct($_ValidateNumberResult = null)
	{
		parent::__construct(array('ValidateNumberResult'=>$_ValidateNumberResult));
	}
	/**
	 * Set ValidateNumberResult
	 * @param GeophoneWirelessResult ValidateNumberResult
	 * @return GeophoneWirelessResult
	 */
	public function setValidateNumberResult($_ValidateNumberResult)
	{
		return ($this->ValidateNumberResult = $_ValidateNumberResult);
	}
	/**
	 * Get ValidateNumberResult
	 * @return SOGeoPhoneWirelessTypeGeophoneWirelessResult
	 */
	public function getValidateNumberResult()
	{
		return $this->ValidateNumberResult;
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