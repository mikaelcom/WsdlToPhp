<?php
/**
 * Class file for XiGlobalmasterTypeGetIssuerResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetIssuerResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetIssuerResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetIssuerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfIssuer
	 */
	public $GetIssuerResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeArrayOfIssuer GetIssuerResult
	 * @return XiGlobalmasterTypeGetIssuerResponse
	 */
	public function __construct($_GetIssuerResult = null)
	{
		parent::__construct(array('GetIssuerResult'=>new XiGlobalmasterTypeArrayOfIssuer($_GetIssuerResult)));
	}
	/**
	 * Set GetIssuerResult
	 * @param ArrayOfIssuer GetIssuerResult
	 * @return ArrayOfIssuer
	 */
	public function setGetIssuerResult($_GetIssuerResult)
	{
		return ($this->GetIssuerResult = $_GetIssuerResult);
	}
	/**
	 * Get GetIssuerResult
	 * @return XiGlobalmasterTypeArrayOfIssuer
	 */
	public function getGetIssuerResult()
	{
		return $this->GetIssuerResult;
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