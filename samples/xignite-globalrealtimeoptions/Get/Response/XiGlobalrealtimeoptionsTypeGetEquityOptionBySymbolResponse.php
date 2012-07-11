<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetEquityOptionBySymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOption
	 */
	public $GetEquityOptionBySymbolResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOption GetEquityOptionBySymbolResult
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbolResponse
	 */
	public function __construct($_GetEquityOptionBySymbolResult = null)
	{
		parent::__construct(array('GetEquityOptionBySymbolResult'=>$_GetEquityOptionBySymbolResult));
	}
	/**
	 * Set GetEquityOptionBySymbolResult
	 * @param Option GetEquityOptionBySymbolResult
	 * @return Option
	 */
	public function setGetEquityOptionBySymbolResult($_GetEquityOptionBySymbolResult)
	{
		return ($this->GetEquityOptionBySymbolResult = $_GetEquityOptionBySymbolResult);
	}
	/**
	 * Get GetEquityOptionBySymbolResult
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function getGetEquityOptionBySymbolResult()
	{
		return $this->GetEquityOptionBySymbolResult;
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