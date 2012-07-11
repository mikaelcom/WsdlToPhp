<?php
/**
 * Class file for OvhTypeServiceGroupListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupListResponse
 * @date 02/07/2012
 */
class OvhTypeServiceGroupListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfServiceGroupStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfServiceGroupStructType return
	 * @return OvhTypeServiceGroupListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfServiceGroupStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfServiceGroupStructType return
	 * @return MyArrayOfServiceGroupStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfServiceGroupStructType
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