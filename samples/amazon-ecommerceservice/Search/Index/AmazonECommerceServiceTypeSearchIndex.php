<?php
/**
 * Class file for AmazonECommerceServiceTypeSearchIndex
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSearchIndex
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSearchIndex extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The IndexName
	 * @var string
	 */
	public $IndexName;
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $Results;
	/**
	 * The Pages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var nonNegativeInteger
	 */
	public $Pages;
	/**
	 * The CorrectedQuery
	 * @var AmazonECommerceServiceTypeCorrectedQuery
	 */
	public $CorrectedQuery;
	/**
	 * The RelevanceRank
	 * @var positiveInteger
	 */
	public $RelevanceRank;
	/**
	 * The ASIN
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ASIN;
	/**
	 * Constructor
	 * @param string IndexName
	 * @param nonNegativeInteger Results
	 * @param nonNegativeInteger Pages
	 * @param AmazonECommerceServiceTypeCorrectedQuery CorrectedQuery
	 * @param positiveInteger RelevanceRank
	 * @param string ASIN
	 * @return AmazonECommerceServiceTypeSearchIndex
	 */
	public function __construct($_IndexName = null,$_Results = null,$_Pages = null,$_CorrectedQuery = null,$_RelevanceRank = null,$_ASIN = null)
	{
		parent::__construct(array('IndexName'=>$_IndexName,'Results'=>$_Results,'Pages'=>$_Pages,'CorrectedQuery'=>$_CorrectedQuery,'RelevanceRank'=>$_RelevanceRank,'ASIN'=>$_ASIN));
	}
	/**
	 * Set IndexName
	 * @param string IndexName
	 * @return string
	 */
	public function setIndexName($_IndexName)
	{
		return ($this->IndexName = $_IndexName);
	}
	/**
	 * Get IndexName
	 * @return string
	 */
	public function getIndexName()
	{
		return $this->IndexName;
	}
	/**
	 * Set Results
	 * @param nonNegativeInteger Results
	 * @return nonNegativeInteger
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return nonNegativeInteger
	 */
	public function getResults()
	{
		return $this->Results;
	}
	/**
	 * Set Pages
	 * @param nonNegativeInteger Pages
	 * @return nonNegativeInteger
	 */
	public function setPages($_Pages)
	{
		return ($this->Pages = $_Pages);
	}
	/**
	 * Get Pages
	 * @return nonNegativeInteger
	 */
	public function getPages()
	{
		return $this->Pages;
	}
	/**
	 * Set CorrectedQuery
	 * @param CorrectedQuery CorrectedQuery
	 * @return CorrectedQuery
	 */
	public function setCorrectedQuery($_CorrectedQuery)
	{
		return ($this->CorrectedQuery = $_CorrectedQuery);
	}
	/**
	 * Get CorrectedQuery
	 * @return AmazonECommerceServiceTypeCorrectedQuery
	 */
	public function getCorrectedQuery()
	{
		return $this->CorrectedQuery;
	}
	/**
	 * Set RelevanceRank
	 * @param positiveInteger RelevanceRank
	 * @return positiveInteger
	 */
	public function setRelevanceRank($_RelevanceRank)
	{
		return ($this->RelevanceRank = $_RelevanceRank);
	}
	/**
	 * Get RelevanceRank
	 * @return positiveInteger
	 */
	public function getRelevanceRank()
	{
		return $this->RelevanceRank;
	}
	/**
	 * Set ASIN
	 * @param string ASIN
	 * @return string
	 */
	public function setASIN($_ASIN)
	{
		return ($this->ASIN = $_ASIN);
	}
	/**
	 * Get ASIN
	 * @return string
	 */
	public function getASIN()
	{
		return $this->ASIN;
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