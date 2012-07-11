<?php
/**
 * Class file for AmazonFPSTypeWriteOffDebtResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeWriteOffDebtResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeWriteOffDebtResponse extends AmazonFPSWsdlClass
{
	/**
	 * The WriteOffDebtResult
	 * @var AmazonFPSTypeWriteOffDebtResult
	 */
	public $WriteOffDebtResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeWriteOffDebtResult WriteOffDebtResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeWriteOffDebtResponse
	 */
	public function __construct($_WriteOffDebtResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('WriteOffDebtResult'=>$_WriteOffDebtResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set WriteOffDebtResult
	 * @param WriteOffDebtResult WriteOffDebtResult
	 * @return WriteOffDebtResult
	 */
	public function setWriteOffDebtResult($_WriteOffDebtResult)
	{
		return ($this->WriteOffDebtResult = $_WriteOffDebtResult);
	}
	/**
	 * Get WriteOffDebtResult
	 * @return AmazonFPSTypeWriteOffDebtResult
	 */
	public function getWriteOffDebtResult()
	{
		return $this->WriteOffDebtResult;
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