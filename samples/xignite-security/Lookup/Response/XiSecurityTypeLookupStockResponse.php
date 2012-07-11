<?php
/**
 * Class file for XiSecurityTypeLookupStockResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeLookupStockResponse
 * @date 08/07/2012
 */
class XiSecurityTypeLookupStockResponse extends XiSecurityWsdlClass
{
	/**
	 * The LookupStockResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfLookupItem
	 */
	public $LookupStockResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeArrayOfLookupItem LookupStockResult
	 * @return XiSecurityTypeLookupStockResponse
	 */
	public function __construct($_LookupStockResult = null)
	{
		parent::__construct(array('LookupStockResult'=>new XiSecurityTypeArrayOfLookupItem($_LookupStockResult)));
	}
	/**
	 * Set LookupStockResult
	 * @param ArrayOfLookupItem LookupStockResult
	 * @return ArrayOfLookupItem
	 */
	public function setLookupStockResult($_LookupStockResult)
	{
		return ($this->LookupStockResult = $_LookupStockResult);
	}
	/**
	 * Get LookupStockResult
	 * @return XiSecurityTypeArrayOfLookupItem
	 */
	public function getLookupStockResult()
	{
		return $this->LookupStockResult;
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