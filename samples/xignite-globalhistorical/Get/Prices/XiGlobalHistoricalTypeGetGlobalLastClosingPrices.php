<?php
/**
 * Class file for XiGlobalHistoricalTypeGetGlobalLastClosingPrices
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeGetGlobalLastClosingPrices
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeGetGlobalLastClosingPrices extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The Identifiers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifiers;
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
	 * Constructor
	 * @param string Identifiers
	 * @param XiGlobalHistoricalTypeIdentifierTypes IdentifierType
	 * @param AdjustmentMethods AdjustmentMethod
	 * @return XiGlobalHistoricalTypeGetGlobalLastClosingPrices
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_AdjustmentMethod)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'AdjustmentMethod'=>$_AdjustmentMethod));
	}
	/**
	 * Set Identifiers
	 * @param string Identifiers
	 * @return string
	 */
	public function setIdentifiers($_Identifiers)
	{
		return ($this->Identifiers = $_Identifiers);
	}
	/**
	 * Get Identifiers
	 * @return string
	 */
	public function getIdentifiers()
	{
		return $this->Identifiers;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>