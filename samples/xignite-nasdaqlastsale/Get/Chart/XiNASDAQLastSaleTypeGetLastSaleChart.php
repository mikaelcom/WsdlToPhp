<?php
/**
 * Class file for XiNASDAQLastSaleTypeGetLastSaleChart
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeGetLastSaleChart
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeGetLastSaleChart extends XiNASDAQLastSaleWsdlClass
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
	 * The AdditionalSymbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AdditionalSymbols;
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
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiNASDAQLastSaleTypeStockChartStyles
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
	 * @param string Symbol
	 * @param string AdditionalSymbols
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiNASDAQLastSaleTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @return XiNASDAQLastSaleTypeGetLastSaleChart
	 */
	public function __construct($_Symbol = null,$_AdditionalSymbols = null,$_StartTime = null,$_EndTime = null,$_Style,$_Width,$_Height)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'AdditionalSymbols'=>$_AdditionalSymbols,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height));
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
	 * Set AdditionalSymbols
	 * @param string AdditionalSymbols
	 * @return string
	 */
	public function setAdditionalSymbols($_AdditionalSymbols)
	{
		return ($this->AdditionalSymbols = $_AdditionalSymbols);
	}
	/**
	 * Get AdditionalSymbols
	 * @return string
	 */
	public function getAdditionalSymbols()
	{
		return $this->AdditionalSymbols;
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
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiNASDAQLastSaleTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiNASDAQLastSaleTypeStockChartStyles
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