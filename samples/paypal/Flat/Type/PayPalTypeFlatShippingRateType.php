<?php
/**
 * Class file for PayPalTypeFlatShippingRateType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFlatShippingRateType
 * @date 14/07/2012
 */
class PayPalTypeFlatShippingRateType extends PayPalWsdlClass
{
	/**
	 * The AdditionalShippingCosts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Any additional shipping costs for the item.
	 * @var PayPalTypeAmountType
	 */
	public $AdditionalShippingCosts;
	/**
	 * The FlatShippingHandlingCosts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var PayPalTypeAmountType
	 */
	public $FlatShippingHandlingCosts;
	/**
	 * The InsuranceFee
	 * @var PayPalTypeAmountType
	 */
	public $InsuranceFee;
	/**
	 * The InsuranceOption
	 * @var PayPalTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The ShippingService
	 * @var PayPalTypeShippingServiceCodeType
	 */
	public $ShippingService;
	/**
	 * Constructor
	 * @param PayPalTypeAmountType AdditionalShippingCosts
	 * @param PayPalTypeAmountType FlatShippingHandlingCosts
	 * @param PayPalTypeAmountType InsuranceFee
	 * @param PayPalTypeInsuranceOptionCodeType InsuranceOption
	 * @param PayPalTypeShippingServiceCodeType ShippingService
	 * @return PayPalTypeFlatShippingRateType
	 */
	public function __construct($_AdditionalShippingCosts = null,$_FlatShippingHandlingCosts = null,$_InsuranceFee = null,$_InsuranceOption = null,$_ShippingService = null)
	{
		parent::__construct(array('AdditionalShippingCosts'=>$_AdditionalShippingCosts,'FlatShippingHandlingCosts'=>$_FlatShippingHandlingCosts,'InsuranceFee'=>$_InsuranceFee,'InsuranceOption'=>$_InsuranceOption,'ShippingService'=>$_ShippingService));
	}
	/**
	 * Set AdditionalShippingCosts
	 * @param AmountType AdditionalShippingCosts
	 * @return AmountType
	 */
	public function setAdditionalShippingCosts($_AdditionalShippingCosts)
	{
		return ($this->AdditionalShippingCosts = $_AdditionalShippingCosts);
	}
	/**
	 * Get AdditionalShippingCosts
	 * @return PayPalTypeAmountType
	 */
	public function getAdditionalShippingCosts()
	{
		return $this->AdditionalShippingCosts;
	}
	/**
	 * Set FlatShippingHandlingCosts
	 * @param AmountType FlatShippingHandlingCosts
	 * @return AmountType
	 */
	public function setFlatShippingHandlingCosts($_FlatShippingHandlingCosts)
	{
		return ($this->FlatShippingHandlingCosts = $_FlatShippingHandlingCosts);
	}
	/**
	 * Get FlatShippingHandlingCosts
	 * @return PayPalTypeAmountType
	 */
	public function getFlatShippingHandlingCosts()
	{
		return $this->FlatShippingHandlingCosts;
	}
	/**
	 * Set InsuranceFee
	 * @param AmountType InsuranceFee
	 * @return AmountType
	 */
	public function setInsuranceFee($_InsuranceFee)
	{
		return ($this->InsuranceFee = $_InsuranceFee);
	}
	/**
	 * Get InsuranceFee
	 * @return PayPalTypeAmountType
	 */
	public function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * Set InsuranceOption
	 * @param InsuranceOptionCodeType InsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInsuranceOption($_InsuranceOption)
	{
		return ($this->InsuranceOption = PayPalTypeInsuranceOptionCodeType::valueIsValid($_InsuranceOption)?$_InsuranceOption:null);
	}
	/**
	 * Get InsuranceOption
	 * @return PayPalTypeInsuranceOptionCodeType
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set ShippingService
	 * @param ShippingServiceCodeType ShippingService
	 * @return ShippingServiceCodeType
	 */
	public function setShippingService($_ShippingService)
	{
		return ($this->ShippingService = PayPalTypeShippingServiceCodeType::valueIsValid($_ShippingService)?$_ShippingService:null);
	}
	/**
	 * Get ShippingService
	 * @return PayPalTypeShippingServiceCodeType
	 */
	public function getShippingService()
	{
		return $this->ShippingService;
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