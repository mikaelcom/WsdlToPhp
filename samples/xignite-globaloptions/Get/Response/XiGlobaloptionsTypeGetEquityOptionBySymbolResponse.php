<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionBySymbolResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetEquityOptionBySymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOption
	 */
	public $GetEquityOptionBySymbolResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOption GetEquityOptionBySymbolResult
	 * @return XiGlobaloptionsTypeGetEquityOptionBySymbolResponse
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
	 * @return XiGlobaloptionsTypeOption
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