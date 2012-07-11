<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetAllEquityOptionChainResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetAllEquityOptionChainResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetAllEquityOptionChainResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetAllEquityOptionChainResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOptions
	 */
	public $GetAllEquityOptionChainResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOptions GetAllEquityOptionChainResult
	 * @return XiGlobalrealtimeoptionsTypeGetAllEquityOptionChainResponse
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
	 * @return XiGlobalrealtimeoptionsTypeOptions
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