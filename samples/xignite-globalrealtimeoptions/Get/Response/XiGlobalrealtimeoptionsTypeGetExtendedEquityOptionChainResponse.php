<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChainResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeExtendedOptions
	 */
	public $GetExtendedEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedOptions GetExtendedEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionChainResponse
	 */
	public function __construct($_GetExtendedEquityOptionChainResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionChainResult'=>$_GetExtendedEquityOptionChainResult));
	}
	/**
	 * Set GetExtendedEquityOptionChainResult
	 * @param ExtendedOptions GetExtendedEquityOptionChainResult
	 * @return ExtendedOptions
	 */
	public function setGetExtendedEquityOptionChainResult($_GetExtendedEquityOptionChainResult)
	{
		return ($this->GetExtendedEquityOptionChainResult = $_GetExtendedEquityOptionChainResult);
	}
	/**
	 * Get GetExtendedEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeExtendedOptions
	 */
	public function getGetExtendedEquityOptionChainResult()
	{
		return $this->GetExtendedEquityOptionChainResult;
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