<?php
/**
 * Class file for OvhTypeDedicatedOrderStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedOrderStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedOrderStruct extends OvhWsdlClass
{
	/**
	 * The orderPassword
	 * @var string
	 */
	public $orderPassword;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * Constructor
	 * @param string orderPassword
	 * @param int orderId
	 * @param string orderUrl
	 * @return OvhTypeDedicatedOrderStruct
	 */
	public function __construct($_orderPassword = null,$_orderId = null,$_orderUrl = null)
	{
		parent::__construct(array('orderPassword'=>$_orderPassword,'orderId'=>$_orderId,'orderUrl'=>$_orderUrl));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>