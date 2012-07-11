<?php
/**
 * Class file for XiCurrenciesTypeGetCurrencyIntradayChartCustom
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetCurrencyIntradayChartCustom
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetCurrencyIntradayChartCustom extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndTime;
	/**
	 * The TimeZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TimeZone;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeStockChartStyles
	 */
	public $Style;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Height;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PeriodType;
	/**
	 * The TickPeriods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TickPeriods;
	/**
	 * The Design
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeChartDesign
	 */
	public $Design;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string StartTime
	 * @param string EndTime
	 * @param string TimeZone
	 * @param XiCurrenciesTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @param string PeriodType
	 * @param int TickPeriods
	 * @param XiCurrenciesTypeChartDesign Design
	 * @return XiCurrenciesTypeGetCurrencyIntradayChartCustom
	 */
	public function __construct($_Symbol = null,$_StartTime = null,$_EndTime = null,$_TimeZone = null,$_Style,$_Width,$_Height,$_PeriodType = null,$_TickPeriods,$_Design = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'TimeZone'=>$_TimeZone,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height,'PeriodType'=>$_PeriodType,'TickPeriods'=>$_TickPeriods,'Design'=>$_Design));
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
	 * Set StartTime
	 * @param string StartTime
	 * @return string
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param string EndTime
	 * @return string
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set TimeZone
	 * @param string TimeZone
	 * @return string
	 */
	public function setTimeZone($_TimeZone)
	{
		return ($this->TimeZone = $_TimeZone);
	}
	/**
	 * Get TimeZone
	 * @return string
	 */
	public function getTimeZone()
	{
		return $this->TimeZone;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiCurrenciesTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiCurrenciesTypeStockChartStyles
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set PeriodType
	 * @param string PeriodType
	 * @return string
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = $_PeriodType);
	}
	/**
	 * Get PeriodType
	 * @return string
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set TickPeriods
	 * @param int TickPeriods
	 * @return int
	 */
	public function setTickPeriods($_TickPeriods)
	{
		return ($this->TickPeriods = $_TickPeriods);
	}
	/**
	 * Get TickPeriods
	 * @return int
	 */
	public function getTickPeriods()
	{
		return $this->TickPeriods;
	}
	/**
	 * Set Design
	 * @param ChartDesign Design
	 * @return ChartDesign
	 */
	public function setDesign($_Design)
	{
		return ($this->Design = $_Design);
	}
	/**
	 * Get Design
	 * @return XiCurrenciesTypeChartDesign
	 */
	public function getDesign()
	{
		return $this->Design;
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