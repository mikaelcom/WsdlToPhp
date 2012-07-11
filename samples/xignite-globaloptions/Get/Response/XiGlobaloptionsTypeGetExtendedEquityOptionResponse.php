<?php
/**
 * Class file for XiGlobaloptionsTypeGetExtendedEquityOptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetExtendedEquityOptionResponse
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetExtendedEquityOptionResponse extends XiGlobaloptionsWsdlClass
{
	/**
	 * The GetExtendedEquityOptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeExtendedOption
	 */
	public $GetExtendedEquityOptionResult;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeExtendedOption GetExtendedEquityOptionResult
	 * @return XiGlobaloptionsTypeGetExtendedEquityOptionResponse
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
	 * @return XiGlobaloptionsTypeExtendedOption
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