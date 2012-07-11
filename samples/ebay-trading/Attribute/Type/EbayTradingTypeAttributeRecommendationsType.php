<?php
/**
 * Class file for EbayTradingTypeAttributeRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAttributeRecommendationsType
 * Documentation : Item Specifics data returned from the Suggested Attributes engine.
 * @date 04/07/2012
 */
class EbayTradingTypeAttributeRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The AttributeSetArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of attribute sets containing recommended attributes and values. Returned from GetItemRecommendations when the Suggested Attributes engine is used See the eBay Web Services guide for additional details.
	 * @var EbayTradingTypeAttributeSetArrayType
	 */
	public $AttributeSetArray;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAttributeSetArrayType AttributeSetArray
	 * @param DOMDocument any
	 * @return EbayTradingTypeAttributeRecommendationsType
	 */
	public function __construct($_AttributeSetArray = null,$_any = null)
	{
		parent::__construct(array('AttributeSetArray'=>$_AttributeSetArray,'any'=>$_any));
	}
	/**
	 * Set AttributeSetArray
	 * @param AttributeSetArrayType AttributeSetArray
	 * @return AttributeSetArrayType
	 */
	public function setAttributeSetArray($_AttributeSetArray)
	{
		return ($this->AttributeSetArray = $_AttributeSetArray);
	}
	/**
	 * Get AttributeSetArray
	 * @return EbayTradingTypeAttributeSetArrayType
	 */
	public function getAttributeSetArray()
	{
		return $this->AttributeSetArray;
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