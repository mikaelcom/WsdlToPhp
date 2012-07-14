<?php
/**
 * Class file for PayPalTypePaymentDetailsItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentDetailsItemType
 * Documentation : PaymentDetailsItemType Information about a Payment Item.
 * @date 14/07/2012
 */
class PayPalTypePaymentDetailsItemType extends PayPalWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item name. Optional Character length and limitations: 127 single-byte characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Number
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item number. Optional Character length and limitations: 127 single-byte characters
	 * @var string
	 */
	public $Number;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item quantity. Optional Character length and limitations: Any positive integer
	 * @var integer
	 */
	public $Quantity;
	/**
	 * The Tax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item sales tax. Optional Character length and limitations: any valid currency amount; currency code is set the same as for OrderTotal.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Tax;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of item You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The EbayItemPaymentDetailsItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Ebay specific details. Optional
	 * @var PayPalTypeEbayItemPaymentDetailsItemType
	 */
	public $EbayItemPaymentDetailsItem;
	/**
	 * The PromoCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Promotional financing code for item. Part of the Merchant Services Promotion Financing feature.
	 * @var string
	 */
	public $PromoCode;
	/**
	 * The ProductCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeProductCategoryType
	 */
	public $ProductCategory;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item description. Optional Character length and limitations: 127 single-byte characters
	 * @var string
	 */
	public $Description;
	/**
	 * The ItemWeight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Item weight.
	 * @var PayPalTypeMeasureType
	 */
	public $ItemWeight;
	/**
	 * The ItemLength
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Item length.
	 * @var PayPalTypeMeasureType
	 */
	public $ItemLength;
	/**
	 * The ItemWidth
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Item width.
	 * @var PayPalTypeMeasureType
	 */
	public $ItemWidth;
	/**
	 * The ItemHeight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Item height.
	 * @var PayPalTypeMeasureType
	 */
	public $ItemHeight;
	/**
	 * The ItemURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : URL for the item. Optional Character length and limitations: no limit.
	 * @var string
	 */
	public $ItemURL;
	/**
	 * The EnhancedItemData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Enhanced data for each item in the cart. Optional
	 * @var PayPalTypeEnhancedItemDataType
	 */
	public $EnhancedItemData;
	/**
	 * The ItemCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Item category - physical or digital. Optional
	 * @var PayPalTypeItemCategoryType
	 */
	public $ItemCategory;
	/**
	 * Constructor
	 * @param string Name
	 * @param string Number
	 * @param integer Quantity
	 * @param PayPalTypeBasicAmountType Tax
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeEbayItemPaymentDetailsItemType EbayItemPaymentDetailsItem
	 * @param string PromoCode
	 * @param PayPalTypeProductCategoryType ProductCategory
	 * @param string Description
	 * @param PayPalTypeMeasureType ItemWeight
	 * @param PayPalTypeMeasureType ItemLength
	 * @param PayPalTypeMeasureType ItemWidth
	 * @param PayPalTypeMeasureType ItemHeight
	 * @param string ItemURL
	 * @param PayPalTypeEnhancedItemDataType EnhancedItemData
	 * @param PayPalTypeItemCategoryType ItemCategory
	 * @return PayPalTypePaymentDetailsItemType
	 */
	public function __construct($_Name = null,$_Number = null,$_Quantity = null,$_Tax = null,$_Amount = null,$_EbayItemPaymentDetailsItem = null,$_PromoCode = null,$_ProductCategory = null,$_Description = null,$_ItemWeight = null,$_ItemLength = null,$_ItemWidth = null,$_ItemHeight = null,$_ItemURL = null,$_EnhancedItemData = null,$_ItemCategory = null)
	{
		parent::__construct(array('Name'=>$_Name,'Number'=>$_Number,'Quantity'=>$_Quantity,'Tax'=>$_Tax,'Amount'=>$_Amount,'EbayItemPaymentDetailsItem'=>$_EbayItemPaymentDetailsItem,'PromoCode'=>$_PromoCode,'ProductCategory'=>$_ProductCategory,'Description'=>$_Description,'ItemWeight'=>$_ItemWeight,'ItemLength'=>$_ItemLength,'ItemWidth'=>$_ItemWidth,'ItemHeight'=>$_ItemHeight,'ItemURL'=>$_ItemURL,'EnhancedItemData'=>$_EnhancedItemData,'ItemCategory'=>$_ItemCategory));
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
	 * Set Number
	 * @param string Number
	 * @return string
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->Number;
	}
	/**
	 * Set Quantity
	 * @param integer Quantity
	 * @return integer
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return integer
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set Tax
	 * @param BasicAmountType Tax
	 * @return BasicAmountType
	 */
	public function setTax($_Tax)
	{
		return ($this->Tax = $_Tax);
	}
	/**
	 * Get Tax
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTax()
	{
		return $this->Tax;
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set EbayItemPaymentDetailsItem
	 * @param EbayItemPaymentDetailsItemType EbayItemPaymentDetailsItem
	 * @return EbayItemPaymentDetailsItemType
	 */
	public function setEbayItemPaymentDetailsItem($_EbayItemPaymentDetailsItem)
	{
		return ($this->EbayItemPaymentDetailsItem = $_EbayItemPaymentDetailsItem);
	}
	/**
	 * Get EbayItemPaymentDetailsItem
	 * @return PayPalTypeEbayItemPaymentDetailsItemType
	 */
	public function getEbayItemPaymentDetailsItem()
	{
		return $this->EbayItemPaymentDetailsItem;
	}
	/**
	 * Set PromoCode
	 * @param string PromoCode
	 * @return string
	 */
	public function setPromoCode($_PromoCode)
	{
		return ($this->PromoCode = $_PromoCode);
	}
	/**
	 * Get PromoCode
	 * @return string
	 */
	public function getPromoCode()
	{
		return $this->PromoCode;
	}
	/**
	 * Set ProductCategory
	 * @param ProductCategoryType ProductCategory
	 * @return ProductCategoryType
	 */
	public function setProductCategory($_ProductCategory)
	{
		return ($this->ProductCategory = PayPalTypeProductCategoryType::valueIsValid($_ProductCategory)?$_ProductCategory:null);
	}
	/**
	 * Get ProductCategory
	 * @return PayPalTypeProductCategoryType
	 */
	public function getProductCategory()
	{
		return $this->ProductCategory;
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
	 * Set ItemWeight
	 * @param MeasureType ItemWeight
	 * @return MeasureType
	 */
	public function setItemWeight($_ItemWeight)
	{
		return ($this->ItemWeight = $_ItemWeight);
	}
	/**
	 * Get ItemWeight
	 * @return PayPalTypeMeasureType
	 */
	public function getItemWeight()
	{
		return $this->ItemWeight;
	}
	/**
	 * Set ItemLength
	 * @param MeasureType ItemLength
	 * @return MeasureType
	 */
	public function setItemLength($_ItemLength)
	{
		return ($this->ItemLength = $_ItemLength);
	}
	/**
	 * Get ItemLength
	 * @return PayPalTypeMeasureType
	 */
	public function getItemLength()
	{
		return $this->ItemLength;
	}
	/**
	 * Set ItemWidth
	 * @param MeasureType ItemWidth
	 * @return MeasureType
	 */
	public function setItemWidth($_ItemWidth)
	{
		return ($this->ItemWidth = $_ItemWidth);
	}
	/**
	 * Get ItemWidth
	 * @return PayPalTypeMeasureType
	 */
	public function getItemWidth()
	{
		return $this->ItemWidth;
	}
	/**
	 * Set ItemHeight
	 * @param MeasureType ItemHeight
	 * @return MeasureType
	 */
	public function setItemHeight($_ItemHeight)
	{
		return ($this->ItemHeight = $_ItemHeight);
	}
	/**
	 * Get ItemHeight
	 * @return PayPalTypeMeasureType
	 */
	public function getItemHeight()
	{
		return $this->ItemHeight;
	}
	/**
	 * Set ItemURL
	 * @param string ItemURL
	 * @return string
	 */
	public function setItemURL($_ItemURL)
	{
		return ($this->ItemURL = $_ItemURL);
	}
	/**
	 * Get ItemURL
	 * @return string
	 */
	public function getItemURL()
	{
		return $this->ItemURL;
	}
	/**
	 * Set EnhancedItemData
	 * @param EnhancedItemDataType EnhancedItemData
	 * @return EnhancedItemDataType
	 */
	public function setEnhancedItemData($_EnhancedItemData)
	{
		return ($this->EnhancedItemData = $_EnhancedItemData);
	}
	/**
	 * Get EnhancedItemData
	 * @return PayPalTypeEnhancedItemDataType
	 */
	public function getEnhancedItemData()
	{
		return $this->EnhancedItemData;
	}
	/**
	 * Set ItemCategory
	 * @param ItemCategoryType ItemCategory
	 * @return ItemCategoryType
	 */
	public function setItemCategory($_ItemCategory)
	{
		return ($this->ItemCategory = PayPalTypeItemCategoryType::valueIsValid($_ItemCategory)?$_ItemCategory:null);
	}
	/**
	 * Get ItemCategory
	 * @return PayPalTypeItemCategoryType
	 */
	public function getItemCategory()
	{
		return $this->ItemCategory;
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