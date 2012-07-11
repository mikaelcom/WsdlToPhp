<?php
/**
 * Class file for XiScreenerTypeDoubleSearch
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeDoubleSearch
 * @date 08/07/2012
 */
class XiScreenerTypeDoubleSearch extends XiScreenerWsdlClass
{
	/**
	 * The Type1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $Type1;
	/**
	 * The SearchType1
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchCriteriaType
	 */
	public $SearchType1;
	/**
	 * The FirstValue1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstValue1;
	/**
	 * The SecondValue1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondValue1;
	/**
	 * The Type2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $Type2;
	/**
	 * The SearchType2
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeSearchCriteriaType
	 */
	public $SearchType2;
	/**
	 * The FirstValue2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstValue2;
	/**
	 * The SecondValue2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecondValue2;
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
	 * @param XiScreenerTypeFundamentalTypes Type1
	 * @param XiScreenerTypeSearchCriteriaType SearchType1
	 * @param string FirstValue1
	 * @param string SecondValue1
	 * @param XiScreenerTypeFundamentalTypes Type2
	 * @param XiScreenerTypeSearchCriteriaType SearchType2
	 * @param string FirstValue2
	 * @param string SecondValue2
	 * @param int Count
	 * @return XiScreenerTypeDoubleSearch
	 */
	public function __construct($_Type1,$_SearchType1,$_FirstValue1 = null,$_SecondValue1 = null,$_Type2,$_SearchType2,$_FirstValue2 = null,$_SecondValue2 = null,$_Count)
	{
		parent::__construct(array('Type1'=>$_Type1,'SearchType1'=>$_SearchType1,'FirstValue1'=>$_FirstValue1,'SecondValue1'=>$_SecondValue1,'Type2'=>$_Type2,'SearchType2'=>$_SearchType2,'FirstValue2'=>$_FirstValue2,'SecondValue2'=>$_SecondValue2,'Count'=>$_Count));
	}
	/**
	 * Set Type1
	 * @param FundamentalTypes Type1
	 * @return FundamentalTypes
	 */
	public function setType1($_Type1)
	{
		return ($this->Type1 = XiScreenerTypeFundamentalTypes::valueIsValid($_Type1)?$_Type1:null);
	}
	/**
	 * Get Type1
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getType1()
	{
		return $this->Type1;
	}
	/**
	 * Set SearchType1
	 * @param SearchCriteriaType SearchType1
	 * @return SearchCriteriaType
	 */
	public function setSearchType1($_SearchType1)
	{
		return ($this->SearchType1 = XiScreenerTypeSearchCriteriaType::valueIsValid($_SearchType1)?$_SearchType1:null);
	}
	/**
	 * Get SearchType1
	 * @return XiScreenerTypeSearchCriteriaType
	 */
	public function getSearchType1()
	{
		return $this->SearchType1;
	}
	/**
	 * Set FirstValue1
	 * @param string FirstValue1
	 * @return string
	 */
	public function setFirstValue1($_FirstValue1)
	{
		return ($this->FirstValue1 = $_FirstValue1);
	}
	/**
	 * Get FirstValue1
	 * @return string
	 */
	public function getFirstValue1()
	{
		return $this->FirstValue1;
	}
	/**
	 * Set SecondValue1
	 * @param string SecondValue1
	 * @return string
	 */
	public function setSecondValue1($_SecondValue1)
	{
		return ($this->SecondValue1 = $_SecondValue1);
	}
	/**
	 * Get SecondValue1
	 * @return string
	 */
	public function getSecondValue1()
	{
		return $this->SecondValue1;
	}
	/**
	 * Set Type2
	 * @param FundamentalTypes Type2
	 * @return FundamentalTypes
	 */
	public function setType2($_Type2)
	{
		return ($this->Type2 = XiScreenerTypeFundamentalTypes::valueIsValid($_Type2)?$_Type2:null);
	}
	/**
	 * Get Type2
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getType2()
	{
		return $this->Type2;
	}
	/**
	 * Set SearchType2
	 * @param SearchCriteriaType SearchType2
	 * @return SearchCriteriaType
	 */
	public function setSearchType2($_SearchType2)
	{
		return ($this->SearchType2 = XiScreenerTypeSearchCriteriaType::valueIsValid($_SearchType2)?$_SearchType2:null);
	}
	/**
	 * Get SearchType2
	 * @return XiScreenerTypeSearchCriteriaType
	 */
	public function getSearchType2()
	{
		return $this->SearchType2;
	}
	/**
	 * Set FirstValue2
	 * @param string FirstValue2
	 * @return string
	 */
	public function setFirstValue2($_FirstValue2)
	{
		return ($this->FirstValue2 = $_FirstValue2);
	}
	/**
	 * Get FirstValue2
	 * @return string
	 */
	public function getFirstValue2()
	{
		return $this->FirstValue2;
	}
	/**
	 * Set SecondValue2
	 * @param string SecondValue2
	 * @return string
	 */
	public function setSecondValue2($_SecondValue2)
	{
		return ($this->SecondValue2 = $_SecondValue2);
	}
	/**
	 * Get SecondValue2
	 * @return string
	 */
	public function getSecondValue2()
	{
		return $this->SecondValue2;
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