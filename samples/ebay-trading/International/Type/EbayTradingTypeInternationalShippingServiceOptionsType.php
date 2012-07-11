<?php
/**
 * Class file for EbayTradingTypeInternationalShippingServiceOptionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInternationalShippingServiceOptionsType
 * Documentation : Container consisting of shipping costs and other details related to an international shipping service. If one or more international shipping services are provided, the seller must specify at least one domestic shipping service as well.
 * @date 04/07/2012
 */
class EbayTradingTypeInternationalShippingServiceOptionsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An international shipping service being offered by the seller to ship an item to a buyer. For a list of valid values, call GeteBayDetails with DetailName set to ShippingServiceDetails. The ShippingServiceDetails.ValidForSellingFlow flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br><br> For flat and calculated shipping.
	 * @var token
	 */
	public $ShippingService;
	/**
	 * The ShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The meaning of this element depends on the call and on whether flat or calculated shipping has been selected. (For example, it could be the cost to ship a single item, the cost to ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost accounting for the rest.) When returned by GetItemShipping, it includes the packaging and handling cost. For flat and calculated shipping. <br> <br> If a shipping service has been specified, GetItem returns the shipping service cost, even if the cost is zero. Otherwise, cost is not returned.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of shipping each additional item beyond the first item. For input, this is required if the listing is for multiple items. For single-item listings, it should be zero (or is defaulted to zero if not provided). For flat shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value controls the order (relative to other shipping services) in which the corresponding ShippingService will appear in the View Item and Checkout page. Sellers can specify up to five international shipping services (with five InternationalShippingServiceOption containers), so valid values are 1, 2, 3, 4, and 5. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 5 appears at the bottom of a list of five shipping service options. <br><br> This field is applicable to Flat and Calculated shipping. This field is not applicable to Half.com listings.
	 * @var int
	 */
	public $ShippingServicePriority;
	/**
	 * The ShipToLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to where the item seller will ship the item. Use GeteBayDetails to determine which locations are valid per site. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType. For the AddItem family of calls, this field is required if any international shipping service is specified.
	 * @var string
	 */
	public $ShipToLocation;
	/**
	 * The ShippingInsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The insurance cost associated with shipping a single item with this shipping service. Exception: for GetItemShipping, this is proportional to QuantitySold. If the item has not yet been sold, insurance information cannot be calculated and the value is 0.00. For calculated shipping only. <br><br> Valid only on the following sites: AU, FR, and IT <br> Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingInsuranceCost;
	/**
	 * The ImportCharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of customs and taxes for the international leg of an order shipped using the Global Exchange program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeAmountType
	 */
	public $ImportCharge;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token ShippingService
	 * @param EbayTradingTypeAmountType ShippingServiceCost
	 * @param EbayTradingTypeAmountType ShippingServiceAdditionalCost
	 * @param int ShippingServicePriority
	 * @param string ShipToLocation
	 * @param EbayTradingTypeAmountType ShippingInsuranceCost
	 * @param EbayTradingTypeAmountType ImportCharge
	 * @param DOMDocument any
	 * @return EbayTradingTypeInternationalShippingServiceOptionsType
	 */
	public function __construct($_ShippingService = null,$_ShippingServiceCost = null,$_ShippingServiceAdditionalCost = null,$_ShippingServicePriority = null,$_ShipToLocation = null,$_ShippingInsuranceCost = null,$_ImportCharge = null,$_any = null)
	{
		parent::__construct(array('ShippingService'=>$_ShippingService,'ShippingServiceCost'=>$_ShippingServiceCost,'ShippingServiceAdditionalCost'=>$_ShippingServiceAdditionalCost,'ShippingServicePriority'=>$_ShippingServicePriority,'ShipToLocation'=>$_ShipToLocation,'ShippingInsuranceCost'=>$_ShippingInsuranceCost,'ImportCharge'=>$_ImportCharge,'any'=>$_any));
	}
	/**
	 * Set ShippingService
	 * @param token ShippingService
	 * @return token
	 */
	public function setShippingService($_ShippingService)
	{
		return ($this->ShippingService = $_ShippingService);
	}
	/**
	 * Get ShippingService
	 * @return token
	 */
	public function getShippingService()
	{
		return $this->ShippingService;
	}
	/**
	 * Set ShippingServiceCost
	 * @param AmountType ShippingServiceCost
	 * @return AmountType
	 */
	public function setShippingServiceCost($_ShippingServiceCost)
	{
		return ($this->ShippingServiceCost = $_ShippingServiceCost);
	}
	/**
	 * Get ShippingServiceCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * Set ShippingServiceAdditionalCost
	 * @param AmountType ShippingServiceAdditionalCost
	 * @return AmountType
	 */
	public function setShippingServiceAdditionalCost($_ShippingServiceAdditionalCost)
	{
		return ($this->ShippingServiceAdditionalCost = $_ShippingServiceAdditionalCost);
	}
	/**
	 * Get ShippingServiceAdditionalCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
	}
	/**
	 * Set ShippingServicePriority
	 * @param int ShippingServicePriority
	 * @return int
	 */
	public function setShippingServicePriority($_ShippingServicePriority)
	{
		return ($this->ShippingServicePriority = $_ShippingServicePriority);
	}
	/**
	 * Get ShippingServicePriority
	 * @return int
	 */
	public function getShippingServicePriority()
	{
		return $this->ShippingServicePriority;
	}
	/**
	 * Set ShipToLocation
	 * @param string ShipToLocation
	 * @return string
	 */
	public function setShipToLocation($_ShipToLocation)
	{
		return ($this->ShipToLocation = $_ShipToLocation);
	}
	/**
	 * Get ShipToLocation
	 * @return string
	 */
	public function getShipToLocation()
	{
		return $this->ShipToLocation;
	}
	/**
	 * Set ShippingInsuranceCost
	 * @param AmountType ShippingInsuranceCost
	 * @return AmountType
	 */
	public function setShippingInsuranceCost($_ShippingInsuranceCost)
	{
		return ($this->ShippingInsuranceCost = $_ShippingInsuranceCost);
	}
	/**
	 * Get ShippingInsuranceCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * Set ImportCharge
	 * @param AmountType ImportCharge
	 * @return AmountType
	 */
	public function setImportCharge($_ImportCharge)
	{
		return ($this->ImportCharge = $_ImportCharge);
	}
	/**
	 * Get ImportCharge
	 * @return EbayTradingTypeAmountType
	 */
	public function getImportCharge()
	{
		return $this->ImportCharge;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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