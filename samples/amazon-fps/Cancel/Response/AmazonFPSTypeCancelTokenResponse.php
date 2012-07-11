<?php
/**
 * Class file for AmazonFPSTypeCancelTokenResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelTokenResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelTokenResponse extends AmazonFPSWsdlClass
{
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeCancelTokenResponse
	 */
	public function __construct($_ResponseMetadata = null)
	{
		parent::__construct(array('ResponseMetadata'=>$_ResponseMetadata));
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
	 * @return AmazonFPSTypeResponseMetadata
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