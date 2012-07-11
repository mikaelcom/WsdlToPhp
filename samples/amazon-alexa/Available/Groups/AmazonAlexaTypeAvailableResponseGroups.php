<?php
/**
 * Class file for AmazonAlexaTypeAvailableResponseGroups
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeAvailableResponseGroups
 * @date 10/07/2012
 */
class AmazonAlexaTypeAvailableResponseGroups extends AmazonAlexaWsdlClass
{
	/**
	 * The ResponseGroup
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * Constructor
	 * @param string ResponseGroup
	 * @return AmazonAlexaTypeAvailableResponseGroups
	 */
	public function __construct($_ResponseGroup = null)
	{
		parent::__construct(array('ResponseGroup'=>$_ResponseGroup));
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
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