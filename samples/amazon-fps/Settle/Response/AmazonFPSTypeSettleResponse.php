<?php
/**
 * Class file for AmazonFPSTypeSettleResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSettleResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeSettleResponse extends AmazonFPSWsdlClass
{
	/**
	 * The SettleResult
	 * @var AmazonFPSTypeSettleResult
	 */
	public $SettleResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeSettleResult SettleResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeSettleResponse
	 */
	public function __construct($_SettleResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SettleResult'=>$_SettleResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SettleResult
	 * @param SettleResult SettleResult
	 * @return SettleResult
	 */
	public function setSettleResult($_SettleResult)
	{
		return ($this->SettleResult = $_SettleResult);
	}
	/**
	 * Get SettleResult
	 * @return AmazonFPSTypeSettleResult
	 */
	public function getSettleResult()
	{
		return $this->SettleResult;
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