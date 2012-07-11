<?php
/**
 * Class file for XiMetalsTypeMarketNews
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeMarketNews
 * @date 08/07/2012
 */
class XiMetalsTypeMarketNews extends XiMetalsTypeCommon
{
	/**
	 * The Headline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Headline;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param string Headline
	 * @param string Time
	 * @param string Source
	 * @param string Url
	 * @param string Summary
	 * @return XiMetalsTypeMarketNews
	 */
	public function __construct($_Headline = null,$_Time = null,$_Source = null,$_Url = null,$_Summary = null)
	{
		XiMetalsWsdlClass::__construct(array('Headline'=>$_Headline,'Time'=>$_Time,'Source'=>$_Source,'Url'=>$_Url,'Summary'=>$_Summary));
	}
	/**
	 * Set Headline
	 * @param string Headline
	 * @return string
	 */
	public function setHeadline($_Headline)
	{
		return ($this->Headline = $_Headline);
	}
	/**
	 * Get Headline
	 * @return string
	 */
	public function getHeadline()
	{
		return $this->Headline;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
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
	 * Set Summary
	 * @param string Summary
	 * @return string
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return string
	 */
	public function getSummary()
	{
		return $this->Summary;
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