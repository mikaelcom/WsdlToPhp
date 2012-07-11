<?php
/**
 * Class file for EbayTradingTypeDisputeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeType
 * Documentation : Contains all information describing a dispute.
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeType extends EbayTradingWsdlClass
{
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an eBay dispute.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * The DisputeRecordType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value to indicate the type of dispute.
	 * @var EbayTradingTypeDisputeRecordTypeCodeType
	 */
	public $DisputeRecordType;
	/**
	 * The DisputeState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The internal state of the dispute. The value determines which values of <b>DisputeActivity</b> are valid when responding to a dispute.
	 * @var EbayTradingTypeDisputeStateCodeType
	 */
	public $DisputeState;
	/**
	 * The DisputeStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of the dispute, which provides additional information about the dispute state.
	 * @var EbayTradingTypeDisputeStatusCodeType
	 */
	public $DisputeStatus;
	/**
	 * The OtherPartyRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The role of the person involved in the dispute who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $OtherPartyRole;
	/**
	 * The OtherPartyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user name of the person involved in the dispute who is not taking action or requesting information.
	 * @var string
	 */
	public $OtherPartyName;
	/**
	 * The UserRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The role of the person involved in the dispute who is taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $UserRole;
	/**
	 * The BuyerUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay user ID of the buyer involved in the dispute.
	 * @var EbayTradingTypeUserIDType
	 */
	public $BuyerUserID;
	/**
	 * The SellerUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay user ID of the seller involved in the dispute.
	 * @var EbayTradingTypeUserIDType
	 */
	public $SellerUserID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the order line item (transaction) under dispute. An order line item is created once there is a commitment from a buyer to purchase an item. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of high-level details about the item involved in the dispute.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The DisputeReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The top-level reason for the dispute. The value of <b>DisputeReason</b> determines which values of <b>DisputeExplanation</b> are valid. See <b>DisputeExplanationCodeList</b> for details.
	 * @var EbayTradingTypeDisputeReasonCodeType
	 */
	public $DisputeReason;
	/**
	 * The DisputeExplanation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The detailed explanation for the dispute. Valid values depend on the value of <b>DisputeReason</b>. See <b>DisputeExplanationCodeList</b> for details.
	 * @var EbayTradingTypeDisputeExplanationCodeType
	 */
	public $DisputeExplanation;
	/**
	 * The DisputeCreditEligibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value to indicate whether or not the seller is currently eligible for a Final Value Fee credit. This tag only indicates credit eligibility and does not mean that the case can be closed. (Credit eligibility determines whether the seller gets the Final Value Fee back when the dispute is closed.) The value is usually eligible until 4 days (for new flow) or 7 days (for old flow) after the dispute was created unless the dispute is closed with buyer payment or Final Value Fee credit has already been granted.
	 * @var EbayTradingTypeDisputeCreditEligibilityCodeType
	 */
	public $DisputeCreditEligibility;
	/**
	 * The DisputeCreatedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the dispute was created, in GMT.
	 * @var dateTime
	 */
	public $DisputeCreatedTime;
	/**
	 * The DisputeModifiedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date and time the dispute was modified, in GMT.
	 * @var dateTime
	 */
	public $DisputeModifiedTime;
	/**
	 * The DisputeResolution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The action resulting from the dispute resolution. The action might include a Final Value Fee credit to the seller, a strike to the buyer, a reversal, or an appeal.
	 * @var EbayTradingTypeDisputeResolutionType
	 */
	public $DisputeResolution;
	/**
	 * The DisputeMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A response or message posted to a dispute, either by an application or by a user on the eBay site.
	 * @var EbayTradingTypeDisputeMessageType
	 */
	public $DisputeMessage;
	/**
	 * The Escalation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the buyer can close a dispute unhappy and escalate it to the eBay Standard Purchase Protection Program. To escalate, the buyer must be eligible for the PPP. Used in Item Not Received disputes.
	 * @var boolean
	 */
	public $Escalation;
	/**
	 * The PurchaseProtection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the buyer is eligible for the eBay Standard Purchase Protection Program. The eligibility rules are described in the eBay site online help. Used in Item Not Received disputes.
	 * @var boolean
	 */
	public $PurchaseProtection;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. In the case of <b>GetDispute</b> and <b>GetUserDisputes</b> responses, this value identifies the order line item involved in the dispute. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @param EbayTradingTypeDisputeRecordTypeCodeType DisputeRecordType
	 * @param EbayTradingTypeDisputeStateCodeType DisputeState
	 * @param EbayTradingTypeDisputeStatusCodeType DisputeStatus
	 * @param EbayTradingTypeTradingRoleCodeType OtherPartyRole
	 * @param string OtherPartyName
	 * @param EbayTradingTypeTradingRoleCodeType UserRole
	 * @param EbayTradingTypeUserIDType BuyerUserID
	 * @param EbayTradingTypeUserIDType SellerUserID
	 * @param string TransactionID
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeDisputeReasonCodeType DisputeReason
	 * @param EbayTradingTypeDisputeExplanationCodeType DisputeExplanation
	 * @param EbayTradingTypeDisputeCreditEligibilityCodeType DisputeCreditEligibility
	 * @param dateTime DisputeCreatedTime
	 * @param dateTime DisputeModifiedTime
	 * @param EbayTradingTypeDisputeResolutionType DisputeResolution
	 * @param EbayTradingTypeDisputeMessageType DisputeMessage
	 * @param boolean Escalation
	 * @param boolean PurchaseProtection
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeDisputeType
	 */
	public function __construct($_DisputeID = null,$_DisputeRecordType = null,$_DisputeState = null,$_DisputeStatus = null,$_OtherPartyRole = null,$_OtherPartyName = null,$_UserRole = null,$_BuyerUserID = null,$_SellerUserID = null,$_TransactionID = null,$_Item = null,$_DisputeReason = null,$_DisputeExplanation = null,$_DisputeCreditEligibility = null,$_DisputeCreatedTime = null,$_DisputeModifiedTime = null,$_DisputeResolution = null,$_DisputeMessage = null,$_Escalation = null,$_PurchaseProtection = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('DisputeID'=>$_DisputeID,'DisputeRecordType'=>$_DisputeRecordType,'DisputeState'=>$_DisputeState,'DisputeStatus'=>$_DisputeStatus,'OtherPartyRole'=>$_OtherPartyRole,'OtherPartyName'=>$_OtherPartyName,'UserRole'=>$_UserRole,'BuyerUserID'=>$_BuyerUserID,'SellerUserID'=>$_SellerUserID,'TransactionID'=>$_TransactionID,'Item'=>$_Item,'DisputeReason'=>$_DisputeReason,'DisputeExplanation'=>$_DisputeExplanation,'DisputeCreditEligibility'=>$_DisputeCreditEligibility,'DisputeCreatedTime'=>$_DisputeCreatedTime,'DisputeModifiedTime'=>$_DisputeModifiedTime,'DisputeResolution'=>$_DisputeResolution,'DisputeMessage'=>$_DisputeMessage,'Escalation'=>$_Escalation,'PurchaseProtection'=>$_PurchaseProtection,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
	}
	/**
	 * Set DisputeID
	 * @param DisputeIDType DisputeID
	 * @return DisputeIDType
	 */
	public function setDisputeID($_DisputeID)
	{
		return ($this->DisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_DisputeID)?$_DisputeID:null);
	}
	/**
	 * Get DisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * Set DisputeRecordType
	 * @param DisputeRecordTypeCodeType DisputeRecordType
	 * @return DisputeRecordTypeCodeType
	 */
	public function setDisputeRecordType($_DisputeRecordType)
	{
		return ($this->DisputeRecordType = EbayTradingTypeDisputeRecordTypeCodeType::valueIsValid($_DisputeRecordType)?$_DisputeRecordType:null);
	}
	/**
	 * Get DisputeRecordType
	 * @return EbayTradingTypeDisputeRecordTypeCodeType
	 */
	public function getDisputeRecordType()
	{
		return $this->DisputeRecordType;
	}
	/**
	 * Set DisputeState
	 * @param DisputeStateCodeType DisputeState
	 * @return DisputeStateCodeType
	 */
	public function setDisputeState($_DisputeState)
	{
		return ($this->DisputeState = EbayTradingTypeDisputeStateCodeType::valueIsValid($_DisputeState)?$_DisputeState:null);
	}
	/**
	 * Get DisputeState
	 * @return EbayTradingTypeDisputeStateCodeType
	 */
	public function getDisputeState()
	{
		return $this->DisputeState;
	}
	/**
	 * Set DisputeStatus
	 * @param DisputeStatusCodeType DisputeStatus
	 * @return DisputeStatusCodeType
	 */
	public function setDisputeStatus($_DisputeStatus)
	{
		return ($this->DisputeStatus = EbayTradingTypeDisputeStatusCodeType::valueIsValid($_DisputeStatus)?$_DisputeStatus:null);
	}
	/**
	 * Get DisputeStatus
	 * @return EbayTradingTypeDisputeStatusCodeType
	 */
	public function getDisputeStatus()
	{
		return $this->DisputeStatus;
	}
	/**
	 * Set OtherPartyRole
	 * @param TradingRoleCodeType OtherPartyRole
	 * @return TradingRoleCodeType
	 */
	public function setOtherPartyRole($_OtherPartyRole)
	{
		return ($this->OtherPartyRole = EbayTradingTypeTradingRoleCodeType::valueIsValid($_OtherPartyRole)?$_OtherPartyRole:null);
	}
	/**
	 * Get OtherPartyRole
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getOtherPartyRole()
	{
		return $this->OtherPartyRole;
	}
	/**
	 * Set OtherPartyName
	 * @param string OtherPartyName
	 * @return string
	 */
	public function setOtherPartyName($_OtherPartyName)
	{
		return ($this->OtherPartyName = $_OtherPartyName);
	}
	/**
	 * Get OtherPartyName
	 * @return string
	 */
	public function getOtherPartyName()
	{
		return $this->OtherPartyName;
	}
	/**
	 * Set UserRole
	 * @param TradingRoleCodeType UserRole
	 * @return TradingRoleCodeType
	 */
	public function setUserRole($_UserRole)
	{
		return ($this->UserRole = EbayTradingTypeTradingRoleCodeType::valueIsValid($_UserRole)?$_UserRole:null);
	}
	/**
	 * Get UserRole
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getUserRole()
	{
		return $this->UserRole;
	}
	/**
	 * Set BuyerUserID
	 * @param UserIDType BuyerUserID
	 * @return UserIDType
	 */
	public function setBuyerUserID($_BuyerUserID)
	{
		return ($this->BuyerUserID = EbayTradingTypeUserIDType::valueIsValid($_BuyerUserID)?$_BuyerUserID:null);
	}
	/**
	 * Get BuyerUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getBuyerUserID()
	{
		return $this->BuyerUserID;
	}
	/**
	 * Set SellerUserID
	 * @param UserIDType SellerUserID
	 * @return UserIDType
	 */
	public function setSellerUserID($_SellerUserID)
	{
		return ($this->SellerUserID = EbayTradingTypeUserIDType::valueIsValid($_SellerUserID)?$_SellerUserID:null);
	}
	/**
	 * Get SellerUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getSellerUserID()
	{
		return $this->SellerUserID;
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
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set DisputeReason
	 * @param DisputeReasonCodeType DisputeReason
	 * @return DisputeReasonCodeType
	 */
	public function setDisputeReason($_DisputeReason)
	{
		return ($this->DisputeReason = EbayTradingTypeDisputeReasonCodeType::valueIsValid($_DisputeReason)?$_DisputeReason:null);
	}
	/**
	 * Get DisputeReason
	 * @return EbayTradingTypeDisputeReasonCodeType
	 */
	public function getDisputeReason()
	{
		return $this->DisputeReason;
	}
	/**
	 * Set DisputeExplanation
	 * @param DisputeExplanationCodeType DisputeExplanation
	 * @return DisputeExplanationCodeType
	 */
	public function setDisputeExplanation($_DisputeExplanation)
	{
		return ($this->DisputeExplanation = EbayTradingTypeDisputeExplanationCodeType::valueIsValid($_DisputeExplanation)?$_DisputeExplanation:null);
	}
	/**
	 * Get DisputeExplanation
	 * @return EbayTradingTypeDisputeExplanationCodeType
	 */
	public function getDisputeExplanation()
	{
		return $this->DisputeExplanation;
	}
	/**
	 * Set DisputeCreditEligibility
	 * @param DisputeCreditEligibilityCodeType DisputeCreditEligibility
	 * @return DisputeCreditEligibilityCodeType
	 */
	public function setDisputeCreditEligibility($_DisputeCreditEligibility)
	{
		return ($this->DisputeCreditEligibility = EbayTradingTypeDisputeCreditEligibilityCodeType::valueIsValid($_DisputeCreditEligibility)?$_DisputeCreditEligibility:null);
	}
	/**
	 * Get DisputeCreditEligibility
	 * @return EbayTradingTypeDisputeCreditEligibilityCodeType
	 */
	public function getDisputeCreditEligibility()
	{
		return $this->DisputeCreditEligibility;
	}
	/**
	 * Set DisputeCreatedTime
	 * @param dateTime DisputeCreatedTime
	 * @return dateTime
	 */
	public function setDisputeCreatedTime($_DisputeCreatedTime)
	{
		return ($this->DisputeCreatedTime = $_DisputeCreatedTime);
	}
	/**
	 * Get DisputeCreatedTime
	 * @return dateTime
	 */
	public function getDisputeCreatedTime()
	{
		return $this->DisputeCreatedTime;
	}
	/**
	 * Set DisputeModifiedTime
	 * @param dateTime DisputeModifiedTime
	 * @return dateTime
	 */
	public function setDisputeModifiedTime($_DisputeModifiedTime)
	{
		return ($this->DisputeModifiedTime = $_DisputeModifiedTime);
	}
	/**
	 * Get DisputeModifiedTime
	 * @return dateTime
	 */
	public function getDisputeModifiedTime()
	{
		return $this->DisputeModifiedTime;
	}
	/**
	 * Set DisputeResolution
	 * @param DisputeResolutionType DisputeResolution
	 * @return DisputeResolutionType
	 */
	public function setDisputeResolution($_DisputeResolution)
	{
		return ($this->DisputeResolution = $_DisputeResolution);
	}
	/**
	 * Get DisputeResolution
	 * @return EbayTradingTypeDisputeResolutionType
	 */
	public function getDisputeResolution()
	{
		return $this->DisputeResolution;
	}
	/**
	 * Set DisputeMessage
	 * @param DisputeMessageType DisputeMessage
	 * @return DisputeMessageType
	 */
	public function setDisputeMessage($_DisputeMessage)
	{
		return ($this->DisputeMessage = $_DisputeMessage);
	}
	/**
	 * Get DisputeMessage
	 * @return EbayTradingTypeDisputeMessageType
	 */
	public function getDisputeMessage()
	{
		return $this->DisputeMessage;
	}
	/**
	 * Set Escalation
	 * @param boolean Escalation
	 * @return boolean
	 */
	public function setEscalation($_Escalation)
	{
		return ($this->Escalation = $_Escalation);
	}
	/**
	 * Get Escalation
	 * @return boolean
	 */
	public function getEscalation()
	{
		return $this->Escalation;
	}
	/**
	 * Set PurchaseProtection
	 * @param boolean PurchaseProtection
	 * @return boolean
	 */
	public function setPurchaseProtection($_PurchaseProtection)
	{
		return ($this->PurchaseProtection = $_PurchaseProtection);
	}
	/**
	 * Get PurchaseProtection
	 * @return boolean
	 */
	public function getPurchaseProtection()
	{
		return $this->PurchaseProtection;
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