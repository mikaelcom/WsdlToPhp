<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionSymbolResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionSymbolResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetEquityOptionSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOptionSymbol
	 */
	public $GetEquityOptionSymbolResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOptionSymbol GetEquityOptionSymbolResult
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionSymbolResponse
	 */
	public function __construct($_GetEquityOptionSymbolResult = null)
	{
		parent::__construct(array('GetEquityOptionSymbolResult'=>$_GetEquityOptionSymbolResult));
	}
	/**
	 * Set GetEquityOptionSymbolResult
	 * @param OptionSymbol GetEquityOptionSymbolResult
	 * @return OptionSymbol
	 */
	public function setGetEquityOptionSymbolResult($_GetEquityOptionSymbolResult)
	{
		return ($this->GetEquityOptionSymbolResult = $_GetEquityOptionSymbolResult);
	}
	/**
	 * Get GetEquityOptionSymbolResult
	 * @return XiGlobalrealtimeoptionsTypeOptionSymbol
	 */
	public function getGetEquityOptionSymbolResult()
	{
		return $this->GetEquityOptionSymbolResult;
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