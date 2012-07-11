<?php
/**
 * Class file for EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NotPaidNotShipped'
	 * Meta informations :
	 * 	- documentation : Item is not paid and not shipped.
	 * @return string 'NotPaidNotShipped'
	 */
	const VALUE_NOTPAIDNOTSHIPPED = 'NotPaidNotShipped';
	/**
	 * Constant for value 'PaidNotShipped'
	 * Meta informations :
	 * 	- documentation : Item is paid but not shipped.
	 * @return string 'PaidNotShipped'
	 */
	const VALUE_PAIDNOTSHIPPED = 'PaidNotShipped';
	/**
	 * Constant for value 'PrintShippingLabel'
	 * Meta informations :
	 * 	- documentation : Item is paid but not shipped.
	 * @return string 'PrintShippingLabel'
	 */
	const VALUE_PRINTSHIPPINGLABEL = 'PrintShippingLabel';
	/**
	 * Constant for value 'PaidShipped'
	 * Meta informations :
	 * 	- documentation : Item is paid for and is shipped.
	 * @return string 'PaidShipped'
	 */
	const VALUE_PAIDSHIPPED = 'PaidShipped';
	/**
	 * Constant for value 'PaidNoFeedback'
	 * Meta informations :
	 * 	- documentation : An alert has been issued about a listing that is paid with no feedback left.
	 * @return string 'PaidNoFeedback'
	 */
	const VALUE_PAIDNOFEEDBACK = 'PaidNoFeedback';
	/**
	 * Constant for value 'PaymentReminderSendError'
	 * Meta informations :
	 * 	- documentation : Payment Reminder emails not sent due to system error.
	 * @return string 'PaymentReminderSendError'
	 */
	const VALUE_PAYMENTREMINDERSENDERROR = 'PaymentReminderSendError';
	/**
	 * Constant for value 'PaymentReceivedNotificationSendError'
	 * Meta informations :
	 * 	- documentation : Payment received notification not sent due to system error.
	 * @return string 'PaymentReceivedNotificationSendError'
	 */
	const VALUE_PAYMENTRECEIVEDNOTIFICATIONSENDERROR = 'PaymentReceivedNotificationSendError';
	/**
	 * Constant for value 'RequestForShippingAddressSendError'
	 * Meta informations :
	 * 	- documentation : Request shipping address emails not sent due to system error.
	 * @return string 'RequestForShippingAddressSendError'
	 */
	const VALUE_REQUESTFORSHIPPINGADDRESSSENDERROR = 'RequestForShippingAddressSendError';
	/**
	 * Constant for value 'ShippingNotificationSendError'
	 * Meta informations :
	 * 	- documentation : Request shipping address emails not sent due to system error.
	 * @return string 'ShippingNotificationSendError'
	 */
	const VALUE_SHIPPINGNOTIFICATIONSENDERROR = 'ShippingNotificationSendError';
	/**
	 * Constant for value 'PersonalizedEmailsSendError'
	 * Meta informations :
	 * 	- documentation : Personalized emails not sent due to system error.
	 * @return string 'PersonalizedEmailsSendError'
	 */
	const VALUE_PERSONALIZEDEMAILSSENDERROR = 'PersonalizedEmailsSendError';
	/**
	 * Constant for value 'WinningBuyerNotificationSendError'
	 * Meta informations :
	 * 	- documentation : Winning Buyer Notification not sent due to system error.
	 * @return string 'WinningBuyerNotificationSendError'
	 */
	const VALUE_WINNINGBUYERNOTIFICATIONSENDERROR = 'WinningBuyerNotificationSendError';
	/**
	 * Constant for value 'FeeCreditRequest'
	 * Meta informations :
	 * 	- documentation : Final value fee credit requests can be filed.
	 * @return string 'FeeCreditRequest'
	 */
	const VALUE_FEECREDITREQUEST = 'FeeCreditRequest';
	/**
	 * Constant for value 'PayPalPayment'
	 * Meta informations :
	 * 	- documentation : If true, indicates that the PayPal Payment Received alert has been issued.
	 * @return string 'PayPalPayment'
	 */
	const VALUE_PAYPALPAYMENT = 'PayPalPayment';
	/**
	 * Constant for value 'FeedbackMessageNotSent'
	 * Meta informations :
	 * 	- documentation : Automated feedback message is not sent.
	 * @return string 'FeedbackMessageNotSent'
	 */
	const VALUE_FEEDBACKMESSAGENOTSENT = 'FeedbackMessageNotSent';
	/**
	 * Constant for value 'FeedbackReminderSendError'
	 * Meta informations :
	 * 	- documentation : Feedback Reminder emails not sent due to system error.
	 * @return string 'FeedbackReminderSendError'
	 */
	const VALUE_FEEDBACKREMINDERSENDERROR = 'FeedbackReminderSendError';
	/**
	 * Constant for value 'NotShipped'
	 * Meta informations :
	 * 	- documentation : Item is not shipped.
	 * @return string 'NotShipped'
	 */
	const VALUE_NOTSHIPPED = 'NotShipped';
	/**
	 * Constant for value 'UnpaidItemReminder'
	 * Meta informations :
	 * 	- documentation : Listing eligible for unpaid item reminder
	 * @return string 'UnpaidItemReminder'
	 */
	const VALUE_UNPAIDITEMREMINDER = 'UnpaidItemReminder';
	/**
	 * Constant for value 'EscrowCancelled'
	 * Meta informations :
	 * 	- documentation : Escrow status is Cancelled.
	 * @return string 'EscrowCancelled'
	 */
	const VALUE_ESCROWCANCELLED = 'EscrowCancelled';
	/**
	 * Constant for value 'EscrowCompleted'
	 * Meta informations :
	 * 	- documentation : Escrow status is Completed.
	 * @return string 'EscrowCompleted'
	 */
	const VALUE_ESCROWCOMPLETED = 'EscrowCompleted';
	/**
	 * Constant for value 'EscrowInitiated'
	 * Meta informations :
	 * 	- documentation : Escrow status is Initiated.
	 * @return string 'EscrowInitiated'
	 */
	const VALUE_ESCROWINITIATED = 'EscrowInitiated';
	/**
	 * Constant for value 'EscrowManageRefund'
	 * Meta informations :
	 * 	- documentation : Escrow status is in refund state.
	 * @return string 'EscrowManageRefund'
	 */
	const VALUE_ESCROWMANAGEREFUND = 'EscrowManageRefund';
	/**
	 * Constant for value 'EscrowReleasePayment'
	 * Meta informations :
	 * 	- documentation : Item is shipped and Escrow status is in Release payment.
	 * @return string 'EscrowReleasePayment'
	 */
	const VALUE_ESCROWRELEASEPAYMENT = 'EscrowReleasePayment';
	/**
	 * Constant for value 'EscrowShipToBuyer'
	 * Meta informations :
	 * 	- documentation : Payment is confirmed and item can be shipped to buyer.
	 * @return string 'EscrowShipToBuyer'
	 */
	const VALUE_ESCROWSHIPTOBUYER = 'EscrowShipToBuyer';
	/**
	 * Constant for value 'EscrowSoldAll'
	 * Meta informations :
	 * 	- documentation : All Escrow states.
	 * @return string 'EscrowSoldAll'
	 */
	const VALUE_ESCROWSOLDALL = 'EscrowSoldAll';
	/**
	 * Constant for value 'ShippedAndAwaitingFeedback'
	 * Meta informations :
	 * 	- documentation : Item is shipped and feedback is not yet received.
	 * @return string 'ShippedAndAwaitingFeedback'
	 */
	const VALUE_SHIPPEDANDAWAITINGFEEDBACK = 'ShippedAndAwaitingFeedback';
	/**
	 * Constant for value 'InternationalSale'
	 * Meta informations :
	 * 	- documentation : New international sale.
	 * @return string 'InternationalSale'
	 */
	const VALUE_INTERNATIONALSALE = 'InternationalSale';
	/**
	 * Constant for value 'eBayGivingWorksDonationOwed'
	 * Meta informations :
	 * 	- documentation : Charity filter.
	 * @return string 'eBayGivingWorksDonationOwed'
	 */
	const VALUE_EBAYGIVINGWORKSDONATIONOWED = 'eBayGivingWorksDonationOwed';
	/**
	 * Constant for value 'PaymentOverDue'
	 * Meta informations :
	 * 	- documentation : Payment is overdue.
	 * @return string 'PaymentOverDue'
	 */
	const VALUE_PAYMENTOVERDUE = 'PaymentOverDue';
	/**
	 * Constant for value 'PadiWithPaisaPayEscrow'
	 * Meta informations :
	 * 	- documentation : Payment is done with PaisaPay Escrow.
	 * @return string 'PadiWithPaisaPayEscrow'
	 */
	const VALUE_PADIWITHPAISAPAYESCROW = 'PadiWithPaisaPayEscrow';
	/**
	 * Constant for value 'CustomEmailTemplate1SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 1.
	 * @return string 'CustomEmailTemplate1SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE1SENDERROR = 'CustomEmailTemplate1SendError';
	/**
	 * Constant for value 'CustomEmailTemplate2SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 2.
	 * @return string 'CustomEmailTemplate2SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE2SENDERROR = 'CustomEmailTemplate2SendError';
	/**
	 * Constant for value 'CustomEmailTemplate3SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 3.
	 * @return string 'CustomEmailTemplate3SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE3SENDERROR = 'CustomEmailTemplate3SendError';
	/**
	 * Constant for value 'CustomEmailTemplate4SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 4.
	 * @return string 'CustomEmailTemplate4SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE4SENDERROR = 'CustomEmailTemplate4SendError';
	/**
	 * Constant for value 'CustomEmailTemplate5SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 5.
	 * @return string 'CustomEmailTemplate5SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE5SENDERROR = 'CustomEmailTemplate5SendError';
	/**
	 * Constant for value 'CustomEmailTemplate6SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 6.
	 * @return string 'CustomEmailTemplate6SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE6SENDERROR = 'CustomEmailTemplate6SendError';
	/**
	 * Constant for value 'CustomEmailTemplate7SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 7.
	 * @return string 'CustomEmailTemplate7SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE7SENDERROR = 'CustomEmailTemplate7SendError';
	/**
	 * Constant for value 'CustomEmailTemplate8SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 8.
	 * @return string 'CustomEmailTemplate8SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE8SENDERROR = 'CustomEmailTemplate8SendError';
	/**
	 * Constant for value 'CustomEmailTemplate9SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 9.
	 * @return string 'CustomEmailTemplate9SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE9SENDERROR = 'CustomEmailTemplate9SendError';
	/**
	 * Constant for value 'CustomEmailTemplate10SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 10.
	 * @return string 'CustomEmailTemplate10SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE10SENDERROR = 'CustomEmailTemplate10SendError';
	/**
	 * Constant for value 'CustomEmailTemplate11SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 11.
	 * @return string 'CustomEmailTemplate11SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE11SENDERROR = 'CustomEmailTemplate11SendError';
	/**
	 * Constant for value 'CustomEmailTemplate12SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 12.
	 * @return string 'CustomEmailTemplate12SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE12SENDERROR = 'CustomEmailTemplate12SendError';
	/**
	 * Constant for value 'CustomEmailTemplate13SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 13.
	 * @return string 'CustomEmailTemplate13SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE13SENDERROR = 'CustomEmailTemplate13SendError';
	/**
	 * Constant for value 'CustomEmailTemplate14SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 14.
	 * @return string 'CustomEmailTemplate14SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE14SENDERROR = 'CustomEmailTemplate14SendError';
	/**
	 * Constant for value 'CustomEmailTemplate15SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 15.
	 * @return string 'CustomEmailTemplate15SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE15SENDERROR = 'CustomEmailTemplate15SendError';
	/**
	 * Constant for value 'CustomEmailTemplate16SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 16.
	 * @return string 'CustomEmailTemplate16SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE16SENDERROR = 'CustomEmailTemplate16SendError';
	/**
	 * Constant for value 'CustomEmailTemplate17SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 17.
	 * @return string 'CustomEmailTemplate17SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE17SENDERROR = 'CustomEmailTemplate17SendError';
	/**
	 * Constant for value 'CustomEmailTemplate18SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 18.
	 * @return string 'CustomEmailTemplate18SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE18SENDERROR = 'CustomEmailTemplate18SendError';
	/**
	 * Constant for value 'CustomEmailTemplate19SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 19.
	 * @return string 'CustomEmailTemplate19SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE19SENDERROR = 'CustomEmailTemplate19SendError';
	/**
	 * Constant for value 'CustomEmailTemplate20SendError'
	 * Meta informations :
	 * 	- documentation : Failed to send custom email template 20.
	 * @return string 'CustomEmailTemplate20SendError'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE20SENDERROR = 'CustomEmailTemplate20SendError';
	/**
	 * Constant for value 'ResponseRequiredForReturnCase'
	 * Meta informations :
	 * 	- documentation : Reserved for future use. If a buyer requests to return an item, the seller's response is required.
	 * @return string 'ResponseRequiredForReturnCase'
	 */
	const VALUE_RESPONSEREQUIREDFORRETURNCASE = 'ResponseRequiredForReturnCase';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
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
		return in_array($_value,array(self::VALUE_NOTPAIDNOTSHIPPED,self::VALUE_PAIDNOTSHIPPED,self::VALUE_PRINTSHIPPINGLABEL,self::VALUE_PAIDSHIPPED,self::VALUE_PAIDNOFEEDBACK,self::VALUE_PAYMENTREMINDERSENDERROR,self::VALUE_PAYMENTRECEIVEDNOTIFICATIONSENDERROR,self::VALUE_REQUESTFORSHIPPINGADDRESSSENDERROR,self::VALUE_SHIPPINGNOTIFICATIONSENDERROR,self::VALUE_PERSONALIZEDEMAILSSENDERROR,self::VALUE_WINNINGBUYERNOTIFICATIONSENDERROR,self::VALUE_FEECREDITREQUEST,self::VALUE_PAYPALPAYMENT,self::VALUE_FEEDBACKMESSAGENOTSENT,self::VALUE_FEEDBACKREMINDERSENDERROR,self::VALUE_NOTSHIPPED,self::VALUE_UNPAIDITEMREMINDER,self::VALUE_ESCROWCANCELLED,self::VALUE_ESCROWCOMPLETED,self::VALUE_ESCROWINITIATED,self::VALUE_ESCROWMANAGEREFUND,self::VALUE_ESCROWRELEASEPAYMENT,self::VALUE_ESCROWSHIPTOBUYER,self::VALUE_ESCROWSOLDALL,self::VALUE_SHIPPEDANDAWAITINGFEEDBACK,self::VALUE_INTERNATIONALSALE,self::VALUE_EBAYGIVINGWORKSDONATIONOWED,self::VALUE_PAYMENTOVERDUE,self::VALUE_PADIWITHPAISAPAYESCROW,self::VALUE_CUSTOMEMAILTEMPLATE1SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE2SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE3SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE4SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE5SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE6SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE7SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE8SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE9SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE10SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE11SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE12SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE13SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE14SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE15SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE16SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE17SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE18SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE19SENDERROR,self::VALUE_CUSTOMEMAILTEMPLATE20SENDERROR,self::VALUE_RESPONSEREQUIREDFORRETURNCASE,self::VALUE_CUSTOMCODE));
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