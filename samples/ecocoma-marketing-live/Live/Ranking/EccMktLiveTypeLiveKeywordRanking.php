<?php
/**
 * Class file for EccMktLiveTypeLiveKeywordRanking
 * @date 03/07/2012
 */
/**
 * Class EccMktLiveTypeLiveKeywordRanking
 * @date 03/07/2012
 */
class EccMktLiveTypeLiveKeywordRanking extends EccMktLiveWsdlClass
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Keyword
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Keyword;
	/**
	 * The Page
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Page;
	/**
	 * Constructor
	 * @param string Url
	 * @param string Keyword
	 * @param string Page
	 * @return EccMktLiveTypeLiveKeywordRanking
	 */
	public function __construct($_Url = null,$_Keyword = null,$_Page = null)
	{
		parent::__construct(array('Url'=>$_Url,'Keyword'=>$_Keyword,'Page'=>$_Page));
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
	 * Set Keyword
	 * @param string Keyword
	 * @return string
	 */
	public function setKeyword($_Keyword)
	{
		return ($this->Keyword = $_Keyword);
	}
	/**
	 * Get Keyword
	 * @return string
	 */
	public function getKeyword()
	{
		return $this->Keyword;
	}
	/**
	 * Set Page
	 * @param string Page
	 * @return string
	 */
	public function setPage($_Page)
	{
		return ($this->Page = $_Page);
	}
	/**
	 * Get Page
	 * @return string
	 */
	public function getPage()
	{
		return $this->Page;
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