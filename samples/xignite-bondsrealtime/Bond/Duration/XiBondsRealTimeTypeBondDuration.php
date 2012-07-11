<?php
/**
 * Class file for XiBondsRealTimeTypeBondDuration
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeBondDuration
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeBondDuration extends XiBondsRealTimeWsdlClass
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
	 * The DurationToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DurationToMaturity;
	/**
	 * The DurationToMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToMaturityDate;
	/**
	 * The DurationToMaturityTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToMaturityTime;
	/**
	 * The ModifiedDurationToMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ModifiedDurationToMaturity;
	/**
	 * The ModifiedDurationToMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ModifiedDurationToMaturityDate;
	/**
	 * The ModifiedDurationToMaturityTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ModifiedDurationToMaturityTime;
	/**
	 * The DurationToNextCouponMaturity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DurationToNextCouponMaturity;
	/**
	 * The DurationToNextCouponMaturityDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToNextCouponMaturityDate;
	/**
	 * The DurationToNextCouponMaturityTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToNextCouponMaturityTime;
	/**
	 * The DurationToWorst
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DurationToWorst;
	/**
	 * The DurationToWorstDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToWorstDate;
	/**
	 * The DurationToWorstTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DurationToWorstTime;
	/**
	 * The DurationToNextCall
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DurationToNextCall;
	/**
	 * The ModifiedDurationToNextCall
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ModifiedDurationToNextCall;
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
	 * @param double DurationToMaturity
	 * @param string DurationToMaturityDate
	 * @param string DurationToMaturityTime
	 * @param double ModifiedDurationToMaturity
	 * @param string ModifiedDurationToMaturityDate
	 * @param string ModifiedDurationToMaturityTime
	 * @param double DurationToNextCouponMaturity
	 * @param string DurationToNextCouponMaturityDate
	 * @param string DurationToNextCouponMaturityTime
	 * @param double DurationToWorst
	 * @param string DurationToWorstDate
	 * @param string DurationToWorstTime
	 * @param double DurationToNextCall
	 * @param double ModifiedDurationToNextCall
	 * @param double PriceUsedForCalculations
	 * @param string PriceUsedForCalculationsDate
	 * @param string PriceUsedForCalculationsTime
	 * @return XiBondsRealTimeTypeBondDuration
	 */
	public function __construct($_ShortName = null,$_Symbol = null,$_PriceSource = null,$_Currency = null,$_DurationToMaturity,$_DurationToMaturityDate = null,$_DurationToMaturityTime = null,$_ModifiedDurationToMaturity,$_ModifiedDurationToMaturityDate = null,$_ModifiedDurationToMaturityTime = null,$_DurationToNextCouponMaturity,$_DurationToNextCouponMaturityDate = null,$_DurationToNextCouponMaturityTime = null,$_DurationToWorst,$_DurationToWorstDate = null,$_DurationToWorstTime = null,$_DurationToNextCall,$_ModifiedDurationToNextCall,$_PriceUsedForCalculations,$_PriceUsedForCalculationsDate = null,$_PriceUsedForCalculationsTime = null)
	{
		parent::__construct(array('ShortName'=>$_ShortName,'Symbol'=>$_Symbol,'PriceSource'=>$_PriceSource,'Currency'=>$_Currency,'DurationToMaturity'=>$_DurationToMaturity,'DurationToMaturityDate'=>$_DurationToMaturityDate,'DurationToMaturityTime'=>$_DurationToMaturityTime,'ModifiedDurationToMaturity'=>$_ModifiedDurationToMaturity,'ModifiedDurationToMaturityDate'=>$_ModifiedDurationToMaturityDate,'ModifiedDurationToMaturityTime'=>$_ModifiedDurationToMaturityTime,'DurationToNextCouponMaturity'=>$_DurationToNextCouponMaturity,'DurationToNextCouponMaturityDate'=>$_DurationToNextCouponMaturityDate,'DurationToNextCouponMaturityTime'=>$_DurationToNextCouponMaturityTime,'DurationToWorst'=>$_DurationToWorst,'DurationToWorstDate'=>$_DurationToWorstDate,'DurationToWorstTime'=>$_DurationToWorstTime,'DurationToNextCall'=>$_DurationToNextCall,'ModifiedDurationToNextCall'=>$_ModifiedDurationToNextCall,'PriceUsedForCalculations'=>$_PriceUsedForCalculations,'PriceUsedForCalculationsDate'=>$_PriceUsedForCalculationsDate,'PriceUsedForCalculationsTime'=>$_PriceUsedForCalculationsTime));
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
	 * Set DurationToMaturity
	 * @param double DurationToMaturity
	 * @return double
	 */
	public function setDurationToMaturity($_DurationToMaturity)
	{
		return ($this->DurationToMaturity = $_DurationToMaturity);
	}
	/**
	 * Get DurationToMaturity
	 * @return double
	 */
	public function getDurationToMaturity()
	{
		return $this->DurationToMaturity;
	}
	/**
	 * Set DurationToMaturityDate
	 * @param string DurationToMaturityDate
	 * @return string
	 */
	public function setDurationToMaturityDate($_DurationToMaturityDate)
	{
		return ($this->DurationToMaturityDate = $_DurationToMaturityDate);
	}
	/**
	 * Get DurationToMaturityDate
	 * @return string
	 */
	public function getDurationToMaturityDate()
	{
		return $this->DurationToMaturityDate;
	}
	/**
	 * Set DurationToMaturityTime
	 * @param string DurationToMaturityTime
	 * @return string
	 */
	public function setDurationToMaturityTime($_DurationToMaturityTime)
	{
		return ($this->DurationToMaturityTime = $_DurationToMaturityTime);
	}
	/**
	 * Get DurationToMaturityTime
	 * @return string
	 */
	public function getDurationToMaturityTime()
	{
		return $this->DurationToMaturityTime;
	}
	/**
	 * Set ModifiedDurationToMaturity
	 * @param double ModifiedDurationToMaturity
	 * @return double
	 */
	public function setModifiedDurationToMaturity($_ModifiedDurationToMaturity)
	{
		return ($this->ModifiedDurationToMaturity = $_ModifiedDurationToMaturity);
	}
	/**
	 * Get ModifiedDurationToMaturity
	 * @return double
	 */
	public function getModifiedDurationToMaturity()
	{
		return $this->ModifiedDurationToMaturity;
	}
	/**
	 * Set ModifiedDurationToMaturityDate
	 * @param string ModifiedDurationToMaturityDate
	 * @return string
	 */
	public function setModifiedDurationToMaturityDate($_ModifiedDurationToMaturityDate)
	{
		return ($this->ModifiedDurationToMaturityDate = $_ModifiedDurationToMaturityDate);
	}
	/**
	 * Get ModifiedDurationToMaturityDate
	 * @return string
	 */
	public function getModifiedDurationToMaturityDate()
	{
		return $this->ModifiedDurationToMaturityDate;
	}
	/**
	 * Set ModifiedDurationToMaturityTime
	 * @param string ModifiedDurationToMaturityTime
	 * @return string
	 */
	public function setModifiedDurationToMaturityTime($_ModifiedDurationToMaturityTime)
	{
		return ($this->ModifiedDurationToMaturityTime = $_ModifiedDurationToMaturityTime);
	}
	/**
	 * Get ModifiedDurationToMaturityTime
	 * @return string
	 */
	public function getModifiedDurationToMaturityTime()
	{
		return $this->ModifiedDurationToMaturityTime;
	}
	/**
	 * Set DurationToNextCouponMaturity
	 * @param double DurationToNextCouponMaturity
	 * @return double
	 */
	public function setDurationToNextCouponMaturity($_DurationToNextCouponMaturity)
	{
		return ($this->DurationToNextCouponMaturity = $_DurationToNextCouponMaturity);
	}
	/**
	 * Get DurationToNextCouponMaturity
	 * @return double
	 */
	public function getDurationToNextCouponMaturity()
	{
		return $this->DurationToNextCouponMaturity;
	}
	/**
	 * Set DurationToNextCouponMaturityDate
	 * @param string DurationToNextCouponMaturityDate
	 * @return string
	 */
	public function setDurationToNextCouponMaturityDate($_DurationToNextCouponMaturityDate)
	{
		return ($this->DurationToNextCouponMaturityDate = $_DurationToNextCouponMaturityDate);
	}
	/**
	 * Get DurationToNextCouponMaturityDate
	 * @return string
	 */
	public function getDurationToNextCouponMaturityDate()
	{
		return $this->DurationToNextCouponMaturityDate;
	}
	/**
	 * Set DurationToNextCouponMaturityTime
	 * @param string DurationToNextCouponMaturityTime
	 * @return string
	 */
	public function setDurationToNextCouponMaturityTime($_DurationToNextCouponMaturityTime)
	{
		return ($this->DurationToNextCouponMaturityTime = $_DurationToNextCouponMaturityTime);
	}
	/**
	 * Get DurationToNextCouponMaturityTime
	 * @return string
	 */
	public function getDurationToNextCouponMaturityTime()
	{
		return $this->DurationToNextCouponMaturityTime;
	}
	/**
	 * Set DurationToWorst
	 * @param double DurationToWorst
	 * @return double
	 */
	public function setDurationToWorst($_DurationToWorst)
	{
		return ($this->DurationToWorst = $_DurationToWorst);
	}
	/**
	 * Get DurationToWorst
	 * @return double
	 */
	public function getDurationToWorst()
	{
		return $this->DurationToWorst;
	}
	/**
	 * Set DurationToWorstDate
	 * @param string DurationToWorstDate
	 * @return string
	 */
	public function setDurationToWorstDate($_DurationToWorstDate)
	{
		return ($this->DurationToWorstDate = $_DurationToWorstDate);
	}
	/**
	 * Get DurationToWorstDate
	 * @return string
	 */
	public function getDurationToWorstDate()
	{
		return $this->DurationToWorstDate;
	}
	/**
	 * Set DurationToWorstTime
	 * @param string DurationToWorstTime
	 * @return string
	 */
	public function setDurationToWorstTime($_DurationToWorstTime)
	{
		return ($this->DurationToWorstTime = $_DurationToWorstTime);
	}
	/**
	 * Get DurationToWorstTime
	 * @return string
	 */
	public function getDurationToWorstTime()
	{
		return $this->DurationToWorstTime;
	}
	/**
	 * Set DurationToNextCall
	 * @param double DurationToNextCall
	 * @return double
	 */
	public function setDurationToNextCall($_DurationToNextCall)
	{
		return ($this->DurationToNextCall = $_DurationToNextCall);
	}
	/**
	 * Get DurationToNextCall
	 * @return double
	 */
	public function getDurationToNextCall()
	{
		return $this->DurationToNextCall;
	}
	/**
	 * Set ModifiedDurationToNextCall
	 * @param double ModifiedDurationToNextCall
	 * @return double
	 */
	public function setModifiedDurationToNextCall($_ModifiedDurationToNextCall)
	{
		return ($this->ModifiedDurationToNextCall = $_ModifiedDurationToNextCall);
	}
	/**
	 * Get ModifiedDurationToNextCall
	 * @return double
	 */
	public function getModifiedDurationToNextCall()
	{
		return $this->ModifiedDurationToNextCall;
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