<?php
/**
 * Class file for OvhTypeDomainCapabilitiesResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainCapabilitiesResponse
 * @date 02/07/2012
 */
class OvhTypeDomainCapabilitiesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDomainCapabilitiesReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDomainCapabilitiesReturn return
	 * @return OvhTypeDomainCapabilitiesResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param domainCapabilitiesReturn return
	 * @return domainCapabilitiesReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypedomainCapabilitiesReturn
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