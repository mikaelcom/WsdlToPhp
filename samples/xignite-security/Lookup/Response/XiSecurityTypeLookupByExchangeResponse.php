<?php
/**
 * Class file for XiSecurityTypeLookupByExchangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupByExchangeResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupByExchangeResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupByExchangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfLookupItem
	 */
	public $LookupByExchangeResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfLookupItem LookupByExchangeResult
	 * @return XiSecurityTypeLookupByExchangeResponse
	 */
	public function __construct($_LookupByExchangeResult = null)
	{
		parent::__construct(array('LookupByExchangeResult'=>new XiSecurityTypeArrayOfLookupItem($_LookupByExchangeResult)));
	}
	/**
	 * Set LookupByExchangeResult
	 * @param ArrayOfLookupItem LookupByExchangeResult
	 * @return ArrayOfLookupItem
	 */
	public function setLookupByExchangeResult($_LookupByExchangeResult)
	{
		return ($this->LookupByExchangeResult = $_LookupByExchangeResult);
	}
	/**
	 * Get LookupByExchangeResult
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function getLookupByExchangeResult()
	{
		return $this->LookupByExchangeResult;
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