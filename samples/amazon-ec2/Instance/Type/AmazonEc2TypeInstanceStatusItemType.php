<?php
/**
 * Class file for AmazonEc2TypeInstanceStatusItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStatusItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStatusItemType extends AmazonEc2WsdlClass
{
	/**
	 * The instanceId
	 * @var string
	 */
	public $instanceId;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The eventsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonEc2TypeInstanceStatusEventsSetType
	 */
	public $eventsSet;
	/**
	 * The instanceState
	 * @var AmazonEc2TypeInstanceStateType
	 */
	public $instanceState;
	/**
	 * The systemStatus
	 * @var AmazonEc2TypeInstanceStatusType
	 */
	public $systemStatus;
	/**
	 * The instanceStatus
	 * @var AmazonEc2TypeInstanceStatusType
	 */
	public $instanceStatus;
	/**
	 * Constructor
	 * @param string instanceId
	 * @param string availabilityZone
	 * @param AmazonEc2TypeInstanceStatusEventsSetType eventsSet
	 * @param AmazonEc2TypeInstanceStateType instanceState
	 * @param AmazonEc2TypeInstanceStatusType systemStatus
	 * @param AmazonEc2TypeInstanceStatusType instanceStatus
	 * @return AmazonEc2TypeInstanceStatusItemType
	 */
	public function __construct($_instanceId = null,$_availabilityZone = null,$_eventsSet = null,$_instanceState = null,$_systemStatus = null,$_instanceStatus = null)
	{
		parent::__construct(array('instanceId'=>$_instanceId,'availabilityZone'=>$_availabilityZone,'eventsSet'=>$_eventsSet,'instanceState'=>$_instanceState,'systemStatus'=>$_systemStatus,'instanceStatus'=>$_instanceStatus));
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
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
	}
	/**
	 * Set eventsSet
	 * @param InstanceStatusEventsSetType eventsSet
	 * @return InstanceStatusEventsSetType
	 */
	public function setEventsSet($_eventsSet)
	{
		return ($this->eventsSet = $_eventsSet);
	}
	/**
	 * Get eventsSet
	 * @return AmazonEc2TypeInstanceStatusEventsSetType
	 */
	public function getEventsSet()
	{
		return $this->eventsSet;
	}
	/**
	 * Set instanceState
	 * @param InstanceStateType instanceState
	 * @return InstanceStateType
	 */
	public function setInstanceState($_instanceState)
	{
		return ($this->instanceState = $_instanceState);
	}
	/**
	 * Get instanceState
	 * @return AmazonEc2TypeInstanceStateType
	 */
	public function getInstanceState()
	{
		return $this->instanceState;
	}
	/**
	 * Set systemStatus
	 * @param InstanceStatusType systemStatus
	 * @return InstanceStatusType
	 */
	public function setSystemStatus($_systemStatus)
	{
		return ($this->systemStatus = $_systemStatus);
	}
	/**
	 * Get systemStatus
	 * @return AmazonEc2TypeInstanceStatusType
	 */
	public function getSystemStatus()
	{
		return $this->systemStatus;
	}
	/**
	 * Set instanceStatus
	 * @param InstanceStatusType instanceStatus
	 * @return InstanceStatusType
	 */
	public function setInstanceStatus($_instanceStatus)
	{
		return ($this->instanceStatus = $_instanceStatus);
	}
	/**
	 * Get instanceStatus
	 * @return AmazonEc2TypeInstanceStatusType
	 */
	public function getInstanceStatus()
	{
		return $this->instanceStatus;
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