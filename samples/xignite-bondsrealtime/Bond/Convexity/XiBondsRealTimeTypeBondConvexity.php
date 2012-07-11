<?php
/**
 * Class file for XiBondsRealTimeTypeBondConvexity
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondConvexity
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondConvexity extends XiBondsRealTimeWsdlClass
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
	 * The ConvexityToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ConvexityToMaturity;
	/**
	 * The ConvexityToMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvexityToMaturityDate;
	/**
	 * The ConvexityToMaturityTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvexityToMaturityTime;
	/**
	 * The ConvexityToWorst
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ConvexityToWorst;
	/**
	 * The ConvexityToWorstDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvexityToWorstDate;
	/**
	 * The ConvexityToWorstTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConvexityToWorstTime;
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
	 * @param double ConvexityToMaturity
	 * @param string ConvexityToMaturityDate
	 * @param string ConvexityToMaturityTime
	 * @param double ConvexityToWorst
	 * @param string ConvexityToWorstDate
	 * @param string ConvexityToWorstTime
	 * @param double PriceUsedForCalculations
	 * @param string PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsTime
	 * @return XiBondsRealTimeTypeBondConvexity
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_ConvexityToMaturity,$_ConvexityToMaturityDate = null,$_ConvexityToMaturityTime = null,$_ConvexityToWorst,$_ConvexityToWorstDate = null,$_ConvexityToWorstTime = null,$_PriceUsedForCalculations,$_PriceUsedForCalculationsDate = null,$_PriceUsedForCalculationsTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'ConvexityToMaturity'=>$_ConvexityToMaturity,'ConvexityToMaturityDate'=>$_ConvexityToMaturityDate,'ConvexityToMaturityTime'=>$_ConvexityToMaturityTime,'ConvexityToWorst'=>$_ConvexityToWorst,'ConvexityToWorstDate'=>$_ConvexityToWorstDate,'ConvexityToWorstTime'=>$_ConvexityToWorstTime,'PriceUsedForCalculations'=>$_PriceUsedForCalculations,'PriceUsedForCalculationsDate'=>$_PriceUsedForCalculationsDate,'PriceUsedForCalculationsTime'=>$_PriceUsedForCalculationsTime));
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
	 * Set ConvexityToMaturity
	 * @param double ConvexityToMaturity
	 * @return double
	 */
	public function setConvexityToMaturity($_ConvexityToMaturity)
	{
		return ($this->ConvexityToMaturity = $_ConvexityToMaturity);
	}
	/**
	 * Get ConvexityToMaturity
	 * @return double
	 */
	public function getConvexityToMaturity()
	{
		return $this->ConvexityToMaturity;
	}
	/**
	 * Set ConvexityToMaturityDate
	 * @param string ConvexityToMaturityDate
	 * @return string
	 */
	public function setConvexityToMaturityDate($_ConvexityToMaturityDate)
	{
		return ($this->ConvexityToMaturityDate = $_ConvexityToMaturityDate);
	}
	/**
	 * Get ConvexityToMaturityDate
	 * @return string
	 */
	public function getConvexityToMaturityDate()
	{
		return $this->ConvexityToMaturityDate;
	}
	/**
	 * Set ConvexityToMaturityTime
	 * @param string ConvexityToMaturityTime
	 * @return string
	 */
	public function setConvexityToMaturityTime($_ConvexityToMaturityTime)
	{
		return ($this->ConvexityToMaturityTime = $_ConvexityToMaturityTime);
	}
	/**
	 * Get ConvexityToMaturityTime
	 * @return string
	 */
	public function getConvexityToMaturityTime()
	{
		return $this->ConvexityToMaturityTime;
	}
	/**
	 * Set ConvexityToWorst
	 * @param double ConvexityToWorst
	 * @return double
	 */
	public function setConvexityToWorst($_ConvexityToWorst)
	{
		return ($this->ConvexityToWorst = $_ConvexityToWorst);
	}
	/**
	 * Get ConvexityToWorst
	 * @return double
	 */
	public function getConvexityToWorst()
	{
		return $this->ConvexityToWorst;
	}
	/**
	 * Set ConvexityToWorstDate
	 * @param string ConvexityToWorstDate
	 * @return string
	 */
	public function setConvexityToWorstDate($_ConvexityToWorstDate)
	{
		return ($this->ConvexityToWorstDate = $_ConvexityToWorstDate);
	}
	/**
	 * Get ConvexityToWorstDate
	 * @return string
	 */
	public function getConvexityToWorstDate()
	{
		return $this->ConvexityToWorstDate;
	}
	/**
	 * Set ConvexityToWorstTime
	 * @param string ConvexityToWorstTime
	 * @return string
	 */
	public function setConvexityToWorstTime($_ConvexityToWorstTime)
	{
		return ($this->ConvexityToWorstTime = $_ConvexityToWorstTime);
	}
	/**
	 * Get ConvexityToWorstTime
	 * @return string
	 */
	public function getConvexityToWorstTime()
	{
		return $this->ConvexityToWorstTime;
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