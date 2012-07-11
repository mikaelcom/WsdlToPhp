<?php
/**
 * Class file for CdyneAddressTypeVersionInformationResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeVersionInformationResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeVersionInformationResponse extends CdyneAddressWsdlClass
{
	/**
	 * The VersionInformationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeArrayOfAnyType
	 */
	public $VersionInformationResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeArrayOfAnyType VersionInformationResult
	 * @return CdyneAddressTypeVersionInformationResponse
	 */
	public function __construct($_VersionInformationResult = null)
	{
		parent::__construct(array('VersionInformationResult'=>new CdyneAddressTypeArrayOfAnyType($_VersionInformationResult)));
	}
	/**
	 * Set VersionInformationResult
	 * @param ArrayOfAnyType VersionInformationResult
	 * @return ArrayOfAnyType
	 */
	public function setVersionInformationResult($_VersionInformationResult)
	{
		return ($this->VersionInformationResult = $_VersionInformationResult);
	}
	/**
	 * Get VersionInformationResult
	 * @return CdyneAddressTypeArrayOfAnyType
	 */
	public function getVersionInformationResult()
	{
		return $this->VersionInformationResult;
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