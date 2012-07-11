<?php
/**
 * Class file for XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse extends XiGlobalmasterWsdlClass
{
	/**
	 * The GetIssuerByCompanyIdentifierResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIssuer
	 */
	public $GetIssuerByCompanyIdentifierResult;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeIssuer GetIssuerByCompanyIdentifierResult
	 * @return XiGlobalmasterTypeGetIssuerByCompanyIdentifierResponse
	 */
	public function __construct($_GetIssuerByCompanyIdentifierResult = null)
	{
		parent::__construct(array('GetIssuerByCompanyIdentifierResult'=>$_GetIssuerByCompanyIdentifierResult));
	}
	/**
	 * Set GetIssuerByCompanyIdentifierResult
	 * @param Issuer GetIssuerByCompanyIdentifierResult
	 * @return Issuer
	 */
	public function setGetIssuerByCompanyIdentifierResult($_GetIssuerByCompanyIdentifierResult)
	{
		return ($this->GetIssuerByCompanyIdentifierResult = $_GetIssuerByCompanyIdentifierResult);
	}
	/**
	 * Get GetIssuerByCompanyIdentifierResult
	 * @return XiGlobalmasterTypeIssuer
	 */
	public function getGetIssuerByCompanyIdentifierResult()
	{
		return $this->GetIssuerByCompanyIdentifierResult;
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