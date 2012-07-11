<?php
/**
 * Class file for XiScreenerTypeCompare
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeCompare
 * @date 08/07/2012
 */
class XiScreenerTypeCompare extends XiScreenerWsdlClass
{
	/**
	 * The CompareType1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $CompareType1;
	/**
	 * The Comparison
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchCriteriaType
	 */
	public $Comparison;
	/**
	 * The CompareType2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $CompareType2;
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
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param XiScreenerTypeFundamentalTypes CompareType1
	 * @param XiScreenerTypeSearchCriteriaType Comparison
	 * @param XiScreenerTypeFundamentalTypes CompareType2
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param XiScreenerTypeSearchCriteriaType SearchType
	 * @param string FirstValue
	 * @param string SecondValue
	 * @param int Count
	 * @return XiScreenerTypeCompare
	 */
	public function __construct($_CompareType1,$_Comparison,$_CompareType2,$_Type,$_SearchType,$_FirstValue = null,$_SecondValue = null,$_Count)
	{
		parent::__construct(array('CompareType1'=>$_CompareType1,'Comparison'=>$_Comparison,'CompareType2'=>$_CompareType2,'Type'=>$_Type,'SearchType'=>$_SearchType,'FirstValue'=>$_FirstValue,'SecondValue'=>$_SecondValue,'Count'=>$_Count));
	}
	/**
	 * Set CompareType1
	 * @param FundamentalTypes CompareType1
	 * @return FundamentalTypes
	 */
	public function setCompareType1($_CompareType1)
	{
		return ($this->CompareType1 = XiScreenerTypeFundamentalTypes::valueIsValid($_CompareType1)?$_CompareType1:null);
	}
	/**
	 * Get CompareType1
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getCompareType1()
	{
		return $this->CompareType1;
	}
	/**
	 * Set Comparison
	 * @param SearchCriteriaType Comparison
	 * @return SearchCriteriaType
	 */
	public function setComparison($_Comparison)
	{
		return ($this->Comparison = XiScreenerTypeSearchCriteriaType::valueIsValid($_Comparison)?$_Comparison:null);
	}
	/**
	 * Get Comparison
	 * @return XiScreenerTypeSearchCriteriaType
	 */
	public function getComparison()
	{
		return $this->Comparison;
	}
	/**
	 * Set CompareType2
	 * @param FundamentalTypes CompareType2
	 * @return FundamentalTypes
	 */
	public function setCompareType2($_CompareType2)
	{
		return ($this->CompareType2 = XiScreenerTypeFundamentalTypes::valueIsValid($_CompareType2)?$_CompareType2:null);
	}
	/**
	 * Get CompareType2
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getCompareType2()
	{
		return $this->CompareType2;
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