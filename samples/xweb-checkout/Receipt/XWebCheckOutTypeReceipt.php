<?php
/**
 * Class file for XWebCheckOutTypeReceipt
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeReceipt
 * @date 09/07/2012
 */
class XWebCheckOutTypeReceipt extends XWebCheckOutWsdlClass
{
	/**
	 * The Contents
	 * @var Contents
	 */
	public $Contents;
	/**
	 * The Total
	 * @var Total
	 */
	public $Total;
	/**
	 * The Date_Created
	 * @var anonymous45
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Contents Contents
	 * @param Total Total
	 * @param anonymous45 Date_Created
	 * @return XWebCheckOutTypeReceipt
	 */
	public function __construct($_Contents = null,$_Total = null,$_Date_Created = null)
	{
		parent::__construct(array('Contents'=>$_Contents,'Total'=>$_Total,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set Contents
	 * @param Contents Contents
	 * @return Contents
	 */
	public function setContents($_Contents)
	{
		return ($this->Contents = $_Contents);
	}
	/**
	 * Get Contents
	 * @return Contents
	 */
	public function getContents()
	{
		return $this->Contents;
	}
	/**
	 * Set Total
	 * @param Total Total
	 * @return Total
	 */
	public function setTotal($_Total)
	{
		return ($this->Total = $_Total);
	}
	/**
	 * Get Total
	 * @return Total
	 */
	public function getTotal()
	{
		return $this->Total;
	}
	/**
	 * Set Date_Created
	 * @param anonymous45 Date_Created
	 * @return anonymous45
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous45
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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