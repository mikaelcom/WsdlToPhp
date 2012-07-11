<?php
/**
 * Class file for OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn extends OvhWsdlClass
{
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
	 */
	public $list;
	/**
	 * Constructor
	 * @param int totalRecords
	 * @param OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType list
	 * @return OvhTypeTelephonyAbbreviatedNumberListPaginatedReturn
	 */
	public function __construct($_totalRecords = null,$_list = null)
	{
		parent::__construct(array('totalRecords'=>$_totalRecords,'list'=>new OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType($_list)));
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
	 * @param MyArrayOfTelephonyAbbreviatedNumberStructType list
	 * @return MyArrayOfTelephonyAbbreviatedNumberStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyAbbreviatedNumberStructType
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