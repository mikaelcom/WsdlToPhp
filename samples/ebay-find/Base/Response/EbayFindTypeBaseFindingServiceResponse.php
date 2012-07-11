<?php
/**
 * Class file for EbayFindTypeBaseFindingServiceResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeBaseFindingServiceResponse
 * Documentation : Base response container for all Finding Service operations.
 * @date 04/07/2012
 */
class EbayFindTypeBaseFindingServiceResponse extends EbayFindTypeBaseServiceResponse
{
	/**
	 * The searchResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Container for the item listings that matched the search criteria. The data for each item is returned in individual containers, if any matches were found.
	 * @var EbayFindTypeSearchResult
	 */
	public $searchResult;
	/**
	 * The paginationOutput
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates the pagination of the result set. Child elements indicate the page number that is returned, the maximum number of item listings to return per page, total number of pages that can be returned, and the total number of listings that match the search criteria.
	 * @var EbayFindTypePaginationOutput
	 */
	public $paginationOutput;
	/**
	 * The itemSearchURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A URL to view the search results on the eBay web site. The search results on the web site will use the same pagination as the API search results. <br><br> <span class="tablenote"><strong>Note:</strong> eBay URLs returned in fields, such as <b class="con">viewItemURL</b>, are subject to syntax and other changes without notice. To avoid problems in your application when eBay alters the URL format, we advise you to avoid parsing eBay URLs programmatically. We strive to ensure that other fields in the response contain all the information that is encoded in the URL, and more. </span>
	 * @var anyURI
	 */
	public $itemSearchURL;
	/**
	 * The extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeExtensionType
	 */
	public $extension;
	/**
	 * Constructor
	 * @param EbayFindTypeSearchResult searchResult
	 * @param EbayFindTypePaginationOutput paginationOutput
	 * @param anyURI itemSearchURL
	 * @param EbayFindTypeExtensionType extension
	 * @return EbayFindTypeBaseFindingServiceResponse
	 */
	public function __construct($_searchResult = null,$_paginationOutput = null,$_itemSearchURL = null,$_extension = null)
	{
		EbayFindWsdlClass::__construct(array('searchResult'=>$_searchResult,'paginationOutput'=>$_paginationOutput,'itemSearchURL'=>$_itemSearchURL,'extension'=>$_extension));
	}
	/**
	 * Set searchResult
	 * @param SearchResult searchResult
	 * @return SearchResult
	 */
	public function setSearchResult($_searchResult)
	{
		return ($this->searchResult = $_searchResult);
	}
	/**
	 * Get searchResult
	 * @return EbayFindTypeSearchResult
	 */
	public function getSearchResult()
	{
		return $this->searchResult;
	}
	/**
	 * Set paginationOutput
	 * @param PaginationOutput paginationOutput
	 * @return PaginationOutput
	 */
	public function setPaginationOutput($_paginationOutput)
	{
		return ($this->paginationOutput = $_paginationOutput);
	}
	/**
	 * Get paginationOutput
	 * @return EbayFindTypePaginationOutput
	 */
	public function getPaginationOutput()
	{
		return $this->paginationOutput;
	}
	/**
	 * Set itemSearchURL
	 * @param anyURI itemSearchURL
	 * @return anyURI
	 */
	public function setItemSearchURL($_itemSearchURL)
	{
		return ($this->itemSearchURL = $_itemSearchURL);
	}
	/**
	 * Get itemSearchURL
	 * @return anyURI
	 */
	public function getItemSearchURL()
	{
		return $this->itemSearchURL;
	}
	/**
	 * Set extension
	 * @param ExtensionType extension
	 * @return ExtensionType
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get extension
	 * @return EbayFindTypeExtensionType
	 */
	public function getExtension()
	{
		return $this->extension;
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