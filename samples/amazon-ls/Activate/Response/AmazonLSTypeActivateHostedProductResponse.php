<?php
/**
 * Class file for AmazonLSTypeActivateHostedProductResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeActivateHostedProductResponse
 * @date 10/07/2012
 */
class AmazonLSTypeActivateHostedProductResponse extends AmazonLSWsdlClass
{
	/**
	 * The ActivateHostedProductResult
	 * @var AmazonLSTypeActivateHostedProductResult
	 */
	public $ActivateHostedProductResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeActivateHostedProductResult ActivateHostedProductResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeActivateHostedProductResponse
	 */
	public function __construct($_ActivateHostedProductResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ActivateHostedProductResult'=>$_ActivateHostedProductResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ActivateHostedProductResult
	 * @param ActivateHostedProductResult ActivateHostedProductResult
	 * @return ActivateHostedProductResult
	 */
	public function setActivateHostedProductResult($_ActivateHostedProductResult)
	{
		return ($this->ActivateHostedProductResult = $_ActivateHostedProductResult);
	}
	/**
	 * Get ActivateHostedProductResult
	 * @return AmazonLSTypeActivateHostedProductResult
	 */
	public function getActivateHostedProductResult()
	{
		return $this->ActivateHostedProductResult;
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