<?php
/**
 * Class file for XiMetalsTypeFutureQuotes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeFutureQuotes
 * @date 08/07/2012
 */
class XiMetalsTypeFutureQuotes extends XiMetalsTypeCommon
{
	/**
	 * The Future
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFuture
	 */
	public $Future;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The Quotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfFutureQuote
	 */
	public $Quotes;
	/**
	 * Constructor
	 * @param XiMetalsTypeFuture Future
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiMetalsTypeArrayOfFutureQuote Quotes
	 * @return XiMetalsTypeFutureQuotes
	 */
	public function __construct($_Future = null,$_StartDate = null,$_EndDate = null,$_Quotes = null)
	{
		XiMetalsWsdlClass::__construct(array('Future'=>$_Future,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Quotes'=>new XiMetalsTypeArrayOfFutureQuote($_Quotes)));
	}
	/**
	 * Set Future
	 * @param Future Future
	 * @return Future
	 */
	public function setFuture($_Future)
	{
		return ($this->Future = $_Future);
	}
	/**
	 * Get Future
	 * @return XiMetalsTypeFuture
	 */
	public function getFuture()
	{
		return $this->Future;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Quotes
	 * @param ArrayOfFutureQuote Quotes
	 * @return ArrayOfFutureQuote
	 */
	public function setQuotes($_Quotes)
	{
		return ($this->Quotes = $_Quotes);
	}
	/**
	 * Get Quotes
	 * @return XiMetalsTypeArrayOfFutureQuote
	 */
	public function getQuotes()
	{
		return $this->Quotes;
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