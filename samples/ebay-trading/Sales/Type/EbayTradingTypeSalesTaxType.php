<?php
/**
 * Class file for EbayTradingTypeSalesTaxType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSalesTaxType
 * Documentation : Type for expressing sales tax data.
 * @date 04/07/2012
 */
class EbayTradingTypeSalesTaxType extends EbayTradingWsdlClass
{
	/**
	 * The SalesTaxPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percent of an item's price to be charged as the sales tax for the order. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br><br> Applicable to Half.com (for GetOrders).
	 * @var float
	 */
	public $SalesTaxPercent;
	/**
	 * The SalesTaxState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : State or jurisdiction for which the sales tax is being collected. Only returned if the seller specified a value. <br><br> Applicable to Half.com (for GetOrders).
	 * @var string
	 */
	public $SalesTaxState;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (US only) Whether shipping costs were part of the base amount that was taxed. Flat or calculated shipping. <br><br> Applicable to Half.com (for GetOrders).
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The SalesTaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of sales tax, calculated for an order based on the SalesTaxPercent and pricing information. US (site 0) and Motors (site 100) sites only, excluding vehicle listings. <br><br> GetItemTransactions can return incorrect sales tax if the name of a state is not abbreviated (e.g. if the value is "Illinois" rather than "IL") in TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince. If the name of a state is not abbreviated, sales tax should be obtained by using the OrderLineItemID to call GetOrderTransactions. <br><br> Applicable to Half.com (for GetOrders).
	 * @var EbayTradingTypeAmountType
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
	 * @param EbayTradingTypeAmountType SalesTaxAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeSalesTaxType
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
	 * @return EbayTradingTypeAmountType
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