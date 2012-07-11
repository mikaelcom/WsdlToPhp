<?php
/**
 * Class file for AmazonFPSTypeInstallPaymentInstructionResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeInstallPaymentInstructionResponse
 * @date 10/07/2012
 */
class AmazonFPSTypeInstallPaymentInstructionResponse extends AmazonFPSWsdlClass
{
	/**
	 * The InstallPaymentInstructionResult
	 * @var AmazonFPSTypeInstallPaymentInstructionResult
	 */
	public $InstallPaymentInstructionResult;
	/**
	 * The ResponseMetadata
	 * @var AmazonFPSTypeResponseMetadata
	 */
	public $ResponseMetadata;
	/**
	 * Constructor
	 * @param AmazonFPSTypeInstallPaymentInstructionResult InstallPaymentInstructionResult
	 * @param AmazonFPSTypeResponseMetadata ResponseMetadata
	 * @return AmazonFPSTypeInstallPaymentInstructionResponse
	 */
	public function __construct($_InstallPaymentInstructionResult = null,$_ResponseMetadata = null)
	{
		parent::__construct(array('InstallPaymentInstructionResult'=>$_InstallPaymentInstructionResult,'ResponseMetadata'=>$_ResponseMetadata));
	}
	/**
	 * Set InstallPaymentInstructionResult
	 * @param InstallPaymentInstructionResult InstallPaymentInstructionResult
	 * @return InstallPaymentInstructionResult
	 */
	public function setInstallPaymentInstructionResult($_InstallPaymentInstructionResult)
	{
		return ($this->InstallPaymentInstructionResult = $_InstallPaymentInstructionResult);
	}
	/**
	 * Get InstallPaymentInstructionResult
	 * @return AmazonFPSTypeInstallPaymentInstructionResult
	 */
	public function getInstallPaymentInstructionResult()
	{
		return $this->InstallPaymentInstructionResult;
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