<?php
/**
 * Class file for EbayTradingTypeGetFeedbackRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetFeedbackRequestType
 * Documentation : Retrieves the accumulated feedback left for a specified user or the summary feedback data for a specific order line item or item listing.&nbsp;<b>Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeGetFeedbackRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the user whose feedback data is to be returned. If not specified, then the feedback returned is for the requesting user.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The FeedbackID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that uniquely identifies a feedback record to be retrieved. Used only by the Feedback notification.
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. If <b>ItemID</b> is specified in the <b>GetFeedback</b> request, the returned feedback records are restricted to the specified <b>ItemID</b>. The <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored. The maximum number of feedback records returned is 100.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). A <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as an input filter in the <b>GetFeedback</b> request. If an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value is used to retrieve a feedback record on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The CommentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Returns feedback of a specified type (positive, negative, or neutral) in <b>FeedbackDetailArray</b>. You can include two comment types in your call if you want to exclude the third type from your results. If no <b>CommentType</b> is specified, all of the feedback types are returned.
	 * @var EbayTradingTypeCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The FeedbackType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns feedback that you received as a buyer or seller, or feedback you left for others (as either a buyer or a seller). You can include only one <b>FeedbackType</b> in your call. If no <b>FeedbackType</b> is specified, all of the available feedback is returned.
	 * @var EbayTradingTypeFeedbackTypeCodeType
	 */
	public $FeedbackType;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Controls the pagination of the result set. Child elements, <b>EntriesPerPage</b> and <b>PageNumber</b>, specify the maximum number of individual feedback records to return per call and which page of data to return. Only applicable if <b>DetailLevel</b> is set to <b>ReturnAll</b> and the call is returning feedback for a <b>UserID</b>. Feedback summary data is not paginated, but when pagination is used, it is returned after the last feedback detail entry. <br><br> Accepted values for <b>Pagination.EntriesPerPage</b> for GetFeedback is 25 (the default), 50, 100, and 200. If you specify a value of zero, or a value greater than 200, the call fails with an error. If you specify a value between one and twenty-four, the value is rounded up to 25. Values between 26 and 199 that are not one of the accepted values are rounded down to the nearest accepted value.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. An <b>OrderLineItemID</b> can be used as an input filter in the <b>GetFeedback</b> request. If an <b>OrderLineItemID</b> value is used to retrieve a feedback record on a specific order line item, the <b>FeedbackType</b> and <b>Pagination</b> fields (if included) are ignored.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param string FeedbackID
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeCommentTypeCodeType CommentType
	 * @param EbayTradingTypeFeedbackTypeCodeType FeedbackType
	 * @param EbayTradingTypePaginationType Pagination
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeGetFeedbackRequestType
	 */
	public function __construct($_UserID = null,$_FeedbackID = null,$_ItemID = null,$_TransactionID = null,$_CommentType = null,$_FeedbackType = null,$_Pagination = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('UserID'=>$_UserID,'FeedbackID'=>$_FeedbackID,'ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'CommentType'=>$_CommentType,'FeedbackType'=>$_FeedbackType,'Pagination'=>$_Pagination,'OrderLineItemID'=>$_OrderLineItemID));
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set FeedbackID
	 * @param string FeedbackID
	 * @return string
	 */
	public function setFeedbackID($_FeedbackID)
	{
		return ($this->FeedbackID = $_FeedbackID);
	}
	/**
	 * Get FeedbackID
	 * @return string
	 */
	public function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set CommentType
	 * @param CommentTypeCodeType CommentType
	 * @return CommentTypeCodeType
	 */
	public function setCommentType($_CommentType)
	{
		return ($this->CommentType = EbayTradingTypeCommentTypeCodeType::valueIsValid($_CommentType)?$_CommentType:null);
	}
	/**
	 * Get CommentType
	 * @return EbayTradingTypeCommentTypeCodeType
	 */
	public function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * Set FeedbackType
	 * @param FeedbackTypeCodeType FeedbackType
	 * @return FeedbackTypeCodeType
	 */
	public function setFeedbackType($_FeedbackType)
	{
		return ($this->FeedbackType = EbayTradingTypeFeedbackTypeCodeType::valueIsValid($_FeedbackType)?$_FeedbackType:null);
	}
	/**
	 * Get FeedbackType
	 * @return EbayTradingTypeFeedbackTypeCodeType
	 */
	public function getFeedbackType()
	{
		return $this->FeedbackType;
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
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
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