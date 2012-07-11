<?php
/**
 * Class file for OvhTypeDomainWhoisObfuscatorInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainWhoisObfuscatorInfoResponse
 * @date 02/07/2012
 */
class OvhTypeDomainWhoisObfuscatorInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeDomainWhoisObfuscatorStruct
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeDomainWhoisObfuscatorStruct return
	 * @return OvhTypeDomainWhoisObfuscatorInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param domainWhoisObfuscatorStruct return
	 * @return domainWhoisObfuscatorStruct
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypedomainWhoisObfuscatorStruct
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