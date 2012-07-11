<?php
/**
 * Class file for YMailTypeAllOtherYahooMboxes
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAllOtherYahooMboxes
 * @date 02/07/2012
 */
class YMailTypeAllOtherYahooMboxes extends YMailWsdlClass
{
	/**
	 * The yMbox
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeYahooMbox
	 */
	public $yMbox;
	/**
	 * The otherYahooMboxesTotal
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $otherYahooMboxesTotal;
	/**
	 * Constructor
	 * @param YMailTypeYahooMbox yMbox
	 * @param int otherYahooMboxesTotal
	 * @return YMailTypeAllOtherYahooMboxes
	 */
	public function __construct($_yMbox = null,$_otherYahooMboxesTotal = null)
	{
		parent::__construct(array('yMbox'=>$_yMbox,'otherYahooMboxesTotal'=>$_otherYahooMboxesTotal));
	}
	/**
	 * Set yMbox
	 * @param YahooMbox yMbox
	 * @return YahooMbox
	 */
	public function setYMbox($_yMbox)
	{
		return ($this->yMbox = $_yMbox);
	}
	/**
	 * Get yMbox
	 * @return YMailTypeYahooMbox
	 */
	public function getYMbox()
	{
		return $this->yMbox;
	}
	/**
	 * Set otherYahooMboxesTotal
	 * @param int otherYahooMboxesTotal
	 * @return int
	 */
	public function setOtherYahooMboxesTotal($_otherYahooMboxesTotal)
	{
		return ($this->otherYahooMboxesTotal = $_otherYahooMboxesTotal);
	}
	/**
	 * Get otherYahooMboxesTotal
	 * @return int
	 */
	public function getOtherYahooMboxesTotal()
	{
		return $this->otherYahooMboxesTotal;
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