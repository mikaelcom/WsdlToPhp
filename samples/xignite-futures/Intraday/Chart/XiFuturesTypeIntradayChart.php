<?php
/**
 * Class file for XiFuturesTypeIntradayChart
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeIntradayChart
 * @date 08/07/2012
 */
class XiFuturesTypeIntradayChart extends XiFuturesTypeStockChart
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeFuture
	 */
	public $Future;
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
	 * @var XiFuturesTypeStockChartStyles
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
	 * @param XiFuturesTypeFuture Future
	 * @param string StartTime
	 * @param string EndTime
	 * @param int Width
	 * @param int Height
	 * @param string Title
	 * @param XiFuturesTypeStockChartStyles Style
	 * @param string Url
	 * @return XiFuturesTypeIntradayChart
	 */
	public function __construct($_Future = null,$_StartTime = null,$_EndTime = null,$_Width,$_Height,$_Title = null,$_Style,$_Url = null)
	{
		XiFuturesWsdlClass::__construct(array('Future'=>$_Future,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Width'=>$_Width,'Height'=>$_Height,'Title'=>$_Title,'Style'=>$_Style,'Url'=>$_Url));
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
	 * @return XiFuturesTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
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
		return ($this->Style = XiFuturesTypeStockChartStyles::valueIsValid($_Style)?$_Style:null);
	}
	/**
	 * Get Style
	 * @return XiFuturesTypeStockChartStyles
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