<?php
/**
 * Class file for AmazonEc2TypeVolumeStatusItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeVolumeStatusItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeVolumeStatusItemType extends AmazonEc2WsdlClass
{
	/**
	 * The volumeId
	 * @var string
	 */
	public $volumeId;
	/**
	 * The availabilityZone
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The volumeStatus
	 * @var AmazonEc2TypeVolumeStatusInfoType
	 */
	public $volumeStatus;
	/**
	 * The eventsSet
	 * @var AmazonEc2TypeVolumeStatusEventsSetType
	 */
	public $eventsSet;
	/**
	 * The actionsSet
	 * @var AmazonEc2TypeVolumeStatusActionsSetType
	 */
	public $actionsSet;
	/**
	 * Constructor
	 * @param string volumeId
	 * @param string availabilityZone
	 * @param AmazonEc2TypeVolumeStatusInfoType volumeStatus
	 * @param AmazonEc2TypeVolumeStatusEventsSetType eventsSet
	 * @param AmazonEc2TypeVolumeStatusActionsSetType actionsSet
	 * @return AmazonEc2TypeVolumeStatusItemType
	 */
	public function __construct($_volumeId = null,$_availabilityZone = null,$_volumeStatus = null,$_eventsSet = null,$_actionsSet = null)
	{
		parent::__construct(array('volumeId'=>$_volumeId,'availabilityZone'=>$_availabilityZone,'volumeStatus'=>$_volumeStatus,'eventsSet'=>$_eventsSet,'actionsSet'=>$_actionsSet));
	}
	/**
	 * Set volumeId
	 * @param string volumeId
	 * @return string
	 */
	public function setVolumeId($_volumeId)
	{
		return ($this->volumeId = $_volumeId);
	}
	/**
	 * Get volumeId
	 * @return string
	 */
	public function getVolumeId()
	{
		return $this->volumeId;
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
	 * Set volumeStatus
	 * @param VolumeStatusInfoType volumeStatus
	 * @return VolumeStatusInfoType
	 */
	public function setVolumeStatus($_volumeStatus)
	{
		return ($this->volumeStatus = $_volumeStatus);
	}
	/**
	 * Get volumeStatus
	 * @return AmazonEc2TypeVolumeStatusInfoType
	 */
	public function getVolumeStatus()
	{
		return $this->volumeStatus;
	}
	/**
	 * Set eventsSet
	 * @param VolumeStatusEventsSetType eventsSet
	 * @return VolumeStatusEventsSetType
	 */
	public function setEventsSet($_eventsSet)
	{
		return ($this->eventsSet = $_eventsSet);
	}
	/**
	 * Get eventsSet
	 * @return AmazonEc2TypeVolumeStatusEventsSetType
	 */
	public function getEventsSet()
	{
		return $this->eventsSet;
	}
	/**
	 * Set actionsSet
	 * @param VolumeStatusActionsSetType actionsSet
	 * @return VolumeStatusActionsSetType
	 */
	public function setActionsSet($_actionsSet)
	{
		return ($this->actionsSet = $_actionsSet);
	}
	/**
	 * Get actionsSet
	 * @return AmazonEc2TypeVolumeStatusActionsSetType
	 */
	public function getActionsSet()
	{
		return $this->actionsSet;
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