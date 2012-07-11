<?php
/**
 * Class file for EbayTradingTypeShipmentLineItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipmentLineItemType
 * Documentation : This type provides information about one or more order line items in a Global Exchange package. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeShipmentLineItemType extends EbayTradingWsdlClass
{
	/**
	 * The LineItem
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains information about one order line item in a Global Exchange package. The package can contain multiple units of a given order line item, and multiple order line items.
	 * @var EbayTradingTypeLineItemType
	 */
	public $LineItem;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeLineItemType LineItem
	 * @param DOMDocument any
	 * @return EbayTradingTypeShipmentLineItemType
	 */
	public function __construct($_LineItem,$_any = null)
	{
		parent::__construct(array('LineItem'=>$_LineItem,'any'=>$_any));
	}
	/**
	 * Set LineItem
	 * @param LineItemType LineItem
	 * @return LineItemType
	 */
	public function setLineItem($_LineItem)
	{
		return ($this->LineItem = $_LineItem);
	}
	/**
	 * Get LineItem
	 * @return EbayTradingTypeLineItemType
	 */
	public function getLineItem()
	{
		return $this->LineItem;
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