<?php
/**
 * Class file for EbayTradingTypeMotorsLocalMarketEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMotorsLocalMarketEnabledDefinitionType
 * Documentation : Defines the Motors Local Market feature. If the Motors Local Market field is present, the corresponding feature applies to the Motors Local Market category. The field is returned as an empty element (e.g., a boolean value is not returned).
 * @date 04/07/2012
 */
class EbayTradingTypeMotorsLocalMarketEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeMotorsLocalMarketEnabledDefinitionType
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