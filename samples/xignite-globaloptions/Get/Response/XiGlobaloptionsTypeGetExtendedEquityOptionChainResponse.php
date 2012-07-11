<?php
/**
 * Class file for XiGlobaloptionsTypeGetExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetExtendedEquityOptionChainResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeExtendedOptions
	 */
	public $GetExtendedEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedOptions GetExtendedEquityOptionChainResult
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionChainResponse
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
	 * @return XiGlobaloptionsTypeExtendedOptions
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