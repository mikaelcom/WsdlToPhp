<?php
/**
 * Class file for AmazonEc2TypeCreatePlacementGroupType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreatePlacementGroupType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreatePlacementGroupType extends AmazonEc2WsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The strategy
	 * @var string
	 */
	public $strategy;
	/**
	 * Constructor
	 * @param string groupName
	 * @param string strategy
	 * @return AmazonEc2TypeCreatePlacementGroupType
	 */
	public function __construct($_groupName = null,$_strategy = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'strategy'=>$_strategy));
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
	 * Set strategy
	 * @param string strategy
	 * @return string
	 */
	public function setStrategy($_strategy)
	{
		return ($this->strategy = $_strategy);
	}
	/**
	 * Get strategy
	 * @return string
	 */
	public function getStrategy()
	{
		return $this->strategy;
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