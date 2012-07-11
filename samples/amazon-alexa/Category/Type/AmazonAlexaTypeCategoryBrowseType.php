<?php
/**
 * Class file for AmazonAlexaTypeCategoryBrowseType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryBrowseType
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryBrowseType extends AmazonAlexaWsdlClass
{
	/**
	 * The Categories
	 * @var AmazonAlexaTypeCategoriesType
	 */
	public $Categories;
	/**
	 * The LanguageCategories
	 * @var AmazonAlexaTypeCategoriesType
	 */
	public $LanguageCategories;
	/**
	 * The RelatedCategories
	 * @var AmazonAlexaTypeCategoriesType
	 */
	public $RelatedCategories;
	/**
	 * The LetterBars
	 * @var AmazonAlexaTypeLetterBarsType
	 */
	public $LetterBars;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoriesType Categories
	 * @param AmazonAlexaTypeCategoriesType LanguageCategories
	 * @param AmazonAlexaTypeCategoriesType RelatedCategories
	 * @param AmazonAlexaTypeLetterBarsType LetterBars
	 * @return AmazonAlexaTypeCategoryBrowseType
	 */
	public function __construct($_Categories = null,$_LanguageCategories = null,$_RelatedCategories = null,$_LetterBars = null)
	{
		parent::__construct(array('Categories'=>$_Categories,'LanguageCategories'=>$_LanguageCategories,'RelatedCategories'=>$_RelatedCategories,'LetterBars'=>$_LetterBars));
	}
	/**
	 * Set Categories
	 * @param CategoriesType Categories
	 * @return CategoriesType
	 */
	public function setCategories($_Categories)
	{
		return ($this->Categories = $_Categories);
	}
	/**
	 * Get Categories
	 * @return AmazonAlexaTypeCategoriesType
	 */
	public function getCategories()
	{
		return $this->Categories;
	}
	/**
	 * Set LanguageCategories
	 * @param CategoriesType LanguageCategories
	 * @return CategoriesType
	 */
	public function setLanguageCategories($_LanguageCategories)
	{
		return ($this->LanguageCategories = $_LanguageCategories);
	}
	/**
	 * Get LanguageCategories
	 * @return AmazonAlexaTypeCategoriesType
	 */
	public function getLanguageCategories()
	{
		return $this->LanguageCategories;
	}
	/**
	 * Set RelatedCategories
	 * @param CategoriesType RelatedCategories
	 * @return CategoriesType
	 */
	public function setRelatedCategories($_RelatedCategories)
	{
		return ($this->RelatedCategories = $_RelatedCategories);
	}
	/**
	 * Get RelatedCategories
	 * @return AmazonAlexaTypeCategoriesType
	 */
	public function getRelatedCategories()
	{
		return $this->RelatedCategories;
	}
	/**
	 * Set LetterBars
	 * @param LetterBarsType LetterBars
	 * @return LetterBarsType
	 */
	public function setLetterBars($_LetterBars)
	{
		return ($this->LetterBars = $_LetterBars);
	}
	/**
	 * Get LetterBars
	 * @return AmazonAlexaTypeLetterBarsType
	 */
	public function getLetterBars()
	{
		return $this->LetterBars;
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