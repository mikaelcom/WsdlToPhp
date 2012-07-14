<?php
/**
 * Class file for PayPalTypeUserType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUserType
 * @date 14/07/2012
 */
class PayPalTypeUserType extends PayPalWsdlClass
{
	/**
	 * The AboutMePage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $AboutMePage;
	/**
	 * The EAISToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $EAISToken;
	/**
	 * The Email
	 * @var string
	 */
	public $Email;
	/**
	 * The FeedbackScore
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The FeedbackPrivate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $FeedbackPrivate;
	/**
	 * The FeedbackRatingStar
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeFeedbackRatingStarCodeType
	 */
	public $FeedbackRatingStar;
	/**
	 * The IDVerified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IDVerified;
	/**
	 * The NewUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $NewUser;
	/**
	 * The RegistrationAddress
	 * @var PayPalTypeAddressType
	 */
	public $RegistrationAddress;
	/**
	 * The RegistrationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $RegistrationDate;
	/**
	 * The Site
	 * @var PayPalTypeSiteCodeType
	 */
	public $Site;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeUserStatusCodeType
	 */
	public $Status;
	/**
	 * The UserID
	 * @var PayPalTypeUserIDType
	 */
	public $UserID;
	/**
	 * The UserIDChanged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $UserIDChanged;
	/**
	 * The UserIDLastChanged
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $UserIDLastChanged;
	/**
	 * The VATStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If present, indicates whether or not the user is subject to VAT. Users who have registered with eBay as VAT-exempt are not subject to VAT. See Value-Added Tax (VAT). Not returned for users whose country of residence is outside the EU. Possible values for the user's status: 2 = Residence in an EU country but user registered as VAT-exempt 3 = Residence in an EU country and user not registered as VAT-exempt
	 * @var PayPalTypeVATStatusCodeType
	 */
	public $VATStatus;
	/**
	 * The BuyerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeBuyerType
	 */
	public $BuyerInfo;
	/**
	 * The SellerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeSellerType
	 */
	public $SellerInfo;
	/**
	 * Constructor
	 * @param boolean AboutMePage
	 * @param string EAISToken
	 * @param string Email
	 * @param int FeedbackScore
	 * @param boolean FeedbackPrivate
	 * @param PayPalTypeFeedbackRatingStarCodeType FeedbackRatingStar
	 * @param boolean IDVerified
	 * @param boolean NewUser
	 * @param PayPalTypeAddressType RegistrationAddress
	 * @param dateTime RegistrationDate
	 * @param PayPalTypeSiteCodeType Site
	 * @param PayPalTypeUserStatusCodeType Status
	 * @param PayPalTypeUserIDType UserID
	 * @param boolean UserIDChanged
	 * @param dateTime UserIDLastChanged
	 * @param PayPalTypeVATStatusCodeType VATStatus
	 * @param PayPalTypeBuyerType BuyerInfo
	 * @param PayPalTypeSellerType SellerInfo
	 * @return PayPalTypeUserType
	 */
	public function __construct($_AboutMePage = null,$_EAISToken = null,$_Email = null,$_FeedbackScore = null,$_FeedbackPrivate = null,$_FeedbackRatingStar = null,$_IDVerified = null,$_NewUser = null,$_RegistrationAddress = null,$_RegistrationDate = null,$_Site = null,$_Status = null,$_UserID = null,$_UserIDChanged = null,$_UserIDLastChanged = null,$_VATStatus = null,$_BuyerInfo = null,$_SellerInfo = null)
	{
		parent::__construct(array('AboutMePage'=>$_AboutMePage,'EAISToken'=>$_EAISToken,'Email'=>$_Email,'FeedbackScore'=>$_FeedbackScore,'FeedbackPrivate'=>$_FeedbackPrivate,'FeedbackRatingStar'=>$_FeedbackRatingStar,'IDVerified'=>$_IDVerified,'NewUser'=>$_NewUser,'RegistrationAddress'=>$_RegistrationAddress,'RegistrationDate'=>$_RegistrationDate,'Site'=>$_Site,'Status'=>$_Status,'UserID'=>$_UserID,'UserIDChanged'=>$_UserIDChanged,'UserIDLastChanged'=>$_UserIDLastChanged,'VATStatus'=>$_VATStatus,'BuyerInfo'=>$_BuyerInfo,'SellerInfo'=>$_SellerInfo));
	}
	/**
	 * Set AboutMePage
	 * @param boolean AboutMePage
	 * @return boolean
	 */
	public function setAboutMePage($_AboutMePage)
	{
		return ($this->AboutMePage = $_AboutMePage);
	}
	/**
	 * Get AboutMePage
	 * @return boolean
	 */
	public function getAboutMePage()
	{
		return $this->AboutMePage;
	}
	/**
	 * Set EAISToken
	 * @param string EAISToken
	 * @return string
	 */
	public function setEAISToken($_EAISToken)
	{
		return ($this->EAISToken = $_EAISToken);
	}
	/**
	 * Get EAISToken
	 * @return string
	 */
	public function getEAISToken()
	{
		return $this->EAISToken;
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
	 * Set FeedbackPrivate
	 * @param boolean FeedbackPrivate
	 * @return boolean
	 */
	public function setFeedbackPrivate($_FeedbackPrivate)
	{
		return ($this->FeedbackPrivate = $_FeedbackPrivate);
	}
	/**
	 * Get FeedbackPrivate
	 * @return boolean
	 */
	public function getFeedbackPrivate()
	{
		return $this->FeedbackPrivate;
	}
	/**
	 * Set FeedbackRatingStar
	 * @param FeedbackRatingStarCodeType FeedbackRatingStar
	 * @return FeedbackRatingStarCodeType
	 */
	public function setFeedbackRatingStar($_FeedbackRatingStar)
	{
		return ($this->FeedbackRatingStar = PayPalTypeFeedbackRatingStarCodeType::valueIsValid($_FeedbackRatingStar)?$_FeedbackRatingStar:null);
	}
	/**
	 * Get FeedbackRatingStar
	 * @return PayPalTypeFeedbackRatingStarCodeType
	 */
	public function getFeedbackRatingStar()
	{
		return $this->FeedbackRatingStar;
	}
	/**
	 * Set IDVerified
	 * @param boolean IDVerified
	 * @return boolean
	 */
	public function setIDVerified($_IDVerified)
	{
		return ($this->IDVerified = $_IDVerified);
	}
	/**
	 * Get IDVerified
	 * @return boolean
	 */
	public function getIDVerified()
	{
		return $this->IDVerified;
	}
	/**
	 * Set NewUser
	 * @param boolean NewUser
	 * @return boolean
	 */
	public function setNewUser($_NewUser)
	{
		return ($this->NewUser = $_NewUser);
	}
	/**
	 * Get NewUser
	 * @return boolean
	 */
	public function getNewUser()
	{
		return $this->NewUser;
	}
	/**
	 * Set RegistrationAddress
	 * @param AddressType RegistrationAddress
	 * @return AddressType
	 */
	public function setRegistrationAddress($_RegistrationAddress)
	{
		return ($this->RegistrationAddress = $_RegistrationAddress);
	}
	/**
	 * Get RegistrationAddress
	 * @return PayPalTypeAddressType
	 */
	public function getRegistrationAddress()
	{
		return $this->RegistrationAddress;
	}
	/**
	 * Set RegistrationDate
	 * @param dateTime RegistrationDate
	 * @return dateTime
	 */
	public function setRegistrationDate($_RegistrationDate)
	{
		return ($this->RegistrationDate = $_RegistrationDate);
	}
	/**
	 * Get RegistrationDate
	 * @return dateTime
	 */
	public function getRegistrationDate()
	{
		return $this->RegistrationDate;
	}
	/**
	 * Set Site
	 * @param SiteCodeType Site
	 * @return SiteCodeType
	 */
	public function setSite($_Site)
	{
		return ($this->Site = PayPalTypeSiteCodeType::valueIsValid($_Site)?$_Site:null);
	}
	/**
	 * Get Site
	 * @return PayPalTypeSiteCodeType
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set Status
	 * @param UserStatusCodeType Status
	 * @return UserStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = PayPalTypeUserStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return PayPalTypeUserStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = PayPalTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return PayPalTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set UserIDChanged
	 * @param boolean UserIDChanged
	 * @return boolean
	 */
	public function setUserIDChanged($_UserIDChanged)
	{
		return ($this->UserIDChanged = $_UserIDChanged);
	}
	/**
	 * Get UserIDChanged
	 * @return boolean
	 */
	public function getUserIDChanged()
	{
		return $this->UserIDChanged;
	}
	/**
	 * Set UserIDLastChanged
	 * @param dateTime UserIDLastChanged
	 * @return dateTime
	 */
	public function setUserIDLastChanged($_UserIDLastChanged)
	{
		return ($this->UserIDLastChanged = $_UserIDLastChanged);
	}
	/**
	 * Get UserIDLastChanged
	 * @return dateTime
	 */
	public function getUserIDLastChanged()
	{
		return $this->UserIDLastChanged;
	}
	/**
	 * Set VATStatus
	 * @param VATStatusCodeType VATStatus
	 * @return VATStatusCodeType
	 */
	public function setVATStatus($_VATStatus)
	{
		return ($this->VATStatus = PayPalTypeVATStatusCodeType::valueIsValid($_VATStatus)?$_VATStatus:null);
	}
	/**
	 * Get VATStatus
	 * @return PayPalTypeVATStatusCodeType
	 */
	public function getVATStatus()
	{
		return $this->VATStatus;
	}
	/**
	 * Set BuyerInfo
	 * @param BuyerType BuyerInfo
	 * @return BuyerType
	 */
	public function setBuyerInfo($_BuyerInfo)
	{
		return ($this->BuyerInfo = $_BuyerInfo);
	}
	/**
	 * Get BuyerInfo
	 * @return PayPalTypeBuyerType
	 */
	public function getBuyerInfo()
	{
		return $this->BuyerInfo;
	}
	/**
	 * Set SellerInfo
	 * @param SellerType SellerInfo
	 * @return SellerType
	 */
	public function setSellerInfo($_SellerInfo)
	{
		return ($this->SellerInfo = $_SellerInfo);
	}
	/**
	 * Get SellerInfo
	 * @return PayPalTypeSellerType
	 */
	public function getSellerInfo()
	{
		return $this->SellerInfo;
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