<?php
/**
 * Class file for EbayTradingTypeProductSearchPageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductSearchPageType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeProductSearchPageType extends EbayTradingWsdlClass
{
	/**
	 * The SearchCharacteristicsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A list of attributes that describe the choice of search criteria for the specified characteristic set. The order in which the criteria are returned is not significant and may vary for different requests. See the eBay Web Services guide for details about how to use this data as input to GetProductSearchResults.
	 * @var EbayTradingTypeCharacteristicsSetType
	 */
	public $SearchCharacteristicsSet;
	/**
	 * The SearchType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Ignore this field. GetProductSearchPage only retrieves criteria for single-attribute searches. Use GetProductFinder for valid multi-attribute search criteria.
	 * @var EbayTradingTypeCharacteristicsSearchCodeType
	 */
	public $SearchType;
	/**
	 * The SortCharacteristics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A product aspect or feature that can be used as a key for sorting catalog search results. This does not necessarily match a searchable attribute. For example, you might be able to search on a product's title but sort the results by the release date or the manufacturer's suggested retail price (MSRP). At least one sort attribute is always returned. Applications should ensure that only one attribute is selected as a sort key from these results (before calling GetProductSearchResults). The default sort key is the one with the lowest DisplaySequence value. The order in which the SortCharacteristics nodes are returned is not significant and may vary for different requests. See the eBay Web Services guide for details about how to use this data as input to GetProductSearchResults.
	 * @var EbayTradingTypeCharacteristicType
	 */
	public $SortCharacteristics;
	/**
	 * The DataElementSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains helpful hints for the user. Usage of this information is optional.
	 * @var EbayTradingTypeDataElementSetType
	 */
	public $DataElementSet;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharacteristicsSetType SearchCharacteristicsSet
	 * @param EbayTradingTypeCharacteristicsSearchCodeType SearchType
	 * @param EbayTradingTypeCharacteristicType SortCharacteristics
	 * @param EbayTradingTypeDataElementSetType DataElementSet
	 * @param DOMDocument any
	 * @return EbayTradingTypeProductSearchPageType
	 */
	public function __construct($_SearchCharacteristicsSet = null,$_SearchType = null,$_SortCharacteristics = null,$_DataElementSet = null,$_any = null)
	{
		parent::__construct(array('SearchCharacteristicsSet'=>$_SearchCharacteristicsSet,'SearchType'=>$_SearchType,'SortCharacteristics'=>$_SortCharacteristics,'DataElementSet'=>$_DataElementSet,'any'=>$_any));
	}
	/**
	 * Set SearchCharacteristicsSet
	 * @param CharacteristicsSetType SearchCharacteristicsSet
	 * @return CharacteristicsSetType
	 */
	public function setSearchCharacteristicsSet($_SearchCharacteristicsSet)
	{
		return ($this->SearchCharacteristicsSet = $_SearchCharacteristicsSet);
	}
	/**
	 * Get SearchCharacteristicsSet
	 * @return EbayTradingTypeCharacteristicsSetType
	 */
	public function getSearchCharacteristicsSet()
	{
		return $this->SearchCharacteristicsSet;
	}
	/**
	 * Set SearchType
	 * @param CharacteristicsSearchCodeType SearchType
	 * @return CharacteristicsSearchCodeType
	 */
	public function setSearchType($_SearchType)
	{
		return ($this->SearchType = EbayTradingTypeCharacteristicsSearchCodeType::valueIsValid($_SearchType)?$_SearchType:null);
	}
	/**
	 * Get SearchType
	 * @return EbayTradingTypeCharacteristicsSearchCodeType
	 */
	public function getSearchType()
	{
		return $this->SearchType;
	}
	/**
	 * Set SortCharacteristics
	 * @param CharacteristicType SortCharacteristics
	 * @return CharacteristicType
	 */
	public function setSortCharacteristics($_SortCharacteristics)
	{
		return ($this->SortCharacteristics = $_SortCharacteristics);
	}
	/**
	 * Get SortCharacteristics
	 * @return EbayTradingTypeCharacteristicType
	 */
	public function getSortCharacteristics()
	{
		return $this->SortCharacteristics;
	}
	/**
	 * Set DataElementSet
	 * @param DataElementSetType DataElementSet
	 * @return DataElementSetType
	 */
	public function setDataElementSet($_DataElementSet)
	{
		return ($this->DataElementSet = $_DataElementSet);
	}
	/**
	 * Get DataElementSet
	 * @return EbayTradingTypeDataElementSetType
	 */
	public function getDataElementSet()
	{
		return $this->DataElementSet;
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