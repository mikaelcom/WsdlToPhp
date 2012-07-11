<?php
/**
 * Class file for XiSecurityTypeLookupBondResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupBondResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupBondResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupBondResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeBondLookup
	 */
	public $LookupBondResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeBondLookup LookupBondResult
	 * @return XiSecurityTypeLookupBondResponse
	 */
	public function __construct($_LookupBondResult = null)
	{
		parent::__construct(array('LookupBondResult'=>$_LookupBondResult));
	}
	/**
	 * Set LookupBondResult
	 * @param BondLookup LookupBondResult
	 * @return BondLookup
	 */
	public function setLookupBondResult($_LookupBondResult)
	{
		return ($this->LookupBondResult = $_LookupBondResult);
	}
	/**
	 * Get LookupBondResult
	 * @return XiSecurityTypeBondLookup
	 */
	public function getLookupBondResult()
	{
		return $this->LookupBondResult;
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