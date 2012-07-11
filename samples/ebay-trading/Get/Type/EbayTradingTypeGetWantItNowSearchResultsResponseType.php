<?php
/**
 * Class file for EbayTradingTypeGetWantItNowSearchResultsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetWantItNowSearchResultsResponseType
 * Documentation : Response contains the Want It Now posts that have the specified keyword(s) in the title and (optionally) the description.
 * @date 04/07/2012
 */
class EbayTradingTypeGetWantItNowSearchResultsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The WantItNowPostArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the returned Want It Now posts, if any. The data for each post is returned in a WantItNowPostType object.
	 * @var EbayTradingTypeWantItNowPostArrayType
	 */
	public $WantItNowPostArray;
	/**
	 * The HasMoreItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether there are additional Want It Now posts that meet the search criteria.
	 * @var boolean
	 */
	public $HasMoreItems;
	/**
	 * The ItemsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the maximum number of Want It Now posts that can be returned in a WantItNowPostArray for a request. This value can be specified in the request by EntriesPerPage in Pagination in the request.
	 * @var int
	 */
	public $ItemsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the page of data returned by the current call.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the results of the pagination, including the total number of pages of data there are to be returned and the total number of posts there are to be returned.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * Constructor
	 * @param EbayTradingTypeWantItNowPostArrayType WantItNowPostArray
	 * @param boolean HasMoreItems
	 * @param int ItemsPerPage
	 * @param int PageNumber
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @return EbayTradingTypeGetWantItNowSearchResultsResponseType
	 */
	public function __construct($_WantItNowPostArray = null,$_HasMoreItems = null,$_ItemsPerPage = null,$_PageNumber = null,$_PaginationResult = null)
	{
		EbayTradingWsdlClass::__construct(array('WantItNowPostArray'=>$_WantItNowPostArray,'HasMoreItems'=>$_HasMoreItems,'ItemsPerPage'=>$_ItemsPerPage,'PageNumber'=>$_PageNumber,'PaginationResult'=>$_PaginationResult));
	}
	/**
	 * Set WantItNowPostArray
	 * @param WantItNowPostArrayType WantItNowPostArray
	 * @return WantItNowPostArrayType
	 */
	public function setWantItNowPostArray($_WantItNowPostArray)
	{
		return ($this->WantItNowPostArray = $_WantItNowPostArray);
	}
	/**
	 * Get WantItNowPostArray
	 * @return EbayTradingTypeWantItNowPostArrayType
	 */
	public function getWantItNowPostArray()
	{
		return $this->WantItNowPostArray;
	}
	/**
	 * Set HasMoreItems
	 * @param boolean HasMoreItems
	 * @return boolean
	 */
	public function setHasMoreItems($_HasMoreItems)
	{
		return ($this->HasMoreItems = $_HasMoreItems);
	}
	/**
	 * Get HasMoreItems
	 * @return boolean
	 */
	public function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * Set ItemsPerPage
	 * @param int ItemsPerPage
	 * @return int
	 */
	public function setItemsPerPage($_ItemsPerPage)
	{
		return ($this->ItemsPerPage = $_ItemsPerPage);
	}
	/**
	 * Get ItemsPerPage
	 * @return int
	 */
	public function getItemsPerPage()
	{
		return $this->ItemsPerPage;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>