<?php
/**
 * Class file for XWebCheckOutTypeUpdateOrderRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeUpdateOrderRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeUpdateOrderRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebCheckOutTypeOrder
	 */
	public $Order;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeOrder Order
	 * @return XWebCheckOutTypeUpdateOrderRequest
	 */
	public function __construct($_Order)
	{
		parent::__construct(array('Order'=>$_Order));
	}
	/**
	 * Set Order
	 * @param Order Order
	 * @return Order
	 */
	public function setOrder($_Order)
	{
		return ($this->Order = $_Order);
	}
	/**
	 * Get Order
	 * @return XWebCheckOutTypeOrder
	 */
	public function getOrder()
	{
		return $this->Order;
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