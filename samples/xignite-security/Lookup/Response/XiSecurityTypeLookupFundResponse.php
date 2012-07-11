<?php
/**
 * Class file for XiSecurityTypeLookupFundResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupFundResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupFundResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupFundResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfLookupItem
	 */
	public $LookupFundResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfLookupItem LookupFundResult
	 * @return XiSecurityTypeLookupFundResponse
	 */
	public function __construct($_LookupFundResult = null)
	{
		parent::__construct(array('LookupFundResult'=>new XiSecurityTypeArrayOfLookupItem($_LookupFundResult)));
	}
	/**
	 * Set LookupFundResult
	 * @param ArrayOfLookupItem LookupFundResult
	 * @return ArrayOfLookupItem
	 */
	public function setLookupFundResult($_LookupFundResult)
	{
		return ($this->LookupFundResult = $_LookupFundResult);
	}
	/**
	 * Get LookupFundResult
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function getLookupFundResult()
	{
		return $this->LookupFundResult;
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