<?php
/**
 * Class file for AmazonECommerceServiceTypeCorrectedQuery
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCorrectedQuery
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCorrectedQuery extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Keywords;
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Message;
	/**
	 * Constructor
	 * @param string Keywords
	 * @param string Message
	 * @return AmazonECommerceServiceTypeCorrectedQuery
	 */
	public function __construct($_Keywords = null,$_Message = null)
	{
		parent::__construct(array('Keywords'=>$_Keywords,'Message'=>$_Message));
	}
	/**
	 * Set Keywords
	 * @param string Keywords
	 * @return string
	 */
	public function setKeywords($_Keywords)
	{
		return ($this->Keywords = $_Keywords);
	}
	/**
	 * Get Keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->Keywords;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
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