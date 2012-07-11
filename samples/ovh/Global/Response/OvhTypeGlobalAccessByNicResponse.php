<?php
/**
 * Class file for OvhTypeGlobalAccessByNicResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeGlobalAccessByNicResponse
 * @date 02/07/2012
 */
class OvhTypeGlobalAccessByNicResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfGlobalAccessStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfGlobalAccessStructType return
	 * @return OvhTypeGlobalAccessByNicResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfGlobalAccessStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfGlobalAccessStructType return
	 * @return MyArrayOfGlobalAccessStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfGlobalAccessStructType
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