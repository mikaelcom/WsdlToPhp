<?php
/**
 * Class file for EbayShoppingTypeFindReviewsAndGuidesRequestType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindReviewsAndGuidesRequestType
 * Documentation : Splitting include reviews and guides from GetProducts.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindReviewsAndGuidesRequestType extends EbayShoppingTypeAbstractRequestType
{
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Use this to retrieve reviews (not guides) for one specific product. Specify the ID as a string, and use the type attribute to indicate the nature of the ID you are specifying. Same as FindProducts, supports Reference, ISBN, UPC, EAN. <br> <br> ProductID can be used in combination with UserID to return Reviews and Guides. ProductID and CategoryID cannot be used together.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Retrieves reviews and guides written by the specified user. <br> <br> UserID can be combined with either ProductID or CategoryID but not both (as ProductID and CategoryID cannot be used together).
	 * @var string
	 */
	public $UserID;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify a single CategoryID to restrict your query to a specific Guide category. <br> <br> If the specified category ID doesn't match an existing category for the site, an invalid-category error message is returned. To determine valid categories:<br> Use <b>findItemsAdvanced</b> from the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a> with CategoryHistogram value in the OutputSelector field to retrieve matching categories. Then make another FindReviewsAndGuides call with the ID of a matching category. <br> <br> CategoryID can be used in combination with UserID to return Reviews and Guides. ProductID and CategoryID cannot be used together.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The MaxResultsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of reviews per page (not guides) in the returned list. If not specified, the default returns 5 results per page.
	 * @var int
	 */
	public $MaxResultsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of the page of data to return in the current call. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request).
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReviewSort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Include ReviewSort in your request if you want to sort by a parameter, such as CreationTime. See the SortOrder field for values for specifying that results are returned in ascending or descending order. (By default, results are returned in descending order.)
	 * @var EbayShoppingTypeReviewSortCodeType
	 */
	public $ReviewSort;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts search results in ascending or descending order, in conjunction with the value you specify in ReviewsSort. The default is descending order. <br> <br> For example, for the ReviewsSort value of CreationTime, and a SortOrder value of Descending, the most recently created reviews are returned first.
	 * @var EbayShoppingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * Constructor
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param string UserID
	 * @param string CategoryID
	 * @param int MaxResultsPerPage
	 * @param int PageNumber
	 * @param EbayShoppingTypeReviewSortCodeType ReviewSort
	 * @param EbayShoppingTypeSortOrderCodeType SortOrder
	 * @return EbayShoppingTypeFindReviewsAndGuidesRequestType
	 */
	public function __construct($_ProductID = null,$_UserID = null,$_CategoryID = null,$_MaxResultsPerPage = null,$_PageNumber = null,$_ReviewSort = null,$_SortOrder = null)
	{
		EbayShoppingWsdlClass::__construct(array('ProductID'=>$_ProductID,'UserID'=>$_UserID,'CategoryID'=>$_CategoryID,'MaxResultsPerPage'=>$_MaxResultsPerPage,'PageNumber'=>$_PageNumber,'ReviewSort'=>$_ReviewSort,'SortOrder'=>$_SortOrder));
	}
	/**
	 * Set ProductID
	 * @param ProductIDType ProductID
	 * @return ProductIDType
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return EbayShoppingTypeProductIDType
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set MaxResultsPerPage
	 * @param int MaxResultsPerPage
	 * @return int
	 */
	public function setMaxResultsPerPage($_MaxResultsPerPage)
	{
		return ($this->MaxResultsPerPage = $_MaxResultsPerPage);
	}
	/**
	 * Get MaxResultsPerPage
	 * @return int
	 */
	public function getMaxResultsPerPage()
	{
		return $this->MaxResultsPerPage;
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
	 * Set ReviewSort
	 * @param ReviewSortCodeType ReviewSort
	 * @return ReviewSortCodeType
	 */
	public function setReviewSort($_ReviewSort)
	{
		return ($this->ReviewSort = EbayShoppingTypeReviewSortCodeType::valueIsValid($_ReviewSort)?$_ReviewSort:null);
	}
	/**
	 * Get ReviewSort
	 * @return EbayShoppingTypeReviewSortCodeType
	 */
	public function getReviewSort()
	{
		return $this->ReviewSort;
	}
	/**
	 * Set SortOrder
	 * @param SortOrderCodeType SortOrder
	 * @return SortOrderCodeType
	 */
	public function setSortOrder($_SortOrder)
	{
		return ($this->SortOrder = EbayShoppingTypeSortOrderCodeType::valueIsValid($_SortOrder)?$_SortOrder:null);
	}
	/**
	 * Get SortOrder
	 * @return EbayShoppingTypeSortOrderCodeType
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
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