<?php
/**
 * Class file for AmazonWebServicesTypeItemQuantity
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeItemQuantity
 * @date 10/07/2012
 */
class AmazonWebServicesTypeItemQuantity extends AmazonWebServicesWsdlClass
{
	/**
	 * The ItemId
	 * @var string
	 */
	public $ItemId;
	/**
	 * The Quantity
	 * @var string
	 */
	public $Quantity;
	/**
	 * Constructor
	 * @param string ItemId
	 * @param string Quantity
	 * @return AmazonWebServicesTypeItemQuantity
	 */
	public function __construct($_ItemId = null,$_Quantity = null)
	{
		parent::__construct(array('ItemId'=>$_ItemId,'Quantity'=>$_Quantity));
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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