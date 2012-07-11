<?php
/**
 * Class file for XiChartTypeDrawHistoricalChart
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeDrawHistoricalChart
 * @date 08/07/2012
 */
class XiChartTypeDrawHistoricalChart extends XiChartWsdlClass
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
	 * @var XiChartTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The AdditionalSymbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AdditionalSymbols;
	/**
	 * The PeriodType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiChartTypePeriodTypes
	 */
	public $PeriodType;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiChartTypeStockChartStyles
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
	 * @param string Identifier
	 * @param XiChartTypeIdentifierTypes IdentifierType
	 * @param string AdditionalSymbols
	 * @param XiChartTypePeriodTypes PeriodType
	 * @param XiChartTypeStockChartStyles Style
	 * @param int Width
	 * @param int Height
	 * @return XiChartTypeDrawHistoricalChart
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_AdditionalSymbols = null,$_PeriodType,$_Style,$_Width,$_Height)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'AdditionalSymbols'=>$_AdditionalSymbols,'PeriodType'=>$_PeriodType,'Style'=>$_Style,'Width'=>$_Width,'Height'=>$_Height));
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
		return ($this->IdentifierType = XiChartTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiChartTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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
	 * Set PeriodType
	 * @param PeriodTypes PeriodType
	 * @return PeriodTypes
	 */
	public function setPeriodType($_PeriodType)
	{
		return ($this->PeriodType = XiChartTypePeriodTypes::valueIsValid($_PeriodType)?$_PeriodType:null);
	}
	/**
	 * Get PeriodType
	 * @return XiChartTypePeriodTypes
	 */
	public function getPeriodType()
	{
		return $this->PeriodType;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiChartTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiChartTypeStockChartStyles
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