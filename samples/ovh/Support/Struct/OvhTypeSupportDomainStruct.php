<?php
/**
 * Class file for OvhTypeSupportDomainStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportDomainStruct
 * @date 02/07/2012
 */
class OvhTypeSupportDomainStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * Constructor
	 * @param string domain
	 * @return OvhTypeSupportDomainStruct
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