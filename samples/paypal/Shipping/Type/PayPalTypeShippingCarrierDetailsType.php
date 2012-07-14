<?php
/**
 * Class file for PayPalTypeShippingCarrierDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeShippingCarrierDetailsType
 * @date 14/07/2012
 */
class PayPalTypeShippingCarrierDetailsType extends PayPalWsdlClass
{
	/**
	 * The CarrierShippingFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Calculated cost of shipping, based on shipping parameters and selected shipping service. Only returned if ShippingType = 2 (i.e., calculated shipping rate).
	 * @var PayPalTypeAmountType
	 */
	public $CarrierShippingFee;
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
	 * The PackagingHandlingCosts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Optional fees a seller might assess for the shipping of the item.
	 * @var PayPalTypeAmountType
	 */
	public $PackagingHandlingCosts;
	/**
	 * The ShippingRateErrorMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes any error message associated with the attempt to calculate shipping rates. If there was no error, returns "No Error" (without the quotation marks).
	 * @var string
	 */
	public $ShippingRateErrorMessage;
	/**
	 * The ShippingService
	 * @var PayPalTypeShippingServiceCodeType
	 */
	public $ShippingService;
	/**
	 * Constructor
	 * @param PayPalTypeAmountType CarrierShippingFee
	 * @param PayPalTypeAmountType InsuranceFee
	 * @param PayPalTypeInsuranceOptionCodeType InsuranceOption
	 * @param PayPalTypeAmountType PackagingHandlingCosts
	 * @param string ShippingRateErrorMessage
	 * @param PayPalTypeShippingServiceCodeType ShippingService
	 * @return PayPalTypeShippingCarrierDetailsType
	 */
	public function __construct($_CarrierShippingFee = null,$_InsuranceFee = null,$_InsuranceOption = null,$_PackagingHandlingCosts = null,$_ShippingRateErrorMessage = null,$_ShippingService = null)
	{
		parent::__construct(array('CarrierShippingFee'=>$_CarrierShippingFee,'InsuranceFee'=>$_InsuranceFee,'InsuranceOption'=>$_InsuranceOption,'PackagingHandlingCosts'=>$_PackagingHandlingCosts,'ShippingRateErrorMessage'=>$_ShippingRateErrorMessage,'ShippingService'=>$_ShippingService));
	}
	/**
	 * Set CarrierShippingFee
	 * @param AmountType CarrierShippingFee
	 * @return AmountType
	 */
	public function setCarrierShippingFee($_CarrierShippingFee)
	{
		return ($this->CarrierShippingFee = $_CarrierShippingFee);
	}
	/**
	 * Get CarrierShippingFee
	 * @return PayPalTypeAmountType
	 */
	public function getCarrierShippingFee()
	{
		return $this->CarrierShippingFee;
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
	 * Set PackagingHandlingCosts
	 * @param AmountType PackagingHandlingCosts
	 * @return AmountType
	 */
	public function setPackagingHandlingCosts($_PackagingHandlingCosts)
	{
		return ($this->PackagingHandlingCosts = $_PackagingHandlingCosts);
	}
	/**
	 * Get PackagingHandlingCosts
	 * @return PayPalTypeAmountType
	 */
	public function getPackagingHandlingCosts()
	{
		return $this->PackagingHandlingCosts;
	}
	/**
	 * Set ShippingRateErrorMessage
	 * @param string ShippingRateErrorMessage
	 * @return string
	 */
	public function setShippingRateErrorMessage($_ShippingRateErrorMessage)
	{
		return ($this->ShippingRateErrorMessage = $_ShippingRateErrorMessage);
	}
	/**
	 * Get ShippingRateErrorMessage
	 * @return string
	 */
	public function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
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