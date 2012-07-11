<?php
/**
 * Class file for EbayShoppingTypeGetShippingCostsResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeGetShippingCostsResponseType
 * Documentation : Response to call of GetShippingCosts.
 * @date 05/07/2012
 */
class EbayShoppingTypeGetShippingCostsResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping-related details for the specified item. This container is only returned if IncludeDetails is true on input. Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in ShippingRateErrorMessage. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
	 * @var EbayShoppingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ShippingCostSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping-related details for the specified item. Any error about shipping services (returned by a vendor of eBay's who calculates shipping costs) is returned in ShippingRateErrorMessage. Errors from a shipping service are likely to be related to issues with shipping specifications, such as package size and the selected shipping method not supported by a particular shipping service.
	 * @var EbayShoppingTypeShippingCostSummaryType
	 */
	public $ShippingCostSummary;
	/**
	 * Constructor
	 * @param EbayShoppingTypeShippingDetailsType ShippingDetails
	 * @param EbayShoppingTypeShippingCostSummaryType ShippingCostSummary
	 * @return EbayShoppingTypeGetShippingCostsResponseType
	 */
	public function __construct($_ShippingDetails = null,$_ShippingCostSummary = null)
	{
		EbayShoppingWsdlClass::__construct(array('ShippingDetails'=>$_ShippingDetails,'ShippingCostSummary'=>$_ShippingCostSummary));
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
	 * @return EbayShoppingTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ShippingCostSummary
	 * @param ShippingCostSummaryType ShippingCostSummary
	 * @return ShippingCostSummaryType
	 */
	public function setShippingCostSummary($_ShippingCostSummary)
	{
		return ($this->ShippingCostSummary = $_ShippingCostSummary);
	}
	/**
	 * Get ShippingCostSummary
	 * @return EbayShoppingTypeShippingCostSummaryType
	 */
	public function getShippingCostSummary()
	{
		return $this->ShippingCostSummary;
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