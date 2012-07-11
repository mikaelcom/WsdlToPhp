<?php
/**
 * Class file for OvhTypeOrderStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrderStruct
 * @date 02/07/2012
 */
class OvhTypeOrderStruct extends OvhWsdlClass
{
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderPassword
	 * @var string
	 */
	public $orderPassword;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * The isPaid
	 * @var boolean
	 */
	public $isPaid;
	/**
	 * The paymentStatus
	 * @var string
	 */
	public $paymentStatus;
	/**
	 * Constructor
	 * @param int orderId
	 * @param string orderPassword
	 * @param string orderUrl
	 * @param boolean isPaid
	 * @param string paymentStatus
	 * @return OvhTypeOrderStruct
	 */
	public function __construct($_orderId = null,$_orderPassword = null,$_orderUrl = null,$_isPaid = null,$_paymentStatus = null)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'isPaid'=>$_isPaid,'paymentStatus'=>$_paymentStatus));
	}
	/**
	 * Set orderId
	 * @param int orderId
	 * @return int
	 */
	public function setOrderId($_orderId)
	{
		return ($this->orderId = $_orderId);
	}
	/**
	 * Get orderId
	 * @return int
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}
	/**
	 * Set orderPassword
	 * @param string orderPassword
	 * @return string
	 */
	public function setOrderPassword($_orderPassword)
	{
		return ($this->orderPassword = $_orderPassword);
	}
	/**
	 * Get orderPassword
	 * @return string
	 */
	public function getOrderPassword()
	{
		return $this->orderPassword;
	}
	/**
	 * Set orderUrl
	 * @param string orderUrl
	 * @return string
	 */
	public function setOrderUrl($_orderUrl)
	{
		return ($this->orderUrl = $_orderUrl);
	}
	/**
	 * Get orderUrl
	 * @return string
	 */
	public function getOrderUrl()
	{
		return $this->orderUrl;
	}
	/**
	 * Set isPaid
	 * @param boolean isPaid
	 * @return boolean
	 */
	public function setIsPaid($_isPaid)
	{
		return ($this->isPaid = $_isPaid);
	}
	/**
	 * Get isPaid
	 * @return boolean
	 */
	public function getIsPaid()
	{
		return $this->isPaid;
	}
	/**
	 * Set paymentStatus
	 * @param string paymentStatus
	 * @return string
	 */
	public function setPaymentStatus($_paymentStatus)
	{
		return ($this->paymentStatus = $_paymentStatus);
	}
	/**
	 * Get paymentStatus
	 * @return string
	 */
	public function getPaymentStatus()
	{
		return $this->paymentStatus;
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