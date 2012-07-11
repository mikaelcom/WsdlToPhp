<?php
/**
 * Class file for OvhTypeDomainOperationListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainOperationListResponse
 * @date 02/07/2012
 */
class OvhTypeDomainOperationListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfOperationStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfOperationStructType return
	 * @return OvhTypeDomainOperationListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfOperationStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfOperationStructType return
	 * @return MyArrayOfOperationStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfOperationStructType
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