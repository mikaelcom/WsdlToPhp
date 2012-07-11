<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceSet
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceSet
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceSet extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call SetLoadBalancerPoliciesOfListener
	 * Meta informations :
	 * 	- documentation : <p> Associates, updates, or disables a policy with a listener on the LoadBalancer. You can associate multiple policies with a listener. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener::getLoadBalancerPort()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener::getPolicyNames()
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener SetLoadBalancerPoliciesOfListener
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListenerResponse
	 */
	public function SetLoadBalancerPoliciesOfListener(AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener $_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetLoadBalancerPoliciesOfListener(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener->getLoadBalancerName(),'LoadBalancerPort'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener->getLoadBalancerPort(),'PolicyNames'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesOfListener->getPolicyNames())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetLoadBalancerPoliciesForBackendServer
	 * Meta informations :
	 * 	- documentation : <p> Replaces the current set of policies associated with a port on which the back-end server is listening with a new set of policies. After the policies have been created using <a>CreateLoadBalancerPolicy</a>, they can be applied here as a list. At this time, only the back-end server authentication policy type can be applied to the back-end ports; this policy type is composed of multiple public key policies. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer::getInstancePort()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer::getPolicyNames()
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer SetLoadBalancerPoliciesForBackendServer
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServerResponse
	 */
	public function SetLoadBalancerPoliciesForBackendServer(AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer $_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetLoadBalancerPoliciesForBackendServer(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer->getLoadBalancerName(),'InstancePort'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer->getInstancePort(),'PolicyNames'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerPoliciesForBackendServer->getPolicyNames())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetLoadBalancerListenerSSLCertificate
	 * Meta informations :
	 * 	- documentation : <p> Sets the certificate that terminates the specified listener's SSL connections. The specified certificate replaces any prior certificate that was used on the same LoadBalancer and port. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate::getLoadBalancerPort()
	 * @uses AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate::getSSLCertificateId()
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate SetLoadBalancerListenerSSLCertificate
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse
	 */
	public function SetLoadBalancerListenerSSLCertificate(AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate $_AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetLoadBalancerListenerSSLCertificate(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate->getLoadBalancerName(),'LoadBalancerPort'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate->getLoadBalancerPort(),'SSLCertificateId'=>$_AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate->getSSLCertificateId())));
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
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse
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