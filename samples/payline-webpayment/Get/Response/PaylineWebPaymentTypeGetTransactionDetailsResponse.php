<?php
/**
 * Class file for PaylineWebPaymentTypeGetTransactionDetailsResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetTransactionDetailsResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetTransactionDetailsResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The transaction
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $transaction;
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The authorization
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthorization
	 */
	public $authorization;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
	/**
	 * The buyer
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeBuyer
	 */
	public $buyer;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @param PaylineWebPaymentTypePayment payment
	 * @param PaylineWebPaymentTypeAuthorization authorization
	 * @param PaylineWebPaymentTypeOrder order
	 * @param PaylineWebPaymentTypeBuyer buyer
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeGetTransactionDetailsResponse
	 */
	public function __construct($_result = null,$_transaction = null,$_payment = null,$_authorization = null,$_order = null,$_buyer = null,$_privateDataList = null)
	{
		parent::__construct(array('result'=>$_result,'transaction'=>$_transaction,'payment'=>$_payment,'authorization'=>$_authorization,'order'=>$_order,'buyer'=>$_buyer,'privateDataList'=>$_privateDataList));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set transaction
	 * @param transaction transaction
	 * @return transaction
	 */
	public function setTransaction($_transaction)
	{
		return ($this->transaction = $_transaction);
	}
	/**
	 * Get transaction
	 * @return PaylineWebPaymentTypetransaction
	 */
	public function getTransaction()
	{
		return $this->transaction;
	}
	/**
	 * Set payment
	 * @param payment payment
	 * @return payment
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Get payment
	 * @return PaylineWebPaymentTypepayment
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set authorization
	 * @param authorization authorization
	 * @return authorization
	 */
	public function setAuthorization($_authorization)
	{
		return ($this->authorization = $_authorization);
	}
	/**
	 * Get authorization
	 * @return PaylineWebPaymentTypeauthorization
	 */
	public function getAuthorization()
	{
		return $this->authorization;
	}
	/**
	 * Set order
	 * @param order order
	 * @return order
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get order
	 * @return PaylineWebPaymentTypeorder
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set buyer
	 * @param buyer buyer
	 * @return buyer
	 */
	public function setBuyer($_buyer)
	{
		return ($this->buyer = $_buyer);
	}
	/**
	 * Get buyer
	 * @return PaylineWebPaymentTypebuyer
	 */
	public function getBuyer()
	{
		return $this->buyer;
	}
	/**
	 * Set privateDataList
	 * @param privateDataList privateDataList
	 * @return privateDataList
	 */
	public function setPrivateDataList($_privateDataList)
	{
		return ($this->privateDataList = $_privateDataList);
	}
	/**
	 * Get privateDataList
	 * @return PaylineWebPaymentTypeprivateDataList
	 */
	public function getPrivateDataList()
	{
		return $this->privateDataList;
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