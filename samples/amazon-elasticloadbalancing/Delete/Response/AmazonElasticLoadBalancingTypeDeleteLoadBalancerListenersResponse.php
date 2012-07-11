<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DeleteLoadBalancerListenersResult
	 * @var AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResult
	 */
	public $DeleteLoadBalancerListenersResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResult DeleteLoadBalancerListenersResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResponse
	 */
	public function __construct($_DeleteLoadBalancerListenersResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DeleteLoadBalancerListenersResult'=>$_DeleteLoadBalancerListenersResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DeleteLoadBalancerListenersResult
	 * @param DeleteLoadBalancerListenersResult DeleteLoadBalancerListenersResult
	 * @return DeleteLoadBalancerListenersResult
	 */
	public function setDeleteLoadBalancerListenersResult($_DeleteLoadBalancerListenersResult)
	{
		return ($this->DeleteLoadBalancerListenersResult = $_DeleteLoadBalancerListenersResult);
	}
	/**
	 * Get DeleteLoadBalancerListenersResult
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerListenersResult
	 */
	public function getDeleteLoadBalancerListenersResult()
	{
		return $this->DeleteLoadBalancerListenersResult;
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