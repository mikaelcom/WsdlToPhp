<?php
/**
 * Class file for XiGlobaloptionsTypeGetAllEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetAllEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetAllEquityOptionChainResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetAllEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOptions
	 */
	public $GetAllEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOptions GetAllEquityOptionChainResult
	 * @return XiGlobaloptionsTypeGetAllEquityOptionChainResponse
	 */
	public function __construct($_GetAllEquityOptionChainResult = null)
	{
		parent::__construct(array('GetAllEquityOptionChainResult'=>$_GetAllEquityOptionChainResult));
	}
	/**
	 * Set GetAllEquityOptionChainResult
	 * @param Options GetAllEquityOptionChainResult
	 * @return Options
	 */
	public function setGetAllEquityOptionChainResult($_GetAllEquityOptionChainResult)
	{
		return ($this->GetAllEquityOptionChainResult = $_GetAllEquityOptionChainResult);
	}
	/**
	 * Get GetAllEquityOptionChainResult
	 * @return XiGlobaloptionsTypeOptions
	 */
	public function getGetAllEquityOptionChainResult()
	{
		return $this->GetAllEquityOptionChainResult;
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