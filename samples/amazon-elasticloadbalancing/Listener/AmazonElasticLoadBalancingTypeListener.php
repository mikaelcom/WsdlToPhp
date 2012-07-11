<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeListener
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeListener
 * Documentation : <p> The Listener data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeListener extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Protocol
	 * Meta informations :
	 * 	- documentation : <p> Specifies the LoadBalancer transport protocol to use for routing - HTTP, HTTPS, TCP or SSL. This property cannot be modified for the life of the LoadBalancer. </p>
	 * @var string
	 */
	public $Protocol;
	/**
	 * The LoadBalancerPort
	 * Meta informations :
	 * 	- documentation : <p> Specifies the external LoadBalancer port number. This property cannot be modified for the life of the LoadBalancer. </p>
	 * @var integer
	 */
	public $LoadBalancerPort;
	/**
	 * The InstanceProtocol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies the protocol to use for routing traffic to back-end instances - HTTP, HTTPS, TCP, or SSL. This property cannot be modified for the life of the LoadBalancer. </p> <note> If the front-end protocol is HTTP or HTTPS, <code>InstanceProtocol</code> has to be at the same protocol layer, i.e., HTTP or HTTPS. Likewise, if the front-end protocol is TCP or SSL, InstanceProtocol has to be TCP or SSL. </note> <note> If there is another listener with the same <code>InstancePort</code> whose <code>InstanceProtocol</code> is secure, i.e., HTTPS or SSL, the listener's <code>InstanceProtocol</code> has to be secure, i.e., HTTPS or SSL. If there is another listener with the same <code>InstancePort</code> whose <code>InstanceProtocol</code> is HTTP or TCP, the listener's <code>InstanceProtocol</code> must be either HTTP or TCP. </note>
	 * @var string
	 */
	public $InstanceProtocol;
	/**
	 * The InstancePort
	 * Meta informations :
	 * 	- documentation : <p> Specifies the TCP port on which the instance server is listening. This property cannot be modified for the life of the LoadBalancer. </p>
	 * @var AmazonElasticLoadBalancingTypeInstancePort
	 */
	public $InstancePort;
	/**
	 * The SSLCertificateId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> The ARN string of the server certificate. To get the ARN of the server certificate, call the AWS Identity and Access Management <a href="http://docs.amazonwebservices.com/IAM/latest/APIReference/index.html?API_UploadServerCertificate.html">UploadServerCertificate </a> API. </p>
	 * @var string
	 */
	public $SSLCertificateId;
	/**
	 * Constructor
	 * @param string Protocol
	 * @param integer LoadBalancerPort
	 * @param string InstanceProtocol
	 * @param AmazonElasticLoadBalancingTypeInstancePort InstancePort
	 * @param string SSLCertificateId
	 * @return AmazonElasticLoadBalancingTypeListener
	 */
	public function __construct($_Protocol = null,$_LoadBalancerPort = null,$_InstanceProtocol = null,$_InstancePort = null,$_SSLCertificateId = null)
	{
		parent::__construct(array('Protocol'=>$_Protocol,'LoadBalancerPort'=>$_LoadBalancerPort,'InstanceProtocol'=>$_InstanceProtocol,'InstancePort'=>$_InstancePort,'SSLCertificateId'=>$_SSLCertificateId));
	}
	/**
	 * Set Protocol
	 * @param string Protocol
	 * @return string
	 */
	public function setProtocol($_Protocol)
	{
		return ($this->Protocol = $_Protocol);
	}
	/**
	 * Get Protocol
	 * @return string
	 */
	public function getProtocol()
	{
		return $this->Protocol;
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
	 * Set InstanceProtocol
	 * @param string InstanceProtocol
	 * @return string
	 */
	public function setInstanceProtocol($_InstanceProtocol)
	{
		return ($this->InstanceProtocol = $_InstanceProtocol);
	}
	/**
	 * Get InstanceProtocol
	 * @return string
	 */
	public function getInstanceProtocol()
	{
		return $this->InstanceProtocol;
	}
	/**
	 * Set InstancePort
	 * @param InstancePort InstancePort
	 * @return InstancePort
	 */
	public function setInstancePort($_InstancePort)
	{
		return ($this->InstancePort = AmazonElasticLoadBalancingTypeInstancePort::valueIsValid($_InstancePort)?$_InstancePort:null);
	}
	/**
	 * Get InstancePort
	 * @return AmazonElasticLoadBalancingTypeInstancePort
	 */
	public function getInstancePort()
	{
		return $this->InstancePort;
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