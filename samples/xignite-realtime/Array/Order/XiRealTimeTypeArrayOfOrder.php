<?php
/**
 * Class file for XiRealTimeTypeArrayOfOrder
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeArrayOfOrder
 * @date 08/07/2012
 */
class XiRealTimeTypeArrayOfOrder extends XiRealTimeWsdlClass
{
	/**
	 * The Order
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiRealTimeTypeOrder
	 */
	public $Order;
	/**
	 * Constructor
	 * @param XiRealTimeTypeOrder Order
	 * @return XiRealTimeTypeArrayOfOrder
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
	 * @return XiRealTimeTypeOrder
	 */
	public function getOrder()
	{
		return $this->Order;
	}
	/**
	 * Returns the current element
	 * @see XiRealTimeWsdlClass::current()
	 * @return XiRealTimeTypeOrder
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiRealTimeWsdlClass::item()
	 * @param int
	 * @return XiRealTimeTypeOrder
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::first()
	 * @return XiRealTimeTypeOrder
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::last()
	 * @return XiRealTimeTypeOrder
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiRealTimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiRealTimeTypeOrder
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Order'
	 */
	public function getAttributeName()
	{
		return 'Order';
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