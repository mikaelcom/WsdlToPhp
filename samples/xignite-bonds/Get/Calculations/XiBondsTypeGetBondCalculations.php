<?php
/**
 * Class file for XiBondsTypeGetBondCalculations
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetBondCalculations
 * @date 08/07/2012
 */
class XiBondsTypeGetBondCalculations extends XiBondsWsdlClass
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
	 * @var XiBondsTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The PriceSource
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiBondsTypePriceSources
	 */
	public $PriceSource;
	/**
	 * Constructor
	 * @param string Identifiers
	 * @param XiBondsTypeIdentifierTypes IdentifierType
	 * @param XiBondsTypePriceSources PriceSource
	 * @return XiBondsTypeGetBondCalculations
	 */
	public function __construct($_Identifiers = null,$_IdentifierType,$_PriceSource)
	{
		parent::__construct(array('Identifiers'=>$_Identifiers,'IdentifierType'=>$_IdentifierType,'PriceSource'=>$_PriceSource));
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
		return ($this->IdentifierType = XiBondsTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiBondsTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set PriceSource
	 * @param PriceSources PriceSource
	 * @return PriceSources
	 */
	public function setPriceSource($_PriceSource)
	{
		return ($this->PriceSource = XiBondsTypePriceSources::valueIsValid($_PriceSource)?$_PriceSource:null);
	}
	/**
	 * Get PriceSource
	 * @return XiBondsTypePriceSources
	 */
	public function getPriceSource()
	{
		return $this->PriceSource;
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