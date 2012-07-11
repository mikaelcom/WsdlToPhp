<?php
/**
 * Class file for EbayTradingTypeGetPopularKeywordsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPopularKeywordsResponseType
 * Documentation : Contains the keyword data for the requested categories. A category's data are contained in a CategoryArrayType object if there is no error (one or more CategoryType objects). Each CategoryType contains its ID, parent ID and keyword list.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPopularKeywordsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The CategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Organization of keywords by category. For each category, its ID and its parent's ID and keywords are listed.
	 * @var EbayTradingTypeCategoryArrayType
	 */
	public $CategoryArray;
	/**
	 * The HasMore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether there are more categories beyond the subset returned in the last call to GetPopularKeywords. Returned only when IncludeChildCategories is true.
	 * @var boolean
	 */
	public $HasMore;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param EbayTradingTypeCategoryArrayType CategoryArray
	 * @param boolean HasMore
	 * @return EbayTradingTypeGetPopularKeywordsResponseType
	 */
	public function __construct($_PaginationResult = null,$_CategoryArray = null,$_HasMore = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'CategoryArray'=>$_CategoryArray,'HasMore'=>$_HasMore));
	}
	/**
	 * Set PaginationResult
	 * @param PaginationResultType PaginationResult
	 * @return PaginationResultType
	 */
	public function setPaginationResult($_PaginationResult)
	{
		return ($this->PaginationResult = $_PaginationResult);
	}
	/**
	 * Get PaginationResult
	 * @return EbayTradingTypePaginationResultType
	 */
	public function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * Set CategoryArray
	 * @param CategoryArrayType CategoryArray
	 * @return CategoryArrayType
	 */
	public function setCategoryArray($_CategoryArray)
	{
		return ($this->CategoryArray = $_CategoryArray);
	}
	/**
	 * Get CategoryArray
	 * @return EbayTradingTypeCategoryArrayType
	 */
	public function getCategoryArray()
	{
		return $this->CategoryArray;
	}
	/**
	 * Set HasMore
	 * @param boolean HasMore
	 * @return boolean
	 */
	public function setHasMore($_HasMore)
	{
		return ($this->HasMore = $_HasMore);
	}
	/**
	 * Get HasMore
	 * @return boolean
	 */
	public function getHasMore()
	{
		return $this->HasMore;
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