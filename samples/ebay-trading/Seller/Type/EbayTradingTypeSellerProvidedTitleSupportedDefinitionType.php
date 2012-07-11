<?php
/**
 * Class file for EbayTradingTypeSellerProvidedTitleSupportedDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerProvidedTitleSupportedDefinitionType
 * Documentation : If present, the site defines category settings for whether the seller can provide their own title for a US or CA eBay Motors listing.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerProvidedTitleSupportedDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerProvidedTitleSupportedDefinitionType
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