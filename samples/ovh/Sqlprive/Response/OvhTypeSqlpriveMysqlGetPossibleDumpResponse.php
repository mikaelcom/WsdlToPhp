<?php
/**
 * Class file for OvhTypeSqlpriveMysqlGetPossibleDumpResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveMysqlGetPossibleDumpResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveMysqlGetPossibleDumpResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSqlpriveGetPossibleDumpStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSqlpriveGetPossibleDumpStructType return
	 * @return OvhTypeSqlpriveMysqlGetPossibleDumpResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSqlpriveGetPossibleDumpStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSqlpriveGetPossibleDumpStructType return
	 * @return MyArrayOfSqlpriveGetPossibleDumpStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSqlpriveGetPossibleDumpStructType
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