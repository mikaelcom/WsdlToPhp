<?php
/**
 * Class file for XWebCheckOutTypeBasket
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeBasket
 * @date 09/07/2012
 */
class XWebCheckOutTypeBasket extends XWebCheckOutWsdlClass
{
	/**
	 * The Contents
	 * @var Contents
	 */
	public $Contents;
	/**
	 * The Date_Created
	 * @var anonymous6
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param Contents Contents
	 * @param anonymous6 Date_Created
	 * @return XWebCheckOutTypeBasket
	 */
	public function __construct($_Contents = null,$_Date_Created = null)
	{
		parent::__construct(array('Contents'=>$_Contents,'Date_Created'=>$_Date_Created));
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
	 * Set Date_Created
	 * @param anonymous6 Date_Created
	 * @return anonymous6
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous6
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