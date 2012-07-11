<?php
/**
 * Class file for EbayTradingTypeBuyerRequirementDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerRequirementDetailsType
 * Documentation : Type defining the <b>BuyerRequirementDetails</b> container, which allows the seller to set buyer requirements at the listing level. For the corresponding listing, all buyer requirement values/settings will overwrite values/settings in Buyer Requirements preferences in My eBay.
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerRequirementDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ShipToRegistrationCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller includes and sets this field to 'true' as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call.
	 * @var boolean
	 */
	public $ShipToRegistrationCountry;
	/**
	 * The ZeroFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to 'true' as a mechanism to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher.
	 * @var boolean
	 */
	public $ZeroFeedbackScore;
	/**
	 * The MinimumFeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller includes this field as a mechanism to block bidders who have a feedback score equal to or less than the specified value. The seller should use <b>GeteBayDetails</b> to get valid values for their site. Currently, the valid values for the US site are -3, -2, and -1.
	 * @var int
	 */
	public $MinimumFeedbackScore;
	/**
	 * The MaximumItemRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum Feedback Score.
	 * @var EbayTradingTypeMaximumItemRequirementsType
	 */
	public $MaximumItemRequirements;
	/**
	 * The LinkedPayPalAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller includes and sets this field to 'true' as a mechanism to block bidders who do not have a PayPal account linked to their eBay account.
	 * @var boolean
	 */
	public $LinkedPayPalAccount;
	/**
	 * The VerifiedUserRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller uses this container as a mechanism to block prospective buyers who do not pass a verified user check. <br/><br/> This container is only applicable to the following eBay sites: <ul> <li>Australia</li> <li>France</li> <li>India</li> <li>Ireland</li> <li>Spain</li> <li>UK</li> </ul>
	 * @var EbayTradingTypeVerifiedUserRequirementsType
	 */
	public $VerifiedUserRequirements;
	/**
	 * The MaximumUnpaidItemStrikesInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller uses this container as a mechanism to block prospective buyers who have one or more unpaid item strikes on their account during a specified time period.
	 * @var EbayTradingTypeMaximumUnpaidItemStrikesInfoType
	 */
	public $MaximumUnpaidItemStrikesInfo;
	/**
	 * The MaximumBuyerPolicyViolations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller uses this container as a mechanism to block prospective buyers who have one or more buyer policy violations on their account during a specified time period.
	 * @var EbayTradingTypeMaximumBuyerPolicyViolationsType
	 */
	public $MaximumBuyerPolicyViolations;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean ShipToRegistrationCountry
	 * @param boolean ZeroFeedbackScore
	 * @param int MinimumFeedbackScore
	 * @param EbayTradingTypeMaximumItemRequirementsType MaximumItemRequirements
	 * @param boolean LinkedPayPalAccount
	 * @param EbayTradingTypeVerifiedUserRequirementsType VerifiedUserRequirements
	 * @param EbayTradingTypeMaximumUnpaidItemStrikesInfoType MaximumUnpaidItemStrikesInfo
	 * @param EbayTradingTypeMaximumBuyerPolicyViolationsType MaximumBuyerPolicyViolations
	 * @param DOMDocument any
	 * @return EbayTradingTypeBuyerRequirementDetailsType
	 */
	public function __construct($_ShipToRegistrationCountry = null,$_ZeroFeedbackScore = null,$_MinimumFeedbackScore = null,$_MaximumItemRequirements = null,$_LinkedPayPalAccount = null,$_VerifiedUserRequirements = null,$_MaximumUnpaidItemStrikesInfo = null,$_MaximumBuyerPolicyViolations = null,$_any = null)
	{
		parent::__construct(array('ShipToRegistrationCountry'=>$_ShipToRegistrationCountry,'ZeroFeedbackScore'=>$_ZeroFeedbackScore,'MinimumFeedbackScore'=>$_MinimumFeedbackScore,'MaximumItemRequirements'=>$_MaximumItemRequirements,'LinkedPayPalAccount'=>$_LinkedPayPalAccount,'VerifiedUserRequirements'=>$_VerifiedUserRequirements,'MaximumUnpaidItemStrikesInfo'=>$_MaximumUnpaidItemStrikesInfo,'MaximumBuyerPolicyViolations'=>$_MaximumBuyerPolicyViolations,'any'=>$_any));
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
	 * Set ZeroFeedbackScore
	 * @param boolean ZeroFeedbackScore
	 * @return boolean
	 */
	public function setZeroFeedbackScore($_ZeroFeedbackScore)
	{
		return ($this->ZeroFeedbackScore = $_ZeroFeedbackScore);
	}
	/**
	 * Get ZeroFeedbackScore
	 * @return boolean
	 */
	public function getZeroFeedbackScore()
	{
		return $this->ZeroFeedbackScore;
	}
	/**
	 * Set MinimumFeedbackScore
	 * @param int MinimumFeedbackScore
	 * @return int
	 */
	public function setMinimumFeedbackScore($_MinimumFeedbackScore)
	{
		return ($this->MinimumFeedbackScore = $_MinimumFeedbackScore);
	}
	/**
	 * Get MinimumFeedbackScore
	 * @return int
	 */
	public function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * Set MaximumItemRequirements
	 * @param MaximumItemRequirementsType MaximumItemRequirements
	 * @return MaximumItemRequirementsType
	 */
	public function setMaximumItemRequirements($_MaximumItemRequirements)
	{
		return ($this->MaximumItemRequirements = $_MaximumItemRequirements);
	}
	/**
	 * Get MaximumItemRequirements
	 * @return EbayTradingTypeMaximumItemRequirementsType
	 */
	public function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
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
	 * Set VerifiedUserRequirements
	 * @param VerifiedUserRequirementsType VerifiedUserRequirements
	 * @return VerifiedUserRequirementsType
	 */
	public function setVerifiedUserRequirements($_VerifiedUserRequirements)
	{
		return ($this->VerifiedUserRequirements = $_VerifiedUserRequirements);
	}
	/**
	 * Get VerifiedUserRequirements
	 * @return EbayTradingTypeVerifiedUserRequirementsType
	 */
	public function getVerifiedUserRequirements()
	{
		return $this->VerifiedUserRequirements;
	}
	/**
	 * Set MaximumUnpaidItemStrikesInfo
	 * @param MaximumUnpaidItemStrikesInfoType MaximumUnpaidItemStrikesInfo
	 * @return MaximumUnpaidItemStrikesInfoType
	 */
	public function setMaximumUnpaidItemStrikesInfo($_MaximumUnpaidItemStrikesInfo)
	{
		return ($this->MaximumUnpaidItemStrikesInfo = $_MaximumUnpaidItemStrikesInfo);
	}
	/**
	 * Get MaximumUnpaidItemStrikesInfo
	 * @return EbayTradingTypeMaximumUnpaidItemStrikesInfoType
	 */
	public function getMaximumUnpaidItemStrikesInfo()
	{
		return $this->MaximumUnpaidItemStrikesInfo;
	}
	/**
	 * Set MaximumBuyerPolicyViolations
	 * @param MaximumBuyerPolicyViolationsType MaximumBuyerPolicyViolations
	 * @return MaximumBuyerPolicyViolationsType
	 */
	public function setMaximumBuyerPolicyViolations($_MaximumBuyerPolicyViolations)
	{
		return ($this->MaximumBuyerPolicyViolations = $_MaximumBuyerPolicyViolations);
	}
	/**
	 * Get MaximumBuyerPolicyViolations
	 * @return EbayTradingTypeMaximumBuyerPolicyViolationsType
	 */
	public function getMaximumBuyerPolicyViolations()
	{
		return $this->MaximumBuyerPolicyViolations;
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