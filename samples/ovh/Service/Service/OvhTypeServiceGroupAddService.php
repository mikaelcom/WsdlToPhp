<?php
/**
 * Class file for OvhTypeServiceGroupAddService
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupAddService
 * @date 02/07/2012
 */
class OvhTypeServiceGroupAddService extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The component
	 * @var string
	 */
	public $component;
	/**
	 * Constructor
	 * @param string session
	 * @param string name
	 * @param string service
	 * @param string component
	 * @return OvhTypeServiceGroupAddService
	 */
	public function __construct($_session = null,$_name = null,$_service = null,$_component = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'service'=>$_service,'component'=>$_component));
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
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set service
	 * @param string service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get service
	 * @return string
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set component
	 * @param string component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get component
	 * @return string
	 */
	public function getComponent()
	{
		return $this->component;
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