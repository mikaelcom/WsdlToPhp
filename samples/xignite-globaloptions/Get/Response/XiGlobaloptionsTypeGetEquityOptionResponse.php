<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetEquityOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeOption
	 */
	public $GetEquityOptionResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeOption GetEquityOptionResult
	 * @return XiGlobaloptionsTypeGetEquityOptionResponse
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
	 * @return XiGlobaloptionsTypeOption
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