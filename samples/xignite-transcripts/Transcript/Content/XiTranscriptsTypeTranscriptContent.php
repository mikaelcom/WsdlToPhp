<?php
/**
 * Class file for XiTranscriptsTypeTranscriptContent
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeTranscriptContent
 * @date 08/07/2012
 */
class XiTranscriptsTypeTranscriptContent extends XiTranscriptsTypeCommon
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
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Content;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeSecurity Security
	 * @param string Date
	 * @param string Title
	 * @param string URL
	 * @param string Content
	 * @return XiTranscriptsTypeTranscriptContent
	 */
	public function __construct($_Security = null,$_Date = null,$_Title = null,$_URL = null,$_Content = null)
	{
		XiTranscriptsWsdlClass::__construct(array('Security'=>$_Security,'Date'=>$_Date,'Title'=>$_Title,'URL'=>$_URL,'Content'=>$_Content));
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