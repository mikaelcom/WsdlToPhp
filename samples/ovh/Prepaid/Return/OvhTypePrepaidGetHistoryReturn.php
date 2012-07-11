<?php
/**
 * Class file for OvhTypePrepaidGetHistoryReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidGetHistoryReturn
 * @date 02/07/2012
 */
class OvhTypePrepaidGetHistoryReturn extends OvhWsdlClass
{
	/**
	 * The page
	 * @var int
	 */
	public $page;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The start
	 * @var int
	 */
	public $start;
	/**
	 * The end
	 * @var int
	 */
	public $end;
	/**
	 * The operations
	 * @var OvhTypeMyArrayOfPrepaidOperationStructType
	 */
	public $operations;
	/**
	 * Constructor
	 * @param int page
	 * @param int total
	 * @param int start
	 * @param int end
	 * @param OvhTypeMyArrayOfPrepaidOperationStructType operations
	 * @return OvhTypePrepaidGetHistoryReturn
	 */
	public function __construct($_page = null,$_total = null,$_start = null,$_end = null,$_operations = null)
	{
		parent::__construct(array('page'=>$_page,'total'=>$_total,'start'=>$_start,'end'=>$_end,'operations'=>new OvhTypeMyArrayOfPrepaidOperationStructType($_operations)));
	}
	/**
	 * Set page
	 * @param int page
	 * @return int
	 */
	public function setPage($_page)
	{
		return ($this->page = $_page);
	}
	/**
	 * Get page
	 * @return int
	 */
	public function getPage()
	{
		return $this->page;
	}
	/**
	 * Set total
	 * @param int total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set start
	 * @param int start
	 * @return int
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get start
	 * @return int
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set end
	 * @param int end
	 * @return int
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Get end
	 * @return int
	 */
	public function getEnd()
	{
		return $this->end;
	}
	/**
	 * Set operations
	 * @param MyArrayOfPrepaidOperationStructType operations
	 * @return MyArrayOfPrepaidOperationStructType
	 */
	public function setOperations($_operations)
	{
		return ($this->operations = $_operations);
	}
	/**
	 * Get operations
	 * @return OvhTypeMyArrayOfPrepaidOperationStructType
	 */
	public function getOperations()
	{
		return $this->operations;
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