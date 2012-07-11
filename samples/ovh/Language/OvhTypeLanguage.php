<?php
/**
 * Class file for OvhTypeLanguage
 * @date 02/07/2012
 */
/**
 * Class OvhTypeLanguage
 * @date 02/07/2012
 */
class OvhTypeLanguage extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * Constructor
	 * @param string session
	 * @param string language
	 * @return OvhTypeLanguage
	 */
	public function __construct($_session = null,$_language = null)
	{
		parent::__construct(array('session'=>$_session,'language'=>$_language));
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