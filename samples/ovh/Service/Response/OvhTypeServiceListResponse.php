<?php
/**
 * Class file for OvhTypeServiceListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceListResponse
 * @date 02/07/2012
 */
class OvhTypeServiceListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfServiceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfServiceStructType return
	 * @return OvhTypeServiceListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfServiceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfServiceStructType return
	 * @return MyArrayOfServiceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfServiceStructType
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