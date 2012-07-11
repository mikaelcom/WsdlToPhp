<?php
/**
 * Class file for AmazonEc2TypeAllocateAddressType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAllocateAddressType
 * @date 10/07/2012
 */
class AmazonEc2TypeAllocateAddressType extends AmazonEc2WsdlClass
{
	/**
	 * The domain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $domain;
	/**
	 * Constructor
	 * @param string domain
	 * @return AmazonEc2TypeAllocateAddressType
	 */
	public function __construct($_domain = null)
	{
		parent::__construct(array('domain'=>$_domain));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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