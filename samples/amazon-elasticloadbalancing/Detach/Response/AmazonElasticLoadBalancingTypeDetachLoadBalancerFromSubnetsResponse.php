<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DetachLoadBalancerFromSubnetsResult
	 * @var AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult
	 */
	public $DetachLoadBalancerFromSubnetsResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult DetachLoadBalancerFromSubnetsResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResponse
	 */
	public function __construct($_DetachLoadBalancerFromSubnetsResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DetachLoadBalancerFromSubnetsResult'=>$_DetachLoadBalancerFromSubnetsResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DetachLoadBalancerFromSubnetsResult
	 * @param DetachLoadBalancerFromSubnetsResult DetachLoadBalancerFromSubnetsResult
	 * @return DetachLoadBalancerFromSubnetsResult
	 */
	public function setDetachLoadBalancerFromSubnetsResult($_DetachLoadBalancerFromSubnetsResult)
	{
		return ($this->DetachLoadBalancerFromSubnetsResult = $_DetachLoadBalancerFromSubnetsResult);
	}
	/**
	 * Get DetachLoadBalancerFromSubnetsResult
	 * @return AmazonElasticLoadBalancingTypeDetachLoadBalancerFromSubnetsResult
	 */
	public function getDetachLoadBalancerFromSubnetsResult()
	{
		return $this->DetachLoadBalancerFromSubnetsResult;
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