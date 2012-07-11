<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionSymbolResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionSymbolResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetEquityOptionSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOptionSymbol
	 */
	public $GetEquityOptionSymbolResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOptionSymbol GetEquityOptionSymbolResult
	 * @return XiGlobaloptionsTypeGetEquityOptionSymbolResponse
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
	 * @return XiGlobaloptionsTypeOptionSymbol
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