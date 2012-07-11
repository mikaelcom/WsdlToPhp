<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public $GetExtendedEquityOptionResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeExtendedOption GetExtendedEquityOptionResult
	 * @return XiGlobalrealtimeoptionsTypeGetExtendedEquityOptionResponse
	 */
	public function __construct($_GetExtendedEquityOptionResult = null)
	{
		parent::__construct(array('GetExtendedEquityOptionResult'=>$_GetExtendedEquityOptionResult));
	}
	/**
	 * Set GetExtendedEquityOptionResult
	 * @param ExtendedOption GetExtendedEquityOptionResult
	 * @return ExtendedOption
	 */
	public function setGetExtendedEquityOptionResult($_GetExtendedEquityOptionResult)
	{
		return ($this->GetExtendedEquityOptionResult = $_GetExtendedEquityOptionResult);
	}
	/**
	 * Get GetExtendedEquityOptionResult
	 * @return XiGlobalrealtimeoptionsTypeExtendedOption
	 */
	public function getGetExtendedEquityOptionResult()
	{
		return $this->GetExtendedEquityOptionResult;
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