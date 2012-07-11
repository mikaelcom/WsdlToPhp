<?php
/**
 * Class file for OvhTypeSubDomainStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSubDomainStruct
 * @date 02/07/2012
 */
class OvhTypeSubDomainStruct extends OvhWsdlClass
{
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor
	 * @param string subdomain
	 * @param string target
	 * @param string country
	 * @return OvhTypeSubDomainStruct
	 */
	public function __construct($_subdomain = null,$_target = null,$_country = null)
	{
		parent::__construct(array('subdomain'=>$_subdomain,'target'=>$_target,'country'=>$_country));
	}
	/**
	 * Set subdomain
	 * @param string subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get subdomain
	 * @return string
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set target
	 * @param string target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
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