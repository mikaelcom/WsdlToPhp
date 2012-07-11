<?php
/**
 * Class file for BingTypePhonebookRequest
 * @date 02/07/2012
 */
/**
 * Class BingTypePhonebookRequest
 * @date 02/07/2012
 */
class BingTypePhonebookRequest extends BingWsdlClass
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
	 * The FileType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileType;
	/**
	 * The SortBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypePhonebookSortOption
	 */
	public $SortBy;
	/**
	 * The LocId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LocId;
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Category;
	/**
	 * Constructor
	 * @param unsignedInt Offset
	 * @param unsignedInt Count
	 * @param string FileType
	 * @param BingTypePhonebookSortOption SortBy
	 * @param string LocId
	 * @param string Category
	 * @return BingTypePhonebookRequest
	 */
	public function __construct($_Offset = null,$_Count = null,$_FileType = null,$_SortBy = null,$_LocId = null,$_Category = null)
	{
		parent::__construct(array('Offset'=>$_Offset,'Count'=>$_Count,'FileType'=>$_FileType,'SortBy'=>$_SortBy,'LocId'=>$_LocId,'Category'=>$_Category));
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
	 * Set FileType
	 * @param string FileType
	 * @return string
	 */
	public function setFileType($_FileType)
	{
		return ($this->FileType = $_FileType);
	}
	/**
	 * Get FileType
	 * @return string
	 */
	public function getFileType()
	{
		return $this->FileType;
	}
	/**
	 * Set SortBy
	 * @param PhonebookSortOption SortBy
	 * @return PhonebookSortOption
	 */
	public function setSortBy($_SortBy)
	{
		return ($this->SortBy = BingTypePhonebookSortOption::valueIsValid($_SortBy)?$_SortBy:null);
	}
	/**
	 * Get SortBy
	 * @return BingTypePhonebookSortOption
	 */
	public function getSortBy()
	{
		return $this->SortBy;
	}
	/**
	 * Set LocId
	 * @param string LocId
	 * @return string
	 */
	public function setLocId($_LocId)
	{
		return ($this->LocId = $_LocId);
	}
	/**
	 * Get LocId
	 * @return string
	 */
	public function getLocId()
	{
		return $this->LocId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>