<?php
/**
 * Class file for AmazonFPSTypePayResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypePayResponse
 * @date 10/07/2012
 */
class AmazonFPSTypePayResponse extends AmazonFPSWsdlClass
{
	/**
	 * The PayResult
	 * @var AmazonFPSTypePayResult
	 */
	public $PayResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypePayResult PayResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypePayResponse
	 */
	public function __construct($_PayResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('PayResult'=>$_PayResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set PayResult
	 * @param PayResult PayResult
	 * @return PayResult
	 */
	public function setPayResult($_PayResult)
	{
		return ($this->PayResult = $_PayResult);
	}
	/**
	 * Get PayResult
	 * @return AmazonFPSTypePayResult
	 */
	public function getPayResult()
	{
		return $this->PayResult;
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