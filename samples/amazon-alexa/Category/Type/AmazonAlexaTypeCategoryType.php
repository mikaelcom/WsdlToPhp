<?php
/**
 * Class file for AmazonAlexaTypeCategoryType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryType
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryType extends AmazonAlexaWsdlClass
{
	/**
	 * The Path
	 * @var token
	 */
	public $Path;
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * The SubCategoryCount
	 * @var UnsignedIntegerType
	 */
	public $SubCategoryCount;
	/**
	 * The TotalListingCount
	 * @var UnsignedIntegerType
	 */
	public $TotalListingCount;
	/**
	 * Constructor
	 * @param token Path
	 * @param normalizedString Title
	 * @param UnsignedIntegerType SubCategoryCount
	 * @param UnsignedIntegerType TotalListingCount
	 * @return AmazonAlexaTypeCategoryType
	 */
	public function __construct($_Path = null,$_Title = null,$_SubCategoryCount = null,$_TotalListingCount = null)
	{
		parent::__construct(array('Path'=>$_Path,'Title'=>$_Title,'SubCategoryCount'=>$_SubCategoryCount,'TotalListingCount'=>$_TotalListingCount));
	}
	/**
	 * Set Path
	 * @param token Path
	 * @return token
	 */
	public function setPath($_Path)
	{
		return ($this->Path = $_Path);
	}
	/**
	 * Get Path
	 * @return token
	 */
	public function getPath()
	{
		return $this->Path;
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set SubCategoryCount
	 * @param UnsignedIntegerType SubCategoryCount
	 * @return UnsignedIntegerType
	 */
	public function setSubCategoryCount($_SubCategoryCount)
	{
		return ($this->SubCategoryCount = $_SubCategoryCount);
	}
	/**
	 * Get SubCategoryCount
	 * @return UnsignedIntegerType
	 */
	public function getSubCategoryCount()
	{
		return $this->SubCategoryCount;
	}
	/**
	 * Set TotalListingCount
	 * @param UnsignedIntegerType TotalListingCount
	 * @return UnsignedIntegerType
	 */
	public function setTotalListingCount($_TotalListingCount)
	{
		return ($this->TotalListingCount = $_TotalListingCount);
	}
	/**
	 * Get TotalListingCount
	 * @return UnsignedIntegerType
	 */
	public function getTotalListingCount()
	{
		return $this->TotalListingCount;
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