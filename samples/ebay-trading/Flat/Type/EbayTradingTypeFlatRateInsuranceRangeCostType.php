<?php
/**
 * Class file for EbayTradingTypeFlatRateInsuranceRangeCostType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFlatRateInsuranceRangeCostType
 * Documentation : A pairing of range and insurance cost.
 * @date 04/07/2012
 */
class EbayTradingTypeFlatRateInsuranceRangeCostType extends EbayTradingWsdlClass
{
	/**
	 * The FlatRateInsuranceRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The price range for the shipment for which the insurance cost is being specified. This field is no longer applicable to SetUserPreferences or GetUserPreferences.
	 * @var EbayTradingTypeFlatRateInsuranceRangeCodeType
	 */
	public $FlatRateInsuranceRange;
	/**
	 * The InsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of insurance for the specified price range. This field is no longer applicable to SetUserPreferences or GetUserPreferences.
	 * @var EbayTradingTypeAmountType
	 */
	public $InsuranceCost;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeFlatRateInsuranceRangeCodeType FlatRateInsuranceRange
	 * @param EbayTradingTypeAmountType InsuranceCost
	 * @param DOMDocument any
	 * @return EbayTradingTypeFlatRateInsuranceRangeCostType
	 */
	public function __construct($_FlatRateInsuranceRange = null,$_InsuranceCost = null,$_any = null)
	{
		parent::__construct(array('FlatRateInsuranceRange'=>$_FlatRateInsuranceRange,'InsuranceCost'=>$_InsuranceCost,'any'=>$_any));
	}
	/**
	 * Set FlatRateInsuranceRange
	 * @param FlatRateInsuranceRangeCodeType FlatRateInsuranceRange
	 * @return FlatRateInsuranceRangeCodeType
	 */
	public function setFlatRateInsuranceRange($_FlatRateInsuranceRange)
	{
		return ($this->FlatRateInsuranceRange = EbayTradingTypeFlatRateInsuranceRangeCodeType::valueIsValid($_FlatRateInsuranceRange)?$_FlatRateInsuranceRange:null);
	}
	/**
	 * Get FlatRateInsuranceRange
	 * @return EbayTradingTypeFlatRateInsuranceRangeCodeType
	 */
	public function getFlatRateInsuranceRange()
	{
		return $this->FlatRateInsuranceRange;
	}
	/**
	 * Set InsuranceCost
	 * @param AmountType InsuranceCost
	 * @return AmountType
	 */
	public function setInsuranceCost($_InsuranceCost)
	{
		return ($this->InsuranceCost = $_InsuranceCost);
	}
	/**
	 * Get InsuranceCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getInsuranceCost()
	{
		return $this->InsuranceCost;
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