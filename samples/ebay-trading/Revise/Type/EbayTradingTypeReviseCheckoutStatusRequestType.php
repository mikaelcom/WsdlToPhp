<?php
/**
 * Class file for EbayTradingTypeReviseCheckoutStatusRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseCheckoutStatusRequestType
 * Documentation : A seller can use this call to update the payment details, the shipping details, and the status of an order.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseCheckoutStatusRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for <b>ReviseCheckoutStatus</b>. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request. <br /> <br /> It is also possible to identify a single line item order with a <b>ItemID</b>/<b>BuyerID</b> combination, but this is not the most ideal approach since an error is returned if there are multiple order line items for that combination.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseCheckoutStatus</b>. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Payment order through the eBay site. A Combined Payment order can also be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used as an input filter for <b>ReviseCheckoutStatus</b>. <br><br> <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
	 * @var string
	 */
	public $OrderID;
	/**
	 * The AmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total amount paid by the buyer. For a US eBay Motors item, <b>AmountPaid</b> is the total amount paid by the buyer for the deposit. <b>AmountPaid</b> is optional if <b>CheckoutStatus</b> is Incomplete and required if it is Complete.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPaid;
	/**
	 * The PaymentMethodUsed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Payment method used by the buyer. This field is required if <b> CheckoutStatus</b> is Complete and the payment method is a trusted payment method other than PayPal. See eBay's <a href="http://pages.ebay.com/help/policies/accepted-payments-policy.html">Accepted Payments Policy</a>. If the payment method is PayPal, this field should not be used since only PayPal can set this field's value to "PayPal". ReviseCheckoutStatus cannot be used for a non-trusted payment method. <br> <br> <span class="tablenote"><b>Note:</b> Required or allowed payment methods vary by site and category. Refer to <a href="http://developer.ebay.com/DevZone/XML/docs/WebHelp/wwhelp/wwhimpl/js/html/wwhelp.htm?context=eBay_XML_API&topic=PaymentMethodDifferences"> Payment Method Differences (PaymentMethod)</a> in the eBay Trading API Guide for information to help you determine which payment methods you are required or allowed to specify. </span>
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethodUsed;
	/**
	 * The CheckoutStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The current checkout status of the order. Often, the seller or application will mark this value as Complete if payment has been made. The <b>CheckoutStatus</b> value cannot be updated by DE and AT sellers who are subject to the new payment process, and an attempt to do so in a <b>ReviseCheckoutStatus</b> call will result in a call error.
	 * @var EbayTradingTypeCompleteStatusCodeType
	 */
	public $CheckoutStatus;
	/**
	 * The ShippingService
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping service selected by the buyer from among the shipping services offered by the seller (such as UPS Ground). For a list of valid values, call GeteBayDetails with DetailName set to ShippingServiceDetails. The ShippingServiceDetails.ValidForSellingFlow flag must also be present. Otherwise, that particular shipping service option is no longer valid and cannot be offered to buyers through a listing. <br/><br/> <span class="tablenote"> <strong>Note:</strong> <strong>ReviseCheckoutStatus</strong> is not available for the Global Shipping program; specifying InternationalPriorityShipping as a value for this field will produce an error. </span>
	 * @var token
	 */
	public $ShippingService;
	/**
	 * The ShippingIncludedInTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An indicator of whether shipping costs were included in the taxable amount. .
	 * @var boolean
	 */
	public $ShippingIncludedInTax;
	/**
	 * The CheckoutMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is not supported.
	 * @var EbayTradingTypeCheckoutMethodCodeType
	 */
	public $CheckoutMethod;
	/**
	 * The InsuranceType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Enumeration value that indicates whether shipping insurance was offered to and selected by the buyer.
	 * @var EbayTradingTypeInsuranceSelectedCodeType
	 */
	public $InsuranceType;
	/**
	 * The PaymentStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Marks the order as paid or awaiting payment in My eBay. If you specify Paid, My eBay displays an icon for each item in the order to indicate that the order status is Paid. If you specify Pending, this indicates that the order is awaiting payment. (Some applications may use Pending when the buyer has paid but the funds have not yet been sent to the seller's financial institution.) <br> <br> <b>ReviseCheckoutStatus</b> cannot be used to update payment and checkout status for a non-trusted payment method. See eBay's <a href=" http://pages.ebay.com/help/policies/accepted-payments-policy.html"> Accepted Payments Policy</a> for more information on trusted payment methods. If the payment method is PayPal, this field should not be used since PayPal automatically set this field's value to "Paid" upon receiving the buyer's payment. <br> <br> The <b>PaymentStatus</b> value cannot be updated by DE and AT sellers who are subject to the new payment process, and an attempt to do so in a <b>ReviseCheckoutStatus</b> call will result in a call error.
	 * @var EbayTradingTypeRCSPaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The AdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Discount or charge agreed to by the buyer and seller. A positive value indicates that the amount is an extra charge being paid to the seller by the buyer. A negative value indicates that the amount is a discount given to the buyer by the seller.
	 * @var EbayTradingTypeAmountType
	 */
	public $AdjustmentAmount;
	/**
	 * The ShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For internal use.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * The BuyerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID for the order's buyer. A single line item order can actually be identified by a <b>BuyerID</b>/<b>ItemID</b> pair, but this approach is not recommended since an error is returned if there are multiple order line items for that combination. <b>BuyerID</b> is ignored if any other valid filter or filter combination is used in the same request.
	 * @var string
	 */
	public $BuyerID;
	/**
	 * The ShippingInsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of money paid for shipping insurance.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingInsuranceCost;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The sales tax amount for the order. This field should be used if sales tax was applied to the order.
	 * @var EbayTradingTypeAmountType
	 */
	public $SalesTax;
	/**
	 * The ShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The amount of money paid for shipping.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingCost;
	/**
	 * The EncryptedID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not supported.
	 * @var string
	 */
	public $EncryptedID;
	/**
	 * The ExternalTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of a unique identifier and timestamp for the electronic payment of a single or multiple line item order. An <b> ExternalTransactionID</b> is not exposed to a new DE or AT seller who is subject to the new payment process. Starting in late August 2011, new DE and AT sellers are subject to the new payment process.
	 * @var EbayTradingTypeExternalTransactionType
	 */
	public $ExternalTransaction;
	/**
	 * The MultipleSellerPaymentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not supported.
	 * @var string
	 */
	public $MultipleSellerPaymentID;
	/**
	 * The CODCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Italy site (site ID 101) only. Enables you to specify the cash-on-delivery (COD) cost, for COD shipping.
	 * @var EbayTradingTypeAmountType
	 */
	public $CODCost;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field to revise the checkout status of the order. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param string OrderID
	 * @param EbayTradingTypeAmountType AmountPaid
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethodUsed
	 * @param EbayTradingTypeCompleteStatusCodeType CheckoutStatus
	 * @param token ShippingService
	 * @param boolean ShippingIncludedInTax
	 * @param EbayTradingTypeCheckoutMethodCodeType CheckoutMethod
	 * @param EbayTradingTypeInsuranceSelectedCodeType InsuranceType
	 * @param EbayTradingTypeRCSPaymentStatusCodeType PaymentStatus
	 * @param EbayTradingTypeAmountType AdjustmentAmount
	 * @param EbayTradingTypeAddressType ShippingAddress
	 * @param string BuyerID
	 * @param EbayTradingTypeAmountType ShippingInsuranceCost
	 * @param EbayTradingTypeAmountType SalesTax
	 * @param EbayTradingTypeAmountType ShippingCost
	 * @param string EncryptedID
	 * @param EbayTradingTypeExternalTransactionType ExternalTransaction
	 * @param string MultipleSellerPaymentID
	 * @param EbayTradingTypeAmountType CODCost
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeReviseCheckoutStatusRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_OrderID = null,$_AmountPaid = null,$_PaymentMethodUsed = null,$_CheckoutStatus = null,$_ShippingService = null,$_ShippingIncludedInTax = null,$_CheckoutMethod = null,$_InsuranceType = null,$_PaymentStatus = null,$_AdjustmentAmount = null,$_ShippingAddress = null,$_BuyerID = null,$_ShippingInsuranceCost = null,$_SalesTax = null,$_ShippingCost = null,$_EncryptedID = null,$_ExternalTransaction = null,$_MultipleSellerPaymentID = null,$_CODCost = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderID'=>$_OrderID,'AmountPaid'=>$_AmountPaid,'PaymentMethodUsed'=>$_PaymentMethodUsed,'CheckoutStatus'=>$_CheckoutStatus,'ShippingService'=>$_ShippingService,'ShippingIncludedInTax'=>$_ShippingIncludedInTax,'CheckoutMethod'=>$_CheckoutMethod,'InsuranceType'=>$_InsuranceType,'PaymentStatus'=>$_PaymentStatus,'AdjustmentAmount'=>$_AdjustmentAmount,'ShippingAddress'=>$_ShippingAddress,'BuyerID'=>$_BuyerID,'ShippingInsuranceCost'=>$_ShippingInsuranceCost,'SalesTax'=>$_SalesTax,'ShippingCost'=>$_ShippingCost,'EncryptedID'=>$_EncryptedID,'ExternalTransaction'=>$_ExternalTransaction,'MultipleSellerPaymentID'=>$_MultipleSellerPaymentID,'CODCost'=>$_CODCost,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * @param string OrderID
	 * @return string
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = $_OrderID);
	}
	/**
	 * Get OrderID
	 * @return string
	 */
	public function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * Set AmountPaid
	 * @param AmountType AmountPaid
	 * @return AmountType
	 */
	public function setAmountPaid($_AmountPaid)
	{
		return ($this->AmountPaid = $_AmountPaid);
	}
	/**
	 * Get AmountPaid
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * Set PaymentMethodUsed
	 * @param BuyerPaymentMethodCodeType PaymentMethodUsed
	 * @return BuyerPaymentMethodCodeType
	 */
	public function setPaymentMethodUsed($_PaymentMethodUsed)
	{
		return ($this->PaymentMethodUsed = EbayTradingTypeBuyerPaymentMethodCodeType::valueIsValid($_PaymentMethodUsed)?$_PaymentMethodUsed:null);
	}
	/**
	 * Get PaymentMethodUsed
	 * @return EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public function getPaymentMethodUsed()
	{
		return $this->PaymentMethodUsed;
	}
	/**
	 * Set CheckoutStatus
	 * @param CompleteStatusCodeType CheckoutStatus
	 * @return CompleteStatusCodeType
	 */
	public function setCheckoutStatus($_CheckoutStatus)
	{
		return ($this->CheckoutStatus = EbayTradingTypeCompleteStatusCodeType::valueIsValid($_CheckoutStatus)?$_CheckoutStatus:null);
	}
	/**
	 * Get CheckoutStatus
	 * @return EbayTradingTypeCompleteStatusCodeType
	 */
	public function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * Set ShippingService
	 * @param token ShippingService
	 * @return token
	 */
	public function setShippingService($_ShippingService)
	{
		return ($this->ShippingService = $_ShippingService);
	}
	/**
	 * Get ShippingService
	 * @return token
	 */
	public function getShippingService()
	{
		return $this->ShippingService;
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
	 * Set CheckoutMethod
	 * @param CheckoutMethodCodeType CheckoutMethod
	 * @return CheckoutMethodCodeType
	 */
	public function setCheckoutMethod($_CheckoutMethod)
	{
		return ($this->CheckoutMethod = EbayTradingTypeCheckoutMethodCodeType::valueIsValid($_CheckoutMethod)?$_CheckoutMethod:null);
	}
	/**
	 * Get CheckoutMethod
	 * @return EbayTradingTypeCheckoutMethodCodeType
	 */
	public function getCheckoutMethod()
	{
		return $this->CheckoutMethod;
	}
	/**
	 * Set InsuranceType
	 * @param InsuranceSelectedCodeType InsuranceType
	 * @return InsuranceSelectedCodeType
	 */
	public function setInsuranceType($_InsuranceType)
	{
		return ($this->InsuranceType = EbayTradingTypeInsuranceSelectedCodeType::valueIsValid($_InsuranceType)?$_InsuranceType:null);
	}
	/**
	 * Get InsuranceType
	 * @return EbayTradingTypeInsuranceSelectedCodeType
	 */
	public function getInsuranceType()
	{
		return $this->InsuranceType;
	}
	/**
	 * Set PaymentStatus
	 * @param RCSPaymentStatusCodeType PaymentStatus
	 * @return RCSPaymentStatusCodeType
	 */
	public function setPaymentStatus($_PaymentStatus)
	{
		return ($this->PaymentStatus = EbayTradingTypeRCSPaymentStatusCodeType::valueIsValid($_PaymentStatus)?$_PaymentStatus:null);
	}
	/**
	 * Get PaymentStatus
	 * @return EbayTradingTypeRCSPaymentStatusCodeType
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set AdjustmentAmount
	 * @param AmountType AdjustmentAmount
	 * @return AmountType
	 */
	public function setAdjustmentAmount($_AdjustmentAmount)
	{
		return ($this->AdjustmentAmount = $_AdjustmentAmount);
	}
	/**
	 * Get AdjustmentAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * Set ShippingAddress
	 * @param AddressType ShippingAddress
	 * @return AddressType
	 */
	public function setShippingAddress($_ShippingAddress)
	{
		return ($this->ShippingAddress = $_ShippingAddress);
	}
	/**
	 * Get ShippingAddress
	 * @return EbayTradingTypeAddressType
	 */
	public function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * Set BuyerID
	 * @param string BuyerID
	 * @return string
	 */
	public function setBuyerID($_BuyerID)
	{
		return ($this->BuyerID = $_BuyerID);
	}
	/**
	 * Get BuyerID
	 * @return string
	 */
	public function getBuyerID()
	{
		return $this->BuyerID;
	}
	/**
	 * Set ShippingInsuranceCost
	 * @param AmountType ShippingInsuranceCost
	 * @return AmountType
	 */
	public function setShippingInsuranceCost($_ShippingInsuranceCost)
	{
		return ($this->ShippingInsuranceCost = $_ShippingInsuranceCost);
	}
	/**
	 * Get ShippingInsuranceCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingInsuranceCost()
	{
		return $this->ShippingInsuranceCost;
	}
	/**
	 * Set SalesTax
	 * @param AmountType SalesTax
	 * @return AmountType
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return EbayTradingTypeAmountType
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set ShippingCost
	 * @param AmountType ShippingCost
	 * @return AmountType
	 */
	public function setShippingCost($_ShippingCost)
	{
		return ($this->ShippingCost = $_ShippingCost);
	}
	/**
	 * Get ShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingCost()
	{
		return $this->ShippingCost;
	}
	/**
	 * Set EncryptedID
	 * @param string EncryptedID
	 * @return string
	 */
	public function setEncryptedID($_EncryptedID)
	{
		return ($this->EncryptedID = $_EncryptedID);
	}
	/**
	 * Get EncryptedID
	 * @return string
	 */
	public function getEncryptedID()
	{
		return $this->EncryptedID;
	}
	/**
	 * Set ExternalTransaction
	 * @param ExternalTransactionType ExternalTransaction
	 * @return ExternalTransactionType
	 */
	public function setExternalTransaction($_ExternalTransaction)
	{
		return ($this->ExternalTransaction = $_ExternalTransaction);
	}
	/**
	 * Get ExternalTransaction
	 * @return EbayTradingTypeExternalTransactionType
	 */
	public function getExternalTransaction()
	{
		return $this->ExternalTransaction;
	}
	/**
	 * Set MultipleSellerPaymentID
	 * @param string MultipleSellerPaymentID
	 * @return string
	 */
	public function setMultipleSellerPaymentID($_MultipleSellerPaymentID)
	{
		return ($this->MultipleSellerPaymentID = $_MultipleSellerPaymentID);
	}
	/**
	 * Get MultipleSellerPaymentID
	 * @return string
	 */
	public function getMultipleSellerPaymentID()
	{
		return $this->MultipleSellerPaymentID;
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