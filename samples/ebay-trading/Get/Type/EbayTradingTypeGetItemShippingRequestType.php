<?php
/**
 * Class file for EbayTradingTypeGetItemShippingRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemShippingRequestType
 * Documentation : Returns shipping cost estimates for an item for every calculated shipping service that the seller has offered with the listing. This is analogous to the Shipping Calculator seen in both the buyer and seller web pages.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemShippingRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID that uniquely identifies the item listing for which to retrieve the data. Required input.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items sold to a single buyer and to be shipped together.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The DestinationPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Destination country postal code (or zipcode, for US). Ignored if no country code is provided. Optional tag for some countries. More likely to be required for large countries.
	 * @var string
	 */
	public $DestinationPostalCode;
	/**
	 * The DestinationCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Destination country code. If DestinationCountryCode is US, a postal code is required and it represents the US zip code.
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $DestinationCountryCode;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param int QuantitySold
	 * @param string DestinationPostalCode
	 * @param EbayTradingTypeCountryCodeType DestinationCountryCode
	 * @return EbayTradingTypeGetItemShippingRequestType
	 */
	public function __construct($_ItemID = null,$_QuantitySold = null,$_DestinationPostalCode = null,$_DestinationCountryCode = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'QuantitySold'=>$_QuantitySold,'DestinationPostalCode'=>$_DestinationPostalCode,'DestinationCountryCode'=>$_DestinationCountryCode));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set DestinationPostalCode
	 * @param string DestinationPostalCode
	 * @return string
	 */
	public function setDestinationPostalCode($_DestinationPostalCode)
	{
		return ($this->DestinationPostalCode = $_DestinationPostalCode);
	}
	/**
	 * Get DestinationPostalCode
	 * @return string
	 */
	public function getDestinationPostalCode()
	{
		return $this->DestinationPostalCode;
	}
	/**
	 * Set DestinationCountryCode
	 * @param CountryCodeType DestinationCountryCode
	 * @return CountryCodeType
	 */
	public function setDestinationCountryCode($_DestinationCountryCode)
	{
		return ($this->DestinationCountryCode = EbayTradingTypeCountryCodeType::valueIsValid($_DestinationCountryCode)?$_DestinationCountryCode:null);
	}
	/**
	 * Get DestinationCountryCode
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
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