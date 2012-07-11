<?php
/**
 * Class file for EbayTradingTypeGetWantItNowSearchResultsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetWantItNowSearchResultsRequestType
 * Documentation : Retrieves a list of active Want It Now posts that match specified keywords and/or a specific category ID. The response contains the following data: CategoryID, PostID, StartTime, ResponseCount, Site, and Title. To get the post description (Description), you must use GetWantItNowPost to retrieve individual posts.
 * @date 04/07/2012
 */
class EbayTradingTypeGetWantItNowSearchResultsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Limits the result set to just those Want It Now posts listed in the specified category. Defaults to all categories if no category ID is specified. If the specified category ID does not match an existing category for the site, an invalid-category error message is returned. Controls the set of listings to return (not the details to return for each listing). You must specify a Query and/or a CategoryID in the request.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies a search string. The search string consists of one or more keywords to search for in the listing title. Note that the post description will also be searched if SearchInDescription is enabled. By default, requests return a list of Want It Now posts that include all of the keywords specified in the Query. All words used in the query, including "and," "or," and "the," will be treated as keywords. You can, however, use modifiers and wildcards (e.g., +, -, and *) in the Query field to create more complex searches. Be careful when using spaces before or after modifiers and wildcards (+, -, or *), as the spaces can affect the query logic. See the eBay Web Services Guide for a list of valid search keyword query operators and examples.
	 * @var string
	 */
	public $Query;
	/**
	 * The SearchInDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, include the description field of Want It Now posts in the keyword search. Want It Now posts returned are those where specified search keywords appear in either the description or the title. This is the default behavior if SearchInDescription is not specified. If false, only the title will be searched. SearchInDescription is an optional input.
	 * @var boolean
	 */
	public $SearchInDescription;
	/**
	 * The SearchWorldwide
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the search applies to all eBay sites. If false, the search is limited to the site specified in the URL query string when the call is made.
	 * @var boolean
	 */
	public $SearchWorldwide;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Controls the pagination of the result set. Child elements specify the maximum number of item listings to return per call and which page of data to return.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string Query
	 * @param boolean SearchInDescription
	 * @param boolean SearchWorldwide
	 * @param EbayTradingTypePaginationType Pagination
	 * @return EbayTradingTypeGetWantItNowSearchResultsRequestType
	 */
	public function __construct($_CategoryID = null,$_Query = null,$_SearchInDescription = null,$_SearchWorldwide = null,$_Pagination = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'Query'=>$_Query,'SearchInDescription'=>$_SearchInDescription,'SearchWorldwide'=>$_SearchWorldwide,'Pagination'=>$_Pagination));
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
	 * Set Query
	 * @param string Query
	 * @return string
	 */
	public function setQuery($_Query)
	{
		return ($this->Query = $_Query);
	}
	/**
	 * Get Query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->Query;
	}
	/**
	 * Set SearchInDescription
	 * @param boolean SearchInDescription
	 * @return boolean
	 */
	public function setSearchInDescription($_SearchInDescription)
	{
		return ($this->SearchInDescription = $_SearchInDescription);
	}
	/**
	 * Get SearchInDescription
	 * @return boolean
	 */
	public function getSearchInDescription()
	{
		return $this->SearchInDescription;
	}
	/**
	 * Set SearchWorldwide
	 * @param boolean SearchWorldwide
	 * @return boolean
	 */
	public function setSearchWorldwide($_SearchWorldwide)
	{
		return ($this->SearchWorldwide = $_SearchWorldwide);
	}
	/**
	 * Get SearchWorldwide
	 * @return boolean
	 */
	public function getSearchWorldwide()
	{
		return $this->SearchWorldwide;
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