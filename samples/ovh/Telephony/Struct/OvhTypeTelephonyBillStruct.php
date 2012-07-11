<?php
/**
 * Class file for OvhTypeTelephonyBillStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderPaid
	 * @var boolean
	 */
	public $orderPaid;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * The billUrl
	 * @var string
	 */
	public $billUrl;
	/**
	 * Constructor
	 * @param string date
	 * @param float price
	 * @param int orderId
	 * @param boolean orderPaid
	 * @param string orderUrl
	 * @param string billUrl
	 * @return OvhTypeTelephonyBillStruct
	 */
	public function __construct($_date = null,$_price = null,$_orderId = null,$_orderPaid = null,$_orderUrl = null,$_billUrl = null)
	{
		parent::__construct(array('date'=>$_date,'price'=>$_price,'orderId'=>$_orderId,'orderPaid'=>$_orderPaid,'orderUrl'=>$_orderUrl,'billUrl'=>$_billUrl));
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set price
	 * @param float price
	 * @return float
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price
	 * @return float
	 */
	public function getPrice()
	{
		return $this->price;
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
	 * Set orderPaid
	 * @param boolean orderPaid
	 * @return boolean
	 */
	public function setOrderPaid($_orderPaid)
	{
		return ($this->orderPaid = $_orderPaid);
	}
	/**
	 * Get orderPaid
	 * @return boolean
	 */
	public function getOrderPaid()
	{
		return $this->orderPaid;
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
	 * Set billUrl
	 * @param string billUrl
	 * @return string
	 */
	public function setBillUrl($_billUrl)
	{
		return ($this->billUrl = $_billUrl);
	}
	/**
	 * Get billUrl
	 * @return string
	 */
	public function getBillUrl()
	{
		return $this->billUrl;
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