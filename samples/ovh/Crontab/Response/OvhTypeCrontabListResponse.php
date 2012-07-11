<?php
/**
 * Class file for OvhTypeCrontabListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabListResponse
 * @date 02/07/2012
 */
class OvhTypeCrontabListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfCrontabStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfCrontabStructType return
	 * @return OvhTypeCrontabListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfCrontabStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfCrontabStructType return
	 * @return MyArrayOfCrontabStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfCrontabStructType
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