<?php
/**
 * Class file for OvhTypeAccountAlertThresholdSet
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAccountAlertThresholdSet
 * @date 02/07/2012
 */
class OvhTypeAccountAlertThresholdSet extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The threshold
	 * @var int
	 */
	public $threshold;
	/**
	 * Constructor
	 * @param string session
	 * @param int threshold
	 * @return OvhTypeAccountAlertThresholdSet
	 */
	public function __construct($_session = null,$_threshold = null)
	{
		parent::__construct(array('session'=>$_session,'threshold'=>$_threshold));
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