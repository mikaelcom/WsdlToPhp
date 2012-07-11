<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceCreate
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceCreate
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceCreate extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call CreateLoadBalancerPolicy
	 * Meta informations :
	 * 	- documentation : <p> Creates a new policy that contains the necessary attributes depending on the policy type. Policies are settings that are saved for your Elastic LoadBalancer and that can be applied to the front-end listener, or the back-end application server, depending on your policy type. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy::getPolicyName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy::getPolicyTypeName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy::getPolicyAttributes()
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy CreateLoadBalancerPolicy
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicyResponse
	 */
	public function CreateLoadBalancerPolicy(AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy $_AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateLoadBalancerPolicy(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy->getLoadBalancerName(),'PolicyName'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy->getPolicyName(),'PolicyTypeName'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy->getPolicyTypeName(),'PolicyAttributes'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerPolicy->getPolicyAttributes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateLoadBalancerListeners
	 * Meta informations :
	 * 	- documentation : <p> Creates one or more listeners on a LoadBalancer for the specified port. If a listener with the given port does not already exist, it will be created; otherwise, the properties of the new listener must match the properties of the existing listener. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners::getListeners()
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners CreateLoadBalancerListeners
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResponse
	 */
	public function CreateLoadBalancerListeners(AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners $_AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateLoadBalancerListeners(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners->getLoadBalancerName(),'Listeners'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancerListeners->getListeners())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateLoadBalancer
	 * Meta informations :
	 * 	- documentation : <p> Creates a new LoadBalancer. </p> <p> After the call has completed successfully, a new LoadBalancer is created; however, it will not be usable until at least one instance has been registered. When the LoadBalancer creation is completed, the client can check whether or not it is usable by using the DescribeInstanceHealth API. The LoadBalancer is usable as soon as any registered instance is <i>InService</i>. </p> <note> Currently, the client's quota of LoadBalancers is limited to ten per Region. </note> <note> <p> LoadBalancer DNS names vary depending on the Region they're created in. For LoadBalancers created in the United States, the DNS name ends with: </p> <ul> <li> <i>us-east-1.elb.amazonaws.com</i> (for the US Standard Region) </li> <li> <i>us-west-1.elb.amazonaws.com</i> (for the Northern California Region) </li> </ul> <p> For LoadBalancers created in the EU (Ireland) Region, the DNS name ends with: </p> <ul> <li> <i>eu-west-1.elb.amazonaws.com</i> </li> </ul> </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getListeners()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getAvailabilityZones()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getSubnets()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getSecurityGroups()
	 * @uses AmazonElasticLoadBalancingTypeCreateLoadBalancer::getScheme()
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancer CreateLoadBalancer
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerResponse
	 */
	public function CreateLoadBalancer(AmazonElasticLoadBalancingTypeCreateLoadBalancer $_AmazonElasticLoadBalancingTypeCreateLoadBalancer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateLoadBalancer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getLoadBalancerName(),'Listeners'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getListeners(),'AvailabilityZones'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getAvailabilityZones(),'Subnets'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getSubnets(),'SecurityGroups'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getSecurityGroups(),'Scheme'=>$_AmazonElasticLoadBalancingTypeCreateLoadBalancer->getScheme())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateLBCookieStickinessPolicy
	 * Meta informations :
	 * 	- documentation : <p> Generates a stickiness policy with sticky session lifetimes controlled by the lifetime of the browser (user-agent) or a specified expiration period. This policy can be associated only with HTTP/HTTPS listeners. </p> <p> When a LoadBalancer implements this policy, the LoadBalancer uses a special cookie to track the backend server instance for each request. When the LoadBalancer receives a request, it first checks to see if this cookie is present in the request. If so, the LoadBalancer sends the request to the application server specified in the cookie. If not, the LoadBalancer sends the request to a server that is chosen based on the existing load balancing algorithm. </p> <p> A cookie is inserted into the response for binding subsequent requests from the same user to that server. The validity of the cookie is based on the cookie expiration time, which is specified in the policy configuration. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy::getPolicyName()
	 * @uses AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy::getCookieExpirationPeriod()
	 * @param AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy CreateLBCookieStickinessPolicy
	 * @return AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResponse
	 */
	public function CreateLBCookieStickinessPolicy(AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy $_AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateLBCookieStickinessPolicy(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy->getLoadBalancerName(),'PolicyName'=>$_AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy->getPolicyName(),'CookieExpirationPeriod'=>$_AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicy->getCookieExpirationPeriod())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateAppCookieStickinessPolicy
	 * Meta informations :
	 * 	- documentation : <p> Generates a stickiness policy with sticky session lifetimes that follow that of an application-generated cookie. This policy can be associated only with HTTP/HTTPS listeners. </p> <p> This policy is similar to the policy created by CreateLBCookieStickinessPolicy, except that the lifetime of the special Elastic Load Balancing cookie follows the lifetime of the application-generated cookie specified in the policy configuration. The LoadBalancer only inserts a new stickiness cookie when the application response includes a new application cookie. </p> <p> If the application cookie is explicitly removed or expires, the session stops being sticky until a new application cookie is issued. </p> <note> An application client must receive and send two cookies: the application-generated cookie and the special Elastic Load Balancing cookie named <code>AWSELB</code>. This is the default behavior for many common web browsers. </note>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy::getPolicyName()
	 * @uses AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy::getCookieName()
	 * @param AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy CreateAppCookieStickinessPolicy
	 * @return AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse
	 */
	public function CreateAppCookieStickinessPolicy(AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy $_AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateAppCookieStickinessPolicy(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy->getLoadBalancerName(),'PolicyName'=>$_AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy->getPolicyName(),'CookieName'=>$_AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicy->getCookieName())));
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
	 * @return AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse
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