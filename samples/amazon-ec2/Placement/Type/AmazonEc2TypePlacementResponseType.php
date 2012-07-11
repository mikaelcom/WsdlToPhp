<?php
/**
 * Class file for AmazonEc2TypePlacementResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePlacementResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypePlacementResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The availabilityZone
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
	 * The tenancy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $tenancy;
	/**
	 * Constructor
	 * @param string availabilityZone
	 * @param string groupName
	 * @param string tenancy
	 * @return AmazonEc2TypePlacementResponseType
	 */
	public function __construct($_availabilityZone = null,$_groupName = null,$_tenancy = null)
	{
		parent::__construct(array('availabilityZone'=>$_availabilityZone,'groupName'=>$_groupName,'tenancy'=>$_tenancy));
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
	 * Set tenancy
	 * @param string tenancy
	 * @return string
	 */
	public function setTenancy($_tenancy)
	{
		return ($this->tenancy = $_tenancy);
	}
	/**
	 * Get tenancy
	 * @return string
	 */
	public function getTenancy()
	{
		return $this->tenancy;
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