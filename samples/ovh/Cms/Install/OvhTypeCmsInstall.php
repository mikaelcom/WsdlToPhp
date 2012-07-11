<?php
/**
 * Class file for OvhTypeCmsInstall
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCmsInstall
 * @date 02/07/2012
 */
class OvhTypeCmsInstall extends OvhWsdlClass
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
	 * The cmsName
	 * @var string
	 */
	public $cmsName;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string cmsName
	 * @param string path
	 * @param string language
	 * @return OvhTypeCmsInstall
	 */
	public function __construct($_session = null,$_domain = null,$_cmsName = null,$_path = null,$_language = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'cmsName'=>$_cmsName,'path'=>$_path,'language'=>$_language));
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
	 * Set cmsName
	 * @param string cmsName
	 * @return string
	 */
	public function setCmsName($_cmsName)
	{
		return ($this->cmsName = $_cmsName);
	}
	/**
	 * Get cmsName
	 * @return string
	 */
	public function getCmsName()
	{
		return $this->cmsName;
	}
	/**
	 * Set path
	 * @param string path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get path
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
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