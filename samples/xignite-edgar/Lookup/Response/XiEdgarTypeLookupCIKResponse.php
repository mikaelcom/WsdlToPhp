<?php
/**
 * Class file for XiEdgarTypeLookupCIKResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeLookupCIKResponse
 * @date 08/07/2012
 */
class XiEdgarTypeLookupCIKResponse extends XiEdgarWsdlClass
{
	/**
	 * The LookupCIKResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfCIKLookup
	 */
	public $LookupCIKResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeArrayOfCIKLookup LookupCIKResult
	 * @return XiEdgarTypeLookupCIKResponse
	 */
	public function __construct($_LookupCIKResult = null)
	{
		parent::__construct(array('LookupCIKResult'=>new XiEdgarTypeArrayOfCIKLookup($_LookupCIKResult)));
	}
	/**
	 * Set LookupCIKResult
	 * @param ArrayOfCIKLookup LookupCIKResult
	 * @return ArrayOfCIKLookup
	 */
	public function setLookupCIKResult($_LookupCIKResult)
	{
		return ($this->LookupCIKResult = $_LookupCIKResult);
	}
	/**
	 * Get LookupCIKResult
	 * @return XiEdgarTypeArrayOfCIKLookup
	 */
	public function getLookupCIKResult()
	{
		return $this->LookupCIKResult;
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