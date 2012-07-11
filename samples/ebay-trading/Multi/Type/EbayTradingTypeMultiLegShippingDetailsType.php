<?php
/**
 * Class file for EbayTradingTypeMultiLegShippingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMultiLegShippingDetailsType
 * Documentation : This type splits the information about a Global Exchange shipment into separate containers for the domestic and international legs of the shipment. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeMultiLegShippingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The SellerShipmentToLogisticsProvider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Contains information about the domestic leg of a Global Exchange shipment, including the seller-selected shipping service, the domestic shipping cost, the domestic address of the international shipping provider, and the estimated shipping time range. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeMultiLegShipmentType
	 */
	public $SellerShipmentToLogisticsProvider;
	/**
	 * The LogisticsProviderShipmentToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOuccrs : 1
	 * 	- documentation : Contains information about the international leg of a Global Exchange shipment, including the shipping service, the international shipping cost, the buyer's shipping address, and the estimated shipping time range. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeMultiLegShipmentType
	 */
	public $LogisticsProviderShipmentToBuyer;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeMultiLegShipmentType SellerShipmentToLogisticsProvider
	 * @param EbayTradingTypeMultiLegShipmentType LogisticsProviderShipmentToBuyer
	 * @param DOMDocument any
	 * @return EbayTradingTypeMultiLegShippingDetailsType
	 */
	public function __construct($_SellerShipmentToLogisticsProvider = null,$_LogisticsProviderShipmentToBuyer = null,$_any = null)
	{
		parent::__construct(array('SellerShipmentToLogisticsProvider'=>$_SellerShipmentToLogisticsProvider,'LogisticsProviderShipmentToBuyer'=>$_LogisticsProviderShipmentToBuyer,'any'=>$_any));
	}
	/**
	 * Set SellerShipmentToLogisticsProvider
	 * @param MultiLegShipmentType SellerShipmentToLogisticsProvider
	 * @return MultiLegShipmentType
	 */
	public function setSellerShipmentToLogisticsProvider($_SellerShipmentToLogisticsProvider)
	{
		return ($this->SellerShipmentToLogisticsProvider = $_SellerShipmentToLogisticsProvider);
	}
	/**
	 * Get SellerShipmentToLogisticsProvider
	 * @return EbayTradingTypeMultiLegShipmentType
	 */
	public function getSellerShipmentToLogisticsProvider()
	{
		return $this->SellerShipmentToLogisticsProvider;
	}
	/**
	 * Set LogisticsProviderShipmentToBuyer
	 * @param MultiLegShipmentType LogisticsProviderShipmentToBuyer
	 * @return MultiLegShipmentType
	 */
	public function setLogisticsProviderShipmentToBuyer($_LogisticsProviderShipmentToBuyer)
	{
		return ($this->LogisticsProviderShipmentToBuyer = $_LogisticsProviderShipmentToBuyer);
	}
	/**
	 * Get LogisticsProviderShipmentToBuyer
	 * @return EbayTradingTypeMultiLegShipmentType
	 */
	public function getLogisticsProviderShipmentToBuyer()
	{
		return $this->LogisticsProviderShipmentToBuyer;
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