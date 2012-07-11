<?php
/**
 * Class file for EbayFindTypeShippingInfo
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeShippingInfo
 * Documentation : Container holding the item's shipping details.
 * @date 04/07/2012
 */
class EbayFindTypeShippingInfo extends EbayFindWsdlClass
{
	/**
	 * The shippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The basic shipping cost of the item. This reflects the domestic shipping cost or the international shipping costs, depending on which applies (that is, whether the bidder/buyer is in the same country as the listing site of the item).
	 * @var EbayFindTypeAmount
	 */
	public $shippingServiceCost;
	/**
	 * The shippingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping method that was used for determining the cost of shipping. For example: flat rate, calculated, or free. The seller specifies the available shipping services when they list the item. <dl> <dt> <strong>shippingType values:</strong> </dt> <dt> Calculated </dt> <dd> The calculated shipping model: The posted cost of shipping is based on the buyer-selected shipping service, chosen by the buyer from the different shipping services offered by the seller. The shipping costs are calculated by eBay and the shipping carrier, based on the buyer's address. Any packaging and handling costs established by the seller are automatically rolled into the total. </dd> <dt> CalculatedDomesticFlatInternational </dt> <dd> The seller specified one or more calculated domestic shipping services and one or more flat international shipping services. </dd> <dt> Flat </dt> <dd> The flat-rate shipping model: The seller establishes the cost of shipping and any shipping insurance, regardless of what any buyer-selected shipping service might charge the seller. </dd> <dt> FlatDomesticCalculatedInternational </dt> <dd> The seller specified one or more flat domestic shipping services and one or more calculated international shipping services. </dd> <dt> Free </dt> <dd> Free is used when the seller has declared that shipping is free for the buyer. </dd> <dt> FreePickup </dt> <dd> No shipping available, the buyer must pick up the item from the seller. </dd> <dt> Freight </dt> <dd> The freight shipping model: the cost of shipping is determined by a third party, FreightQuote.com, based on the buyer's address (postal code). </dd> <dt> FreightFlat </dt> <dd> The flat rate shipping model: the seller establishes the cost of freight shipping and freight insurance, regardless of what any buyer-selected shipping service might charge the seller. </dd> <dt> NotSpecified </dt> <dd> The seller did not specify the shipping type. </dd> </dl>
	 * @var token
	 */
	public $shippingType;
	/**
	 * The shipToLocations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An international location or region to which the seller is willing to ship the item. Only returned when the seller has specifically identified locations where she is willing to ship the given item. specified.
	 * @var string
	 */
	public $shipToLocations;
	/**
	 * The expeditedShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is returned set to true if expedited shipping is available for the item.
	 * @var boolean
	 */
	public $expeditedShipping;
	/**
	 * The oneDayShippingAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This is returned set to true if one-day shipping is available for the item.
	 * @var boolean
	 */
	public $oneDayShippingAvailable;
	/**
	 * The handlingTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of days it will take the seller to ship this item.
	 * @var int
	 */
	public $handlingTime;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayFindTypeAmount shippingServiceCost
	 * @param token shippingType
	 * @param string shipToLocations
	 * @param boolean expeditedShipping
	 * @param boolean oneDayShippingAvailable
	 * @param int handlingTime
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeShippingInfo
	 */
	public function __construct($_shippingServiceCost = null,$_shippingType = null,$_shipToLocations = null,$_expeditedShipping = null,$_oneDayShippingAvailable = null,$_handlingTime = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('shippingServiceCost'=>$_shippingServiceCost,'shippingType'=>$_shippingType,'shipToLocations'=>$_shipToLocations,'expeditedShipping'=>$_expeditedShipping,'oneDayShippingAvailable'=>$_oneDayShippingAvailable,'handlingTime'=>$_handlingTime,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set shippingServiceCost
	 * @param Amount shippingServiceCost
	 * @return Amount
	 */
	public function setShippingServiceCost($_shippingServiceCost)
	{
		return ($this->shippingServiceCost = $_shippingServiceCost);
	}
	/**
	 * Get shippingServiceCost
	 * @return EbayFindTypeAmount
	 */
	public function getShippingServiceCost()
	{
		return $this->shippingServiceCost;
	}
	/**
	 * Set shippingType
	 * @param token shippingType
	 * @return token
	 */
	public function setShippingType($_shippingType)
	{
		return ($this->shippingType = $_shippingType);
	}
	/**
	 * Get shippingType
	 * @return token
	 */
	public function getShippingType()
	{
		return $this->shippingType;
	}
	/**
	 * Set shipToLocations
	 * @param string shipToLocations
	 * @return string
	 */
	public function setShipToLocations($_shipToLocations)
	{
		return ($this->shipToLocations = $_shipToLocations);
	}
	/**
	 * Get shipToLocations
	 * @return string
	 */
	public function getShipToLocations()
	{
		return $this->shipToLocations;
	}
	/**
	 * Set expeditedShipping
	 * @param boolean expeditedShipping
	 * @return boolean
	 */
	public function setExpeditedShipping($_expeditedShipping)
	{
		return ($this->expeditedShipping = $_expeditedShipping);
	}
	/**
	 * Get expeditedShipping
	 * @return boolean
	 */
	public function getExpeditedShipping()
	{
		return $this->expeditedShipping;
	}
	/**
	 * Set oneDayShippingAvailable
	 * @param boolean oneDayShippingAvailable
	 * @return boolean
	 */
	public function setOneDayShippingAvailable($_oneDayShippingAvailable)
	{
		return ($this->oneDayShippingAvailable = $_oneDayShippingAvailable);
	}
	/**
	 * Get oneDayShippingAvailable
	 * @return boolean
	 */
	public function getOneDayShippingAvailable()
	{
		return $this->oneDayShippingAvailable;
	}
	/**
	 * Set handlingTime
	 * @param int handlingTime
	 * @return int
	 */
	public function setHandlingTime($_handlingTime)
	{
		return ($this->handlingTime = $_handlingTime);
	}
	/**
	 * Get handlingTime
	 * @return int
	 */
	public function getHandlingTime()
	{
		return $this->handlingTime;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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