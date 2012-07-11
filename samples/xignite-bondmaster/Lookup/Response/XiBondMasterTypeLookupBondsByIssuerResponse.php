<?php
/**
 * Class file for XiBondMasterTypeLookupBondsByIssuerResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeLookupBondsByIssuerResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeLookupBondsByIssuerResponse extends XiBondMasterWsdlClass
{
	/**
	 * The LookupBondsByIssuerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfBondsByIssuer
	 */
	public $LookupBondsByIssuerResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeArrayOfBondsByIssuer LookupBondsByIssuerResult
	 * @return XiBondMasterTypeLookupBondsByIssuerResponse
	 */
	public function __construct($_LookupBondsByIssuerResult = null)
	{
		parent::__construct(array('LookupBondsByIssuerResult'=>new XiBondMasterTypeArrayOfBondsByIssuer($_LookupBondsByIssuerResult)));
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
	 * @return XiBondMasterTypeArrayOfBondsByIssuer
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