<?php
/**
 * Class file for XiNewsTypeMarketNews
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeMarketNews
 * @date 08/07/2012
 */
class XiNewsTypeMarketNews extends XiNewsTypeCommon
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
	 * The OriginalUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalUrl;
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
	 * @param string OriginalUrl
	 * @param string Summary
	 * @return XiNewsTypeMarketNews
	 */
	public function __construct($_Headline = null,$_Time = null,$_Source = null,$_Url = null,$_OriginalUrl = null,$_Summary = null)
	{
		XiNewsWsdlClass::__construct(array('Headline'=>$_Headline,'Time'=>$_Time,'Source'=>$_Source,'Url'=>$_Url,'OriginalUrl'=>$_OriginalUrl,'Summary'=>$_Summary));
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
	 * Set OriginalUrl
	 * @param string OriginalUrl
	 * @return string
	 */
	public function setOriginalUrl($_OriginalUrl)
	{
		return ($this->OriginalUrl = $_OriginalUrl);
	}
	/**
	 * Get OriginalUrl
	 * @return string
	 */
	public function getOriginalUrl()
	{
		return $this->OriginalUrl;
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