<?php
/**
 * Class file for AmazonEc2TypeDeletePlacementGroupType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeDeletePlacementGroupType
 * @date 10/07/2012
 */
class AmazonEc2TypeDeletePlacementGroupType extends AmazonEc2WsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor
	 * @param string groupName
	 * @return AmazonEc2TypeDeletePlacementGroupType
	 */
	public function __construct($_groupName = null)
	{
		parent::__construct(array('groupName'=>$_groupName));
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