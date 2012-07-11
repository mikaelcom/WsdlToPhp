<?php
/**
 * Class file for GGAdwordsTypeQuery
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQuery
 * Documentation : Returns the list of campaigns that match the query. @param query The SQL-like AWQL query string. @return A list of campaigns. @throws ApiException if problems occur while parsing the query or fetching campaign information.
 * @date 03/07/2012
 */
class GGAdwordsTypeQuery extends GGAdwordsWsdlClass
{
	/**
	 * The query
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var string
	 */
	public $query;
	/**
	 * Constructor
	 * @param string query
	 * @return GGAdwordsTypeQuery
	 */
	public function __construct($_query = null)
	{
		parent::__construct(array('query'=>$_query));
	}
	/**
	 * Set query
	 * @param string query
	 * @return string
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->query;
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