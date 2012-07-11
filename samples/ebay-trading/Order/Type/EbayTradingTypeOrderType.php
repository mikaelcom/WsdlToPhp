<?php
/**
 * Class file for EbayTradingTypeOrderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeOrderType
 * Documentation : There are single line item and multiple line item orders. A single payment is made for both order types. <br> <br> We strongly recommend that you avoid mixing digital and non-digital listings in the same Combined Payment order.
 * @date 04/07/2012
 */
class EbayTradingTypeOrderType extends EbayTradingWsdlClass
{
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order or an order that goes through the eBay shopping cart flow, the <b>OrderID</b> value is automatically created by eBay. A Combined Payment order can be created through the site by a buyer or seller when the buyer or seller share multiple, common order line items. A Combined Payment order can also be created by the seller through the <b>AddOrder</b> call. <br><br> An <b>OrderID</b> value overrides an <b>OrderLineItemID</b> value or an <b>ItemID/TransactionID</b> pair if these fields are also specified in the same request. <br><br> Also applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The OrderStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This enumeration value indicates the current status of the order. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeOrderStatusCodeType
	 */
	public $OrderStatus;
	/**
	 * The AdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the dollar amount by which the buyer has adjusted the order total. Adjustments to order costs may include shipping and handling, shipping insurance, buyer discounts, or added services. A positive amount indicates the amount is an extra charge being paid to the seller by the buyer. A negative value indicates this amount is a credit given to the buyer by the seller. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAmountType
	 */
	public $AdjustmentAmount;
	/**
	 * The AmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the total amount of the order. This amount includes the sale price of each line item, shipping and handling charges, shipping insurance (if offered and selected by the buyer), additional services, and any applied sales tax. This value is returned after the buyer has completed checkout (the <b>CheckoutStatus.Status</b> output field reads 'Complete'). <br><br> <span class="tablenote"><strong>Note:</strong> For auction listings on North American sites and on eBay Motors Parts and Accessories, the <b>AmountPaid</b> value minus any applied sales tax is the amount subject to the final value fee calculation. The sales tax amount is returned in the <b>ShippingDetails.SalesTax.SalesTaxAmount</b> field. For more information on how final value fees are calculated, see the <a href="http://pages.ebay.com/help/sell/fvf.html">final value fees</a> help page. </span> <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPaid;
	/**
	 * The AmountSaved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the shipping discount experienced by the buyer as a result of creating a Combined Payment order. This value is returned as 0.00 for single line item orders.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountSaved;
	/**
	 * The CheckoutStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of details related to the current checkout status of the order. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeCheckoutStatusType
	 */
	public $CheckoutStatus;
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of all shipping-related details for an order, including domestic and international shipping service options, shipment tracking information, and shipping insurance information. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The CreatingUserRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates whether a Combined Payment order was created by the buyer or by the seller. This field is only returned for Combined Payment orders.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $CreatingUserRole;
	/**
	 * The CreatedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp that indicates the date and time that the order was created. For single line item orders, this value is the same as <b>CreatedDate</b> in the <b>Transaction</b> container. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var dateTime
	 */
	public $CreatedTime;
	/**
	 * The PaymentMethods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This field indicates a payment method available to the buyer to pay for the order. There can be multiple <b>PaymentMethods</b> fields. <br><br> For DE and AT orders subject to the new eBay payment process, only one <b>PaymentMethods</b> field will be returned, and the value will always be 'StandardPayment'. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeBuyerPaymentMethodCodeType
	 */
	public $PaymentMethods;
	/**
	 * The SellerEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The email address of the seller involved in the order.
	 * @var string
	 */
	public $SellerEmail;
	/**
	 * The ShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container holding the shipping address of the buyer involved in the order. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * The ShippingServiceSelected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of details about the domestic or international shipping service selected by the buyer. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeShippingServiceOptionsType
	 */
	public $ShippingServiceSelected;
	/**
	 * The Subtotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The subtotal amount for the order is the total cost of all order line items. This value does not include any shipping/handling, shipping insurance, or sales tax costs. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAmountType
	 */
	public $Subtotal;
	/**
	 * The Total
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>Total</b> amount equals the <b>Subtotal</b> value plus the shipping/handling, shipping insurance, and sales tax costs. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeAmountType
	 */
	public $Total;
	/**
	 * The ExternalTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container consisting of payment details for a single or multiple line item eBay order. PayPal transactions may include a buyer payment or refund, or a fee or credit applied to the seller's account. This field is only returned after payment for the order has occurred. For DE and AT orders going through the new eBay payment process, the <b>PaymentHoldDetails</b> container and <b>PaymentHoldStatus</b> field will be returned instead of the <b>ExternalTransaction</b> container. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeExternalTransactionType
	 */
	public $ExternalTransaction;
	/**
	 * The TransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of one or more line items that comprise an order. The data for an order line item is stored in the <b>Transaction</b> container. <br><br> We strongly recommend that you avoid mixing transactions for digital and non-digital listings in the same Combined Payment order. (In the future, <b>AddOrder</b> may enforce this recommendation.) <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var EbayTradingTypeTransactionArrayType
	 */
	public $TransactionArray;
	/**
	 * The BuyerUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID of the order's buyer. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeUserIDType
	 */
	public $BuyerUserID;
	/**
	 * The PaidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp indicating the date and time of order payment. This field is not returned until payment has been made and checkout is complete. <br><br> This time is specified in GMT (not Pacific time). See "Time Values" in the eBay Web Services guide for information about converting between GMT and other time zones. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var dateTime
	 */
	public $PaidTime;
	/**
	 * The ShippedTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp indicating the date and time of order shipment. This field is not returned until the order has been marked as shipped. Note that sellers have the ability to set the shipped time up to three calendar days in the future. <br><br> This time is specified in GMT (not Pacific time). See "Time Values" in the eBay Web Services guide for information about converting between GMT and other time zones. <br><br> Applicable to Half.com (for <b>GetOrders</b>).
	 * @var dateTime
	 */
	public $ShippedTime;
	/**
	 * The IntegratedMerchantCreditCardEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item can be paid for through a payment gateway (Payflow) account. If <b>IntegratedMerchantCreditCardEnabled</b> is true, then integrated merchant credit card (IMCC) is enabled for credit cards because the seller has a payment gateway account. Therefore, if <b>IntegratedMerchantCreditCardEnabled</b> is true, and AmEx, Discover, or VisaMC is returned for an item, then on checkout, an online credit-card payment is processed through a payment gateway account.
	 * @var boolean
	 */
	public $IntegratedMerchantCreditCardEnabled;
	/**
	 * The BundlePurchase
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var boolean
	 */
	public $BundlePurchase;
	/**
	 * The BuyerCheckoutMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned if the buyer left a message for the seller during checkout.
	 * @var string
	 */
	public $BuyerCheckoutMessage;
	/**
	 * The EIASToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the user that does not change when the eBay user name is changed. Use when an application needs to associate a new eBay user name with the corresponding eBay user. <br><br> Since a bidder's user info is anonymous, this tag will be returned only to that bidder, and to the seller of an item that the user is bidding on.
	 * @var string
	 */
	public $EIASToken;
	/**
	 * The PaymentHoldStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field indicates the type and/or status of a payment hold on the item.
	 * @var EbayTradingTypePaymentHoldStatusCodeType
	 */
	public $PaymentHoldStatus;
	/**
	 * The PaymentHoldDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This container will be returned for DE and AT orders going through the new eBay payment process. This container consists of the expected payout distribution to the seller's account, as well as possible actions that a seller can take to expedite the payout for the order.
	 * @var EbayTradingTypePaymentHoldDetailType
	 */
	public $PaymentHoldDetails;
	/**
	 * The RefundArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of one or more refunds for Half.com orders or DE/AT orders subject to the new eBay payment process. This container is returned only if a refund to a Half.com buyer has occurred or a refund was issued through eBay's new Payment Process.<br/><br/> <span class="tablenote"><strong>Note:</strong> Refund containers are returned for eBay's new Payment Process in the Sandbox environment beginning in April 2012, and in the Production environment beginning in May 2012.</span>
	 * @var EbayTradingTypeRefundArrayType
	 */
	public $RefundArray;
	/**
	 * The RefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of the refund issued to the buyer. This field is only returned for a DE/AT order subject to the new eBay payment process, and if a refund was issued to the buyer.
	 * @var EbayTradingTypeAmountType
	 */
	public $RefundAmount;
	/**
	 * The RefundStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : String value indicating the result of a refund (Success, Failure, Pending) to the buyer for an DE/AT order subject to the new eBay payment process.
	 * @var string
	 */
	public $RefundStatus;
	/**
	 * The IsMultiLegShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If <strong>IsMultilegShipping</strong> is true, the order or transaction uses the Global Exchange program, in which the shipment has a domestic leg and an international leg. The buyer's shipping address is in a country other than the country where the items were listed, and the seller has specified InternationalPriorityShipping as the default international shipping service in the listings of all the items in the shipment. <br/><br/> If <strong>IsMultilegShipping</strong> is false, the order or transaction doesn't use the Global Exchange program. The shipment might use a different international shipping service, or it might be domestic. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var boolean
	 */
	public $IsMultiLegShipping;
	/**
	 * The MultiLegShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the domestic and international legs of a Global Exchange shipment. This information includes the shipping service, total shipping cost, address and shipping time applicable to each leg of the shipment. <br/><br/> This information is not returned if <strong>IsMultilegShipping</strong> is false. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayTradingTypeMultiLegShippingDetailsType
	 */
	public $MultiLegShippingDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param EbayTradingTypeOrderStatusCodeType OrderStatus
	 * @param EbayTradingTypeAmountType AdjustmentAmount
	 * @param EbayTradingTypeAmountType AmountPaid
	 * @param EbayTradingTypeAmountType AmountSaved
	 * @param EbayTradingTypeCheckoutStatusType CheckoutStatus
	 * @param EbayTradingTypeShippingDetailsType ShippingDetails
	 * @param EbayTradingTypeTradingRoleCodeType CreatingUserRole
	 * @param dateTime CreatedTime
	 * @param EbayTradingTypeBuyerPaymentMethodCodeType PaymentMethods
	 * @param string SellerEmail
	 * @param EbayTradingTypeAddressType ShippingAddress
	 * @param EbayTradingTypeShippingServiceOptionsType ShippingServiceSelected
	 * @param EbayTradingTypeAmountType Subtotal
	 * @param EbayTradingTypeAmountType Total
	 * @param EbayTradingTypeExternalTransactionType ExternalTransaction
	 * @param EbayTradingTypeTransactionArrayType TransactionArray
	 * @param EbayTradingTypeUserIDType BuyerUserID
	 * @param dateTime PaidTime
	 * @param dateTime ShippedTime
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @param boolean BundlePurchase
	 * @param string BuyerCheckoutMessage
	 * @param string EIASToken
	 * @param EbayTradingTypePaymentHoldStatusCodeType PaymentHoldStatus
	 * @param EbayTradingTypePaymentHoldDetailType PaymentHoldDetails
	 * @param EbayTradingTypeRefundArrayType RefundArray
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param string RefundStatus
	 * @param boolean IsMultiLegShipping
	 * @param EbayTradingTypeMultiLegShippingDetailsType MultiLegShippingDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeOrderType
	 */
	public function __construct($_OrderID = null,$_OrderStatus = null,$_AdjustmentAmount = null,$_AmountPaid = null,$_AmountSaved = null,$_CheckoutStatus = null,$_ShippingDetails = null,$_CreatingUserRole = null,$_CreatedTime = null,$_PaymentMethods = null,$_SellerEmail = null,$_ShippingAddress = null,$_ShippingServiceSelected = null,$_Subtotal = null,$_Total = null,$_ExternalTransaction = null,$_TransactionArray = null,$_BuyerUserID = null,$_PaidTime = null,$_ShippedTime = null,$_IntegratedMerchantCreditCardEnabled = null,$_BundlePurchase = null,$_BuyerCheckoutMessage = null,$_EIASToken = null,$_PaymentHoldStatus = null,$_PaymentHoldDetails = null,$_RefundArray = null,$_RefundAmount = null,$_RefundStatus = null,$_IsMultiLegShipping = null,$_MultiLegShippingDetails = null,$_any = null)
	{
		parent::__construct(array('OrderID'=>$_OrderID,'OrderStatus'=>$_OrderStatus,'AdjustmentAmount'=>$_AdjustmentAmount,'AmountPaid'=>$_AmountPaid,'AmountSaved'=>$_AmountSaved,'CheckoutStatus'=>$_CheckoutStatus,'ShippingDetails'=>$_ShippingDetails,'CreatingUserRole'=>$_CreatingUserRole,'CreatedTime'=>$_CreatedTime,'PaymentMethods'=>$_PaymentMethods,'SellerEmail'=>$_SellerEmail,'ShippingAddress'=>$_ShippingAddress,'ShippingServiceSelected'=>$_ShippingServiceSelected,'Subtotal'=>$_Subtotal,'Total'=>$_Total,'ExternalTransaction'=>$_ExternalTransaction,'TransactionArray'=>$_TransactionArray,'BuyerUserID'=>$_BuyerUserID,'PaidTime'=>$_PaidTime,'ShippedTime'=>$_ShippedTime,'IntegratedMerchantCreditCardEnabled'=>$_IntegratedMerchantCreditCardEnabled,'BundlePurchase'=>$_BundlePurchase,'BuyerCheckoutMessage'=>$_BuyerCheckoutMessage,'EIASToken'=>$_EIASToken,'PaymentHoldStatus'=>$_PaymentHoldStatus,'PaymentHoldDetails'=>$_PaymentHoldDetails,'RefundArray'=>$_RefundArray,'RefundAmount'=>$_RefundAmount,'RefundStatus'=>$_RefundStatus,'IsMultiLegShipping'=>$_IsMultiLegShipping,'MultiLegShippingDetails'=>$_MultiLegShippingDetails,'any'=>$_any));
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
	 * Set OrderStatus
	 * @param OrderStatusCodeType OrderStatus
	 * @return OrderStatusCodeType
	 */
	public function setOrderStatus($_OrderStatus)
	{
		return ($this->OrderStatus = EbayTradingTypeOrderStatusCodeType::valueIsValid($_OrderStatus)?$_OrderStatus:null);
	}
	/**
	 * Get OrderStatus
	 * @return EbayTradingTypeOrderStatusCodeType
	 */
	public function getOrderStatus()
	{
		return $this->OrderStatus;
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
	 * Set AmountSaved
	 * @param AmountType AmountSaved
	 * @return AmountType
	 */
	public function setAmountSaved($_AmountSaved)
	{
		return ($this->AmountSaved = $_AmountSaved);
	}
	/**
	 * Get AmountSaved
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountSaved()
	{
		return $this->AmountSaved;
	}
	/**
	 * Set CheckoutStatus
	 * @param CheckoutStatusType CheckoutStatus
	 * @return CheckoutStatusType
	 */
	public function setCheckoutStatus($_CheckoutStatus)
	{
		return ($this->CheckoutStatus = $_CheckoutStatus);
	}
	/**
	 * Get CheckoutStatus
	 * @return EbayTradingTypeCheckoutStatusType
	 */
	public function getCheckoutStatus()
	{
		return $this->CheckoutStatus;
	}
	/**
	 * Set ShippingDetails
	 * @param ShippingDetailsType ShippingDetails
	 * @return ShippingDetailsType
	 */
	public function setShippingDetails($_ShippingDetails)
	{
		return ($this->ShippingDetails = $_ShippingDetails);
	}
	/**
	 * Get ShippingDetails
	 * @return EbayTradingTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set CreatingUserRole
	 * @param TradingRoleCodeType CreatingUserRole
	 * @return TradingRoleCodeType
	 */
	public function setCreatingUserRole($_CreatingUserRole)
	{
		return ($this->CreatingUserRole = EbayTradingTypeTradingRoleCodeType::valueIsValid($_CreatingUserRole)?$_CreatingUserRole:null);
	}
	/**
	 * Get CreatingUserRole
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getCreatingUserRole()
	{
		return $this->CreatingUserRole;
	}
	/**
	 * Set CreatedTime
	 * @param dateTime CreatedTime
	 * @return dateTime
	 */
	public function setCreatedTime($_CreatedTime)
	{
		return ($this->CreatedTime = $_CreatedTime);
	}
	/**
	 * Get CreatedTime
	 * @return dateTime
	 */
	public function getCreatedTime()
	{
		return $this->CreatedTime;
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
	 * Set SellerEmail
	 * @param string SellerEmail
	 * @return string
	 */
	public function setSellerEmail($_SellerEmail)
	{
		return ($this->SellerEmail = $_SellerEmail);
	}
	/**
	 * Get SellerEmail
	 * @return string
	 */
	public function getSellerEmail()
	{
		return $this->SellerEmail;
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
	 * Set ShippingServiceSelected
	 * @param ShippingServiceOptionsType ShippingServiceSelected
	 * @return ShippingServiceOptionsType
	 */
	public function setShippingServiceSelected($_ShippingServiceSelected)
	{
		return ($this->ShippingServiceSelected = $_ShippingServiceSelected);
	}
	/**
	 * Get ShippingServiceSelected
	 * @return EbayTradingTypeShippingServiceOptionsType
	 */
	public function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}
	/**
	 * Set Subtotal
	 * @param AmountType Subtotal
	 * @return AmountType
	 */
	public function setSubtotal($_Subtotal)
	{
		return ($this->Subtotal = $_Subtotal);
	}
	/**
	 * Get Subtotal
	 * @return EbayTradingTypeAmountType
	 */
	public function getSubtotal()
	{
		return $this->Subtotal;
	}
	/**
	 * Set Total
	 * @param AmountType Total
	 * @return AmountType
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotal()
	{
		return $this->Total;
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
	 * Set TransactionArray
	 * @param TransactionArrayType TransactionArray
	 * @return TransactionArrayType
	 */
	public function setTransactionArray($_TransactionArray)
	{
		return ($this->TransactionArray = $_TransactionArray);
	}
	/**
	 * Get TransactionArray
	 * @return EbayTradingTypeTransactionArrayType
	 */
	public function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * Set BuyerUserID
	 * @param UserIDType BuyerUserID
	 * @return UserIDType
	 */
	public function setBuyerUserID($_BuyerUserID)
	{
		return ($this->BuyerUserID = EbayTradingTypeUserIDType::valueIsValid($_BuyerUserID)?$_BuyerUserID:null);
	}
	/**
	 * Get BuyerUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getBuyerUserID()
	{
		return $this->BuyerUserID;
	}
	/**
	 * Set PaidTime
	 * @param dateTime PaidTime
	 * @return dateTime
	 */
	public function setPaidTime($_PaidTime)
	{
		return ($this->PaidTime = $_PaidTime);
	}
	/**
	 * Get PaidTime
	 * @return dateTime
	 */
	public function getPaidTime()
	{
		return $this->PaidTime;
	}
	/**
	 * Set ShippedTime
	 * @param dateTime ShippedTime
	 * @return dateTime
	 */
	public function setShippedTime($_ShippedTime)
	{
		return ($this->ShippedTime = $_ShippedTime);
	}
	/**
	 * Get ShippedTime
	 * @return dateTime
	 */
	public function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * Set IntegratedMerchantCreditCardEnabled
	 * @param boolean IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function setIntegratedMerchantCreditCardEnabled($_IntegratedMerchantCreditCardEnabled)
	{
		return ($this->IntegratedMerchantCreditCardEnabled = $_IntegratedMerchantCreditCardEnabled);
	}
	/**
	 * Get IntegratedMerchantCreditCardEnabled
	 * @return boolean
	 */
	public function getIntegratedMerchantCreditCardEnabled()
	{
		return $this->IntegratedMerchantCreditCardEnabled;
	}
	/**
	 * Set BundlePurchase
	 * @param boolean BundlePurchase
	 * @return boolean
	 */
	public function setBundlePurchase($_BundlePurchase)
	{
		return ($this->BundlePurchase = $_BundlePurchase);
	}
	/**
	 * Get BundlePurchase
	 * @return boolean
	 */
	public function getBundlePurchase()
	{
		return $this->BundlePurchase;
	}
	/**
	 * Set BuyerCheckoutMessage
	 * @param string BuyerCheckoutMessage
	 * @return string
	 */
	public function setBuyerCheckoutMessage($_BuyerCheckoutMessage)
	{
		return ($this->BuyerCheckoutMessage = $_BuyerCheckoutMessage);
	}
	/**
	 * Get BuyerCheckoutMessage
	 * @return string
	 */
	public function getBuyerCheckoutMessage()
	{
		return $this->BuyerCheckoutMessage;
	}
	/**
	 * Set EIASToken
	 * @param string EIASToken
	 * @return string
	 */
	public function setEIASToken($_EIASToken)
	{
		return ($this->EIASToken = $_EIASToken);
	}
	/**
	 * Get EIASToken
	 * @return string
	 */
	public function getEIASToken()
	{
		return $this->EIASToken;
	}
	/**
	 * Set PaymentHoldStatus
	 * @param PaymentHoldStatusCodeType PaymentHoldStatus
	 * @return PaymentHoldStatusCodeType
	 */
	public function setPaymentHoldStatus($_PaymentHoldStatus)
	{
		return ($this->PaymentHoldStatus = EbayTradingTypePaymentHoldStatusCodeType::valueIsValid($_PaymentHoldStatus)?$_PaymentHoldStatus:null);
	}
	/**
	 * Get PaymentHoldStatus
	 * @return EbayTradingTypePaymentHoldStatusCodeType
	 */
	public function getPaymentHoldStatus()
	{
		return $this->PaymentHoldStatus;
	}
	/**
	 * Set PaymentHoldDetails
	 * @param PaymentHoldDetailType PaymentHoldDetails
	 * @return PaymentHoldDetailType
	 */
	public function setPaymentHoldDetails($_PaymentHoldDetails)
	{
		return ($this->PaymentHoldDetails = $_PaymentHoldDetails);
	}
	/**
	 * Get PaymentHoldDetails
	 * @return EbayTradingTypePaymentHoldDetailType
	 */
	public function getPaymentHoldDetails()
	{
		return $this->PaymentHoldDetails;
	}
	/**
	 * Set RefundArray
	 * @param RefundArrayType RefundArray
	 * @return RefundArrayType
	 */
	public function setRefundArray($_RefundArray)
	{
		return ($this->RefundArray = $_RefundArray);
	}
	/**
	 * Get RefundArray
	 * @return EbayTradingTypeRefundArrayType
	 */
	public function getRefundArray()
	{
		return $this->RefundArray;
	}
	/**
	 * Set RefundAmount
	 * @param AmountType RefundAmount
	 * @return AmountType
	 */
	public function setRefundAmount($_RefundAmount)
	{
		return ($this->RefundAmount = $_RefundAmount);
	}
	/**
	 * Get RefundAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * Set RefundStatus
	 * @param string RefundStatus
	 * @return string
	 */
	public function setRefundStatus($_RefundStatus)
	{
		return ($this->RefundStatus = $_RefundStatus);
	}
	/**
	 * Get RefundStatus
	 * @return string
	 */
	public function getRefundStatus()
	{
		return $this->RefundStatus;
	}
	/**
	 * Set IsMultiLegShipping
	 * @param boolean IsMultiLegShipping
	 * @return boolean
	 */
	public function setIsMultiLegShipping($_IsMultiLegShipping)
	{
		return ($this->IsMultiLegShipping = $_IsMultiLegShipping);
	}
	/**
	 * Get IsMultiLegShipping
	 * @return boolean
	 */
	public function getIsMultiLegShipping()
	{
		return $this->IsMultiLegShipping;
	}
	/**
	 * Set MultiLegShippingDetails
	 * @param MultiLegShippingDetailsType MultiLegShippingDetails
	 * @return MultiLegShippingDetailsType
	 */
	public function setMultiLegShippingDetails($_MultiLegShippingDetails)
	{
		return ($this->MultiLegShippingDetails = $_MultiLegShippingDetails);
	}
	/**
	 * Get MultiLegShippingDetails
	 * @return EbayTradingTypeMultiLegShippingDetailsType
	 */
	public function getMultiLegShippingDetails()
	{
		return $this->MultiLegShippingDetails;
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