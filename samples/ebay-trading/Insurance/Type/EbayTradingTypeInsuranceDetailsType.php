<?php
/**
 * Class file for EbayTradingTypeInsuranceDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInsuranceDetailsType
 * Documentation : Contains the cost of shipping insurance and other insurance-related information.
 * @date 04/07/2012
 */
class EbayTradingTypeInsuranceDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The InsuranceFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of shipping insurance set by the seller. If the buyer bought more than one of this item, this is the insurance for just a single item. Exception: for GetItemShipping, this is proportional to QuantitySold. Default is 0.00. Value should be greater than 0.00 if InsuranceOption is Optional or Required. For flat shipping only. Optional as input and only allowed if ChangePaymentInstructions is true. <br><br> Valid only on the following sites: AU, FR, and IT <br /> Applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeAmountType
	 */
	public $InsuranceFee;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Applies to both flat and calculated shipping. Optional as input and only allowed if ChangePaymentInstructions is true. <br><br> Valid only on the following sites: AU, FR, and IT <br /> Applicable to Half.com (for GetOrders).
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
	 * @param EbayTradingTypeAmountType InsuranceFee
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param DOMDocument any
	 * @return EbayTradingTypeInsuranceDetailsType
	 */
	public function __construct($_InsuranceFee = null,$_InsuranceOption = null,$_any = null)
	{
		parent::__construct(array('InsuranceFee'=>$_InsuranceFee,'InsuranceOption'=>$_InsuranceOption,'any'=>$_any));
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
	 * @return EbayTradingTypeAmountType
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