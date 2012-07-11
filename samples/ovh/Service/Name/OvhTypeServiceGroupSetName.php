<?php
/**
 * Class file for OvhTypeServiceGroupSetName
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupSetName
 * @date 02/07/2012
 */
class OvhTypeServiceGroupSetName extends OvhWsdlClass
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
	 * The newName
	 * @var string
	 */
	public $newName;
	/**
	 * Constructor
	 * @param string session
	 * @param string name
	 * @param string newName
	 * @return OvhTypeServiceGroupSetName
	 */
	public function __construct($_session = null,$_name = null,$_newName = null)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'newName'=>$_newName));
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
	 * Set newName
	 * @param string newName
	 * @return string
	 */
	public function setNewName($_newName)
	{
		return ($this->newName = $_newName);
	}
	/**
	 * Get newName
	 * @return string
	 */
	public function getNewName()
	{
		return $this->newName;
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