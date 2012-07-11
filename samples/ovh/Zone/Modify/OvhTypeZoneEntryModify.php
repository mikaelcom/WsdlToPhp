<?php
/**
 * Class file for OvhTypeZoneEntryModify
 * @date 02/07/2012
 */
/**
 * Class OvhTypeZoneEntryModify
 * @date 02/07/2012
 */
class OvhTypeZoneEntryModify extends OvhWsdlClass
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
	 * The fieldtype
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The target
	 * @var string
	 */
	public $target;
	/**
	 * The newTarget
	 * @var string
	 */
	public $newTarget;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string subdomain
	 * @param string fieldtype
	 * @param string target
	 * @param string newTarget
	 * @return OvhTypeZoneEntryModify
	 */
	public function __construct($_session = null,$_domain = null,$_subdomain = null,$_fieldtype = null,$_target = null,$_newTarget = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'fieldtype'=>$_fieldtype,'target'=>$_target,'newTarget'=>$_newTarget));
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
	 * Set fieldtype
	 * @param string fieldtype
	 * @return string
	 */
	public function setFieldtype($_fieldtype)
	{
		return ($this->fieldtype = $_fieldtype);
	}
	/**
	 * Get fieldtype
	 * @return string
	 */
	public function getFieldtype()
	{
		return $this->fieldtype;
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
	 * Set newTarget
	 * @param string newTarget
	 * @return string
	 */
	public function setNewTarget($_newTarget)
	{
		return ($this->newTarget = $_newTarget);
	}
	/**
	 * Get newTarget
	 * @return string
	 */
	public function getNewTarget()
	{
		return $this->newTarget;
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