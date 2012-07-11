<?php
/**
 * Class file for GGAdwordsTypeSelectorErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSelectorErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeSelectorErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'INVALID_FIELD_NAME'
	 * Meta informations :
	 * 	- documentation : The field name is not valid.
	 * @return string 'INVALID_FIELD_NAME'
	 */
	const VALUE_INVALID_FIELD_NAME = 'INVALID_FIELD_NAME';
	/**
	 * Constant for value 'MISSING_FIELDS'
	 * Meta informations :
	 * 	- documentation : The list of fields is null or empty.
	 * @return string 'MISSING_FIELDS'
	 */
	const VALUE_MISSING_FIELDS = 'MISSING_FIELDS';
	/**
	 * Constant for value 'MISSING_PREDICATES'
	 * Meta informations :
	 * 	- documentation : The list of predicates is null or empty.
	 * @return string 'MISSING_PREDICATES'
	 */
	const VALUE_MISSING_PREDICATES = 'MISSING_PREDICATES';
	/**
	 * Constant for value 'OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES'
	 * Meta informations :
	 * 	- documentation : Predicate operator does not support multiple values. Multiple values are supported only for {@link Predicate.Operator#IN} and {@link Predicate.Operator#NOT_IN}.
	 * @return string 'OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES'
	 */
	const VALUE_OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES = 'OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES';
	/**
	 * Constant for value 'INVALID_PREDICATE_ENUM_VALUE'
	 * Meta informations :
	 * 	- documentation : The predicate enum value is not valid.
	 * @return string 'INVALID_PREDICATE_ENUM_VALUE'
	 */
	const VALUE_INVALID_PREDICATE_ENUM_VALUE = 'INVALID_PREDICATE_ENUM_VALUE';
	/**
	 * Constant for value 'MISSING_PREDICATE_OPERATOR'
	 * Meta informations :
	 * 	- documentation : The predicate operator is empty.
	 * @return string 'MISSING_PREDICATE_OPERATOR'
	 */
	const VALUE_MISSING_PREDICATE_OPERATOR = 'MISSING_PREDICATE_OPERATOR';
	/**
	 * Constant for value 'MISSING_PREDICATE_VALUES'
	 * Meta informations :
	 * 	- documentation : The predicate values are empty.
	 * @return string 'MISSING_PREDICATE_VALUES'
	 */
	const VALUE_MISSING_PREDICATE_VALUES = 'MISSING_PREDICATE_VALUES';
	/**
	 * Constant for value 'INVALID_PREDICATE_FIELD_NAME'
	 * Meta informations :
	 * 	- documentation : The predicate field name is not valid.
	 * @return string 'INVALID_PREDICATE_FIELD_NAME'
	 */
	const VALUE_INVALID_PREDICATE_FIELD_NAME = 'INVALID_PREDICATE_FIELD_NAME';
	/**
	 * Constant for value 'INVALID_PREDICATE_OPERATOR'
	 * Meta informations :
	 * 	- documentation : The predicate operator is not valid.
	 * @return string 'INVALID_PREDICATE_OPERATOR'
	 */
	const VALUE_INVALID_PREDICATE_OPERATOR = 'INVALID_PREDICATE_OPERATOR';
	/**
	 * Constant for value 'INVALID_FIELD_SELECTION'
	 * Meta informations :
	 * 	- documentation : Invalid selection of fields.
	 * @return string 'INVALID_FIELD_SELECTION'
	 */
	const VALUE_INVALID_FIELD_SELECTION = 'INVALID_FIELD_SELECTION';
	/**
	 * Constant for value 'INVALID_PREDICATE_VALUE'
	 * Meta informations :
	 * 	- documentation : The predicate value is not valid.
	 * @return string 'INVALID_PREDICATE_VALUE'
	 */
	const VALUE_INVALID_PREDICATE_VALUE = 'INVALID_PREDICATE_VALUE';
	/**
	 * Constant for value 'INVALID_SORT_FIELD_NAME'
	 * Meta informations :
	 * 	- documentation : The sort field name is not valid or the field is not sortable.
	 * @return string 'INVALID_SORT_FIELD_NAME'
	 */
	const VALUE_INVALID_SORT_FIELD_NAME = 'INVALID_SORT_FIELD_NAME';
	/**
	 * Constant for value 'SELECTOR_ERROR'
	 * Meta informations :
	 * 	- documentation : Standard error.
	 * @return string 'SELECTOR_ERROR'
	 */
	const VALUE_SELECTOR_ERROR = 'SELECTOR_ERROR';
	/**
	 * Constant for value 'FILTER_BY_DATE_RANGE_NOT_SUPPORTED'
	 * Meta informations :
	 * 	- documentation : Filtering by date range is not supported.
	 * @return string 'FILTER_BY_DATE_RANGE_NOT_SUPPORTED'
	 */
	const VALUE_FILTER_BY_DATE_RANGE_NOT_SUPPORTED = 'FILTER_BY_DATE_RANGE_NOT_SUPPORTED';
	/**
	 * Constant for value 'START_INDEX_IS_TOO_HIGH'
	 * Meta informations :
	 * 	- documentation : Selector paging start index is too high.
	 * @return string 'START_INDEX_IS_TOO_HIGH'
	 */
	const VALUE_START_INDEX_IS_TOO_HIGH = 'START_INDEX_IS_TOO_HIGH';
	/**
	 * Constant for value 'UNKNOWN_ERROR'
	 * Meta informations :
	 * 	- documentation : <span class="constraint Rejected">Used for return value only. An enumeration could not be processed, typically due to incompatibility with your WSDL version.</span>
	 * @return string 'UNKNOWN_ERROR'
	 */
	const VALUE_UNKNOWN_ERROR = 'UNKNOWN_ERROR';
	/**
	 * Constructor
	 * @return GGAdwordsTypeSelectorErrorReason
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_INVALID_FIELD_NAME,self::VALUE_MISSING_FIELDS,self::VALUE_MISSING_PREDICATES,self::VALUE_OPERATOR_DOES_NOT_SUPPORT_MULTIPLE_VALUES,self::VALUE_INVALID_PREDICATE_ENUM_VALUE,self::VALUE_MISSING_PREDICATE_OPERATOR,self::VALUE_MISSING_PREDICATE_VALUES,self::VALUE_INVALID_PREDICATE_FIELD_NAME,self::VALUE_INVALID_PREDICATE_OPERATOR,self::VALUE_INVALID_FIELD_SELECTION,self::VALUE_INVALID_PREDICATE_VALUE,self::VALUE_INVALID_SORT_FIELD_NAME,self::VALUE_SELECTOR_ERROR,self::VALUE_FILTER_BY_DATE_RANGE_NOT_SUPPORTED,self::VALUE_START_INDEX_IS_TOO_HIGH,self::VALUE_UNKNOWN_ERROR));
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