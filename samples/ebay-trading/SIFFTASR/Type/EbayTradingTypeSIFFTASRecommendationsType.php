<?php
/**
 * Class file for EbayTradingTypeSIFFTASRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSIFFTASRecommendationsType
 * Documentation : Reserved for future use..
 * @date 04/07/2012
 */
class EbayTradingTypeSIFFTASRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The AttributeSetArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
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
	 * @return EbayTradingTypeSIFFTASRecommendationsType
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