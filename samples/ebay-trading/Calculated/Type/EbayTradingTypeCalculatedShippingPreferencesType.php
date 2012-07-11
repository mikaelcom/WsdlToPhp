<?php
/**
 * Class file for EbayTradingTypeCalculatedShippingPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCalculatedShippingPreferencesType
 * Documentation : This type contains Calculated Shipping rules and preferences for the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeCalculatedShippingPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The CalculatedShippingAmountForEntireOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Calculated Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Calculated Shipping discount profiles.
	 * @var EbayTradingTypeAmountType
	 */
	public $CalculatedShippingAmountForEntireOrder;
	/**
	 * The CalculatedShippingChargeOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Calculated Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Calculated Shipping discount profiles.
	 * @var EbayTradingTypeCalculatedShippingChargeOptionCodeType
	 */
	public $CalculatedShippingChargeOption;
	/**
	 * The CalculatedShippingRateOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. Calculated Shipping discount profiles are created and managed with SetShippingDiscountProfiles. Use GetShippingDiscountProfiles to retrieve Calculated Shipping discount profiles.
	 * @var EbayTradingTypeCalculatedShippingRateOptionCodeType
	 */
	public $CalculatedShippingRateOption;
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
	 * @param EbayTradingTypeAmountType CalculatedShippingAmountForEntireOrder
	 * @param EbayTradingTypeCalculatedShippingChargeOptionCodeType CalculatedShippingChargeOption
	 * @param EbayTradingTypeCalculatedShippingRateOptionCodeType CalculatedShippingRateOption
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param DOMDocument any
	 * @return EbayTradingTypeCalculatedShippingPreferencesType
	 */
	public function __construct($_CalculatedShippingAmountForEntireOrder = null,$_CalculatedShippingChargeOption = null,$_CalculatedShippingRateOption = null,$_InsuranceOption = null,$_any = null)
	{
		parent::__construct(array('CalculatedShippingAmountForEntireOrder'=>$_CalculatedShippingAmountForEntireOrder,'CalculatedShippingChargeOption'=>$_CalculatedShippingChargeOption,'CalculatedShippingRateOption'=>$_CalculatedShippingRateOption,'InsuranceOption'=>$_InsuranceOption,'any'=>$_any));
	}
	/**
	 * Set CalculatedShippingAmountForEntireOrder
	 * @param AmountType CalculatedShippingAmountForEntireOrder
	 * @return AmountType
	 */
	public function setCalculatedShippingAmountForEntireOrder($_CalculatedShippingAmountForEntireOrder)
	{
		return ($this->CalculatedShippingAmountForEntireOrder = $_CalculatedShippingAmountForEntireOrder);
	}
	/**
	 * Get CalculatedShippingAmountForEntireOrder
	 * @return EbayTradingTypeAmountType
	 */
	public function getCalculatedShippingAmountForEntireOrder()
	{
		return $this->CalculatedShippingAmountForEntireOrder;
	}
	/**
	 * Set CalculatedShippingChargeOption
	 * @param CalculatedShippingChargeOptionCodeType CalculatedShippingChargeOption
	 * @return CalculatedShippingChargeOptionCodeType
	 */
	public function setCalculatedShippingChargeOption($_CalculatedShippingChargeOption)
	{
		return ($this->CalculatedShippingChargeOption = EbayTradingTypeCalculatedShippingChargeOptionCodeType::valueIsValid($_CalculatedShippingChargeOption)?$_CalculatedShippingChargeOption:null);
	}
	/**
	 * Get CalculatedShippingChargeOption
	 * @return EbayTradingTypeCalculatedShippingChargeOptionCodeType
	 */
	public function getCalculatedShippingChargeOption()
	{
		return $this->CalculatedShippingChargeOption;
	}
	/**
	 * Set CalculatedShippingRateOption
	 * @param CalculatedShippingRateOptionCodeType CalculatedShippingRateOption
	 * @return CalculatedShippingRateOptionCodeType
	 */
	public function setCalculatedShippingRateOption($_CalculatedShippingRateOption)
	{
		return ($this->CalculatedShippingRateOption = EbayTradingTypeCalculatedShippingRateOptionCodeType::valueIsValid($_CalculatedShippingRateOption)?$_CalculatedShippingRateOption:null);
	}
	/**
	 * Get CalculatedShippingRateOption
	 * @return EbayTradingTypeCalculatedShippingRateOptionCodeType
	 */
	public function getCalculatedShippingRateOption()
	{
		return $this->CalculatedShippingRateOption;
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