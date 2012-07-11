<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeDeleteLoadBalancerResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeDeleteLoadBalancerResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeDeleteLoadBalancerResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The DeleteLoadBalancerResult
	 * @var AmazonElasticLoadBalancingTypeDeleteLoadBalancerResult
	 */
	public $DeleteLoadBalancerResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeDeleteLoadBalancerResult DeleteLoadBalancerResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerResponse
	 */
	public function __construct($_DeleteLoadBalancerResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('DeleteLoadBalancerResult'=>$_DeleteLoadBalancerResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set DeleteLoadBalancerResult
	 * @param DeleteLoadBalancerResult DeleteLoadBalancerResult
	 * @return DeleteLoadBalancerResult
	 */
	public function setDeleteLoadBalancerResult($_DeleteLoadBalancerResult)
	{
		return ($this->DeleteLoadBalancerResult = $_DeleteLoadBalancerResult);
	}
	/**
	 * Get DeleteLoadBalancerResult
	 * @return AmazonElasticLoadBalancingTypeDeleteLoadBalancerResult
	 */
	public function getDeleteLoadBalancerResult()
	{
		return $this->DeleteLoadBalancerResult;
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