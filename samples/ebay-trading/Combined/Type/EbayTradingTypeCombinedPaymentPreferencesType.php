<?php
/**
 * Class file for EbayTradingTypeCombinedPaymentPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCombinedPaymentPreferencesType
 * Documentation : Type used to define all Combined Payment preferences, including preferences and rules for Calculated and Flat Rate shipping, a flag to allow or disallow Combined Payment orders, and the time period in which to allow buyers to combine multiple purchases from the seller into a Combined Payment order.
 * @date 04/07/2012
 */
class EbayTradingTypeCombinedPaymentPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The CalculatedShippingPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS CONTAINER. As an alternative, use SetShippingDiscountProfiles to set all Calculated Shipping rules and preferences, and use GetShippingDiscountProfiles to retrieve the same information.
	 * @var EbayTradingTypeCalculatedShippingPreferencesType
	 */
	public $CalculatedShippingPreferences;
	/**
	 * The CombinedPaymentOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not a seller wants to allow buyers to combine single order line items into a Combined Payment order. A Combined Payment order can be created by the buyer or seller if multiple unpaid order line items exist between the same buyer and seller. Often, a Combined Payment order can reduce shipping and handling expenses for the buyer and seller.
	 * @var EbayTradingTypeCombinedPaymentOptionCodeType
	 */
	public $CombinedPaymentOption;
	/**
	 * The CombinedPaymentPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS FIELD. As an alternative, use the CombinedDuration field in SetShippingDiscountProfiles to specify the time period in which to allow buyers to combine order line items into a Combined Payment order. Use GetShippingDiscountProfiles to retrieve the CombinedDuration value.
	 * @var EbayTradingTypeCombinedPaymentPeriodCodeType
	 */
	public $CombinedPaymentPeriod;
	/**
	 * The FlatShippingPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : DO NOT USE THIS CONTAINER. As an alternative, use SetShippingDiscountProfiles to set all Flat Rate Shipping rules and preferences, and use GetShippingDiscountProfiles to retrieve the same information.
	 * @var EbayTradingTypeFlatShippingPreferencesType
	 */
	public $FlatShippingPreferences;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCalculatedShippingPreferencesType CalculatedShippingPreferences
	 * @param EbayTradingTypeCombinedPaymentOptionCodeType CombinedPaymentOption
	 * @param EbayTradingTypeCombinedPaymentPeriodCodeType CombinedPaymentPeriod
	 * @param EbayTradingTypeFlatShippingPreferencesType FlatShippingPreferences
	 * @param DOMDocument any
	 * @return EbayTradingTypeCombinedPaymentPreferencesType
	 */
	public function __construct($_CalculatedShippingPreferences = null,$_CombinedPaymentOption = null,$_CombinedPaymentPeriod = null,$_FlatShippingPreferences = null,$_any = null)
	{
		parent::__construct(array('CalculatedShippingPreferences'=>$_CalculatedShippingPreferences,'CombinedPaymentOption'=>$_CombinedPaymentOption,'CombinedPaymentPeriod'=>$_CombinedPaymentPeriod,'FlatShippingPreferences'=>$_FlatShippingPreferences,'any'=>$_any));
	}
	/**
	 * Set CalculatedShippingPreferences
	 * @param CalculatedShippingPreferencesType CalculatedShippingPreferences
	 * @return CalculatedShippingPreferencesType
	 */
	public function setCalculatedShippingPreferences($_CalculatedShippingPreferences)
	{
		return ($this->CalculatedShippingPreferences = $_CalculatedShippingPreferences);
	}
	/**
	 * Get CalculatedShippingPreferences
	 * @return EbayTradingTypeCalculatedShippingPreferencesType
	 */
	public function getCalculatedShippingPreferences()
	{
		return $this->CalculatedShippingPreferences;
	}
	/**
	 * Set CombinedPaymentOption
	 * @param CombinedPaymentOptionCodeType CombinedPaymentOption
	 * @return CombinedPaymentOptionCodeType
	 */
	public function setCombinedPaymentOption($_CombinedPaymentOption)
	{
		return ($this->CombinedPaymentOption = EbayTradingTypeCombinedPaymentOptionCodeType::valueIsValid($_CombinedPaymentOption)?$_CombinedPaymentOption:null);
	}
	/**
	 * Get CombinedPaymentOption
	 * @return EbayTradingTypeCombinedPaymentOptionCodeType
	 */
	public function getCombinedPaymentOption()
	{
		return $this->CombinedPaymentOption;
	}
	/**
	 * Set CombinedPaymentPeriod
	 * @param CombinedPaymentPeriodCodeType CombinedPaymentPeriod
	 * @return CombinedPaymentPeriodCodeType
	 */
	public function setCombinedPaymentPeriod($_CombinedPaymentPeriod)
	{
		return ($this->CombinedPaymentPeriod = EbayTradingTypeCombinedPaymentPeriodCodeType::valueIsValid($_CombinedPaymentPeriod)?$_CombinedPaymentPeriod:null);
	}
	/**
	 * Get CombinedPaymentPeriod
	 * @return EbayTradingTypeCombinedPaymentPeriodCodeType
	 */
	public function getCombinedPaymentPeriod()
	{
		return $this->CombinedPaymentPeriod;
	}
	/**
	 * Set FlatShippingPreferences
	 * @param FlatShippingPreferencesType FlatShippingPreferences
	 * @return FlatShippingPreferencesType
	 */
	public function setFlatShippingPreferences($_FlatShippingPreferences)
	{
		return ($this->FlatShippingPreferences = $_FlatShippingPreferences);
	}
	/**
	 * Get FlatShippingPreferences
	 * @return EbayTradingTypeFlatShippingPreferencesType
	 */
	public function getFlatShippingPreferences()
	{
		return $this->FlatShippingPreferences;
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