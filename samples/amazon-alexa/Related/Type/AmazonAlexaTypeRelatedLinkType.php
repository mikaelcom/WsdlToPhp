<?php
/**
 * Class file for AmazonAlexaTypeRelatedLinkType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeRelatedLinkType
 * @date 10/07/2012
 */
class AmazonAlexaTypeRelatedLinkType extends AmazonAlexaWsdlClass
{
	/**
	 * The Relevance
	 * @var UnsignedIntegerType
	 */
	public $Relevance;
	/**
	 * The Title
	 * @var normalizedString
	 */
	public $Title;
	/**
	 * Constructor
	 * @param UnsignedIntegerType Relevance
	 * @param normalizedString Title
	 * @return AmazonAlexaTypeRelatedLinkType
	 */
	public function __construct($_Relevance = null,$_Title = null)
	{
		parent::__construct(array('Relevance'=>$_Relevance,'Title'=>$_Title));
	}
	/**
	 * Set Relevance
	 * @param UnsignedIntegerType Relevance
	 * @return UnsignedIntegerType
	 */
	public function setRelevance($_Relevance)
	{
		return ($this->Relevance = $_Relevance);
	}
	/**
	 * Get Relevance
	 * @return UnsignedIntegerType
	 */
	public function getRelevance()
	{
		return $this->Relevance;
	}
	/**
	 * Set Title
	 * @param normalizedString Title
	 * @return normalizedString
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return normalizedString
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