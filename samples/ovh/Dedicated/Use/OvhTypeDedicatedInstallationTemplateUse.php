<?php
/**
 * Class file for OvhTypeDedicatedInstallationTemplateUse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedInstallationTemplateUse
 * @date 02/07/2012
 */
class OvhTypeDedicatedInstallationTemplateUse extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The template
	 * @var string
	 */
	public $template;
	/**
	 * Constructor
	 * @param string session
	 * @param string hostname
	 * @param string template
	 * @return OvhTypeDedicatedInstallationTemplateUse
	 */
	public function __construct($_session = null,$_hostname = null,$_template = null)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'template'=>$_template));
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
	 * Set hostname
	 * @param string hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get hostname
	 * @return string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set template
	 * @param string template
	 * @return string
	 */
	public function setTemplate($_template)
	{
		return ($this->template = $_template);
	}
	/**
	 * Get template
	 * @return string
	 */
	public function getTemplate()
	{
		return $this->template;
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