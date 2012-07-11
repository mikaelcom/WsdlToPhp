<?php
/**
 * Class file for EbayShoppingTypeInternationalShippingServiceOptionType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeInternationalShippingServiceOptionType
 * Documentation : Shipping costs and options related to an international shipping service. When used as input, if one is provided, at least one domestic ShippingService must be provided. This type does not exist before compatibility level 383.
 * @date 05/07/2012
 */
class EbayShoppingTypeInternationalShippingServiceOptionType extends EbayShoppingWsdlClass
{
	/**
	 * The ShippingInsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The insurance cost associated with shipping a single item with this shipping service. If the buyer bought more than one of this item, this proportional to QuantitySold. If the item has not yet been sold, insurance information cannot be calculated and the value is 0.00. For calculated shipping only.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingInsuranceCost;
	/**
	 * The ShippingServiceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An international shipping service offered for shipping the item (for example, UPS Ground). For flat and calculated shipping.
	 * @var token
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of shipping each additional item beyond the first item. For single-item listings, if this is not provided, it is defaulted to zero. For multi-quantity listings, if this is not provided, it is set to the value of (in)ShippingServiceCost (unless the request version is lower than 665, in which case ShippingServiceAdditionalCost is required and is not defaulted). For flat shipping only.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The basic shipping cost of the item. <br> <br> <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping).
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller-preferred presentation order relative to other service options. Valid values are: 1, 2 and 3 (first, second and third choices). For flat and calculated shipping.
	 * @var int
	 */
	public $ShippingServicePriority;
	/**
	 * The ShipsTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to which the item may be shipped via this particular shipping service. Associated with the shipping service by the seller. This is basically the same as SimpleItemType.ShipToLocations except that this is spelled out and the other is abbreviated. Returned with request version 665 or greater, if set via Trading API.
	 * @var string
	 */
	public $ShipsTo;
	/**
	 * The EstimatedDeliveryMinTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum guaranteed date in which the item could reach the buyer's location. Not applicable to Half.com.
	 * @var dateTime
	 */
	public $EstimatedDeliveryMinTime;
	/**
	 * The EstimatedDeliveryMaxTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum guaranteed date in which the item could reach the buyer's location. Not applicable to Half.com.
	 * @var dateTime
	 */
	public $EstimatedDeliveryMaxTime;
	/**
	 * The ImportCharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of customs and taxes for the international leg of an order shipped using the Global Exchange program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayShoppingTypeAmountType
	 */
	public $ImportCharge;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeAmountType ShippingInsuranceCost
	 * @param token ShippingServiceName
	 * @param EbayShoppingTypeAmountType ShippingServiceAdditionalCost
	 * @param EbayShoppingTypeAmountType ShippingServiceCost
	 * @param int ShippingServicePriority
	 * @param string ShipsTo
	 * @param dateTime EstimatedDeliveryMinTime
	 * @param dateTime EstimatedDeliveryMaxTime
	 * @param EbayShoppingTypeAmountType ImportCharge
	 * @param DOMDocument any
	 * @return EbayShoppingTypeInternationalShippingServiceOptionType
	 */
	public function __construct($_ShippingInsuranceCost = null,$_ShippingServiceName = null,$_ShippingServiceAdditionalCost = null,$_ShippingServiceCost = null,$_ShippingServicePriority = null,$_ShipsTo = null,$_EstimatedDeliveryMinTime = null,$_EstimatedDeliveryMaxTime = null,$_ImportCharge = null,$_any = null)
	{
		parent::__construct(array('ShippingInsuranceCost'=>$_ShippingInsuranceCost,'ShippingServiceName'=>$_ShippingServiceName,'ShippingServiceAdditionalCost'=>$_ShippingServiceAdditionalCost,'ShippingServiceCost'=>$_ShippingServiceCost,'ShippingServicePriority'=>$_ShippingServicePriority,'ShipsTo'=>$_ShipsTo,'EstimatedDeliveryMinTime'=>$_EstimatedDeliveryMinTime,'EstimatedDeliveryMaxTime'=>$_EstimatedDeliveryMaxTime,'ImportCharge'=>$_ImportCharge,'any'=>$_any));
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
	 * @return EbayShoppingTypeAmountType
	 */
	public function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * Set ShippingServiceName
	 * @param token ShippingServiceName
	 * @return token
	 */
	public function setShippingServiceName($_ShippingServiceName)
	{
		return ($this->ShippingServiceName = $_ShippingServiceName);
	}
	/**
	 * Get ShippingServiceName
	 * @return token
	 */
	public function getShippingServiceName()
	{
		return $this->ShippingServiceName;
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
	 * @return EbayShoppingTypeAmountType
	 */
	public function getShippingServiceAdditionalCost()
	{
		return $this->ShippingServiceAdditionalCost;
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
	 * @return EbayShoppingTypeAmountType
	 */
	public function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
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
	 * Set ShipsTo
	 * @param string ShipsTo
	 * @return string
	 */
	public function setShipsTo($_ShipsTo)
	{
		return ($this->ShipsTo = $_ShipsTo);
	}
	/**
	 * Get ShipsTo
	 * @return string
	 */
	public function getShipsTo()
	{
		return $this->ShipsTo;
	}
	/**
	 * Set EstimatedDeliveryMinTime
	 * @param dateTime EstimatedDeliveryMinTime
	 * @return dateTime
	 */
	public function setEstimatedDeliveryMinTime($_EstimatedDeliveryMinTime)
	{
		return ($this->EstimatedDeliveryMinTime = $_EstimatedDeliveryMinTime);
	}
	/**
	 * Get EstimatedDeliveryMinTime
	 * @return dateTime
	 */
	public function getEstimatedDeliveryMinTime()
	{
		return $this->EstimatedDeliveryMinTime;
	}
	/**
	 * Set EstimatedDeliveryMaxTime
	 * @param dateTime EstimatedDeliveryMaxTime
	 * @return dateTime
	 */
	public function setEstimatedDeliveryMaxTime($_EstimatedDeliveryMaxTime)
	{
		return ($this->EstimatedDeliveryMaxTime = $_EstimatedDeliveryMaxTime);
	}
	/**
	 * Get EstimatedDeliveryMaxTime
	 * @return dateTime
	 */
	public function getEstimatedDeliveryMaxTime()
	{
		return $this->EstimatedDeliveryMaxTime;
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
	 * @return EbayShoppingTypeAmountType
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