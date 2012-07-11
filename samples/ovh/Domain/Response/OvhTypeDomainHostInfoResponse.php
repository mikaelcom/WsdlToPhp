<?php
/**
 * Class file for OvhTypeDomainHostInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainHostInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDomainHostInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDomainHostInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDomainHostInfoReturn return
	 * @return OvhTypeDomainHostInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param domainHostInfoReturn return
	 * @return domainHostInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypedomainHostInfoReturn
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