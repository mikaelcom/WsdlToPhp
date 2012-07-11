<?php
/**
 * Class file for EbayTradingTypeMultiLegShipmentType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMultiLegShipmentType
 * Documentation : This type provides information about the shipping service, cost, address, and delivery estimates for either the domestic leg or the international leg of a Global Exchange shipment. If its fields are returned as part of a <strong>SellerShipmentToLogisticsProvider</strong> container, the information applies to the domestic leg of the shipment. If its fields are returned as part of a <strong>LogisticsProviderShipmentToBuyer</strong> container, the information applies to the international leg of the shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeMultiLegShipmentType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingServiceDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains information about the shipping service and cost of the domestic or international leg of a Global Exchange shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeMultiLegShippingServiceType
	 */
	public $ShippingServiceDetails;
	/**
	 * The ShipToAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains shipping address information for the domestic or international leg of a Global Exchange shipment. This container includes the ReferenceID field, which uniquely identifies the order to the international shipping provider.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShipToAddress;
	/**
	 * The ShippingTimeMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The minimum number of days that the shipping carrier will take to ship an item for the domestic or international leg of a Global Exchange shipment (not including the time it takes the seller to deliver the item to the domestic shipping carrier).
	 * @var int
	 */
	public $ShippingTimeMin;
	/**
	 * The ShippingTimeMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The maximum guaranteed number of days that the shipping carrier will take to ship an item for the domestic or international leg of a Global Exchange shipment (not including the time it takes the seller to deliver the item to the domestic shipping carrier).
	 * @var int
	 */
	public $ShippingTimeMax;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMultiLegShippingServiceType ShippingServiceDetails
	 * @param EbayTradingTypeAddressType ShipToAddress
	 * @param int ShippingTimeMin
	 * @param int ShippingTimeMax
	 * @param DOMDocument any
	 * @return EbayTradingTypeMultiLegShipmentType
	 */
	public function __construct($_ShippingServiceDetails = null,$_ShipToAddress = null,$_ShippingTimeMin = null,$_ShippingTimeMax = null,$_any = null)
	{
		parent::__construct(array('ShippingServiceDetails'=>$_ShippingServiceDetails,'ShipToAddress'=>$_ShipToAddress,'ShippingTimeMin'=>$_ShippingTimeMin,'ShippingTimeMax'=>$_ShippingTimeMax,'any'=>$_any));
	}
	/**
	 * Set ShippingServiceDetails
	 * @param MultiLegShippingServiceType ShippingServiceDetails
	 * @return MultiLegShippingServiceType
	 */
	public function setShippingServiceDetails($_ShippingServiceDetails)
	{
		return ($this->ShippingServiceDetails = $_ShippingServiceDetails);
	}
	/**
	 * Get ShippingServiceDetails
	 * @return EbayTradingTypeMultiLegShippingServiceType
	 */
	public function getShippingServiceDetails()
	{
		return $this->ShippingServiceDetails;
	}
	/**
	 * Set ShipToAddress
	 * @param AddressType ShipToAddress
	 * @return AddressType
	 */
	public function setShipToAddress($_ShipToAddress)
	{
		return ($this->ShipToAddress = $_ShipToAddress);
	}
	/**
	 * Get ShipToAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getShipToAddress()
	{
		return $this->ShipToAddress;
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