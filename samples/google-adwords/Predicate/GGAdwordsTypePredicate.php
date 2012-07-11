<?php
/**
 * Class file for GGAdwordsTypePredicate
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypePredicate
 * Documentation : Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 * @date 03/07/2012
 */
class GGAdwordsTypePredicate extends GGAdwordsWsdlClass
{
	/**
	 * The field
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The field by which to filter the returned data. Possible values are marked Filterable on the entity's reference page. For example, for predicates for the CampaignService {@link Selector selector}, refer to the filterable fields from the {@link Campaign} reference page. <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var string
	 */
	public $field;
	/**
	 * The operator
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The operator to use for filtering the data returned. <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var GGAdwordsTypePredicateOperator
	 */
	public $operator;
	/**
	 * The values
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : The values by which to filter the field. The {@link Operator#IN} and {@link Operator#NOT_IN} take multiple values. All others take a single value. <span class="constraint ContentsNotNull">This field must not contain {@code null} elements.</span> <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var string
	 */
	public $values;
	/**
	 * Constructor
	 * @param string field
	 * @param GGAdwordsTypePredicateOperator operator
	 * @param string values
	 * @return GGAdwordsTypePredicate
	 */
	public function __construct($_field = null,$_operator = null,$_values = null)
	{
		parent::__construct(array('field'=>$_field,'operator'=>$_operator,'values'=>$_values));
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
	 * Set operator
	 * @param PredicateOperator operator
	 * @return PredicateOperator
	 */
	public function setOperator($_operator)
	{
		return ($this->operator = GGAdwordsTypePredicateOperator::valueIsValid($_operator)?$_operator:null);
	}
	/**
	 * Get operator
	 * @return GGAdwordsTypePredicateOperator
	 */
	public function getOperator()
	{
		return $this->operator;
	}
	/**
	 * Set values
	 * @param string values
	 * @return string
	 */
	public function setValues($_values)
	{
		return ($this->values = $_values);
	}
	/**
	 * Get values
	 * @return string
	 */
	public function getValues()
	{
		return $this->values;
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