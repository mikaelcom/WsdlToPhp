<?php
/**
 * Class file for AmazonECommerceServiceTypeAlternateVersion
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeAlternateVersion
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeAlternateVersion extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The ASIN
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
	 * The Binding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Binding;
	/**
	 * Constructor
	 * @param string ASIN
	 * @param string Title
	 * @param string Binding
	 * @return AmazonECommerceServiceTypeAlternateVersion
	 */
	public function __construct($_ASIN = null,$_Title = null,$_Binding = null)
	{
		parent::__construct(array('ASIN'=>$_ASIN,'Title'=>$_Title,'Binding'=>$_Binding));
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
	 * Set Binding
	 * @param string Binding
	 * @return string
	 */
	public function setBinding($_Binding)
	{
		return ($this->Binding = $_Binding);
	}
	/**
	 * Get Binding
	 * @return string
	 */
	public function getBinding()
	{
		return $this->Binding;
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