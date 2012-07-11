<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The CreateLoadBalancerListenersResult
	 * @var AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResult
	 */
	public $CreateLoadBalancerListenersResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResult CreateLoadBalancerListenersResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResponse
	 */
	public function __construct($_CreateLoadBalancerListenersResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateLoadBalancerListenersResult'=>$_CreateLoadBalancerListenersResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateLoadBalancerListenersResult
	 * @param CreateLoadBalancerListenersResult CreateLoadBalancerListenersResult
	 * @return CreateLoadBalancerListenersResult
	 */
	public function setCreateLoadBalancerListenersResult($_CreateLoadBalancerListenersResult)
	{
		return ($this->CreateLoadBalancerListenersResult = $_CreateLoadBalancerListenersResult);
	}
	/**
	 * Get CreateLoadBalancerListenersResult
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerListenersResult
	 */
	public function getCreateLoadBalancerListenersResult()
	{
		return $this->CreateLoadBalancerListenersResult;
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