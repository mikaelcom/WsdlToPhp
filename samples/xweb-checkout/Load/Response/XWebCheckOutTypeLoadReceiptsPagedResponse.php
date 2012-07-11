<?php
/**
 * Class file for XWebCheckOutTypeLoadReceiptsPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadReceiptsPagedResponse
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadReceiptsPagedResponse extends XWebCheckOutWsdlClass
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
	 * The Total_Record_Count
	 * @var anonymous69
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeOrder Order
	 * @param anonymous69 Total_Record_Count
	 * @return XWebCheckOutTypeLoadReceiptsPagedResponse
	 */
	public function __construct($_Order = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Order'=>$_Order,'Total_Record_Count'=>$_Total_Record_Count));
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
	 * Set Total_Record_Count
	 * @param anonymous69 Total_Record_Count
	 * @return anonymous69
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous69
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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