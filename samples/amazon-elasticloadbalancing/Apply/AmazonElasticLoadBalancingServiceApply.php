<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceApply
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceApply
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceApply extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call ApplySecurityGroupsToLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Associates one or more security groups with your LoadBalancer in VPC. The provided security group IDs will override any currently applied security groups. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer::getSecurityGroups()
	 * @param AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer ApplySecurityGroupsToLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse
	 */
	public function ApplySecurityGroupsToLoadBalancer(AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer $_AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ApplySecurityGroupsToLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer->getLoadBalancerName(),'SecurityGroups'=>$_AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancer->getSecurityGroups())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return AmazonElasticLoadBalancingTypeApplySecurityGroupsToLoadBalancerResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>