<?php
/**
 * Class file for EbayTradingTypeShipmentTrackingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipmentTrackingDetailsType
 * Documentation : This type details the shipping carrier and shipment tracking number associated with a package shipment. It also contains information about the line items shipped through the Global Shipping program.
 * @date 04/07/2012
 */
class EbayTradingTypeShipmentTrackingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingCarrierUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Required if <b>ShipmentTrackingNumber</b> is supplied. Name of the shipping carrier used to ship the item. Although this value can be any value, since it is not checked by eBay, commonly used shipping carriers can be found by calling GeteBayDetails and examining the returned ShippingCarrierCodeTypes. <br><br> For those using UPS Mail Innovations, supply the value UPS-MI for UPS Mail Innnovations. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking. <br><br> For those using FedEx SmartPost in a CompleteSale callsupply the value FedEx. Buyers will subsequently be sent to the appropriate web site for tracking status. (The buyer is sent to the UPS Mail Innovations website if UPS-MI is specified, or to the FedEx website if FedEx is specified.) Returned only if set. Returned for Half.com as well.
	 * @var string
	 */
	public $ShippingCarrierUsed;
	/**
	 * The ShipmentTrackingNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Required if <b>ShippingCarrierUsed</b> is supplied. The tracking number assigned by the shipping carrier to the item shipment. The format of the tracking number must be consistent with the format used by the specified shipping carrier (ShippingCarrierUsed). Typically, you should avoid spaces and hyphens. Returned only if set. Returned for Half.com as well.
	 * @var string
	 */
	public $ShipmentTrackingNumber;
	/**
	 * The ShipmentLineItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about one or more order line items in a Global Exchange package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is GlobalShipping_MultiCarrier. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeShipmentLineItemType
	 */
	public $ShipmentLineItem;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ShippingCarrierUsed
	 * @param string ShipmentTrackingNumber
	 * @param EbayTradingTypeShipmentLineItemType ShipmentLineItem
	 * @param DOMDocument any
	 * @return EbayTradingTypeShipmentTrackingDetailsType
	 */
	public function __construct($_ShippingCarrierUsed = null,$_ShipmentTrackingNumber = null,$_ShipmentLineItem = null,$_any = null)
	{
		parent::__construct(array('ShippingCarrierUsed'=>$_ShippingCarrierUsed,'ShipmentTrackingNumber'=>$_ShipmentTrackingNumber,'ShipmentLineItem'=>$_ShipmentLineItem,'any'=>$_any));
	}
	/**
	 * Set ShippingCarrierUsed
	 * @param string ShippingCarrierUsed
	 * @return string
	 */
	public function setShippingCarrierUsed($_ShippingCarrierUsed)
	{
		return ($this->ShippingCarrierUsed = $_ShippingCarrierUsed);
	}
	/**
	 * Get ShippingCarrierUsed
	 * @return string
	 */
	public function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}
	/**
	 * Set ShipmentTrackingNumber
	 * @param string ShipmentTrackingNumber
	 * @return string
	 */
	public function setShipmentTrackingNumber($_ShipmentTrackingNumber)
	{
		return ($this->ShipmentTrackingNumber = $_ShipmentTrackingNumber);
	}
	/**
	 * Get ShipmentTrackingNumber
	 * @return string
	 */
	public function getShipmentTrackingNumber()
	{
		return $this->ShipmentTrackingNumber;
	}
	/**
	 * Set ShipmentLineItem
	 * @param ShipmentLineItemType ShipmentLineItem
	 * @return ShipmentLineItemType
	 */
	public function setShipmentLineItem($_ShipmentLineItem)
	{
		return ($this->ShipmentLineItem = $_ShipmentLineItem);
	}
	/**
	 * Get ShipmentLineItem
	 * @return EbayTradingTypeShipmentLineItemType
	 */
	public function getShipmentLineItem()
	{
		return $this->ShipmentLineItem;
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