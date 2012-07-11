<?php
/**
 * Class file for XiSecurityTypeLookupResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfLookupItem
	 */
	public $LookupResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfLookupItem LookupResult
	 * @return XiSecurityTypeLookupResponse
	 */
	public function __construct($_LookupResult = null)
	{
		parent::__construct(array('LookupResult'=>new XiSecurityTypeArrayOfLookupItem($_LookupResult)));
	}
	/**
	 * Set LookupResult
	 * @param ArrayOfLookupItem LookupResult
	 * @return ArrayOfLookupItem
	 */
	public function setLookupResult($_LookupResult)
	{
		return ($this->LookupResult = $_LookupResult);
	}
	/**
	 * Get LookupResult
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function getLookupResult()
	{
		return $this->LookupResult;
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