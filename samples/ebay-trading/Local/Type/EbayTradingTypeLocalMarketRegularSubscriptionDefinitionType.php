<?php
/**
 * Class file for EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType
 * Documentation : Defines the LocalMarketRegularSubscription feature. If this field is present, the corresponding feature applies to the category. The field is returned as an empty element (i.e., a boolean value is not returned). A subscription for Local Market for Vehicles will be returned by GetUser if a dealer has subscribed to any of the following Local Market Regular sub-types: Vehicles Regular Six Months, Vehicles Regular Special Promotion, Vehicles Regular Multistore Level S, Vehicles Regular Multistore Level M, or Vehicles Regular Multistore Level L. Each of these sub-types has a separate discount and billing cycle.
 * @date 04/07/2012
 */
class EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeLocalMarketRegularSubscriptionDefinitionType
	 */
	public function __construct($_any = null)
	{
		parent::__construct(array('any'=>$_any));
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