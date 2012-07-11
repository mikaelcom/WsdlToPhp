<?php
/**
 * Class file for XiNewsTypeMarketNewsItem
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeMarketNewsItem
 * @date 08/07/2012
 */
class XiNewsTypeMarketNewsItem extends XiNewsTypeCommon
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
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
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
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Content;
	/**
	 * Constructor
	 * @param string Headline
	 * @param string Date
	 * @param string Source
	 * @param string Url
	 * @param string Content
	 * @return XiNewsTypeMarketNewsItem
	 */
	public function __construct($_Headline = null,$_Date = null,$_Source = null,$_Url = null,$_Content = null)
	{
		XiNewsWsdlClass::__construct(array('Headline'=>$_Headline,'Date'=>$_Date,'Source'=>$_Source,'Url'=>$_Url,'Content'=>$_Content));
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
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
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