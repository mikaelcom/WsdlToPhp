<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeHealthCheck
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeHealthCheck
 * Documentation : <p> The HealthCheck data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeHealthCheck extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Target
	 * Meta informations :
	 * 	- documentation : <p> Specifies the instance being checked. The protocol is either TCP, HTTP, HTTPS, or SSL. The range of valid ports is one (1) through 65535. </p> <note> <p> TCP is the default, specified as a TCP: port pair, for example "TCP:5000". In this case a healthcheck simply attempts to open a TCP connection to the instance on the specified port. Failure to connect within the configured timeout is considered unhealthy. </p> <p>SSL is also specified as SSL: port pair, for example, SSL:5000.</p> <p> For HTTP or HTTPS protocol, the situation is different. You have to include a ping path in the string. HTTP is specified as a HTTP:port;/;PathToPing; grouping, for example "HTTP:80/weather/us/wa/seattle". In this case, a HTTP GET request is issued to the instance on the given port and path. Any answer other than "200 OK" within the timeout period is considered unhealthy. </p> <p> The total length of the HTTP ping target needs to be 1024 16-bit Unicode characters or less. </p> </note>
	 * @var string
	 */
	public $Target;
	/**
	 * The Interval
	 * Meta informations :
	 * 	- documentation : <p> Specifies the approximate interval, in seconds, between health checks of an individual instance. </p>
	 * @var AmazonElasticLoadBalancingTypeHealthCheckInterval
	 */
	public $Interval;
	/**
	 * The Timeout
	 * Meta informations :
	 * 	- documentation : <p> Specifies the amount of time, in seconds, during which no response means a failed health probe. </p> <note> This value must be less than the <i>Interval</i> value. </note>
	 * @var AmazonElasticLoadBalancingTypeHealthCheckTimeout
	 */
	public $Timeout;
	/**
	 * The UnhealthyThreshold
	 * Meta informations :
	 * 	- documentation : <p> Specifies the number of consecutive health probe failures required before moving the instance to the <i>Unhealthy</i> state. </p>
	 * @var AmazonElasticLoadBalancingTypeUnhealthyThreshold
	 */
	public $UnhealthyThreshold;
	/**
	 * The HealthyThreshold
	 * Meta informations :
	 * 	- documentation : <p> Specifies the number of consecutive health probe successes required before moving the instance to the <i>Healthy</i> state. </p>
	 * @var AmazonElasticLoadBalancingTypeHealthyThreshold
	 */
	public $HealthyThreshold;
	/**
	 * Constructor
	 * @param string Target
	 * @param AmazonElasticLoadBalancingTypeHealthCheckInterval Interval
	 * @param AmazonElasticLoadBalancingTypeHealthCheckTimeout Timeout
	 * @param AmazonElasticLoadBalancingTypeUnhealthyThreshold UnhealthyThreshold
	 * @param AmazonElasticLoadBalancingTypeHealthyThreshold HealthyThreshold
	 * @return AmazonElasticLoadBalancingTypeHealthCheck
	 */
	public function __construct($_Target = null,$_Interval = null,$_Timeout = null,$_UnhealthyThreshold = null,$_HealthyThreshold = null)
	{
		parent::__construct(array('Target'=>$_Target,'Interval'=>$_Interval,'Timeout'=>$_Timeout,'UnhealthyThreshold'=>$_UnhealthyThreshold,'HealthyThreshold'=>$_HealthyThreshold));
	}
	/**
	 * Set Target
	 * @param string Target
	 * @return string
	 */
	public function setTarget($_Target)
	{
		return ($this->Target = $_Target);
	}
	/**
	 * Get Target
	 * @return string
	 */
	public function getTarget()
	{
		return $this->Target;
	}
	/**
	 * Set Interval
	 * @param HealthCheckInterval Interval
	 * @return HealthCheckInterval
	 */
	public function setInterval($_Interval)
	{
		return ($this->Interval = AmazonElasticLoadBalancingTypeHealthCheckInterval::valueIsValid($_Interval)?$_Interval:null);
	}
	/**
	 * Get Interval
	 * @return AmazonElasticLoadBalancingTypeHealthCheckInterval
	 */
	public function getInterval()
	{
		return $this->Interval;
	}
	/**
	 * Set Timeout
	 * @param HealthCheckTimeout Timeout
	 * @return HealthCheckTimeout
	 */
	public function setTimeout($_Timeout)
	{
		return ($this->Timeout = AmazonElasticLoadBalancingTypeHealthCheckTimeout::valueIsValid($_Timeout)?$_Timeout:null);
	}
	/**
	 * Get Timeout
	 * @return AmazonElasticLoadBalancingTypeHealthCheckTimeout
	 */
	public function getTimeout()
	{
		return $this->Timeout;
	}
	/**
	 * Set UnhealthyThreshold
	 * @param UnhealthyThreshold UnhealthyThreshold
	 * @return UnhealthyThreshold
	 */
	public function setUnhealthyThreshold($_UnhealthyThreshold)
	{
		return ($this->UnhealthyThreshold = AmazonElasticLoadBalancingTypeUnhealthyThreshold::valueIsValid($_UnhealthyThreshold)?$_UnhealthyThreshold:null);
	}
	/**
	 * Get UnhealthyThreshold
	 * @return AmazonElasticLoadBalancingTypeUnhealthyThreshold
	 */
	public function getUnhealthyThreshold()
	{
		return $this->UnhealthyThreshold;
	}
	/**
	 * Set HealthyThreshold
	 * @param HealthyThreshold HealthyThreshold
	 * @return HealthyThreshold
	 */
	public function setHealthyThreshold($_HealthyThreshold)
	{
		return ($this->HealthyThreshold = AmazonElasticLoadBalancingTypeHealthyThreshold::valueIsValid($_HealthyThreshold)?$_HealthyThreshold:null);
	}
	/**
	 * Get HealthyThreshold
	 * @return AmazonElasticLoadBalancingTypeHealthyThreshold
	 */
	public function getHealthyThreshold()
	{
		return $this->HealthyThreshold;
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