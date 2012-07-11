<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The AttachLoadBalancerToSubnetsResult
	 * @var AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResult
	 */
	public $AttachLoadBalancerToSubnetsResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResult AttachLoadBalancerToSubnetsResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResponse
	 */
	public function __construct($_AttachLoadBalancerToSubnetsResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('AttachLoadBalancerToSubnetsResult'=>$_AttachLoadBalancerToSubnetsResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set AttachLoadBalancerToSubnetsResult
	 * @param AttachLoadBalancerToSubnetsResult AttachLoadBalancerToSubnetsResult
	 * @return AttachLoadBalancerToSubnetsResult
	 */
	public function setAttachLoadBalancerToSubnetsResult($_AttachLoadBalancerToSubnetsResult)
	{
		return ($this->AttachLoadBalancerToSubnetsResult = $_AttachLoadBalancerToSubnetsResult);
	}
	/**
	 * Get AttachLoadBalancerToSubnetsResult
	 * @return AmazonElasticLoadBalancingTypeAttachLoadBalancerToSubnetsResult
	 */
	public function getAttachLoadBalancerToSubnetsResult()
	{
		return $this->AttachLoadBalancerToSubnetsResult;
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