<?php
/**
 * Class file for PayPalTypeIncentiveDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeIncentiveDetailsType
 * Documentation : Information about the incentives that were applied from Ebay RYP page and PayPal RYP page.
 * @date 14/07/2012
 */
class PayPalTypeIncentiveDetailsType extends PayPalWsdlClass
{
	/**
	 * The UniqueIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique Identifier consisting of redemption code, user friendly descripotion, incentive type, campaign code, incenitve application order and site redeemed on.
	 * @var string
	 */
	public $UniqueIdentifier;
	/**
	 * The SiteAppliedOn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Defines if the incentive has been applied on Ebay or PayPal.
	 * @var PayPalTypeIncentiveSiteAppliedOnType
	 */
	public $SiteAppliedOn;
	/**
	 * The TotalDiscountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The total discount amount for the incentive, summation of discounts up across all the buckets/items.
	 * @var PayPalTypeBasicAmountType
	 */
	public $TotalDiscountAmount;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Status of incentive processing. Sussess or Error.
	 * @var PayPalTypeIncentiveAppliedStatusType
	 */
	public $Status;
	/**
	 * The ErrorCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Error code if there are any errors. Zero otherwise.
	 * @var integer
	 */
	public $ErrorCode;
	/**
	 * The IncentiveAppliedDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details of incentive application on individual bucket/item.
	 * @var PayPalTypeIncentiveAppliedDetailsType
	 */
	public $IncentiveAppliedDetails;
	/**
	 * Constructor
	 * @param string UniqueIdentifier
	 * @param PayPalTypeIncentiveSiteAppliedOnType SiteAppliedOn
	 * @param PayPalTypeBasicAmountType TotalDiscountAmount
	 * @param PayPalTypeIncentiveAppliedStatusType Status
	 * @param integer ErrorCode
	 * @param PayPalTypeIncentiveAppliedDetailsType IncentiveAppliedDetails
	 * @return PayPalTypeIncentiveDetailsType
	 */
	public function __construct($_UniqueIdentifier = null,$_SiteAppliedOn = null,$_TotalDiscountAmount = null,$_Status = null,$_ErrorCode = null,$_IncentiveAppliedDetails = null)
	{
		parent::__construct(array('UniqueIdentifier'=>$_UniqueIdentifier,'SiteAppliedOn'=>$_SiteAppliedOn,'TotalDiscountAmount'=>$_TotalDiscountAmount,'Status'=>$_Status,'ErrorCode'=>$_ErrorCode,'IncentiveAppliedDetails'=>$_IncentiveAppliedDetails));
	}
	/**
	 * Set UniqueIdentifier
	 * @param string UniqueIdentifier
	 * @return string
	 */
	public function setUniqueIdentifier($_UniqueIdentifier)
	{
		return ($this->UniqueIdentifier = $_UniqueIdentifier);
	}
	/**
	 * Get UniqueIdentifier
	 * @return string
	 */
	public function getUniqueIdentifier()
	{
		return $this->UniqueIdentifier;
	}
	/**
	 * Set SiteAppliedOn
	 * @param IncentiveSiteAppliedOnType SiteAppliedOn
	 * @return IncentiveSiteAppliedOnType
	 */
	public function setSiteAppliedOn($_SiteAppliedOn)
	{
		return ($this->SiteAppliedOn = PayPalTypeIncentiveSiteAppliedOnType::valueIsValid($_SiteAppliedOn)?$_SiteAppliedOn:null);
	}
	/**
	 * Get SiteAppliedOn
	 * @return PayPalTypeIncentiveSiteAppliedOnType
	 */
	public function getSiteAppliedOn()
	{
		return $this->SiteAppliedOn;
	}
	/**
	 * Set TotalDiscountAmount
	 * @param BasicAmountType TotalDiscountAmount
	 * @return BasicAmountType
	 */
	public function setTotalDiscountAmount($_TotalDiscountAmount)
	{
		return ($this->TotalDiscountAmount = $_TotalDiscountAmount);
	}
	/**
	 * Get TotalDiscountAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTotalDiscountAmount()
	{
		return $this->TotalDiscountAmount;
	}
	/**
	 * Set Status
	 * @param IncentiveAppliedStatusType Status
	 * @return IncentiveAppliedStatusType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = PayPalTypeIncentiveAppliedStatusType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return PayPalTypeIncentiveAppliedStatusType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set ErrorCode
	 * @param integer ErrorCode
	 * @return integer
	 */
	public function setErrorCode($_ErrorCode)
	{
		return ($this->ErrorCode = $_ErrorCode);
	}
	/**
	 * Get ErrorCode
	 * @return integer
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * Set IncentiveAppliedDetails
	 * @param IncentiveAppliedDetailsType IncentiveAppliedDetails
	 * @return IncentiveAppliedDetailsType
	 */
	public function setIncentiveAppliedDetails($_IncentiveAppliedDetails)
	{
		return ($this->IncentiveAppliedDetails = $_IncentiveAppliedDetails);
	}
	/**
	 * Get IncentiveAppliedDetails
	 * @return PayPalTypeIncentiveAppliedDetailsType
	 */
	public function getIncentiveAppliedDetails()
	{
		return $this->IncentiveAppliedDetails;
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