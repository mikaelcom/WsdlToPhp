<?php
/**
 * Class file for GGAdwordsTypeQueryErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQueryErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeQueryErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'PARSING_FAILED'
	 * Meta informations :
	 * 	- documentation : Exception that happens when trying to parse a query that doesn't match the AWQL grammar.
	 * @return string 'PARSING_FAILED'
	 */
	const VALUE_PARSING_FAILED = 'PARSING_FAILED';
	/**
	 * Constant for value 'MISSING_QUERY'
	 * Meta informations :
	 * 	- documentation : The provided query is an empty string.
	 * @return string 'MISSING_QUERY'
	 */
	const VALUE_MISSING_QUERY = 'MISSING_QUERY';
	/**
	 * Constant for value 'MISSING_SELECT_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The query does not contain the required SELECT clause or it is not in the correct location.
	 * @return string 'MISSING_SELECT_CLAUSE'
	 */
	const VALUE_MISSING_SELECT_CLAUSE = 'MISSING_SELECT_CLAUSE';
	/**
	 * Constant for value 'MISSING_FROM_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The query does not contain the required FROM clause or it is not in the correct location.
	 * @return string 'MISSING_FROM_CLAUSE'
	 */
	const VALUE_MISSING_FROM_CLAUSE = 'MISSING_FROM_CLAUSE';
	/**
	 * Constant for value 'INVALID_SELECT_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The SELECT clause could not be parsed.
	 * @return string 'INVALID_SELECT_CLAUSE'
	 */
	const VALUE_INVALID_SELECT_CLAUSE = 'INVALID_SELECT_CLAUSE';
	/**
	 * Constant for value 'INVALID_FROM_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The FROM clause could not be parsed.
	 * @return string 'INVALID_FROM_CLAUSE'
	 */
	const VALUE_INVALID_FROM_CLAUSE = 'INVALID_FROM_CLAUSE';
	/**
	 * Constant for value 'INVALID_WHERE_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The WHERE clause could not be parsed.
	 * @return string 'INVALID_WHERE_CLAUSE'
	 */
	const VALUE_INVALID_WHERE_CLAUSE = 'INVALID_WHERE_CLAUSE';
	/**
	 * Constant for value 'INVALID_ORDER_BY_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The ORDER BY clause could not be parsed.
	 * @return string 'INVALID_ORDER_BY_CLAUSE'
	 */
	const VALUE_INVALID_ORDER_BY_CLAUSE = 'INVALID_ORDER_BY_CLAUSE';
	/**
	 * Constant for value 'INVALID_LIMIT_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The LIMIT clause could not be parsed.
	 * @return string 'INVALID_LIMIT_CLAUSE'
	 */
	const VALUE_INVALID_LIMIT_CLAUSE = 'INVALID_LIMIT_CLAUSE';
	/**
	 * Constant for value 'INVALID_START_INDEX_IN_LIMIT_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The startIndex in the LIMIT clause does not contain a valid integer.
	 * @return string 'INVALID_START_INDEX_IN_LIMIT_CLAUSE'
	 */
	const VALUE_INVALID_START_INDEX_IN_LIMIT_CLAUSE = 'INVALID_START_INDEX_IN_LIMIT_CLAUSE';
	/**
	 * Constant for value 'INVALID_PAGE_SIZE_IN_LIMIT_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The pageSize in the LIMIT clause does not contain a valid integer.
	 * @return string 'INVALID_PAGE_SIZE_IN_LIMIT_CLAUSE'
	 */
	const VALUE_INVALID_PAGE_SIZE_IN_LIMIT_CLAUSE = 'INVALID_PAGE_SIZE_IN_LIMIT_CLAUSE';
	/**
	 * Constant for value 'INVALID_DURING_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The DURING clause could not be parsed.
	 * @return string 'INVALID_DURING_CLAUSE'
	 */
	const VALUE_INVALID_DURING_CLAUSE = 'INVALID_DURING_CLAUSE';
	/**
	 * Constant for value 'INVALID_MIN_DATE_IN_DURING_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The minimum date in the DURING clause is not a valid date in YYYYMMDD format.
	 * @return string 'INVALID_MIN_DATE_IN_DURING_CLAUSE'
	 */
	const VALUE_INVALID_MIN_DATE_IN_DURING_CLAUSE = 'INVALID_MIN_DATE_IN_DURING_CLAUSE';
	/**
	 * Constant for value 'INVALID_MAX_DATE_IN_DURING_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The maximum date in the DURING clause is not a valid date in YYYYMMDD format.
	 * @return string 'INVALID_MAX_DATE_IN_DURING_CLAUSE'
	 */
	const VALUE_INVALID_MAX_DATE_IN_DURING_CLAUSE = 'INVALID_MAX_DATE_IN_DURING_CLAUSE';
	/**
	 * Constant for value 'MAX_LESS_THAN_MIN_IN_DURING_CLAUSE'
	 * Meta informations :
	 * 	- documentation : The minimum date in the DURING is after the maximum date.
	 * @return string 'MAX_LESS_THAN_MIN_IN_DURING_CLAUSE'
	 */
	const VALUE_MAX_LESS_THAN_MIN_IN_DURING_CLAUSE = 'MAX_LESS_THAN_MIN_IN_DURING_CLAUSE';
	/**
	 * Constant for value 'VALIDATION_FAILED'
	 * Meta informations :
	 * 	- documentation : The query matched the grammar, but is invalid in some way such as using a service that isn't supported.
	 * @return string 'VALIDATION_FAILED'
	 */
	const VALUE_VALIDATION_FAILED = 'VALIDATION_FAILED';
	/**
	 * Constructor
	 * @return GGAdwordsTypeQueryErrorReason
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
		return in_array($_value,array(self::VALUE_PARSING_FAILED,self::VALUE_MISSING_QUERY,self::VALUE_MISSING_SELECT_CLAUSE,self::VALUE_MISSING_FROM_CLAUSE,self::VALUE_INVALID_SELECT_CLAUSE,self::VALUE_INVALID_FROM_CLAUSE,self::VALUE_INVALID_WHERE_CLAUSE,self::VALUE_INVALID_ORDER_BY_CLAUSE,self::VALUE_INVALID_LIMIT_CLAUSE,self::VALUE_INVALID_START_INDEX_IN_LIMIT_CLAUSE,self::VALUE_INVALID_PAGE_SIZE_IN_LIMIT_CLAUSE,self::VALUE_INVALID_DURING_CLAUSE,self::VALUE_INVALID_MIN_DATE_IN_DURING_CLAUSE,self::VALUE_INVALID_MAX_DATE_IN_DURING_CLAUSE,self::VALUE_MAX_LESS_THAN_MIN_IN_DURING_CLAUSE,self::VALUE_VALIDATION_FAILED));
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