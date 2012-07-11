<?php
/**
 * Class file for XiScreenerTypeSearch
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearch
 * @date 08/07/2012
 */
class XiScreenerTypeSearch extends XiScreenerWsdlClass
{
	/**
	 * The Criteria
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeArrayOfSearchCriteria
	 */
	public $Criteria;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param XiScreenerTypeArrayOfSearchCriteria Criteria
	 * @param int Count
	 * @return XiScreenerTypeSearch
	 */
	public function __construct($_Criteria = null,$_Count)
	{
		parent::__construct(array('Criteria'=>new XiScreenerTypeArrayOfSearchCriteria($_Criteria),'Count'=>$_Count));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>