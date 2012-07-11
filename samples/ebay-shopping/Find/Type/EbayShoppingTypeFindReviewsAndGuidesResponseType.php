<?php
/**
 * Class file for EbayShoppingTypeFindReviewsAndGuidesResponseType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFindReviewsAndGuidesResponseType
 * Documentation : Find reviews and guides response type.
 * @date 05/07/2012
 */
class EbayShoppingTypeFindReviewsAndGuidesResponseType extends EbayShoppingTypeAbstractResponseType
{
	/**
	 * The ReviewCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of returned reviews.
	 * @var int
	 */
	public $ReviewCount;
	/**
	 * The BuyingGuideCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of returned buying guides.
	 * @var int
	 */
	public $BuyingGuideCount;
	/**
	 * The ReviewerRank
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Rank of reviewer if using user search.
	 * @var int
	 */
	public $ReviewerRank;
	/**
	 * The TotalHelpfulnessVotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of helpfulness votes if using user search.
	 * @var int
	 */
	public $TotalHelpfulnessVotes;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay or external IDs associated with the product. Use the Reference value as input to search for the same product in the future, or use the ISBN, EAN, or UPC value (if returned). The ISBN, EAN, and UPC values can also be useful as keys if your application is comparing products across different sites. Always returned when Product is returned.
	 * @var EbayShoppingTypeProductIDType
	 */
	public $ProductID;
	/**
	 * The ReviewsAndGuidesURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to the reviews and guides page.
	 * @var anyURI
	 */
	public $ReviewsAndGuidesURL;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of the page of data returned. If many products are found and multiple pages of results are available, use this in combination with TotalPages to decide which page to retrieve next. As FindProducts only returns up to 2000 products, the maximum possible value is theoretically 2000 (if you were to set MaxResultsPerPage to 1 in the request).
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
	 * The BuyingGuideDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information for up to 5 buying guides that match the query. Buying guides provide useful information about shopping in a particular domain, like Digital Cameras. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them. If no buying guides are associated with the product, this only returns a link to the buying guide hub (the main Guides page). Count limited by MaxResultsPerPage in request.
	 * @var EbayShoppingTypeBuyingGuideDetailsType
	 */
	public $BuyingGuideDetails;
	/**
	 * The ReviewDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about review details. Count limited by MaxResultsPerPage in request.
	 * @var EbayShoppingTypeReviewDetailsType
	 */
	public $ReviewDetails;
	/**
	 * The PositiveHelpfulnessVotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of helpfulness votes if using user search.
	 * @var int
	 */
	public $PositiveHelpfulnessVotes;
	/**
	 * Constructor
	 * @param int ReviewCount
	 * @param int BuyingGuideCount
	 * @param int ReviewerRank
	 * @param int TotalHelpfulnessVotes
	 * @param EbayShoppingTypeProductIDType ProductID
	 * @param anyURI ReviewsAndGuidesURL
	 * @param int PageNumber
	 * @param int TotalPages
	 * @param EbayShoppingTypeBuyingGuideDetailsType BuyingGuideDetails
	 * @param EbayShoppingTypeReviewDetailsType ReviewDetails
	 * @param int PositiveHelpfulnessVotes
	 * @return EbayShoppingTypeFindReviewsAndGuidesResponseType
	 */
	public function __construct($_ReviewCount = null,$_BuyingGuideCount = null,$_ReviewerRank = null,$_TotalHelpfulnessVotes = null,$_ProductID = null,$_ReviewsAndGuidesURL = null,$_PageNumber = null,$_TotalPages = null,$_BuyingGuideDetails = null,$_ReviewDetails = null,$_PositiveHelpfulnessVotes = null)
	{
		EbayShoppingWsdlClass::__construct(array('ReviewCount'=>$_ReviewCount,'BuyingGuideCount'=>$_BuyingGuideCount,'ReviewerRank'=>$_ReviewerRank,'TotalHelpfulnessVotes'=>$_TotalHelpfulnessVotes,'ProductID'=>$_ProductID,'ReviewsAndGuidesURL'=>$_ReviewsAndGuidesURL,'PageNumber'=>$_PageNumber,'TotalPages'=>$_TotalPages,'BuyingGuideDetails'=>$_BuyingGuideDetails,'ReviewDetails'=>$_ReviewDetails,'PositiveHelpfulnessVotes'=>$_PositiveHelpfulnessVotes));
	}
	/**
	 * Set ReviewCount
	 * @param int ReviewCount
	 * @return int
	 */
	public function setReviewCount($_ReviewCount)
	{
		return ($this->ReviewCount = $_ReviewCount);
	}
	/**
	 * Get ReviewCount
	 * @return int
	 */
	public function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * Set BuyingGuideCount
	 * @param int BuyingGuideCount
	 * @return int
	 */
	public function setBuyingGuideCount($_BuyingGuideCount)
	{
		return ($this->BuyingGuideCount = $_BuyingGuideCount);
	}
	/**
	 * Get BuyingGuideCount
	 * @return int
	 */
	public function getBuyingGuideCount()
	{
		return $this->BuyingGuideCount;
	}
	/**
	 * Set ReviewerRank
	 * @param int ReviewerRank
	 * @return int
	 */
	public function setReviewerRank($_ReviewerRank)
	{
		return ($this->ReviewerRank = $_ReviewerRank);
	}
	/**
	 * Get ReviewerRank
	 * @return int
	 */
	public function getReviewerRank()
	{
		return $this->ReviewerRank;
	}
	/**
	 * Set TotalHelpfulnessVotes
	 * @param int TotalHelpfulnessVotes
	 * @return int
	 */
	public function setTotalHelpfulnessVotes($_TotalHelpfulnessVotes)
	{
		return ($this->TotalHelpfulnessVotes = $_TotalHelpfulnessVotes);
	}
	/**
	 * Get TotalHelpfulnessVotes
	 * @return int
	 */
	public function getTotalHelpfulnessVotes()
	{
		return $this->TotalHelpfulnessVotes;
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
	 * Set ReviewsAndGuidesURL
	 * @param anyURI ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function setReviewsAndGuidesURL($_ReviewsAndGuidesURL)
	{
		return ($this->ReviewsAndGuidesURL = $_ReviewsAndGuidesURL);
	}
	/**
	 * Get ReviewsAndGuidesURL
	 * @return anyURI
	 */
	public function getReviewsAndGuidesURL()
	{
		return $this->ReviewsAndGuidesURL;
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
	 * Set BuyingGuideDetails
	 * @param BuyingGuideDetailsType BuyingGuideDetails
	 * @return BuyingGuideDetailsType
	 */
	public function setBuyingGuideDetails($_BuyingGuideDetails)
	{
		return ($this->BuyingGuideDetails = $_BuyingGuideDetails);
	}
	/**
	 * Get BuyingGuideDetails
	 * @return EbayShoppingTypeBuyingGuideDetailsType
	 */
	public function getBuyingGuideDetails()
	{
		return $this->BuyingGuideDetails;
	}
	/**
	 * Set ReviewDetails
	 * @param ReviewDetailsType ReviewDetails
	 * @return ReviewDetailsType
	 */
	public function setReviewDetails($_ReviewDetails)
	{
		return ($this->ReviewDetails = $_ReviewDetails);
	}
	/**
	 * Get ReviewDetails
	 * @return EbayShoppingTypeReviewDetailsType
	 */
	public function getReviewDetails()
	{
		return $this->ReviewDetails;
	}
	/**
	 * Set PositiveHelpfulnessVotes
	 * @param int PositiveHelpfulnessVotes
	 * @return int
	 */
	public function setPositiveHelpfulnessVotes($_PositiveHelpfulnessVotes)
	{
		return ($this->PositiveHelpfulnessVotes = $_PositiveHelpfulnessVotes);
	}
	/**
	 * Get PositiveHelpfulnessVotes
	 * @return int
	 */
	public function getPositiveHelpfulnessVotes()
	{
		return $this->PositiveHelpfulnessVotes;
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