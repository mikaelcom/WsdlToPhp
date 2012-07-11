<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChainResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetAllExtendedEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeExtendedOptions
	 */
	public $GetAllExtendedEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedOptions GetAllExtendedEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeGetAllExtendedEquityOptionChainResponse
	 */
	public function __construct($_GetAllExtendedEquityOptionChainResult = null)
	{
		parent::__construct(array('GetAllExtendedEquityOptionChainResult'=>$_GetAllExtendedEquityOptionChainResult));
	}
	/**
	 * Set GetAllExtendedEquityOptionChainResult
	 * @param ExtendedOptions GetAllExtendedEquityOptionChainResult
	 * @return ExtendedOptions
	 */
	public function setGetAllExtendedEquityOptionChainResult($_GetAllExtendedEquityOptionChainResult)
	{
		return ($this->GetAllExtendedEquityOptionChainResult = $_GetAllExtendedEquityOptionChainResult);
	}
	/**
	 * Get GetAllExtendedEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeExtendedOptions
	 */
	public function getGetAllExtendedEquityOptionChainResult()
	{
		return $this->GetAllExtendedEquityOptionChainResult;
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