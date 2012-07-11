<?php
/**
 * Class file for XiScreenerTypeCount
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCount
 * @date 08/07/2012
 */
class XiScreenerTypeCount extends XiScreenerWsdlClass
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
	 * Constructor
	 * @param XiScreenerTypeArrayOfSearchCriteria Criteria
	 * @return XiScreenerTypeCount
	 */
	public function __construct($_Criteria = null)
	{
		parent::__construct(array('Criteria'=>new XiScreenerTypeArrayOfSearchCriteria($_Criteria)));
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