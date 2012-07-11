<?php
/**
 * Class file for OvhTypeDomainInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDomainInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDomainInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDomainInfoReturn return
	 * @return OvhTypeDomainInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param domainInfoReturn return
	 * @return domainInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypedomainInfoReturn
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