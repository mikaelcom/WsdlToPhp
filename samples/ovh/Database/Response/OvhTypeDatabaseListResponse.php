<?php
/**
 * Class file for OvhTypeDatabaseListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDatabaseListResponse
 * @date 02/07/2012
 */
class OvhTypeDatabaseListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDatabaseStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDatabaseStructType return
	 * @return OvhTypeDatabaseListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDatabaseStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDatabaseStructType return
	 * @return MyArrayOfDatabaseStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDatabaseStructType
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