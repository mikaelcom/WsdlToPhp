<?php
/**
 * Class file for AmazonFPSTypeFundPrepaidResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeFundPrepaidResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeFundPrepaidResponse extends AmazonFPSWsdlClass
{
	/**
	 * The FundPrepaidResult
	 * @var AmazonFPSTypeFundPrepaidResult
	 */
	public $FundPrepaidResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeFundPrepaidResult FundPrepaidResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeFundPrepaidResponse
	 */
	public function __construct($_FundPrepaidResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('FundPrepaidResult'=>$_FundPrepaidResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set FundPrepaidResult
	 * @param FundPrepaidResult FundPrepaidResult
	 * @return FundPrepaidResult
	 */
	public function setFundPrepaidResult($_FundPrepaidResult)
	{
		return ($this->FundPrepaidResult = $_FundPrepaidResult);
	}
	/**
	 * Get FundPrepaidResult
	 * @return AmazonFPSTypeFundPrepaidResult
	 */
	public function getFundPrepaidResult()
	{
		return $this->FundPrepaidResult;
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