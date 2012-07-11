<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceDescribe
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceDescribe
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceDescribe extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call DescribeLoadBalancerPolicyTypes
	 * Meta informations :
	 * 	- documentation : <p> Returns meta-information on the specified LoadBalancer policies defined by the Elastic Load Balancing service. The policy types that are returned from this action can be used in a <a>CreateLoadBalancerPolicy</a> action to instantiate specific policy configurations that will be applied to an Elastic LoadBalancer. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes::getPolicyTypeNames()
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes DescribeLoadBalancerPolicyTypes
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypesResponse
	 */
	public function DescribeLoadBalancerPolicyTypes(AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes $_AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeLoadBalancerPolicyTypes(array('PolicyTypeNames'=>$_AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicyTypes->getPolicyTypeNames())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeLoadBalancerPolicies
	 * Meta informations :
	 * 	- documentation : <p>Returns detailed descriptions of the policies. If you specify a LoadBalancer name, the operation returns either the descriptions of the specified policies, or descriptions of all the policies created for the LoadBalancer. If you don't specify a LoadBalancer name, the operation returns descriptions of the specified sample policies, or descriptions of all the sample policies. The names of the sample policies have the <code>ELBSample-</code> prefix. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies::getPolicyNames()
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies DescribeLoadBalancerPolicies
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancerPoliciesResponse
	 */
	public function DescribeLoadBalancerPolicies(AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies $_AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeLoadBalancerPolicies(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies->getLoadBalancerName(),'PolicyNames'=>$_AmazonElasticLoadBalancingTypeDescribeLoadBalancerPolicies->getPolicyNames())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeInstanceHealth
	 * Meta informations :
	 * 	- documentation : <p> Returns the current state of the instances of the specified LoadBalancer. If no instances are specified, the state of all the instances for the LoadBalancer is returned. </p> <note> The client must have created the specified input LoadBalancer in order to retrieve this information; the client must provide the same account credentials as those that were used to create the LoadBalancer. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDescribeInstanceHealth::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeDescribeInstanceHealth::getInstances()
	 * @param AmazonElasticLoadBalancingTypeDescribeInstanceHealth DescribeInstanceHealth
	 * @return AmazonElasticLoadBalancingTypeDescribeInstanceHealthResponse
	 */
	public function DescribeInstanceHealth(AmazonElasticLoadBalancingTypeDescribeInstanceHealth $_AmazonElasticLoadBalancingTypeDescribeInstanceHealth)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeInstanceHealth(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeDescribeInstanceHealth->getLoadBalancerName(),'Instances'=>$_AmazonElasticLoadBalancingTypeDescribeInstanceHealth->getInstances())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DescribeLoadBalancers
	 * Meta informations :
	 * 	- documentation : <p> Returns detailed configuration information for the specified LoadBalancers. If no LoadBalancers are specified, the operation returns configuration information for all LoadBalancers created by the caller. </p> <note> The client must have created the specified input LoadBalancers in order to retrieve this information; the client must provide the same account credentials as those that were used to create the LoadBalancer. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeDescribeLoadBalancers::getLoadBalancerNames()
	 * @uses AmazonElasticLoadBalancingTypeDescribeLoadBalancers::getMarker()
	 * @param AmazonElasticLoadBalancingTypeDescribeLoadBalancers DescribeLoadBalancers
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse
	 */
	public function DescribeLoadBalancers(AmazonElasticLoadBalancingTypeDescribeLoadBalancers $_AmazonElasticLoadBalancingTypeDescribeLoadBalancers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DescribeLoadBalancers(array('LoadBalancerNames'=>$_AmazonElasticLoadBalancingTypeDescribeLoadBalancers->getLoadBalancerNames(),'Marker'=>$_AmazonElasticLoadBalancingTypeDescribeLoadBalancers->getMarker())));
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
	 * @return AmazonElasticLoadBalancingTypeDescribeLoadBalancersResponse
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