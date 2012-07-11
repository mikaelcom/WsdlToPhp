<?php
/**
 * Class file for XWebCheckOutTypeLoadBasketsResponse
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadBasketsResponse
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadBasketsResponse extends XWebCheckOutWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebCheckOutTypeOrder
	 */
	public $Order;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeOrder Order
	 * @return XWebCheckOutTypeLoadBasketsResponse
	 */
	public function __construct($_Order = null)
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