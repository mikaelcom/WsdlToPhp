<?php
/**
 * Class file for PaylineWebPaymentTypeDoImmediateWalletPaymentRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoImmediateWalletPaymentRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoImmediateWalletPaymentRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * The privateDataList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypePrivateDataList
	 */
	public $privateDataList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypePayment payment
	 * @param PaylineWebPaymentTypeOrder order
	 * @param string walletId
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeDoImmediateWalletPaymentRequest
	 */
	public function __construct($_payment = null,$_order = null,$_walletId = null,$_privateDataList = null)
	{
		parent::__construct(array('payment'=>$_payment,'order'=>$_order,'walletId'=>$_walletId,'privateDataList'=>$_privateDataList));
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
	 * Set walletId
	 * @param string walletId
	 * @return string
	 */
	public function setWalletId($_walletId)
	{
		return ($this->walletId = $_walletId);
	}
	/**
	 * Get walletId
	 * @return string
	 */
	public function getWalletId()
	{
		return $this->walletId;
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