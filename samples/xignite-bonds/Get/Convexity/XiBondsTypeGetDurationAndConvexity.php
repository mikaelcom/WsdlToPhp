<?php
/**
 * Class file for XiBondsTypeGetDurationAndConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetDurationAndConvexity
 * @date 08/07/2012
 */
class XiBondsTypeGetDurationAndConvexity extends XiBondsWsdlClass
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
	 * @param string Identifier
	 * @param XiBondsTypeIdentifierTypes IdentifierType
	 * @param XiBondsTypePriceSources PriceSource
	 * @return XiBondsTypeGetDurationAndConvexity
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_PriceSource)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'PriceSource'=>$_PriceSource));
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