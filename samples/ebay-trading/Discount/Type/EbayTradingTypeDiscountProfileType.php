<?php
/**
 * Class file for EbayTradingTypeDiscountProfileType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDiscountProfileType
 * Documentation : Details of a flat or calculated shipping discount profile.
 * @date 04/07/2012
 */
class EbayTradingTypeDiscountProfileType extends EbayTradingWsdlClass
{
	/**
	 * The DiscountProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique eBay-created ID for the shipping discount, assigned when the profile is created. On input, if ModifyActionCode is Add, this is ignored if provided. If ModifyActionCode is Modify, all details of the new version of the profile must be provided. If ModifyActionCode is Delete, DiscountProfileID is required, MappingDiscountProfileID is optional, and all other fields of DiscountProfile are ignored.
	 * @var string
	 */
	public $DiscountProfileID;
	/**
	 * The DiscountProfileName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's title for this profile. On input, if ModifyActionCode is Add, this is ignored (if provided) if this is the first profile being created and required if there is more than one profile of that type (flat rate versus calculated) already. To modify the name, set ModifyActionCode to Update and provide all details for the profile. On output, DiscountProfileName is only returned if the user defined more than one profile.
	 * @var string
	 */
	public $DiscountProfileName;
	/**
	 * The EachAdditionalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount, if the seller specified EachAdditionalAmount as the type of profile, as noted in FlatShippingDiscount.DiscountName. Flat rate shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $EachAdditionalAmount;
	/**
	 * The EachAdditionalAmountOff
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount, if the seller specified EachAdditionalAmountOff as the type of profile, as noted in FlatShippingDiscount.DiscountName. Flat rate shipping only.
	 * @var EbayTradingTypeAmountType
	 */
	public $EachAdditionalAmountOff;
	/**
	 * The EachAdditionalPercentOff
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The percent (expressed in decimal, as in .5 for 50%), if the seller specified EachAdditionalPercentOff as the type of profile, as noted in FlatShippingDiscount.DiscountName. Flat rate shipping only.
	 * @var float
	 */
	public $EachAdditionalPercentOff;
	/**
	 * The WeightOff
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The weight by which to reduce the combined item weight, if the seller specified WeightOff as the type of profile, as noted in CalculatedShippingDiscount.DiscountName. The smallest unit is used (e.g. ounces). Calculated shipping only.
	 * @var EbayTradingTypeMeasureType
	 */
	public $WeightOff;
	/**
	 * The MappedDiscountProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For SetShippingDiscountProfiles, if MappedDiscountProfileID is omitted when ModifyActionCode is Delete, any listings currently using the profile identified by DiscountProfileID will have that profile removed. For SetShippingDiscountProfiles and GetItem, this is the intended discount profile mapping.
	 * @var string
	 */
	public $MappedDiscountProfileID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string DiscountProfileID
	 * @param string DiscountProfileName
	 * @param EbayTradingTypeAmountType EachAdditionalAmount
	 * @param EbayTradingTypeAmountType EachAdditionalAmountOff
	 * @param float EachAdditionalPercentOff
	 * @param EbayTradingTypeMeasureType WeightOff
	 * @param string MappedDiscountProfileID
	 * @param DOMDocument any
	 * @return EbayTradingTypeDiscountProfileType
	 */
	public function __construct($_DiscountProfileID = null,$_DiscountProfileName = null,$_EachAdditionalAmount = null,$_EachAdditionalAmountOff = null,$_EachAdditionalPercentOff = null,$_WeightOff = null,$_MappedDiscountProfileID = null,$_any = null)
	{
		parent::__construct(array('DiscountProfileID'=>$_DiscountProfileID,'DiscountProfileName'=>$_DiscountProfileName,'EachAdditionalAmount'=>$_EachAdditionalAmount,'EachAdditionalAmountOff'=>$_EachAdditionalAmountOff,'EachAdditionalPercentOff'=>$_EachAdditionalPercentOff,'WeightOff'=>$_WeightOff,'MappedDiscountProfileID'=>$_MappedDiscountProfileID,'any'=>$_any));
	}
	/**
	 * Set DiscountProfileID
	 * @param string DiscountProfileID
	 * @return string
	 */
	public function setDiscountProfileID($_DiscountProfileID)
	{
		return ($this->DiscountProfileID = $_DiscountProfileID);
	}
	/**
	 * Get DiscountProfileID
	 * @return string
	 */
	public function getDiscountProfileID()
	{
		return $this->DiscountProfileID;
	}
	/**
	 * Set DiscountProfileName
	 * @param string DiscountProfileName
	 * @return string
	 */
	public function setDiscountProfileName($_DiscountProfileName)
	{
		return ($this->DiscountProfileName = $_DiscountProfileName);
	}
	/**
	 * Get DiscountProfileName
	 * @return string
	 */
	public function getDiscountProfileName()
	{
		return $this->DiscountProfileName;
	}
	/**
	 * Set EachAdditionalAmount
	 * @param AmountType EachAdditionalAmount
	 * @return AmountType
	 */
	public function setEachAdditionalAmount($_EachAdditionalAmount)
	{
		return ($this->EachAdditionalAmount = $_EachAdditionalAmount);
	}
	/**
	 * Get EachAdditionalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getEachAdditionalAmount()
	{
		return $this->EachAdditionalAmount;
	}
	/**
	 * Set EachAdditionalAmountOff
	 * @param AmountType EachAdditionalAmountOff
	 * @return AmountType
	 */
	public function setEachAdditionalAmountOff($_EachAdditionalAmountOff)
	{
		return ($this->EachAdditionalAmountOff = $_EachAdditionalAmountOff);
	}
	/**
	 * Get EachAdditionalAmountOff
	 * @return EbayTradingTypeAmountType
	 */
	public function getEachAdditionalAmountOff()
	{
		return $this->EachAdditionalAmountOff;
	}
	/**
	 * Set EachAdditionalPercentOff
	 * @param float EachAdditionalPercentOff
	 * @return float
	 */
	public function setEachAdditionalPercentOff($_EachAdditionalPercentOff)
	{
		return ($this->EachAdditionalPercentOff = $_EachAdditionalPercentOff);
	}
	/**
	 * Get EachAdditionalPercentOff
	 * @return float
	 */
	public function getEachAdditionalPercentOff()
	{
		return $this->EachAdditionalPercentOff;
	}
	/**
	 * Set WeightOff
	 * @param MeasureType WeightOff
	 * @return MeasureType
	 */
	public function setWeightOff($_WeightOff)
	{
		return ($this->WeightOff = $_WeightOff);
	}
	/**
	 * Get WeightOff
	 * @return EbayTradingTypeMeasureType
	 */
	public function getWeightOff()
	{
		return $this->WeightOff;
	}
	/**
	 * Set MappedDiscountProfileID
	 * @param string MappedDiscountProfileID
	 * @return string
	 */
	public function setMappedDiscountProfileID($_MappedDiscountProfileID)
	{
		return ($this->MappedDiscountProfileID = $_MappedDiscountProfileID);
	}
	/**
	 * Get MappedDiscountProfileID
	 * @return string
	 */
	public function getMappedDiscountProfileID()
	{
		return $this->MappedDiscountProfileID;
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