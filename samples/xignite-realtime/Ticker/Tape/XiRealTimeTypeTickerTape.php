<?php
/**
 * Class file for XiRealTimeTypeTickerTape
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeTickerTape
 * @date 08/07/2012
 */
class XiRealTimeTypeTickerTape extends XiRealTimeTypeCommon
{
	/**
	 * The Tape
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tape;
	/**
	 * Constructor
	 * @param string Tape
	 * @return XiRealTimeTypeTickerTape
	 */
	public function __construct($_Tape = null)
	{
		XiRealTimeWsdlClass::__construct(array('Tape'=>$_Tape));
	}
	/**
	 * Set Tape
	 * @param string Tape
	 * @return string
	 */
	public function setTape($_Tape)
	{
		return ($this->Tape = $_Tape);
	}
	/**
	 * Get Tape
	 * @return string
	 */
	public function getTape()
	{
		return $this->Tape;
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