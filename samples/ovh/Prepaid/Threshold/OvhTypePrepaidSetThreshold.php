<?php
/**
 * Class file for OvhTypePrepaidSetThreshold
 * @date 02/07/2012
 */
/**
 * Class OvhTypePrepaidSetThreshold
 * @date 02/07/2012
 */
class OvhTypePrepaidSetThreshold extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The threshold
	 * @var int
	 */
	public $threshold;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param int threshold
	 * @return OvhTypePrepaidSetThreshold
	 */
	public function __construct($_session = null,$_nic = null,$_threshold = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'threshold'=>$_threshold));
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
	 * Set threshold
	 * @param int threshold
	 * @return int
	 */
	public function setThreshold($_threshold)
	{
		return ($this->threshold = $_threshold);
	}
	/**
	 * Get threshold
	 * @return int
	 */
	public function getThreshold()
	{
		return $this->threshold;
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