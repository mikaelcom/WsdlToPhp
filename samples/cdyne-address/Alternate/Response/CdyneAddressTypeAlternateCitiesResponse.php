<?php
/**
 * Class file for CdyneAddressTypeAlternateCitiesResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeAlternateCitiesResponse
 * @date 02/07/2012
 */
class CdyneAddressTypeAlternateCitiesResponse extends CdyneAddressWsdlClass
{
	/**
	 * The AlternateCitiesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneAddressTypeArrayOfAnyType
	 */
	public $AlternateCitiesResult;
	/**
	 * Constructor
	 * @param CdyneAddressTypeArrayOfAnyType AlternateCitiesResult
	 * @return CdyneAddressTypeAlternateCitiesResponse
	 */
	public function __construct($_AlternateCitiesResult = null)
	{
		parent::__construct(array('AlternateCitiesResult'=>new CdyneAddressTypeArrayOfAnyType($_AlternateCitiesResult)));
	}
	/**
	 * Set AlternateCitiesResult
	 * @param ArrayOfAnyType AlternateCitiesResult
	 * @return ArrayOfAnyType
	 */
	public function setAlternateCitiesResult($_AlternateCitiesResult)
	{
		return ($this->AlternateCitiesResult = $_AlternateCitiesResult);
	}
	/**
	 * Get AlternateCitiesResult
	 * @return CdyneAddressTypeArrayOfAnyType
	 */
	public function getAlternateCitiesResult()
	{
		return $this->AlternateCitiesResult;
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