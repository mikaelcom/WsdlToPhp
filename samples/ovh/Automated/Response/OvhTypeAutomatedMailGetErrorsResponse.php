<?php
/**
 * Class file for OvhTypeAutomatedMailGetErrorsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetErrorsResponse
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetErrorsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfAutomatedMailGetErrorsStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfAutomatedMailGetErrorsStructType return
	 * @return OvhTypeAutomatedMailGetErrorsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfAutomatedMailGetErrorsStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfAutomatedMailGetErrorsStructType return
	 * @return MyArrayOfAutomatedMailGetErrorsStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfAutomatedMailGetErrorsStructType
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