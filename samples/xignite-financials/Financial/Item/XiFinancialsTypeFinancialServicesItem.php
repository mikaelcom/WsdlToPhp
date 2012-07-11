<?php
/**
 * Class file for XiFinancialsTypeFinancialServicesItem
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeFinancialServicesItem
 * @date 08/07/2012
 */
class XiFinancialsTypeFinancialServicesItem extends XiFinancialsTypeBase
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesItemTypes
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
	 * @param XiFinancialsTypeFinancialServicesItemTypes Type
	 * @param XiFinancialsTypePeriodTypes PeriodType
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function __construct($_Type,$_PeriodType)
	{
		XiFinancialsWsdlClass::__construct(array('Type'=>$_Type,'PeriodType'=>$_PeriodType));
	}
	/**
	 * Set Type
	 * @param FinancialServicesItemTypes Type
	 * @return FinancialServicesItemTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFinancialsTypeFinancialServicesItemTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFinancialsTypeFinancialServicesItemTypes
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