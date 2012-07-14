<?php
/**
 * Class file for PayPalTypeEnhancedDataType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeEnhancedDataType
 * Documentation : Enhanced Data Information. Example: AID for Airlines
 * @date 14/07/2012
 */
class PayPalTypeEnhancedDataType extends PayPalWsdlClass
{
	/**
	 * The AirlineItinerary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeAirlineItineraryType
	 */
	public $AirlineItinerary;
	/**
	 * Constructor
	 * @param PayPalTypeAirlineItineraryType AirlineItinerary
	 * @return PayPalTypeEnhancedDataType
	 */
	public function __construct($_AirlineItinerary = null)
	{
		parent::__construct(array('AirlineItinerary'=>$_AirlineItinerary));
	}
	/**
	 * Set AirlineItinerary
	 * @param AirlineItineraryType AirlineItinerary
	 * @return AirlineItineraryType
	 */
	public function setAirlineItinerary($_AirlineItinerary)
	{
		return ($this->AirlineItinerary = $_AirlineItinerary);
	}
	/**
	 * Get AirlineItinerary
	 * @return PayPalTypeAirlineItineraryType
	 */
	public function getAirlineItinerary()
	{
		return $this->AirlineItinerary;
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