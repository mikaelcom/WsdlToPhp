<?php
/**
 * Class file for EbayTradingTypeShippingServiceOptionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingServiceOptionsType
 * Documentation : Container consisting of shipping costs and other details related to a domestic shipping service. An exception to the domestic shipping service rule is seen in the ShippingServiceSelected container returned under the Order and Transaction containers in order and order line item retrieval calls such as GetOrders or GetItemTransactions. In this scenario, the SelectedShippingService container consists of either domestic or international shipping service data, based on the selected service according to the buyer's shipping address. <br><br> If one or more international shipping services are provided, the seller must specify at least one domestic shipping service as well.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingServiceOptionsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingInsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The insurance cost associated with shipping a single item with this shipping service. Exception: for GetItemShipping, this is proportional to QuantitySold. If the item has not yet been sold, insurance information cannot be calculated and the value is 0.00. For calculated shipping only. Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingInsuranceCost;
	/**
	 * The ShippingService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A shipping service option being offered by the seller to ship an item to a buyer. For a list of valid ShippingService values, call GeteBayDetails with DetailName set to ShippingServiceDetails. The ShippingServiceDetails.ValidForSellingFlow flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br><br> For flat and calculated shipping. Also applicable to Half.com (for GetOrders). <br><br> If there are two or more services and one is "pickup", "pickup" must not be specified as the first service.
	 * @var token
	 */
	public $ShippingService;
	/**
	 * The ShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The meaning of this element depends on the call and on whether flat or calculated shipping has been selected. (For example, it could be the cost to ship a single item, the cost to ship all items, or the cost to ship just the first of many items, with ShippingServiceAdditionalCost accounting for the rest.) When returned by GetItemShipping, it includes the packaging and handling cost. For flat and calculated shipping. <br> <br> If a shipping service has been specified (even LocalPickup), GetItem returns the shipping service cost, even if the cost is zero. Otherwise, cost is not returned. <br> <br> If this is for calculated shipping for a listing that has not yet ended, note that the cost cannot be determined until the listing has ended and the buyer has specified a postal code. <br> <br> For GetItemShipping, promotional shipping savings is reflected in the cost, if applicable. If the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost. The shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services. If the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list. (The LOWEST shipping service cost is always presented first, regardless of whether there is promotional shipping.) <br> <br> Also applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The ShippingServiceAdditionalCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of shipping each additional item beyond the first item. For input, this is required if the listing is for multiple items. For single-item listings, it should be zero (or is defaulted to zero if not provided). For flat shipping only. Not applicable to Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingServiceAdditionalCost;
	/**
	 * The ShippingServicePriority
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value controls the order (relative to other shipping services) in which the corresponding ShippingService will appear in the View Item and Checkout page. Sellers can specify up to four domestic shipping services (with four ShippingServiceOptions containers), so valid values are 1, 2, 3, and 4. A shipping service with a ShippingServicePriority value of 1 appears at the top. Conversely, a shipping service with a ShippingServicePriority value of 4 appears at the bottom of a list of four shipping service options. <br><br> This field is applicable to Flat and Calculated shipping. This field is not applicable to Half.com listings.
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
	 * 	- documentation : The minimum guaranteed number of days in which the shipping carrier can ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * @var int
	 */
	public $ShippingTimeMin;
	/**
	 * The ShippingTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum guaranteed number of days the shipping carrier will take to ship an item (not including the time it takes the seller to deliver the item to the shipping carrier). See Enabling Get It Fast. Not applicable to Half.com.
	 * @var int
	 */
	public $ShippingTimeMax;
	/**
	 * The ShippingSurcharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An additional fee to charge US buyers who have the item shipped via UPS or FedEx to Alaska, Hawaii or Puerto Rico. Can only be assigned a value for the eBay US site and for items in the Parts and Accessories category of the eBay Motors site. Only returned if set. If some line items in an order have a surcharge, surcharge is added only for those line items. Flat rate shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingSurcharge;
	/**
	 * The FreeShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A seller offers free shipping by setting FreeShipping to true. This free shipping applies only to the first specified domestic shipping service. (It is ignored if set for any other shipping service.) If the seller has required shipping insurance as part of shipping (the seller set InsuranceOption to Required) and then the seller specified FreeShipping, eBay sets the insurance cost to 0.00. However, if the seller made shipping insurance optional, eBay preserves the cost of shipping insurance; it is up to the buyer whether to buy shipping insurance, regardless of whether the seller specified FreeShipping.
	 * @var boolean
	 */
	public $FreeShipping;
	/**
	 * The LocalPickup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The LocalPickup flag is used by the GetMyEbayBuying and GetMyEbaySelling calls to indicate whether the buyer has selected local pickup as the shipping option or the seller has specified local pickup as the first shipping option. The LocalPickup flag can also be used with other fields to indicate if there is no fee for local pickup. For example, if the LocalPickup flag is used with the ShippingServiceOptions and ShippingServiceCost fields, the seller can indicate that local pickup is an available option and that no is fee charged. This is the equivalent of free shipping.
	 * @var boolean
	 */
	public $LocalPickup;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType ShippingInsuranceCost
	 * @param token ShippingService
	 * @param EbayTradingTypeAmountType ShippingServiceCost
	 * @param EbayTradingTypeAmountType ShippingServiceAdditionalCost
	 * @param int ShippingServicePriority
	 * @param boolean ExpeditedService
	 * @param int ShippingTimeMin
	 * @param int ShippingTimeMax
	 * @param EbayTradingTypeAmountType ShippingSurcharge
	 * @param boolean FreeShipping
	 * @param boolean LocalPickup
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingServiceOptionsType
	 */
	public function __construct($_ShippingInsuranceCost = null,$_ShippingService = null,$_ShippingServiceCost = null,$_ShippingServiceAdditionalCost = null,$_ShippingServicePriority = null,$_ExpeditedService = null,$_ShippingTimeMin = null,$_ShippingTimeMax = null,$_ShippingSurcharge = null,$_FreeShipping = null,$_LocalPickup = null,$_any = null)
	{
		parent::__construct(array('ShippingInsuranceCost'=>$_ShippingInsuranceCost,'ShippingService'=>$_ShippingService,'ShippingServiceCost'=>$_ShippingServiceCost,'ShippingServiceAdditionalCost'=>$_ShippingServiceAdditionalCost,'ShippingServicePriority'=>$_ShippingServicePriority,'ExpeditedService'=>$_ExpeditedService,'ShippingTimeMin'=>$_ShippingTimeMin,'ShippingTimeMax'=>$_ShippingTimeMax,'ShippingSurcharge'=>$_ShippingSurcharge,'FreeShipping'=>$_FreeShipping,'LocalPickup'=>$_LocalPickup,'any'=>$_any));
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
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingSurcharge()
	{
		return $this->ShippingSurcharge;
	}
	/**
	 * Set FreeShipping
	 * @param boolean FreeShipping
	 * @return boolean
	 */
	public function setFreeShipping($_FreeShipping)
	{
		return ($this->FreeShipping = $_FreeShipping);
	}
	/**
	 * Get FreeShipping
	 * @return boolean
	 */
	public function getFreeShipping()
	{
		return $this->FreeShipping;
	}
	/**
	 * Set LocalPickup
	 * @param boolean LocalPickup
	 * @return boolean
	 */
	public function setLocalPickup($_LocalPickup)
	{
		return ($this->LocalPickup = $_LocalPickup);
	}
	/**
	 * Get LocalPickup
	 * @return boolean
	 */
	public function getLocalPickup()
	{
		return $this->LocalPickup;
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