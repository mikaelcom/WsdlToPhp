<?php
/**
 * Class file for PayPalTypePaymentItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentItemType
 * Documentation : PaymentItemType Information about a Payment Item.
 * @date 14/07/2012
 */
class PayPalTypePaymentItemType extends PayPalWsdlClass
{
	/**
	 * The EbayItemTxnId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay Auction Transaction ID of the Item Optional Character length and limitations: 255 single-byte characters
	 * @var string
	 */
	public $EbayItemTxnId;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item name set by you or entered by the customer. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $Name;
	/**
	 * The Number
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item number set by you. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $Number;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity set by you or entered by the customer. Character length and limitations: no limit
	 * @var string
	 */
	public $Quantity;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of tax charged on payment
	 * @var string
	 */
	public $SalesTax;
	/**
	 * The ShippingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of shipping charged on payment
	 * @var string
	 */
	public $ShippingAmount;
	/**
	 * The HandlingAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of handling charged on payment
	 * @var string
	 */
	public $HandlingAmount;
	/**
	 * The CouponID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Coupon ID Number
	 * @var string
	 */
	public $CouponID;
	/**
	 * The CouponAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount Value of The Coupon
	 * @var string
	 */
	public $CouponAmount;
	/**
	 * The CouponAmountCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currency of the Coupon Amount
	 * @var string
	 */
	public $CouponAmountCurrency;
	/**
	 * The LoyaltyCardDiscountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of Discount on this Loyalty Card
	 * @var string
	 */
	public $LoyaltyCardDiscountAmount;
	/**
	 * The LoyaltyCardDiscountCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Currency of the Discount
	 * @var string
	 */
	public $LoyaltyCardDiscountCurrency;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of item
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Item options selected in PayPal shopping cart
	 * @var PayPalTypeOptionType
	 */
	public $Options;
	/**
	 * Constructor
	 * @param string EbayItemTxnId
	 * @param string Name
	 * @param string Number
	 * @param string Quantity
	 * @param string SalesTax
	 * @param string ShippingAmount
	 * @param string HandlingAmount
	 * @param string CouponID
	 * @param string CouponAmount
	 * @param string CouponAmountCurrency
	 * @param string LoyaltyCardDiscountAmount
	 * @param string LoyaltyCardDiscountCurrency
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeOptionType Options
	 * @return PayPalTypePaymentItemType
	 */
	public function __construct($_EbayItemTxnId = null,$_Name = null,$_Number = null,$_Quantity = null,$_SalesTax = null,$_ShippingAmount = null,$_HandlingAmount = null,$_CouponID = null,$_CouponAmount = null,$_CouponAmountCurrency = null,$_LoyaltyCardDiscountAmount = null,$_LoyaltyCardDiscountCurrency = null,$_Amount = null,$_Options = null)
	{
		parent::__construct(array('EbayItemTxnId'=>$_EbayItemTxnId,'Name'=>$_Name,'Number'=>$_Number,'Quantity'=>$_Quantity,'SalesTax'=>$_SalesTax,'ShippingAmount'=>$_ShippingAmount,'HandlingAmount'=>$_HandlingAmount,'CouponID'=>$_CouponID,'CouponAmount'=>$_CouponAmount,'CouponAmountCurrency'=>$_CouponAmountCurrency,'LoyaltyCardDiscountAmount'=>$_LoyaltyCardDiscountAmount,'LoyaltyCardDiscountCurrency'=>$_LoyaltyCardDiscountCurrency,'Amount'=>$_Amount,'Options'=>$_Options));
	}
	/**
	 * Set EbayItemTxnId
	 * @param string EbayItemTxnId
	 * @return string
	 */
	public function setEbayItemTxnId($_EbayItemTxnId)
	{
		return ($this->EbayItemTxnId = $_EbayItemTxnId);
	}
	/**
	 * Get EbayItemTxnId
	 * @return string
	 */
	public function getEbayItemTxnId()
	{
		return $this->EbayItemTxnId;
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
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set SalesTax
	 * @param string SalesTax
	 * @return string
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return string
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set ShippingAmount
	 * @param string ShippingAmount
	 * @return string
	 */
	public function setShippingAmount($_ShippingAmount)
	{
		return ($this->ShippingAmount = $_ShippingAmount);
	}
	/**
	 * Get ShippingAmount
	 * @return string
	 */
	public function getShippingAmount()
	{
		return $this->ShippingAmount;
	}
	/**
	 * Set HandlingAmount
	 * @param string HandlingAmount
	 * @return string
	 */
	public function setHandlingAmount($_HandlingAmount)
	{
		return ($this->HandlingAmount = $_HandlingAmount);
	}
	/**
	 * Get HandlingAmount
	 * @return string
	 */
	public function getHandlingAmount()
	{
		return $this->HandlingAmount;
	}
	/**
	 * Set CouponID
	 * @param string CouponID
	 * @return string
	 */
	public function setCouponID($_CouponID)
	{
		return ($this->CouponID = $_CouponID);
	}
	/**
	 * Get CouponID
	 * @return string
	 */
	public function getCouponID()
	{
		return $this->CouponID;
	}
	/**
	 * Set CouponAmount
	 * @param string CouponAmount
	 * @return string
	 */
	public function setCouponAmount($_CouponAmount)
	{
		return ($this->CouponAmount = $_CouponAmount);
	}
	/**
	 * Get CouponAmount
	 * @return string
	 */
	public function getCouponAmount()
	{
		return $this->CouponAmount;
	}
	/**
	 * Set CouponAmountCurrency
	 * @param string CouponAmountCurrency
	 * @return string
	 */
	public function setCouponAmountCurrency($_CouponAmountCurrency)
	{
		return ($this->CouponAmountCurrency = $_CouponAmountCurrency);
	}
	/**
	 * Get CouponAmountCurrency
	 * @return string
	 */
	public function getCouponAmountCurrency()
	{
		return $this->CouponAmountCurrency;
	}
	/**
	 * Set LoyaltyCardDiscountAmount
	 * @param string LoyaltyCardDiscountAmount
	 * @return string
	 */
	public function setLoyaltyCardDiscountAmount($_LoyaltyCardDiscountAmount)
	{
		return ($this->LoyaltyCardDiscountAmount = $_LoyaltyCardDiscountAmount);
	}
	/**
	 * Get LoyaltyCardDiscountAmount
	 * @return string
	 */
	public function getLoyaltyCardDiscountAmount()
	{
		return $this->LoyaltyCardDiscountAmount;
	}
	/**
	 * Set LoyaltyCardDiscountCurrency
	 * @param string LoyaltyCardDiscountCurrency
	 * @return string
	 */
	public function setLoyaltyCardDiscountCurrency($_LoyaltyCardDiscountCurrency)
	{
		return ($this->LoyaltyCardDiscountCurrency = $_LoyaltyCardDiscountCurrency);
	}
	/**
	 * Get LoyaltyCardDiscountCurrency
	 * @return string
	 */
	public function getLoyaltyCardDiscountCurrency()
	{
		return $this->LoyaltyCardDiscountCurrency;
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
	 * Set Options
	 * @param OptionType Options
	 * @return OptionType
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return PayPalTypeOptionType
	 */
	public function getOptions()
	{
		return $this->Options;
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