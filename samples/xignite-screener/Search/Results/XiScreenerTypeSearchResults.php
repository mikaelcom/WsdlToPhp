<?php
/**
 * Class file for XiScreenerTypeSearchResults
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchResults
 * @date 08/07/2012
 */
class XiScreenerTypeSearchResults extends XiScreenerTypeCommon
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Criteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfSearchCriteria
	 */
	public $Criteria;
	/**
	 * The Results
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfResult
	 */
	public $Results;
	/**
	 * Constructor
	 * @param int Count
	 * @param XiScreenerTypeArrayOfSearchCriteria Criteria
	 * @param XiScreenerTypeArrayOfResult Results
	 * @return XiScreenerTypeSearchResults
	 */
	public function __construct($_Count,$_Criteria = null,$_Results = null)
	{
		XiScreenerWsdlClass::__construct(array('Count'=>$_Count,'Criteria'=>new XiScreenerTypeArrayOfSearchCriteria($_Criteria),'Results'=>new XiScreenerTypeArrayOfResult($_Results)));
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Criteria
	 * @param ArrayOfSearchCriteria Criteria
	 * @return ArrayOfSearchCriteria
	 */
	public function setCriteria($_Criteria)
	{
		return ($this->Criteria = $_Criteria);
	}
	/**
	 * Get Criteria
	 * @return XiScreenerTypeArrayOfSearchCriteria
	 */
	public function getCriteria()
	{
		return $this->Criteria;
	}
	/**
	 * Set Results
	 * @param ArrayOfResult Results
	 * @return ArrayOfResult
	 */
	public function setResults($_Results)
	{
		return ($this->Results = $_Results);
	}
	/**
	 * Get Results
	 * @return XiScreenerTypeArrayOfResult
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