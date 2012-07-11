<?php
/**
 * Class file for EbayTradingTypePaidStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaidStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePaidStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotPaid'
	 * Meta informations :
	 * 	- documentation : The buyer has not completed checkout, but has not paid through PayPal or PaisaPay (but please also see the documentation for PaymentHoldStatus and its applicable values). The buyer might have paid using another method, but the payment might not have been received or cleared. Important: Please see the documentation for PaymentHoldStatus and its applicable values. PaymentHoldStatus contains the current status of a hold on a PayPal payment.
	 * @return string 'NotPaid'
	 */
	const VALUE_NOTPAID = 'NotPaid';
	/**
	 * Constant for value 'BuyerHasNotCompletedCheckout'
	 * Meta informations :
	 * 	- documentation : The buyer has not completed the checkout process and so has not made payment.
	 * @return string 'BuyerHasNotCompletedCheckout'
	 */
	const VALUE_BUYERHASNOTCOMPLETEDCHECKOUT = 'BuyerHasNotCompletedCheckout';
	/**
	 * Constant for value 'PaymentPendingWithPayPal'
	 * Meta informations :
	 * 	- documentation : The buyer has made a PayPal payment, but the seller has not yet received it.
	 * @return string 'PaymentPendingWithPayPal'
	 */
	const VALUE_PAYMENTPENDINGWITHPAYPAL = 'PaymentPendingWithPayPal';
	/**
	 * Constant for value 'PaidWithPayPal'
	 * Meta informations :
	 * 	- documentation : The buyer has made a PayPal payment, and the payment is complete. But please also see the documentation for PaymentHoldStatus and its applicable values. PaymentHoldStatus contains the current status of a hold on a PayPal payment.
	 * @return string 'PaidWithPayPal'
	 */
	const VALUE_PAIDWITHPAYPAL = 'PaidWithPayPal';
	/**
	 * Constant for value 'MarkedAsPaid'
	 * Meta informations :
	 * 	- documentation : The order is marked as paid by either buyer or seller.
	 * @return string 'MarkedAsPaid'
	 */
	const VALUE_MARKEDASPAID = 'MarkedAsPaid';
	/**
	 * Constant for value 'PaymentPendingWithEscrow'
	 * Meta informations :
	 * 	- documentation : The buyer has made an escrow payment, but the seller has not yet received it.
	 * @return string 'PaymentPendingWithEscrow'
	 */
	const VALUE_PAYMENTPENDINGWITHESCROW = 'PaymentPendingWithEscrow';
	/**
	 * Constant for value 'PaidWithEscrow'
	 * Meta informations :
	 * 	- documentation : The buyer has made an escrow payment, and the seller has received payment.
	 * @return string 'PaidWithEscrow'
	 */
	const VALUE_PAIDWITHESCROW = 'PaidWithEscrow';
	/**
	 * Constant for value 'EscrowPaymentCancelled'
	 * Meta informations :
	 * 	- documentation : The buyer has made an escrow payment, but has cancelled the payment.
	 * @return string 'EscrowPaymentCancelled'
	 */
	const VALUE_ESCROWPAYMENTCANCELLED = 'EscrowPaymentCancelled';
	/**
	 * Constant for value 'PaymentPendingWithPaisaPay'
	 * Meta informations :
	 * 	- documentation : The buyer has paid with PaisaPay, but the payment is still being processed. The seller has not yet received payment.
	 * @return string 'PaymentPendingWithPaisaPay'
	 */
	const VALUE_PAYMENTPENDINGWITHPAISAPAY = 'PaymentPendingWithPaisaPay';
	/**
	 * Constant for value 'PaidWithPaisaPay'
	 * Meta informations :
	 * 	- documentation : The buyer has paid with PaisaPay, and the payment is complete.
	 * @return string 'PaidWithPaisaPay'
	 */
	const VALUE_PAIDWITHPAISAPAY = 'PaidWithPaisaPay';
	/**
	 * Constant for value 'PaymentPending'
	 * Meta informations :
	 * 	- documentation : The buyer has made a payment other than PayPal, escrow, or PaisaPay, but the payment is still being processed.
	 * @return string 'PaymentPending'
	 */
	const VALUE_PAYMENTPENDING = 'PaymentPending';
	/**
	 * Constant for value 'PaymentPendingWithPaisaPayEscrow'
	 * Meta informations :
	 * 	- documentation : Payment Pending With PaisaPay Escrow
	 * @return string 'PaymentPendingWithPaisaPayEscrow'
	 */
	const VALUE_PAYMENTPENDINGWITHPAISAPAYESCROW = 'PaymentPendingWithPaisaPayEscrow';
	/**
	 * Constant for value 'PaidWithPaisaPayEscrow'
	 * Meta informations :
	 * 	- documentation : Paid With PaisaPay Escrow
	 * @return string 'PaidWithPaisaPayEscrow'
	 */
	const VALUE_PAIDWITHPAISAPAYESCROW = 'PaidWithPaisaPayEscrow';
	/**
	 * Constant for value 'PaisaPayNotPaid'
	 * Meta informations :
	 * 	- documentation : Paisa Pay Not Paid
	 * @return string 'PaisaPayNotPaid'
	 */
	const VALUE_PAISAPAYNOTPAID = 'PaisaPayNotPaid';
	/**
	 * Constant for value 'Refunded'
	 * Meta informations :
	 * 	- documentation : Refunded
	 * @return string 'Refunded'
	 */
	const VALUE_REFUNDED = 'Refunded';
	/**
	 * Constant for value 'WaitingForCODPayment'
	 * Meta informations :
	 * 	- documentation : WaitingForCODPayment
	 * @return string 'WaitingForCODPayment'
	 */
	const VALUE_WAITINGFORCODPAYMENT = 'WaitingForCODPayment';
	/**
	 * Constant for value 'PaidCOD'
	 * Meta informations :
	 * 	- documentation : PaidCOD
	 * @return string 'PaidCOD'
	 */
	const VALUE_PAIDCOD = 'PaidCOD';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'Paid'
	 * Meta informations :
	 * 	- documentation : Paid
	 * @return string 'Paid'
	 */
	const VALUE_PAID = 'Paid';
	/**
	 * Constructor
	 * @return EbayTradingTypePaidStatusCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_NOTPAID,self::VALUE_BUYERHASNOTCOMPLETEDCHECKOUT,self::VALUE_PAYMENTPENDINGWITHPAYPAL,self::VALUE_PAIDWITHPAYPAL,self::VALUE_MARKEDASPAID,self::VALUE_PAYMENTPENDINGWITHESCROW,self::VALUE_PAIDWITHESCROW,self::VALUE_ESCROWPAYMENTCANCELLED,self::VALUE_PAYMENTPENDINGWITHPAISAPAY,self::VALUE_PAIDWITHPAISAPAY,self::VALUE_PAYMENTPENDING,self::VALUE_PAYMENTPENDINGWITHPAISAPAYESCROW,self::VALUE_PAIDWITHPAISAPAYESCROW,self::VALUE_PAISAPAYNOTPAID,self::VALUE_REFUNDED,self::VALUE_WAITINGFORCODPAYMENT,self::VALUE_PAIDCOD,self::VALUE_CUSTOMCODE,self::VALUE_PAID));
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