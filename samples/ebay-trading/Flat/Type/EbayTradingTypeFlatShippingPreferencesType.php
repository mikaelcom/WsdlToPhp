<?php
/**
 * Class file for EbayTradingTypeFlatShippingPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFlatShippingPreferencesType
 * Documentation : This type contains Flat Rate Shipping rules and preferences for the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeFlatShippingPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The AmountPerAdditionalItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Flat Rate Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Flat Rate Shipping discount profiles.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPerAdditionalItem;
	/**
	 * The DeductionAmountPerAdditionalItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Flat Rate Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Flat Rate Shipping discount profiles.
	 * @var EbayTradingTypeAmountType
	 */
	public $DeductionAmountPerAdditionalItem;
	/**
	 * The FlatRateInsuranceRangeCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 6
	 * 	- documentation : DO NOT USE THIS FIELD. Shipping insurance parameters are passed in through SetShippingDiscountProfiles and retrieved using GetShippingDiscountProfiles. <br><br> FlatRateInsuranceRangeCost is only valid on the following eBay sites: AU, FR, IT, and IN.
	 * @var EbayTradingTypeFlatRateInsuranceRangeCostType
	 */
	public $FlatRateInsuranceRangeCost;
	/**
	 * The FlatShippingRateOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Flat Rate Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Flat Rate Shipping discount profiles.
	 * @var EbayTradingTypeFlatShippingRateOptionCodeType
	 */
	public $FlatShippingRateOption;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Shipping insurance parameters are passed in through SetShippingDiscountProfiles and retrieved using GetShippingDiscountProfiles. <br><br> InsuranceOption is only valid on the following eBay sites: AU, FR, IT, and IN.
	 * @var EbayTradingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType AmountPerAdditionalItem
	 * @param EbayTradingTypeAmountType DeductionAmountPerAdditionalItem
	 * @param EbayTradingTypeFlatRateInsuranceRangeCostType FlatRateInsuranceRangeCost
	 * @param EbayTradingTypeFlatShippingRateOptionCodeType FlatShippingRateOption
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param DOMDocument any
	 * @return EbayTradingTypeFlatShippingPreferencesType
	 */
	public function __construct($_AmountPerAdditionalItem = null,$_DeductionAmountPerAdditionalItem = null,$_FlatRateInsuranceRangeCost = null,$_FlatShippingRateOption = null,$_InsuranceOption = null,$_any = null)
	{
		parent::__construct(array('AmountPerAdditionalItem'=>$_AmountPerAdditionalItem,'DeductionAmountPerAdditionalItem'=>$_DeductionAmountPerAdditionalItem,'FlatRateInsuranceRangeCost'=>$_FlatRateInsuranceRangeCost,'FlatShippingRateOption'=>$_FlatShippingRateOption,'InsuranceOption'=>$_InsuranceOption,'any'=>$_any));
	}
	/**
	 * Set AmountPerAdditionalItem
	 * @param AmountType AmountPerAdditionalItem
	 * @return AmountType
	 */
	public function setAmountPerAdditionalItem($_AmountPerAdditionalItem)
	{
		return ($this->AmountPerAdditionalItem = $_AmountPerAdditionalItem);
	}
	/**
	 * Get AmountPerAdditionalItem
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountPerAdditionalItem()
	{
		return $this->AmountPerAdditionalItem;
	}
	/**
	 * Set DeductionAmountPerAdditionalItem
	 * @param AmountType DeductionAmountPerAdditionalItem
	 * @return AmountType
	 */
	public function setDeductionAmountPerAdditionalItem($_DeductionAmountPerAdditionalItem)
	{
		return ($this->DeductionAmountPerAdditionalItem = $_DeductionAmountPerAdditionalItem);
	}
	/**
	 * Get DeductionAmountPerAdditionalItem
	 * @return EbayTradingTypeAmountType
	 */
	public function getDeductionAmountPerAdditionalItem()
	{
		return $this->DeductionAmountPerAdditionalItem;
	}
	/**
	 * Set FlatRateInsuranceRangeCost
	 * @param FlatRateInsuranceRangeCostType FlatRateInsuranceRangeCost
	 * @return FlatRateInsuranceRangeCostType
	 */
	public function setFlatRateInsuranceRangeCost($_FlatRateInsuranceRangeCost)
	{
		return ($this->FlatRateInsuranceRangeCost = $_FlatRateInsuranceRangeCost);
	}
	/**
	 * Get FlatRateInsuranceRangeCost
	 * @return EbayTradingTypeFlatRateInsuranceRangeCostType
	 */
	public function getFlatRateInsuranceRangeCost()
	{
		return $this->FlatRateInsuranceRangeCost;
	}
	/**
	 * Set FlatShippingRateOption
	 * @param FlatShippingRateOptionCodeType FlatShippingRateOption
	 * @return FlatShippingRateOptionCodeType
	 */
	public function setFlatShippingRateOption($_FlatShippingRateOption)
	{
		return ($this->FlatShippingRateOption = EbayTradingTypeFlatShippingRateOptionCodeType::valueIsValid($_FlatShippingRateOption)?$_FlatShippingRateOption:null);
	}
	/**
	 * Get FlatShippingRateOption
	 * @return EbayTradingTypeFlatShippingRateOptionCodeType
	 */
	public function getFlatShippingRateOption()
	{
		return $this->FlatShippingRateOption;
	}
	/**
	 * Set InsuranceOption
	 * @param InsuranceOptionCodeType InsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInsuranceOption($_InsuranceOption)
	{
		return ($this->InsuranceOption = EbayTradingTypeInsuranceOptionCodeType::valueIsValid($_InsuranceOption)?$_InsuranceOption:null);
	}
	/**
	 * Get InsuranceOption
	 * @return EbayTradingTypeInsuranceOptionCodeType
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
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