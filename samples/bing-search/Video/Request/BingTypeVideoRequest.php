<?php
/**
 * Class file for BingTypeVideoRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeVideoRequest
 * @date 02/07/2012
 */
class BingTypeVideoRequest extends BingWsdlClass
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
	 * The SortBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeVideoSortOption
	 */
	public $SortBy;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param BingTypeArrayOfString Filters
	 * @param BingTypeVideoSortOption SortBy
	 * @return BingTypeVideoRequest
	 */
	public function __construct($_Offset = null,$_Count = null,$_Filters = null,$_SortBy = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'Filters'=>new BingTypeArrayOfString($_Filters),'SortBy'=>$_SortBy));
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
	 * Set SortBy
	 * @param VideoSortOption SortBy
	 * @return VideoSortOption
	 */
	public function setSortBy($_SortBy)
	{
		return ($this->SortBy = BingTypeVideoSortOption::valueIsValid($_SortBy)?$_SortBy:null);
	}
	/**
	 * Get SortBy
	 * @return BingTypeVideoSortOption
	 */
	public function getSortBy()
	{
		return $this->SortBy;
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