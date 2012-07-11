<?php
/**
 * Class file for OvhTypeRpsMigrationTodo
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsMigrationTodo
 * @date 02/07/2012
 */
class OvhTypeRpsMigrationTodo extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The logicalRpsName
	 * @var string
	 */
	public $logicalRpsName;
	/**
	 * The physicalRpsTo
	 * @var string
	 */
	public $physicalRpsTo;
	/**
	 * Constructor
	 * @param string session
	 * @param string logicalRpsName
	 * @param string physicalRpsTo
	 * @return OvhTypeRpsMigrationTodo
	 */
	public function __construct($_session = null,$_logicalRpsName = null,$_physicalRpsTo = null)
	{
		parent::__construct(array('session'=>$_session,'logicalRpsName'=>$_logicalRpsName,'physicalRpsTo'=>$_physicalRpsTo));
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
	 * Set logicalRpsName
	 * @param string logicalRpsName
	 * @return string
	 */
	public function setLogicalRpsName($_logicalRpsName)
	{
		return ($this->logicalRpsName = $_logicalRpsName);
	}
	/**
	 * Get logicalRpsName
	 * @return string
	 */
	public function getLogicalRpsName()
	{
		return $this->logicalRpsName;
	}
	/**
	 * Set physicalRpsTo
	 * @param string physicalRpsTo
	 * @return string
	 */
	public function setPhysicalRpsTo($_physicalRpsTo)
	{
		return ($this->physicalRpsTo = $_physicalRpsTo);
	}
	/**
	 * Get physicalRpsTo
	 * @return string
	 */
	public function getPhysicalRpsTo()
	{
		return $this->physicalRpsTo;
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