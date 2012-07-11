<?php
/**
 * Class file for OvhTypeServiceFreedomListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceFreedomListResponse
 * @date 02/07/2012
 */
class OvhTypeServiceFreedomListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfFreedomStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfFreedomStructType return
	 * @return OvhTypeServiceFreedomListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfFreedomStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfFreedomStructType return
	 * @return MyArrayOfFreedomStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfFreedomStructType
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