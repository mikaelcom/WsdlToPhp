<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The CreateAppCookieStickinessPolicyResult
	 * @var AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResult
	 */
	public $CreateAppCookieStickinessPolicyResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonElasticLoadBalancingTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResult CreateAppCookieStickinessPolicyResult
	 * @param AmazonElasticLoadBalancingTypeResponseMetadata ResponseMetadata
	 * @return AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResponse
	 */
	public function __construct($_CreateAppCookieStickinessPolicyResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CreateAppCookieStickinessPolicyResult'=>$_CreateAppCookieStickinessPolicyResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CreateAppCookieStickinessPolicyResult
	 * @param CreateAppCookieStickinessPolicyResult CreateAppCookieStickinessPolicyResult
	 * @return CreateAppCookieStickinessPolicyResult
	 */
	public function setCreateAppCookieStickinessPolicyResult($_CreateAppCookieStickinessPolicyResult)
	{
		return ($this->CreateAppCookieStickinessPolicyResult = $_CreateAppCookieStickinessPolicyResult);
	}
	/**
	 * Get CreateAppCookieStickinessPolicyResult
	 * @return AmazonElasticLoadBalancingTypeCreateAppCookieStickinessPolicyResult
	 */
	public function getCreateAppCookieStickinessPolicyResult()
	{
		return $this->CreateAppCookieStickinessPolicyResult;
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