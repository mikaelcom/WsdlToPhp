<?php
/**
 * Class file for OvhTypeDomainDnsGetOvhDefaultResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainDnsGetOvhDefaultResponse
 * @date 02/07/2012
 */
class OvhTypeDomainDnsGetOvhDefaultResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfNsStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfNsStructType return
	 * @return OvhTypeDomainDnsGetOvhDefaultResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfNsStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfNsStructType return
	 * @return MyArrayOfNsStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfNsStructType
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