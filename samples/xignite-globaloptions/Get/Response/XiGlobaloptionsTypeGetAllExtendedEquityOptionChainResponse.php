<?php
/**
 * Class file for XiGlobaloptionsTypeGetAllExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetAllExtendedEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetAllExtendedEquityOptionChainResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetAllExtendedEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeExtendedOptions
	 */
	public $GetAllExtendedEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedOptions GetAllExtendedEquityOptionChainResult
	 * @return XiGlobaloptionsTypeGetAllExtendedEquityOptionChainResponse
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
	 * @return XiGlobaloptionsTypeExtendedOptions
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