<?php
/**
 * Class file for EbayTradingTypeGetItemShippingResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemShippingResponseType
 * Documentation : Contains the data returned by the call. The shipping details for the specified item are returned in a ShippingDetails object.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemShippingResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping-related details for the specified item. Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in ShippingRateErrorMessage. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service. <br> <br> If a buyer buys multiple quantities of an item and the resultant total weight exceeds the weight limit of the shipping service, GetItemShipping returns the shipping cost and shipping service and internally groups the items in separate packages. A shipping service is removed from ShippingDetails only if the weight of a single item exceeds the weight limit of the shipping service.
	 * @var EbayTradingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeShippingDetailsType ShippingDetails
	 * @return EbayTradingTypeGetItemShippingResponseType
	 */
	public function __construct($_ShippingDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('ShippingDetails'=>$_ShippingDetails));
	}
	/**
	 * Set ShippingDetails
	 * @param ShippingDetailsType ShippingDetails
	 * @return ShippingDetailsType
	 */
	public function setShippingDetails($_ShippingDetails)
	{
		return ($this->ShippingDetails = $_ShippingDetails);
	}
	/**
	 * Get ShippingDetails
	 * @return EbayTradingTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
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