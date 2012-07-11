<?php
/**
 * Class file for OvhTypeNicModifyLanguage
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicModifyLanguage
 * @date 02/07/2012
 */
class OvhTypeNicModifyLanguage extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param string language
	 * @return OvhTypeNicModifyLanguage
	 */
	public function __construct($_session = null,$_nic = null,$_language = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'language'=>$_language));
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
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
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