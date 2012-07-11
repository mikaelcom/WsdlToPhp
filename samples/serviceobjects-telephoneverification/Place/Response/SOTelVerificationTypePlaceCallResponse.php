<?php
/**
 * Class file for SOTelVerificationTypePlaceCallResponse
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypePlaceCallResponse
 * @date 08/07/2012
 */
class SOTelVerificationTypePlaceCallResponse extends SOTelVerificationWsdlClass
{
	/**
	 * The PlaceCallResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOTelVerificationTypeTelephoneInfo
	 */
	public $PlaceCallResult;
	/**
	 * Constructor
	 * @param SOTelVerificationTypeTelephoneInfo PlaceCallResult
	 * @return SOTelVerificationTypePlaceCallResponse
	 */
	public function __construct($_PlaceCallResult = null)
	{
		parent::__construct(array('PlaceCallResult'=>$_PlaceCallResult));
	}
	/**
	 * Set PlaceCallResult
	 * @param TelephoneInfo PlaceCallResult
	 * @return TelephoneInfo
	 */
	public function setPlaceCallResult($_PlaceCallResult)
	{
		return ($this->PlaceCallResult = $_PlaceCallResult);
	}
	/**
	 * Get PlaceCallResult
	 * @return SOTelVerificationTypeTelephoneInfo
	 */
	public function getPlaceCallResult()
	{
		return $this->PlaceCallResult;
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