<?php
/**
 * Class file for XiEdgarTypeListSICCodesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeListSICCodesResponse
 * @date 08/07/2012
 */
class XiEdgarTypeListSICCodesResponse extends XiEdgarWsdlClass
{
	/**
	 * The ListSICCodesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeArrayOfSICCode
	 */
	public $ListSICCodesResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeArrayOfSICCode ListSICCodesResult
	 * @return XiEdgarTypeListSICCodesResponse
	 */
	public function __construct($_ListSICCodesResult = null)
	{
		parent::__construct(array('ListSICCodesResult'=>new XiEdgarTypeArrayOfSICCode($_ListSICCodesResult)));
	}
	/**
	 * Set ListSICCodesResult
	 * @param ArrayOfSICCode ListSICCodesResult
	 * @return ArrayOfSICCode
	 */
	public function setListSICCodesResult($_ListSICCodesResult)
	{
		return ($this->ListSICCodesResult = $_ListSICCodesResult);
	}
	/**
	 * Get ListSICCodesResult
	 * @return XiEdgarTypeArrayOfSICCode
	 */
	public function getListSICCodesResult()
	{
		return $this->ListSICCodesResult;
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