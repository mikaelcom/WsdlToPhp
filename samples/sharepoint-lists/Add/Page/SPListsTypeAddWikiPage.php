<?php
/**
 * Class file for SPListsTypeAddWikiPage
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddWikiPage
 * @date 07/07/2012
 */
class SPListsTypeAddWikiPage extends SPListsWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The listRelPageUrl
	 * @var string
	 */
	public $listRelPageUrl;
	/**
	 * The wikiContent
	 * @var string
	 */
	public $wikiContent;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string listRelPageUrl
	 * @param string wikiContent
	 * @return SPListsTypeAddWikiPage
	 */
	public function __construct($_strListName = null,$_listRelPageUrl = null,$_wikiContent = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'listRelPageUrl'=>$_listRelPageUrl,'wikiContent'=>$_wikiContent));
	}
	/**
	 * Set strListName
	 * @param string strListName
	 * @return string
	 */
	public function setStrListName($_strListName)
	{
		return ($this->strListName = $_strListName);
	}
	/**
	 * Get strListName
	 * @return string
	 */
	public function getStrListName()
	{
		return $this->strListName;
	}
	/**
	 * Set listRelPageUrl
	 * @param string listRelPageUrl
	 * @return string
	 */
	public function setListRelPageUrl($_listRelPageUrl)
	{
		return ($this->listRelPageUrl = $_listRelPageUrl);
	}
	/**
	 * Get listRelPageUrl
	 * @return string
	 */
	public function getListRelPageUrl()
	{
		return $this->listRelPageUrl;
	}
	/**
	 * Set wikiContent
	 * @param string wikiContent
	 * @return string
	 */
	public function setWikiContent($_wikiContent)
	{
		return ($this->wikiContent = $_wikiContent);
	}
	/**
	 * Get wikiContent
	 * @return string
	 */
	public function getWikiContent()
	{
		return $this->wikiContent;
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