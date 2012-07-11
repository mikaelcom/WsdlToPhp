<?php
/**
 * Class file for EbayTradingTypeGetPopularKeywordsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetPopularKeywordsRequestType
 * Documentation : Retrieves the words that are most frequently submitted by eBay users when searching for listings.
 * @date 04/07/2012
 */
class EbayTradingTypeGetPopularKeywordsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A category ID for which you want keywords returned. When IncludeChildCategories is true, one and only one CategoryID is allowed. Otherwise, up to 100 CategoryIds are allowed. <br><br> To retrieve the keywords for root category, set one of the CategoryIDs to -1 or submit no CategoryIDs at all.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The IncludeChildCategories
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, only one CategoryID can be specified, and keywords are returned for that category and its subcategories. If false, keywords are returned only for the categories identified by CategoryID. Default is false.
	 * @var boolean
	 */
	public $IncludeChildCategories;
	/**
	 * The MaxKeywordsRetrieved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of keywords to be retrieved per category for this call.
	 * @var int
	 */
	public $MaxKeywordsRetrieved;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about how many categories to return per page and which page to view.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param boolean IncludeChildCategories
	 * @param int MaxKeywordsRetrieved
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetPopularKeywordsRequestType
	 */
	public function __construct($_CategoryID = null,$_IncludeChildCategories = null,$_MaxKeywordsRetrieved = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'IncludeChildCategories'=>$_IncludeChildCategories,'MaxKeywordsRetrieved'=>$_MaxKeywordsRetrieved,'Pagination'=>$_Pagination));
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
	 * Set IncludeChildCategories
	 * @param boolean IncludeChildCategories
	 * @return boolean
	 */
	public function setIncludeChildCategories($_IncludeChildCategories)
	{
		return ($this->IncludeChildCategories = $_IncludeChildCategories);
	}
	/**
	 * Get IncludeChildCategories
	 * @return boolean
	 */
	public function getIncludeChildCategories()
	{
		return $this->IncludeChildCategories;
	}
	/**
	 * Set MaxKeywordsRetrieved
	 * @param int MaxKeywordsRetrieved
	 * @return int
	 */
	public function setMaxKeywordsRetrieved($_MaxKeywordsRetrieved)
	{
		return ($this->MaxKeywordsRetrieved = $_MaxKeywordsRetrieved);
	}
	/**
	 * Get MaxKeywordsRetrieved
	 * @return int
	 */
	public function getMaxKeywordsRetrieved()
	{
		return $this->MaxKeywordsRetrieved;
	}
	/**
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
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