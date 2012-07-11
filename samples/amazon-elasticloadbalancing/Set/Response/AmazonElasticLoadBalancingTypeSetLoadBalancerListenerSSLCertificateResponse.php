<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The SetLoadBalancerListenerSSLCertificateResult
	 * @var AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResult
	 */
	public $SetLoadBalancerListenerSSLCertificateResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResult SetLoadBalancerListenerSSLCertificateResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResponse
	 */
	public function __construct($_SetLoadBalancerListenerSSLCertificateResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SetLoadBalancerListenerSSLCertificateResult'=>$_SetLoadBalancerListenerSSLCertificateResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SetLoadBalancerListenerSSLCertificateResult
	 * @param SetLoadBalancerListenerSSLCertificateResult SetLoadBalancerListenerSSLCertificateResult
	 * @return SetLoadBalancerListenerSSLCertificateResult
	 */
	public function setSetLoadBalancerListenerSSLCertificateResult($_SetLoadBalancerListenerSSLCertificateResult)
	{
		return ($this->SetLoadBalancerListenerSSLCertificateResult = $_SetLoadBalancerListenerSSLCertificateResult);
	}
	/**
	 * Get SetLoadBalancerListenerSSLCertificateResult
	 * @return AmazonElasticLoadBalancingTypeSetLoadBalancerListenerSSLCertificateResult
	 */
	public function getSetLoadBalancerListenerSSLCertificateResult()
	{
		return $this->SetLoadBalancerListenerSSLCertificateResult;
	}
	/**
	 * Set ResponseMetadata
	 * @param ResponseMetadata ResponseMetadata
	 * @return ResponseMetadata
	 */
	public function setResponseMetadata($_ResponseMetadata)
	{
		return ($this->ResponseMetadata = $_ResponseMetadata);
	}
	/**
	 * Get ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public function getResponseMetadata()
	{
		return $this->ResponseMetadata;
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