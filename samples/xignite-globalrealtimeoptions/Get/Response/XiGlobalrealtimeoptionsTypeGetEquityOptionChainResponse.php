<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionChainResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOptions
	 */
	public $GetEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOptions GetEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionChainResponse
	 */
	public function __construct($_GetEquityOptionChainResult = null)
	{
		parent::__construct(array('GetEquityOptionChainResult'=>$_GetEquityOptionChainResult));
	}
	/**
	 * Set GetEquityOptionChainResult
	 * @param Options GetEquityOptionChainResult
	 * @return Options
	 */
	public function setGetEquityOptionChainResult($_GetEquityOptionChainResult)
	{
		return ($this->GetEquityOptionChainResult = $_GetEquityOptionChainResult);
	}
	/**
	 * Get GetEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeOptions
	 */
	public function getGetEquityOptionChainResult()
	{
		return $this->GetEquityOptionChainResult;
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