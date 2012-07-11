<?php
/**
 * Class file for AmazonElasticLoadBalancingServiceConfigure
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingServiceConfigure
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingServiceConfigure extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * Method to call ConfigureHealthCheck
	 * Meta informations :
	 * 	- documentation : <p> Enables the client to define an application healthcheck for the instances. </p>
	 * @uses AmazonElasticLoadBalancingWsdlClass::getSoapClient()
	 * @uses AmazonElasticLoadBalancingWsdlClass::setResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::getResult()
	 * @uses AmazonElasticLoadBalancingWsdlClass::saveLastError()
	 * @uses AmazonElasticLoadBalancingTypeConfigureHealthCheck::getLoadBalancerName()
	 * @uses AmazonElasticLoadBalancingTypeConfigureHealthCheck::getHealthCheck()
	 * @param AmazonElasticLoadBalancingTypeConfigureHealthCheck ConfigureHealthCheck
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse
	 */
	public function ConfigureHealthCheck(AmazonElasticLoadBalancingTypeConfigureHealthCheck $_AmazonElasticLoadBalancingTypeConfigureHealthCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConfigureHealthCheck(array('LoadBalancerName'=>$_AmazonElasticLoadBalancingTypeConfigureHealthCheck->getLoadBalancerName(),'HealthCheck'=>$_AmazonElasticLoadBalancingTypeConfigureHealthCheck->getHealthCheck())));
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
	 * @return AmazonElasticLoadBalancingTypeConfigureHealthCheckResponse
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