<?php
/**
 * Class file for OvhTypeSqlpriveCronGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSqlpriveCronGetResponse
 * @date 02/07/2012
 */
class OvhTypeSqlpriveCronGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSqlpriveCronStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSqlpriveCronStructType return
	 * @return OvhTypeSqlpriveCronGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSqlpriveCronStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSqlpriveCronStructType return
	 * @return MyArrayOfSqlpriveCronStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSqlpriveCronStructType
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