<?php
/**
 * Class file for PayPalTypeUserSelectedOptionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUserSelectedOptionType
 * Documentation : Information on user selected options
 * @date 14/07/2012
 */
class PayPalTypeUserSelectedOptionType extends PayPalWsdlClass
{
	/**
	 * The ShippingCalculationMode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShippingCalculationMode;
	/**
	 * The InsuranceOptionSelected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InsuranceOptionSelected;
	/**
	 * The ShippingOptionIsDefault
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShippingOptionIsDefault;
	/**
	 * The ShippingOptionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingOptionAmount;
	/**
	 * The ShippingOptionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShippingOptionName;
	/**
	 * Constructor
	 * @param string ShippingCalculationMode
	 * @param string InsuranceOptionSelected
	 * @param string ShippingOptionIsDefault
	 * @param PayPalTypeBasicAmountType ShippingOptionAmount
	 * @param string ShippingOptionName
	 * @return PayPalTypeUserSelectedOptionType
	 */
	public function __construct($_ShippingCalculationMode = null,$_InsuranceOptionSelected = null,$_ShippingOptionIsDefault = null,$_ShippingOptionAmount = null,$_ShippingOptionName = null)
	{
		parent::__construct(array('ShippingCalculationMode'=>$_ShippingCalculationMode,'InsuranceOptionSelected'=>$_InsuranceOptionSelected,'ShippingOptionIsDefault'=>$_ShippingOptionIsDefault,'ShippingOptionAmount'=>$_ShippingOptionAmount,'ShippingOptionName'=>$_ShippingOptionName));
	}
	/**
	 * Set ShippingCalculationMode
	 * @param string ShippingCalculationMode
	 * @return string
	 */
	public function setShippingCalculationMode($_ShippingCalculationMode)
	{
		return ($this->ShippingCalculationMode = $_ShippingCalculationMode);
	}
	/**
	 * Get ShippingCalculationMode
	 * @return string
	 */
	public function getShippingCalculationMode()
	{
		return $this->ShippingCalculationMode;
	}
	/**
	 * Set InsuranceOptionSelected
	 * @param string InsuranceOptionSelected
	 * @return string
	 */
	public function setInsuranceOptionSelected($_InsuranceOptionSelected)
	{
		return ($this->InsuranceOptionSelected = $_InsuranceOptionSelected);
	}
	/**
	 * Get InsuranceOptionSelected
	 * @return string
	 */
	public function getInsuranceOptionSelected()
	{
		return $this->InsuranceOptionSelected;
	}
	/**
	 * Set ShippingOptionIsDefault
	 * @param string ShippingOptionIsDefault
	 * @return string
	 */
	public function setShippingOptionIsDefault($_ShippingOptionIsDefault)
	{
		return ($this->ShippingOptionIsDefault = $_ShippingOptionIsDefault);
	}
	/**
	 * Get ShippingOptionIsDefault
	 * @return string
	 */
	public function getShippingOptionIsDefault()
	{
		return $this->ShippingOptionIsDefault;
	}
	/**
	 * Set ShippingOptionAmount
	 * @param BasicAmountType ShippingOptionAmount
	 * @return BasicAmountType
	 */
	public function setShippingOptionAmount($_ShippingOptionAmount)
	{
		return ($this->ShippingOptionAmount = $_ShippingOptionAmount);
	}
	/**
	 * Get ShippingOptionAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingOptionAmount()
	{
		return $this->ShippingOptionAmount;
	}
	/**
	 * Set ShippingOptionName
	 * @param string ShippingOptionName
	 * @return string
	 */
	public function setShippingOptionName($_ShippingOptionName)
	{
		return ($this->ShippingOptionName = $_ShippingOptionName);
	}
	/**
	 * Get ShippingOptionName
	 * @return string
	 */
	public function getShippingOptionName()
	{
		return $this->ShippingOptionName;
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