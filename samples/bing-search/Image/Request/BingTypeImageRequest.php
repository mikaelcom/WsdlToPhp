<?php
/**
 * Class file for BingTypeImageRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeImageRequest
 * @date 02/07/2012
 */
class BingTypeImageRequest extends BingWsdlClass
{
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Count;
	/**
	 * The Filters
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfString
	 */
	public $Filters;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param BingTypeArrayOfString Filters
	 * @return BingTypeImageRequest
	 */
	public function __construct($_Offset = null,$_Count = null,$_Filters = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'Filters'=>new BingTypeArrayOfString($_Filters)));
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set Count
	 * @param unsignedInt Count
	 * @return unsignedInt
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return unsignedInt
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Filters
	 * @param ArrayOfString Filters
	 * @return ArrayOfString
	 */
	public function setFilters($_Filters)
	{
		return ($this->Filters = $_Filters);
	}
	/**
	 * Get Filters
	 * @return BingTypeArrayOfString
	 */
	public function getFilters()
	{
		return $this->Filters;
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