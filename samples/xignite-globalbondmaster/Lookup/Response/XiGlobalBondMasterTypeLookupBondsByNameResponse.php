<?php
/**
 * Class file for XiGlobalBondMasterTypeLookupBondsByNameResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalBondMasterTypeLookupBondsByNameResponse
 * @date 08/07/2012
 */
class XiGlobalBondMasterTypeLookupBondsByNameResponse extends XiGlobalBondMasterWsdlClass
{
	/**
	 * The LookupBondsByNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalBondMasterTypeArrayOfBondsByName
	 */
	public $LookupBondsByNameResult;
	/**
	 * Constructor
	 * @param XiGlobalBondMasterTypeArrayOfBondsByName LookupBondsByNameResult
	 * @return XiGlobalBondMasterTypeLookupBondsByNameResponse
	 */
	public function __construct($_LookupBondsByNameResult = null)
	{
		parent::__construct(array('LookupBondsByNameResult'=>new XiGlobalBondMasterTypeArrayOfBondsByName($_LookupBondsByNameResult)));
	}
	/**
	 * Set LookupBondsByNameResult
	 * @param ArrayOfBondsByName LookupBondsByNameResult
	 * @return ArrayOfBondsByName
	 */
	public function setLookupBondsByNameResult($_LookupBondsByNameResult)
	{
		return ($this->LookupBondsByNameResult = $_LookupBondsByNameResult);
	}
	/**
	 * Get LookupBondsByNameResult
	 * @return XiGlobalBondMasterTypeArrayOfBondsByName
	 */
	public function getLookupBondsByNameResult()
	{
		return $this->LookupBondsByNameResult;
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