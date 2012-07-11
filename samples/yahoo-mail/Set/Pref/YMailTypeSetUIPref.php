<?php
/**
 * Class file for YMailTypeSetUIPref
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetUIPref
 * @date 02/07/2012
 */
class YMailTypeSetUIPref extends YMailWsdlClass
{
	/**
	 * The composeFontFamily
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $composeFontFamily;
	/**
	 * The composeFontSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $composeFontSize;
	/**
	 * The defaultSortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSortOrder
	 */
	public $defaultSortOrder;
	/**
	 * The useRichText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeUseRichText
	 */
	public $useRichText;
	/**
	 * The imageBlocking
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $imageBlocking;
	/**
	 * The msgPaneVisible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $msgPaneVisible;
	/**
	 * The showTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $showTo;
	/**
	 * The newsCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $newsCategory;
	/**
	 * The showCalendarStrip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $showCalendarStrip;
	/**
	 * The goOnMessageDelete
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $goOnMessageDelete;
	/**
	 * The messagesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $messagesPerPage;
	/**
	 * The showSnippets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $showSnippets;
	/**
	 * The showNoise
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $showNoise;
	/**
	 * The searchPromo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $searchPromo;
	/**
	 * The pimBeta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $pimBeta;
	/**
	 * The pimColor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $pimColor;
	/**
	 * Constructor
	 * @param string composeFontFamily
	 * @param int composeFontSize
	 * @param YMailTypeSortOrder defaultSortOrder
	 * @param YMailTypeUseRichText useRichText
	 * @param string imageBlocking
	 * @param boolean msgPaneVisible
	 * @param boolean showTo
	 * @param string newsCategory
	 * @param boolean showCalendarStrip
	 * @param string goOnMessageDelete
	 * @param int messagesPerPage
	 * @param boolean showSnippets
	 * @param boolean showNoise
	 * @param boolean searchPromo
	 * @param string pimBeta
	 * @param string pimColor
	 * @return YMailTypeSetUIPref
	 */
	public function __construct($_composeFontFamily = null,$_composeFontSize = null,$_defaultSortOrder = null,$_useRichText = null,$_imageBlocking = null,$_msgPaneVisible = null,$_showTo = null,$_newsCategory = null,$_showCalendarStrip = null,$_goOnMessageDelete = null,$_messagesPerPage = null,$_showSnippets = null,$_showNoise = null,$_searchPromo = null,$_pimBeta = null,$_pimColor = null)
	{
		parent::__construct(array('composeFontFamily'=>$_composeFontFamily,'composeFontSize'=>$_composeFontSize,'defaultSortOrder'=>$_defaultSortOrder,'useRichText'=>$_useRichText,'imageBlocking'=>$_imageBlocking,'msgPaneVisible'=>$_msgPaneVisible,'showTo'=>$_showTo,'newsCategory'=>$_newsCategory,'showCalendarStrip'=>$_showCalendarStrip,'goOnMessageDelete'=>$_goOnMessageDelete,'messagesPerPage'=>$_messagesPerPage,'showSnippets'=>$_showSnippets,'showNoise'=>$_showNoise,'searchPromo'=>$_searchPromo,'pimBeta'=>$_pimBeta,'pimColor'=>$_pimColor));
	}
	/**
	 * Set composeFontFamily
	 * @param string composeFontFamily
	 * @return string
	 */
	public function setComposeFontFamily($_composeFontFamily)
	{
		return ($this->composeFontFamily = $_composeFontFamily);
	}
	/**
	 * Get composeFontFamily
	 * @return string
	 */
	public function getComposeFontFamily()
	{
		return $this->composeFontFamily;
	}
	/**
	 * Set composeFontSize
	 * @param int composeFontSize
	 * @return int
	 */
	public function setComposeFontSize($_composeFontSize)
	{
		return ($this->composeFontSize = $_composeFontSize);
	}
	/**
	 * Get composeFontSize
	 * @return int
	 */
	public function getComposeFontSize()
	{
		return $this->composeFontSize;
	}
	/**
	 * Set defaultSortOrder
	 * @param SortOrder defaultSortOrder
	 * @return SortOrder
	 */
	public function setDefaultSortOrder($_defaultSortOrder)
	{
		return ($this->defaultSortOrder = YMailTypeSortOrder::valueIsValid($_defaultSortOrder)?$_defaultSortOrder:null);
	}
	/**
	 * Get defaultSortOrder
	 * @return YMailTypeSortOrder
	 */
	public function getDefaultSortOrder()
	{
		return $this->defaultSortOrder;
	}
	/**
	 * Set useRichText
	 * @param UseRichText useRichText
	 * @return UseRichText
	 */
	public function setUseRichText($_useRichText)
	{
		return ($this->useRichText = YMailTypeUseRichText::valueIsValid($_useRichText)?$_useRichText:null);
	}
	/**
	 * Get useRichText
	 * @return YMailTypeUseRichText
	 */
	public function getUseRichText()
	{
		return $this->useRichText;
	}
	/**
	 * Set imageBlocking
	 * @param string imageBlocking
	 * @return string
	 */
	public function setImageBlocking($_imageBlocking)
	{
		return ($this->imageBlocking = $_imageBlocking);
	}
	/**
	 * Get imageBlocking
	 * @return string
	 */
	public function getImageBlocking()
	{
		return $this->imageBlocking;
	}
	/**
	 * Set msgPaneVisible
	 * @param boolean msgPaneVisible
	 * @return boolean
	 */
	public function setMsgPaneVisible($_msgPaneVisible)
	{
		return ($this->msgPaneVisible = $_msgPaneVisible);
	}
	/**
	 * Get msgPaneVisible
	 * @return boolean
	 */
	public function getMsgPaneVisible()
	{
		return $this->msgPaneVisible;
	}
	/**
	 * Set showTo
	 * @param boolean showTo
	 * @return boolean
	 */
	public function setShowTo($_showTo)
	{
		return ($this->showTo = $_showTo);
	}
	/**
	 * Get showTo
	 * @return boolean
	 */
	public function getShowTo()
	{
		return $this->showTo;
	}
	/**
	 * Set newsCategory
	 * @param string newsCategory
	 * @return string
	 */
	public function setNewsCategory($_newsCategory)
	{
		return ($this->newsCategory = $_newsCategory);
	}
	/**
	 * Get newsCategory
	 * @return string
	 */
	public function getNewsCategory()
	{
		return $this->newsCategory;
	}
	/**
	 * Set showCalendarStrip
	 * @param boolean showCalendarStrip
	 * @return boolean
	 */
	public function setShowCalendarStrip($_showCalendarStrip)
	{
		return ($this->showCalendarStrip = $_showCalendarStrip);
	}
	/**
	 * Get showCalendarStrip
	 * @return boolean
	 */
	public function getShowCalendarStrip()
	{
		return $this->showCalendarStrip;
	}
	/**
	 * Set goOnMessageDelete
	 * @param string goOnMessageDelete
	 * @return string
	 */
	public function setGoOnMessageDelete($_goOnMessageDelete)
	{
		return ($this->goOnMessageDelete = $_goOnMessageDelete);
	}
	/**
	 * Get goOnMessageDelete
	 * @return string
	 */
	public function getGoOnMessageDelete()
	{
		return $this->goOnMessageDelete;
	}
	/**
	 * Set messagesPerPage
	 * @param int messagesPerPage
	 * @return int
	 */
	public function setMessagesPerPage($_messagesPerPage)
	{
		return ($this->messagesPerPage = $_messagesPerPage);
	}
	/**
	 * Get messagesPerPage
	 * @return int
	 */
	public function getMessagesPerPage()
	{
		return $this->messagesPerPage;
	}
	/**
	 * Set showSnippets
	 * @param boolean showSnippets
	 * @return boolean
	 */
	public function setShowSnippets($_showSnippets)
	{
		return ($this->showSnippets = $_showSnippets);
	}
	/**
	 * Get showSnippets
	 * @return boolean
	 */
	public function getShowSnippets()
	{
		return $this->showSnippets;
	}
	/**
	 * Set showNoise
	 * @param boolean showNoise
	 * @return boolean
	 */
	public function setShowNoise($_showNoise)
	{
		return ($this->showNoise = $_showNoise);
	}
	/**
	 * Get showNoise
	 * @return boolean
	 */
	public function getShowNoise()
	{
		return $this->showNoise;
	}
	/**
	 * Set searchPromo
	 * @param boolean searchPromo
	 * @return boolean
	 */
	public function setSearchPromo($_searchPromo)
	{
		return ($this->searchPromo = $_searchPromo);
	}
	/**
	 * Get searchPromo
	 * @return boolean
	 */
	public function getSearchPromo()
	{
		return $this->searchPromo;
	}
	/**
	 * Set pimBeta
	 * @param string pimBeta
	 * @return string
	 */
	public function setPimBeta($_pimBeta)
	{
		return ($this->pimBeta = $_pimBeta);
	}
	/**
	 * Get pimBeta
	 * @return string
	 */
	public function getPimBeta()
	{
		return $this->pimBeta;
	}
	/**
	 * Set pimColor
	 * @param string pimColor
	 * @return string
	 */
	public function setPimColor($_pimColor)
	{
		return ($this->pimColor = $_pimColor);
	}
	/**
	 * Get pimColor
	 * @return string
	 */
	public function getPimColor()
	{
		return $this->pimColor;
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