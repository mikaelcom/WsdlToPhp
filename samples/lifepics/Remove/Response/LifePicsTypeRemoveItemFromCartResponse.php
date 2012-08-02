<?php
/**
 * Class file for LifePicsTypeRemoveItemFromCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeRemoveItemFromCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeRemoveItemFromCartResponse extends LifePicsWsdlClass
{
	/**
	 * The RemoveItemFromCartResult
	 * @var LifePicsTypeRemoveItemFromCartResult
	 */
	public $RemoveItemFromCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeRemoveItemFromCartResult RemoveItemFromCartResult
	 * @return LifePicsTypeRemoveItemFromCartResponse
	 */
	public function __construct($_RemoveItemFromCartResult = null)
	{
		parent::__construct(array('RemoveItemFromCartResult'=>$_RemoveItemFromCartResult));
	}
	/**
	 * Set RemoveItemFromCartResult
	 * @param RemoveItemFromCartResult RemoveItemFromCartResult
	 * @return RemoveItemFromCartResult
	 */
	public function setRemoveItemFromCartResult($_RemoveItemFromCartResult)
	{
		return ($this->RemoveItemFromCartResult = $_RemoveItemFromCartResult);
	}
	/**
	 * Get RemoveItemFromCartResult
	 * @return LifePicsTypeRemoveItemFromCartResult
	 */
	public function getRemoveItemFromCartResult()
	{
		return $this->RemoveItemFromCartResult;
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