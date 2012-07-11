<?php
/**
 * Class file for XiMetalsTypeGetHistoricalLondonFixingResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetHistoricalLondonFixingResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetHistoricalLondonFixingResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetHistoricalLondonFixingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLondonFixing
	 */
	public $GetHistoricalLondonFixingResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixing GetHistoricalLondonFixingResult
	 * @return XiMetalsTypeGetHistoricalLondonFixingResponse
	 */
	public function __construct($_GetHistoricalLondonFixingResult = null)
	{
		parent::__construct(array('GetHistoricalLondonFixingResult'=>$_GetHistoricalLondonFixingResult));
	}
	/**
	 * Set GetHistoricalLondonFixingResult
	 * @param LondonFixing GetHistoricalLondonFixingResult
	 * @return LondonFixing
	 */
	public function setGetHistoricalLondonFixingResult($_GetHistoricalLondonFixingResult)
	{
		return ($this->GetHistoricalLondonFixingResult = $_GetHistoricalLondonFixingResult);
	}
	/**
	 * Get GetHistoricalLondonFixingResult
	 * @return XiMetalsTypeLondonFixing
	 */
	public function getGetHistoricalLondonFixingResult()
	{
		return $this->GetHistoricalLondonFixingResult;
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