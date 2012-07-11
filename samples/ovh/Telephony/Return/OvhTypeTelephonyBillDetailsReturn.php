<?php
/**
 * Class file for OvhTypeTelephonyBillDetailsReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyBillDetailsReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyBillDetailsReturn extends OvhWsdlClass
{
	/**
	 * The fromDate
	 * @var string
	 */
	public $fromDate;
	/**
	 * The toDate
	 * @var string
	 */
	public $toDate;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyCallStructType
	 */
	public $list;
	/**
	 * Constructor
	 * @param string fromDate
	 * @param string toDate
	 * @param OvhTypeMyArrayOfTelephonyCallStructType list
	 * @return OvhTypeTelephonyBillDetailsReturn
	 */
	public function __construct($_fromDate = null,$_toDate = null,$_list = null)
	{
		parent::__construct(array('fromDate'=>$_fromDate,'toDate'=>$_toDate,'list'=>new OvhTypeMyArrayOfTelephonyCallStructType($_list)));
	}
	/**
	 * Set fromDate
	 * @param string fromDate
	 * @return string
	 */
	public function setFromDate($_fromDate)
	{
		return ($this->fromDate = $_fromDate);
	}
	/**
	 * Get fromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->fromDate;
	}
	/**
	 * Set toDate
	 * @param string toDate
	 * @return string
	 */
	public function setToDate($_toDate)
	{
		return ($this->toDate = $_toDate);
	}
	/**
	 * Get toDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->toDate;
	}
	/**
	 * Set list
	 * @param MyArrayOfTelephonyCallStructType list
	 * @return MyArrayOfTelephonyCallStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyCallStructType
	 */
	public function getList()
	{
		return $this->list;
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