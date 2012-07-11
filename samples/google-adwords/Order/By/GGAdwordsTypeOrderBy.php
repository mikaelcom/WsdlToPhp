<?php
/**
 * Class file for GGAdwordsTypeOrderBy
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeOrderBy
 * Documentation : Specifies how the resulting information should be sorted.
 * @date 03/07/2012
 */
class GGAdwordsTypeOrderBy extends GGAdwordsWsdlClass
{
	/**
	 * The field
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The field to sort the results on. <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var string
	 */
	public $field;
	/**
	 * The sortOrder
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The order to sort the results on. The default sort order is {@link SortOrder#ASCENDING}.
	 * @var GGAdwordsTypeSortOrder
	 */
	public $sortOrder;
	/**
	 * Constructor
	 * @param string field
	 * @param GGAdwordsTypeSortOrder sortOrder
	 * @return GGAdwordsTypeOrderBy
	 */
	public function __construct($_field = null,$_sortOrder = null)
	{
		parent::__construct(array('field'=>$_field,'sortOrder'=>$_sortOrder));
	}
	/**
	 * Set field
	 * @param string field
	 * @return string
	 */
	public function setField($_field)
	{
		return ($this->field = $_field);
	}
	/**
	 * Get field
	 * @return string
	 */
	public function getField()
	{
		return $this->field;
	}
	/**
	 * Set sortOrder
	 * @param SortOrder sortOrder
	 * @return SortOrder
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = GGAdwordsTypeSortOrder::valueIsValid($_sortOrder)?$_sortOrder:null);
	}
	/**
	 * Get sortOrder
	 * @return GGAdwordsTypeSortOrder
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
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