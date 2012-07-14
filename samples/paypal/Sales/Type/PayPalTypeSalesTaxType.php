<?php
/**
 * Class file for PayPalTypeSalesTaxType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSalesTaxType
 * @date 14/07/2012
 */
class PayPalTypeSalesTaxType extends PayPalWsdlClass
{
	/**
	 * The SalesTaxPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of the sales tax to be collected for the transaction. Sales tax is only for US.
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The SalesTaxState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sales tax for the transaction, expressed as a percentage. Should be empty for items listed on international sites (hence, this is US-only element).
	 * @var string
	 */
	public $SalesTaxState;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether shipping is included in the tax. Applicable if ShippingType = 1 or 2. This element is used for US-only.
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * Constructor
	 * @param float SalesTaxPercent
	 * @param string SalesTaxState
	 * @param boolean ShippingIncludedInTax
	 * @return PayPalTypeSalesTaxType
	 */
	public function __construct($_SalesTaxPercent = null,$_SalesTaxState = null,$_ShippingIncludedInTax = null)
	{
		parent::__construct(array('SalesTaxPercent'=>$_SalesTaxPercent,'SalesTaxState'=>$_SalesTaxState,'ShippingIncludedInTax'=>$_ShippingIncludedInTax));
	}
	/**
	 * Set SalesTaxPercent
	 * @param float SalesTaxPercent
	 * @return float
	 */
	public function setSalesTaxPercent($_SalesTaxPercent)
	{
		return ($this->SalesTaxPercent = $_SalesTaxPercent);
	}
	/**
	 * Get SalesTaxPercent
	 * @return float
	 */
	public function getSalesTaxPercent()
	{
		return $this->SalesTaxPercent;
	}
	/**
	 * Set SalesTaxState
	 * @param string SalesTaxState
	 * @return string
	 */
	public function setSalesTaxState($_SalesTaxState)
	{
		return ($this->SalesTaxState = $_SalesTaxState);
	}
	/**
	 * Get SalesTaxState
	 * @return string
	 */
	public function getSalesTaxState()
	{
		return $this->SalesTaxState;
	}
	/**
	 * Set ShippingIncludedInTax
	 * @param boolean ShippingIncludedInTax
	 * @return boolean
	 */
	public function setShippingIncludedInTax($_ShippingIncludedInTax)
	{
		return ($this->ShippingIncludedInTax = $_ShippingIncludedInTax);
	}
	/**
	 * Get ShippingIncludedInTax
	 * @return boolean
	 */
	public function getShippingIncludedInTax()
	{
		return $this->ShippingIncludedInTax;
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