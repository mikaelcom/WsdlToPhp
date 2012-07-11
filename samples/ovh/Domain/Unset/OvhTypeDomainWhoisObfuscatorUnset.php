<?php
/**
 * Class file for OvhTypeDomainWhoisObfuscatorUnset
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainWhoisObfuscatorUnset
 * @date 02/07/2012
 */
class OvhTypeDomainWhoisObfuscatorUnset extends OvhWsdlClass
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
	 * The field
	 * @var string
	 */
	public $field;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string field
	 * @return OvhTypeDomainWhoisObfuscatorUnset
	 */
	public function __construct($_session = null,$_domain = null,$_field = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'field'=>$_field));
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
	 * Set field
	 * @param string field
	 * @return string
	 */
	public function setField($_field)
	{
		return ($this->field = $_field);
	}
	/**
	 * Get field
	 * @return string
	 */
	public function getField()
	{
		return $this->field;
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