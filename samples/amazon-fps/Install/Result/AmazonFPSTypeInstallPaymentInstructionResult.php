<?php
/**
 * Class file for AmazonFPSTypeInstallPaymentInstructionResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeInstallPaymentInstructionResult
 * @date 10/07/2012
 */
class AmazonFPSTypeInstallPaymentInstructionResult extends AmazonFPSWsdlClass
{
	/**
	 * The TokenId
	 * @var string
	 */
	public $TokenId;
	/**
	 * Constructor
	 * @param string TokenId
	 * @return AmazonFPSTypeInstallPaymentInstructionResult
	 */
	public function __construct($_TokenId = null)
	{
		parent::__construct(array('TokenId'=>$_TokenId));
	}
	/**
	 * Set TokenId
	 * @param string TokenId
	 * @return string
	 */
	public function setTokenId($_TokenId)
	{
		return ($this->TokenId = $_TokenId);
	}
	/**
	 * Get TokenId
	 * @return string
	 */
	public function getTokenId()
	{
		return $this->TokenId;
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