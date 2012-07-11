<?php
/**
 * Class file for EbayTradingTypeSuggestedCategoryArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSuggestedCategoryArrayType
 * Documentation : Contains an array of categories that contain listings with specified keywords in their titles or descriptions. The array can contain up to 10 categories.
 * @date 04/07/2012
 */
class EbayTradingTypeSuggestedCategoryArrayType extends EbayTradingWsdlClass
{
	/**
	 * The SuggestedCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Describes a category that contains listings that match specified keywords in the query. Returned if a category matches the query.
	 * @var EbayTradingTypeSuggestedCategoryType
	 */
	public $SuggestedCategory;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSuggestedCategoryType SuggestedCategory
	 * @param DOMDocument any
	 * @return EbayTradingTypeSuggestedCategoryArrayType
	 */
	public function __construct($_SuggestedCategory = null,$_any = null)
	{
		parent::__construct(array('SuggestedCategory'=>$_SuggestedCategory,'any'=>$_any));
	}
	/**
	 * Set SuggestedCategory
	 * @param SuggestedCategoryType SuggestedCategory
	 * @return SuggestedCategoryType
	 */
	public function setSuggestedCategory($_SuggestedCategory)
	{
		return ($this->SuggestedCategory = $_SuggestedCategory);
	}
	/**
	 * Get SuggestedCategory
	 * @return EbayTradingTypeSuggestedCategoryType
	 */
	public function getSuggestedCategory()
	{
		return $this->SuggestedCategory;
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