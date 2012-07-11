<?php
/**
 * Class file for OvhTypeEmailRedirectionStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeEmailRedirectionStruct
 * @date 02/07/2012
 */
class OvhTypeEmailRedirectionStruct extends OvhWsdlClass
{
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The local
	 * @var string
	 */
	public $local;
	/**
	 * The subdomain
	 * @var string
	 */
	public $subdomain;
	/**
	 * The dnsRedirection
	 * @var boolean
	 */
	public $dnsRedirection;
	/**
	 * Constructor
	 * @param string target
	 * @param string local
	 * @param string subdomain
	 * @param boolean dnsRedirection
	 * @return OvhTypeEmailRedirectionStruct
	 */
	public function __construct($_target = null,$_local = null,$_subdomain = null,$_dnsRedirection = null)
	{
		parent::__construct(array('target'=>$_target,'local'=>$_local,'subdomain'=>$_subdomain,'dnsRedirection'=>$_dnsRedirection));
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
	 * Set local
	 * @param string local
	 * @return string
	 */
	public function setLocal($_local)
	{
		return ($this->local = $_local);
	}
	/**
	 * Get local
	 * @return string
	 */
	public function getLocal()
	{
		return $this->local;
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
	 * Set dnsRedirection
	 * @param boolean dnsRedirection
	 * @return boolean
	 */
	public function setDnsRedirection($_dnsRedirection)
	{
		return ($this->dnsRedirection = $_dnsRedirection);
	}
	/**
	 * Get dnsRedirection
	 * @return boolean
	 */
	public function getDnsRedirection()
	{
		return $this->dnsRedirection;
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