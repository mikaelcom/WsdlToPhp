<?php
/**
 * Class file for OvhTypeLogsAccessListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeLogsAccessListResponse
 * @date 02/07/2012
 */
class OvhTypeLogsAccessListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfLogsAccessStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfLogsAccessStructType return
	 * @return OvhTypeLogsAccessListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfLogsAccessStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfLogsAccessStructType return
	 * @return MyArrayOfLogsAccessStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfLogsAccessStructType
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