<?php
/**
 * Class file for XiGlobalmasterTypeGetSecuritiesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetSecuritiesResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetSecuritiesResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetSecuritiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfSecurity
	 */
	public $GetSecuritiesResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfSecurity GetSecuritiesResult
	 * @return XiGlobalmasterTypeGetSecuritiesResponse
	 */
	public function __construct($_GetSecuritiesResult = null)
	{
		parent::__construct(array('GetSecuritiesResult'=>new XiGlobalmasterTypeArrayOfSecurity($_GetSecuritiesResult)));
	}
	/**
	 * Set GetSecuritiesResult
	 * @param ArrayOfSecurity GetSecuritiesResult
	 * @return ArrayOfSecurity
	 */
	public function setGetSecuritiesResult($_GetSecuritiesResult)
	{
		return ($this->GetSecuritiesResult = $_GetSecuritiesResult);
	}
	/**
	 * Get GetSecuritiesResult
	 * @return XiGlobalmasterTypeArrayOfSecurity
	 */
	public function getGetSecuritiesResult()
	{
		return $this->GetSecuritiesResult;
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