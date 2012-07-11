<?php
/**
 * Class file for XiFinancialsTypeStandardItem
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeStandardItem
 * @date 08/07/2012
 */
class XiFinancialsTypeStandardItem extends XiFinancialsTypeBase
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeStandardItemTypes
	 */
	public $Type;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * Constructor
	 * @param XiFinancialsTypeStandardItemTypes Type
	 * @param XiFinancialsTypePeriodTypes PeriodType
	 * @return XiFinancialsTypeStandardItem
	 */
	public function __construct($_Type,$_PeriodType)
	{
		XiFinancialsWsdlClass::__construct(array('Type'=>$_Type,'PeriodType'=>$_PeriodType));
	}
	/**
	 * Set Type
	 * @param StandardItemTypes Type
	 * @return StandardItemTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFinancialsTypeStandardItemTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFinancialsTypeStandardItemTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiFinancialsTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiFinancialsTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
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