<?php
/**
 * Class file for OvhTypeResponderEmailDel
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResponderEmailDel
 * @date 02/07/2012
 */
class OvhTypeResponderEmailDel extends OvhWsdlClass
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
	 * The responder
	 * @var string
	 */
	public $responder;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string responder
	 * @return OvhTypeResponderEmailDel
	 */
	public function __construct($_session = null,$_domain = null,$_responder = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'responder'=>$_responder));
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
	 * Set responder
	 * @param string responder
	 * @return string
	 */
	public function setResponder($_responder)
	{
		return ($this->responder = $_responder);
	}
	/**
	 * Get responder
	 * @return string
	 */
	public function getResponder()
	{
		return $this->responder;
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