<?php
/**
 * Class file for XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice extends XiBondsRealTimeWsdlClass
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
	 * @var XiBondsRealTimeTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The PriceSource
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypePriceSources
	 */
	public $PriceSource;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiBondsRealTimeTypeIdentifierTypes IdentifierType
	 * @param XiBondsRealTimeTypePriceSources PriceSource
	 * @return XiBondsRealTimeTypeGetDailyOpenHighLowClosePrice
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
		return ($this->IdentifierType = XiBondsRealTimeTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiBondsRealTimeTypeIdentifierTypes
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
		return ($this->PriceSource = XiBondsRealTimeTypePriceSources::valueIsValid($_PriceSource)?$_PriceSource:null);
	}
	/**
	 * Get PriceSource
	 * @return XiBondsRealTimeTypePriceSources
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