<?php
/**
 * Class file for EbayTradingTypePaymentOptionsGroupEnabledDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaymentOptionsGroupEnabledDefinitionType
 * Documentation : The PaymentOptionsGroupEnabled field is returned in the GetCategoryFeature response if the Payment Options Group feature applies to the category. The field is returned as an empty element. The Payment Options Group feature is only applicable to DE and AT listings.
 * @date 04/07/2012
 */
class EbayTradingTypePaymentOptionsGroupEnabledDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypePaymentOptionsGroupEnabledDefinitionType
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