<?php
/**
 * Class file for OvhTypeDomainWhoisObfuscatorListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainWhoisObfuscatorListResponse
 * @date 02/07/2012
 */
class OvhTypeDomainWhoisObfuscatorListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfDomainWhoisObfuscatorStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfDomainWhoisObfuscatorStructType return
	 * @return OvhTypeDomainWhoisObfuscatorListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfDomainWhoisObfuscatorStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfDomainWhoisObfuscatorStructType return
	 * @return MyArrayOfDomainWhoisObfuscatorStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfDomainWhoisObfuscatorStructType
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