<?php
/**
 * Class file for OvhTypeTelephonyListReversableCallsFromNumberReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyListReversableCallsFromNumberReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyListReversableCallsFromNumberReturn extends OvhWsdlClass
{
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType
	 */
	public $list;
	/**
	 * Constructor
	 * @param int totalRecords
	 * @param OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType list
	 * @return OvhTypeTelephonyListReversableCallsFromNumberReturn
	 */
	public function __construct($_totalRecords = null,$_list = null)
	{
		parent::__construct(array('totalRecords'=>$_totalRecords,'list'=>new OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType($_list)));
	}
	/**
	 * Set totalRecords
	 * @param int totalRecords
	 * @return int
	 */
	public function setTotalRecords($_totalRecords)
	{
		return ($this->totalRecords = $_totalRecords);
	}
	/**
	 * Get totalRecords
	 * @return int
	 */
	public function getTotalRecords()
	{
		return $this->totalRecords;
	}
	/**
	 * Set list
	 * @param MyArrayOfTelephonyReversmentsDetailsStructType list
	 * @return MyArrayOfTelephonyReversmentsDetailsStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyReversmentsDetailsStructType
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