<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionChainResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOptions
	 */
	public $GetEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOptions GetEquityOptionChainResult
	 * @return XiGlobaloptionsTypeGetEquityOptionChainResponse
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
	 * @return XiGlobaloptionsTypeOptions
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