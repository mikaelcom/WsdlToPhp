<?php
/**
 * Class file for AmazonEc2TypeSpotPlacementRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeSpotPlacementRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypeSpotPlacementRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * The groupName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string availabilityZone
	 * @param string groupName
	 * @return AmazonEc2TypeSpotPlacementRequestType
	 */
	public function __construct($_availabilityZone = null,$_groupName = null)
	{
		parent::__construct(array('availabilityZone'=>$_availabilityZone,'groupName'=>$_groupName));
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
	 * Set groupName
	 * @param string groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Get groupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->groupName;
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