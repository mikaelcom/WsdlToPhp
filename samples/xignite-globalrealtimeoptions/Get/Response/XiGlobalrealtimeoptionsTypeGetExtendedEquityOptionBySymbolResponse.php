<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionBySymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public $GetExtendedEquityOptionBySymbolResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedOption GetExtendedEquityOptionBySymbolResult
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionBySymbolResponse
	 */
	public function __construct($_GetExtendedEquityOptionBySymbolResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionBySymbolResult'=>$_GetExtendedEquityOptionBySymbolResult));
	}
	/**
	 * Set GetExtendedEquityOptionBySymbolResult
	 * @param ExtendedOption GetExtendedEquityOptionBySymbolResult
	 * @return ExtendedOption
	 */
	public function setGetExtendedEquityOptionBySymbolResult($_GetExtendedEquityOptionBySymbolResult)
	{
		return ($this->GetExtendedEquityOptionBySymbolResult = $_GetExtendedEquityOptionBySymbolResult);
	}
	/**
	 * Get GetExtendedEquityOptionBySymbolResult
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function getGetExtendedEquityOptionBySymbolResult()
	{
		return $this->GetExtendedEquityOptionBySymbolResult;
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