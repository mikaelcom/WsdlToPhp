<?php
/**
 * Class file for EbayTradingTypeSellingManagerSearchType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSearchType
 * Documentation : For searches of Selling Manager listings, specifies search type, such as ProductID or BuyerUserID, and search value.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSearchType extends EbayTradingWsdlClass
{
	/**
	 * The SearchType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the type of value, such as ProductID or BuyerUserID, for the search.
	 * @var EbayTradingTypeSellingManagerSearchTypeCodeType
	 */
	public $SearchType;
	/**
	 * The SearchValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : String identifying the value, matching the SearchType, that the search should return listings for. For example, when ProductID is specified as the SearchType, SearchValue must be a valid ProductID.
	 * @var string
	 */
	public $SearchValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerSearchTypeCodeType SearchType
	 * @param string SearchValue
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerSearchType
	 */
	public function __construct($_SearchType = null,$_SearchValue = null,$_any = null)
	{
		parent::__construct(array('SearchType'=>$_SearchType,'SearchValue'=>$_SearchValue,'any'=>$_any));
	}
	/**
	 * Set SearchType
	 * @param SellingManagerSearchTypeCodeType SearchType
	 * @return SellingManagerSearchTypeCodeType
	 */
	public function setSearchType($_SearchType)
	{
		return ($this->SearchType = EbayTradingTypeSellingManagerSearchTypeCodeType::valueIsValid($_SearchType)?$_SearchType:null);
	}
	/**
	 * Get SearchType
	 * @return EbayTradingTypeSellingManagerSearchTypeCodeType
	 */
	public function getSearchType()
	{
		return $this->SearchType;
	}
	/**
	 * Set SearchValue
	 * @param string SearchValue
	 * @return string
	 */
	public function setSearchValue($_SearchValue)
	{
		return ($this->SearchValue = $_SearchValue);
	}
	/**
	 * Get SearchValue
	 * @return string
	 */
	public function getSearchValue()
	{
		return $this->SearchValue;
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