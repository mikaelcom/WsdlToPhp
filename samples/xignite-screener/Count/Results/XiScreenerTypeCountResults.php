<?php
/**
 * Class file for XiScreenerTypeCountResults
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCountResults
 * @date 08/07/2012
 */
class XiScreenerTypeCountResults extends XiScreenerTypeCommon
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
	 * Constructor
	 * @param int Count
	 * @param XiScreenerTypeArrayOfSearchCriteria Criteria
	 * @return XiScreenerTypeCountResults
	 */
	public function __construct($_Count,$_Criteria = null)
	{
		XiScreenerWsdlClass::__construct(array('Count'=>$_Count,'Criteria'=>new XiScreenerTypeArrayOfSearchCriteria($_Criteria)));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>