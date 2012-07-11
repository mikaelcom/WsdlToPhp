<?php
/**
 * Class file for EbayTradingTypeLeaveFeedbackRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLeaveFeedbackRequestType
 * Documentation : Enables a buyer and seller to leave feedback for their order partner at the conclusion of a successful order. &nbsp;<b> Also for Half.com</b>.
 * @date 04/07/2012
 */
class EbayTradingTypeLeaveFeedbackRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> is specified in the <b>LeaveFeedback</b> request, the <b>ItemID</b> is required along with the <b>TargetUser</b> to identify an order line item existing between the caller and the <b>TargetUser</b> that requires feedback. A Feedback comment will be posted for this order line item. If there are multiple order line items between the two order partners that still require feedback, the <b>TransactionID</b> will also be required to isolate the targeted order line item. Feedback cannot be left for order line items with creation dates more than 60 days in the past.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The CommentText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Textual comment that explains, clarifies, or justifies the feedback score specified in <b>CommentType</b>.
	 * @var string
	 */
	public $CommentText;
	/**
	 * The CommentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Score for the feedback being left. May be Positive, Neutral, or Negative. <br><br> <span class="tablenote"><b>Note:</b> Sellers can not leave neutral or negative feedback for buyers. In addition, buyers can not leave neutral or negative feedback within 7 days from the completion of the order for active PowerSellers who have been on eBay for 12 months. </span>
	 * @var EbayTradingTypeCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). If there are multiple order line items between the two order partners that still require feedback, the <b>TransactionID</b> is required along with the corresponding <b>ItemID</b> and <b>TargetUser</b> to isolate the targeted order line item. If an <b>OrderLineItemID</b> is included in the response to identify a specific order line item, none of the preceding fields (<b>ItemID</b>, <b>TransactionID</b>, <b>TargetUser</b>) are needed. Feedback cannot be left for order line items with creation dates more than 60 days in the past. </span>
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The TargetUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the recipient user about whom the feedback is being left.
	 * @var EbayTradingTypeUserIDType
	 */
	public $TargetUser;
	/**
	 * The SellerItemRatingDetailArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for detailed seller ratings (DSRs). If a buyer is providing DSRs, they are specified in this container. Sellers have access to the number of ratings they've received, as well as to the averages of the DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
	 * @var EbayTradingTypeItemRatingDetailArrayType
	 */
	public $SellerItemRatingDetailArray;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. If an <b>OrderLineItemID</b> is included in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>TargetUser</b> fields are not required. Feedback cannot be left for order line items with creation dates more than 60 days in the past.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string CommentText
	 * @param EbayTradingTypeCommentTypeCodeType CommentType
	 * @param string TransactionID
	 * @param EbayTradingTypeUserIDType TargetUser
	 * @param EbayTradingTypeItemRatingDetailArrayType SellerItemRatingDetailArray
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeLeaveFeedbackRequestType
	 */
	public function __construct($_ItemID = null,$_CommentText = null,$_CommentType = null,$_TransactionID = null,$_TargetUser = null,$_SellerItemRatingDetailArray = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'CommentText'=>$_CommentText,'CommentType'=>$_CommentType,'TransactionID'=>$_TransactionID,'TargetUser'=>$_TargetUser,'SellerItemRatingDetailArray'=>$_SellerItemRatingDetailArray,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set CommentText
	 * @param string CommentText
	 * @return string
	 */
	public function setCommentText($_CommentText)
	{
		return ($this->CommentText = $_CommentText);
	}
	/**
	 * Get CommentText
	 * @return string
	 */
	public function getCommentText()
	{
		return $this->CommentText;
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
	 * Set TargetUser
	 * @param UserIDType TargetUser
	 * @return UserIDType
	 */
	public function setTargetUser($_TargetUser)
	{
		return ($this->TargetUser = EbayTradingTypeUserIDType::valueIsValid($_TargetUser)?$_TargetUser:null);
	}
	/**
	 * Get TargetUser
	 * @return EbayTradingTypeUserIDType
	 */
	public function getTargetUser()
	{
		return $this->TargetUser;
	}
	/**
	 * Set SellerItemRatingDetailArray
	 * @param ItemRatingDetailArrayType SellerItemRatingDetailArray
	 * @return ItemRatingDetailArrayType
	 */
	public function setSellerItemRatingDetailArray($_SellerItemRatingDetailArray)
	{
		return ($this->SellerItemRatingDetailArray = $_SellerItemRatingDetailArray);
	}
	/**
	 * Get SellerItemRatingDetailArray
	 * @return EbayTradingTypeItemRatingDetailArrayType
	 */
	public function getSellerItemRatingDetailArray()
	{
		return $this->SellerItemRatingDetailArray;
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