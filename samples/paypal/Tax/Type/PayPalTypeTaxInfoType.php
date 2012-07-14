<?php
/**
 * Class file for PayPalTypeTaxInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTaxInfoType
 * Documentation : 
 * @date 14/07/2012
 */
class PayPalTypeTaxInfoType extends PayPalWsdlClass
{
	/**
	 * The TaxAmount
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The SalesTaxPercentage
	 * @var string
	 */
	public $SalesTaxPercentage;
	/**
	 * The TaxState
	 * @var string
	 */
	public $TaxState;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType TaxAmount
	 * @param string SalesTaxPercentage
	 * @param string TaxState
	 * @return PayPalTypeTaxInfoType
	 */
	public function __construct($_TaxAmount = null,$_SalesTaxPercentage = null,$_TaxState = null)
	{
		parent::__construct(array('TaxAmount'=>$_TaxAmount,'SalesTaxPercentage'=>$_SalesTaxPercentage,'TaxState'=>$_TaxState));
	}
	/**
	 * Set TaxAmount
	 * @param BasicAmountType TaxAmount
	 * @return BasicAmountType
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set SalesTaxPercentage
	 * @param string SalesTaxPercentage
	 * @return string
	 */
	public function setSalesTaxPercentage($_SalesTaxPercentage)
	{
		return ($this->SalesTaxPercentage = $_SalesTaxPercentage);
	}
	/**
	 * Get SalesTaxPercentage
	 * @return string
	 */
	public function getSalesTaxPercentage()
	{
		return $this->SalesTaxPercentage;
	}
	/**
	 * Set TaxState
	 * @param string TaxState
	 * @return string
	 */
	public function setTaxState($_TaxState)
	{
		return ($this->TaxState = $_TaxState);
	}
	/**
	 * Get TaxState
	 * @return string
	 */
	public function getTaxState()
	{
		return $this->TaxState;
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