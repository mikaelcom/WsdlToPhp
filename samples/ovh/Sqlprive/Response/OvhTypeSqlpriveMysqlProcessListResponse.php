<?php
/**
 * Class file for OvhTypeSqlpriveMysqlProcessListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlProcessListResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlProcessListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSqlpriveMysqlProcessStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSqlpriveMysqlProcessStructType return
	 * @return OvhTypeSqlpriveMysqlProcessListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSqlpriveMysqlProcessStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSqlpriveMysqlProcessStructType return
	 * @return MyArrayOfSqlpriveMysqlProcessStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSqlpriveMysqlProcessStructType
	 */
	public function getReturn()
	{
		return $this->return;
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