<?php
/**
 * Class file for EbayTradingTypeSendInvoiceRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSendInvoiceRequestType
 * Documentation : Enables a seller to send an order invoice to a buyer. Where applicable, updates to shipping, payment methods, and sales tax made in this request are applied to the specified order as a whole and to the individual order line items whose data are stored in individual <b>Transaction</b> objects.
 * @date 04/07/2012
 */
class EbayTradingTypeSendInvoiceRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>ItemID</b> (or <b>SKU</b>) is required and must be paired with the corresponding <b>TransactionID</b> to identify a single line item order. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Unless <b>OrderID</b> or <b>OrderLineItemID</b> is provided in the request, the <b>TransactionID</b> is required and must be paired with the corresponding <b>ItemID</b> to identify a single line item order. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) orders. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Payment order. A Combined Payment order can also be created by the seller through the <b>AddOrder</b> call. <br><br> Unless the <b>ItemID</b> (or SKU) and corresponding <b>TransactionID</b>, or the <b>OrderLineItemID</b> is provided in the request to identify a single line item order, the <b>OrderID</b> must be specified. If <b>OrderID</b> is specified, <b>OrderLineItemID</b>, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The InternationalShippingServiceOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : If the buyer has an International shipping address, use this container to offer up to three International shipping services. If International shipping services are offered, (domestic) <b>ShippingServiceOptions</b> should not be included in the request. <br><br> <span class="tablenote"><b>Note:</b> Beginning with Version 719, the number of domestic and international shipping services that a seller may offer the buyer is increasing. The number of domestic shipping services that may be offered is increasing from 3 to 4, and the number of international shipping service options is increasing from 3 to 5. </span>
	 * @var EbayTradingTypeInternationalShippingServiceOptionsType
	 */
	public $InternationalShippingServiceOptions;
	/**
	 * The ShippingServiceOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : If the buyer has a domestic shipping address, use this container to offer up to three domestic shipping services. If domestic shipping services are offered, <b>InternationalShippingServiceOptions</b> should not be included in the request. <br><br> <span class="tablenote"><b>Note:</b> Beginning with Version 719, the number of domestic and international shipping services that a seller may offer the buyer is increasing. The number of domestic shipping services that may be offered is increasing from 3 to 4, and the number of international shipping service options is increasing from 3 to 5. </span>
	 * @var EbayTradingTypeShippingServiceOptionsType
	 */
	public $ShippingServiceOptions;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of sales tax details. The amount of sales tax to add to the price of an order is dependent on the sales tax rate in the buyer's state and whether sales tax is being applied to the cost of the order only or the cost of the order plus shipping.
	 * @var EbayTradingTypeSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether an insurance fee is required. An <b>InsuranceOption</b> value of <b>IncludedInShippingHandling</b> cannot be used if the item will use calculated shipping. Some shipping carriers automatically include shipping insurance for qualifying items.<br>
	 * @var EbayTradingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The InsuranceFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Insurance cost, as set by seller, if ShippingType = 1. Specify if <b>InsuranceOption</b> is optional or required. Must be greater than zero value if a value of Optional or Required is passed in <b>InsuranceOption</b>. Value specified should be the total cost of insuring the item.<br>
	 * @var EbayTradingTypeAmountType
	 */
	public $InsuranceFee;
	/**
	 * The PaymentMethods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This optional field allows a US or German seller to add specific payment methods that were not in the original item listing. The only valid values for this field are 'PayPal' for a US listing, or 'MoneyXferAcceptedInCheckout' (CIP+) for a DE listing.
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The PayPalEmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If the <b>PaymentMethods</b> field is used and set to PayPal, the seller provides his/her PayPal email address in this field.
	 * @var string
	 */
	public $PayPalEmailAddress;
	/**
	 * The CheckoutInstructions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field allows the seller to provide a message or instructions regarding checkout/payment or the return policy.
	 * @var string
	 */
	public $CheckoutInstructions;
	/**
	 * The EmailCopyToSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag indicating whether or not the seller wishes to receive an email copy of the invoice sent to the buyer.
	 * @var boolean
	 */
	public $EmailCopyToSeller;
	/**
	 * The CODCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Italy site (site ID 101) only. Enables you to specify the cash-on-delivery (COD) cost for COD shipping.
	 * @var EbayTradingTypeAmountType
	 */
	public $CODCost;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller's unique identifier for an item that is being tracked by this SKU. If <b>OrderID</b> or <b>OrderLineItemID</b> are not provided, both <b>SKU</b> (or <b>ItemID</b>) and corresponding <b>TransactionID</b> must be provided to uniquely identify a single line item order. For a multiple line item (Combined Payment) order, <b>OrderID</b> must be used. <br> <br> This field can only be used if the <b>Item.InventoryTrackingMethod</b> field (set with the <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> calls) is set to SKU.
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. <br> <br> Unless the <b>ItemID</b> (or <b>SKU</b>) and corresponding <b>TransactionID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> are ignored if present in the same request.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param EbayTradingTypeInternationalShippingServiceOptionsType InternationalShippingServiceOptions
	 * @param EbayTradingTypeShippingServiceOptionsType ShippingServiceOptions
	 * @param EbayTradingTypeSalesTaxType SalesTax
	 * @param EbayTradingTypeInsuranceOptionCodeType InsuranceOption
	 * @param EbayTradingTypeAmountType InsuranceFee
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethods
	 * @param string PayPalEmailAddress
	 * @param string CheckoutInstructions
	 * @param boolean EmailCopyToSeller
	 * @param EbayTradingTypeAmountType CODCost
	 * @param EbayTradingTypeSKUType SKU
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeSendInvoiceRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_OrderID = null,$_InternationalShippingServiceOptions = null,$_ShippingServiceOptions = null,$_SalesTax = null,$_InsuranceOption = null,$_InsuranceFee = null,$_PaymentMethods = null,$_PayPalEmailAddress = null,$_CheckoutInstructions = null,$_EmailCopyToSeller = null,$_CODCost = null,$_SKU = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderID'=>$_OrderID,'InternationalShippingServiceOptions'=>$_InternationalShippingServiceOptions,'ShippingServiceOptions'=>$_ShippingServiceOptions,'SalesTax'=>$_SalesTax,'InsuranceOption'=>$_InsuranceOption,'InsuranceFee'=>$_InsuranceFee,'PaymentMethods'=>$_PaymentMethods,'PayPalEmailAddress'=>$_PayPalEmailAddress,'CheckoutInstructions'=>$_CheckoutInstructions,'EmailCopyToSeller'=>$_EmailCopyToSeller,'CODCost'=>$_CODCost,'SKU'=>$_SKU,'OrderLineItemID'=>$_OrderLineItemID));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set OrderID
	 * @param OrderIDType OrderID
	 * @return OrderIDType
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = EbayTradingTypeOrderIDType::valueIsValid($_OrderID)?$_OrderID:null);
	}
	/**
	 * Get OrderID
	 * @return EbayTradingTypeOrderIDType
	 */
	public function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * Set InternationalShippingServiceOptions
	 * @param InternationalShippingServiceOptionsType InternationalShippingServiceOptions
	 * @return InternationalShippingServiceOptionsType
	 */
	public function setInternationalShippingServiceOptions($_InternationalShippingServiceOptions)
	{
		return ($this->InternationalShippingServiceOptions = $_InternationalShippingServiceOptions);
	}
	/**
	 * Get InternationalShippingServiceOptions
	 * @return EbayTradingTypeInternationalShippingServiceOptionsType
	 */
	public function getInternationalShippingServiceOptions()
	{
		return $this->InternationalShippingServiceOptions;
	}
	/**
	 * Set ShippingServiceOptions
	 * @param ShippingServiceOptionsType ShippingServiceOptions
	 * @return ShippingServiceOptionsType
	 */
	public function setShippingServiceOptions($_ShippingServiceOptions)
	{
		return ($this->ShippingServiceOptions = $_ShippingServiceOptions);
	}
	/**
	 * Get ShippingServiceOptions
	 * @return EbayTradingTypeShippingServiceOptionsType
	 */
	public function getShippingServiceOptions()
	{
		return $this->ShippingServiceOptions;
	}
	/**
	 * Set SalesTax
	 * @param SalesTaxType SalesTax
	 * @return SalesTaxType
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return EbayTradingTypeSalesTaxType
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set InsuranceOption
	 * @param InsuranceOptionCodeType InsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInsuranceOption($_InsuranceOption)
	{
		return ($this->InsuranceOption = EbayTradingTypeInsuranceOptionCodeType::valueIsValid($_InsuranceOption)?$_InsuranceOption:null);
	}
	/**
	 * Get InsuranceOption
	 * @return EbayTradingTypeInsuranceOptionCodeType
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set InsuranceFee
	 * @param AmountType InsuranceFee
	 * @return AmountType
	 */
	public function setInsuranceFee($_InsuranceFee)
	{
		return ($this->InsuranceFee = $_InsuranceFee);
	}
	/**
	 * Get InsuranceFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * Set PaymentMethods
	 * @param BuyerPaymentMethodCodeType PaymentMethods
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethods($_PaymentMethods)
	{
		return ($this->PaymentMethods = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethods)?$_PaymentMethods:null);
	}
	/**
	 * Get PaymentMethods
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethods()
	{
		return $this->PaymentMethods;
	}
	/**
	 * Set PayPalEmailAddress
	 * @param string PayPalEmailAddress
	 * @return string
	 */
	public function setPayPalEmailAddress($_PayPalEmailAddress)
	{
		return ($this->PayPalEmailAddress = $_PayPalEmailAddress);
	}
	/**
	 * Get PayPalEmailAddress
	 * @return string
	 */
	public function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}
	/**
	 * Set CheckoutInstructions
	 * @param string CheckoutInstructions
	 * @return string
	 */
	public function setCheckoutInstructions($_CheckoutInstructions)
	{
		return ($this->CheckoutInstructions = $_CheckoutInstructions);
	}
	/**
	 * Get CheckoutInstructions
	 * @return string
	 */
	public function getCheckoutInstructions()
	{
		return $this->CheckoutInstructions;
	}
	/**
	 * Set EmailCopyToSeller
	 * @param boolean EmailCopyToSeller
	 * @return boolean
	 */
	public function setEmailCopyToSeller($_EmailCopyToSeller)
	{
		return ($this->EmailCopyToSeller = $_EmailCopyToSeller);
	}
	/**
	 * Get EmailCopyToSeller
	 * @return boolean
	 */
	public function getEmailCopyToSeller()
	{
		return $this->EmailCopyToSeller;
	}
	/**
	 * Set CODCost
	 * @param AmountType CODCost
	 * @return AmountType
	 */
	public function setCODCost($_CODCost)
	{
		return ($this->CODCost = $_CODCost);
	}
	/**
	 * Get CODCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
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