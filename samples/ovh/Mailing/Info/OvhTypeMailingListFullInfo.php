<?php
/**
 * Class file for OvhTypeMailingListFullInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMailingListFullInfo
 * @date 02/07/2012
 */
class OvhTypeMailingListFullInfo extends OvhWsdlClass
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
	 * The ml
	 * @var string
	 */
	public $ml;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string ml
	 * @return OvhTypeMailingListFullInfo
	 */
	public function __construct($_session = null,$_domain = null,$_ml = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'ml'=>$_ml));
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
	 * Set ml
	 * @param string ml
	 * @return string
	 */
	public function setMl($_ml)
	{
		return ($this->ml = $_ml);
	}
	/**
	 * Get ml
	 * @return string
	 */
	public function getMl()
	{
		return $this->ml;
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