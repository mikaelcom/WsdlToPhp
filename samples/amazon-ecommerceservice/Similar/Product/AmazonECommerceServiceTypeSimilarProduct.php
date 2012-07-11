<?php
/**
 * Class file for AmazonECommerceServiceTypeSimilarProduct
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeSimilarProduct
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeSimilarProduct extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ASIN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ASIN;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Title;
	/**
	 * Constructor
	 * @param string ASIN
	 * @param string Title
	 * @return AmazonECommerceServiceTypeSimilarProduct
	 */
	public function __construct($_ASIN = null,$_Title = null)
	{
		parent::__construct(array('ASIN'=>$_ASIN,'Title'=>$_Title));
	}
	/**
	 * Set ASIN
	 * @param string ASIN
	 * @return string
	 */
	public function setASIN($_ASIN)
	{
		return ($this->ASIN = $_ASIN);
	}
	/**
	 * Get ASIN
	 * @return string
	 */
	public function getASIN()
	{
		return $this->ASIN;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>