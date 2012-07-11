<?php
/**
 * Class file for EbayTradingTypeVINSupportedDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVINSupportedDefinitionType
 * Documentation : If present, the site defines category settings for when the seller can provide a Vehicle Identification Number (VIN) for US, CA, and CAFR eBay Motors sites. VIN is required for cars and trucks from model year 1981 and later. (The US developed national standards for VIN values as of 1981.)
 * @date 04/07/2012
 */
class EbayTradingTypeVINSupportedDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeVINSupportedDefinitionType
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