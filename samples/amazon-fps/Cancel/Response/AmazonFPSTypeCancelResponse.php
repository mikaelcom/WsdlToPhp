<?php
/**
 * Class file for AmazonFPSTypeCancelResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancelResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeCancelResponse extends AmazonFPSWsdlClass
{
	/**
	 * The CancelResult
	 * @var AmazonFPSTypeCancelResult
	 */
	public $CancelResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeCancelResult CancelResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeCancelResponse
	 */
	public function __construct($_CancelResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('CancelResult'=>$_CancelResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set CancelResult
	 * @param CancelResult CancelResult
	 * @return CancelResult
	 */
	public function setCancelResult($_CancelResult)
	{
		return ($this->CancelResult = $_CancelResult);
	}
	/**
	 * Get CancelResult
	 * @return AmazonFPSTypeCancelResult
	 */
	public function getCancelResult()
	{
		return $this->CancelResult;
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