<?php
/**
 * Class file for AmazonQueueServiceTypeGetQueueAttributes
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeGetQueueAttributes
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeGetQueueAttributes extends AmazonQueueServiceWsdlClass
{
	/**
	 * The AttributeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $AttributeName;
	/**
	 * The Unused
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Unused;
	/**
	 * Constructor
	 * @param string AttributeName
	 * @param string Unused
	 * @return AmazonQueueServiceTypeGetQueueAttributes
	 */
	public function __construct($_AttributeName = null,$_Unused = null)
	{
		parent::__construct(array('AttributeName'=>$_AttributeName,'Unused'=>$_Unused));
	}
	/**
	 * Set AttributeName
	 * @param string AttributeName
	 * @return string
	 */
	public function setAttributeName($_AttributeName)
	{
		return ($this->AttributeName = $_AttributeName);
	}
	/**
	 * Get AttributeName
	 * @return string
	 */
	public function getAttributeName()
	{
		return $this->AttributeName;
	}
	/**
	 * Set Unused
	 * @param string Unused
	 * @return string
	 */
	public function setUnused($_Unused)
	{
		return ($this->Unused = $_Unused);
	}
	/**
	 * Get Unused
	 * @return string
	 */
	public function getUnused()
	{
		return $this->Unused;
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