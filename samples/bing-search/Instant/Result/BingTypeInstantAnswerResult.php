<?php
/**
 * Class file for BingTypeInstantAnswerResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeInstantAnswerResult
 * @date 02/07/2012
 */
class BingTypeInstantAnswerResult extends BingWsdlClass
{
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContentType;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The ClickThroughUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ClickThroughUrl;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Attribution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Attribution;
	/**
	 * The InstantAnswerSpecificData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstantAnswerSpecificData;
	/**
	 * Constructor
	 * @param string ContentType
	 * @param string Title
	 * @param string ClickThroughUrl
	 * @param string Url
	 * @param string Attribution
	 * @param string InstantAnswerSpecificData
	 * @return BingTypeInstantAnswerResult
	 */
	public function __construct($_ContentType = null,$_Title = null,$_ClickThroughUrl = null,$_Url = null,$_Attribution = null,$_InstantAnswerSpecificData = null)
	{
		parent::__construct(array('ContentType'=>$_ContentType,'Title'=>$_Title,'ClickThroughUrl'=>$_ClickThroughUrl,'Url'=>$_Url,'Attribution'=>$_Attribution,'InstantAnswerSpecificData'=>$_InstantAnswerSpecificData));
	}
	/**
	 * Set ContentType
	 * @param string ContentType
	 * @return string
	 */
	public function setContentType($_ContentType)
	{
		return ($this->ContentType = $_ContentType);
	}
	/**
	 * Get ContentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->ContentType;
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
	 * Set ClickThroughUrl
	 * @param string ClickThroughUrl
	 * @return string
	 */
	public function setClickThroughUrl($_ClickThroughUrl)
	{
		return ($this->ClickThroughUrl = $_ClickThroughUrl);
	}
	/**
	 * Get ClickThroughUrl
	 * @return string
	 */
	public function getClickThroughUrl()
	{
		return $this->ClickThroughUrl;
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
	 * Set Attribution
	 * @param string Attribution
	 * @return string
	 */
	public function setAttribution($_Attribution)
	{
		return ($this->Attribution = $_Attribution);
	}
	/**
	 * Get Attribution
	 * @return string
	 */
	public function getAttribution()
	{
		return $this->Attribution;
	}
	/**
	 * Set InstantAnswerSpecificData
	 * @param string InstantAnswerSpecificData
	 * @return string
	 */
	public function setInstantAnswerSpecificData($_InstantAnswerSpecificData)
	{
		return ($this->InstantAnswerSpecificData = $_InstantAnswerSpecificData);
	}
	/**
	 * Get InstantAnswerSpecificData
	 * @return string
	 */
	public function getInstantAnswerSpecificData()
	{
		return $this->InstantAnswerSpecificData;
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