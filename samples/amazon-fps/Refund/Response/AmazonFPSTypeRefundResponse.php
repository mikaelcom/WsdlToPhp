<?php
/**
 * Class file for AmazonFPSTypeRefundResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeRefundResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeRefundResponse extends AmazonFPSWsdlClass
{
	/**
	 * The RefundResult
	 * @var AmazonFPSTypeRefundResult
	 */
	public $RefundResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeRefundResult RefundResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeRefundResponse
	 */
	public function __construct($_RefundResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('RefundResult'=>$_RefundResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set RefundResult
	 * @param RefundResult RefundResult
	 * @return RefundResult
	 */
	public function setRefundResult($_RefundResult)
	{
		return ($this->RefundResult = $_RefundResult);
	}
	/**
	 * Get RefundResult
	 * @return AmazonFPSTypeRefundResult
	 */
	public function getRefundResult()
	{
		return $this->RefundResult;
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