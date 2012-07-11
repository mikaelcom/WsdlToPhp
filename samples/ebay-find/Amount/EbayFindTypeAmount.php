<?php
/**
 * Class file for EbayFindTypeAmount
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeAmount
 * Documentation : Currency in which the monetary amount is specified.
 * @date 04/07/2012
 */
class EbayFindTypeAmount extends EbayFindWsdlClass
{
	/**
	 * The _
	 * @var double
	 */
	public $_;
	/**
	 * The currencyId
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $currencyId;
	/**
	 * Constructor
	 * @param double _
	 * @param string currencyId
	 * @return EbayFindTypeAmount
	 */
	public function __construct($__ = null,$_currencyId = null)
	{
		parent::__construct(array('_'=>$__,'currencyId'=>$_currencyId));
	}
	/**
	 * Set _
	 * @param double _
	 * @return double
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return double
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set currencyId
	 * @param string currencyId
	 * @return string
	 */
	public function setCurrencyId($_currencyId)
	{
		return ($this->currencyId = $_currencyId);
	}
	/**
	 * Get currencyId
	 * @return string
	 */
	public function getCurrencyId()
	{
		return $this->currencyId;
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