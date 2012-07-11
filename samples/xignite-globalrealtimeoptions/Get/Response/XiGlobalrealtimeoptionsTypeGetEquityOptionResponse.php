<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionResponse extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The GetEquityOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeOption
	 */
	public $GetEquityOptionResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeOption GetEquityOptionResult
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionResponse
	 */
	public function __construct($_GetEquityOptionResult = null)
	{
		parent::__construct(array('GetEquityOptionResult'=>$_GetEquityOptionResult));
	}
	/**
	 * Set GetEquityOptionResult
	 * @param Option GetEquityOptionResult
	 * @return Option
	 */
	public function setGetEquityOptionResult($_GetEquityOptionResult)
	{
		return ($this->GetEquityOptionResult = $_GetEquityOptionResult);
	}
	/**
	 * Get GetEquityOptionResult
	 * @return XiGlobalrealtimeoptionsTypeOption
	 */
	public function getGetEquityOptionResult()
	{
		return $this->GetEquityOptionResult;
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