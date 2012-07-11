<?php
/**
 * Class file for EbayTradingTypeSetShippingDiscountProfilesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetShippingDiscountProfilesRequestType
 * Documentation : Enables a seller to define shipping cost discount profiles for things such as combined payments for shipping and handling costs.
 * @date 04/07/2012
 */
class EbayTradingTypeSetShippingDiscountProfilesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CurrencyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the currency to be used for shipping cost discounts and insurance for combined payment. A discount profile can only be associated with a listing if the currency ID of the profile matches the currency ID of the listing. <br><br> Required if the user creates flat rate shipping discount profiles, a promotional discount, a packaging/handling cost profile based on a variable discount rule, or if the user defines shipping insurance range/fee pairs. <br><br> Note: There is a currencyID attribute on many elements of SetShippingDiscountProfiles. To avoid an error, be sure to use the same value of CurrencyCodeType in each occurrence within the same request.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $CurrencyID;
	/**
	 * The CombinedDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is used to specify the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Payment order. In a Combined Payment order, the buyer makes one payment for all order line items, hence only unpaid order line items can be combined into a Combined Payment order.
	 * @var EbayTradingTypeCombinedPaymentPeriodCodeType
	 */
	public $CombinedDuration;
	/**
	 * The ModifyActionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates what action to take on the specified flat shipping discount, calculated shipping discount or promotional discount. If the action is Delete and if a flat rate or calculated shipping discount profile is specified, the discount profile identified by DiscountProfile.DiscountProfileID is deleted (see DiscountProfile.MappedDiscountProfileID for related details).
	 * @var EbayTradingTypeModifyActionCodeType
	 */
	public $ModifyActionCode;
	/**
	 * The FlatShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details of a shipping cost discount profile for flat rate shipping. If this is provided, CalculatedShippingDiscount and PromotionalShippingDiscountDetails should be omitted.
	 * @var EbayTradingTypeFlatShippingDiscountType
	 */
	public $FlatShippingDiscount;
	/**
	 * The CalculatedShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details of a shipping cost discount profile for calculated shipping. If this is provided, FlatShippingDiscount and PromotionalShippingDiscountDetails should be omitted.
	 * @var EbayTradingTypeCalculatedShippingDiscountType
	 */
	public $CalculatedShippingDiscount;
	/**
	 * The CalculatedHandlingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the specific packaging/handling cost details for combined payment.
	 * @var EbayTradingTypeCalculatedHandlingDiscountType
	 */
	public $CalculatedHandlingDiscount;
	/**
	 * The PromotionalShippingDiscountDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The data for the promotional shipping discount. If this is provided, FlatShippingDiscount and CalculatedShippingDiscount should be omitted.
	 * @var EbayTradingTypePromotionalShippingDiscountDetailsType
	 */
	public $PromotionalShippingDiscountDetails;
	/**
	 * The ShippingInsurance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information establishing what fee to apply for domestic shipping insurance for combined payment depending on which range the order item-total price falls into.
	 * @var EbayTradingTypeShippingInsuranceType
	 */
	public $ShippingInsurance;
	/**
	 * The InternationalShippingInsurance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information establishing what fee to apply for international shipping insurance for combined payment depending on which range the order item-total price falls into.
	 * @var EbayTradingTypeShippingInsuranceType
	 */
	public $InternationalShippingInsurance;
	/**
	 * Constructor
	 * @param EbayTradingTypeCurrencyCodeType CurrencyID
	 * @param EbayTradingTypeCombinedPaymentPeriodCodeType CombinedDuration
	 * @param EbayTradingTypeModifyActionCodeType ModifyActionCode
	 * @param EbayTradingTypeFlatShippingDiscountType FlatShippingDiscount
	 * @param EbayTradingTypeCalculatedShippingDiscountType CalculatedShippingDiscount
	 * @param EbayTradingTypeCalculatedHandlingDiscountType CalculatedHandlingDiscount
	 * @param EbayTradingTypePromotionalShippingDiscountDetailsType PromotionalShippingDiscountDetails
	 * @param EbayTradingTypeShippingInsuranceType ShippingInsurance
	 * @param EbayTradingTypeShippingInsuranceType InternationalShippingInsurance
	 * @return EbayTradingTypeSetShippingDiscountProfilesRequestType
	 */
	public function __construct($_CurrencyID = null,$_CombinedDuration = null,$_ModifyActionCode = null,$_FlatShippingDiscount = null,$_CalculatedShippingDiscount = null,$_CalculatedHandlingDiscount = null,$_PromotionalShippingDiscountDetails = null,$_ShippingInsurance = null,$_InternationalShippingInsurance = null)
	{
		EbayTradingWsdlClass::__construct(array('CurrencyID'=>$_CurrencyID,'CombinedDuration'=>$_CombinedDuration,'ModifyActionCode'=>$_ModifyActionCode,'FlatShippingDiscount'=>$_FlatShippingDiscount,'CalculatedShippingDiscount'=>$_CalculatedShippingDiscount,'CalculatedHandlingDiscount'=>$_CalculatedHandlingDiscount,'PromotionalShippingDiscountDetails'=>$_PromotionalShippingDiscountDetails,'ShippingInsurance'=>$_ShippingInsurance,'InternationalShippingInsurance'=>$_InternationalShippingInsurance));
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
	 * Set ModifyActionCode
	 * @param ModifyActionCodeType ModifyActionCode
	 * @return ModifyActionCodeType
	 */
	public function setModifyActionCode($_ModifyActionCode)
	{
		return ($this->ModifyActionCode = EbayTradingTypeModifyActionCodeType::valueIsValid($_ModifyActionCode)?$_ModifyActionCode:null);
	}
	/**
	 * Get ModifyActionCode
	 * @return EbayTradingTypeModifyActionCodeType
	 */
	public function getModifyActionCode()
	{
		return $this->ModifyActionCode;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>