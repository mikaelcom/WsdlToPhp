<?php
/**
 * Class file for BingTypeNewsRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypeNewsRequest
 * @date 02/07/2012
 */
class BingTypeNewsRequest extends BingWsdlClass
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
	 * 	- default : 10
	 * @var unsignedInt
	 */
	public $Count;
	/**
	 * The LocationOverride
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LocationOverride;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Category;
	/**
	 * The SortBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeNewsSortOption
	 */
	public $SortBy;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param string LocationOverride
	 * @param string Category
	 * @param BingTypeNewsSortOption SortBy
	 * @return BingTypeNewsRequest
	 */
	public function __construct($_Offset = null,$_Count = 10,$_LocationOverride = null,$_Category = null,$_SortBy = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'LocationOverride'=>$_LocationOverride,'Category'=>$_Category,'SortBy'=>$_SortBy));
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
	 * Set LocationOverride
	 * @param string LocationOverride
	 * @return string
	 */
	public function setLocationOverride($_LocationOverride)
	{
		return ($this->LocationOverride = $_LocationOverride);
	}
	/**
	 * Get LocationOverride
	 * @return string
	 */
	public function getLocationOverride()
	{
		return $this->LocationOverride;
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set SortBy
	 * @param NewsSortOption SortBy
	 * @return NewsSortOption
	 */
	public function setSortBy($_SortBy)
	{
		return ($this->SortBy = BingTypeNewsSortOption::valueIsValid($_SortBy)?$_SortBy:null);
	}
	/**
	 * Get SortBy
	 * @return BingTypeNewsSortOption
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