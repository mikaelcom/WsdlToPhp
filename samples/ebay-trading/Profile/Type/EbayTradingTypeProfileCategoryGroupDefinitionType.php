<?php
/**
 * Class file for EbayTradingTypeProfileCategoryGroupDefinitionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProfileCategoryGroupDefinitionType
 * Documentation : Type defining the <b>PaymentProfileCategoryGroup</b>, <b> ReturnPolicyProfileCategoryGroup</b>, and <b>ShippingProfileCategoryGroup</b> fields, which are all returned in the <b>GetCategoryFeature</b> response if these Business Policies profile types apply to the category. Each of these fields is returned as an empty element.
 * @date 04/07/2012
 */
class EbayTradingTypeProfileCategoryGroupDefinitionType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @return EbayTradingTypeProfileCategoryGroupDefinitionType
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