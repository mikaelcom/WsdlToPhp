<?php
/**
 * Class file for EbayTradingTypeMultiLegShippingServiceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMultiLegShippingServiceType
 * Documentation : This type specifies the shipping service and cost of the domestic or international leg of a Global Exchange shipment. If its fields are returned as part of a <strong>SellerShipmentToLogisticsProvider.ShippingServiceDetails</strong> container, the information applies to the domestic leg of the shipment. If its fields are returned as part of a <strong>LogisticsProviderShipmentToBuyer.ShippingServiceDetails</strong> container, the information applies to the international leg of the shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeMultiLegShippingServiceType extends EbayTradingWsdlClass
{
	/**
	 * The ShippingService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The shipping service specified for the domestic or international leg of a Global Exchange shipment. For the domestic leg, the value of this field can be any available shipping service that ships to the domestic address of the international shipping provider. For the international leg, the value of this field must be InternationalPriorityShipping.
	 * @var token
	 */
	public $ShippingService;
	/**
	 * The TotalShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOuccrs : 1
	 * 	- documentation : The total shipping cost of the domestic or international leg of a Global Exchange shipment. For the international leg, this value includes the import charge payable by the buyer to the international shipping provider.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalShippingCost;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token ShippingService
	 * @param EbayTradingTypeAmountType TotalShippingCost
	 * @param DOMDocument any
	 * @return EbayTradingTypeMultiLegShippingServiceType
	 */
	public function __construct($_ShippingService = null,$_TotalShippingCost = null,$_any = null)
	{
		parent::__construct(array('ShippingService'=>$_ShippingService,'TotalShippingCost'=>$_TotalShippingCost,'any'=>$_any));
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
	 * Set TotalShippingCost
	 * @param AmountType TotalShippingCost
	 * @return AmountType
	 */
	public function setTotalShippingCost($_TotalShippingCost)
	{
		return ($this->TotalShippingCost = $_TotalShippingCost);
	}
	/**
	 * Get TotalShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalShippingCost()
	{
		return $this->TotalShippingCost;
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