<?php
/**
 * Class file for OvhTypeSubDomainListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSubDomainListResponse
 * @date 02/07/2012
 */
class OvhTypeSubDomainListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSubDomainStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSubDomainStructType return
	 * @return OvhTypeSubDomainListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSubDomainStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSubDomainStructType return
	 * @return MyArrayOfSubDomainStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSubDomainStructType
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