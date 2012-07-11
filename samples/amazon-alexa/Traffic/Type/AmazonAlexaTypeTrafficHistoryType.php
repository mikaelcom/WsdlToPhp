<?php
/**
 * Class file for AmazonAlexaTypeTrafficHistoryType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeTrafficHistoryType
 * @date 10/07/2012
 */
class AmazonAlexaTypeTrafficHistoryType extends AmazonAlexaWsdlClass
{
	/**
	 * The Range
	 * @var integer
	 */
	public $Range;
	/**
	 * The Site
	 * @var string
	 */
	public $Site;
	/**
	 * The Start
	 * @var string
	 */
	public $Start;
	/**
	 * The HistoricalData
	 * @var AmazonAlexaTypeHistoricalData
	 */
	public $HistoricalData;
	/**
	 * Constructor
	 * @param integer Range
	 * @param string Site
	 * @param string Start
	 * @param AmazonAlexaTypeHistoricalData HistoricalData
	 * @return AmazonAlexaTypeTrafficHistoryType
	 */
	public function __construct($_Range = null,$_Site = null,$_Start = null,$_HistoricalData = null)
	{
		parent::__construct(array('Range'=>$_Range,'Site'=>$_Site,'Start'=>$_Start,'HistoricalData'=>$_HistoricalData));
	}
	/**
	 * Set Range
	 * @param integer Range
	 * @return integer
	 */
	public function setRange($_Range)
	{
		return ($this->Range = $_Range);
	}
	/**
	 * Get Range
	 * @return integer
	 */
	public function getRange()
	{
		return $this->Range;
	}
	/**
	 * Set Site
	 * @param string Site
	 * @return string
	 */
	public function setSite($_Site)
	{
		return ($this->Site = $_Site);
	}
	/**
	 * Get Site
	 * @return string
	 */
	public function getSite()
	{
		return $this->Site;
	}
	/**
	 * Set Start
	 * @param string Start
	 * @return string
	 */
	public function setStart($_Start)
	{
		return ($this->Start = $_Start);
	}
	/**
	 * Get Start
	 * @return string
	 */
	public function getStart()
	{
		return $this->Start;
	}
	/**
	 * Set HistoricalData
	 * @param HistoricalData HistoricalData
	 * @return HistoricalData
	 */
	public function setHistoricalData($_HistoricalData)
	{
		return ($this->HistoricalData = $_HistoricalData);
	}
	/**
	 * Get HistoricalData
	 * @return AmazonAlexaTypeHistoricalData
	 */
	public function getHistoricalData()
	{
		return $this->HistoricalData;
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