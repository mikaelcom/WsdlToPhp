<?php
/**
 * Class file for EbayShoppingTypeFindPopularSearchesResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindPopularSearchesResponseType
 * Documentation : Contains the keyword data for the requested categories. A category's data are contained in a CategoryArrayType object if there is no error (one or more CategoryType objects). Returns category data as well as related search data.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindPopularSearchesResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The PopularSearchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns most popular search words by category. For each category, the CategoryID, CategoryName, CategoryParentID, and CategoryParentName, are returned, as well as QueryKeywords, related, and alternate searches.
	 * @var EbayShoppingTypePopularSearchesType
	 */
	public $PopularSearchResult;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the page of data returned by the current call. For instance, for the first set of items can be returned, this field has a value of one.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The TotalPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
	 * @var int
	 */
	public $TotalPages;
	/**
	 * Constructor
	 * @param EbayShoppingTypePopularSearchesType PopularSearchResult
	 * @param int PageNumber
	 * @param int TotalPages
	 * @return EbayShoppingTypeFindPopularSearchesResponseType
	 */
	public function __construct($_PopularSearchResult = null,$_PageNumber = null,$_TotalPages = null)
	{
		EbayShoppingWsdlClass::__construct(array('PopularSearchResult'=>$_PopularSearchResult,'PageNumber'=>$_PageNumber,'TotalPages'=>$_TotalPages));
	}
	/**
	 * Set PopularSearchResult
	 * @param PopularSearchesType PopularSearchResult
	 * @return PopularSearchesType
	 */
	public function setPopularSearchResult($_PopularSearchResult)
	{
		return ($this->PopularSearchResult = $_PopularSearchResult);
	}
	/**
	 * Get PopularSearchResult
	 * @return EbayShoppingTypePopularSearchesType
	 */
	public function getPopularSearchResult()
	{
		return $this->PopularSearchResult;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set TotalPages
	 * @param int TotalPages
	 * @return int
	 */
	public function setTotalPages($_TotalPages)
	{
		return ($this->TotalPages = $_TotalPages);
	}
	/**
	 * Get TotalPages
	 * @return int
	 */
	public function getTotalPages()
	{
		return $this->TotalPages;
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