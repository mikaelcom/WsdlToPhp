<?php
/**
 * Class file for AmazonEc2TypePlacementGroupInfoType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypePlacementGroupInfoType
 * @date 10/07/2012
 */
class AmazonEc2TypePlacementGroupInfoType extends AmazonEc2WsdlClass
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
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param string groupName
	 * @param string strategy
	 * @param string state
	 * @return AmazonEc2TypePlacementGroupInfoType
	 */
	public function __construct($_groupName = null,$_strategy = null,$_state = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'strategy'=>$_strategy,'state'=>$_state));
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