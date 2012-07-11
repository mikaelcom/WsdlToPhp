<?php
/**
 * Class file for EbayTradingTypeShippingInsuranceType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingInsuranceType
 * Documentation : Details about insurance for combined payment.
 * @date 04/07/2012
 */
class EbayTradingTypeShippingInsuranceType extends EbayTradingWsdlClass
{
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * @var EbayTradingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The FlatRateInsuranceRangeCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A pairing of range of item price total and insurance cost. For SetShippingDiscountProfiles, if InsuranceOption is Optional or Required, you must submit all range pairs. For those ranges that do not apply, set the cost to 0.
	 * @var EbayTradingTypeFlatRateInsuranceRangeCostType
	 */
	public $FlatRateInsuranceRangeCost;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param EbayTradingTypeFlatRateInsuranceRangeCostType FlatRateInsuranceRangeCost
	 * @param DOMDocument any
	 * @return EbayTradingTypeShippingInsuranceType
	 */
	public function __construct($_InsuranceOption = null,$_FlatRateInsuranceRangeCost = null,$_any = null)
	{
		parent::__construct(array('InsuranceOption'=>$_InsuranceOption,'FlatRateInsuranceRangeCost'=>$_FlatRateInsuranceRangeCost,'any'=>$_any));
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