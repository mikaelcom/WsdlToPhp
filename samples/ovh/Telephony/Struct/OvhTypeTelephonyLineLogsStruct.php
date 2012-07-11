<?php
/**
 * Class file for OvhTypeTelephonyLineLogsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The list
	 * @var OvhTypeMyArrayOfTelephonyLineLogsListStructType
	 */
	public $list;
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * Constructor
	 * @param string number
	 * @param OvhTypeMyArrayOfTelephonyLineLogsListStructType list
	 * @param int totalRecords
	 * @return OvhTypeTelephonyLineLogsStruct
	 */
	public function __construct($_number = null,$_list = null,$_totalRecords = null)
	{
		parent::__construct(array('number'=>$_number,'list'=>new OvhTypeMyArrayOfTelephonyLineLogsListStructType($_list),'totalRecords'=>$_totalRecords));
	}
	/**
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set list
	 * @param MyArrayOfTelephonyLineLogsListStructType list
	 * @return MyArrayOfTelephonyLineLogsListStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get list
	 * @return OvhTypeMyArrayOfTelephonyLineLogsListStructType
	 */
	public function getList()
	{
		return $this->list;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>