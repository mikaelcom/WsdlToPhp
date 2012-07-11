<?php
/**
 * Class file for XiTranscriptsTypeTranscript
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeTranscript
 * @date 08/07/2012
 */
class XiTranscriptsTypeTranscript extends XiTranscriptsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeSecurity
	 */
	public $Security;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $URL;
	/**
	 * The Hyperlink
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Hyperlink;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeSecurity Security
	 * @param string Date
	 * @param string Title
	 * @param string URL
	 * @param string Hyperlink
	 * @return XiTranscriptsTypeTranscript
	 */
	public function __construct($_Security = null,$_Date = null,$_Title = null,$_URL = null,$_Hyperlink = null)
	{
		XiTranscriptsWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Title'=>$_Title,'URL'=>$_URL,'Hyperlink'=>$_Hyperlink));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiTranscriptsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set Hyperlink
	 * @param string Hyperlink
	 * @return string
	 */
	public function setHyperlink($_Hyperlink)
	{
		return ($this->Hyperlink = $_Hyperlink);
	}
	/**
	 * Get Hyperlink
	 * @return string
	 */
	public function getHyperlink()
	{
		return $this->Hyperlink;
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