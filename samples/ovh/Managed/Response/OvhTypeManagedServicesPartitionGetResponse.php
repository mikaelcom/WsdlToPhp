<?php
/**
 * Class file for OvhTypeManagedServicesPartitionGetResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeManagedServicesPartitionGetResponse
 * @date 02/07/2012
 */
class OvhTypeManagedServicesPartitionGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfManagedServicesPartitionStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfManagedServicesPartitionStructType return
	 * @return OvhTypeManagedServicesPartitionGetResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfManagedServicesPartitionStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfManagedServicesPartitionStructType return
	 * @return MyArrayOfManagedServicesPartitionStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfManagedServicesPartitionStructType
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