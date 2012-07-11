<?php
/**
 * Class file for AmazonEc2TypeInternetGatewayAttachmentSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInternetGatewayAttachmentSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeInternetGatewayAttachmentSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeInternetGatewayAttachmentType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeInternetGatewayAttachmentType item
	 * @return AmazonEc2TypeInternetGatewayAttachmentSetType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param InternetGatewayAttachmentType item
	 * @return InternetGatewayAttachmentType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeInternetGatewayAttachmentType
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