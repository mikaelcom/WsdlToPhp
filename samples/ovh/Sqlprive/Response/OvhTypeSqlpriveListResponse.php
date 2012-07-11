<?php
/**
 * Class file for OvhTypeSqlpriveListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveListResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSqlpriveStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSqlpriveStructType return
	 * @return OvhTypeSqlpriveListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSqlpriveStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSqlpriveStructType return
	 * @return MyArrayOfSqlpriveStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSqlpriveStructType
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