<?php
/**
 * Class file for BingTypeNewsResponse
 * @date 02/07/2012
 */
/**
 * Class BingTypeNewsResponse
 * @date 02/07/2012
 */
class BingTypeNewsResponse extends BingWsdlClass
{
	/**
	 * The Total
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Total;
	/**
	 * The Offset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Offset;
	/**
	 * The RelatedSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfNewsRelatedSearch
	 */
	public $RelatedSearches;
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeArrayOfNewsResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param unsignedInt Total
	 * @param unsignedInt Offset
	 * @param BingTypeArrayOfNewsRelatedSearch RelatedSearches
	 * @param BingTypeArrayOfNewsResult Results
	 * @return BingTypeNewsResponse
	 */
	public function __construct($_Total = null,$_Offset = null,$_RelatedSearches = null,$_Results = null)
	{
		parent::__construct(array('Total'=>$_Total,'Offset'=>$_Offset,'RelatedSearches'=>new BingTypeArrayOfNewsRelatedSearch($_RelatedSearches),'Results'=>new BingTypeArrayOfNewsResult($_Results)));
	}
	/**
	 * Set Total
	 * @param unsignedInt Total
	 * @return unsignedInt
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return unsignedInt
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Offset
	 * @param unsignedInt Offset
	 * @return unsignedInt
	 */
	public function setOffset($_Offset)
	{
		return ($this->Offset = $_Offset);
	}
	/**
	 * Get Offset
	 * @return unsignedInt
	 */
	public function getOffset()
	{
		return $this->Offset;
	}
	/**
	 * Set RelatedSearches
	 * @param ArrayOfNewsRelatedSearch RelatedSearches
	 * @return ArrayOfNewsRelatedSearch
	 */
	public function setRelatedSearches($_RelatedSearches)
	{
		return ($this->RelatedSearches = $_RelatedSearches);
	}
	/**
	 * Get RelatedSearches
	 * @return BingTypeArrayOfNewsRelatedSearch
	 */
	public function getRelatedSearches()
	{
		return $this->RelatedSearches;
	}
	/**
	 * Set Results
	 * @param ArrayOfNewsResult Results
	 * @return ArrayOfNewsResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return BingTypeArrayOfNewsResult
	 */
	public function getResults()
	{
		return $this->Results;
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