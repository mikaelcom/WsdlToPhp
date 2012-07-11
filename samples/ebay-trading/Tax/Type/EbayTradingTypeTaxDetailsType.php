<?php
/**
 * Class file for EbayTradingTypeTaxDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTaxDetailsType
 * Documentation : Type defining the TaxDetails container, which consists of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling. The information in this container supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * @date 04/07/2012
 */
class EbayTradingTypeTaxDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Imposition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates the sales tax type. A separate TaxDetails container is required for each unique imposition (tax type).
	 * @var EbayTradingTypeTaxTypeCodeType
	 */
	public $Imposition;
	/**
	 * The TaxDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates the description of the sales tax.
	 * @var EbayTradingTypeTaxDescriptionCodeType
	 */
	public $TaxDescription;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is the total amount of sales tax for the order line item for the corresponding impositiion (tax type). <br><br> <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
	 * @var EbayTradingTypeAmountType
	 */
	public $TaxAmount;
	/**
	 * The TaxOnSubtotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is the amount of sales tax applied based on the unit cost of the order line item for the corresponding impositiion (tax type).
	 * @var EbayTradingTypeAmountType
	 */
	public $TaxOnSubtotalAmount;
	/**
	 * The TaxOnShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is the amount of sales tax applied based on shipping costs for the order line item for the corresponding impositiion (tax type).
	 * @var EbayTradingTypeAmountType
	 */
	public $TaxOnShippingAmount;
	/**
	 * The TaxOnHandlingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is the amount of sales tax applied based on handling costs for the order line item for the corresponding impositiion (tax type).
	 * @var EbayTradingTypeAmountType
	 */
	public $TaxOnHandlingAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeTaxTypeCodeType Imposition
	 * @param EbayTradingTypeTaxDescriptionCodeType TaxDescription
	 * @param EbayTradingTypeAmountType TaxAmount
	 * @param EbayTradingTypeAmountType TaxOnSubtotalAmount
	 * @param EbayTradingTypeAmountType TaxOnShippingAmount
	 * @param EbayTradingTypeAmountType TaxOnHandlingAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeTaxDetailsType
	 */
	public function __construct($_Imposition = null,$_TaxDescription = null,$_TaxAmount = null,$_TaxOnSubtotalAmount = null,$_TaxOnShippingAmount = null,$_TaxOnHandlingAmount = null,$_any = null)
	{
		parent::__construct(array('Imposition'=>$_Imposition,'TaxDescription'=>$_TaxDescription,'TaxAmount'=>$_TaxAmount,'TaxOnSubtotalAmount'=>$_TaxOnSubtotalAmount,'TaxOnShippingAmount'=>$_TaxOnShippingAmount,'TaxOnHandlingAmount'=>$_TaxOnHandlingAmount,'any'=>$_any));
	}
	/**
	 * Set Imposition
	 * @param TaxTypeCodeType Imposition
	 * @return TaxTypeCodeType
	 */
	public function setImposition($_Imposition)
	{
		return ($this->Imposition = EbayTradingTypeTaxTypeCodeType::valueIsValid($_Imposition)?$_Imposition:null);
	}
	/**
	 * Get Imposition
	 * @return EbayTradingTypeTaxTypeCodeType
	 */
	public function getImposition()
	{
		return $this->Imposition;
	}
	/**
	 * Set TaxDescription
	 * @param TaxDescriptionCodeType TaxDescription
	 * @return TaxDescriptionCodeType
	 */
	public function setTaxDescription($_TaxDescription)
	{
		return ($this->TaxDescription = EbayTradingTypeTaxDescriptionCodeType::valueIsValid($_TaxDescription)?$_TaxDescription:null);
	}
	/**
	 * Get TaxDescription
	 * @return EbayTradingTypeTaxDescriptionCodeType
	 */
	public function getTaxDescription()
	{
		return $this->TaxDescription;
	}
	/**
	 * Set TaxAmount
	 * @param AmountType TaxAmount
	 * @return AmountType
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set TaxOnSubtotalAmount
	 * @param AmountType TaxOnSubtotalAmount
	 * @return AmountType
	 */
	public function setTaxOnSubtotalAmount($_TaxOnSubtotalAmount)
	{
		return ($this->TaxOnSubtotalAmount = $_TaxOnSubtotalAmount);
	}
	/**
	 * Get TaxOnSubtotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTaxOnSubtotalAmount()
	{
		return $this->TaxOnSubtotalAmount;
	}
	/**
	 * Set TaxOnShippingAmount
	 * @param AmountType TaxOnShippingAmount
	 * @return AmountType
	 */
	public function setTaxOnShippingAmount($_TaxOnShippingAmount)
	{
		return ($this->TaxOnShippingAmount = $_TaxOnShippingAmount);
	}
	/**
	 * Get TaxOnShippingAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTaxOnShippingAmount()
	{
		return $this->TaxOnShippingAmount;
	}
	/**
	 * Set TaxOnHandlingAmount
	 * @param AmountType TaxOnHandlingAmount
	 * @return AmountType
	 */
	public function setTaxOnHandlingAmount($_TaxOnHandlingAmount)
	{
		return ($this->TaxOnHandlingAmount = $_TaxOnHandlingAmount);
	}
	/**
	 * Get TaxOnHandlingAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTaxOnHandlingAmount()
	{
		return $this->TaxOnHandlingAmount;
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