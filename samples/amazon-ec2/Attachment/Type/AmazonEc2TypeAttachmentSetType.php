<?php
/**
 * Class file for AmazonEc2TypeAttachmentSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachmentSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachmentSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAttachmentType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAttachmentType item
	 * @return AmazonEc2TypeAttachmentSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AttachmentType item
	 * @return AttachmentType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAttachmentType
	 */
	public function getItem()
	{
		return $this->item;
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