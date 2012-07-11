<?php
/**
 * Class file for AmazonFPSTypeGetTokenUsageResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTokenUsageResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTokenUsageResult extends AmazonFPSWsdlClass
{
	/**
	 * The TokenUsageLimits
	 * Meta informations :
	 * 	- maxOccurs : 3
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTokenUsageLimit
	 */
	public $TokenUsageLimits;
	/**
	 * Constructor
	 * @param AmazonFPSTypeTokenUsageLimit TokenUsageLimits
	 * @return AmazonFPSTypeGetTokenUsageResult
	 */
	public function __construct($_TokenUsageLimits = null)
	{
		parent::__construct(array('TokenUsageLimits'=>$_TokenUsageLimits));
	}
	/**
	 * Set TokenUsageLimits
	 * @param TokenUsageLimit TokenUsageLimits
	 * @return TokenUsageLimit
	 */
	public function setTokenUsageLimits($_TokenUsageLimits)
	{
		return ($this->TokenUsageLimits = $_TokenUsageLimits);
	}
	/**
	 * Get TokenUsageLimits
	 * @return AmazonFPSTypeTokenUsageLimit
	 */
	public function getTokenUsageLimits()
	{
		return $this->TokenUsageLimits;
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