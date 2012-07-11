<?php
/**
 * Class file for XiGlobalBondMasterTypeLookupBondsByIssuerResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeLookupBondsByIssuerResponse
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeLookupBondsByIssuerResponse extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The LookupBondsByIssuerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeArrayOfBondsByIssuer
	 */
	public $LookupBondsByIssuerResult;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeArrayOfBondsByIssuer LookupBondsByIssuerResult
	 * @return XiGlobalBondMasterTypeLookupBondsByIssuerResponse
	 */
	public function __construct($_LookupBondsByIssuerResult = null)
	{
		parent::__construct(array('LookupBondsByIssuerResult'=>new XiGlobalBondMasterTypeArrayOfBondsByIssuer($_LookupBondsByIssuerResult)));
	}
	/**
	 * Set LookupBondsByIssuerResult
	 * @param ArrayOfBondsByIssuer LookupBondsByIssuerResult
	 * @return ArrayOfBondsByIssuer
	 */
	public function setLookupBondsByIssuerResult($_LookupBondsByIssuerResult)
	{
		return ($this->LookupBondsByIssuerResult = $_LookupBondsByIssuerResult);
	}
	/**
	 * Get LookupBondsByIssuerResult
	 * @return XiGlobalBondMasterTypeArrayOfBondsByIssuer
	 */
	public function getLookupBondsByIssuerResult()
	{
		return $this->LookupBondsByIssuerResult;
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