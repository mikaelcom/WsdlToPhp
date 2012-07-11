<?php
/**
 * Class file for EbayTradingTypeProductSuggestionsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSuggestionsType
 * Documentation : Provides a list of products recommended by eBay, which match the item information provided by the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeProductSuggestionsType extends EbayTradingWsdlClass
{
	/**
	 * The ProductSuggestion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains details for one or more individual product suggestions. The product details include the EPID, Title, Stock photo url and whether or not the product is an exact match for the submitted item. This product information can be used to list subsequent items.
	 * @var EbayTradingTypeProductSuggestionType
	 */
	public $ProductSuggestion;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductSuggestionType ProductSuggestion
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductSuggestionsType
	 */
	public function __construct($_ProductSuggestion = null,$_any = null)
	{
		parent::__construct(array('ProductSuggestion'=>$_ProductSuggestion,'any'=>$_any));
	}
	/**
	 * Set ProductSuggestion
	 * @param ProductSuggestionType ProductSuggestion
	 * @return ProductSuggestionType
	 */
	public function setProductSuggestion($_ProductSuggestion)
	{
		return ($this->ProductSuggestion = $_ProductSuggestion);
	}
	/**
	 * Get ProductSuggestion
	 * @return EbayTradingTypeProductSuggestionType
	 */
	public function getProductSuggestion()
	{
		return $this->ProductSuggestion;
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