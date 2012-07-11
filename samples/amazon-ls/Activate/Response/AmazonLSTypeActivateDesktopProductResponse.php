<?php
/**
 * Class file for AmazonLSTypeActivateDesktopProductResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeActivateDesktopProductResponse
 * @date 10/07/2012
 */
class AmazonLSTypeActivateDesktopProductResponse extends AmazonLSWsdlClass
{
	/**
	 * The ActivateDesktopProductResult
	 * @var AmazonLSTypeActivateDesktopProductResult
	 */
	public $ActivateDesktopProductResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonLSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonLSTypeActivateDesktopProductResult ActivateDesktopProductResult
	 * @param AmazonLSTypeResponseMetadata ResponseMetadata
	 * @return AmazonLSTypeActivateDesktopProductResponse
	 */
	public function __construct($_ActivateDesktopProductResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('ActivateDesktopProductResult'=>$_ActivateDesktopProductResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set ActivateDesktopProductResult
	 * @param ActivateDesktopProductResult ActivateDesktopProductResult
	 * @return ActivateDesktopProductResult
	 */
	public function setActivateDesktopProductResult($_ActivateDesktopProductResult)
	{
		return ($this->ActivateDesktopProductResult = $_ActivateDesktopProductResult);
	}
	/**
	 * Get ActivateDesktopProductResult
	 * @return AmazonLSTypeActivateDesktopProductResult
	 */
	public function getActivateDesktopProductResult()
	{
		return $this->ActivateDesktopProductResult;
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