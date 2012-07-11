<?php
/**
 * Class file for XiSecurityTypeLookupByExchangesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupByExchangesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupByExchangesResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupByExchangesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfLookupItem
	 */
	public $LookupByExchangesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfLookupItem LookupByExchangesResult
	 * @return XiSecurityTypeLookupByExchangesResponse
	 */
	public function __construct($_LookupByExchangesResult = null)
	{
		parent::__construct(array('LookupByExchangesResult'=>new XiSecurityTypeArrayOfLookupItem($_LookupByExchangesResult)));
	}
	/**
	 * Set LookupByExchangesResult
	 * @param ArrayOfLookupItem LookupByExchangesResult
	 * @return ArrayOfLookupItem
	 */
	public function setLookupByExchangesResult($_LookupByExchangesResult)
	{
		return ($this->LookupByExchangesResult = $_LookupByExchangesResult);
	}
	/**
	 * Get LookupByExchangesResult
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function getLookupByExchangesResult()
	{
		return $this->LookupByExchangesResult;
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