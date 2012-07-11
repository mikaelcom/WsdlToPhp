<?php
/**
 * Class file for XWebNewsTypeUpdateArticleRequest
 * @date 09/07/2012
 */
/**
 * Class XWebNewsTypeUpdateArticleRequest
 * @date 09/07/2012
 */
class XWebNewsTypeUpdateArticleRequest extends XWebNewsWsdlClass
{
	/**
	 * The Article
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebNewsTypeArticle
	 */
	public $Article;
	/**
	 * Constructor
	 * @param XWebNewsTypeArticle Article
	 * @return XWebNewsTypeUpdateArticleRequest
	 */
	public function __construct($_Article)
	{
		parent::__construct(array('Article'=>$_Article));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>