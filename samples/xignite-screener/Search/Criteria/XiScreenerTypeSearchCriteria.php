<?php
/**
 * Class file for XiScreenerTypeSearchCriteria
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchCriteria
 * @date 08/07/2012
 */
class XiScreenerTypeSearchCriteria extends XiScreenerWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $Type;
	/**
	 * The SearchType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchCriteriaType
	 */
	public $SearchType;
	/**
	 * The FirstValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstValue;
	/**
	 * The SecondValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondValue;
	/**
	 * Constructor
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param XiScreenerTypeSearchCriteriaType SearchType
	 * @param string FirstValue
	 * @param string SecondValue
	 * @return XiScreenerTypeSearchCriteria
	 */
	public function __construct($_Type,$_SearchType,$_FirstValue = null,$_SecondValue = null)
	{
		parent::__construct(array('Type'=>$_Type,'SearchType'=>$_SearchType,'FirstValue'=>$_FirstValue,'SecondValue'=>$_SecondValue));
	}
	/**
	 * Set Type
	 * @param FundamentalTypes Type
	 * @return FundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiScreenerTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set SearchType
	 * @param SearchCriteriaType SearchType
	 * @return SearchCriteriaType
	 */
	public function setSearchType($_SearchType)
	{
		return ($this->SearchType = XiScreenerTypeSearchCriteriaType::valueIsValid($_SearchType)?$_SearchType:null);
	}
	/**
	 * Get SearchType
	 * @return XiScreenerTypeSearchCriteriaType
	 */
	public function getSearchType()
	{
		return $this->SearchType;
	}
	/**
	 * Set FirstValue
	 * @param string FirstValue
	 * @return string
	 */
	public function setFirstValue($_FirstValue)
	{
		return ($this->FirstValue = $_FirstValue);
	}
	/**
	 * Get FirstValue
	 * @return string
	 */
	public function getFirstValue()
	{
		return $this->FirstValue;
	}
	/**
	 * Set SecondValue
	 * @param string SecondValue
	 * @return string
	 */
	public function setSecondValue($_SecondValue)
	{
		return ($this->SecondValue = $_SecondValue);
	}
	/**
	 * Get SecondValue
	 * @return string
	 */
	public function getSecondValue()
	{
		return $this->SecondValue;
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