<?php
/**
 * Class file for OvhTypeLogsAccessStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeLogsAccessStruct
 * @date 02/07/2012
 */
class OvhTypeLogsAccessStruct extends OvhWsdlClass
{
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * Constructor
	 * @param string user
	 * @param string lastUpdate
	 * @return OvhTypeLogsAccessStruct
	 */
	public function __construct($_user = null,$_lastUpdate = null)
	{
		parent::__construct(array('user'=>$_user,'lastUpdate'=>$_lastUpdate));
	}
	/**
	 * Set user
	 * @param string user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get user
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set lastUpdate
	 * @param string lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Get lastUpdate
	 * @return string
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
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