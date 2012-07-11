<?php
/**
 * Class file for XiOFACTypeSearchResults
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchResults
 * @date 08/07/2012
 */
class XiOFACTypeSearchResults extends XiOFACTypeCommon
{
	/**
	 * The TimeOfRequest
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeOfRequest;
	/**
	 * The SearchCriteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchCriteria
	 */
	public $SearchCriteria;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Matches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeArrayOfOFACName
	 */
	public $Matches;
	/**
	 * Constructor
	 * @param string TimeOfRequest
	 * @param XiOFACTypeSearchCriteria SearchCriteria
	 * @param int Count
	 * @param XiOFACTypeArrayOfOFACName Matches
	 * @return XiOFACTypeSearchResults
	 */
	public function __construct($_TimeOfRequest = null,$_SearchCriteria = null,$_Count,$_Matches = null)
	{
		XiOFACWsdlClass::__construct(array('TimeOfRequest'=>$_TimeOfRequest,'SearchCriteria'=>$_SearchCriteria,'Count'=>$_Count,'Matches'=>new XiOFACTypeArrayOfOFACName($_Matches)));
	}
	/**
	 * Set TimeOfRequest
	 * @param string TimeOfRequest
	 * @return string
	 */
	public function setTimeOfRequest($_TimeOfRequest)
	{
		return ($this->TimeOfRequest = $_TimeOfRequest);
	}
	/**
	 * Get TimeOfRequest
	 * @return string
	 */
	public function getTimeOfRequest()
	{
		return $this->TimeOfRequest;
	}
	/**
	 * Set SearchCriteria
	 * @param SearchCriteria SearchCriteria
	 * @return SearchCriteria
	 */
	public function setSearchCriteria($_SearchCriteria)
	{
		return ($this->SearchCriteria = $_SearchCriteria);
	}
	/**
	 * Get SearchCriteria
	 * @return XiOFACTypeSearchCriteria
	 */
	public function getSearchCriteria()
	{
		return $this->SearchCriteria;
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
	 * Set Matches
	 * @param ArrayOfOFACName Matches
	 * @return ArrayOfOFACName
	 */
	public function setMatches($_Matches)
	{
		return ($this->Matches = $_Matches);
	}
	/**
	 * Get Matches
	 * @return XiOFACTypeArrayOfOFACName
	 */
	public function getMatches()
	{
		return $this->Matches;
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