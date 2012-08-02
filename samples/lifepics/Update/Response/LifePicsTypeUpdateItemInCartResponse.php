<?php
/**
 * Class file for LifePicsTypeUpdateItemInCartResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUpdateItemInCartResponse
 * @date 02/08/2012
 */
class LifePicsTypeUpdateItemInCartResponse extends LifePicsWsdlClass
{
	/**
	 * The UpdateItemInCartResult
	 * @var LifePicsTypeUpdateItemInCartResult
	 */
	public $UpdateItemInCartResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUpdateItemInCartResult UpdateItemInCartResult
	 * @return LifePicsTypeUpdateItemInCartResponse
	 */
	public function __construct($_UpdateItemInCartResult = null)
	{
		parent::__construct(array('UpdateItemInCartResult'=>$_UpdateItemInCartResult));
	}
	/**
	 * Set UpdateItemInCartResult
	 * @param UpdateItemInCartResult UpdateItemInCartResult
	 * @return UpdateItemInCartResult
	 */
	public function setUpdateItemInCartResult($_UpdateItemInCartResult)
	{
		return ($this->UpdateItemInCartResult = $_UpdateItemInCartResult);
	}
	/**
	 * Get UpdateItemInCartResult
	 * @return LifePicsTypeUpdateItemInCartResult
	 */
	public function getUpdateItemInCartResult()
	{
		return $this->UpdateItemInCartResult;
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