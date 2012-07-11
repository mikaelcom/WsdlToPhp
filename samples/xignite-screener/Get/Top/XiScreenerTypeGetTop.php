<?php
/**
 * Class file for XiScreenerTypeGetTop
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeGetTop
 * @date 08/07/2012
 */
class XiScreenerTypeGetTop extends XiScreenerWsdlClass
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
	 * @param XiScreenerTypeFundamentalTypes OrderBy
	 * @param XiScreenerTypeDirectionTypes Direction
	 * @param XiScreenerTypeArrayOfSearchCriteria Criteria
	 * @param int Count
	 * @return XiScreenerTypeGetTop
	 */
	public function __construct($_OrderBy,$_Direction,$_Criteria = null,$_Count)
	{
		parent::__construct(array('OrderBy'=>$_OrderBy,'Direction'=>$_Direction,'Criteria'=>new XiScreenerTypeArrayOfSearchCriteria($_Criteria),'Count'=>$_Count));
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