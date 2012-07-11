<?php
/**
 * Class file for EbayTradingTypeSellingManagerEmailTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerEmailTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerEmailTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ManualEntry'
	 * Meta informations :
	 * 	- documentation : Email logged manually. For example, the seller manually adds an entry to track email sent to a buyer offline.
	 * @return string 'ManualEntry'
	 */
	const VALUE_MANUALENTRY = 'ManualEntry';
	/**
	 * Constant for value 'WinningBuyerEmail'
	 * Meta informations :
	 * 	- documentation : Winning Buyer Notification.
	 * @return string 'WinningBuyerEmail'
	 */
	const VALUE_WINNINGBUYEREMAIL = 'WinningBuyerEmail';
	/**
	 * Constant for value 'PaymentReminderEmail'
	 * Meta informations :
	 * 	- documentation : Payment Reminder emails.
	 * @return string 'PaymentReminderEmail'
	 */
	const VALUE_PAYMENTREMINDEREMAIL = 'PaymentReminderEmail';
	/**
	 * Constant for value 'PaymentReceivedEmail'
	 * Meta informations :
	 * 	- documentation : Payment received notification.
	 * @return string 'PaymentReceivedEmail'
	 */
	const VALUE_PAYMENTRECEIVEDEMAIL = 'PaymentReceivedEmail';
	/**
	 * Constant for value 'RequestForShippingAddressEmail'
	 * Meta informations :
	 * 	- documentation : Request shipping address email.
	 * @return string 'RequestForShippingAddressEmail'
	 */
	const VALUE_REQUESTFORSHIPPINGADDRESSEMAIL = 'RequestForShippingAddressEmail';
	/**
	 * Constant for value 'FeedbackReminderEmail'
	 * Meta informations :
	 * 	- documentation : Feedback Reminder emails.
	 * @return string 'FeedbackReminderEmail'
	 */
	const VALUE_FEEDBACKREMINDEREMAIL = 'FeedbackReminderEmail';
	/**
	 * Constant for value 'ShipmentSentEmail'
	 * Meta informations :
	 * 	- documentation : Shipment sent email.
	 * @return string 'ShipmentSentEmail'
	 */
	const VALUE_SHIPMENTSENTEMAIL = 'ShipmentSentEmail';
	/**
	 * Constant for value 'PersonalizedEmail'
	 * Meta informations :
	 * 	- documentation : Personalized emails.
	 * @return string 'PersonalizedEmail'
	 */
	const VALUE_PERSONALIZEDEMAIL = 'PersonalizedEmail';
	/**
	 * Constant for value 'InvoiceNotification'
	 * Meta informations :
	 * 	- documentation : Invoice notification emails.
	 * @return string 'InvoiceNotification'
	 */
	const VALUE_INVOICENOTIFICATION = 'InvoiceNotification';
	/**
	 * Constant for value 'CustomEmailTemplate1'
	 * Meta informations :
	 * 	- documentation : Custom email template 1.
	 * @return string 'CustomEmailTemplate1'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE1 = 'CustomEmailTemplate1';
	/**
	 * Constant for value 'CustomEmailTemplate2'
	 * Meta informations :
	 * 	- documentation : Custom email template 2.
	 * @return string 'CustomEmailTemplate2'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE2 = 'CustomEmailTemplate2';
	/**
	 * Constant for value 'CustomEmailTemplate3'
	 * Meta informations :
	 * 	- documentation : Custom email template 3.
	 * @return string 'CustomEmailTemplate3'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE3 = 'CustomEmailTemplate3';
	/**
	 * Constant for value 'CustomEmailTemplate4'
	 * Meta informations :
	 * 	- documentation : Custom email template 4.
	 * @return string 'CustomEmailTemplate4'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE4 = 'CustomEmailTemplate4';
	/**
	 * Constant for value 'CustomEmailTemplate5'
	 * Meta informations :
	 * 	- documentation : Custom email template 5.
	 * @return string 'CustomEmailTemplate5'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE5 = 'CustomEmailTemplate5';
	/**
	 * Constant for value 'CustomEmailTemplate6'
	 * Meta informations :
	 * 	- documentation : Custom email template 6.
	 * @return string 'CustomEmailTemplate6'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE6 = 'CustomEmailTemplate6';
	/**
	 * Constant for value 'CustomEmailTemplate7'
	 * Meta informations :
	 * 	- documentation : Custom email template 7.
	 * @return string 'CustomEmailTemplate7'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE7 = 'CustomEmailTemplate7';
	/**
	 * Constant for value 'CustomEmailTemplate8'
	 * Meta informations :
	 * 	- documentation : Custom email template 8.
	 * @return string 'CustomEmailTemplate8'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE8 = 'CustomEmailTemplate8';
	/**
	 * Constant for value 'CustomEmailTemplate9'
	 * Meta informations :
	 * 	- documentation : Custom email template 9.
	 * @return string 'CustomEmailTemplate9'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE9 = 'CustomEmailTemplate9';
	/**
	 * Constant for value 'CustomEmailTemplate10'
	 * Meta informations :
	 * 	- documentation : Custom email template 10.
	 * @return string 'CustomEmailTemplate10'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE10 = 'CustomEmailTemplate10';
	/**
	 * Constant for value 'CustomEmailTemplate11'
	 * Meta informations :
	 * 	- documentation : Custom email template 11.
	 * @return string 'CustomEmailTemplate11'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE11 = 'CustomEmailTemplate11';
	/**
	 * Constant for value 'CustomEmailTemplate12'
	 * Meta informations :
	 * 	- documentation : Custom email template 12.
	 * @return string 'CustomEmailTemplate12'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE12 = 'CustomEmailTemplate12';
	/**
	 * Constant for value 'CustomEmailTemplate13'
	 * Meta informations :
	 * 	- documentation : Custom email template 13.
	 * @return string 'CustomEmailTemplate13'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE13 = 'CustomEmailTemplate13';
	/**
	 * Constant for value 'CustomEmailTemplate14'
	 * Meta informations :
	 * 	- documentation : Custom email template 14.
	 * @return string 'CustomEmailTemplate14'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE14 = 'CustomEmailTemplate14';
	/**
	 * Constant for value 'CustomEmailTemplate15'
	 * Meta informations :
	 * 	- documentation : Custom email template 15.
	 * @return string 'CustomEmailTemplate15'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE15 = 'CustomEmailTemplate15';
	/**
	 * Constant for value 'CustomEmailTemplate16'
	 * Meta informations :
	 * 	- documentation : Custom email template 16.
	 * @return string 'CustomEmailTemplate16'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE16 = 'CustomEmailTemplate16';
	/**
	 * Constant for value 'CustomEmailTemplate17'
	 * Meta informations :
	 * 	- documentation : Custom email template 17.
	 * @return string 'CustomEmailTemplate17'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE17 = 'CustomEmailTemplate17';
	/**
	 * Constant for value 'CustomEmailTemplate18'
	 * Meta informations :
	 * 	- documentation : Custom email template 18.
	 * @return string 'CustomEmailTemplate18'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE18 = 'CustomEmailTemplate18';
	/**
	 * Constant for value 'CustomEmailTemplate19'
	 * Meta informations :
	 * 	- documentation : Custom email template 19.
	 * @return string 'CustomEmailTemplate19'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE19 = 'CustomEmailTemplate19';
	/**
	 * Constant for value 'CustomEmailTemplate20'
	 * Meta informations :
	 * 	- documentation : Custom email template 20.
	 * @return string 'CustomEmailTemplate20'
	 */
	const VALUE_CUSTOMEMAILTEMPLATE20 = 'CustomEmailTemplate20';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerEmailTypeCodeType
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
		return in_array($_value,array(self::VALUE_MANUALENTRY,self::VALUE_WINNINGBUYEREMAIL,self::VALUE_PAYMENTREMINDEREMAIL,self::VALUE_PAYMENTRECEIVEDEMAIL,self::VALUE_REQUESTFORSHIPPINGADDRESSEMAIL,self::VALUE_FEEDBACKREMINDEREMAIL,self::VALUE_SHIPMENTSENTEMAIL,self::VALUE_PERSONALIZEDEMAIL,self::VALUE_INVOICENOTIFICATION,self::VALUE_CUSTOMEMAILTEMPLATE1,self::VALUE_CUSTOMEMAILTEMPLATE2,self::VALUE_CUSTOMEMAILTEMPLATE3,self::VALUE_CUSTOMEMAILTEMPLATE4,self::VALUE_CUSTOMEMAILTEMPLATE5,self::VALUE_CUSTOMEMAILTEMPLATE6,self::VALUE_CUSTOMEMAILTEMPLATE7,self::VALUE_CUSTOMEMAILTEMPLATE8,self::VALUE_CUSTOMEMAILTEMPLATE9,self::VALUE_CUSTOMEMAILTEMPLATE10,self::VALUE_CUSTOMEMAILTEMPLATE11,self::VALUE_CUSTOMEMAILTEMPLATE12,self::VALUE_CUSTOMEMAILTEMPLATE13,self::VALUE_CUSTOMEMAILTEMPLATE14,self::VALUE_CUSTOMEMAILTEMPLATE15,self::VALUE_CUSTOMEMAILTEMPLATE16,self::VALUE_CUSTOMEMAILTEMPLATE17,self::VALUE_CUSTOMEMAILTEMPLATE18,self::VALUE_CUSTOMEMAILTEMPLATE19,self::VALUE_CUSTOMEMAILTEMPLATE20,self::VALUE_CUSTOMCODE));
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