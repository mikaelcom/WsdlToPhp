<?php
/**
 * Class file for XiRatesTypeDrawRateChart
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawRateChart
 * @date 08/07/2012
 */
class XiRatesTypeDrawRateChart extends XiRatesWsdlClass
{
	/**
	 * The RateType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateTypes
	 */
	public $RateType;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeStockChartStyles
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
	 * Constructor
	 * @param XiRatesTypeRateTypes RateType
	 * @param XiRatesTypePeriodTypes PeriodType
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiRatesTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @return XiRatesTypeDrawRateChart
	 */
	public function __construct($_RateType,$_PeriodType,$_StartDate = null,$_EndDate = null,$_Style,$_Width,$_Height)
	{
		parent::__construct(array('RateType'=>$_RateType,'PeriodType'=>$_PeriodType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height));
	}
	/**
	 * Set RateType
	 * @param RateTypes RateType
	 * @return RateTypes
	 */
	public function setRateType($_RateType)
	{
		return ($this->RateType = XiRatesTypeRateTypes::valueIsValid($_RateType)?$_RateType:null);
	}
	/**
	 * Get RateType
	 * @return XiRatesTypeRateTypes
	 */
	public function getRateType()
	{
		return $this->RateType;
	}
	/**
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiRatesTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiRatesTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiRatesTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiRatesTypeStockChartStyles
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>