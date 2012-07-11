<?php
/**
 * Class file for EbayTradingTypeGetProductSearchResultsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSearchResultsResponseType
 * Documentation : GetProductSearchResults performs a product search and collects the results. Result attributes for each product/product family are grouped and identified with a product ID. If more matches are found than the max amount specified per family, only the product family information is returned. In this case, call GetProductFamilyMembers to retrieve more products within the same family.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSearchResultsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DataElementSets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for one or more DataElement fields containing supplemental helpful data. A DataElement field is an HTML snippet that specifies hints for the user, help links, help graphics, and other supplemental information that varies per characteristic set. Usage of this information is optional and may require you to inspect the information to determine how it can be applied in an application. Also returned with warnings when no matches are found.
	 * @var EbayTradingTypeDataElementSetType
	 */
	public $DataElementSets;
	/**
	 * The ProductSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the attributes and product details that match the attributes or query keywords passed in the request. Always returned when product search results are found.
	 * @var EbayTradingTypeProductSearchResultType
	 */
	public $ProductSearchResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeDataElementSetType DataElementSets
	 * @param EbayTradingTypeProductSearchResultType ProductSearchResult
	 * @return EbayTradingTypeGetProductSearchResultsResponseType
	 */
	public function __construct($_DataElementSets = null,$_ProductSearchResult = null)
	{
		EbayTradingWsdlClass::__construct(array('DataElementSets'=>$_DataElementSets,'ProductSearchResult'=>$_ProductSearchResult));
	}
	/**
	 * Set DataElementSets
	 * @param DataElementSetType DataElementSets
	 * @return DataElementSetType
	 */
	public function setDataElementSets($_DataElementSets)
	{
		return ($this->DataElementSets = $_DataElementSets);
	}
	/**
	 * Get DataElementSets
	 * @return EbayTradingTypeDataElementSetType
	 */
	public function getDataElementSets()
	{
		return $this->DataElementSets;
	}
	/**
	 * Set ProductSearchResult
	 * @param ProductSearchResultType ProductSearchResult
	 * @return ProductSearchResultType
	 */
	public function setProductSearchResult($_ProductSearchResult)
	{
		return ($this->ProductSearchResult = $_ProductSearchResult);
	}
	/**
	 * Get ProductSearchResult
	 * @return EbayTradingTypeProductSearchResultType
	 */
	public function getProductSearchResult()
	{
		return $this->ProductSearchResult;
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