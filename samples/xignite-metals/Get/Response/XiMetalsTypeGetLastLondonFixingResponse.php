<?php
/**
 * Class file for XiMetalsTypeGetLastLondonFixingResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastLondonFixingResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastLondonFixingResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastLondonFixingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeLondonFixing
	 */
	public $GetLastLondonFixingResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeLondonFixing GetLastLondonFixingResult
	 * @return XiMetalsTypeGetLastLondonFixingResponse
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
	 * @return XiMetalsTypeLondonFixing
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