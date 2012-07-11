<?php
/**
 * Class file for EbayShoppingTypeGetShippingCostsRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetShippingCostsRequestType
 * Documentation : Gets shipping costs for an item. This is one of the ways a buyer or seller can obtain shipping cost information for an existing item (for which the caller is either the buyer or seller) at any point in the life of of the listing, before or after a buyer has committed to purchasing the item(s). This call works for both flat rate shipping and calculated shipping. Flat rate shipping costs are established by the seller before bidding occurs. Calculated shipping costs are calculated by eBay with its shipping partners based on postal code, but note that insurance cost can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. It is best to call GetShippingCosts only after determining via GetSingleItem or findItemsAdvanced (<a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html" >Finding API</a>) that the item actually has shipping cost information.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetShippingCostsRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID that uniquely identifies the item listing for which to retrieve the data.
	 * @var string
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
	 * 	- documentation : Destination country postal code (or zipcode, for US). Ignored if no country code is provided. Optional tag for some countries. More likely to be required for large countries. Ignored for flat rate shipping.
	 * @var string
	 */
	public $DestinationPostalCode;
	/**
	 * The DestinationCountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Destination country code. If DestinationCountryCode is US, postal code is required and represents US zip code.
	 * @var EbayShoppingTypeCountryCodeType
	 */
	public $DestinationCountryCode;
	/**
	 * The IncludeDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to return the ShippingDetails container in the response.
	 * @var boolean
	 */
	public $IncludeDetails;
	/**
	 * Constructor
	 * @param string ItemID
	 * @param int QuantitySold
	 * @param string DestinationPostalCode
	 * @param EbayShoppingTypeCountryCodeType DestinationCountryCode
	 * @param boolean IncludeDetails
	 * @return EbayShoppingTypeGetShippingCostsRequestType
	 */
	public function __construct($_ItemID = null,$_QuantitySold = null,$_DestinationPostalCode = null,$_DestinationCountryCode = null,$_IncludeDetails = null)
	{
		EbayShoppingWsdlClass::__construct(array('ItemID'=>$_ItemID,'QuantitySold'=>$_QuantitySold,'DestinationPostalCode'=>$_DestinationPostalCode,'DestinationCountryCode'=>$_DestinationCountryCode,'IncludeDetails'=>$_IncludeDetails));
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
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
		return ($this->DestinationCountryCode = EbayShoppingTypeCountryCodeType::valueIsValid($_DestinationCountryCode)?$_DestinationCountryCode:null);
	}
	/**
	 * Get DestinationCountryCode
	 * @return EbayShoppingTypeCountryCodeType
	 */
	public function getDestinationCountryCode()
	{
		return $this->DestinationCountryCode;
	}
	/**
	 * Set IncludeDetails
	 * @param boolean IncludeDetails
	 * @return boolean
	 */
	public function setIncludeDetails($_IncludeDetails)
	{
		return ($this->IncludeDetails = $_IncludeDetails);
	}
	/**
	 * Get IncludeDetails
	 * @return boolean
	 */
	public function getIncludeDetails()
	{
		return $this->IncludeDetails;
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