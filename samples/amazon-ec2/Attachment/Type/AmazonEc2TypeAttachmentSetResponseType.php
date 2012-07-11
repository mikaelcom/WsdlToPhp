<?php
/**
 * Class file for AmazonEc2TypeAttachmentSetResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAttachmentSetResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeAttachmentSetResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeAttachmentSetItemResponseType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeAttachmentSetItemResponseType item
	 * @return AmazonEc2TypeAttachmentSetResponseType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param AttachmentSetItemResponseType item
	 * @return AttachmentSetItemResponseType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeAttachmentSetItemResponseType
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