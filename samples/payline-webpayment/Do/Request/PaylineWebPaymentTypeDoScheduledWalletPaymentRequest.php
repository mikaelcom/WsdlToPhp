<?php
/**
 * Class file for PaylineWebPaymentTypeDoScheduledWalletPaymentRequest
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDoScheduledWalletPaymentRequest
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDoScheduledWalletPaymentRequest extends PaylineWebPaymentWsdlClass
{
	/**
	 * The payment
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypePayment
	 */
	public $payment;
	/**
	 * The orderRef
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $orderRef;
	/**
	 * The orderDate
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $orderDate;
	/**
	 * The scheduledDate
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $scheduledDate;
	/**
	 * The walletId
	 * Meta informations :
	 * 	- nillable : false
	 * @var string
	 */
	public $walletId;
	/**
	 * The order
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeOrder
	 */
	public $order;
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
	 * @param string orderRef
	 * @param string orderDate
	 * @param string scheduledDate
	 * @param string walletId
	 * @param PaylineWebPaymentTypeOrder order
	 * @param PaylineWebPaymentTypePrivateDataList privateDataList
	 * @return PaylineWebPaymentTypeDoScheduledWalletPaymentRequest
	 */
	public function __construct($_payment = null,$_orderRef = null,$_orderDate = null,$_scheduledDate = null,$_walletId = null,$_order = null,$_privateDataList = null)
	{
		parent::__construct(array('payment'=>$_payment,'orderRef'=>$_orderRef,'orderDate'=>$_orderDate,'scheduledDate'=>$_scheduledDate,'walletId'=>$_walletId,'order'=>$_order,'privateDataList'=>$_privateDataList));
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
	 * Set orderRef
	 * @param string orderRef
	 * @return string
	 */
	public function setOrderRef($_orderRef)
	{
		return ($this->orderRef = $_orderRef);
	}
	/**
	 * Get orderRef
	 * @return string
	 */
	public function getOrderRef()
	{
		return $this->orderRef;
	}
	/**
	 * Set orderDate
	 * @param string orderDate
	 * @return string
	 */
	public function setOrderDate($_orderDate)
	{
		return ($this->orderDate = $_orderDate);
	}
	/**
	 * Get orderDate
	 * @return string
	 */
	public function getOrderDate()
	{
		return $this->orderDate;
	}
	/**
	 * Set scheduledDate
	 * @param string scheduledDate
	 * @return string
	 */
	public function setScheduledDate($_scheduledDate)
	{
		return ($this->scheduledDate = $_scheduledDate);
	}
	/**
	 * Get scheduledDate
	 * @return string
	 */
	public function getScheduledDate()
	{
		return $this->scheduledDate;
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