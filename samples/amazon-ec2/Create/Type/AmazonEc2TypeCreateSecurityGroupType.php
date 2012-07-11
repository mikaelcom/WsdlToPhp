<?php
/**
 * Class file for AmazonEc2TypeCreateSecurityGroupType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateSecurityGroupType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateSecurityGroupType extends AmazonEc2WsdlClass
{
	/**
	 * The groupName
	 * @var string
	 */
	public $groupName;
	/**
	 * The groupDescription
	 * @var string
	 */
	public $groupDescription;
	/**
	 * The vpcId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $vpcId;
	/**
	 * Constructor
	 * @param string groupName
	 * @param string groupDescription
	 * @param string vpcId
	 * @return AmazonEc2TypeCreateSecurityGroupType
	 */
	public function __construct($_groupName = null,$_groupDescription = null,$_vpcId = null)
	{
		parent::__construct(array('groupName'=>$_groupName,'groupDescription'=>$_groupDescription,'vpcId'=>$_vpcId));
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
	 * Set groupDescription
	 * @param string groupDescription
	 * @return string
	 */
	public function setGroupDescription($_groupDescription)
	{
		return ($this->groupDescription = $_groupDescription);
	}
	/**
	 * Get groupDescription
	 * @return string
	 */
	public function getGroupDescription()
	{
		return $this->groupDescription;
	}
	/**
	 * Set vpcId
	 * @param string vpcId
	 * @return string
	 */
	public function setVpcId($_vpcId)
	{
		return ($this->vpcId = $_vpcId);
	}
	/**
	 * Get vpcId
	 * @return string
	 */
	public function getVpcId()
	{
		return $this->vpcId;
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