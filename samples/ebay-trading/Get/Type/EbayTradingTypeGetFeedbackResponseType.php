<?php
/**
 * Class file for EbayTradingTypeGetFeedbackResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetFeedbackResponseType
 * Documentation : The GetFeedback response contains the feedback summary if a TransactionID or ItemID is specified, and contains the specified user's total feedback score and feedback summary data if a UserID is specified. If no value is supplied, the feedback score and feedback summary for the requesting user will be returned. <br> If a detail level value of ReturnAll is specified, an array of all feedback records will be returned.
 * @date 04/07/2012
 */
class EbayTradingTypeGetFeedbackResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The FeedbackDetailArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the individual feedback records for the user or order line item specified in the request. There is one FeedbackDetailType object for each feedback record. Only populated with data when a detail level of ReturnAll is specified in the request. Not returned if you specify FeedbackID in the request.
	 * @var EbayTradingTypeFeedbackDetailArrayType
	 */
	public $FeedbackDetailArray;
	/**
	 * The FeedbackDetailItemTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of FeedbackDetailType objects returned in the FeedbackDetailArray property. Only applicable if feedback details are returned.
	 * @var int
	 */
	public $FeedbackDetailItemTotal;
	/**
	 * The FeedbackSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Summary feedback data for the user. Contains counts of positive, neutral, and negative feedback for pre-defined time periods. Only applicable if feedback details are returned.
	 * @var EbayTradingTypeFeedbackSummaryType
	 */
	public $FeedbackSummary;
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total feedback score for the user.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries. This is only applicable when a User ID or no ID (requester option) is specified.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The EntriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of entries (feedback detail) that are being returned per page of data (i.e., per call). Only returned if entries are returned.
	 * @var int
	 */
	public $EntriesPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which page of data was just returned. Will be the same as the value specified in Pagination.PageNumber. (If the input is higher than the total number of pages, the call fails with an error.) Only returned if items are returned.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackDetailArrayType FeedbackDetailArray
	 * @param int FeedbackDetailItemTotal
	 * @param EbayTradingTypeFeedbackSummaryType FeedbackSummary
	 * @param int FeedbackScore
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param int EntriesPerPage
	 * @param int PageNumber
	 * @return EbayTradingTypeGetFeedbackResponseType
	 */
	public function __construct($_FeedbackDetailArray = null,$_FeedbackDetailItemTotal = null,$_FeedbackSummary = null,$_FeedbackScore = null,$_PaginationResult = null,$_EntriesPerPage = null,$_PageNumber = null)
	{
		EbayTradingWsdlClass::__construct(array('FeedbackDetailArray'=>$_FeedbackDetailArray,'FeedbackDetailItemTotal'=>$_FeedbackDetailItemTotal,'FeedbackSummary'=>$_FeedbackSummary,'FeedbackScore'=>$_FeedbackScore,'PaginationResult'=>$_PaginationResult,'EntriesPerPage'=>$_EntriesPerPage,'PageNumber'=>$_PageNumber));
	}
	/**
	 * Set FeedbackDetailArray
	 * @param FeedbackDetailArrayType FeedbackDetailArray
	 * @return FeedbackDetailArrayType
	 */
	public function setFeedbackDetailArray($_FeedbackDetailArray)
	{
		return ($this->FeedbackDetailArray = $_FeedbackDetailArray);
	}
	/**
	 * Get FeedbackDetailArray
	 * @return EbayTradingTypeFeedbackDetailArrayType
	 */
	public function getFeedbackDetailArray()
	{
		return $this->FeedbackDetailArray;
	}
	/**
	 * Set FeedbackDetailItemTotal
	 * @param int FeedbackDetailItemTotal
	 * @return int
	 */
	public function setFeedbackDetailItemTotal($_FeedbackDetailItemTotal)
	{
		return ($this->FeedbackDetailItemTotal = $_FeedbackDetailItemTotal);
	}
	/**
	 * Get FeedbackDetailItemTotal
	 * @return int
	 */
	public function getFeedbackDetailItemTotal()
	{
		return $this->FeedbackDetailItemTotal;
	}
	/**
	 * Set FeedbackSummary
	 * @param FeedbackSummaryType FeedbackSummary
	 * @return FeedbackSummaryType
	 */
	public function setFeedbackSummary($_FeedbackSummary)
	{
		return ($this->FeedbackSummary = $_FeedbackSummary);
	}
	/**
	 * Get FeedbackSummary
	 * @return EbayTradingTypeFeedbackSummaryType
	 */
	public function getFeedbackSummary()
	{
		return $this->FeedbackSummary;
	}
	/**
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
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
	 * Set EntriesPerPage
	 * @param int EntriesPerPage
	 * @return int
	 */
	public function setEntriesPerPage($_EntriesPerPage)
	{
		return ($this->EntriesPerPage = $_EntriesPerPage);
	}
	/**
	 * Get EntriesPerPage
	 * @return int
	 */
	public function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>