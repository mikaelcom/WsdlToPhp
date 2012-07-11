<?php
/**
 * Class file for XWebCheckOutTypeLoadReceiptsByShopperPagedRequest
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeLoadReceiptsByShopperPagedRequest
 * @date 09/07/2012
 */
class XWebCheckOutTypeLoadReceiptsByShopperPagedRequest extends XWebCheckOutWsdlClass
{
	/**
	 * The Shopper_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Shopper_ID;
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
	 * @param string Shopper_ID
	 * @param positiveInteger Page_Number
	 * @param positiveInteger Page_Size
	 * @return XWebCheckOutTypeLoadReceiptsByShopperPagedRequest
	 */
	public function __construct($_Shopper_ID,$_Page_Number,$_Page_Size)
	{
		parent::__construct(array('Shopper_ID'=>$_Shopper_ID,'Page_Number'=>$_Page_Number,'Page_Size'=>$_Page_Size));
	}
	/**
	 * Set Shopper_ID
	 * @param string Shopper_ID
	 * @return string
	 */
	public function setShopper_ID($_Shopper_ID)
	{
		return ($this->Shopper_ID = $_Shopper_ID);
	}
	/**
	 * Get Shopper_ID
	 * @return string
	 */
	public function getShopper_ID()
	{
		return $this->Shopper_ID;
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