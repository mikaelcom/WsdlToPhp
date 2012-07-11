<?php
/**
 * Class file for XiGlobalmasterTypeGetSecurityResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetSecurityResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetSecurityResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetSecurityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfSecurity
	 */
	public $GetSecurityResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfSecurity GetSecurityResult
	 * @return XiGlobalmasterTypeGetSecurityResponse
	 */
	public function __construct($_GetSecurityResult = null)
	{
		parent::__construct(array('GetSecurityResult'=>new XiGlobalmasterTypeArrayOfSecurity($_GetSecurityResult)));
	}
	/**
	 * Set GetSecurityResult
	 * @param ArrayOfSecurity GetSecurityResult
	 * @return ArrayOfSecurity
	 */
	public function setGetSecurityResult($_GetSecurityResult)
	{
		return ($this->GetSecurityResult = $_GetSecurityResult);
	}
	/**
	 * Get GetSecurityResult
	 * @return XiGlobalmasterTypeArrayOfSecurity
	 */
	public function getGetSecurityResult()
	{
		return $this->GetSecurityResult;
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