<?php
/**
 * Class file for XiRatesTypeGetLastLondonFixingResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLastLondonFixingResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLastLondonFixingResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLastLondonFixingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeLondonFixing
	 */
	public $GetLastLondonFixingResult;
	/**
	 * Constructor
	 * @param XiRatesTypeLondonFixing GetLastLondonFixingResult
	 * @return XiRatesTypeGetLastLondonFixingResponse
	 */
	public function __construct($_GetLastLondonFixingResult = null)
	{
		parent::__construct(array('GetLastLondonFixingResult'=>$_GetLastLondonFixingResult));
	}
	/**
	 * Set GetLastLondonFixingResult
	 * @param LondonFixing GetLastLondonFixingResult
	 * @return LondonFixing
	 */
	public function setGetLastLondonFixingResult($_GetLastLondonFixingResult)
	{
		return ($this->GetLastLondonFixingResult = $_GetLastLondonFixingResult);
	}
	/**
	 * Get GetLastLondonFixingResult
	 * @return XiRatesTypeLondonFixing
	 */
	public function getGetLastLondonFixingResult()
	{
		return $this->GetLastLondonFixingResult;
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