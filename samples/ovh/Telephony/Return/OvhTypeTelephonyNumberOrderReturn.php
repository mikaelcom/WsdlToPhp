<?php
/**
 * Class file for OvhTypeTelephonyNumberOrderReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyNumberOrderReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyNumberOrderReturn extends OvhWsdlClass
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
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * Constructor
	 * @param int orderId
	 * @param string orderPassword
	 * @param string orderUrl
	 * @param float totalPrice
	 * @return OvhTypeTelephonyNumberOrderReturn
	 */
	public function __construct($_orderId = null,$_orderPassword = null,$_orderUrl = null,$_totalPrice = null)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'totalPrice'=>$_totalPrice));
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
	 * Set totalPrice
	 * @param float totalPrice
	 * @return float
	 */
	public function setTotalPrice($_totalPrice)
	{
		return ($this->totalPrice = $_totalPrice);
	}
	/**
	 * Get totalPrice
	 * @return float
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
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