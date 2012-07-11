<?php
/**
 * Class file for OvhTypeInfrastructureIpListGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeInfrastructureIpListGetResponse
 * @date 02/07/2012
 */
class OvhTypeInfrastructureIpListGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfInfrastructureIpStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfInfrastructureIpStructType return
	 * @return OvhTypeInfrastructureIpListGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfInfrastructureIpStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfInfrastructureIpStructType return
	 * @return MyArrayOfInfrastructureIpStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfInfrastructureIpStructType
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