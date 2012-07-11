<?php
/**
 * Class file for EbayShoppingTypeSalesTaxType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSalesTaxType
 * Documentation : Type for expressing sales tax data.
 * @date 05/07/2012
 */
class EbayShoppingTypeSalesTaxType extends EbayShoppingWsdlClass
{
	/**
	 * The SalesTaxPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percent of an item's price to be charged as the sales tax for the transaction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The SalesTaxState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : State or jurisdiction for which the sales tax is being collected. Only returned if the seller specified a value.
	 * @var string
	 */
	public $SalesTaxState;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (US only) Whether shipping costs were part of the base amount that was taxed. Flat or calculated shipping.
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The SalesTaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (US only) The amount of sales tax, calculated for a transaction based on the SalesTaxPercent and pricing information.
	 * @var EbayShoppingTypeAmountType
	 */
	public $SalesTaxAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param float SalesTaxPercent
	 * @param string SalesTaxState
	 * @param boolean ShippingIncludedInTax
	 * @param EbayShoppingTypeAmountType SalesTaxAmount
	 * @param DOMDocument any
	 * @return EbayShoppingTypeSalesTaxType
	 */
	public function __construct($_SalesTaxPercent = null,$_SalesTaxState = null,$_ShippingIncludedInTax = null,$_SalesTaxAmount = null,$_any = null)
	{
		parent::__construct(array('SalesTaxPercent'=>$_SalesTaxPercent,'SalesTaxState'=>$_SalesTaxState,'ShippingIncludedInTax'=>$_ShippingIncludedInTax,'SalesTaxAmount'=>$_SalesTaxAmount,'any'=>$_any));
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
	 * Set SalesTaxAmount
	 * @param AmountType SalesTaxAmount
	 * @return AmountType
	 */
	public function setSalesTaxAmount($_SalesTaxAmount)
	{
		return ($this->SalesTaxAmount = $_SalesTaxAmount);
	}
	/**
	 * Get SalesTaxAmount
	 * @return EbayShoppingTypeAmountType
	 */
	public function getSalesTaxAmount()
	{
		return $this->SalesTaxAmount;
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