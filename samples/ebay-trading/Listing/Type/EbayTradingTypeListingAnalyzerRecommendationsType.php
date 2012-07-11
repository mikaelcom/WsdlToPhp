<?php
/**
 * Class file for EbayTradingTypeListingAnalyzerRecommendationsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingAnalyzerRecommendationsType
 * Documentation : Contains results returned from the Listing Analyzer recommendation engine.
 * @date 04/07/2012
 */
class EbayTradingTypeListingAnalyzerRecommendationsType extends EbayTradingWsdlClass
{
	/**
	 * The ListingTipArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A collection of tips returned from the Listing Analyzer recommendation engine.
	 * @var EbayTradingTypeListingTipArrayType
	 */
	public $ListingTipArray;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingTipArrayType ListingTipArray
	 * @param DOMDocument any
	 * @return EbayTradingTypeListingAnalyzerRecommendationsType
	 */
	public function __construct($_ListingTipArray = null,$_any = null)
	{
		parent::__construct(array('ListingTipArray'=>$_ListingTipArray,'any'=>$_any));
	}
	/**
	 * Set ListingTipArray
	 * @param ListingTipArrayType ListingTipArray
	 * @return ListingTipArrayType
	 */
	public function setListingTipArray($_ListingTipArray)
	{
		return ($this->ListingTipArray = $_ListingTipArray);
	}
	/**
	 * Get ListingTipArray
	 * @return EbayTradingTypeListingTipArrayType
	 */
	public function getListingTipArray()
	{
		return $this->ListingTipArray;
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