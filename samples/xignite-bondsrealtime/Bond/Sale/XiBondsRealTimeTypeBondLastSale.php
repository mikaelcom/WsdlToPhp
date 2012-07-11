<?php
/**
 * Class file for XiBondsRealTimeTypeBondLastSale
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondLastSale
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondLastSale extends XiBondsRealTimeWsdlClass
{
	/**
	 * The ShortName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ShortName;
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The PriceSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceSource;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The LastSale
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LastSale;
	/**
	 * The LastSaleSize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $LastSaleSize;
	/**
	 * The LastSaleDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSaleDate;
	/**
	 * The LastSaleTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastSaleTime;
	/**
	 * The YieldToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YieldToMaturity;
	/**
	 * The PriceUsedForCalculations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PriceUsedForCalculations;
	/**
	 * The PriceUsedForCalculationsDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceUsedForCalculationsDate;
	/**
	 * The PriceUsedForCalculationsTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriceUsedForCalculationsTime;
	/**
	 * Constructor
	 * @param string ShortName
	 * @param string Symbol
	 * @param string PriceSource
	 * @param string Currency
	 * @param double LastSale
	 * @param int LastSaleSize
	 * @param string LastSaleDate
	 * @param string LastSaleTime
	 * @param double YieldToMaturity
	 * @param double PriceUsedForCalculations
	 * @param string PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsTime
	 * @return XiBondsRealTimeTypeBondLastSale
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_LastSale,$_LastSaleSize,$_LastSaleDate = null,$_LastSaleTime = null,$_YieldToMaturity,$_PriceUsedForCalculations,$_PriceUsedForCalculationsDate = null,$_PriceUsedForCalculationsTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'LastSale'=>$_LastSale,'LastSaleSize'=>$_LastSaleSize,'LastSaleDate'=>$_LastSaleDate,'LastSaleTime'=>$_LastSaleTime,'YieldToMaturity'=>$_YieldToMaturity,'PriceUsedForCalculations'=>$_PriceUsedForCalculations,'PriceUsedForCalculationsDate'=>$_PriceUsedForCalculationsDate,'PriceUsedForCalculationsTime'=>$_PriceUsedForCalculationsTime));
	}
	/**
	 * Set ShortName
	 * @param string ShortName
	 * @return string
	 */
	public function setShortName($_ShortName)
	{
		return ($this->ShortName = $_ShortName);
	}
	/**
	 * Get ShortName
	 * @return string
	 */
	public function getShortName()
	{
		return $this->ShortName;
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set PriceSource
	 * @param string PriceSource
	 * @return string
	 */
	public function setPriceSource($_PriceSource)
	{
		return ($this->PriceSource = $_PriceSource);
	}
	/**
	 * Get PriceSource
	 * @return string
	 */
	public function getPriceSource()
	{
		return $this->PriceSource;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set LastSale
	 * @param double LastSale
	 * @return double
	 */
	public function setLastSale($_LastSale)
	{
		return ($this->LastSale = $_LastSale);
	}
	/**
	 * Get LastSale
	 * @return double
	 */
	public function getLastSale()
	{
		return $this->LastSale;
	}
	/**
	 * Set LastSaleSize
	 * @param int LastSaleSize
	 * @return int
	 */
	public function setLastSaleSize($_LastSaleSize)
	{
		return ($this->LastSaleSize = $_LastSaleSize);
	}
	/**
	 * Get LastSaleSize
	 * @return int
	 */
	public function getLastSaleSize()
	{
		return $this->LastSaleSize;
	}
	/**
	 * Set LastSaleDate
	 * @param string LastSaleDate
	 * @return string
	 */
	public function setLastSaleDate($_LastSaleDate)
	{
		return ($this->LastSaleDate = $_LastSaleDate);
	}
	/**
	 * Get LastSaleDate
	 * @return string
	 */
	public function getLastSaleDate()
	{
		return $this->LastSaleDate;
	}
	/**
	 * Set LastSaleTime
	 * @param string LastSaleTime
	 * @return string
	 */
	public function setLastSaleTime($_LastSaleTime)
	{
		return ($this->LastSaleTime = $_LastSaleTime);
	}
	/**
	 * Get LastSaleTime
	 * @return string
	 */
	public function getLastSaleTime()
	{
		return $this->LastSaleTime;
	}
	/**
	 * Set YieldToMaturity
	 * @param double YieldToMaturity
	 * @return double
	 */
	public function setYieldToMaturity($_YieldToMaturity)
	{
		return ($this->YieldToMaturity = $_YieldToMaturity);
	}
	/**
	 * Get YieldToMaturity
	 * @return double
	 */
	public function getYieldToMaturity()
	{
		return $this->YieldToMaturity;
	}
	/**
	 * Set PriceUsedForCalculations
	 * @param double PriceUsedForCalculations
	 * @return double
	 */
	public function setPriceUsedForCalculations($_PriceUsedForCalculations)
	{
		return ($this->PriceUsedForCalculations = $_PriceUsedForCalculations);
	}
	/**
	 * Get PriceUsedForCalculations
	 * @return double
	 */
	public function getPriceUsedForCalculations()
	{
		return $this->PriceUsedForCalculations;
	}
	/**
	 * Set PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsDate
	 * @return string
	 */
	public function setPriceUsedForCalculationsDate($_PriceUsedForCalculationsDate)
	{
		return ($this->PriceUsedForCalculationsDate = $_PriceUsedForCalculationsDate);
	}
	/**
	 * Get PriceUsedForCalculationsDate
	 * @return string
	 */
	public function getPriceUsedForCalculationsDate()
	{
		return $this->PriceUsedForCalculationsDate;
	}
	/**
	 * Set PriceUsedForCalculationsTime
	 * @param string PriceUsedForCalculationsTime
	 * @return string
	 */
	public function setPriceUsedForCalculationsTime($_PriceUsedForCalculationsTime)
	{
		return ($this->PriceUsedForCalculationsTime = $_PriceUsedForCalculationsTime);
	}
	/**
	 * Get PriceUsedForCalculationsTime
	 * @return string
	 */
	public function getPriceUsedForCalculationsTime()
	{
		return $this->PriceUsedForCalculationsTime;
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