<?php
/**
 * Class file for AmazonLSTypeRefreshUserTokenResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeRefreshUserTokenResponse
 * @date 10/07/2012
 */
class AmazonLSTypeRefreshUserTokenResponse extends AmazonLSWsdlClass
{
	/**
	 * The RefreshUserTokenResult
	 * @var AmazonLSTypeRefreshUserTokenResult
	 */
	public $RefreshUserTokenResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeRefreshUserTokenResult RefreshUserTokenResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeRefreshUserTokenResponse
	 */
	public function __construct($_RefreshUserTokenResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('RefreshUserTokenResult'=>$_RefreshUserTokenResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set RefreshUserTokenResult
	 * @param RefreshUserTokenResult RefreshUserTokenResult
	 * @return RefreshUserTokenResult
	 */
	public function setRefreshUserTokenResult($_RefreshUserTokenResult)
	{
		return ($this->RefreshUserTokenResult = $_RefreshUserTokenResult);
	}
	/**
	 * Get RefreshUserTokenResult
	 * @return AmazonLSTypeRefreshUserTokenResult
	 */
	public function getRefreshUserTokenResult()
	{
		return $this->RefreshUserTokenResult;
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
	 * @return AmazonLSTypeResponseMetadata
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