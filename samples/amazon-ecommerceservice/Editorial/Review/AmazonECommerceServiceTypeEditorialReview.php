<?php
/**
 * Class file for AmazonECommerceServiceTypeEditorialReview
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeEditorialReview
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeEditorialReview extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Source;
	/**
	 * The Content
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Content;
	/**
	 * The IsLinkSuppressed
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsLinkSuppressed;
	/**
	 * Constructor
	 * @param string Source
	 * @param string Content
	 * @param boolean IsLinkSuppressed
	 * @return AmazonECommerceServiceTypeEditorialReview
	 */
	public function __construct($_Source = null,$_Content = null,$_IsLinkSuppressed = null)
	{
		parent::__construct(array('Source'=>$_Source,'Content'=>$_Content,'IsLinkSuppressed'=>$_IsLinkSuppressed));
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Content
	 * @param string Content
	 * @return string
	 */
	public function setContent($_Content)
	{
		return ($this->Content = $_Content);
	}
	/**
	 * Get Content
	 * @return string
	 */
	public function getContent()
	{
		return $this->Content;
	}
	/**
	 * Set IsLinkSuppressed
	 * @param boolean IsLinkSuppressed
	 * @return boolean
	 */
	public function setIsLinkSuppressed($_IsLinkSuppressed)
	{
		return ($this->IsLinkSuppressed = $_IsLinkSuppressed);
	}
	/**
	 * Get IsLinkSuppressed
	 * @return boolean
	 */
	public function getIsLinkSuppressed()
	{
		return $this->IsLinkSuppressed;
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