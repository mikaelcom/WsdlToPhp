<?php
/**
 * Class file for AmazonAlexaTypeRelatedType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRelatedType
 * @date 10/07/2012
 */
class AmazonAlexaTypeRelatedType extends AmazonAlexaWsdlClass
{
	/**
	 * The RelatedLinks
	 * @var AmazonAlexaTypeRelatedLinks
	 */
	public $RelatedLinks;
	/**
	 * The Categories
	 * @var AmazonAlexaTypeCategories
	 */
	public $Categories;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeRelatedLinks RelatedLinks
	 * @param AmazonAlexaTypeCategories Categories
	 * @return AmazonAlexaTypeRelatedType
	 */
	public function __construct($_RelatedLinks = null,$_Categories = null)
	{
		parent::__construct(array('RelatedLinks'=>$_RelatedLinks,'Categories'=>$_Categories));
	}
	/**
	 * Set RelatedLinks
	 * @param RelatedLinks RelatedLinks
	 * @return RelatedLinks
	 */
	public function setRelatedLinks($_RelatedLinks)
	{
		return ($this->RelatedLinks = $_RelatedLinks);
	}
	/**
	 * Get RelatedLinks
	 * @return AmazonAlexaTypeRelatedLinks
	 */
	public function getRelatedLinks()
	{
		return $this->RelatedLinks;
	}
	/**
	 * Set Categories
	 * @param Categories Categories
	 * @return Categories
	 */
	public function setCategories($_Categories)
	{
		return ($this->Categories = $_Categories);
	}
	/**
	 * Get Categories
	 * @return AmazonAlexaTypeCategories
	 */
	public function getCategories()
	{
		return $this->Categories;
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