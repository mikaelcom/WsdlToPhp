<?php
/**
 * Class file for OvhTypeDomainCheckResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainCheckResponse
 * @date 02/07/2012
 */
class OvhTypeDomainCheckResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDomainCheckStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDomainCheckStructType return
	 * @return OvhTypeDomainCheckResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDomainCheckStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDomainCheckStructType return
	 * @return MyArrayOfDomainCheckStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDomainCheckStructType
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