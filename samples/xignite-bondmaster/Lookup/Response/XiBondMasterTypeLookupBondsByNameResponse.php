<?php
/**
 * Class file for XiBondMasterTypeLookupBondsByNameResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeLookupBondsByNameResponse
 * @date 08/07/2012
 */
class XiBondMasterTypeLookupBondsByNameResponse extends XiBondMasterWsdlClass
{
	/**
	 * The LookupBondsByNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondMasterTypeArrayOfBondsByName
	 */
	public $LookupBondsByNameResult;
	/**
	 * Constructor
	 * @param XiBondMasterTypeArrayOfBondsByName LookupBondsByNameResult
	 * @return XiBondMasterTypeLookupBondsByNameResponse
	 */
	public function __construct($_LookupBondsByNameResult = null)
	{
		parent::__construct(array('LookupBondsByNameResult'=>new XiBondMasterTypeArrayOfBondsByName($_LookupBondsByNameResult)));
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
	 * @return XiBondMasterTypeArrayOfBondsByName
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