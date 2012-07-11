<?php
/**
 * Class file for EbayTradingTypeExternalTransactionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExternalTransactionType
 * Documentation : Container consisting of details related to payment of an eBay order on an external system such as PayPal. This container is only returned if payment has been made on an order. For GetSellerTransaactions and GetItemTransactions, this container is not returned for multiple line item orders.
 * @date 04/07/2012
 */
class EbayTradingTypeExternalTransactionType extends EbayTradingWsdlClass
{
	/**
	 * The ExternalTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a PayPal payment of an eBay order. If the order was paid for with a payment method other than PayPal, "SIS" is returned, which stands for "Send Information To Seller." This field is only returned after payment has been made.
	 * @var string
	 */
	public $ExternalTransactionID;
	/**
	 * The ExternalTransactionTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Timestamp for payment transaction.
	 * @var dateTime
	 */
	public $ExternalTransactionTime;
	/**
	 * The FeeOrCreditAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fee Amount is a positive value and Credit Amount is a negative value.
	 * @var EbayTradingTypeAmountType
	 */
	public $FeeOrCreditAmount;
	/**
	 * The PaymentOrRefundAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If positive, the amount the buyer pays the seller through PayPal on the purchase of items. If negative, the amount refunded the buyer. Default = 0.
	 * @var EbayTradingTypeAmountType
	 */
	public $PaymentOrRefundAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ExternalTransactionID
	 * @param dateTime ExternalTransactionTime
	 * @param EbayTradingTypeAmountType FeeOrCreditAmount
	 * @param EbayTradingTypeAmountType PaymentOrRefundAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeExternalTransactionType
	 */
	public function __construct($_ExternalTransactionID = null,$_ExternalTransactionTime = null,$_FeeOrCreditAmount = null,$_PaymentOrRefundAmount = null,$_any = null)
	{
		parent::__construct(array('ExternalTransactionID'=>$_ExternalTransactionID,'ExternalTransactionTime'=>$_ExternalTransactionTime,'FeeOrCreditAmount'=>$_FeeOrCreditAmount,'PaymentOrRefundAmount'=>$_PaymentOrRefundAmount,'any'=>$_any));
	}
	/**
	 * Set ExternalTransactionID
	 * @param string ExternalTransactionID
	 * @return string
	 */
	public function setExternalTransactionID($_ExternalTransactionID)
	{
		return ($this->ExternalTransactionID = $_ExternalTransactionID);
	}
	/**
	 * Get ExternalTransactionID
	 * @return string
	 */
	public function getExternalTransactionID()
	{
		return $this->ExternalTransactionID;
	}
	/**
	 * Set ExternalTransactionTime
	 * @param dateTime ExternalTransactionTime
	 * @return dateTime
	 */
	public function setExternalTransactionTime($_ExternalTransactionTime)
	{
		return ($this->ExternalTransactionTime = $_ExternalTransactionTime);
	}
	/**
	 * Get ExternalTransactionTime
	 * @return dateTime
	 */
	public function getExternalTransactionTime()
	{
		return $this->ExternalTransactionTime;
	}
	/**
	 * Set FeeOrCreditAmount
	 * @param AmountType FeeOrCreditAmount
	 * @return AmountType
	 */
	public function setFeeOrCreditAmount($_FeeOrCreditAmount)
	{
		return ($this->FeeOrCreditAmount = $_FeeOrCreditAmount);
	}
	/**
	 * Get FeeOrCreditAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getFeeOrCreditAmount()
	{
		return $this->FeeOrCreditAmount;
	}
	/**
	 * Set PaymentOrRefundAmount
	 * @param AmountType PaymentOrRefundAmount
	 * @return AmountType
	 */
	public function setPaymentOrRefundAmount($_PaymentOrRefundAmount)
	{
		return ($this->PaymentOrRefundAmount = $_PaymentOrRefundAmount);
	}
	/**
	 * Get PaymentOrRefundAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getPaymentOrRefundAmount()
	{
		return $this->PaymentOrRefundAmount;
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