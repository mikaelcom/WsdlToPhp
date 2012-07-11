<?php
/**
 * Class file for XWebCheckOutTypeLoadReceiptsPagedRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadReceiptsPagedRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadReceiptsPagedRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Page_Number
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Number;
	/**
	 * The Page_Size
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Page_Size;
	/**
	 * Constructor
	 * @param positiveInteger Page_Number
	 * @param positiveInteger Page_Size
	 * @return XWebCheckOutTypeLoadReceiptsPagedRequest
	 */
	public function __construct($_Page_Number,$_Page_Size)
	{
		parent::__construct(array('Page_Number'=>$_Page_Number,'Page_Size'=>$_Page_Size));
	}
	/**
	 * Set Page_Number
	 * @param positiveInteger Page_Number
	 * @return positiveInteger
	 */
	public function setPage_Number($_Page_Number)
	{
		return ($this->Page_Number = $_Page_Number);
	}
	/**
	 * Get Page_Number
	 * @return positiveInteger
	 */
	public function getPage_Number()
	{
		return $this->Page_Number;
	}
	/**
	 * Set Page_Size
	 * @param positiveInteger Page_Size
	 * @return positiveInteger
	 */
	public function setPage_Size($_Page_Size)
	{
		return ($this->Page_Size = $_Page_Size);
	}
	/**
	 * Get Page_Size
	 * @return positiveInteger
	 */
	public function getPage_Size()
	{
		return $this->Page_Size;
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