<?php
/**
 * Class file for XiScreenerTypeGetTopSingle
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeGetTopSingle
 * @date 08/07/2012
 */
class XiScreenerTypeGetTopSingle extends XiScreenerWsdlClass
{
	/**
	 * The OrderBy
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $OrderBy;
	/**
	 * The Direction
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeDirectionTypes
	 */
	public $Direction;
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
	 * @param XiScreenerTypeFundamentalTypes OrderBy
	 * @param XiScreenerTypeDirectionTypes Direction
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param XiScreenerTypeSearchCriteriaType SearchType
	 * @param string FirstValue
	 * @param string SecondValue
	 * @param int Count
	 * @return XiScreenerTypeGetTopSingle
	 */
	public function __construct($_OrderBy,$_Direction,$_Type,$_SearchType,$_FirstValue = null,$_SecondValue = null,$_Count)
	{
		parent::__construct(array('OrderBy'=>$_OrderBy,'Direction'=>$_Direction,'Type'=>$_Type,'SearchType'=>$_SearchType,'FirstValue'=>$_FirstValue,'SecondValue'=>$_SecondValue,'Count'=>$_Count));
	}
	/**
	 * Set OrderBy
	 * @param FundamentalTypes OrderBy
	 * @return FundamentalTypes
	 */
	public function setOrderBy($_OrderBy)
	{
		return ($this->OrderBy = XiScreenerTypeFundamentalTypes::valueIsValid($_OrderBy)?$_OrderBy:null);
	}
	/**
	 * Get OrderBy
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getOrderBy()
	{
		return $this->OrderBy;
	}
	/**
	 * Set Direction
	 * @param DirectionTypes Direction
	 * @return DirectionTypes
	 */
	public function setDirection($_Direction)
	{
		return ($this->Direction = XiScreenerTypeDirectionTypes::valueIsValid($_Direction)?$_Direction:null);
	}
	/**
	 * Get Direction
	 * @return XiScreenerTypeDirectionTypes
	 */
	public function getDirection()
	{
		return $this->Direction;
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