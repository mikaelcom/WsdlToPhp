<?php
/**
 * Class file for XWebNewsTypeLoadArticlesBySourceAndDateRangePagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadArticlesBySourceAndDateRangePagedResponse
 * @date 09/07/2012
 */
class XWebNewsTypeLoadArticlesBySourceAndDateRangePagedResponse extends XWebNewsWsdlClass
{
	/**
	 * The Article
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebNewsTypeArticle
	 */
	public $Article;
	/**
	 * The Total_Record_Count
	 * @var anonymous29
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebNewsTypeArticle Article
	 * @param anonymous29 Total_Record_Count
	 * @return XWebNewsTypeLoadArticlesBySourceAndDateRangePagedResponse
	 */
	public function __construct($_Article = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Article'=>$_Article,'Total_Record_Count'=>$_Total_Record_Count));
	}
	/**
	 * Set Article
	 * @param Article Article
	 * @return Article
	 */
	public function setArticle($_Article)
	{
		return ($this->Article = $_Article);
	}
	/**
	 * Get Article
	 * @return XWebNewsTypeArticle
	 */
	public function getArticle()
	{
		return $this->Article;
	}
	/**
	 * Set Total_Record_Count
	 * @param anonymous29 Total_Record_Count
	 * @return anonymous29
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous29
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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