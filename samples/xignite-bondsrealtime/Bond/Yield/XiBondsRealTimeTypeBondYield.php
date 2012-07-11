<?php
/**
 * Class file for XiBondsRealTimeTypeBondYield
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondYield
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondYield extends XiBondsRealTimeWsdlClass
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
	 * The CurrentYield
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentYield;
	/**
	 * The YieldToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YieldToMaturity;
	/**
	 * The YieldToMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YieldToMaturityDate;
	/**
	 * The YieldToMaturityTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YieldToMaturityTime;
	/**
	 * The YieldToNextCall
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $YieldToNextCall;
	/**
	 * The YieldToNextCallDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $YieldToNextCallDate;
	/**
	 * The DiscountYield
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DiscountYield;
	/**
	 * The DiscountYieldDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DiscountYieldDate;
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
	 * @param double CurrentYield
	 * @param double YieldToMaturity
	 * @param string YieldToMaturityDate
	 * @param string YieldToMaturityTime
	 * @param double YieldToNextCall
	 * @param string YieldToNextCallDate
	 * @param double DiscountYield
	 * @param string DiscountYieldDate
	 * @param double PriceUsedForCalculations
	 * @param string PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsTime
	 * @return XiBondsRealTimeTypeBondYield
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_CurrentYield,$_YieldToMaturity,$_YieldToMaturityDate = null,$_YieldToMaturityTime = null,$_YieldToNextCall,$_YieldToNextCallDate = null,$_DiscountYield,$_DiscountYieldDate = null,$_PriceUsedForCalculations,$_PriceUsedForCalculationsDate = null,$_PriceUsedForCalculationsTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'CurrentYield'=>$_CurrentYield,'YieldToMaturity'=>$_YieldToMaturity,'YieldToMaturityDate'=>$_YieldToMaturityDate,'YieldToMaturityTime'=>$_YieldToMaturityTime,'YieldToNextCall'=>$_YieldToNextCall,'YieldToNextCallDate'=>$_YieldToNextCallDate,'DiscountYield'=>$_DiscountYield,'DiscountYieldDate'=>$_DiscountYieldDate,'PriceUsedForCalculations'=>$_PriceUsedForCalculations,'PriceUsedForCalculationsDate'=>$_PriceUsedForCalculationsDate,'PriceUsedForCalculationsTime'=>$_PriceUsedForCalculationsTime));
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
	 * Set CurrentYield
	 * @param double CurrentYield
	 * @return double
	 */
	public function setCurrentYield($_CurrentYield)
	{
		return ($this->CurrentYield = $_CurrentYield);
	}
	/**
	 * Get CurrentYield
	 * @return double
	 */
	public function getCurrentYield()
	{
		return $this->CurrentYield;
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
	 * Set YieldToMaturityDate
	 * @param string YieldToMaturityDate
	 * @return string
	 */
	public function setYieldToMaturityDate($_YieldToMaturityDate)
	{
		return ($this->YieldToMaturityDate = $_YieldToMaturityDate);
	}
	/**
	 * Get YieldToMaturityDate
	 * @return string
	 */
	public function getYieldToMaturityDate()
	{
		return $this->YieldToMaturityDate;
	}
	/**
	 * Set YieldToMaturityTime
	 * @param string YieldToMaturityTime
	 * @return string
	 */
	public function setYieldToMaturityTime($_YieldToMaturityTime)
	{
		return ($this->YieldToMaturityTime = $_YieldToMaturityTime);
	}
	/**
	 * Get YieldToMaturityTime
	 * @return string
	 */
	public function getYieldToMaturityTime()
	{
		return $this->YieldToMaturityTime;
	}
	/**
	 * Set YieldToNextCall
	 * @param double YieldToNextCall
	 * @return double
	 */
	public function setYieldToNextCall($_YieldToNextCall)
	{
		return ($this->YieldToNextCall = $_YieldToNextCall);
	}
	/**
	 * Get YieldToNextCall
	 * @return double
	 */
	public function getYieldToNextCall()
	{
		return $this->YieldToNextCall;
	}
	/**
	 * Set YieldToNextCallDate
	 * @param string YieldToNextCallDate
	 * @return string
	 */
	public function setYieldToNextCallDate($_YieldToNextCallDate)
	{
		return ($this->YieldToNextCallDate = $_YieldToNextCallDate);
	}
	/**
	 * Get YieldToNextCallDate
	 * @return string
	 */
	public function getYieldToNextCallDate()
	{
		return $this->YieldToNextCallDate;
	}
	/**
	 * Set DiscountYield
	 * @param double DiscountYield
	 * @return double
	 */
	public function setDiscountYield($_DiscountYield)
	{
		return ($this->DiscountYield = $_DiscountYield);
	}
	/**
	 * Get DiscountYield
	 * @return double
	 */
	public function getDiscountYield()
	{
		return $this->DiscountYield;
	}
	/**
	 * Set DiscountYieldDate
	 * @param string DiscountYieldDate
	 * @return string
	 */
	public function setDiscountYieldDate($_DiscountYieldDate)
	{
		return ($this->DiscountYieldDate = $_DiscountYieldDate);
	}
	/**
	 * Get DiscountYieldDate
	 * @return string
	 */
	public function getDiscountYieldDate()
	{
		return $this->DiscountYieldDate;
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