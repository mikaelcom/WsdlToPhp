<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The LoadBalancerName
	 * Meta informations :
	 * 	- documentation : <p> The name of the the LoadBalancer. </p>
	 * @var string
	 */
	public $LoadBalancerName;
	/**
	 * The LoadBalancerPort
	 * Meta informations :
	 * 	- documentation : <p> The port that uses the specified SSL certificate. </p>
	 * @var integer
	 */
	public $LoadBalancerPort;
	/**
	 * The SSLCertificateId
	 * Meta informations :
	 * 	- documentation : <p> The ID of the SSL certificate chain to use. For more information on SSL certificates, see <a href="http://docs.amazonwebservices.com/IAM/latest/UserGuide/ManagingServerCerts.html"> Managing Server Certificates </a> in the AWS Identity and Access Management documentation. </p>
	 * @var string
	 */
	public $SSLCertificateId;
	/**
	 * Constructor
	 * @param string LoadBalancerName
	 * @param integer LoadBalancerPort
	 * @param string SSLCertificateId
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificate
	 */
	public function __construct($_LoadBalancerName = null,$_LoadBalancerPort = null,$_SSLCertificateId = null)
	{
		parent::__construct(array('LoadBalancerName'=>$_LoadBalancerName,'LoadBalancerPort'=>$_LoadBalancerPort,'SSLCertificateId'=>$_SSLCertificateId));
	}
	/**
	 * Set LoadBalancerName
	 * @param string LoadBalancerName
	 * @return string
	 */
	public function setLoadBalancerName($_LoadBalancerName)
	{
		return ($this->LoadBalancerName = $_LoadBalancerName);
	}
	/**
	 * Get LoadBalancerName
	 * @return string
	 */
	public function getLoadBalancerName()
	{
		return $this->LoadBalancerName;
	}
	/**
	 * Set LoadBalancerPort
	 * @param integer LoadBalancerPort
	 * @return integer
	 */
	public function setLoadBalancerPort($_LoadBalancerPort)
	{
		return ($this->LoadBalancerPort = $_LoadBalancerPort);
	}
	/**
	 * Get LoadBalancerPort
	 * @return integer
	 */
	public function getLoadBalancerPort()
	{
		return $this->LoadBalancerPort;
	}
	/**
	 * Set SSLCertificateId
	 * @param string SSLCertificateId
	 * @return string
	 */
	public function setSSLCertificateId($_SSLCertificateId)
	{
		return ($this->SSLCertificateId = $_SSLCertificateId);
	}
	/**
	 * Get SSLCertificateId
	 * @return string
	 */
	public function getSSLCertificateId()
	{
		return $this->SSLCertificateId;
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