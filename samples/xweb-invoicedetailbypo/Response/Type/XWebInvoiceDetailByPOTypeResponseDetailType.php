<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeResponseDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeResponseDetailType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeResponseDetailType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The OrderInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebInvoiceDetailByPOTypeOrderInfoType
	 */
	public $OrderInfo;
	/**
	 * Constructor
	 * @param XWebInvoiceDetailByPOTypeOrderInfoType OrderInfo
	 * @return XWebInvoiceDetailByPOTypeResponseDetailType
	 */
	public function __construct($_OrderInfo = null)
	{
		parent::__construct(array('OrderInfo'=>$_OrderInfo));
	}
	/**
	 * Set OrderInfo
	 * @param OrderInfoType OrderInfo
	 * @return OrderInfoType
	 */
	public function setOrderInfo($_OrderInfo)
	{
		return ($this->OrderInfo = $_OrderInfo);
	}
	/**
	 * Get OrderInfo
	 * @return XWebInvoiceDetailByPOTypeOrderInfoType
	 */
	public function getOrderInfo()
	{
		return $this->OrderInfo;
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