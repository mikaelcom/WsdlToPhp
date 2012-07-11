<?php
/**
 * Class file for EbayTradingTypeAccountDetailEntryCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountDetailEntryCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAccountDetailEntryCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : (out) The reason for the charge is unknown.
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'FeeInsertion'
	 * Meta informations :
	 * 	- documentation : (out) The fee for listing an item for sale on eBay.
	 * @return string 'FeeInsertion'
	 */
	const VALUE_FEEINSERTION = 'FeeInsertion';
	/**
	 * Constant for value 'FeeBold'
	 * Meta informations :
	 * 	- documentation : (out) The fee for a listing title in boldface font.
	 * @return string 'FeeBold'
	 */
	const VALUE_FEEBOLD = 'FeeBold';
	/**
	 * Constant for value 'FeeFeatured'
	 * Meta informations :
	 * 	- documentation : (out) The fee for adding an optional feature to a listing, such as a reserve fee or a listing upgrade fee.
	 * @return string 'FeeFeatured'
	 */
	const VALUE_FEEFEATURED = 'FeeFeatured';
	/**
	 * Constant for value 'FeeCategoryFeatured'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'FeeCategoryFeatured'
	 */
	const VALUE_FEECATEGORYFEATURED = 'FeeCategoryFeatured';
	/**
	 * Constant for value 'FeeFinalValue'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged when a listed item sells. The fee is a percentage of the final sale price.
	 * @return string 'FeeFinalValue'
	 */
	const VALUE_FEEFINALVALUE = 'FeeFinalValue';
	/**
	 * Constant for value 'PaymentCheck'
	 * Meta informations :
	 * 	- documentation : (out) A payment by check made by a seller to eBay.
	 * @return string 'PaymentCheck'
	 */
	const VALUE_PAYMENTCHECK = 'PaymentCheck';
	/**
	 * Constant for value 'PaymentCC'
	 * Meta informations :
	 * 	- documentation : (out) A payment by credit card made by a seller to eBay.
	 * @return string 'PaymentCC'
	 */
	const VALUE_PAYMENTCC = 'PaymentCC';
	/**
	 * Constant for value 'CreditCourtesy'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditCourtesy'
	 */
	const VALUE_CREDITCOURTESY = 'CreditCourtesy';
	/**
	 * Constant for value 'CreditNoSale'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditNoSale'
	 */
	const VALUE_CREDITNOSALE = 'CreditNoSale';
	/**
	 * Constant for value 'CreditPartialSale'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditPartialSale'
	 */
	const VALUE_CREDITPARTIALSALE = 'CreditPartialSale';
	/**
	 * Constant for value 'RefundCC'
	 * Meta informations :
	 * 	- documentation : (out) A refund made by eBay to the seller's credit card.
	 * @return string 'RefundCC'
	 */
	const VALUE_REFUNDCC = 'RefundCC';
	/**
	 * Constant for value 'RefundCheck'
	 * Meta informations :
	 * 	- documentation : (out) A refund made by eBay to the seller by check.
	 * @return string 'RefundCheck'
	 */
	const VALUE_REFUNDCHECK = 'RefundCheck';
	/**
	 * Constant for value 'FinanceCharge'
	 * Meta informations :
	 * 	- documentation : (out) A finance charge made to the seller's account, for example, the monthly finance charge added to an account whose balance has not been paid.
	 * @return string 'FinanceCharge'
	 */
	const VALUE_FINANCECHARGE = 'FinanceCharge';
	/**
	 * Constant for value 'AWDebit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AWDebit'
	 */
	const VALUE_AWDEBIT = 'AWDebit';
	/**
	 * Constant for value 'AWCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AWCredit'
	 */
	const VALUE_AWCREDIT = 'AWCredit';
	/**
	 * Constant for value 'AWMemo'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AWMemo'
	 */
	const VALUE_AWMEMO = 'AWMemo';
	/**
	 * Constant for value 'CreditDuplicateListing'
	 * Meta informations :
	 * 	- documentation : (out) A credit made by eBay for a duplicate listing.
	 * @return string 'CreditDuplicateListing'
	 */
	const VALUE_CREDITDUPLICATELISTING = 'CreditDuplicateListing';
	/**
	 * Constant for value 'FeePartialSale'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for a partial sale.
	 * @return string 'FeePartialSale'
	 */
	const VALUE_FEEPARTIALSALE = 'FeePartialSale';
	/**
	 * Constant for value 'PaymentElectronicTransferReversal'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of an electronic transfer payment.
	 * @return string 'PaymentElectronicTransferReversal'
	 */
	const VALUE_PAYMENTELECTRONICTRANSFERREVERSAL = 'PaymentElectronicTransferReversal';
	/**
	 * Constant for value 'PaymentCCOnce'
	 * Meta informations :
	 * 	- documentation : (out) A one-time payment to the account made by credit card.
	 * @return string 'PaymentCCOnce'
	 */
	const VALUE_PAYMENTCCONCE = 'PaymentCCOnce';
	/**
	 * Constant for value 'FeeReturnedCheck'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for a returned check.
	 * @return string 'FeeReturnedCheck'
	 */
	const VALUE_FEERETURNEDCHECK = 'FeeReturnedCheck';
	/**
	 * Constant for value 'FeeRedepositCheck'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay when a check must be redeposited to collect funds.
	 * @return string 'FeeRedepositCheck'
	 */
	const VALUE_FEEREDEPOSITCHECK = 'FeeRedepositCheck';
	/**
	 * Constant for value 'PaymentCash'
	 * Meta informations :
	 * 	- documentation : (out) A cash payment made on the seller's account.
	 * @return string 'PaymentCash'
	 */
	const VALUE_PAYMENTCASH = 'PaymentCash';
	/**
	 * Constant for value 'CreditInsertion'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for an insertion fee. If a listed item does not sell or results in an Unpaid Item (UPI) dispute, the seller can relist the item. If the item sells the second time, eBay credits the insertion fee.
	 * @return string 'CreditInsertion'
	 */
	const VALUE_CREDITINSERTION = 'CreditInsertion';
	/**
	 * Constant for value 'CreditBold'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Bold listing fee.
	 * @return string 'CreditBold'
	 */
	const VALUE_CREDITBOLD = 'CreditBold';
	/**
	 * Constant for value 'CreditFeatured'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Featured listing fee.
	 * @return string 'CreditFeatured'
	 */
	const VALUE_CREDITFEATURED = 'CreditFeatured';
	/**
	 * Constant for value 'CreditCategoryFeatured'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditCategoryFeatured'
	 */
	const VALUE_CREDITCATEGORYFEATURED = 'CreditCategoryFeatured';
	/**
	 * Constant for value 'CreditFinalValue'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Final Value Fee. Issued as a result of an Unpaid Item dispute, under some circumstances.
	 * @return string 'CreditFinalValue'
	 */
	const VALUE_CREDITFINALVALUE = 'CreditFinalValue';
	/**
	 * Constant for value 'FeeNSFCheck'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay when the seller's check does not clear due to insufficient funds.
	 * @return string 'FeeNSFCheck'
	 */
	const VALUE_FEENSFCHECK = 'FeeNSFCheck';
	/**
	 * Constant for value 'FeeReturnCheckClose'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay when the seller's check does not clear because the account has been closed.
	 * @return string 'FeeReturnCheckClose'
	 */
	const VALUE_FEERETURNCHECKCLOSE = 'FeeReturnCheckClose';
	/**
	 * Constant for value 'Memo'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'Memo'
	 */
	const VALUE_MEMO = 'Memo';
	/**
	 * Constant for value 'PaymentMoneyOrder'
	 * Meta informations :
	 * 	- documentation : (out) A payment made to the account by money order.
	 * @return string 'PaymentMoneyOrder'
	 */
	const VALUE_PAYMENTMONEYORDER = 'PaymentMoneyOrder';
	/**
	 * Constant for value 'CreditCardOnFile'
	 * Meta informations :
	 * 	- documentation : (out) An automatic monthly charge of the seller's invoice amount made by eBay to a credit card the seller has placed on file.
	 * @return string 'CreditCardOnFile'
	 */
	const VALUE_CREDITCARDONFILE = 'CreditCardOnFile';
	/**
	 * Constant for value 'CreditCardNotOnFile'
	 * Meta informations :
	 * 	- documentation : (out) A one-time payment made by a credit card that is not on file with eBay for automatic monthly payments.
	 * @return string 'CreditCardNotOnFile'
	 */
	const VALUE_CREDITCARDNOTONFILE = 'CreditCardNotOnFile';
	/**
	 * Constant for value 'Invoiced'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'Invoiced'
	 */
	const VALUE_INVOICED = 'Invoiced';
	/**
	 * Constant for value 'InvoicedCreditCard'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'InvoicedCreditCard'
	 */
	const VALUE_INVOICEDCREDITCARD = 'InvoicedCreditCard';
	/**
	 * Constant for value 'CreditTransferFrom'
	 * Meta informations :
	 * 	- documentation : (out) A transfer from another account to this account, resulting in a credit to this account.
	 * @return string 'CreditTransferFrom'
	 */
	const VALUE_CREDITTRANSFERFROM = 'CreditTransferFrom';
	/**
	 * Constant for value 'DebitTransferTo'
	 * Meta informations :
	 * 	- documentation : (out) A transfer from this account to another account, resulting in a debit to this account.
	 * @return string 'DebitTransferTo'
	 */
	const VALUE_DEBITTRANSFERTO = 'DebitTransferTo';
	/**
	 * Constant for value 'InvoiceCreditBalance'
	 * Meta informations :
	 * 	- documentation : (out) A credit balance for an account's invoice period, meaning that the seller should not pay.
	 * @return string 'InvoiceCreditBalance'
	 */
	const VALUE_INVOICECREDITBALANCE = 'InvoiceCreditBalance';
	/**
	 * Constant for value 'eBayDebit'
	 * Meta informations :
	 * 	- documentation : (out) An all-purpose code for debits that are manually applied to auctions, for example, when the credit cannot be applied to an item number
	 * @return string 'eBayDebit'
	 */
	const VALUE_EBAYDEBIT = 'eBayDebit';
	/**
	 * Constant for value 'eBayCredit'
	 * Meta informations :
	 * 	- documentation : (out) An all-purpose code for credits that are manually applied to auctions, for example, when the credit cannot be applied to an item number
	 * @return string 'eBayCredit'
	 */
	const VALUE_EBAYCREDIT = 'eBayCredit';
	/**
	 * Constant for value 'PromotionalCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PromotionalCredit'
	 */
	const VALUE_PROMOTIONALCREDIT = 'PromotionalCredit';
	/**
	 * Constant for value 'CCNotOnFilePerCustReq'
	 * Meta informations :
	 * 	- documentation : (out) A note that the credit card is not on file at the customer's request.
	 * @return string 'CCNotOnFilePerCustReq'
	 */
	const VALUE_CCNOTONFILEPERCUSTREQ = 'CCNotOnFilePerCustReq';
	/**
	 * Constant for value 'CreditInsertionFee'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for an insertion fee when an item is relisted.
	 * @return string 'CreditInsertionFee'
	 */
	const VALUE_CREDITINSERTIONFEE = 'CreditInsertionFee';
	/**
	 * Constant for value 'CCPaymentRejected'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CCPaymentRejected'
	 */
	const VALUE_CCPAYMENTREJECTED = 'CCPaymentRejected';
	/**
	 * Constant for value 'FeeGiftIcon'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for adding a gift icon to a listing. The gift icon highlights the item as a good gift and might offer gift services, such as wrapping or shipping.
	 * @return string 'FeeGiftIcon'
	 */
	const VALUE_FEEGIFTICON = 'FeeGiftIcon';
	/**
	 * Constant for value 'CreditGiftIcon'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the gift item fee.
	 * @return string 'CreditGiftIcon'
	 */
	const VALUE_CREDITGIFTICON = 'CreditGiftIcon';
	/**
	 * Constant for value 'FeeGallery'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for listing an item in the Picture Gallery. A buyer sees a picture of the item when browsing a category, before moving to the item's listing page.
	 * @return string 'FeeGallery'
	 */
	const VALUE_FEEGALLERY = 'FeeGallery';
	/**
	 * Constant for value 'FeeFeaturedGallery'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for listing an item in the Featured section at the top of the Picture Gallery page.
	 * @return string 'FeeFeaturedGallery'
	 */
	const VALUE_FEEFEATUREDGALLERY = 'FeeFeaturedGallery';
	/**
	 * Constant for value 'CreditGallery'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Gallery fee charged when the item was listed.
	 * @return string 'CreditGallery'
	 */
	const VALUE_CREDITGALLERY = 'CreditGallery';
	/**
	 * Constant for value 'CreditFeaturedGallery'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Featured Gallery fee charged when the item was listed.
	 * @return string 'CreditFeaturedGallery'
	 */
	const VALUE_CREDITFEATUREDGALLERY = 'CreditFeaturedGallery';
	/**
	 * Constant for value 'ItemMoveFee'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ItemMoveFee'
	 */
	const VALUE_ITEMMOVEFEE = 'ItemMoveFee';
	/**
	 * Constant for value 'OutageCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay when listings are not available due to system downtime. The downtime can be a title search outage or a hard outage. See the online help for details.
	 * @return string 'OutageCredit'
	 */
	const VALUE_OUTAGECREDIT = 'OutageCredit';
	/**
	 * Constant for value 'CreditPSA'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditPSA'
	 */
	const VALUE_CREDITPSA = 'CreditPSA';
	/**
	 * Constant for value 'CreditPCGS'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'CreditPCGS'
	 */
	const VALUE_CREDITPCGS = 'CreditPCGS';
	/**
	 * Constant for value 'FeeReserve'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay when an item is listed with a reserve price. The fee is credited when the auction completes successfully.
	 * @return string 'FeeReserve'
	 */
	const VALUE_FEERESERVE = 'FeeReserve';
	/**
	 * Constant for value 'CreditReserve'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for a reserve price auction when the auction completes successfully.
	 * @return string 'CreditReserve'
	 */
	const VALUE_CREDITRESERVE = 'CreditReserve';
	/**
	 * Constant for value 'eBayVISACredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'eBayVISACredit'
	 */
	const VALUE_EBAYVISACREDIT = 'eBayVISACredit';
	/**
	 * Constant for value 'BBAdminCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'BBAdminCredit'
	 */
	const VALUE_BBADMINCREDIT = 'BBAdminCredit';
	/**
	 * Constant for value 'BBAdminDebit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'BBAdminDebit'
	 */
	const VALUE_BBADMINDEBIT = 'BBAdminDebit';
	/**
	 * Constant for value 'ReferrerCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay to a Store owner who has promoted items outside of eBay.
	 * @return string 'ReferrerCredit'
	 */
	const VALUE_REFERRERCREDIT = 'ReferrerCredit';
	/**
	 * Constant for value 'ReferrerDebit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ReferrerDebit'
	 */
	const VALUE_REFERRERDEBIT = 'ReferrerDebit';
	/**
	 * Constant for value 'SwitchCurrency'
	 * Meta informations :
	 * 	- documentation : (out) A switch from one billing currency to another. The billing currency can be USD, EUR, CAD, GBP, AUD, JPY, or TWD.
	 * @return string 'SwitchCurrency'
	 */
	const VALUE_SWITCHCURRENCY = 'SwitchCurrency';
	/**
	 * Constant for value 'PaymentGiftCertificate'
	 * Meta informations :
	 * 	- documentation : (out) A payment made to the account by gift certificate.
	 * @return string 'PaymentGiftCertificate'
	 */
	const VALUE_PAYMENTGIFTCERTIFICATE = 'PaymentGiftCertificate';
	/**
	 * Constant for value 'PaymentWireTransfer'
	 * Meta informations :
	 * 	- documentation : (out) A payment made to the account by wire transfer.
	 * @return string 'PaymentWireTransfer'
	 */
	const VALUE_PAYMENTWIRETRANSFER = 'PaymentWireTransfer';
	/**
	 * Constant for value 'PaymentHomeBanking'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaymentHomeBanking'
	 */
	const VALUE_PAYMENTHOMEBANKING = 'PaymentHomeBanking';
	/**
	 * Constant for value 'PaymentElectronicTransfer'
	 * Meta informations :
	 * 	- documentation : (out) A one-time payment made to the account by electronic transfer.
	 * @return string 'PaymentElectronicTransfer'
	 */
	const VALUE_PAYMENTELECTRONICTRANSFER = 'PaymentElectronicTransfer';
	/**
	 * Constant for value 'PaymentAdjustmentCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit (addition) made by eBay to the seller's account when a payment needs to be adjusted.
	 * @return string 'PaymentAdjustmentCredit'
	 */
	const VALUE_PAYMENTADJUSTMENTCREDIT = 'PaymentAdjustmentCredit';
	/**
	 * Constant for value 'PaymentAdjustmentDebit'
	 * Meta informations :
	 * 	- documentation : (out) A debit (deduction) made by eBay to the seller's account when a payment needs to be adjusted.
	 * @return string 'PaymentAdjustmentDebit'
	 */
	const VALUE_PAYMENTADJUSTMENTDEBIT = 'PaymentAdjustmentDebit';
	/**
	 * Constant for value 'Chargeoff'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'Chargeoff'
	 */
	const VALUE_CHARGEOFF = 'Chargeoff';
	/**
	 * Constant for value 'ChargeoffRecovery'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeoffRecovery'
	 */
	const VALUE_CHARGEOFFRECOVERY = 'ChargeoffRecovery';
	/**
	 * Constant for value 'ChargeoffBankruptcy'
	 * Meta informations :
	 * 	- documentation : (out) A writeoff of the account charge by eBay because the seller has declared bankruptcy.
	 * @return string 'ChargeoffBankruptcy'
	 */
	const VALUE_CHARGEOFFBANKRUPTCY = 'ChargeoffBankruptcy';
	/**
	 * Constant for value 'ChargeoffSuspended'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeoffSuspended'
	 */
	const VALUE_CHARGEOFFSUSPENDED = 'ChargeoffSuspended';
	/**
	 * Constant for value 'ChargeoffDeceased'
	 * Meta informations :
	 * 	- documentation : (out) A writeoff of the account charge by eBay because the seller is deceased.
	 * @return string 'ChargeoffDeceased'
	 */
	const VALUE_CHARGEOFFDECEASED = 'ChargeoffDeceased';
	/**
	 * Constant for value 'ChargeoffOther'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeoffOther'
	 */
	const VALUE_CHARGEOFFOTHER = 'ChargeoffOther';
	/**
	 * Constant for value 'ChargeoffWacko'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeoffWacko'
	 */
	const VALUE_CHARGEOFFWACKO = 'ChargeoffWacko';
	/**
	 * Constant for value 'FinanceChargeReversal'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of a finance charge, made by eBay. The finance charge is added if the seller does not pay the monthly account balance on time.
	 * @return string 'FinanceChargeReversal'
	 */
	const VALUE_FINANCECHARGEREVERSAL = 'FinanceChargeReversal';
	/**
	 * Constant for value 'FVFCreditReversal'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of a Final Value Fee credit, resulting in the fee being charged to the seller. The Final Value Fee can be credited as a result of an Unpaid Item Dispute. If the buyer later pays, the seller can request a reversal.
	 * @return string 'FVFCreditReversal'
	 */
	const VALUE_FVFCREDITREVERSAL = 'FVFCreditReversal';
	/**
	 * Constant for value 'ForeignFundsConvert'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for currency conversion.
	 * @return string 'ForeignFundsConvert'
	 */
	const VALUE_FOREIGNFUNDSCONVERT = 'ForeignFundsConvert';
	/**
	 * Constant for value 'ForeignFundsCheckReversal'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ForeignFundsCheckReversal'
	 */
	const VALUE_FOREIGNFUNDSCHECKREVERSAL = 'ForeignFundsCheckReversal';
	/**
	 * Constant for value 'EOMRestriction'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'EOMRestriction'
	 */
	const VALUE_EOMRESTRICTION = 'EOMRestriction';
	/**
	 * Constant for value 'AllFeesCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AllFeesCredit'
	 */
	const VALUE_ALLFEESCREDIT = 'AllFeesCredit';
	/**
	 * Constant for value 'SetOnHold'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'SetOnHold'
	 */
	const VALUE_SETONHOLD = 'SetOnHold';
	/**
	 * Constant for value 'RevertUserState'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'RevertUserState'
	 */
	const VALUE_REVERTUSERSTATE = 'RevertUserState';
	/**
	 * Constant for value 'DirectDebitOnFile'
	 * Meta informations :
	 * 	- documentation : (out) A monthly payment made by automatic direct debit to the seller's checking account, when the account information is on file.
	 * @return string 'DirectDebitOnFile'
	 */
	const VALUE_DIRECTDEBITONFILE = 'DirectDebitOnFile';
	/**
	 * Constant for value 'DirectDebitNotOnFile'
	 * Meta informations :
	 * 	- documentation : (out) A one-time payment made by direct debit to the seller's checking account, when the account information is not on file, but is provided for this payment.
	 * @return string 'DirectDebitNotOnFile'
	 */
	const VALUE_DIRECTDEBITNOTONFILE = 'DirectDebitNotOnFile';
	/**
	 * Constant for value 'PaymentDirectDebit'
	 * Meta informations :
	 * 	- documentation : (out) A payment made by direct debit from the seller's checking account when the seller has requested automatic monthly invoice payments.
	 * @return string 'PaymentDirectDebit'
	 */
	const VALUE_PAYMENTDIRECTDEBIT = 'PaymentDirectDebit';
	/**
	 * Constant for value 'DirectDebitReversal'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of a payment made by direct debit from the seller's checking account.
	 * @return string 'DirectDebitReversal'
	 */
	const VALUE_DIRECTDEBITREVERSAL = 'DirectDebitReversal';
	/**
	 * Constant for value 'DirectDebitReturnedItem'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of a payment made by direct debit from a seller's checking account when an item is returned by the buyer.
	 * @return string 'DirectDebitReturnedItem'
	 */
	const VALUE_DIRECTDEBITRETURNEDITEM = 'DirectDebitReturnedItem';
	/**
	 * Constant for value 'FeeHighlight'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for adding a colored band to emphasize a listing.
	 * @return string 'FeeHighlight'
	 */
	const VALUE_FEEHIGHLIGHT = 'FeeHighlight';
	/**
	 * Constant for value 'CreditHighlight'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for a highlight fee on an item's listing.
	 * @return string 'CreditHighlight'
	 */
	const VALUE_CREDITHIGHLIGHT = 'CreditHighlight';
	/**
	 * Constant for value 'BulkUserSuspension'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'BulkUserSuspension'
	 */
	const VALUE_BULKUSERSUSPENSION = 'BulkUserSuspension';
	/**
	 * Constant for value 'FeeRealEstate30DaysListing'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a 30-day real estate listing.
	 * @return string 'FeeRealEstate30DaysListing'
	 */
	const VALUE_FEEREALESTATE30DAYSLISTING = 'FeeRealEstate30DaysListing';
	/**
	 * Constant for value 'CreditRealEstate30DaysListing'
	 * Meta informations :
	 * 	- documentation : (out) A credit for a 30-day real estate listing.
	 * @return string 'CreditRealEstate30DaysListing'
	 */
	const VALUE_CREDITREALESTATE30DAYSLISTING = 'CreditRealEstate30DaysListing';
	/**
	 * Constant for value 'TradingLimitOverrideOn'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'TradingLimitOverrideOn'
	 */
	const VALUE_TRADINGLIMITOVERRIDEON = 'TradingLimitOverrideOn';
	/**
	 * Constant for value 'TradingLimitOverrideOff'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'TradingLimitOverrideOff'
	 */
	const VALUE_TRADINGLIMITOVERRIDEOFF = 'TradingLimitOverrideOff';
	/**
	 * Constant for value 'EquifaxRealtimeFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged to sellers who do not provide a credit card or checking account number to verify identify.
	 * @return string 'EquifaxRealtimeFee'
	 */
	const VALUE_EQUIFAXREALTIMEFEE = 'EquifaxRealtimeFee';
	/**
	 * Constant for value 'CreditEquifaxRealtimeFee'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for an EquifaxRealtimeFee.
	 * @return string 'CreditEquifaxRealtimeFee'
	 */
	const VALUE_CREDITEQUIFAXREALTIMEFEE = 'CreditEquifaxRealtimeFee';
	/**
	 * Constant for value 'PaymentEquifaxDebit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaymentEquifaxDebit'
	 */
	const VALUE_PAYMENTEQUIFAXDEBIT = 'PaymentEquifaxDebit';
	/**
	 * Constant for value 'PaymentEquifaxCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaymentEquifaxCredit'
	 */
	const VALUE_PAYMENTEQUIFAXCREDIT = 'PaymentEquifaxCredit';
	/**
	 * Constant for value 'Merged'
	 * Meta informations :
	 * 	- documentation : (out) Two accounts with the same owner but different user IDs have been merged into one.
	 * @return string 'Merged'
	 */
	const VALUE_MERGED = 'Merged';
	/**
	 * Constant for value 'AutoTraderOn'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AutoTraderOn'
	 */
	const VALUE_AUTOTRADERON = 'AutoTraderOn';
	/**
	 * Constant for value 'AutoTraderOff'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AutoTraderOff'
	 */
	const VALUE_AUTOTRADEROFF = 'AutoTraderOff';
	/**
	 * Constant for value 'PaperInvoiceOn'
	 * Meta informations :
	 * 	- documentation : (out) The option to send the seller paper invoices has been turned on.
	 * @return string 'PaperInvoiceOn'
	 */
	const VALUE_PAPERINVOICEON = 'PaperInvoiceOn';
	/**
	 * Constant for value 'PaperInvoiceOff'
	 * Meta informations :
	 * 	- documentation : (out) The option to send the seller paper invoices has been turned off.
	 * @return string 'PaperInvoiceOff'
	 */
	const VALUE_PAPERINVOICEOFF = 'PaperInvoiceOff';
	/**
	 * Constant for value 'AccountStateSwitch'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AccountStateSwitch'
	 */
	const VALUE_ACCOUNTSTATESWITCH = 'AccountStateSwitch';
	/**
	 * Constant for value 'FVFCreditReversalAutomatic'
	 * Meta informations :
	 * 	- documentation : (out) An automatic reversal of a Final Value Fee credit.
	 * @return string 'FVFCreditReversalAutomatic'
	 */
	const VALUE_FVFCREDITREVERSALAUTOMATIC = 'FVFCreditReversalAutomatic';
	/**
	 * Constant for value 'CreditSoftOutage'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay when a title search outage of one hour or longer occurs on the site.
	 * @return string 'CreditSoftOutage'
	 */
	const VALUE_CREDITSOFTOUTAGE = 'CreditSoftOutage';
	/**
	 * Constant for value 'LACatalogFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for listing a lot (one or more items) in a Live Auction catalog.
	 * @return string 'LACatalogFee'
	 */
	const VALUE_LACATALOGFEE = 'LACatalogFee';
	/**
	 * Constant for value 'LAExtraItem'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for listing an extra item in a Live Auction.
	 * @return string 'LAExtraItem'
	 */
	const VALUE_LAEXTRAITEM = 'LAExtraItem';
	/**
	 * Constant for value 'LACatalogItemFeeRefund'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'LACatalogItemFeeRefund'
	 */
	const VALUE_LACATALOGITEMFEEREFUND = 'LACatalogItemFeeRefund';
	/**
	 * Constant for value 'LACatalogInsertionRefund'
	 * Meta informations :
	 * 	- documentation : (out) A credit for listing an item in a Live Auction catalog.
	 * @return string 'LACatalogInsertionRefund'
	 */
	const VALUE_LACATALOGINSERTIONREFUND = 'LACatalogInsertionRefund';
	/**
	 * Constant for value 'LAFinalValueFee'
	 * Meta informations :
	 * 	- documentation : (out) A Final Value Fee charged by eBay when a lot listed on a Live Auction is sold.
	 * @return string 'LAFinalValueFee'
	 */
	const VALUE_LAFINALVALUEFEE = 'LAFinalValueFee';
	/**
	 * Constant for value 'LAFinalValueFeeRefund'
	 * Meta informations :
	 * 	- documentation : (out) A refund of a Final Value Fee that was charged when a Live Auction lot was sold.
	 * @return string 'LAFinalValueFeeRefund'
	 */
	const VALUE_LAFINALVALUEFEEREFUND = 'LAFinalValueFeeRefund';
	/**
	 * Constant for value 'LABuyerPremiumPercentageFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee paid by the buyer to the auction house for a purchase in a Live Auction.
	 * @return string 'LABuyerPremiumPercentageFee'
	 */
	const VALUE_LABUYERPREMIUMPERCENTAGEFEE = 'LABuyerPremiumPercentageFee';
	/**
	 * Constant for value 'LABuyerPremiumPercentageFeeRefund'
	 * Meta informations :
	 * 	- documentation : (out) A refund of the fee paid by a buyer to the auction house for a purchase in a Live Auction.
	 * @return string 'LABuyerPremiumPercentageFeeRefund'
	 */
	const VALUE_LABUYERPREMIUMPERCENTAGEFEEREFUND = 'LABuyerPremiumPercentageFeeRefund';
	/**
	 * Constant for value 'LAAudioVideoFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for audio or video services provided during the sale of lots at a Live Auction.
	 * @return string 'LAAudioVideoFee'
	 */
	const VALUE_LAAUDIOVIDEOFEE = 'LAAudioVideoFee';
	/**
	 * Constant for value 'LAAudioVideoFeeRefund'
	 * Meta informations :
	 * 	- documentation : (out) A refund for audio or video services provided at a Live Auction.
	 * @return string 'LAAudioVideoFeeRefund'
	 */
	const VALUE_LAAUDIOVIDEOFEEREFUND = 'LAAudioVideoFeeRefund';
	/**
	 * Constant for value 'FeeIPIXPhoto'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a panoramic 360-degree photo in a listing.
	 * @return string 'FeeIPIXPhoto'
	 */
	const VALUE_FEEIPIXPHOTO = 'FeeIPIXPhoto';
	/**
	 * Constant for value 'FeeIPIXSlideShow'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a slide show of panoramic 360-degree photos.
	 * @return string 'FeeIPIXSlideShow'
	 */
	const VALUE_FEEIPIXSLIDESHOW = 'FeeIPIXSlideShow';
	/**
	 * Constant for value 'CreditIPIXPhoto'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted to reverse an IPIX photo fee.
	 * @return string 'CreditIPIXPhoto'
	 */
	const VALUE_CREDITIPIXPHOTO = 'CreditIPIXPhoto';
	/**
	 * Constant for value 'CreditIPIXSlideShow'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted to reverse an IPIX slideshow fee.
	 * @return string 'CreditIPIXSlideShow'
	 */
	const VALUE_CREDITIPIXSLIDESHOW = 'CreditIPIXSlideShow';
	/**
	 * Constant for value 'FeeTenDayAuction'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for listing an item for 10 days, rather than one, three, five, or seven days.
	 * @return string 'FeeTenDayAuction'
	 */
	const VALUE_FEETENDAYAUCTION = 'FeeTenDayAuction';
	/**
	 * Constant for value 'CreditTenDayAuction'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted to reverse a 10-day auction fee.
	 * @return string 'CreditTenDayAuction'
	 */
	const VALUE_CREDITTENDAYAUCTION = 'CreditTenDayAuction';
	/**
	 * Constant for value 'TemporaryCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'TemporaryCredit'
	 */
	const VALUE_TEMPORARYCREDIT = 'TemporaryCredit';
	/**
	 * Constant for value 'TemporaryCreditReversal'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'TemporaryCreditReversal'
	 */
	const VALUE_TEMPORARYCREDITREVERSAL = 'TemporaryCreditReversal';
	/**
	 * Constant for value 'SubscriptionAABasic'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a subscription to Auction Assistant Basic.
	 * @return string 'SubscriptionAABasic'
	 */
	const VALUE_SUBSCRIPTIONAABASIC = 'SubscriptionAABasic';
	/**
	 * Constant for value 'SubscriptionAAPro'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a subscription to Auction Assistant Pro.
	 * @return string 'SubscriptionAAPro'
	 */
	const VALUE_SUBSCRIPTIONAAPRO = 'SubscriptionAAPro';
	/**
	 * Constant for value 'CreditAABasic'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a subscription fee charged for Auction Assistant Basic.
	 * @return string 'CreditAABasic'
	 */
	const VALUE_CREDITAABASIC = 'CreditAABasic';
	/**
	 * Constant for value 'CreditAAPro'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a subscription fee charged for Auction Assistant Pro.
	 * @return string 'CreditAAPro'
	 */
	const VALUE_CREDITAAPRO = 'CreditAAPro';
	/**
	 * Constant for value 'FeeLargePicture'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for a supersized picture in a listing.
	 * @return string 'FeeLargePicture'
	 */
	const VALUE_FEELARGEPICTURE = 'FeeLargePicture';
	/**
	 * Constant for value 'CreditLargePicture'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for a supersized picture.
	 * @return string 'CreditLargePicture'
	 */
	const VALUE_CREDITLARGEPICTURE = 'CreditLargePicture';
	/**
	 * Constant for value 'FeePicturePack'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for the Picture Pack feature. The fee differs according to the number of pictures you use. See the online help for details.
	 * @return string 'FeePicturePack'
	 */
	const VALUE_FEEPICTUREPACK = 'FeePicturePack';
	/**
	 * Constant for value 'CreditPicturePackPartial'
	 * Meta informations :
	 * 	- documentation : (out) A partial credit issued by eBay for the Picture Pack fee.
	 * @return string 'CreditPicturePackPartial'
	 */
	const VALUE_CREDITPICTUREPACKPARTIAL = 'CreditPicturePackPartial';
	/**
	 * Constant for value 'CreditPicturePackFull'
	 * Meta informations :
	 * 	- documentation : (out) A full credit issued by eBay for the Picture Pack fee.
	 * @return string 'CreditPicturePackFull'
	 */
	const VALUE_CREDITPICTUREPACKFULL = 'CreditPicturePackFull';
	/**
	 * Constant for value 'SubscriptioneBayStores'
	 * Meta informations :
	 * 	- documentation : (out) A monthly subscription fee charged for an eBay Store. The fee can be Basic, Featured, or Anchor.
	 * @return string 'SubscriptioneBayStores'
	 */
	const VALUE_SUBSCRIPTIONEBAYSTORES = 'SubscriptioneBayStores';
	/**
	 * Constant for value 'CrediteBayStores'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the monthly fee charged for an eBay store.
	 * @return string 'CrediteBayStores'
	 */
	const VALUE_CREDITEBAYSTORES = 'CrediteBayStores';
	/**
	 * Constant for value 'FeeInsertionFixedPrice'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged by eBay for listing a Fixed Price item.
	 * @return string 'FeeInsertionFixedPrice'
	 */
	const VALUE_FEEINSERTIONFIXEDPRICE = 'FeeInsertionFixedPrice';
	/**
	 * Constant for value 'CreditInsertionFixedPrice'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for listing a Fixed Price item.
	 * @return string 'CreditInsertionFixedPrice'
	 */
	const VALUE_CREDITINSERTIONFIXEDPRICE = 'CreditInsertionFixedPrice';
	/**
	 * Constant for value 'FeeFinalValueFixedPrice'
	 * Meta informations :
	 * 	- documentation : (out) The Final Value Fee credit charged by eBay when a fixed price item sells.
	 * @return string 'FeeFinalValueFixedPrice'
	 */
	const VALUE_FEEFINALVALUEFIXEDPRICE = 'FeeFinalValueFixedPrice';
	/**
	 * Constant for value 'CreditFinalValueFixedPrice'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the Final Value Fee for a fixed price item.
	 * @return string 'CreditFinalValueFixedPrice'
	 */
	const VALUE_CREDITFINALVALUEFIXEDPRICE = 'CreditFinalValueFixedPrice';
	/**
	 * Constant for value 'ElectronicInvoiceOn'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ElectronicInvoiceOn'
	 */
	const VALUE_ELECTRONICINVOICEON = 'ElectronicInvoiceOn';
	/**
	 * Constant for value 'ElectronicInvoiceOff'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ElectronicInvoiceOff'
	 */
	const VALUE_ELECTRONICINVOICEOFF = 'ElectronicInvoiceOff';
	/**
	 * Constant for value 'FlagDDDDPending'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'FlagDDDDPending'
	 */
	const VALUE_FLAGDDDDPENDING = 'FlagDDDDPending';
	/**
	 * Constant for value 'FlagDDPaymentConfirmed'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'FlagDDPaymentConfirmed'
	 */
	const VALUE_FLAGDDPAYMENTCONFIRMED = 'FlagDDPaymentConfirmed';
	/**
	 * Constant for value 'FixedPriceDurationFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged by eBay for creating a Fixed Price listing with a 10-day duration. Fixed Price listings of 1, 3, 5, and 7 days are not charged this fee.
	 * @return string 'FixedPriceDurationFee'
	 */
	const VALUE_FIXEDPRICEDURATIONFEE = 'FixedPriceDurationFee';
	/**
	 * Constant for value 'FixedPriceDurationCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for a Fixed Price listing with a 10-day duration.
	 * @return string 'FixedPriceDurationCredit'
	 */
	const VALUE_FIXEDPRICEDURATIONCREDIT = 'FixedPriceDurationCredit';
	/**
	 * Constant for value 'BuyItNowFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for listing a Buy It Now item.
	 * @return string 'BuyItNowFee'
	 */
	const VALUE_BUYITNOWFEE = 'BuyItNowFee';
	/**
	 * Constant for value 'BuyItNowCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for the fee charged for a Buy It Now listing.
	 * @return string 'BuyItNowCredit'
	 */
	const VALUE_BUYITNOWCREDIT = 'BuyItNowCredit';
	/**
	 * Constant for value 'FeeSchedule'
	 * Meta informations :
	 * 	- documentation : (out) A fee for scheduling a listing to start at some later time, up to 3 weeks after the listing is created.
	 * @return string 'FeeSchedule'
	 */
	const VALUE_FEESCHEDULE = 'FeeSchedule';
	/**
	 * Constant for value 'CreditSchedule'
	 * Meta informations :
	 * 	- documentation : (out) A credit made by eBay for the fee charged for scheduling a listing to start after the listing is created.
	 * @return string 'CreditSchedule'
	 */
	const VALUE_CREDITSCHEDULE = 'CreditSchedule';
	/**
	 * Constant for value 'SubscriptionSMBasic'
	 * Meta informations :
	 * 	- documentation : (out) The monthly subscription fee charged for Selling Manager Basic. The monthly charge is billed in advance.
	 * @return string 'SubscriptionSMBasic'
	 */
	const VALUE_SUBSCRIPTIONSMBASIC = 'SubscriptionSMBasic';
	/**
	 * Constant for value 'SubscriptionSMBasicPro'
	 * Meta informations :
	 * 	- documentation : (out) The monthly subscription fee charged for Selling Manager Pro. The monthly charge is billed in advance.
	 * @return string 'SubscriptionSMBasicPro'
	 */
	const VALUE_SUBSCRIPTIONSMBASICPRO = 'SubscriptionSMBasicPro';
	/**
	 * Constant for value 'CreditSMBasic'
	 * Meta informations :
	 * 	- documentation : (out) A one-time credit for a free one-month trial of Selling Manager Basic.
	 * @return string 'CreditSMBasic'
	 */
	const VALUE_CREDITSMBASIC = 'CreditSMBasic';
	/**
	 * Constant for value 'CreditSMBasicPro'
	 * Meta informations :
	 * 	- documentation : (out) A one-time credit for a free one-month trial of Selling Manager Pro.
	 * @return string 'CreditSMBasicPro'
	 */
	const VALUE_CREDITSMBASICPRO = 'CreditSMBasicPro';
	/**
	 * Constant for value 'StoresGTCFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged for a Good-Til-Cancelled listing in an eBay Store. The charge is made once each 30 days, until the listing ends.
	 * @return string 'StoresGTCFee'
	 */
	const VALUE_STORESGTCFEE = 'StoresGTCFee';
	/**
	 * Constant for value 'StoresGTCCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit for the fee charged for a Good-Til-Cancelled listing in an eBay Store.
	 * @return string 'StoresGTCCredit'
	 */
	const VALUE_STORESGTCCREDIT = 'StoresGTCCredit';
	/**
	 * Constant for value 'ListingDesignerFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged for using a Listing Designer theme and layout template for a listing. The fee is displayed to the seller during the listing process.
	 * @return string 'ListingDesignerFee'
	 */
	const VALUE_LISTINGDESIGNERFEE = 'ListingDesignerFee';
	/**
	 * Constant for value 'ListingDesignerCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for a Listing Designer fee.
	 * @return string 'ListingDesignerCredit'
	 */
	const VALUE_LISTINGDESIGNERCREDIT = 'ListingDesignerCredit';
	/**
	 * Constant for value 'ExtendedAuctionFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged for listing an auction item for 10 days.
	 * @return string 'ExtendedAuctionFee'
	 */
	const VALUE_EXTENDEDAUCTIONFEE = 'ExtendedAuctionFee';
	/**
	 * Constant for value 'ExtendedAcutionCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit for the fee charged for listing an auction item for 10 days.
	 * @return string 'ExtendedAcutionCredit'
	 */
	const VALUE_EXTENDEDACUTIONCREDIT = 'ExtendedAcutionCredit';
	/**
	 * Constant for value 'PayPalOTPSucc'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PayPalOTPSucc'
	 */
	const VALUE_PAYPALOTPSUCC = 'PayPalOTPSucc';
	/**
	 * Constant for value 'PayPalOTPPend'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PayPalOTPPend'
	 */
	const VALUE_PAYPALOTPPEND = 'PayPalOTPPend';
	/**
	 * Constant for value 'PayPalFailed'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PayPalFailed'
	 */
	const VALUE_PAYPALFAILED = 'PayPalFailed';
	/**
	 * Constant for value 'PayPalChargeBack'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PayPalChargeBack'
	 */
	const VALUE_PAYPALCHARGEBACK = 'PayPalChargeBack';
	/**
	 * Constant for value 'ChargeBack'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeBack'
	 */
	const VALUE_CHARGEBACK = 'ChargeBack';
	/**
	 * Constant for value 'ChargeBackReversal'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'ChargeBackReversal'
	 */
	const VALUE_CHARGEBACKREVERSAL = 'ChargeBackReversal';
	/**
	 * Constant for value 'PayPalRefund'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PayPalRefund'
	 */
	const VALUE_PAYPALREFUND = 'PayPalRefund';
	/**
	 * Constant for value 'BonusPointsAddition'
	 * Meta informations :
	 * 	- documentation : (out) An addition to the seller's eBay Anything Points account. Each point is equivalent to $0.01.
	 * @return string 'BonusPointsAddition'
	 */
	const VALUE_BONUSPOINTSADDITION = 'BonusPointsAddition';
	/**
	 * Constant for value 'BonusPointsReduction'
	 * Meta informations :
	 * 	- documentation : (out) A reduction to the seller's eBay Anything Points account. Each point is equivalent to $0.01.
	 * @return string 'BonusPointsReduction'
	 */
	const VALUE_BONUSPOINTSREDUCTION = 'BonusPointsReduction';
	/**
	 * Constant for value 'BonusPointsPaymentAutomatic'
	 * Meta informations :
	 * 	- documentation : (out) An automatic payment of seller fees from the seller's eBay Anything Points account.
	 * @return string 'BonusPointsPaymentAutomatic'
	 */
	const VALUE_BONUSPOINTSPAYMENTAUTOMATIC = 'BonusPointsPaymentAutomatic';
	/**
	 * Constant for value 'BonusPointsPaymentManual'
	 * Meta informations :
	 * 	- documentation : (out) A one-time payment of seller fees from the seller's eBay Anything Points account.
	 * @return string 'BonusPointsPaymentManual'
	 */
	const VALUE_BONUSPOINTSPAYMENTMANUAL = 'BonusPointsPaymentManual';
	/**
	 * Constant for value 'BonusPointsPaymentReversal'
	 * Meta informations :
	 * 	- documentation : (out) A reversal of a seller fee payment made from the seller's eBay Anything Points account.
	 * @return string 'BonusPointsPaymentReversal'
	 */
	const VALUE_BONUSPOINTSPAYMENTREVERSAL = 'BonusPointsPaymentReversal';
	/**
	 * Constant for value 'BonusPointsCashPayout'
	 * Meta informations :
	 * 	- documentation : (out) A cash payment made from the seller's eBay Anything Points account and credited to the seller's account.
	 * @return string 'BonusPointsCashPayout'
	 */
	const VALUE_BONUSPOINTSCASHPAYOUT = 'BonusPointsCashPayout';
	/**
	 * Constant for value 'VATCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit (return) to your account of Value-Added Tax previously paid.
	 * @return string 'VATCredit'
	 */
	const VALUE_VATCREDIT = 'VATCredit';
	/**
	 * Constant for value 'VATDebit'
	 * Meta informations :
	 * 	- documentation : (out) A debit to your account for a Value-Added Tax charge.
	 * @return string 'VATDebit'
	 */
	const VALUE_VATDEBIT = 'VATDebit';
	/**
	 * Constant for value 'VATStatusChangePending'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'VATStatusChangePending'
	 */
	const VALUE_VATSTATUSCHANGEPENDING = 'VATStatusChangePending';
	/**
	 * Constant for value 'VATStatusChangeApproved'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'VATStatusChangeApproved'
	 */
	const VALUE_VATSTATUSCHANGEAPPROVED = 'VATStatusChangeApproved';
	/**
	 * Constant for value 'VATStatusChange_Denied'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'VATStatusChange_Denied'
	 */
	const VALUE_VATSTATUSCHANGE_DENIED = 'VATStatusChange_Denied';
	/**
	 * Constant for value 'VATStatusDeletedByCSR'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'VATStatusDeletedByCSR'
	 */
	const VALUE_VATSTATUSDELETEDBYCSR = 'VATStatusDeletedByCSR';
	/**
	 * Constant for value 'VATStatusDeletedByUser'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'VATStatusDeletedByUser'
	 */
	const VALUE_VATSTATUSDELETEDBYUSER = 'VATStatusDeletedByUser';
	/**
	 * Constant for value 'SMProListingDesignerFee'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'SMProListingDesignerFee'
	 */
	const VALUE_SMPROLISTINGDESIGNERFEE = 'SMProListingDesignerFee';
	/**
	 * Constant for value 'SMProListingDesignerCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'SMProListingDesignerCredit'
	 */
	const VALUE_SMPROLISTINGDESIGNERCREDIT = 'SMProListingDesignerCredit';
	/**
	 * Constant for value 'StoresSuccessfulListingFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for the difference between an eBay Store inventory listing fee and an auction listing fee if a Store inventory item sells.
	 * @return string 'StoresSuccessfulListingFee'
	 */
	const VALUE_STORESSUCCESSFULLISTINGFEE = 'StoresSuccessfulListingFee';
	/**
	 * Constant for value 'StoresSuccessfulListingFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit for a StoresSuccessfulListingFee.
	 * @return string 'StoresSuccessfulListingFeeCredit'
	 */
	const VALUE_STORESSUCCESSFULLISTINGFEECREDIT = 'StoresSuccessfulListingFeeCredit';
	/**
	 * Constant for value 'StoresReferralFee'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'StoresReferralFee'
	 */
	const VALUE_STORESREFERRALFEE = 'StoresReferralFee';
	/**
	 * Constant for value 'StoresReferralCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit posted to a seller's account for sale of Stores Inventory items by buyers referred to the seller's Store by printed materials and emails outside eBay.
	 * @return string 'StoresReferralCredit'
	 */
	const VALUE_STORESREFERRALCREDIT = 'StoresReferralCredit';
	/**
	 * Constant for value 'SubtitleFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged for adding a subtitle to a listing. The subtitle adds information to the title.
	 * @return string 'SubtitleFee'
	 */
	const VALUE_SUBTITLEFEE = 'SubtitleFee';
	/**
	 * Constant for value 'SubtitleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit of the fee charged for adding a subtitle to a listing.
	 * @return string 'SubtitleFeeCredit'
	 */
	const VALUE_SUBTITLEFEECREDIT = 'SubtitleFeeCredit';
	/**
	 * Constant for value 'eBayStoreInventorySubscriptionCredit'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'eBayStoreInventorySubscriptionCredit'
	 */
	const VALUE_EBAYSTOREINVENTORYSUBSCRIPTIONCREDIT = 'eBayStoreInventorySubscriptionCredit';
	/**
	 * Constant for value 'AutoPmntReqExempt'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AutoPmntReqExempt'
	 */
	const VALUE_AUTOPMNTREQEXEMPT = 'AutoPmntReqExempt';
	/**
	 * Constant for value 'AutoPmntReqRein'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'AutoPmntReqRein'
	 */
	const VALUE_AUTOPMNTREQREIN = 'AutoPmntReqRein';
	/**
	 * Constant for value 'PictureManagerSubscriptionFee'
	 * Meta informations :
	 * 	- documentation : (out) The monthly fee charged for subscribing to Picture Manager. The fee varies according to the level of subscription.
	 * @return string 'PictureManagerSubscriptionFee'
	 */
	const VALUE_PICTUREMANAGERSUBSCRIPTIONFEE = 'PictureManagerSubscriptionFee';
	/**
	 * Constant for value 'PictureManagerSubscriptionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a Picture Manageer subscription fee.
	 * @return string 'PictureManagerSubscriptionFeeCredit'
	 */
	const VALUE_PICTUREMANAGERSUBSCRIPTIONFEECREDIT = 'PictureManagerSubscriptionFeeCredit';
	/**
	 * Constant for value 'SellerReportsBasicFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a basic subscription to Seller Reports.
	 * @return string 'SellerReportsBasicFee'
	 */
	const VALUE_SELLERREPORTSBASICFEE = 'SellerReportsBasicFee';
	/**
	 * Constant for value 'SellerReportsBasicCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a basic subscription to Seller Reports.
	 * @return string 'SellerReportsBasicCredit'
	 */
	const VALUE_SELLERREPORTSBASICCREDIT = 'SellerReportsBasicCredit';
	/**
	 * Constant for value 'SellerReportsPlusFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for a subscription to Seller Reports Plus.
	 * @return string 'SellerReportsPlusFee'
	 */
	const VALUE_SELLERREPORTSPLUSFEE = 'SellerReportsPlusFee';
	/**
	 * Constant for value 'SellerReportsPlusCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a subscription to Seller Reports Plus.
	 * @return string 'SellerReportsPlusCredit'
	 */
	const VALUE_SELLERREPORTSPLUSCREDIT = 'SellerReportsPlusCredit';
	/**
	 * Constant for value 'PaypalOnFile'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaypalOnFile'
	 */
	const VALUE_PAYPALONFILE = 'PaypalOnFile';
	/**
	 * Constant for value 'PaypalOnFileByCSR'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaypalOnFileByCSR'
	 */
	const VALUE_PAYPALONFILEBYCSR = 'PaypalOnFileByCSR';
	/**
	 * Constant for value 'PaypalOffFile'
	 * Meta informations :
	 * 	- documentation : (out)
	 * @return string 'PaypalOffFile'
	 */
	const VALUE_PAYPALOFFFILE = 'PaypalOffFile';
	/**
	 * Constant for value 'BorderFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee for adding a border that outlines a listing with a frame.
	 * @return string 'BorderFee'
	 */
	const VALUE_BORDERFEE = 'BorderFee';
	/**
	 * Constant for value 'BorderFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit for the border fee charged for a listing.
	 * @return string 'BorderFeeCredit'
	 */
	const VALUE_BORDERFEECREDIT = 'BorderFeeCredit';
	/**
	 * Constant for value 'FeeSearchableMobileDE'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged to a seller for upgrading a listing from eBay Germany's Car, Motorcycle, and Special Vehicle categories so that it is also searchable on the mobile.de classifieds site.
	 * @return string 'FeeSearchableMobileDE'
	 */
	const VALUE_FEESEARCHABLEMOBILEDE = 'FeeSearchableMobileDE';
	/**
	 * Constant for value 'SalesReportsPlusFee'
	 * Meta informations :
	 * 	- documentation : (out) A monthly subscription fee charged for Sales Reports Plus.
	 * @return string 'SalesReportsPlusFee'
	 */
	const VALUE_SALESREPORTSPLUSFEE = 'SalesReportsPlusFee';
	/**
	 * Constant for value 'SalesReportsPlusCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a Sales Reports Plus monthly subscription fee.
	 * @return string 'SalesReportsPlusCredit'
	 */
	const VALUE_SALESREPORTSPLUSCREDIT = 'SalesReportsPlusCredit';
	/**
	 * Constant for value 'CreditSearchableMobileDE'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for upgrading a listing to make it searchable on the mobile.de platform.
	 * @return string 'CreditSearchableMobileDE'
	 */
	const VALUE_CREDITSEARCHABLEMOBILEDE = 'CreditSearchableMobileDE';
	/**
	 * Constant for value 'EmailMarketingFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged to owners of eBay Stores who have a sent a marketing email to buyers, for the number of email recipients over the Store's monthly free allocation. The monthly allocation varies according to the type of Store.
	 * @return string 'EmailMarketingFee'
	 */
	const VALUE_EMAILMARKETINGFEE = 'EmailMarketingFee';
	/**
	 * Constant for value 'EmailMarketingCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for an email marketing fee.
	 * @return string 'EmailMarketingCredit'
	 */
	const VALUE_EMAILMARKETINGCREDIT = 'EmailMarketingCredit';
	/**
	 * Constant for value 'FeePictureShow'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for the Picture Show service, which lets buyers browse or see a slide show of 2 or more pictures at the top of the item page.
	 * @return string 'FeePictureShow'
	 */
	const VALUE_FEEPICTURESHOW = 'FeePictureShow';
	/**
	 * Constant for value 'CreditPictureShow'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted for a Picture Show fee.
	 * @return string 'CreditPictureShow'
	 */
	const VALUE_CREDITPICTURESHOW = 'CreditPictureShow';
	/**
	 * Constant for value 'ProPackBundleFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for the ProPackBundle feature pack (currently available to US and Canada eBay motor vehicle sellers).
	 * @return string 'ProPackBundleFee'
	 */
	const VALUE_PROPACKBUNDLEFEE = 'ProPackBundleFee';
	/**
	 * Constant for value 'ProPackBundleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay for the ProPackBundle feature pack (currently available to US and Canada eBay motor vehicle sellers).
	 * @return string 'ProPackBundleFeeCredit'
	 */
	const VALUE_PROPACKBUNDLEFEECREDIT = 'ProPackBundleFeeCredit';
	/**
	 * Constant for value 'BasicUpgradePackBundleFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for the BasicUpgradePackBundle feature pack. No longer applicable to any sites (but formerly applicable to the Australia site, site ID 15).
	 * @return string 'BasicUpgradePackBundleFee'
	 */
	const VALUE_BASICUPGRADEPACKBUNDLEFEE = 'BasicUpgradePackBundleFee';
	/**
	 * Constant for value 'BasicUpgradePackBundleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay for the BasicUpgradePackBundle feature pack. No longer applicable to any sites (but formerly applicable to the Australia site, site ID 15).
	 * @return string 'BasicUpgradePackBundleFeeCredit'
	 */
	const VALUE_BASICUPGRADEPACKBUNDLEFEECREDIT = 'BasicUpgradePackBundleFeeCredit';
	/**
	 * Constant for value 'ValuePackBundleFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for the ValuePackBundle feature pack.
	 * @return string 'ValuePackBundleFee'
	 */
	const VALUE_VALUEPACKBUNDLEFEE = 'ValuePackBundleFee';
	/**
	 * Constant for value 'ValuePackBundleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay for the ValuePackBundle feature pack.
	 * @return string 'ValuePackBundleFeeCredit'
	 */
	const VALUE_VALUEPACKBUNDLEFEECREDIT = 'ValuePackBundleFeeCredit';
	/**
	 * Constant for value 'ProPackPlusBundleFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for the ProPackPlusBundle feature pack.
	 * @return string 'ProPackPlusBundleFee'
	 */
	const VALUE_PROPACKPLUSBUNDLEFEE = 'ProPackPlusBundleFee';
	/**
	 * Constant for value 'ProPackPlusBundleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay for the ProPackPlusBundle feature pack.
	 * @return string 'ProPackPlusBundleFeeCredit'
	 */
	const VALUE_PROPACKPLUSBUNDLEFEECREDIT = 'ProPackPlusBundleFeeCredit';
	/**
	 * Constant for value 'FinalEntry'
	 * Meta informations :
	 * 	- documentation : (out) The final entry in an account before it is closed or merged with another account.
	 * @return string 'FinalEntry'
	 */
	const VALUE_FINALENTRY = 'FinalEntry';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'ExtendedDurationFee'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged for extended listing duration.
	 * @return string 'ExtendedDurationFee'
	 */
	const VALUE_EXTENDEDDURATIONFEE = 'ExtendedDurationFee';
	/**
	 * Constant for value 'ExtendedDurationFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit granted by eBay for extended listing duration.
	 * @return string 'ExtendedDurationFeeCredit'
	 */
	const VALUE_EXTENDEDDURATIONFEECREDIT = 'ExtendedDurationFeeCredit';
	/**
	 * Constant for value 'InternationalListingFee'
	 * Meta informations :
	 * 	- documentation : (out) The fee for an international listing.
	 * @return string 'InternationalListingFee'
	 */
	const VALUE_INTERNATIONALLISTINGFEE = 'InternationalListingFee';
	/**
	 * Constant for value 'InternationalListingCredit'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay for an international listing.
	 * @return string 'InternationalListingCredit'
	 */
	const VALUE_INTERNATIONALLISTINGCREDIT = 'InternationalListingCredit';
	/**
	 * Constant for value 'MarketplaceResearchExpiredSubscriptionFee'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research fee for expired subscriptions.
	 * @return string 'MarketplaceResearchExpiredSubscriptionFee'
	 */
	const VALUE_MARKETPLACERESEARCHEXPIREDSUBSCRIPTIONFEE = 'MarketplaceResearchExpiredSubscriptionFee';
	/**
	 * Constant for value 'MarketplaceResearchExpiredSubscriptionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research credit for expired subscriptions.
	 * @return string 'MarketplaceResearchExpiredSubscriptionFeeCredit'
	 */
	const VALUE_MARKETPLACERESEARCHEXPIREDSUBSCRIPTIONFEECREDIT = 'MarketplaceResearchExpiredSubscriptionFeeCredit';
	/**
	 * Constant for value 'MarketplaceResearchBasicSubscriptionFee'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research basic subscription fee.
	 * @return string 'MarketplaceResearchBasicSubscriptionFee'
	 */
	const VALUE_MARKETPLACERESEARCHBASICSUBSCRIPTIONFEE = 'MarketplaceResearchBasicSubscriptionFee';
	/**
	 * Constant for value 'MarketplaceResearchBasicSubscriptionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research basic subscription credit.
	 * @return string 'MarketplaceResearchBasicSubscriptionFeeCredit'
	 */
	const VALUE_MARKETPLACERESEARCHBASICSUBSCRIPTIONFEECREDIT = 'MarketplaceResearchBasicSubscriptionFeeCredit';
	/**
	 * Constant for value 'MarketplaceResearchProSubscriptionFee'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research pro subscription fee.
	 * @return string 'MarketplaceResearchProSubscriptionFee'
	 */
	const VALUE_MARKETPLACERESEARCHPROSUBSCRIPTIONFEE = 'MarketplaceResearchProSubscriptionFee';
	/**
	 * Constant for value 'BasicBundleFee'
	 * Meta informations :
	 * 	- documentation : (out) Basic bundle fee.
	 * @return string 'BasicBundleFee'
	 */
	const VALUE_BASICBUNDLEFEE = 'BasicBundleFee';
	/**
	 * Constant for value 'BasicBundleFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) Basic bundle fee credit.
	 * @return string 'BasicBundleFeeCredit'
	 */
	const VALUE_BASICBUNDLEFEECREDIT = 'BasicBundleFeeCredit';
	/**
	 * Constant for value 'MarketplaceResearchProSubscriptionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A MarketPlace Research pro subscription fee credit.
	 * @return string 'MarketplaceResearchProSubscriptionFeeCredit'
	 */
	const VALUE_MARKETPLACERESEARCHPROSUBSCRIPTIONFEECREDIT = 'MarketplaceResearchProSubscriptionFeeCredit';
	/**
	 * Constant for value 'VehicleLocalSubscriptionFee'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local subscription fee.
	 * @return string 'VehicleLocalSubscriptionFee'
	 */
	const VALUE_VEHICLELOCALSUBSCRIPTIONFEE = 'VehicleLocalSubscriptionFee';
	/**
	 * Constant for value 'VehicleLocalSubscriptionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local subscription fee credit.
	 * @return string 'VehicleLocalSubscriptionFeeCredit'
	 */
	const VALUE_VEHICLELOCALSUBSCRIPTIONFEECREDIT = 'VehicleLocalSubscriptionFeeCredit';
	/**
	 * Constant for value 'VehicleLocalInsertionFee'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local insertion fee.
	 * @return string 'VehicleLocalInsertionFee'
	 */
	const VALUE_VEHICLELOCALINSERTIONFEE = 'VehicleLocalInsertionFee';
	/**
	 * Constant for value 'VehicleLocalInsertionFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local insertion fee credit.
	 * @return string 'VehicleLocalInsertionFeeCredit'
	 */
	const VALUE_VEHICLELOCALINSERTIONFEECREDIT = 'VehicleLocalInsertionFeeCredit';
	/**
	 * Constant for value 'VehicleLocalFinalValueFee'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local final value fee.
	 * @return string 'VehicleLocalFinalValueFee'
	 */
	const VALUE_VEHICLELOCALFINALVALUEFEE = 'VehicleLocalFinalValueFee';
	/**
	 * Constant for value 'VehicleLocalFinalValueFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local final value fee credit.
	 * @return string 'VehicleLocalFinalValueFeeCredit'
	 */
	const VALUE_VEHICLELOCALFINALVALUEFEECREDIT = 'VehicleLocalFinalValueFeeCredit';
	/**
	 * Constant for value 'VehicleLocalGTCFee'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local GTC fee.
	 * @return string 'VehicleLocalGTCFee'
	 */
	const VALUE_VEHICLELOCALGTCFEE = 'VehicleLocalGTCFee';
	/**
	 * Constant for value 'VehicleLocalGTCFeeCredit'
	 * Meta informations :
	 * 	- documentation : (out) A Vehicle Local GTC fee credit.
	 * @return string 'VehicleLocalGTCFeeCredit'
	 */
	const VALUE_VEHICLELOCALGTCFEECREDIT = 'VehicleLocalGTCFeeCredit';
	/**
	 * Constant for value 'eBayMotorsProFee'
	 * Meta informations :
	 * 	- documentation : (out) eBay Motors Pro fee. Applies to eBay Motors Pro registered dealer applications only.
	 * @return string 'eBayMotorsProFee'
	 */
	const VALUE_EBAYMOTORSPROFEE = 'eBayMotorsProFee';
	/**
	 * Constant for value 'CrediteBayMotorsProFee'
	 * Meta informations :
	 * 	- documentation : (out) eBay Motors Pro fee credit. Applies to eBay Motors Pro registered dealer applications only.
	 * @return string 'CrediteBayMotorsProFee'
	 */
	const VALUE_CREDITEBAYMOTORSPROFEE = 'CrediteBayMotorsProFee';
	/**
	 * Constant for value 'eBayMotorsProFeatureFee'
	 * Meta informations :
	 * 	- documentation : (out) eBay Motors Pro feature fee. Applies to eBay Motors Pro registered dealer applications only.
	 * @return string 'eBayMotorsProFeatureFee'
	 */
	const VALUE_EBAYMOTORSPROFEATUREFEE = 'eBayMotorsProFeatureFee';
	/**
	 * Constant for value 'CrediteBayMotorsProFeatureFee'
	 * Meta informations :
	 * 	- documentation : (out) eBay Motors Pro feature fee credit. Applies to eBay Motors Pro registered dealer applications only.
	 * @return string 'CrediteBayMotorsProFeatureFee'
	 */
	const VALUE_CREDITEBAYMOTORSPROFEATUREFEE = 'CrediteBayMotorsProFeatureFee';
	/**
	 * Constant for value 'FeeGalleryPlus'
	 * Meta informations :
	 * 	- documentation : (out) A fee charged by eBay for listing an item with the Gallery Plus feature enabled. This feature cannot be removed with ReviseItem or RelistItem. However, if the feature is upgraded, for example, to Gallery Featured, the fee for Gallery Plus is refunded and a fee for Gallery Feature is charged instead.
	 * @return string 'FeeGalleryPlus'
	 */
	const VALUE_FEEGALLERYPLUS = 'FeeGalleryPlus';
	/**
	 * Constant for value 'CreditGalleryPlus'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay when refunding the fee for enabling the Gallery Plus feature. A Gallery Plus credit may be issued if, for example, a user upgrades their feature with ReviseItem or RelistItem to Gallery Featured. In this case, the original Gallery Plus fee is refunded and a Gallery Featured fee is charged instead.
	 * @return string 'CreditGalleryPlus'
	 */
	const VALUE_CREDITGALLERYPLUS = 'CreditGalleryPlus';
	/**
	 * Constant for value 'PrivateListing'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'PrivateListing'
	 */
	const VALUE_PRIVATELISTING = 'PrivateListing';
	/**
	 * Constant for value 'CreditPrivateListing'
	 * Meta informations :
	 * 	- documentation : 
	 * @return string 'CreditPrivateListing'
	 */
	const VALUE_CREDITPRIVATELISTING = 'CreditPrivateListing';
	/**
	 * Constant for value 'ImmoProFee'
	 * Meta informations :
	 * 	- documentation : eBay ImmoPro Fee
	 * @return string 'ImmoProFee'
	 */
	const VALUE_IMMOPROFEE = 'ImmoProFee';
	/**
	 * Constant for value 'CreditImmoProFee'
	 * Meta informations :
	 * 	- documentation : Credit eBay ImmoPro Fee
	 * @return string 'CreditImmoProFee'
	 */
	const VALUE_CREDITIMMOPROFEE = 'CreditImmoProFee';
	/**
	 * Constant for value 'ImmoProFeatureFee'
	 * Meta informations :
	 * 	- documentation : eBay ImmoPro Feature Fee
	 * @return string 'ImmoProFeatureFee'
	 */
	const VALUE_IMMOPROFEATUREFEE = 'ImmoProFeatureFee';
	/**
	 * Constant for value 'CreditImmoProFeatureFee'
	 * Meta informations :
	 * 	- documentation : Credit eBay ImmoPro Feature Fee
	 * @return string 'CreditImmoProFeatureFee'
	 */
	const VALUE_CREDITIMMOPROFEATUREFEE = 'CreditImmoProFeatureFee';
	/**
	 * Constant for value 'RealEstateProFee'
	 * Meta informations :
	 * 	- documentation : eBay Real Estate Pro Fee
	 * @return string 'RealEstateProFee'
	 */
	const VALUE_REALESTATEPROFEE = 'RealEstateProFee';
	/**
	 * Constant for value 'CreditRealEstateProFee'
	 * Meta informations :
	 * 	- documentation : Credit eBay Real Estate Pro Fee
	 * @return string 'CreditRealEstateProFee'
	 */
	const VALUE_CREDITREALESTATEPROFEE = 'CreditRealEstateProFee';
	/**
	 * Constant for value 'RealEstateProFeatureFee'
	 * Meta informations :
	 * 	- documentation : eBay Real Estate Pro Feature Fee
	 * @return string 'RealEstateProFeatureFee'
	 */
	const VALUE_REALESTATEPROFEATUREFEE = 'RealEstateProFeatureFee';
	/**
	 * Constant for value 'CreditRealEstateProFeatureFee'
	 * Meta informations :
	 * 	- documentation : Credit eBay Real Estate Pro Feature Fee
	 * @return string 'CreditRealEstateProFeatureFee'
	 */
	const VALUE_CREDITREALESTATEPROFEATUREFEE = 'CreditRealEstateProFeatureFee';
	/**
	 * Constant for value 'Discount'
	 * Meta informations :
	 * 	- documentation : PowerSeller, PowerSeller shipping, Top-rated seller, eBay Stores subscription, or other subscription discount against the final value fee, insertion fee, subscription fee, late payment fee, or other fee. See AccountEntry.Title for an explanation of the discount and the percentage that was applied.
	 * @return string 'Discount'
	 */
	const VALUE_DISCOUNT = 'Discount';
	/**
	 * Constant for value 'CreditFinalValueShipping'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CreditFinalValueShipping'
	 */
	const VALUE_CREDITFINALVALUESHIPPING = 'CreditFinalValueShipping';
	/**
	 * Constant for value 'FeeFinalValueShipping'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'FeeFinalValueShipping'
	 */
	const VALUE_FEEFINALVALUESHIPPING = 'FeeFinalValueShipping';
	/**
	 * Constant for value 'FeeReturnShipping'
	 * Meta informations :
	 * 	- documentation : (out) The fee charged for Return Shipping.
	 * @return string 'FeeReturnShipping'
	 */
	const VALUE_FEERETURNSHIPPING = 'FeeReturnShipping';
	/**
	 * Constant for value 'CreditReturnShipping'
	 * Meta informations :
	 * 	- documentation : (out) A credit issued by eBay against a Return Shipping charge. Issued as a result of an Unpaid Item dispute, under some circumstances.
	 * @return string 'CreditReturnShipping'
	 */
	const VALUE_CREDITRETURNSHIPPING = 'CreditReturnShipping';
	/**
	 * Constructor
	 * @return EbayTradingTypeAccountDetailEntryCodeType
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_FEEINSERTION,self::VALUE_FEEBOLD,self::VALUE_FEEFEATURED,self::VALUE_FEECATEGORYFEATURED,self::VALUE_FEEFINALVALUE,self::VALUE_PAYMENTCHECK,self::VALUE_PAYMENTCC,self::VALUE_CREDITCOURTESY,self::VALUE_CREDITNOSALE,self::VALUE_CREDITPARTIALSALE,self::VALUE_REFUNDCC,self::VALUE_REFUNDCHECK,self::VALUE_FINANCECHARGE,self::VALUE_AWDEBIT,self::VALUE_AWCREDIT,self::VALUE_AWMEMO,self::VALUE_CREDITDUPLICATELISTING,self::VALUE_FEEPARTIALSALE,self::VALUE_PAYMENTELECTRONICTRANSFERREVERSAL,self::VALUE_PAYMENTCCONCE,self::VALUE_FEERETURNEDCHECK,self::VALUE_FEEREDEPOSITCHECK,self::VALUE_PAYMENTCASH,self::VALUE_CREDITINSERTION,self::VALUE_CREDITBOLD,self::VALUE_CREDITFEATURED,self::VALUE_CREDITCATEGORYFEATURED,self::VALUE_CREDITFINALVALUE,self::VALUE_FEENSFCHECK,self::VALUE_FEERETURNCHECKCLOSE,self::VALUE_MEMO,self::VALUE_PAYMENTMONEYORDER,self::VALUE_CREDITCARDONFILE,self::VALUE_CREDITCARDNOTONFILE,self::VALUE_INVOICED,self::VALUE_INVOICEDCREDITCARD,self::VALUE_CREDITTRANSFERFROM,self::VALUE_DEBITTRANSFERTO,self::VALUE_INVOICECREDITBALANCE,self::VALUE_EBAYDEBIT,self::VALUE_EBAYCREDIT,self::VALUE_PROMOTIONALCREDIT,self::VALUE_CCNOTONFILEPERCUSTREQ,self::VALUE_CREDITINSERTIONFEE,self::VALUE_CCPAYMENTREJECTED,self::VALUE_FEEGIFTICON,self::VALUE_CREDITGIFTICON,self::VALUE_FEEGALLERY,self::VALUE_FEEFEATUREDGALLERY,self::VALUE_CREDITGALLERY,self::VALUE_CREDITFEATUREDGALLERY,self::VALUE_ITEMMOVEFEE,self::VALUE_OUTAGECREDIT,self::VALUE_CREDITPSA,self::VALUE_CREDITPCGS,self::VALUE_FEERESERVE,self::VALUE_CREDITRESERVE,self::VALUE_EBAYVISACREDIT,self::VALUE_BBADMINCREDIT,self::VALUE_BBADMINDEBIT,self::VALUE_REFERRERCREDIT,self::VALUE_REFERRERDEBIT,self::VALUE_SWITCHCURRENCY,self::VALUE_PAYMENTGIFTCERTIFICATE,self::VALUE_PAYMENTWIRETRANSFER,self::VALUE_PAYMENTHOMEBANKING,self::VALUE_PAYMENTELECTRONICTRANSFER,self::VALUE_PAYMENTADJUSTMENTCREDIT,self::VALUE_PAYMENTADJUSTMENTDEBIT,self::VALUE_CHARGEOFF,self::VALUE_CHARGEOFFRECOVERY,self::VALUE_CHARGEOFFBANKRUPTCY,self::VALUE_CHARGEOFFSUSPENDED,self::VALUE_CHARGEOFFDECEASED,self::VALUE_CHARGEOFFOTHER,self::VALUE_CHARGEOFFWACKO,self::VALUE_FINANCECHARGEREVERSAL,self::VALUE_FVFCREDITREVERSAL,self::VALUE_FOREIGNFUNDSCONVERT,self::VALUE_FOREIGNFUNDSCHECKREVERSAL,self::VALUE_EOMRESTRICTION,self::VALUE_ALLFEESCREDIT,self::VALUE_SETONHOLD,self::VALUE_REVERTUSERSTATE,self::VALUE_DIRECTDEBITONFILE,self::VALUE_DIRECTDEBITNOTONFILE,self::VALUE_PAYMENTDIRECTDEBIT,self::VALUE_DIRECTDEBITREVERSAL,self::VALUE_DIRECTDEBITRETURNEDITEM,self::VALUE_FEEHIGHLIGHT,self::VALUE_CREDITHIGHLIGHT,self::VALUE_BULKUSERSUSPENSION,self::VALUE_FEEREALESTATE30DAYSLISTING,self::VALUE_CREDITREALESTATE30DAYSLISTING,self::VALUE_TRADINGLIMITOVERRIDEON,self::VALUE_TRADINGLIMITOVERRIDEOFF,self::VALUE_EQUIFAXREALTIMEFEE,self::VALUE_CREDITEQUIFAXREALTIMEFEE,self::VALUE_PAYMENTEQUIFAXDEBIT,self::VALUE_PAYMENTEQUIFAXCREDIT,self::VALUE_MERGED,self::VALUE_AUTOTRADERON,self::VALUE_AUTOTRADEROFF,self::VALUE_PAPERINVOICEON,self::VALUE_PAPERINVOICEOFF,self::VALUE_ACCOUNTSTATESWITCH,self::VALUE_FVFCREDITREVERSALAUTOMATIC,self::VALUE_CREDITSOFTOUTAGE,self::VALUE_LACATALOGFEE,self::VALUE_LAEXTRAITEM,self::VALUE_LACATALOGITEMFEEREFUND,self::VALUE_LACATALOGINSERTIONREFUND,self::VALUE_LAFINALVALUEFEE,self::VALUE_LAFINALVALUEFEEREFUND,self::VALUE_LABUYERPREMIUMPERCENTAGEFEE,self::VALUE_LABUYERPREMIUMPERCENTAGEFEEREFUND,self::VALUE_LAAUDIOVIDEOFEE,self::VALUE_LAAUDIOVIDEOFEEREFUND,self::VALUE_FEEIPIXPHOTO,self::VALUE_FEEIPIXSLIDESHOW,self::VALUE_CREDITIPIXPHOTO,self::VALUE_CREDITIPIXSLIDESHOW,self::VALUE_FEETENDAYAUCTION,self::VALUE_CREDITTENDAYAUCTION,self::VALUE_TEMPORARYCREDIT,self::VALUE_TEMPORARYCREDITREVERSAL,self::VALUE_SUBSCRIPTIONAABASIC,self::VALUE_SUBSCRIPTIONAAPRO,self::VALUE_CREDITAABASIC,self::VALUE_CREDITAAPRO,self::VALUE_FEELARGEPICTURE,self::VALUE_CREDITLARGEPICTURE,self::VALUE_FEEPICTUREPACK,self::VALUE_CREDITPICTUREPACKPARTIAL,self::VALUE_CREDITPICTUREPACKFULL,self::VALUE_SUBSCRIPTIONEBAYSTORES,self::VALUE_CREDITEBAYSTORES,self::VALUE_FEEINSERTIONFIXEDPRICE,self::VALUE_CREDITINSERTIONFIXEDPRICE,self::VALUE_FEEFINALVALUEFIXEDPRICE,self::VALUE_CREDITFINALVALUEFIXEDPRICE,self::VALUE_ELECTRONICINVOICEON,self::VALUE_ELECTRONICINVOICEOFF,self::VALUE_FLAGDDDDPENDING,self::VALUE_FLAGDDPAYMENTCONFIRMED,self::VALUE_FIXEDPRICEDURATIONFEE,self::VALUE_FIXEDPRICEDURATIONCREDIT,self::VALUE_BUYITNOWFEE,self::VALUE_BUYITNOWCREDIT,self::VALUE_FEESCHEDULE,self::VALUE_CREDITSCHEDULE,self::VALUE_SUBSCRIPTIONSMBASIC,self::VALUE_SUBSCRIPTIONSMBASICPRO,self::VALUE_CREDITSMBASIC,self::VALUE_CREDITSMBASICPRO,self::VALUE_STORESGTCFEE,self::VALUE_STORESGTCCREDIT,self::VALUE_LISTINGDESIGNERFEE,self::VALUE_LISTINGDESIGNERCREDIT,self::VALUE_EXTENDEDAUCTIONFEE,self::VALUE_EXTENDEDACUTIONCREDIT,self::VALUE_PAYPALOTPSUCC,self::VALUE_PAYPALOTPPEND,self::VALUE_PAYPALFAILED,self::VALUE_PAYPALCHARGEBACK,self::VALUE_CHARGEBACK,self::VALUE_CHARGEBACKREVERSAL,self::VALUE_PAYPALREFUND,self::VALUE_BONUSPOINTSADDITION,self::VALUE_BONUSPOINTSREDUCTION,self::VALUE_BONUSPOINTSPAYMENTAUTOMATIC,self::VALUE_BONUSPOINTSPAYMENTMANUAL,self::VALUE_BONUSPOINTSPAYMENTREVERSAL,self::VALUE_BONUSPOINTSCASHPAYOUT,self::VALUE_VATCREDIT,self::VALUE_VATDEBIT,self::VALUE_VATSTATUSCHANGEPENDING,self::VALUE_VATSTATUSCHANGEAPPROVED,self::VALUE_VATSTATUSCHANGE_DENIED,self::VALUE_VATSTATUSDELETEDBYCSR,self::VALUE_VATSTATUSDELETEDBYUSER,self::VALUE_SMPROLISTINGDESIGNERFEE,self::VALUE_SMPROLISTINGDESIGNERCREDIT,self::VALUE_STORESSUCCESSFULLISTINGFEE,self::VALUE_STORESSUCCESSFULLISTINGFEECREDIT,self::VALUE_STORESREFERRALFEE,self::VALUE_STORESREFERRALCREDIT,self::VALUE_SUBTITLEFEE,self::VALUE_SUBTITLEFEECREDIT,self::VALUE_EBAYSTOREINVENTORYSUBSCRIPTIONCREDIT,self::VALUE_AUTOPMNTREQEXEMPT,self::VALUE_AUTOPMNTREQREIN,self::VALUE_PICTUREMANAGERSUBSCRIPTIONFEE,self::VALUE_PICTUREMANAGERSUBSCRIPTIONFEECREDIT,self::VALUE_SELLERREPORTSBASICFEE,self::VALUE_SELLERREPORTSBASICCREDIT,self::VALUE_SELLERREPORTSPLUSFEE,self::VALUE_SELLERREPORTSPLUSCREDIT,self::VALUE_PAYPALONFILE,self::VALUE_PAYPALONFILEBYCSR,self::VALUE_PAYPALOFFFILE,self::VALUE_BORDERFEE,self::VALUE_BORDERFEECREDIT,self::VALUE_FEESEARCHABLEMOBILEDE,self::VALUE_SALESREPORTSPLUSFEE,self::VALUE_SALESREPORTSPLUSCREDIT,self::VALUE_CREDITSEARCHABLEMOBILEDE,self::VALUE_EMAILMARKETINGFEE,self::VALUE_EMAILMARKETINGCREDIT,self::VALUE_FEEPICTURESHOW,self::VALUE_CREDITPICTURESHOW,self::VALUE_PROPACKBUNDLEFEE,self::VALUE_PROPACKBUNDLEFEECREDIT,self::VALUE_BASICUPGRADEPACKBUNDLEFEE,self::VALUE_BASICUPGRADEPACKBUNDLEFEECREDIT,self::VALUE_VALUEPACKBUNDLEFEE,self::VALUE_VALUEPACKBUNDLEFEECREDIT,self::VALUE_PROPACKPLUSBUNDLEFEE,self::VALUE_PROPACKPLUSBUNDLEFEECREDIT,self::VALUE_FINALENTRY,self::VALUE_CUSTOMCODE,self::VALUE_EXTENDEDDURATIONFEE,self::VALUE_EXTENDEDDURATIONFEECREDIT,self::VALUE_INTERNATIONALLISTINGFEE,self::VALUE_INTERNATIONALLISTINGCREDIT,self::VALUE_MARKETPLACERESEARCHEXPIREDSUBSCRIPTIONFEE,self::VALUE_MARKETPLACERESEARCHEXPIREDSUBSCRIPTIONFEECREDIT,self::VALUE_MARKETPLACERESEARCHBASICSUBSCRIPTIONFEE,self::VALUE_MARKETPLACERESEARCHBASICSUBSCRIPTIONFEECREDIT,self::VALUE_MARKETPLACERESEARCHPROSUBSCRIPTIONFEE,self::VALUE_BASICBUNDLEFEE,self::VALUE_BASICBUNDLEFEECREDIT,self::VALUE_MARKETPLACERESEARCHPROSUBSCRIPTIONFEECREDIT,self::VALUE_VEHICLELOCALSUBSCRIPTIONFEE,self::VALUE_VEHICLELOCALSUBSCRIPTIONFEECREDIT,self::VALUE_VEHICLELOCALINSERTIONFEE,self::VALUE_VEHICLELOCALINSERTIONFEECREDIT,self::VALUE_VEHICLELOCALFINALVALUEFEE,self::VALUE_VEHICLELOCALFINALVALUEFEECREDIT,self::VALUE_VEHICLELOCALGTCFEE,self::VALUE_VEHICLELOCALGTCFEECREDIT,self::VALUE_EBAYMOTORSPROFEE,self::VALUE_CREDITEBAYMOTORSPROFEE,self::VALUE_EBAYMOTORSPROFEATUREFEE,self::VALUE_CREDITEBAYMOTORSPROFEATUREFEE,self::VALUE_FEEGALLERYPLUS,self::VALUE_CREDITGALLERYPLUS,self::VALUE_PRIVATELISTING,self::VALUE_CREDITPRIVATELISTING,self::VALUE_IMMOPROFEE,self::VALUE_CREDITIMMOPROFEE,self::VALUE_IMMOPROFEATUREFEE,self::VALUE_CREDITIMMOPROFEATUREFEE,self::VALUE_REALESTATEPROFEE,self::VALUE_CREDITREALESTATEPROFEE,self::VALUE_REALESTATEPROFEATUREFEE,self::VALUE_CREDITREALESTATEPROFEATUREFEE,self::VALUE_DISCOUNT,self::VALUE_CREDITFINALVALUESHIPPING,self::VALUE_FEEFINALVALUESHIPPING,self::VALUE_FEERETURNSHIPPING,self::VALUE_CREDITRETURNSHIPPING));
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