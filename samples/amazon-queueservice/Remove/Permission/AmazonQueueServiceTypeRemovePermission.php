<?php
/**
 * Class file for AmazonQueueServiceTypeRemovePermission
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeRemovePermission
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeRemovePermission extends AmazonQueueServiceWsdlClass
{
	/**
	 * The Label
	 * @var string
	 */
	public $Label;
	/**
	 * Constructor
	 * @param string Label
	 * @return AmazonQueueServiceTypeRemovePermission
	 */
	public function __construct($_Label = null)
	{
		parent::__construct(array('Label'=>$_Label));
	}
	/**
	 * Set Label
	 * @param string Label
	 * @return string
	 */
	public function setLabel($_Label)
	{
		return ($this->Label = $_Label);
	}
	/**
	 * Get Label
	 * @return string
	 */
	public function getLabel()
	{
		return $this->Label;
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