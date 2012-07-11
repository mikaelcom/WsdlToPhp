<?php
/**
 * Class file for OvhTypeResponderEmailAdd
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResponderEmailAdd
 * @date 02/07/2012
 */
class OvhTypeResponderEmailAdd extends OvhWsdlClass
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
	 * The content
	 * @var string
	 */
	public $content;
	/**
	 * The delivered_to
	 * @var string
	 */
	public $delivered_to;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * Constructor
	 * @param string session
	 * @param string domain
	 * @param string responder
	 * @param string content
	 * @param string delivered_to
	 * @param string nic
	 * @return OvhTypeResponderEmailAdd
	 */
	public function __construct($_session = null,$_domain = null,$_responder = null,$_content = null,$_delivered_to = null,$_nic = null)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'responder'=>$_responder,'content'=>$_content,'delivered_to'=>$_delivered_to,'nic'=>$_nic));
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
	 * Set content
	 * @param string content
	 * @return string
	 */
	public function setContent($_content)
	{
		return ($this->content = $_content);
	}
	/**
	 * Get content
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}
	/**
	 * Set delivered_to
	 * @param string delivered_to
	 * @return string
	 */
	public function setDelivered_to($_delivered_to)
	{
		return ($this->delivered_to = $_delivered_to);
	}
	/**
	 * Get delivered_to
	 * @return string
	 */
	public function getDelivered_to()
	{
		return $this->delivered_to;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>