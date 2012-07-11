<?php
/**
 * Class file for EbayTradingTypeSellingManagerSoldOrderType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSoldOrderType
 * Documentation : Contains information about a sale record.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSoldOrderType extends EbayTradingWsdlClass
{
	/**
	 * The SellingManagerSoldTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about one line item in the order.
	 * @var EbayTradingTypeSellingManagerSoldTransactionType
	 */
	public $SellingManagerSoldTransaction;
	/**
	 * The ShippingAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping address of a buyer.
	 * @var EbayTradingTypeAddressType
	 */
	public $ShippingAddress;
	/**
	 * The ShippingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping-related details for an order, including flat and calculated shipping costs and shipping insurance costs.
	 * @var EbayTradingTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The CashOnDeliveryCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of cash-on-delivery.
	 * @var EbayTradingTypeAmountType
	 */
	public $CashOnDeliveryCost;
	/**
	 * The TotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total cost in the order.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalAmount;
	/**
	 * The TotalQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total item quantity.
	 * @var int
	 */
	public $TotalQuantity;
	/**
	 * The ItemCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A SMPro seller can record the cost of the item, as calculated by the seller, in this field.
	 * @var EbayTradingTypeAmountType
	 */
	public $ItemCost;
	/**
	 * The VATRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Rate of applicable value added tax.
	 * @var EbayTradingTypeVATRateType
	 */
	public $VATRate;
	/**
	 * The NetInsuranceFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total cost of shipping insurance.
	 * @var EbayTradingTypeAmountType
	 */
	public $NetInsuranceFee;
	/**
	 * The VATInsuranceFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of applicable value added tax insurance fee.
	 * @var EbayTradingTypeAmountType
	 */
	public $VATInsuranceFee;
	/**
	 * The VATShippingFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT shipping fee.
	 * @var EbayTradingTypeAmountType
	 */
	public $VATShippingFee;
	/**
	 * The NetShippingFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total shipping fee.
	 * @var EbayTradingTypeAmountType
	 */
	public $NetShippingFee;
	/**
	 * The NetTotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller records in this field a net total amount obtained according to the seller's method of calculation. This field is returned for VAT transactions only.
	 * @var EbayTradingTypeAmountType
	 */
	public $NetTotalAmount;
	/**
	 * The VATTotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT total amount.
	 * @var EbayTradingTypeAmountType
	 */
	public $VATTotalAmount;
	/**
	 * The ActualShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The shipping cost for the order line item after checkout is complete. This cost is determined by the shipping service option that was selected by the buyer (ShippingServiceSelected.ShippingService) minus any promotional shipping discounts. For multiple line item orders, it is possible that one order line item will have the shipping cost and the value for the other order line item will be 0.00.
	 * @var EbayTradingTypeAmountType
	 */
	public $ActualShippingCost;
	/**
	 * The AdjustmentAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Discount, or charge, to which the buyer and seller have agreed. If this value is a positive value, the amount is the extra money that the buyer pays the seller. If this value is a negative value, the amount is a discount the seller gives the buyer.
	 * @var EbayTradingTypeAmountType
	 */
	public $AdjustmentAmount;
	/**
	 * The NotesToBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Notes from the seller to the buyer.
	 * @var string
	 */
	public $NotesToBuyer;
	/**
	 * The NotesFromBuyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Notes from the buyer to the seller.
	 * @var string
	 */
	public $NotesFromBuyer;
	/**
	 * The NotesToSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Notes to self from seller.
	 * @var string
	 */
	public $NotesToSeller;
	/**
	 * The OrderStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Status of the order regarding payment, shipping, feedback, and other communications.
	 * @var EbayTradingTypeSellingManagerOrderStatusType
	 */
	public $OrderStatus;
	/**
	 * The UnpaidItemStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The status of an unpaid item regarding final value, state of communications between buyer and seller, and the filing of an Unpaid Item.
	 * @var EbayTradingTypeUnpaidItemStatusTypeCodeType
	 */
	public $UnpaidItemStatus;
	/**
	 * The SalePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of the accepted offer for the listing.
	 * @var EbayTradingTypeAmountType
	 */
	public $SalePrice;
	/**
	 * The EmailsSent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of emails sent regarding this order.
	 * @var int
	 */
	public $EmailsSent;
	/**
	 * The DaysSinceSale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of days since the sale.
	 * @var int
	 */
	public $DaysSinceSale;
	/**
	 * The BuyerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user ID of the buyer.
	 * @var string
	 */
	public $BuyerID;
	/**
	 * The BuyerEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The email of the buyer.
	 * @var string
	 */
	public $BuyerEmail;
	/**
	 * The SaleRecordID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The sale record ID. Applicable to Selling Manager users. When an item is sold, Selling Manager generates a sale record. A sale record contains buyer information, shipping, and other information. A sale record is displayed in the Sold view in Selling Manager. Each sale record has a sale record ID. In the following calls, the value for the sale record ID is in the SellingManagerSalesRecordNumber field: GetItemTransactions, GetSellerTransactions, GetOrders, GetOrderTransactions. In the Selling Manager calls, the value for the sale record ID is in the SaleRecordID field. The sale record ID can be for single or multiple line item orders.
	 * @var long
	 */
	public $SaleRecordID;
	/**
	 * The CreationTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The sale date.
	 * @var dateTime
	 */
	public $CreationTime;
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
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerSoldTransactionType SellingManagerSoldTransaction
	 * @param EbayTradingTypeAddressType ShippingAddress
	 * @param EbayTradingTypeShippingDetailsType ShippingDetails
	 * @param EbayTradingTypeAmountType CashOnDeliveryCost
	 * @param EbayTradingTypeAmountType TotalAmount
	 * @param int TotalQuantity
	 * @param EbayTradingTypeAmountType ItemCost
	 * @param EbayTradingTypeVATRateType VATRate
	 * @param EbayTradingTypeAmountType NetInsuranceFee
	 * @param EbayTradingTypeAmountType VATInsuranceFee
	 * @param EbayTradingTypeAmountType VATShippingFee
	 * @param EbayTradingTypeAmountType NetShippingFee
	 * @param EbayTradingTypeAmountType NetTotalAmount
	 * @param EbayTradingTypeAmountType VATTotalAmount
	 * @param EbayTradingTypeAmountType ActualShippingCost
	 * @param EbayTradingTypeAmountType AdjustmentAmount
	 * @param string NotesToBuyer
	 * @param string NotesFromBuyer
	 * @param string NotesToSeller
	 * @param EbayTradingTypeSellingManagerOrderStatusType OrderStatus
	 * @param EbayTradingTypeUnpaidItemStatusTypeCodeType UnpaidItemStatus
	 * @param EbayTradingTypeAmountType SalePrice
	 * @param int EmailsSent
	 * @param int DaysSinceSale
	 * @param string BuyerID
	 * @param string BuyerEmail
	 * @param long SaleRecordID
	 * @param dateTime CreationTime
	 * @param EbayTradingTypeAmountType RefundAmount
	 * @param string RefundStatus
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerSoldOrderType
	 */
	public function __construct($_SellingManagerSoldTransaction = null,$_ShippingAddress = null,$_ShippingDetails = null,$_CashOnDeliveryCost = null,$_TotalAmount = null,$_TotalQuantity = null,$_ItemCost = null,$_VATRate = null,$_NetInsuranceFee = null,$_VATInsuranceFee = null,$_VATShippingFee = null,$_NetShippingFee = null,$_NetTotalAmount = null,$_VATTotalAmount = null,$_ActualShippingCost = null,$_AdjustmentAmount = null,$_NotesToBuyer = null,$_NotesFromBuyer = null,$_NotesToSeller = null,$_OrderStatus = null,$_UnpaidItemStatus = null,$_SalePrice = null,$_EmailsSent = null,$_DaysSinceSale = null,$_BuyerID = null,$_BuyerEmail = null,$_SaleRecordID = null,$_CreationTime = null,$_RefundAmount = null,$_RefundStatus = null,$_any = null)
	{
		parent::__construct(array('SellingManagerSoldTransaction'=>$_SellingManagerSoldTransaction,'ShippingAddress'=>$_ShippingAddress,'ShippingDetails'=>$_ShippingDetails,'CashOnDeliveryCost'=>$_CashOnDeliveryCost,'TotalAmount'=>$_TotalAmount,'TotalQuantity'=>$_TotalQuantity,'ItemCost'=>$_ItemCost,'VATRate'=>$_VATRate,'NetInsuranceFee'=>$_NetInsuranceFee,'VATInsuranceFee'=>$_VATInsuranceFee,'VATShippingFee'=>$_VATShippingFee,'NetShippingFee'=>$_NetShippingFee,'NetTotalAmount'=>$_NetTotalAmount,'VATTotalAmount'=>$_VATTotalAmount,'ActualShippingCost'=>$_ActualShippingCost,'AdjustmentAmount'=>$_AdjustmentAmount,'NotesToBuyer'=>$_NotesToBuyer,'NotesFromBuyer'=>$_NotesFromBuyer,'NotesToSeller'=>$_NotesToSeller,'OrderStatus'=>$_OrderStatus,'UnpaidItemStatus'=>$_UnpaidItemStatus,'SalePrice'=>$_SalePrice,'EmailsSent'=>$_EmailsSent,'DaysSinceSale'=>$_DaysSinceSale,'BuyerID'=>$_BuyerID,'BuyerEmail'=>$_BuyerEmail,'SaleRecordID'=>$_SaleRecordID,'CreationTime'=>$_CreationTime,'RefundAmount'=>$_RefundAmount,'RefundStatus'=>$_RefundStatus,'any'=>$_any));
	}
	/**
	 * Set SellingManagerSoldTransaction
	 * @param SellingManagerSoldTransactionType SellingManagerSoldTransaction
	 * @return SellingManagerSoldTransactionType
	 */
	public function setSellingManagerSoldTransaction($_SellingManagerSoldTransaction)
	{
		return ($this->SellingManagerSoldTransaction = $_SellingManagerSoldTransaction);
	}
	/**
	 * Get SellingManagerSoldTransaction
	 * @return EbayTradingTypeSellingManagerSoldTransactionType
	 */
	public function getSellingManagerSoldTransaction()
	{
		return $this->SellingManagerSoldTransaction;
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
	 * Set CashOnDeliveryCost
	 * @param AmountType CashOnDeliveryCost
	 * @return AmountType
	 */
	public function setCashOnDeliveryCost($_CashOnDeliveryCost)
	{
		return ($this->CashOnDeliveryCost = $_CashOnDeliveryCost);
	}
	/**
	 * Get CashOnDeliveryCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getCashOnDeliveryCost()
	{
		return $this->CashOnDeliveryCost;
	}
	/**
	 * Set TotalAmount
	 * @param AmountType TotalAmount
	 * @return AmountType
	 */
	public function setTotalAmount($_TotalAmount)
	{
		return ($this->TotalAmount = $_TotalAmount);
	}
	/**
	 * Get TotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalAmount()
	{
		return $this->TotalAmount;
	}
	/**
	 * Set TotalQuantity
	 * @param int TotalQuantity
	 * @return int
	 */
	public function setTotalQuantity($_TotalQuantity)
	{
		return ($this->TotalQuantity = $_TotalQuantity);
	}
	/**
	 * Get TotalQuantity
	 * @return int
	 */
	public function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}
	/**
	 * Set ItemCost
	 * @param AmountType ItemCost
	 * @return AmountType
	 */
	public function setItemCost($_ItemCost)
	{
		return ($this->ItemCost = $_ItemCost);
	}
	/**
	 * Get ItemCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getItemCost()
	{
		return $this->ItemCost;
	}
	/**
	 * Set VATRate
	 * @param VATRateType VATRate
	 * @return VATRateType
	 */
	public function setVATRate($_VATRate)
	{
		return ($this->VATRate = $_VATRate);
	}
	/**
	 * Get VATRate
	 * @return EbayTradingTypeVATRateType
	 */
	public function getVATRate()
	{
		return $this->VATRate;
	}
	/**
	 * Set NetInsuranceFee
	 * @param AmountType NetInsuranceFee
	 * @return AmountType
	 */
	public function setNetInsuranceFee($_NetInsuranceFee)
	{
		return ($this->NetInsuranceFee = $_NetInsuranceFee);
	}
	/**
	 * Get NetInsuranceFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getNetInsuranceFee()
	{
		return $this->NetInsuranceFee;
	}
	/**
	 * Set VATInsuranceFee
	 * @param AmountType VATInsuranceFee
	 * @return AmountType
	 */
	public function setVATInsuranceFee($_VATInsuranceFee)
	{
		return ($this->VATInsuranceFee = $_VATInsuranceFee);
	}
	/**
	 * Get VATInsuranceFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getVATInsuranceFee()
	{
		return $this->VATInsuranceFee;
	}
	/**
	 * Set VATShippingFee
	 * @param AmountType VATShippingFee
	 * @return AmountType
	 */
	public function setVATShippingFee($_VATShippingFee)
	{
		return ($this->VATShippingFee = $_VATShippingFee);
	}
	/**
	 * Get VATShippingFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getVATShippingFee()
	{
		return $this->VATShippingFee;
	}
	/**
	 * Set NetShippingFee
	 * @param AmountType NetShippingFee
	 * @return AmountType
	 */
	public function setNetShippingFee($_NetShippingFee)
	{
		return ($this->NetShippingFee = $_NetShippingFee);
	}
	/**
	 * Get NetShippingFee
	 * @return EbayTradingTypeAmountType
	 */
	public function getNetShippingFee()
	{
		return $this->NetShippingFee;
	}
	/**
	 * Set NetTotalAmount
	 * @param AmountType NetTotalAmount
	 * @return AmountType
	 */
	public function setNetTotalAmount($_NetTotalAmount)
	{
		return ($this->NetTotalAmount = $_NetTotalAmount);
	}
	/**
	 * Get NetTotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getNetTotalAmount()
	{
		return $this->NetTotalAmount;
	}
	/**
	 * Set VATTotalAmount
	 * @param AmountType VATTotalAmount
	 * @return AmountType
	 */
	public function setVATTotalAmount($_VATTotalAmount)
	{
		return ($this->VATTotalAmount = $_VATTotalAmount);
	}
	/**
	 * Get VATTotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getVATTotalAmount()
	{
		return $this->VATTotalAmount;
	}
	/**
	 * Set ActualShippingCost
	 * @param AmountType ActualShippingCost
	 * @return AmountType
	 */
	public function setActualShippingCost($_ActualShippingCost)
	{
		return ($this->ActualShippingCost = $_ActualShippingCost);
	}
	/**
	 * Get ActualShippingCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getActualShippingCost()
	{
		return $this->ActualShippingCost;
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
	 * Set NotesToBuyer
	 * @param string NotesToBuyer
	 * @return string
	 */
	public function setNotesToBuyer($_NotesToBuyer)
	{
		return ($this->NotesToBuyer = $_NotesToBuyer);
	}
	/**
	 * Get NotesToBuyer
	 * @return string
	 */
	public function getNotesToBuyer()
	{
		return $this->NotesToBuyer;
	}
	/**
	 * Set NotesFromBuyer
	 * @param string NotesFromBuyer
	 * @return string
	 */
	public function setNotesFromBuyer($_NotesFromBuyer)
	{
		return ($this->NotesFromBuyer = $_NotesFromBuyer);
	}
	/**
	 * Get NotesFromBuyer
	 * @return string
	 */
	public function getNotesFromBuyer()
	{
		return $this->NotesFromBuyer;
	}
	/**
	 * Set NotesToSeller
	 * @param string NotesToSeller
	 * @return string
	 */
	public function setNotesToSeller($_NotesToSeller)
	{
		return ($this->NotesToSeller = $_NotesToSeller);
	}
	/**
	 * Get NotesToSeller
	 * @return string
	 */
	public function getNotesToSeller()
	{
		return $this->NotesToSeller;
	}
	/**
	 * Set OrderStatus
	 * @param SellingManagerOrderStatusType OrderStatus
	 * @return SellingManagerOrderStatusType
	 */
	public function setOrderStatus($_OrderStatus)
	{
		return ($this->OrderStatus = $_OrderStatus);
	}
	/**
	 * Get OrderStatus
	 * @return EbayTradingTypeSellingManagerOrderStatusType
	 */
	public function getOrderStatus()
	{
		return $this->OrderStatus;
	}
	/**
	 * Set UnpaidItemStatus
	 * @param UnpaidItemStatusTypeCodeType UnpaidItemStatus
	 * @return UnpaidItemStatusTypeCodeType
	 */
	public function setUnpaidItemStatus($_UnpaidItemStatus)
	{
		return ($this->UnpaidItemStatus = EbayTradingTypeUnpaidItemStatusTypeCodeType::valueIsValid($_UnpaidItemStatus)?$_UnpaidItemStatus:null);
	}
	/**
	 * Get UnpaidItemStatus
	 * @return EbayTradingTypeUnpaidItemStatusTypeCodeType
	 */
	public function getUnpaidItemStatus()
	{
		return $this->UnpaidItemStatus;
	}
	/**
	 * Set SalePrice
	 * @param AmountType SalePrice
	 * @return AmountType
	 */
	public function setSalePrice($_SalePrice)
	{
		return ($this->SalePrice = $_SalePrice);
	}
	/**
	 * Get SalePrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getSalePrice()
	{
		return $this->SalePrice;
	}
	/**
	 * Set EmailsSent
	 * @param int EmailsSent
	 * @return int
	 */
	public function setEmailsSent($_EmailsSent)
	{
		return ($this->EmailsSent = $_EmailsSent);
	}
	/**
	 * Get EmailsSent
	 * @return int
	 */
	public function getEmailsSent()
	{
		return $this->EmailsSent;
	}
	/**
	 * Set DaysSinceSale
	 * @param int DaysSinceSale
	 * @return int
	 */
	public function setDaysSinceSale($_DaysSinceSale)
	{
		return ($this->DaysSinceSale = $_DaysSinceSale);
	}
	/**
	 * Get DaysSinceSale
	 * @return int
	 */
	public function getDaysSinceSale()
	{
		return $this->DaysSinceSale;
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
	 * Set BuyerEmail
	 * @param string BuyerEmail
	 * @return string
	 */
	public function setBuyerEmail($_BuyerEmail)
	{
		return ($this->BuyerEmail = $_BuyerEmail);
	}
	/**
	 * Get BuyerEmail
	 * @return string
	 */
	public function getBuyerEmail()
	{
		return $this->BuyerEmail;
	}
	/**
	 * Set SaleRecordID
	 * @param long SaleRecordID
	 * @return long
	 */
	public function setSaleRecordID($_SaleRecordID)
	{
		return ($this->SaleRecordID = $_SaleRecordID);
	}
	/**
	 * Get SaleRecordID
	 * @return long
	 */
	public function getSaleRecordID()
	{
		return $this->SaleRecordID;
	}
	/**
	 * Set CreationTime
	 * @param dateTime CreationTime
	 * @return dateTime
	 */
	public function setCreationTime($_CreationTime)
	{
		return ($this->CreationTime = $_CreationTime);
	}
	/**
	 * Get CreationTime
	 * @return dateTime
	 */
	public function getCreationTime()
	{
		return $this->CreationTime;
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