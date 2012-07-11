<?php
/**
 * Class file for XiMetalsTypeHistoricalFutureChart
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeHistoricalFutureChart
 * @date 08/07/2012
 */
class XiMetalsTypeHistoricalFutureChart extends XiMetalsTypeStockChart
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFuture
	 */
	public $Future;
	/**
	 * The ChartType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeHistoricalChartTypes
	 */
	public $ChartType;
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
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Style
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeStockChartStyles
	 */
	public $Style;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * Constructor
	 * @param XiMetalsTypeFuture Future
	 * @param XiMetalsTypeHistoricalChartTypes ChartType
	 * @param string StartDate
	 * @param string EndDate
	 * @param int Width
	 * @param int Height
	 * @param string Title
	 * @param XiMetalsTypeStockChartStyles Style
	 * @param string Url
	 * @return XiMetalsTypeHistoricalFutureChart
	 */
	public function __construct($_Future = null,$_ChartType,$_StartDate = null,$_EndDate = null,$_Width,$_Height,$_Title = null,$_Style,$_Url = null)
	{
		XiMetalsWsdlClass::__construct(array('Future'=>$_Future,'ChartType'=>$_ChartType,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Width'=>$_Width,'Height'=>$_Height,'Title'=>$_Title,'Style'=>$_Style,'Url'=>$_Url));
	}
	/**
	 * Set Future
	 * @param Future Future
	 * @return Future
	 */
	public function setFuture($_Future)
	{
		return ($this->Future = $_Future);
	}
	/**
	 * Get Future
	 * @return XiMetalsTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
	}
	/**
	 * Set ChartType
	 * @param HistoricalChartTypes ChartType
	 * @return HistoricalChartTypes
	 */
	public function setChartType($_ChartType)
	{
		return ($this->ChartType = XiMetalsTypeHistoricalChartTypes::valueIsValid($_ChartType)?$_ChartType:null);
	}
	/**
	 * Get ChartType
	 * @return XiMetalsTypeHistoricalChartTypes
	 */
	public function getChartType()
	{
		return $this->ChartType;
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
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Style
	 * @param StockChartStyles Style
	 * @return StockChartStyles
	 */
	public function setStyle($_Style)
	{
		return ($this->Style = XiMetalsTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiMetalsTypeStockChartStyles
	 */
	public function getStyle()
	{
		return $this->Style;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
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