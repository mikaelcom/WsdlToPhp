<?php
/**
 * Class file for XiGlobalHistoricalTypeGetEndOfDayQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetEndOfDayQuote
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetEndOfDayQuote extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The AdjustmentMethod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var AdjustmentMethods
	 */
	public $AdjustmentMethod;
	/**
	 * The EndOfDayPriceMethod
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalHistoricalTypeEndOfDayPriceMethods
	 */
	public $EndOfDayPriceMethod;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiGlobalHistoricalTypeIdentifierTypes IdentifierType
	 * @param AdjustmentMethods AdjustmentMethod
	 * @param XiGlobalHistoricalTypeEndOfDayPriceMethods EndOfDayPriceMethod
	 * @param string AsOfDate
	 * @return XiGlobalHistoricalTypeGetEndOfDayQuote
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AdjustmentMethod,$_EndOfDayPriceMethod,$_AsOfDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AdjustmentMethod'=>$_AdjustmentMethod,'EndOfDayPriceMethod'=>$_EndOfDayPriceMethod,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalHistoricalTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalHistoricalTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set AdjustmentMethod
	 * @param AdjustmentMethods AdjustmentMethod
	 * @return AdjustmentMethods
	 */
	public function setAdjustmentMethod($_AdjustmentMethod)
	{
		return ($this->AdjustmentMethod = $_AdjustmentMethod);
	}
	/**
	 * Get AdjustmentMethod
	 * @return AdjustmentMethods
	 */
	public function getAdjustmentMethod()
	{
		return $this->AdjustmentMethod;
	}
	/**
	 * Set EndOfDayPriceMethod
	 * @param EndOfDayPriceMethods EndOfDayPriceMethod
	 * @return EndOfDayPriceMethods
	 */
	public function setEndOfDayPriceMethod($_EndOfDayPriceMethod)
	{
		return ($this->EndOfDayPriceMethod = XiGlobalHistoricalTypeEndOfDayPriceMethods::valueIsValid($_EndOfDayPriceMethod)?$_EndOfDayPriceMethod:null);
	}
	/**
	 * Get EndOfDayPriceMethod
	 * @return XiGlobalHistoricalTypeEndOfDayPriceMethods
	 */
	public function getEndOfDayPriceMethod()
	{
		return $this->EndOfDayPriceMethod;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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