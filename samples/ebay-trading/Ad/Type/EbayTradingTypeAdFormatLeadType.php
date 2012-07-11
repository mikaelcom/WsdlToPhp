<?php
/**
 * Class file for EbayTradingTypeAdFormatLeadType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAdFormatLeadType
 * Documentation : Contains prospective buyer contact information and other details associated with a lead for an ad format listing.
 * @date 04/07/2012
 */
class EbayTradingTypeAdFormatLeadType extends EbayTradingWsdlClass
{
	/**
	 * The AdditionalInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Message sent from the prospective buyer to the seller. Same content as in the AdFormatLead.MemberMessage.MemberMessageExchange.Question.Body node (that is only displayed if IncludeMemberMessages = true is included in the request). The advantage of retrieving the MemberMessageExchange node, however, is that you retrieve the entire exchange between the seller and the lead.
	 * @var string
	 */
	public $AdditionalInformation;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Address information for the prospective buyer. Not returned or returned self-closed if information is unavailable.
	 * @var EbayTradingTypeAddressType
	 */
	public $Address;
	/**
	 * The BestTimeToCall
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time of day when the prospective buyer prefers to be contacted by the seller. Not returned if information is unavailable.
	 * @var string
	 */
	public $BestTimeToCall;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address for the prospective buyer. If the prospective buyer chooses to hide his email address when contacting the seller, this element contains two dashes (--) instead of an email address.
	 * @var string
	 */
	public $Email;
	/**
	 * The SubmittedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time (in GMT) that the lead was submitted.
	 * @var dateTime
	 */
	public $SubmittedTime;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the item that the lead is for.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ItemTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the item listing. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title is increasing to 80 characters in Version 735. </span>
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay ID of the user who is interested in the seller's item.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The MemberMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains any mail message content shared between the seller and lead.
	 * @var EbayTradingTypeMemberMessageExchangeArrayType
	 */
	public $MemberMessage;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of the lead.
	 * @var EbayTradingTypeAdFormatLeadStatusCodeType
	 */
	public $Status;
	/**
	 * The LeadFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total fee from email and phone leads. Applies to the item specified in the request. LeadFee is part the pay-per-lead feature.
	 * @var EbayTradingTypeAmountType
	 */
	public $LeadFee;
	/**
	 * The ExternalEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address for the prospective buyer as entered in the lead form on the View Item page. Provides a way for sellers to contact prospective buyers who choose not to log in to eBay. This applies to only eBay Motors and eBay Motors categories.
	 * @var string
	 */
	public $ExternalEmail;
	/**
	 * The PurchaseTimeFrame
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Prospective buyer's time frame for purchasing a vehicle as entered in the Lead form on View Item page for eBay Motors and eBay Motors categories. Purchasing Time Frames include: <ul> <li> within next 3 days </li> <li> within a week </li> <li> within a month </li> <li> within three months </li> <li> in more than three months </li> <li> within an undecided time frame </li> </ul>
	 * @var string
	 */
	public $PurchaseTimeFrame;
	/**
	 * The TradeInYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The year of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
	 * @var string
	 */
	public $TradeInYear;
	/**
	 * The TradeInMake
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The make of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
	 * @var string
	 */
	public $TradeInMake;
	/**
	 * The TradeInModel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The model of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page.Applies to eBay Motors and Motors categories only.
	 * @var string
	 */
	public $TradeInModel;
	/**
	 * The FinancingAnswer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Prospective buyer answer whether or not the prospective buyer would like financing. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only. Financing response meanings: 0= no response,1= yes, 2= no.
	 * @var boolean
	 */
	public $FinancingAnswer;
	/**
	 * The Answer1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field corresponds to a configurable question on the lead form in the View Item web page. The corresponding question is site-specific. To determine the question for a specific site, you must view the form in the web flow for the given site. This field applies to Classified Ad format listings in Motors categories only.
	 * @var boolean
	 */
	public $Answer1;
	/**
	 * The Answer2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field corresponds to a configurable question on the lead form in the View Item web page. The corresponding question is site-specific. To determine the question for a specific site, you must view the form in the web flow for the given site. This field applies to Classified Ad format listings in Motors categories only.
	 * @var boolean
	 */
	public $Answer2;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string AdditionalInformation
	 * @param EbayTradingTypeAddressType Address
	 * @param string BestTimeToCall
	 * @param string Email
	 * @param dateTime SubmittedTime
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string ItemTitle
	 * @param EbayTradingTypeUserIDType UserID
	 * @param EbayTradingTypeMemberMessageExchangeArrayType MemberMessage
	 * @param EbayTradingTypeAdFormatLeadStatusCodeType Status
	 * @param EbayTradingTypeAmountType LeadFee
	 * @param string ExternalEmail
	 * @param string PurchaseTimeFrame
	 * @param string TradeInYear
	 * @param string TradeInMake
	 * @param string TradeInModel
	 * @param boolean FinancingAnswer
	 * @param boolean Answer1
	 * @param boolean Answer2
	 * @param DOMDocument any
	 * @return EbayTradingTypeAdFormatLeadType
	 */
	public function __construct($_AdditionalInformation = null,$_Address = null,$_BestTimeToCall = null,$_Email = null,$_SubmittedTime = null,$_ItemID = null,$_ItemTitle = null,$_UserID = null,$_MemberMessage = null,$_Status = null,$_LeadFee = null,$_ExternalEmail = null,$_PurchaseTimeFrame = null,$_TradeInYear = null,$_TradeInMake = null,$_TradeInModel = null,$_FinancingAnswer = null,$_Answer1 = null,$_Answer2 = null,$_any = null)
	{
		parent::__construct(array('AdditionalInformation'=>$_AdditionalInformation,'Address'=>$_Address,'BestTimeToCall'=>$_BestTimeToCall,'Email'=>$_Email,'SubmittedTime'=>$_SubmittedTime,'ItemID'=>$_ItemID,'ItemTitle'=>$_ItemTitle,'UserID'=>$_UserID,'MemberMessage'=>$_MemberMessage,'Status'=>$_Status,'LeadFee'=>$_LeadFee,'ExternalEmail'=>$_ExternalEmail,'PurchaseTimeFrame'=>$_PurchaseTimeFrame,'TradeInYear'=>$_TradeInYear,'TradeInMake'=>$_TradeInMake,'TradeInModel'=>$_TradeInModel,'FinancingAnswer'=>$_FinancingAnswer,'Answer1'=>$_Answer1,'Answer2'=>$_Answer2,'any'=>$_any));
	}
	/**
	 * Set AdditionalInformation
	 * @param string AdditionalInformation
	 * @return string
	 */
	public function setAdditionalInformation($_AdditionalInformation)
	{
		return ($this->AdditionalInformation = $_AdditionalInformation);
	}
	/**
	 * Get AdditionalInformation
	 * @return string
	 */
	public function getAdditionalInformation()
	{
		return $this->AdditionalInformation;
	}
	/**
	 * Set Address
	 * @param AddressType Address
	 * @return AddressType
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return EbayTradingTypeAddressType
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set BestTimeToCall
	 * @param string BestTimeToCall
	 * @return string
	 */
	public function setBestTimeToCall($_BestTimeToCall)
	{
		return ($this->BestTimeToCall = $_BestTimeToCall);
	}
	/**
	 * Get BestTimeToCall
	 * @return string
	 */
	public function getBestTimeToCall()
	{
		return $this->BestTimeToCall;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set SubmittedTime
	 * @param dateTime SubmittedTime
	 * @return dateTime
	 */
	public function setSubmittedTime($_SubmittedTime)
	{
		return ($this->SubmittedTime = $_SubmittedTime);
	}
	/**
	 * Get SubmittedTime
	 * @return dateTime
	 */
	public function getSubmittedTime()
	{
		return $this->SubmittedTime;
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
	 * Set ItemTitle
	 * @param string ItemTitle
	 * @return string
	 */
	public function setItemTitle($_ItemTitle)
	{
		return ($this->ItemTitle = $_ItemTitle);
	}
	/**
	 * Get ItemTitle
	 * @return string
	 */
	public function getItemTitle()
	{
		return $this->ItemTitle;
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
	 * Set MemberMessage
	 * @param MemberMessageExchangeArrayType MemberMessage
	 * @return MemberMessageExchangeArrayType
	 */
	public function setMemberMessage($_MemberMessage)
	{
		return ($this->MemberMessage = $_MemberMessage);
	}
	/**
	 * Get MemberMessage
	 * @return EbayTradingTypeMemberMessageExchangeArrayType
	 */
	public function getMemberMessage()
	{
		return $this->MemberMessage;
	}
	/**
	 * Set Status
	 * @param AdFormatLeadStatusCodeType Status
	 * @return AdFormatLeadStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeAdFormatLeadStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeAdFormatLeadStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set LeadFee
	 * @param AmountType LeadFee
	 * @return AmountType
	 */
	public function setLeadFee($_LeadFee)
	{
		return ($this->LeadFee = $_LeadFee);
	}
	/**
	 * Get LeadFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getLeadFee()
	{
		return $this->LeadFee;
	}
	/**
	 * Set ExternalEmail
	 * @param string ExternalEmail
	 * @return string
	 */
	public function setExternalEmail($_ExternalEmail)
	{
		return ($this->ExternalEmail = $_ExternalEmail);
	}
	/**
	 * Get ExternalEmail
	 * @return string
	 */
	public function getExternalEmail()
	{
		return $this->ExternalEmail;
	}
	/**
	 * Set PurchaseTimeFrame
	 * @param string PurchaseTimeFrame
	 * @return string
	 */
	public function setPurchaseTimeFrame($_PurchaseTimeFrame)
	{
		return ($this->PurchaseTimeFrame = $_PurchaseTimeFrame);
	}
	/**
	 * Get PurchaseTimeFrame
	 * @return string
	 */
	public function getPurchaseTimeFrame()
	{
		return $this->PurchaseTimeFrame;
	}
	/**
	 * Set TradeInYear
	 * @param string TradeInYear
	 * @return string
	 */
	public function setTradeInYear($_TradeInYear)
	{
		return ($this->TradeInYear = $_TradeInYear);
	}
	/**
	 * Get TradeInYear
	 * @return string
	 */
	public function getTradeInYear()
	{
		return $this->TradeInYear;
	}
	/**
	 * Set TradeInMake
	 * @param string TradeInMake
	 * @return string
	 */
	public function setTradeInMake($_TradeInMake)
	{
		return ($this->TradeInMake = $_TradeInMake);
	}
	/**
	 * Get TradeInMake
	 * @return string
	 */
	public function getTradeInMake()
	{
		return $this->TradeInMake;
	}
	/**
	 * Set TradeInModel
	 * @param string TradeInModel
	 * @return string
	 */
	public function setTradeInModel($_TradeInModel)
	{
		return ($this->TradeInModel = $_TradeInModel);
	}
	/**
	 * Get TradeInModel
	 * @return string
	 */
	public function getTradeInModel()
	{
		return $this->TradeInModel;
	}
	/**
	 * Set FinancingAnswer
	 * @param boolean FinancingAnswer
	 * @return boolean
	 */
	public function setFinancingAnswer($_FinancingAnswer)
	{
		return ($this->FinancingAnswer = $_FinancingAnswer);
	}
	/**
	 * Get FinancingAnswer
	 * @return boolean
	 */
	public function getFinancingAnswer()
	{
		return $this->FinancingAnswer;
	}
	/**
	 * Set Answer1
	 * @param boolean Answer1
	 * @return boolean
	 */
	public function setAnswer1($_Answer1)
	{
		return ($this->Answer1 = $_Answer1);
	}
	/**
	 * Get Answer1
	 * @return boolean
	 */
	public function getAnswer1()
	{
		return $this->Answer1;
	}
	/**
	 * Set Answer2
	 * @param boolean Answer2
	 * @return boolean
	 */
	public function setAnswer2($_Answer2)
	{
		return ($this->Answer2 = $_Answer2);
	}
	/**
	 * Get Answer2
	 * @return boolean
	 */
	public function getAnswer2()
	{
		return $this->Answer2;
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