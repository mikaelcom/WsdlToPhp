<?php
/**
 * Class file for PayPalTypeGetBoardingDetailsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetBoardingDetailsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetBoardingDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- documentation : Status of merchant's onboarding process: CompletedCancelledPending Character length and limitations: Eight alphabetic characters
	 * @var PayPalTypeBoardingStatusType
	 */
	public $Status;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- documentation : Date the boarding process started
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The LastUpdated
	 * Meta informations :
	 * 	- documentation : Date the merchant’s status or progress was last updated
	 * @var dateTime
	 */
	public $LastUpdated;
	/**
	 * The Reason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reason for merchant’s cancellation of sign-up. Character length and limitations: 1,024 alphanumeric characters
	 * @var string
	 */
	public $Reason;
	/**
	 * The ProgramName
	 * @var string
	 */
	public $ProgramName;
	/**
	 * The ProgramCode
	 * @var string
	 */
	public $ProgramCode;
	/**
	 * The CampaignID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CampaignID;
	/**
	 * The UserWithdrawalLimit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if there is a limitation on the amount of money the business can withdraw from PayPal
	 * @var PayPalTypeUserWithdrawalLimitTypeType
	 */
	public $UserWithdrawalLimit;
	/**
	 * The PartnerCustom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom information you set on the EnterBoarding API call Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $PartnerCustom;
	/**
	 * The AccountOwner
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about the owner of the account
	 * @var PayPalTypePayerInfoType
	 */
	public $AccountOwner;
	/**
	 * The Credentials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Merchant’s PayPal API credentials
	 * @var PayPalTypeAPICredentialsType
	 */
	public $Credentials;
	/**
	 * The ConfigureAPIs
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The APIs that this merchant has granted the business partner permission to call on his behalf. For example: SetExpressCheckout,GetExpressCheckoutDetails,DoExpressCheckoutPayment
	 * @var string
	 */
	public $ConfigureAPIs;
	/**
	 * The EmailVerificationStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Primary email verification status. Confirmed, Unconfirmed
	 * @var string
	 */
	public $EmailVerificationStatus;
	/**
	 * The VettingStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives VettingStatus - Pending, Cancelled, Approved, UnderReview Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $VettingStatus;
	/**
	 * The BankAccountVerificationStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives BankAccountVerificationStatus - Added, Confirmed Character length and limitations: 256 alphanumeric characters
	 * @var string
	 */
	public $BankAccountVerificationStatus;
	/**
	 * Constructor
	 * @param PayPalTypeBoardingStatusType Status
	 * @param dateTime StartDate
	 * @param dateTime LastUpdated
	 * @param string Reason
	 * @param string ProgramName
	 * @param string ProgramCode
	 * @param string CampaignID
	 * @param PayPalTypeUserWithdrawalLimitTypeType UserWithdrawalLimit
	 * @param string PartnerCustom
	 * @param PayPalTypePayerInfoType AccountOwner
	 * @param PayPalTypeAPICredentialsType Credentials
	 * @param string ConfigureAPIs
	 * @param string EmailVerificationStatus
	 * @param string VettingStatus
	 * @param string BankAccountVerificationStatus
	 * @return PayPalTypeGetBoardingDetailsResponseDetailsType
	 */
	public function __construct($_Status = null,$_StartDate = null,$_LastUpdated = null,$_Reason = null,$_ProgramName = null,$_ProgramCode = null,$_CampaignID = null,$_UserWithdrawalLimit = null,$_PartnerCustom = null,$_AccountOwner = null,$_Credentials = null,$_ConfigureAPIs = null,$_EmailVerificationStatus = null,$_VettingStatus = null,$_BankAccountVerificationStatus = null)
	{
		parent::__construct(array('Status'=>$_Status,'StartDate'=>$_StartDate,'LastUpdated'=>$_LastUpdated,'Reason'=>$_Reason,'ProgramName'=>$_ProgramName,'ProgramCode'=>$_ProgramCode,'CampaignID'=>$_CampaignID,'UserWithdrawalLimit'=>$_UserWithdrawalLimit,'PartnerCustom'=>$_PartnerCustom,'AccountOwner'=>$_AccountOwner,'Credentials'=>$_Credentials,'ConfigureAPIs'=>$_ConfigureAPIs,'EmailVerificationStatus'=>$_EmailVerificationStatus,'VettingStatus'=>$_VettingStatus,'BankAccountVerificationStatus'=>$_BankAccountVerificationStatus));
	}
	/**
	 * Set Status
	 * @param BoardingStatusType Status
	 * @return BoardingStatusType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = PayPalTypeBoardingStatusType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return PayPalTypeBoardingStatusType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set StartDate
	 * @param dateTime StartDate
	 * @return dateTime
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set LastUpdated
	 * @param dateTime LastUpdated
	 * @return dateTime
	 */
	public function setLastUpdated($_LastUpdated)
	{
		return ($this->LastUpdated = $_LastUpdated);
	}
	/**
	 * Get LastUpdated
	 * @return dateTime
	 */
	public function getLastUpdated()
	{
		return $this->LastUpdated;
	}
	/**
	 * Set Reason
	 * @param string Reason
	 * @return string
	 */
	public function setReason($_Reason)
	{
		return ($this->Reason = $_Reason);
	}
	/**
	 * Get Reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->Reason;
	}
	/**
	 * Set ProgramName
	 * @param string ProgramName
	 * @return string
	 */
	public function setProgramName($_ProgramName)
	{
		return ($this->ProgramName = $_ProgramName);
	}
	/**
	 * Get ProgramName
	 * @return string
	 */
	public function getProgramName()
	{
		return $this->ProgramName;
	}
	/**
	 * Set ProgramCode
	 * @param string ProgramCode
	 * @return string
	 */
	public function setProgramCode($_ProgramCode)
	{
		return ($this->ProgramCode = $_ProgramCode);
	}
	/**
	 * Get ProgramCode
	 * @return string
	 */
	public function getProgramCode()
	{
		return $this->ProgramCode;
	}
	/**
	 * Set CampaignID
	 * @param string CampaignID
	 * @return string
	 */
	public function setCampaignID($_CampaignID)
	{
		return ($this->CampaignID = $_CampaignID);
	}
	/**
	 * Get CampaignID
	 * @return string
	 */
	public function getCampaignID()
	{
		return $this->CampaignID;
	}
	/**
	 * Set UserWithdrawalLimit
	 * @param UserWithdrawalLimitTypeType UserWithdrawalLimit
	 * @return UserWithdrawalLimitTypeType
	 */
	public function setUserWithdrawalLimit($_UserWithdrawalLimit)
	{
		return ($this->UserWithdrawalLimit = PayPalTypeUserWithdrawalLimitTypeType::valueIsValid($_UserWithdrawalLimit)?$_UserWithdrawalLimit:null);
	}
	/**
	 * Get UserWithdrawalLimit
	 * @return PayPalTypeUserWithdrawalLimitTypeType
	 */
	public function getUserWithdrawalLimit()
	{
		return $this->UserWithdrawalLimit;
	}
	/**
	 * Set PartnerCustom
	 * @param string PartnerCustom
	 * @return string
	 */
	public function setPartnerCustom($_PartnerCustom)
	{
		return ($this->PartnerCustom = $_PartnerCustom);
	}
	/**
	 * Get PartnerCustom
	 * @return string
	 */
	public function getPartnerCustom()
	{
		return $this->PartnerCustom;
	}
	/**
	 * Set AccountOwner
	 * @param PayerInfoType AccountOwner
	 * @return PayerInfoType
	 */
	public function setAccountOwner($_AccountOwner)
	{
		return ($this->AccountOwner = $_AccountOwner);
	}
	/**
	 * Get AccountOwner
	 * @return PayPalTypePayerInfoType
	 */
	public function getAccountOwner()
	{
		return $this->AccountOwner;
	}
	/**
	 * Set Credentials
	 * @param APICredentialsType Credentials
	 * @return APICredentialsType
	 */
	public function setCredentials($_Credentials)
	{
		return ($this->Credentials = $_Credentials);
	}
	/**
	 * Get Credentials
	 * @return PayPalTypeAPICredentialsType
	 */
	public function getCredentials()
	{
		return $this->Credentials;
	}
	/**
	 * Set ConfigureAPIs
	 * @param string ConfigureAPIs
	 * @return string
	 */
	public function setConfigureAPIs($_ConfigureAPIs)
	{
		return ($this->ConfigureAPIs = $_ConfigureAPIs);
	}
	/**
	 * Get ConfigureAPIs
	 * @return string
	 */
	public function getConfigureAPIs()
	{
		return $this->ConfigureAPIs;
	}
	/**
	 * Set EmailVerificationStatus
	 * @param string EmailVerificationStatus
	 * @return string
	 */
	public function setEmailVerificationStatus($_EmailVerificationStatus)
	{
		return ($this->EmailVerificationStatus = $_EmailVerificationStatus);
	}
	/**
	 * Get EmailVerificationStatus
	 * @return string
	 */
	public function getEmailVerificationStatus()
	{
		return $this->EmailVerificationStatus;
	}
	/**
	 * Set VettingStatus
	 * @param string VettingStatus
	 * @return string
	 */
	public function setVettingStatus($_VettingStatus)
	{
		return ($this->VettingStatus = $_VettingStatus);
	}
	/**
	 * Get VettingStatus
	 * @return string
	 */
	public function getVettingStatus()
	{
		return $this->VettingStatus;
	}
	/**
	 * Set BankAccountVerificationStatus
	 * @param string BankAccountVerificationStatus
	 * @return string
	 */
	public function setBankAccountVerificationStatus($_BankAccountVerificationStatus)
	{
		return ($this->BankAccountVerificationStatus = $_BankAccountVerificationStatus);
	}
	/**
	 * Get BankAccountVerificationStatus
	 * @return string
	 */
	public function getBankAccountVerificationStatus()
	{
		return $this->BankAccountVerificationStatus;
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