<?php
/**
 * Class file for XiFundsTypeGetLatestNAVAdjusted
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeGetLatestNAVAdjusted
 * @date 08/07/2012
 */
class XiFundsTypeGetLatestNAVAdjusted extends XiFundsWsdlClass
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
	 * @var XiFundsTypeIdentifierTypes
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
	 * @param string Identifier
	 * @param XiFundsTypeIdentifierTypes IdentifierType
	 * @param AdjustmentMethods AdjustmentMethod
	 * @return XiFundsTypeGetLatestNAVAdjusted
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AdjustmentMethod)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AdjustmentMethod'=>$_AdjustmentMethod));
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
		return ($this->IdentifierType = XiFundsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiFundsTypeIdentifierTypes
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