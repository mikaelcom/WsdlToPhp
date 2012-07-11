<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The CreateLBCookieStickinessPolicyResult
	 * @var AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResult
	 */
	public $CreateLBCookieStickinessPolicyResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResult CreateLBCookieStickinessPolicyResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResponse
	 */
	public function __construct($_CreateLBCookieStickinessPolicyResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateLBCookieStickinessPolicyResult'=>$_CreateLBCookieStickinessPolicyResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateLBCookieStickinessPolicyResult
	 * @param CreateLBCookieStickinessPolicyResult CreateLBCookieStickinessPolicyResult
	 * @return CreateLBCookieStickinessPolicyResult
	 */
	public function setCreateLBCookieStickinessPolicyResult($_CreateLBCookieStickinessPolicyResult)
	{
		return ($this->CreateLBCookieStickinessPolicyResult = $_CreateLBCookieStickinessPolicyResult);
	}
	/**
	 * Get CreateLBCookieStickinessPolicyResult
	 * @return AmazonElasticLoadBalancingTypeCreateLBCookieStickinessPolicyResult
	 */
	public function getCreateLBCookieStickinessPolicyResult()
	{
		return $this->CreateLBCookieStickinessPolicyResult;
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