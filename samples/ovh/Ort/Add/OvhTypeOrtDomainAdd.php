<?php
/**
 * Class file for OvhTypeOrtDomainAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeOrtDomainAdd
 * @date 02/07/2012
 */
class OvhTypeOrtDomainAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
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
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The overwrite
	 * @var int
	 */
	public $overwrite;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdomain
	 * @param string target
	 * @param string type
	 * @param int overwrite
	 * @return OvhTypeOrtDomainAdd
	 */
	public function __construct($_session = null,$_domain = null,$_subdomain = null,$_target = null,$_type = null,$_overwrite = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'target'=>$_target,'type'=>$_type,'overwrite'=>$_overwrite));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set overwrite
	 * @param int overwrite
	 * @return int
	 */
	public function setOverwrite($_overwrite)
	{
		return ($this->overwrite = $_overwrite);
	}
	/**
	 * Get overwrite
	 * @return int
	 */
	public function getOverwrite()
	{
		return $this->overwrite;
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