<?php
/**
 * Class file for GGAdwordsTypeSelector
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSelector
 * Documentation : A generic selector to specify the type of information to return.
 * @date 03/07/2012
 */
class GGAdwordsTypeSelector extends GGAdwordsWsdlClass
{
	/**
	 * The fields
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : List of fields to select. Possible values are marked Selectable on the entity's reference page. For example, for the CampaignService selector, refer to the selectable fields from the {@link Campaign} reference page. <span class="constraint ContentsDistinct">This field must contain distinct elements.</span> <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span> <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var string
	 */
	public $fields;
	/**
	 * The predicates
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered. <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span>
	 * @var GGAdwordsTypePredicate
	 */
	public $predicates;
	/**
	 * The dateRange
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Range of dates for which you want to include data. If this value is omitted, results for all dates are returned. <span class="constraint DateRangeWithinRange">This range must be contained within the range [19700101, 20380101].</span>
	 * @var GGAdwordsTypeDateRange
	 */
	public $dateRange;
	/**
	 * The ordering
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : The fields on which you want to sort, and the sort order. The order in the list is significant: The first element in the list indicates the primary sort order, the next specifies the secondary sort order and so on.
	 * @var GGAdwordsTypeOrderBy
	 */
	public $ordering;
	/**
	 * The paging
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Pagination information.
	 * @var GGAdwordsTypePaging
	 */
	public $paging;
	/**
	 * Constructor
	 * @param string fields
	 * @param GGAdwordsTypePredicate predicates
	 * @param GGAdwordsTypeDateRange dateRange
	 * @param GGAdwordsTypeOrderBy ordering
	 * @param GGAdwordsTypePaging paging
	 * @return GGAdwordsTypeSelector
	 */
	public function __construct($_fields = null,$_predicates = null,$_dateRange = null,$_ordering = null,$_paging = null)
	{
		parent::__construct(array('fields'=>$_fields,'predicates'=>$_predicates,'dateRange'=>$_dateRange,'ordering'=>$_ordering,'paging'=>$_paging));
	}
	/**
	 * Set fields
	 * @param string fields
	 * @return string
	 */
	public function setFields($_fields)
	{
		return ($this->fields = $_fields);
	}
	/**
	 * Get fields
	 * @return string
	 */
	public function getFields()
	{
		return $this->fields;
	}
	/**
	 * Set predicates
	 * @param Predicate predicates
	 * @return Predicate
	 */
	public function setPredicates($_predicates)
	{
		return ($this->predicates = $_predicates);
	}
	/**
	 * Get predicates
	 * @return GGAdwordsTypePredicate
	 */
	public function getPredicates()
	{
		return $this->predicates;
	}
	/**
	 * Set dateRange
	 * @param DateRange dateRange
	 * @return DateRange
	 */
	public function setDateRange($_dateRange)
	{
		return ($this->dateRange = $_dateRange);
	}
	/**
	 * Get dateRange
	 * @return GGAdwordsTypeDateRange
	 */
	public function getDateRange()
	{
		return $this->dateRange;
	}
	/**
	 * Set ordering
	 * @param OrderBy ordering
	 * @return OrderBy
	 */
	public function setOrdering($_ordering)
	{
		return ($this->ordering = $_ordering);
	}
	/**
	 * Get ordering
	 * @return GGAdwordsTypeOrderBy
	 */
	public function getOrdering()
	{
		return $this->ordering;
	}
	/**
	 * Set paging
	 * @param Paging paging
	 * @return Paging
	 */
	public function setPaging($_paging)
	{
		return ($this->paging = $_paging);
	}
	/**
	 * Get paging
	 * @return GGAdwordsTypePaging
	 */
	public function getPaging()
	{
		return $this->paging;
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