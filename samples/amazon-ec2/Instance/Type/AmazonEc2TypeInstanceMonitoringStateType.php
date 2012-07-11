<?php
/**
 * Class file for AmazonEc2TypeInstanceMonitoringStateType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceMonitoringStateType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceMonitoringStateType extends AmazonEc2WsdlClass
{
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string state
	 * @return AmazonEc2TypeInstanceMonitoringStateType
	 */
	public function __construct($_state = null)
	{
		parent::__construct(array('state'=>$_state));
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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