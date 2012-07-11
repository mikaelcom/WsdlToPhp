<?php
/**
 * Class file for OvhTypeSupportGetNicDomainsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportGetNicDomainsResponse
 * @date 02/07/2012
 */
class OvhTypeSupportGetNicDomainsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfSupportDomainStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfSupportDomainStructType return
	 * @return OvhTypeSupportGetNicDomainsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfSupportDomainStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfSupportDomainStructType return
	 * @return MyArrayOfSupportDomainStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfSupportDomainStructType
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