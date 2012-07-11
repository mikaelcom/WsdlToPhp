<?php
/**
 * Class file for BingTypeVideoResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeVideoResult
 * @date 02/07/2012
 */
class BingTypeVideoResult extends BingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The PlayUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlayUrl;
	/**
	 * The SourceTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceTitle;
	/**
	 * The RunTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $RunTime;
	/**
	 * The ClickThroughPageUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ClickThroughPageUrl;
	/**
	 * The StaticThumbnail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeThumbnail
	 */
	public $StaticThumbnail;
	/**
	 * Constructor
	 * @param string Title
	 * @param string PlayUrl
	 * @param string SourceTitle
	 * @param unsignedInt RunTime
	 * @param string ClickThroughPageUrl
	 * @param BingTypeThumbnail StaticThumbnail
	 * @return BingTypeVideoResult
	 */
	public function __construct($_Title = null,$_PlayUrl = null,$_SourceTitle = null,$_RunTime = null,$_ClickThroughPageUrl = null,$_StaticThumbnail = null)
	{
		parent::__construct(array('Title'=>$_Title,'PlayUrl'=>$_PlayUrl,'SourceTitle'=>$_SourceTitle,'RunTime'=>$_RunTime,'ClickThroughPageUrl'=>$_ClickThroughPageUrl,'StaticThumbnail'=>$_StaticThumbnail));
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
	 * Set PlayUrl
	 * @param string PlayUrl
	 * @return string
	 */
	public function setPlayUrl($_PlayUrl)
	{
		return ($this->PlayUrl = $_PlayUrl);
	}
	/**
	 * Get PlayUrl
	 * @return string
	 */
	public function getPlayUrl()
	{
		return $this->PlayUrl;
	}
	/**
	 * Set SourceTitle
	 * @param string SourceTitle
	 * @return string
	 */
	public function setSourceTitle($_SourceTitle)
	{
		return ($this->SourceTitle = $_SourceTitle);
	}
	/**
	 * Get SourceTitle
	 * @return string
	 */
	public function getSourceTitle()
	{
		return $this->SourceTitle;
	}
	/**
	 * Set RunTime
	 * @param unsignedInt RunTime
	 * @return unsignedInt
	 */
	public function setRunTime($_RunTime)
	{
		return ($this->RunTime = $_RunTime);
	}
	/**
	 * Get RunTime
	 * @return unsignedInt
	 */
	public function getRunTime()
	{
		return $this->RunTime;
	}
	/**
	 * Set ClickThroughPageUrl
	 * @param string ClickThroughPageUrl
	 * @return string
	 */
	public function setClickThroughPageUrl($_ClickThroughPageUrl)
	{
		return ($this->ClickThroughPageUrl = $_ClickThroughPageUrl);
	}
	/**
	 * Get ClickThroughPageUrl
	 * @return string
	 */
	public function getClickThroughPageUrl()
	{
		return $this->ClickThroughPageUrl;
	}
	/**
	 * Set StaticThumbnail
	 * @param Thumbnail StaticThumbnail
	 * @return Thumbnail
	 */
	public function setStaticThumbnail($_StaticThumbnail)
	{
		return ($this->StaticThumbnail = $_StaticThumbnail);
	}
	/**
	 * Get StaticThumbnail
	 * @return BingTypeThumbnail
	 */
	public function getStaticThumbnail()
	{
		return $this->StaticThumbnail;
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