<?php
/**
 * Class file for PayPalTypeInvoiceItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeInvoiceItemType
 * Documentation : Describes an individual item for an invoice.
 * @date 14/07/2012
 */
class PayPalTypeInvoiceItemType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : a human readable item nameOptional Character length and limits: 127 single-byte characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : a human readable item descriptionOptional Character length and limits: 127 single-byte characters
	 * @var string
	 */
	public $Description;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The International Article Number or Universal Product Code (UPC) for the item. Empty string is allowed. Character length and limits: 17 single-byte characters
	 * @var string
	 */
	public $EAN;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The Stock-Keeping Unit or other identification code assigned to the item. Character length and limits: 64 single-byte characters
	 * @var string
	 */
	public $SKU;
	/**
	 * The ReturnPolicyIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : A retailer could apply different return policies on different items. Each return policy would be identified using a label or identifier. This return policy identifier should be set here. This identifier will be displayed next to the item in the e-Receipt. Character length and limits: 8 single-byte characters
	 * @var string
	 */
	public $ReturnPolicyIdentifier;
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : total price of this item
	 * @var PayPalTypeBasicAmountType
	 */
	public $Price;
	/**
	 * The ItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : price per item quantity
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemPrice;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : quantity of the item (non-negative)
	 * @var double
	 */
	public $ItemCount;
	/**
	 * The ItemCountUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unit of measure for the itemCount
	 * @var PayPalTypeUnitOfMeasure
	 */
	public $ItemCountUnit;
	/**
	 * The Discount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : discount applied to this item
	 * @var PayPalTypeDiscountType
	 */
	public $Discount;
	/**
	 * The Taxable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : identifies whether this item is taxable or not. If not passed, this will be assumed to be true.
	 * @var boolean
	 */
	public $Taxable;
	/**
	 * The TaxRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The tax percentage applied to the item. This is only used for displaying in the receipt, it is not used in pricing calculations. Note: we have totalTax at invoice level. It's up to the caller to do the calculations for setting that other element.
	 * @var double
	 */
	public $TaxRate;
	/**
	 * The AdditionalFees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Additional fees to this item
	 * @var PayPalTypeAdditionalFeeType
	 */
	public $AdditionalFees;
	/**
	 * The Reimbursable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : identifies whether this is reimbursable or not. If not pass, this will be assumed to be true.
	 * @var boolean
	 */
	public $Reimbursable;
	/**
	 * The MPN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Manufacturer part number.
	 * @var string
	 */
	public $MPN;
	/**
	 * The ISBN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : International Standard Book Number. Reference http://en.wikipedia.org/wiki/ISBN Character length and limits: 32 single-byte characters
	 * @var string
	 */
	public $ISBN;
	/**
	 * The PLU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Price Look-Up code Reference http://en.wikipedia.org/wiki/Price_Look-Up_code Character length and limits: 5 single-byte characters
	 * @var string
	 */
	public $PLU;
	/**
	 * The ModelNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Character length and limits: 32 single-byte characters
	 * @var string
	 */
	public $ModelNumber;
	/**
	 * The StyleNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Character length and limits: 32 single-byte characters
	 * @var string
	 */
	public $StyleNumber;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Description
	 * @param string EAN
	 * @param string SKU
	 * @param string ReturnPolicyIdentifier
	 * @param PayPalTypeBasicAmountType Price
	 * @param PayPalTypeBasicAmountType ItemPrice
	 * @param double ItemCount
	 * @param PayPalTypeUnitOfMeasure ItemCountUnit
	 * @param PayPalTypeDiscountType Discount
	 * @param boolean Taxable
	 * @param double TaxRate
	 * @param PayPalTypeAdditionalFeeType AdditionalFees
	 * @param boolean Reimbursable
	 * @param string MPN
	 * @param string ISBN
	 * @param string PLU
	 * @param string ModelNumber
	 * @param string StyleNumber
	 * @return PayPalTypeInvoiceItemType
	 */
	public function __construct($_Name = null,$_Description = null,$_EAN = null,$_SKU = null,$_ReturnPolicyIdentifier = null,$_Price = null,$_ItemPrice = null,$_ItemCount = null,$_ItemCountUnit = null,$_Discount = null,$_Taxable = null,$_TaxRate = null,$_AdditionalFees = null,$_Reimbursable = null,$_MPN = null,$_ISBN = null,$_PLU = null,$_ModelNumber = null,$_StyleNumber = null)
	{
		parent::__construct(array('Name'=>$_Name,'Description'=>$_Description,'EAN'=>$_EAN,'SKU'=>$_SKU,'ReturnPolicyIdentifier'=>$_ReturnPolicyIdentifier,'Price'=>$_Price,'ItemPrice'=>$_ItemPrice,'ItemCount'=>$_ItemCount,'ItemCountUnit'=>$_ItemCountUnit,'Discount'=>$_Discount,'Taxable'=>$_Taxable,'TaxRate'=>$_TaxRate,'AdditionalFees'=>$_AdditionalFees,'Reimbursable'=>$_Reimbursable,'MPN'=>$_MPN,'ISBN'=>$_ISBN,'PLU'=>$_PLU,'ModelNumber'=>$_ModelNumber,'StyleNumber'=>$_StyleNumber));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set EAN
	 * @param string EAN
	 * @return string
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return string
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set SKU
	 * @param string SKU
	 * @return string
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = $_SKU);
	}
	/**
	 * Get SKU
	 * @return string
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set ReturnPolicyIdentifier
	 * @param string ReturnPolicyIdentifier
	 * @return string
	 */
	public function setReturnPolicyIdentifier($_ReturnPolicyIdentifier)
	{
		return ($this->ReturnPolicyIdentifier = $_ReturnPolicyIdentifier);
	}
	/**
	 * Get ReturnPolicyIdentifier
	 * @return string
	 */
	public function getReturnPolicyIdentifier()
	{
		return $this->ReturnPolicyIdentifier;
	}
	/**
	 * Set Price
	 * @param BasicAmountType Price
	 * @return BasicAmountType
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return PayPalTypeBasicAmountType
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set ItemPrice
	 * @param BasicAmountType ItemPrice
	 * @return BasicAmountType
	 */
	public function setItemPrice($_ItemPrice)
	{
		return ($this->ItemPrice = $_ItemPrice);
	}
	/**
	 * Get ItemPrice
	 * @return PayPalTypeBasicAmountType
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set ItemCount
	 * @param double ItemCount
	 * @return double
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return double
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set ItemCountUnit
	 * @param UnitOfMeasure ItemCountUnit
	 * @return UnitOfMeasure
	 */
	public function setItemCountUnit($_ItemCountUnit)
	{
		return ($this->ItemCountUnit = PayPalTypeUnitOfMeasure::valueIsValid($_ItemCountUnit)?$_ItemCountUnit:null);
	}
	/**
	 * Get ItemCountUnit
	 * @return PayPalTypeUnitOfMeasure
	 */
	public function getItemCountUnit()
	{
		return $this->ItemCountUnit;
	}
	/**
	 * Set Discount
	 * @param DiscountType Discount
	 * @return DiscountType
	 */
	public function setDiscount($_Discount)
	{
		return ($this->Discount = $_Discount);
	}
	/**
	 * Get Discount
	 * @return PayPalTypeDiscountType
	 */
	public function getDiscount()
	{
		return $this->Discount;
	}
	/**
	 * Set Taxable
	 * @param boolean Taxable
	 * @return boolean
	 */
	public function setTaxable($_Taxable)
	{
		return ($this->Taxable = $_Taxable);
	}
	/**
	 * Get Taxable
	 * @return boolean
	 */
	public function getTaxable()
	{
		return $this->Taxable;
	}
	/**
	 * Set TaxRate
	 * @param double TaxRate
	 * @return double
	 */
	public function setTaxRate($_TaxRate)
	{
		return ($this->TaxRate = $_TaxRate);
	}
	/**
	 * Get TaxRate
	 * @return double
	 */
	public function getTaxRate()
	{
		return $this->TaxRate;
	}
	/**
	 * Set AdditionalFees
	 * @param AdditionalFeeType AdditionalFees
	 * @return AdditionalFeeType
	 */
	public function setAdditionalFees($_AdditionalFees)
	{
		return ($this->AdditionalFees = $_AdditionalFees);
	}
	/**
	 * Get AdditionalFees
	 * @return PayPalTypeAdditionalFeeType
	 */
	public function getAdditionalFees()
	{
		return $this->AdditionalFees;
	}
	/**
	 * Set Reimbursable
	 * @param boolean Reimbursable
	 * @return boolean
	 */
	public function setReimbursable($_Reimbursable)
	{
		return ($this->Reimbursable = $_Reimbursable);
	}
	/**
	 * Get Reimbursable
	 * @return boolean
	 */
	public function getReimbursable()
	{
		return $this->Reimbursable;
	}
	/**
	 * Set MPN
	 * @param string MPN
	 * @return string
	 */
	public function setMPN($_MPN)
	{
		return ($this->MPN = $_MPN);
	}
	/**
	 * Get MPN
	 * @return string
	 */
	public function getMPN()
	{
		return $this->MPN;
	}
	/**
	 * Set ISBN
	 * @param string ISBN
	 * @return string
	 */
	public function setISBN($_ISBN)
	{
		return ($this->ISBN = $_ISBN);
	}
	/**
	 * Get ISBN
	 * @return string
	 */
	public function getISBN()
	{
		return $this->ISBN;
	}
	/**
	 * Set PLU
	 * @param string PLU
	 * @return string
	 */
	public function setPLU($_PLU)
	{
		return ($this->PLU = $_PLU);
	}
	/**
	 * Get PLU
	 * @return string
	 */
	public function getPLU()
	{
		return $this->PLU;
	}
	/**
	 * Set ModelNumber
	 * @param string ModelNumber
	 * @return string
	 */
	public function setModelNumber($_ModelNumber)
	{
		return ($this->ModelNumber = $_ModelNumber);
	}
	/**
	 * Get ModelNumber
	 * @return string
	 */
	public function getModelNumber()
	{
		return $this->ModelNumber;
	}
	/**
	 * Set StyleNumber
	 * @param string StyleNumber
	 * @return string
	 */
	public function setStyleNumber($_StyleNumber)
	{
		return ($this->StyleNumber = $_StyleNumber);
	}
	/**
	 * Get StyleNumber
	 * @return string
	 */
	public function getStyleNumber()
	{
		return $this->StyleNumber;
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