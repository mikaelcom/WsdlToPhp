<?php
/**
 * Class file for EbayTradingTypeGetShippingDiscountProfilesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetShippingDiscountProfilesResponseType
 * Documentation : Response to call of GetShippingDiscountProfiles.
 * @date 04/07/2012
 */
class EbayTradingTypeGetShippingDiscountProfilesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CurrencyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the currency to be used for shipping cost discounts and insurance for combined payment. A discount profile can only be associated with a listing if the currency ID of the profile matches the currency ID of the listing.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $CurrencyID;
	/**
	 * The FlatShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details of an individual discount profile defined by the user for flat rate shipping--one for each profile defined by the user. Empty if no shipping discount profiles were defined.
	 * @var EbayTradingTypeFlatShippingDiscountType
	 */
	public $FlatShippingDiscount;
	/**
	 * The CalculatedShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details of an individual discount profile defined by the user for calculated shipping--one for each profile defined by the user. Empty if no shipping discount profiles were defined.
	 * @var EbayTradingTypeCalculatedShippingDiscountType
	 */
	public $CalculatedShippingDiscount;
	/**
	 * The PromotionalShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user defined a promotional discount (the discount is active as soon as it exists).
	 * @var boolean
	 */
	public $PromotionalShippingDiscount;
	/**
	 * The CalculatedHandlingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the specific packaging/handling details for combined payment. Returned only if it has been defined.
	 * @var EbayTradingTypeCalculatedHandlingDiscountType
	 */
	public $CalculatedHandlingDiscount;
	/**
	 * The PromotionalShippingDiscountDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the specific promotional shipping discount. Returned only if it has been defined.
	 * @var EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public $PromotionalShippingDiscountDetails;
	/**
	 * The ShippingInsurance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the domestic insurance for combined payment. Returned only if it has been defined.
	 * @var EbayTradingTypeShippingInsuranceType
	 */
	public $ShippingInsurance;
	/**
	 * The InternationalShippingInsurance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the international insurance for combined payment. Returned only if it has been defined.
	 * @var EbayTradingTypeShippingInsuranceType
	 */
	public $InternationalShippingInsurance;
	/**
	 * The CombinedDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Payment order. In a Combined Payment order, the buyer makes one payment for all order line items, hence only unpaid order line items can be combined into a Combined Payment order.
	 * @var EbayTradingTypeCombinedPaymentPeriodCodeType
	 */
	public $CombinedDuration;
	/**
	 * Constructor
	 * @param EbayTradingTypeCurrencyCodeType CurrencyID
	 * @param EbayTradingTypeFlatShippingDiscountType FlatShippingDiscount
	 * @param EbayTradingTypeCalculatedShippingDiscountType CalculatedShippingDiscount
	 * @param boolean PromotionalShippingDiscount
	 * @param EbayTradingTypeCalculatedHandlingDiscountType CalculatedHandlingDiscount
	 * @param EbayTradingTypePromotionalShippingDiscountDetailsType PromotionalShippingDiscountDetails
	 * @param EbayTradingTypeShippingInsuranceType ShippingInsurance
	 * @param EbayTradingTypeShippingInsuranceType InternationalShippingInsurance
	 * @param EbayTradingTypeCombinedPaymentPeriodCodeType CombinedDuration
	 * @return EbayTradingTypeGetShippingDiscountProfilesResponseType
	 */
	public function __construct($_CurrencyID = null,$_FlatShippingDiscount = null,$_CalculatedShippingDiscount = null,$_PromotionalShippingDiscount = null,$_CalculatedHandlingDiscount = null,$_PromotionalShippingDiscountDetails = null,$_ShippingInsurance = null,$_InternationalShippingInsurance = null,$_CombinedDuration = null)
	{
		EbayTradingWsdlClass::__construct(array('CurrencyID'=>$_CurrencyID,'FlatShippingDiscount'=>$_FlatShippingDiscount,'CalculatedShippingDiscount'=>$_CalculatedShippingDiscount,'PromotionalShippingDiscount'=>$_PromotionalShippingDiscount,'CalculatedHandlingDiscount'=>$_CalculatedHandlingDiscount,'PromotionalShippingDiscountDetails'=>$_PromotionalShippingDiscountDetails,'ShippingInsurance'=>$_ShippingInsurance,'InternationalShippingInsurance'=>$_InternationalShippingInsurance,'CombinedDuration'=>$_CombinedDuration));
	}
	/**
	 * Set CurrencyID
	 * @param CurrencyCodeType CurrencyID
	 * @return CurrencyCodeType
	 */
	public function setCurrencyID($_CurrencyID)
	{
		return ($this->CurrencyID = EbayTradingTypeCurrencyCodeType::valueIsValid($_CurrencyID)?$_CurrencyID:null);
	}
	/**
	 * Get CurrencyID
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getCurrencyID()
	{
		return $this->CurrencyID;
	}
	/**
	 * Set FlatShippingDiscount
	 * @param FlatShippingDiscountType FlatShippingDiscount
	 * @return FlatShippingDiscountType
	 */
	public function setFlatShippingDiscount($_FlatShippingDiscount)
	{
		return ($this->FlatShippingDiscount = $_FlatShippingDiscount);
	}
	/**
	 * Get FlatShippingDiscount
	 * @return EbayTradingTypeFlatShippingDiscountType
	 */
	public function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}
	/**
	 * Set CalculatedShippingDiscount
	 * @param CalculatedShippingDiscountType CalculatedShippingDiscount
	 * @return CalculatedShippingDiscountType
	 */
	public function setCalculatedShippingDiscount($_CalculatedShippingDiscount)
	{
		return ($this->CalculatedShippingDiscount = $_CalculatedShippingDiscount);
	}
	/**
	 * Get CalculatedShippingDiscount
	 * @return EbayTradingTypeCalculatedShippingDiscountType
	 */
	public function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}
	/**
	 * Set PromotionalShippingDiscount
	 * @param boolean PromotionalShippingDiscount
	 * @return boolean
	 */
	public function setPromotionalShippingDiscount($_PromotionalShippingDiscount)
	{
		return ($this->PromotionalShippingDiscount = $_PromotionalShippingDiscount);
	}
	/**
	 * Get PromotionalShippingDiscount
	 * @return boolean
	 */
	public function getPromotionalShippingDiscount()
	{
		return $this->PromotionalShippingDiscount;
	}
	/**
	 * Set CalculatedHandlingDiscount
	 * @param CalculatedHandlingDiscountType CalculatedHandlingDiscount
	 * @return CalculatedHandlingDiscountType
	 */
	public function setCalculatedHandlingDiscount($_CalculatedHandlingDiscount)
	{
		return ($this->CalculatedHandlingDiscount = $_CalculatedHandlingDiscount);
	}
	/**
	 * Get CalculatedHandlingDiscount
	 * @return EbayTradingTypeCalculatedHandlingDiscountType
	 */
	public function getCalculatedHandlingDiscount()
	{
		return $this->CalculatedHandlingDiscount;
	}
	/**
	 * Set PromotionalShippingDiscountDetails
	 * @param PromotionalShippingDiscountDetailsType PromotionalShippingDiscountDetails
	 * @return PromotionalShippingDiscountDetailsType
	 */
	public function setPromotionalShippingDiscountDetails($_PromotionalShippingDiscountDetails)
	{
		return ($this->PromotionalShippingDiscountDetails = $_PromotionalShippingDiscountDetails);
	}
	/**
	 * Get PromotionalShippingDiscountDetails
	 * @return EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}
	/**
	 * Set ShippingInsurance
	 * @param ShippingInsuranceType ShippingInsurance
	 * @return ShippingInsuranceType
	 */
	public function setShippingInsurance($_ShippingInsurance)
	{
		return ($this->ShippingInsurance = $_ShippingInsurance);
	}
	/**
	 * Get ShippingInsurance
	 * @return EbayTradingTypeShippingInsuranceType
	 */
	public function getShippingInsurance()
	{
		return $this->ShippingInsurance;
	}
	/**
	 * Set InternationalShippingInsurance
	 * @param ShippingInsuranceType InternationalShippingInsurance
	 * @return ShippingInsuranceType
	 */
	public function setInternationalShippingInsurance($_InternationalShippingInsurance)
	{
		return ($this->InternationalShippingInsurance = $_InternationalShippingInsurance);
	}
	/**
	 * Get InternationalShippingInsurance
	 * @return EbayTradingTypeShippingInsuranceType
	 */
	public function getInternationalShippingInsurance()
	{
		return $this->InternationalShippingInsurance;
	}
	/**
	 * Set CombinedDuration
	 * @param CombinedPaymentPeriodCodeType CombinedDuration
	 * @return CombinedPaymentPeriodCodeType
	 */
	public function setCombinedDuration($_CombinedDuration)
	{
		return ($this->CombinedDuration = EbayTradingTypeCombinedPaymentPeriodCodeType::valueIsValid($_CombinedDuration)?$_CombinedDuration:null);
	}
	/**
	 * Get CombinedDuration
	 * @return EbayTradingTypeCombinedPaymentPeriodCodeType
	 */
	public function getCombinedDuration()
	{
		return $this->CombinedDuration;
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