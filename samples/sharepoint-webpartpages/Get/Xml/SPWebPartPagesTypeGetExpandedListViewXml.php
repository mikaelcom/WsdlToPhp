<?php
/**
 * Class file for SPWebPartPagesTypeGetExpandedListViewXml
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetExpandedListViewXml
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetExpandedListViewXml extends SPWebPartPagesWsdlClass
{
	/**
	 * The webId
	 * @var string
	 */
	public $webId;
	/**
	 * The listViewXml
	 * @var string
	 */
	public $listViewXml;
	/**
	 * The listGuid
	 * @var string
	 */
	public $listGuid;
	/**
	 * The listUrl
	 * @var string
	 */
	public $listUrl;
	/**
	 * The listDisplayName
	 * @var string
	 */
	public $listDisplayName;
	/**
	 * The hasConnection
	 * @var boolean
	 */
	public $hasConnection;
	/**
	 * The partialView
	 * @var boolean
	 */
	public $partialView;
	/**
	 * Constructor
	 * @param string webId
	 * @param string listViewXml
	 * @param string listGuid
	 * @param string listUrl
	 * @param string listDisplayName
	 * @param boolean hasConnection
	 * @param boolean partialView
	 * @return SPWebPartPagesTypeGetExpandedListViewXml
	 */
	public function __construct($_webId = null,$_listViewXml = null,$_listGuid = null,$_listUrl = null,$_listDisplayName = null,$_hasConnection = null,$_partialView = null)
	{
		parent::__construct(array('webId'=>$_webId,'listViewXml'=>$_listViewXml,'listGuid'=>$_listGuid,'listUrl'=>$_listUrl,'listDisplayName'=>$_listDisplayName,'hasConnection'=>$_hasConnection,'partialView'=>$_partialView));
	}
	/**
	 * Set webId
	 * @param string webId
	 * @return string
	 */
	public function setWebId($_webId)
	{
		return ($this->webId = $_webId);
	}
	/**
	 * Get webId
	 * @return string
	 */
	public function getWebId()
	{
		return $this->webId;
	}
	/**
	 * Set listViewXml
	 * @param string listViewXml
	 * @return string
	 */
	public function setListViewXml($_listViewXml)
	{
		return ($this->listViewXml = $_listViewXml);
	}
	/**
	 * Get listViewXml
	 * @return string
	 */
	public function getListViewXml()
	{
		return $this->listViewXml;
	}
	/**
	 * Set listGuid
	 * @param string listGuid
	 * @return string
	 */
	public function setListGuid($_listGuid)
	{
		return ($this->listGuid = $_listGuid);
	}
	/**
	 * Get listGuid
	 * @return string
	 */
	public function getListGuid()
	{
		return $this->listGuid;
	}
	/**
	 * Set listUrl
	 * @param string listUrl
	 * @return string
	 */
	public function setListUrl($_listUrl)
	{
		return ($this->listUrl = $_listUrl);
	}
	/**
	 * Get listUrl
	 * @return string
	 */
	public function getListUrl()
	{
		return $this->listUrl;
	}
	/**
	 * Set listDisplayName
	 * @param string listDisplayName
	 * @return string
	 */
	public function setListDisplayName($_listDisplayName)
	{
		return ($this->listDisplayName = $_listDisplayName);
	}
	/**
	 * Get listDisplayName
	 * @return string
	 */
	public function getListDisplayName()
	{
		return $this->listDisplayName;
	}
	/**
	 * Set hasConnection
	 * @param boolean hasConnection
	 * @return boolean
	 */
	public function setHasConnection($_hasConnection)
	{
		return ($this->hasConnection = $_hasConnection);
	}
	/**
	 * Get hasConnection
	 * @return boolean
	 */
	public function getHasConnection()
	{
		return $this->hasConnection;
	}
	/**
	 * Set partialView
	 * @param boolean partialView
	 * @return boolean
	 */
	public function setPartialView($_partialView)
	{
		return ($this->partialView = $_partialView);
	}
	/**
	 * Get partialView
	 * @return boolean
	 */
	public function getPartialView()
	{
		return $this->partialView;
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