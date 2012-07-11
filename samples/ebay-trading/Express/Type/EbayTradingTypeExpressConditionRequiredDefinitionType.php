<?php
/**
 * Class file for EbayTradingTypeExpressConditionRequiredDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExpressConditionRequiredDefinitionType
 * Documentation : For the US and Germany sites, an eBay item must meet a number of eligibility requirements in order to also be included on eBay Express. One requirement is that the item must include the Item Condition attribute (using Item Specifics). Some categories may waive this requirement. Currently, this type defines no special meta-data. (An empty element is returned.)
 * @date 04/07/2012
 */
class EbayTradingTypeExpressConditionRequiredDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeExpressConditionRequiredDefinitionType
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