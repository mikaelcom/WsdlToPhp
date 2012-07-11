<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The CreateLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeCreateLoadBalancerResult
	 */
	public $CreateLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeCreateLoadBalancerResult CreateLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerResponse
	 */
	public function __construct($_CreateLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateLoadBalancerResult'=>$_CreateLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateLoadBalancerResult
	 * @param CreateLoadBalancerResult CreateLoadBalancerResult
	 * @return CreateLoadBalancerResult
	 */
	public function setCreateLoadBalancerResult($_CreateLoadBalancerResult)
	{
		return ($this->CreateLoadBalancerResult = $_CreateLoadBalancerResult);
	}
	/**
	 * Get CreateLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeCreateLoadBalancerResult
	 */
	public function getCreateLoadBalancerResult()
	{
		return $this->CreateLoadBalancerResult;
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