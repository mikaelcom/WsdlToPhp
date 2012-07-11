<?php
/**
 * Class file for AmazonEc2TypeAuthorizeSecurityGroupEgressType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAuthorizeSecurityGroupEgressType
 * @date 10/07/2012
 */
class AmazonEc2TypeAuthorizeSecurityGroupEgressType extends AmazonEc2WsdlClass
{
	/**
	 * The groupId
	 * @var string
	 */
	public $groupId;
	/**
	 * The ipPermissions
	 * @var AmazonEc2TypeIpPermissionSetType
	 */
	public $ipPermissions;
	/**
	 * Constructor
	 * @param string groupId
	 * @param AmazonEc2TypeIpPermissionSetType ipPermissions
	 * @return AmazonEc2TypeAuthorizeSecurityGroupEgressType
	 */
	public function __construct($_groupId = null,$_ipPermissions = null)
	{
		parent::__construct(array('groupId'=>$_groupId,'ipPermissions'=>$_ipPermissions));
	}
	/**
	 * Set groupId
	 * @param string groupId
	 * @return string
	 */
	public function setGroupId($_groupId)
	{
		return ($this->groupId = $_groupId);
	}
	/**
	 * Get groupId
	 * @return string
	 */
	public function getGroupId()
	{
		return $this->groupId;
	}
	/**
	 * Set ipPermissions
	 * @param IpPermissionSetType ipPermissions
	 * @return IpPermissionSetType
	 */
	public function setIpPermissions($_ipPermissions)
	{
		return ($this->ipPermissions = $_ipPermissions);
	}
	/**
	 * Get ipPermissions
	 * @return AmazonEc2TypeIpPermissionSetType
	 */
	public function getIpPermissions()
	{
		return $this->ipPermissions;
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