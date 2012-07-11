<?php
/**
 * Class file for EbayTradingTypeUnitOfMeasurementType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnitOfMeasurementType
 * Documentation : Provides a mapping between suggested unit of measure strings and other, less popular strings.
 * @date 04/07/2012
 */
class EbayTradingTypeUnitOfMeasurementType extends EbayTradingWsdlClass
{
	/**
	 * The AlternateText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A synonym for the unit of measure (such as a fully spelled out name like "inches" instead of the standard abbreviation). This can be used to help a seller map unit names they use in their own catalog to unit names that are more popular on eBay.
	 * @var string
	 */
	public $AlternateText;
	/**
	 * The SuggestedText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The preferred way to specify a given unit of measure name, such as "in." (instead of "inches" or the " (double quote) symbol).
	 * @var string
	 */
	public $SuggestedText;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string AlternateText
	 * @param string SuggestedText
	 * @param DOMDocument any
	 * @return EbayTradingTypeUnitOfMeasurementType
	 */
	public function __construct($_AlternateText = null,$_SuggestedText = null,$_any = null)
	{
		parent::__construct(array('AlternateText'=>$_AlternateText,'SuggestedText'=>$_SuggestedText,'any'=>$_any));
	}
	/**
	 * Set AlternateText
	 * @param string AlternateText
	 * @return string
	 */
	public function setAlternateText($_AlternateText)
	{
		return ($this->AlternateText = $_AlternateText);
	}
	/**
	 * Get AlternateText
	 * @return string
	 */
	public function getAlternateText()
	{
		return $this->AlternateText;
	}
	/**
	 * Set SuggestedText
	 * @param string SuggestedText
	 * @return string
	 */
	public function setSuggestedText($_SuggestedText)
	{
		return ($this->SuggestedText = $_SuggestedText);
	}
	/**
	 * Get SuggestedText
	 * @return string
	 */
	public function getSuggestedText()
	{
		return $this->SuggestedText;
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