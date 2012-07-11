<?php
/**
 * Class file for EbayTradingTypeGetProductFamilyMembersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductFamilyMembersResponseType
 * Documentation : GetProductFamilyMembers performs a product search and returns results comprising all the children in the product family identified by a product ID that was specified in the request. Use this call when more matches are found than the max amount specified per family in a call to GetProductSearchResults. This call supports batch requests. This means you can retrieve products in multiple families by using a single request. The results are compatible with the results from GetProductSearchResults, so similar application logic can be used to handle both requests and responses.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductFamilyMembersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DataElementSets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for one or more DataElement fields containing supplemental helpful data. A DataElement field is an HTML snippet that specifies hints for the user, help links, help graphics, and other supplemental information that varies per characteristics set. Usage of this information is optional and may require developers to inspect the information to determine how it can be applied in an application.
	 * @var EbayTradingTypeDataElementSetType
	 */
	public $DataElementSets;
	/**
	 * The ProductSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the attributes and summary product details for all products that match the product ID (or IDs) passed in the request.
	 * @var EbayTradingTypeProductSearchResultType
	 */
	public $ProductSearchResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeDataElementSetType DataElementSets
	 * @param EbayTradingTypeProductSearchResultType ProductSearchResult
	 * @return EbayTradingTypeGetProductFamilyMembersResponseType
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