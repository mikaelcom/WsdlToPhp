<?php
/**
 * Class file for EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType
 * Documentation : Indicates whether automatic decline of best offers is allowed for this category. Returned only if this category overrides the site default. Added for Local market users.
 * @date 04/07/2012
 */
class EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeLocalMarketAutoDeclineEnabledDefinitionType
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