<?php
/**
 * Class file for EbayTradingTypeBidApprovalType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidApprovalType
 * Documentation : Information that a Live Auction seller selects when approving or denying a user who wants to bid on items in the seller's Live Auctions catalog.
 * @date 04/07/2012
 */
class EbayTradingTypeBidApprovalType extends EbayTradingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : User ID for the bidder to be approved. Only bidders who have requested approval can be approved. That is, the seller cannot approve a bidder who has not requested approval. (Bidders request approval via the eBay Live Auctions Web site UI.) When you are approving bidders, if you pass in multiple BidApproval entries with duplicate UserID values, the last entry with that UserID takes precedence (and the earlier duplicate UserID entries are ignored).
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The ApprovedBiddingLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Maximum amount that the seller will allow the specified user to bid. This field is required if the auction house has requested that the bidder enter an amount for the seller's approval. (The bidder requests a maximum bidding limit, but the seller can specify a different maximum bidding limit.)
	 * @var EbayTradingTypeAmountType
	 */
	public $ApprovedBiddingLimit;
	/**
	 * The DeclinedComment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Comments entered by seller when an approval request is denied. This is required if the seller sets Status to Denied.
	 * @var string
	 */
	public $DeclinedComment;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller approves or denies the bidder's approval request.
	 * @var EbayTradingTypeBidderStatusCodeType
	 */
	public $Status;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param EbayTradingTypeAmountType ApprovedBiddingLimit
	 * @param string DeclinedComment
	 * @param EbayTradingTypeBidderStatusCodeType Status
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidApprovalType
	 */
	public function __construct($_UserID = null,$_ApprovedBiddingLimit = null,$_DeclinedComment = null,$_Status = null,$_any = null)
	{
		parent::__construct(array('UserID'=>$_UserID,'ApprovedBiddingLimit'=>$_ApprovedBiddingLimit,'DeclinedComment'=>$_DeclinedComment,'Status'=>$_Status,'any'=>$_any));
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
	 * Set ApprovedBiddingLimit
	 * @param AmountType ApprovedBiddingLimit
	 * @return AmountType
	 */
	public function setApprovedBiddingLimit($_ApprovedBiddingLimit)
	{
		return ($this->ApprovedBiddingLimit = $_ApprovedBiddingLimit);
	}
	/**
	 * Get ApprovedBiddingLimit
	 * @return EbayTradingTypeAmountType
	 */
	public function getApprovedBiddingLimit()
	{
		return $this->ApprovedBiddingLimit;
	}
	/**
	 * Set DeclinedComment
	 * @param string DeclinedComment
	 * @return string
	 */
	public function setDeclinedComment($_DeclinedComment)
	{
		return ($this->DeclinedComment = $_DeclinedComment);
	}
	/**
	 * Get DeclinedComment
	 * @return string
	 */
	public function getDeclinedComment()
	{
		return $this->DeclinedComment;
	}
	/**
	 * Set Status
	 * @param BidderStatusCodeType Status
	 * @return BidderStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeBidderStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeBidderStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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