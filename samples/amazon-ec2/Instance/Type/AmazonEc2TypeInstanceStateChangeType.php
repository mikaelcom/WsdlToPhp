<?php
/**
 * Class file for AmazonEc2TypeInstanceStateChangeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStateChangeType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStateChangeType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The currentState
	 * @var AmazonEc2TypeInstanceStateType
	 */
	public $currentState;
	/**
	 * The previousState
	 * @var AmazonEc2TypeInstanceStateType
	 */
	public $previousState;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param AmazonEc2TypeInstanceStateType currentState
	 * @param AmazonEc2TypeInstanceStateType previousState
	 * @return AmazonEc2TypeInstanceStateChangeType
	 */
	public function __construct($_instanceId = null,$_currentState = null,$_previousState = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'currentState'=>$_currentState,'previousState'=>$_previousState));
	}
	/**
	 * Set instanceId
	 * @param string instanceId
	 * @return string
	 */
	public function setInstanceId($_instanceId)
	{
		return ($this->instanceId = $_instanceId);
	}
	/**
	 * Get instanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->instanceId;
	}
	/**
	 * Set currentState
	 * @param InstanceStateType currentState
	 * @return InstanceStateType
	 */
	public function setCurrentState($_currentState)
	{
		return ($this->currentState = $_currentState);
	}
	/**
	 * Get currentState
	 * @return AmazonEc2TypeInstanceStateType
	 */
	public function getCurrentState()
	{
		return $this->currentState;
	}
	/**
	 * Set previousState
	 * @param InstanceStateType previousState
	 * @return InstanceStateType
	 */
	public function setPreviousState($_previousState)
	{
		return ($this->previousState = $_previousState);
	}
	/**
	 * Get previousState
	 * @return AmazonEc2TypeInstanceStateType
	 */
	public function getPreviousState()
	{
		return $this->previousState;
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