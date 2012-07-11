<?php
/**
 * Class file for OvhTypeServiceGroupInfo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupInfo
 * @date 02/07/2012
 */
class OvhTypeServiceGroupInfo extends OvhWsdlClass
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
	 * Constructor
	 * @param string session
	 * @param string name
	 * @return OvhTypeServiceGroupInfo
	 */
	public function __construct($_session = null,$_name = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>