<?php
/**
 * Class file for OvhTypeMultiDomainListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMultiDomainListResponse
 * @date 02/07/2012
 */
class OvhTypeMultiDomainListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfMultiDomainStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfMultiDomainStructType return
	 * @return OvhTypeMultiDomainListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfMultiDomainStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfMultiDomainStructType return
	 * @return MyArrayOfMultiDomainStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfMultiDomainStructType
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