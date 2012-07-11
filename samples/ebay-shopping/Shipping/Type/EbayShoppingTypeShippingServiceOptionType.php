<?php
/**
 * Class file for EbayShoppingTypeShippingServiceOptionType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeShippingServiceOptionType
 * Documentation : Shipping costs and options related to a domestic shipping service.
 * @date 05/07/2012
 */
class EbayShoppingTypeShippingServiceOptionType extends EbayShoppingWsdlClass
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
	 * 	- documentation : A domestic shipping service offered for shipping the item (for example, UPS Ground). For flat and calculated shipping.
	 * @var token
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The basic shipping cost of the item. <br> <br> <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping).
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of shipping each additional item beyond the first item (flat shipping). For single-item listings, if this is not provided, it is defaulted to zero. For multi-quantity listings, if this is not provided, it is set to the value of (in)ShippingServiceCost (unless the request version is lower than 665, in which case ShippingServiceAdditionalCost is required and is not defaulted). Not applicable to Half.com.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller-preferred presentation order relative to other service options. Valid values: 1 (1st choice), 2 (2nd choice), 3 (3rd choice). For flat and calculated shipping. Not applicable to Half.com.
	 * @var int
	 */
	public $ShippingServicePriority;
	/**
	 * The ExpeditedService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the service is an expedited shipping service. See Enabling Get It Fast. Not applicable to Half.com.
	 * @var boolean
	 */
	public $ExpeditedService;
	/**
	 * The ShippingTimeMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The minimum guaranteed number of business days in which the shipping carrier can ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * @var int
	 */
	public $ShippingTimeMin;
	/**
	 * The ShippingTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum guaranteed number of business days the shipping carrier will take to ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * @var int
	 */
	public $ShippingTimeMax;
	/**
	 * The ShippingSurcharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An additional fee to charge US buyers who ship via UPS to Alaska, Hawaii or Puerto Rico. Can only be assigned a value for Parts and Accessories items on the eBay US and Motors sites. Only returned if set. If some transactions in an order have a surcharge, surcharge is added only for those transactions. Flat rate shipping only. <br> <br> With a request version of 665 or greater, total shipping cost includes any surcharge, and ShippingSurcharge is no longer returned as an individual tag.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingSurcharge;
	/**
	 * The ShipsTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to which the item may be shipped via this particular shipping service. Associated with the shipping service by the seller. Use GeteBayDetails to determine which locations are valid per site. These values are string equivalents of values found in ShippingRegionCodeType and CountryCodeType. Returned with request version 665 or greater, if set via Trading API.
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
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeAmountType ShippingInsuranceCost
	 * @param token ShippingServiceName
	 * @param EbayShoppingTypeAmountType ShippingServiceCost
	 * @param EbayShoppingTypeAmountType ShippingServiceAdditionalCost
	 * @param int ShippingServicePriority
	 * @param boolean ExpeditedService
	 * @param int ShippingTimeMin
	 * @param int ShippingTimeMax
	 * @param EbayShoppingTypeAmountType ShippingSurcharge
	 * @param string ShipsTo
	 * @param dateTime EstimatedDeliveryMinTime
	 * @param dateTime EstimatedDeliveryMaxTime
	 * @param DOMDocument any
	 * @return EbayShoppingTypeShippingServiceOptionType
	 */
	public function __construct($_ShippingInsuranceCost = null,$_ShippingServiceName = null,$_ShippingServiceCost = null,$_ShippingServiceAdditionalCost = null,$_ShippingServicePriority = null,$_ExpeditedService = null,$_ShippingTimeMin = null,$_ShippingTimeMax = null,$_ShippingSurcharge = null,$_ShipsTo = null,$_EstimatedDeliveryMinTime = null,$_EstimatedDeliveryMaxTime = null,$_any = null)
	{
		parent::__construct(array('ShippingInsuranceCost'=>$_ShippingInsuranceCost,'ShippingServiceName'=>$_ShippingServiceName,'ShippingServiceCost'=>$_ShippingServiceCost,'ShippingServiceAdditionalCost'=>$_ShippingServiceAdditionalCost,'ShippingServicePriority'=>$_ShippingServicePriority,'ExpeditedService'=>$_ExpeditedService,'ShippingTimeMin'=>$_ShippingTimeMin,'ShippingTimeMax'=>$_ShippingTimeMax,'ShippingSurcharge'=>$_ShippingSurcharge,'ShipsTo'=>$_ShipsTo,'EstimatedDeliveryMinTime'=>$_EstimatedDeliveryMinTime,'EstimatedDeliveryMaxTime'=>$_EstimatedDeliveryMaxTime,'any'=>$_any));
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
	 * Set ExpeditedService
	 * @param boolean ExpeditedService
	 * @return boolean
	 */
	public function setExpeditedService($_ExpeditedService)
	{
		return ($this->ExpeditedService = $_ExpeditedService);
	}
	/**
	 * Get ExpeditedService
	 * @return boolean
	 */
	public function getExpeditedService()
	{
		return $this->ExpeditedService;
	}
	/**
	 * Set ShippingTimeMin
	 * @param int ShippingTimeMin
	 * @return int
	 */
	public function setShippingTimeMin($_ShippingTimeMin)
	{
		return ($this->ShippingTimeMin = $_ShippingTimeMin);
	}
	/**
	 * Get ShippingTimeMin
	 * @return int
	 */
	public function getShippingTimeMin()
	{
		return $this->ShippingTimeMin;
	}
	/**
	 * Set ShippingTimeMax
	 * @param int ShippingTimeMax
	 * @return int
	 */
	public function setShippingTimeMax($_ShippingTimeMax)
	{
		return ($this->ShippingTimeMax = $_ShippingTimeMax);
	}
	/**
	 * Get ShippingTimeMax
	 * @return int
	 */
	public function getShippingTimeMax()
	{
		return $this->ShippingTimeMax;
	}
	/**
	 * Set ShippingSurcharge
	 * @param AmountType ShippingSurcharge
	 * @return AmountType
	 */
	public function setShippingSurcharge($_ShippingSurcharge)
	{
		return ($this->ShippingSurcharge = $_ShippingSurcharge);
	}
	/**
	 * Get ShippingSurcharge
	 * @return EbayShoppingTypeAmountType
	 */
	public function getShippingSurcharge()
	{
		return $this->ShippingSurcharge;
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