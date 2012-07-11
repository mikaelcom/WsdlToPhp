<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeForwardRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeForwardRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeForwardRate extends XiCurrenciesWsdlClass
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $To;
	/**
	 * Constructor
	 * @param string From
	 * @param string To
	 * @return XiCurrenciesTypeGetRealTimeForwardRate
	 */
	public function __construct($_From = null,$_To = null)
	{
		parent::__construct(array('From'=>$_From,'To'=>$_To));
	}
	/**
	 * Set From
	 * @param string From
	 * @return string
	 */
	public function setFrom($_From)
	{
		return ($this->From = $_From);
	}
	/**
	 * Get From
	 * @return string
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param string To
	 * @return string
	 */
	public function setTo($_To)
	{
		return ($this->To = $_To);
	}
	/**
	 * Get To
	 * @return string
	 */
	public function getTo()
	{
		return $this->To;
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