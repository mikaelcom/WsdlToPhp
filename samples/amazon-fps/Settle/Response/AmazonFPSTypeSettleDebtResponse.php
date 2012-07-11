<?php
/**
 * Class file for AmazonFPSTypeSettleDebtResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSettleDebtResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeSettleDebtResponse extends AmazonFPSWsdlClass
{
	/**
	 * The SettleDebtResult
	 * @var AmazonFPSTypeSettleDebtResult
	 */
	public $SettleDebtResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeSettleDebtResult SettleDebtResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeSettleDebtResponse
	 */
	public function __construct($_SettleDebtResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('SettleDebtResult'=>$_SettleDebtResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set SettleDebtResult
	 * @param SettleDebtResult SettleDebtResult
	 * @return SettleDebtResult
	 */
	public function setSettleDebtResult($_SettleDebtResult)
	{
		return ($this->SettleDebtResult = $_SettleDebtResult);
	}
	/**
	 * Get SettleDebtResult
	 * @return AmazonFPSTypeSettleDebtResult
	 */
	public function getSettleDebtResult()
	{
		return $this->SettleDebtResult;
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