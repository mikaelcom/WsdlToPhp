<?php
/**
 * Class file for XWebCheckOutTypeLoadReceiptsByShopperPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadReceiptsByShopperPagedResponse
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadReceiptsByShopperPagedResponse extends XWebCheckOutWsdlClass
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
	 * @var anonymous74
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebCheckOutTypeOrder Order
	 * @param anonymous74 Total_Record_Count
	 * @return XWebCheckOutTypeLoadReceiptsByShopperPagedResponse
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
	 * @param anonymous74 Total_Record_Count
	 * @return anonymous74
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous74
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