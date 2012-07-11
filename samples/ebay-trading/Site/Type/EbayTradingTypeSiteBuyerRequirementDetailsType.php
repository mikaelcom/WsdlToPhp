<?php
/**
 * Class file for EbayTradingTypeSiteBuyerRequirementDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteBuyerRequirementDetailsType
 * Documentation : Type defining the <b>BuyerRequirementDetails</b> container, which is returned in GeteBayDetails, and provides the seller with the buyer requirement features (and applicable values) that are supported by the listing site.
 * @date 04/07/2012
 */
class EbayTradingTypeSiteBuyerRequirementDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The LinkedPayPalAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, it specifies that the site's buyer requirements support PayPal.
	 * @var boolean
	 */
	public $LinkedPayPalAccount;
	/**
	 * The MaximumBuyerPolicyViolations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If provided, blocks bidders who have received the maximum allowed buyer policy violation reports (in a specific time period) from bidding on this item.
	 * @var EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType
	 */
	public $MaximumBuyerPolicyViolations;
	/**
	 * The MaximumItemRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this field is included in your call, you can limit unpaying or low feedback bidders, by setting the MaximumItemCount and MinimumFeedbackScore to define when a bidder is blocked from bidding.
	 * @var EbayTradingTypeMaximumItemRequirementsDetailsType
	 */
	public $MaximumItemRequirements;
	/**
	 * The MaximumUnpaidItemStrikesInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If provided, you can specify a maximum number of unpaid items that will result in blocking bidders who have received the maximum unpaid item strikes (in a specific time period) from bidding on this item.
	 * @var EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType
	 */
	public $MaximumUnpaidItemStrikesInfo;
	/**
	 * The MinimumFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the valid values for blocking bidders with this feedback score or lower.
	 * @var EbayTradingTypeMinimumFeedbackScoreDetailsType
	 */
	public $MinimumFeedbackScore;
	/**
	 * The ShipToRegistrationCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : if true, it specifies if the sites buyer requirements supports ShipToRegistrationCountry.
	 * @var boolean
	 */
	public $ShipToRegistrationCountry;
	/**
	 * The VerifiedUserRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the valid values for limiting unverified bidders.
	 * @var EbayTradingTypeVerifiedUserRequirementsDetailsType
	 */
	public $VerifiedUserRequirements;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean LinkedPayPalAccount
	 * @param EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType MaximumBuyerPolicyViolations
	 * @param EbayTradingTypeMaximumItemRequirementsDetailsType MaximumItemRequirements
	 * @param EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType MaximumUnpaidItemStrikesInfo
	 * @param EbayTradingTypeMinimumFeedbackScoreDetailsType MinimumFeedbackScore
	 * @param boolean ShipToRegistrationCountry
	 * @param EbayTradingTypeVerifiedUserRequirementsDetailsType VerifiedUserRequirements
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeSiteBuyerRequirementDetailsType
	 */
	public function __construct($_LinkedPayPalAccount = null,$_MaximumBuyerPolicyViolations = null,$_MaximumItemRequirements = null,$_MaximumUnpaidItemStrikesInfo = null,$_MinimumFeedbackScore = null,$_ShipToRegistrationCountry = null,$_VerifiedUserRequirements = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('LinkedPayPalAccount'=>$_LinkedPayPalAccount,'MaximumBuyerPolicyViolations'=>$_MaximumBuyerPolicyViolations,'MaximumItemRequirements'=>$_MaximumItemRequirements,'MaximumUnpaidItemStrikesInfo'=>$_MaximumUnpaidItemStrikesInfo,'MinimumFeedbackScore'=>$_MinimumFeedbackScore,'ShipToRegistrationCountry'=>$_ShipToRegistrationCountry,'VerifiedUserRequirements'=>$_VerifiedUserRequirements,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set LinkedPayPalAccount
	 * @param boolean LinkedPayPalAccount
	 * @return boolean
	 */
	public function setLinkedPayPalAccount($_LinkedPayPalAccount)
	{
		return ($this->LinkedPayPalAccount = $_LinkedPayPalAccount);
	}
	/**
	 * Get LinkedPayPalAccount
	 * @return boolean
	 */
	public function getLinkedPayPalAccount()
	{
		return $this->LinkedPayPalAccount;
	}
	/**
	 * Set MaximumBuyerPolicyViolations
	 * @param MaximumBuyerPolicyViolationsDetailsType MaximumBuyerPolicyViolations
	 * @return MaximumBuyerPolicyViolationsDetailsType
	 */
	public function setMaximumBuyerPolicyViolations($_MaximumBuyerPolicyViolations)
	{
		return ($this->MaximumBuyerPolicyViolations = $_MaximumBuyerPolicyViolations);
	}
	/**
	 * Get MaximumBuyerPolicyViolations
	 * @return EbayTradingTypeMaximumBuyerPolicyViolationsDetailsType
	 */
	public function getMaximumBuyerPolicyViolations()
	{
		return $this->MaximumBuyerPolicyViolations;
	}
	/**
	 * Set MaximumItemRequirements
	 * @param MaximumItemRequirementsDetailsType MaximumItemRequirements
	 * @return MaximumItemRequirementsDetailsType
	 */
	public function setMaximumItemRequirements($_MaximumItemRequirements)
	{
		return ($this->MaximumItemRequirements = $_MaximumItemRequirements);
	}
	/**
	 * Get MaximumItemRequirements
	 * @return EbayTradingTypeMaximumItemRequirementsDetailsType
	 */
	public function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
	}
	/**
	 * Set MaximumUnpaidItemStrikesInfo
	 * @param MaximumUnpaidItemStrikesInfoDetailsType MaximumUnpaidItemStrikesInfo
	 * @return MaximumUnpaidItemStrikesInfoDetailsType
	 */
	public function setMaximumUnpaidItemStrikesInfo($_MaximumUnpaidItemStrikesInfo)
	{
		return ($this->MaximumUnpaidItemStrikesInfo = $_MaximumUnpaidItemStrikesInfo);
	}
	/**
	 * Get MaximumUnpaidItemStrikesInfo
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesInfoDetailsType
	 */
	public function getMaximumUnpaidItemStrikesInfo()
	{
		return $this->MaximumUnpaidItemStrikesInfo;
	}
	/**
	 * Set MinimumFeedbackScore
	 * @param MinimumFeedbackScoreDetailsType MinimumFeedbackScore
	 * @return MinimumFeedbackScoreDetailsType
	 */
	public function setMinimumFeedbackScore($_MinimumFeedbackScore)
	{
		return ($this->MinimumFeedbackScore = $_MinimumFeedbackScore);
	}
	/**
	 * Get MinimumFeedbackScore
	 * @return EbayTradingTypeMinimumFeedbackScoreDetailsType
	 */
	public function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * Set ShipToRegistrationCountry
	 * @param boolean ShipToRegistrationCountry
	 * @return boolean
	 */
	public function setShipToRegistrationCountry($_ShipToRegistrationCountry)
	{
		return ($this->ShipToRegistrationCountry = $_ShipToRegistrationCountry);
	}
	/**
	 * Get ShipToRegistrationCountry
	 * @return boolean
	 */
	public function getShipToRegistrationCountry()
	{
		return $this->ShipToRegistrationCountry;
	}
	/**
	 * Set VerifiedUserRequirements
	 * @param VerifiedUserRequirementsDetailsType VerifiedUserRequirements
	 * @return VerifiedUserRequirementsDetailsType
	 */
	public function setVerifiedUserRequirements($_VerifiedUserRequirements)
	{
		return ($this->VerifiedUserRequirements = $_VerifiedUserRequirements);
	}
	/**
	 * Get VerifiedUserRequirements
	 * @return EbayTradingTypeVerifiedUserRequirementsDetailsType
	 */
	public function getVerifiedUserRequirements()
	{
		return $this->VerifiedUserRequirements;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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