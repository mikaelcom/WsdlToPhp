<?php
/**
 * Class file for EbayTradingTypeTaxesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxesType
 * Documentation : Type defining the Taxes container, which contains detailed sales tax information for an order line item. The Taxes container is only returned if the seller is using the Vertex- based Premium Sales Tax Engine solution. The information in this container supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * @date 04/07/2012
 */
class EbayTradingTypeTaxesType extends EbayTradingWsdlClass
{
	/**
	 * The TotalTaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the total tax amount for the order line item, including the sales tax on the item, the sales tax on shipping and handling, and any electronic waste recycling fee.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalTaxAmount;
	/**
	 * The TaxDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
	 * @var EbayTradingTypeTaxDetailsType
	 */
	public $TaxDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType TotalTaxAmount
	 * @param EbayTradingTypeTaxDetailsType TaxDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeTaxesType
	 */
	public function __construct($_TotalTaxAmount = null,$_TaxDetails = null,$_any = null)
	{
		parent::__construct(array('TotalTaxAmount'=>$_TotalTaxAmount,'TaxDetails'=>$_TaxDetails,'any'=>$_any));
	}
	/**
	 * Set TotalTaxAmount
	 * @param AmountType TotalTaxAmount
	 * @return AmountType
	 */
	public function setTotalTaxAmount($_TotalTaxAmount)
	{
		return ($this->TotalTaxAmount = $_TotalTaxAmount);
	}
	/**
	 * Get TotalTaxAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalTaxAmount()
	{
		return $this->TotalTaxAmount;
	}
	/**
	 * Set TaxDetails
	 * @param TaxDetailsType TaxDetails
	 * @return TaxDetailsType
	 */
	public function setTaxDetails($_TaxDetails)
	{
		return ($this->TaxDetails = $_TaxDetails);
	}
	/**
	 * Get TaxDetails
	 * @return EbayTradingTypeTaxDetailsType
	 */
	public function getTaxDetails()
	{
		return $this->TaxDetails;
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