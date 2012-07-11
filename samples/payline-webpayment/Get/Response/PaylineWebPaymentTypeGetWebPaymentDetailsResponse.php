<?php
/**
 * Class file for PaylineWebPaymentTypeGetWebPaymentDetailsResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeGetWebPaymentDetailsResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeGetWebPaymentDetailsResponse extends PaylineWebPaymentWsdlClass
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
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $transaction;
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The authorization
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeAuthorization
	 */
	public $authorization;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * The billingRecordList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeBillingRecordList
	 */
	public $billingRecordList;
	/**
	 * The authentication3DSecure
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeAuthentication3DSecure
	 */
	public $authentication3DSecure;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @param PaylineWebPaymentTypePayment payment
	 * @param PaylineWebPaymentTypeAuthorization authorization
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @param PaylineWebPaymentTypeBillingRecordList billingRecordList
	 * @param PaylineWebPaymentTypeAuthentication3DSecure authentication3DSecure
	 * @return PaylineWebPaymentTypeGetWebPaymentDetailsResponse
	 */
	public function __construct($_result = null,$_transaction = null,$_payment = null,$_authorization = null,$_privateDataList = null,$_billingRecordList = null,$_authentication3DSecure = null)
	{
		parent::__construct(array('result'=>$_result,'transaction'=>$_transaction,'payment'=>$_payment,'authorization'=>$_authorization,'privateDataList'=>$_privateDataList,'billingRecordList'=>$_billingRecordList,'authentication3DSecure'=>$_authentication3DSecure));
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
	 * Set billingRecordList
	 * @param billingRecordList billingRecordList
	 * @return billingRecordList
	 */
	public function setBillingRecordList($_billingRecordList)
	{
		return ($this->billingRecordList = $_billingRecordList);
	}
	/**
	 * Get billingRecordList
	 * @return PaylineWebPaymentTypebillingRecordList
	 */
	public function getBillingRecordList()
	{
		return $this->billingRecordList;
	}
	/**
	 * Set authentication3DSecure
	 * @param authentication3DSecure authentication3DSecure
	 * @return authentication3DSecure
	 */
	public function setAuthentication3DSecure($_authentication3DSecure)
	{
		return ($this->authentication3DSecure = $_authentication3DSecure);
	}
	/**
	 * Get authentication3DSecure
	 * @return PaylineWebPaymentTypeauthentication3DSecure
	 */
	public function getAuthentication3DSecure()
	{
		return $this->authentication3DSecure;
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