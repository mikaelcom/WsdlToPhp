<?php
/**
 * Class file for AmazonEc2TypeAvailabilityZoneItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAvailabilityZoneItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeAvailabilityZoneItemType extends AmazonEc2WsdlClass
{
	/**
	 * The zoneName
	 * @var string
	 */
	public $zoneName;
	/**
	 * The zoneState
	 * @var string
	 */
	public $zoneState;
	/**
	 * The regionName
	 * @var string
	 */
	public $regionName;
	/**
	 * The messageSet
	 * @var AmazonEc2TypeAvailabilityZoneMessageSetType
	 */
	public $messageSet;
	/**
	 * Constructor
	 * @param string zoneName
	 * @param string zoneState
	 * @param string regionName
	 * @param AmazonEc2TypeAvailabilityZoneMessageSetType messageSet
	 * @return AmazonEc2TypeAvailabilityZoneItemType
	 */
	public function __construct($_zoneName = null,$_zoneState = null,$_regionName = null,$_messageSet = null)
	{
		parent::__construct(array('zoneName'=>$_zoneName,'zoneState'=>$_zoneState,'regionName'=>$_regionName,'messageSet'=>$_messageSet));
	}
	/**
	 * Set zoneName
	 * @param string zoneName
	 * @return string
	 */
	public function setZoneName($_zoneName)
	{
		return ($this->zoneName = $_zoneName);
	}
	/**
	 * Get zoneName
	 * @return string
	 */
	public function getZoneName()
	{
		return $this->zoneName;
	}
	/**
	 * Set zoneState
	 * @param string zoneState
	 * @return string
	 */
	public function setZoneState($_zoneState)
	{
		return ($this->zoneState = $_zoneState);
	}
	/**
	 * Get zoneState
	 * @return string
	 */
	public function getZoneState()
	{
		return $this->zoneState;
	}
	/**
	 * Set regionName
	 * @param string regionName
	 * @return string
	 */
	public function setRegionName($_regionName)
	{
		return ($this->regionName = $_regionName);
	}
	/**
	 * Get regionName
	 * @return string
	 */
	public function getRegionName()
	{
		return $this->regionName;
	}
	/**
	 * Set messageSet
	 * @param AvailabilityZoneMessageSetType messageSet
	 * @return AvailabilityZoneMessageSetType
	 */
	public function setMessageSet($_messageSet)
	{
		return ($this->messageSet = $_messageSet);
	}
	/**
	 * Get messageSet
	 * @return AmazonEc2TypeAvailabilityZoneMessageSetType
	 */
	public function getMessageSet()
	{
		return $this->messageSet;
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