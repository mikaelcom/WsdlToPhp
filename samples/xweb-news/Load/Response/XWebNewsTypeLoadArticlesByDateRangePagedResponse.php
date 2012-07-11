<?php
/**
 * Class file for XWebNewsTypeLoadArticlesByDateRangePagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeLoadArticlesByDateRangePagedResponse
 * @date 09/07/2012
 */
class XWebNewsTypeLoadArticlesByDateRangePagedResponse extends XWebNewsWsdlClass
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
	 * @var anonymous26
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebNewsTypeArticle Article
	 * @param anonymous26 Total_Record_Count
	 * @return XWebNewsTypeLoadArticlesByDateRangePagedResponse
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
	 * @param anonymous26 Total_Record_Count
	 * @return anonymous26
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous26
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