<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSourceSecurityGroup
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSourceSecurityGroup
 * Documentation : <p> This data type is used as a response element in the <a>DescribeLoadBalancers</a> action. For information about Elastic Load Balancing security groups, go to <a href="http://docs.amazonwebservices.com/ElasticLoadBalancing/latest/DeveloperGuide/elb-security-features.html#using-elb-security-groups">Using Security Groups With Elastic Load Balancing</a> in the <i>Elastic Load Balancing Developer Guide</i>. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSourceSecurityGroup extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The OwnerAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Owner of the source security group. Use this value for the <code>--source-group-user</code> parameter of the <code>ec2-authorize</code> command in the Amazon EC2 command line tool. </p>
	 * @var string
	 */
	public $OwnerAlias;
	/**
	 * The GroupName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Name of the source security group. Use this value for the <code>--source-group</code> parameter of the <code>ec2-authorize</code> command in the Amazon EC2 command line tool. </p>
	 * @var string
	 */
	public $GroupName;
	/**
	 * Constructor
	 * @param string OwnerAlias
	 * @param string GroupName
	 * @return AmazonElasticLoadBalancingTypeSourceSecurityGroup
	 */
	public function __construct($_OwnerAlias = null,$_GroupName = null)
	{
		parent::__construct(array('OwnerAlias'=>$_OwnerAlias,'GroupName'=>$_GroupName));
	}
	/**
	 * Set OwnerAlias
	 * @param string OwnerAlias
	 * @return string
	 */
	public function setOwnerAlias($_OwnerAlias)
	{
		return ($this->OwnerAlias = $_OwnerAlias);
	}
	/**
	 * Get OwnerAlias
	 * @return string
	 */
	public function getOwnerAlias()
	{
		return $this->OwnerAlias;
	}
	/**
	 * Set GroupName
	 * @param string GroupName
	 * @return string
	 */
	public function setGroupName($_GroupName)
	{
		return ($this->GroupName = $_GroupName);
	}
	/**
	 * Get GroupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->GroupName;
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