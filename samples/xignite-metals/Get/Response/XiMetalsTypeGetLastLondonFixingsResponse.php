<?php
/**
 * Class file for XiMetalsTypeGetLastLondonFixingsResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastLondonFixingsResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastLondonFixingsResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastLondonFixingsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfLondonFixing
	 */
	public $GetLastLondonFixingsResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfLondonFixing GetLastLondonFixingsResult
	 * @return XiMetalsTypeGetLastLondonFixingsResponse
	 */
	public function __construct($_GetLastLondonFixingsResult = null)
	{
		parent::__construct(array('GetLastLondonFixingsResult'=>new XiMetalsTypeArrayOfLondonFixing($_GetLastLondonFixingsResult)));
	}
	/**
	 * Set GetLastLondonFixingsResult
	 * @param ArrayOfLondonFixing GetLastLondonFixingsResult
	 * @return ArrayOfLondonFixing
	 */
	public function setGetLastLondonFixingsResult($_GetLastLondonFixingsResult)
	{
		return ($this->GetLastLondonFixingsResult = $_GetLastLondonFixingsResult);
	}
	/**
	 * Get GetLastLondonFixingsResult
	 * @return XiMetalsTypeArrayOfLondonFixing
	 */
	public function getGetLastLondonFixingsResult()
	{
		return $this->GetLastLondonFixingsResult;
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