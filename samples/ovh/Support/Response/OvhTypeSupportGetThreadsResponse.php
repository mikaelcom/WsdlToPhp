<?php
/**
 * Class file for OvhTypeSupportGetThreadsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetThreadsResponse
 * @date 02/07/2012
 */
class OvhTypeSupportGetThreadsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSupportThreadDetailStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSupportThreadDetailStructType return
	 * @return OvhTypeSupportGetThreadsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSupportThreadDetailStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSupportThreadDetailStructType return
	 * @return MyArrayOfSupportThreadDetailStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSupportThreadDetailStructType
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