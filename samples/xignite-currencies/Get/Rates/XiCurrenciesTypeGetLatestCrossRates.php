<?php
/**
 * Class file for XiCurrenciesTypeGetLatestCrossRates
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetLatestCrossRates
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetLatestCrossRates extends XiCurrenciesWsdlClass
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
	 * The Tos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Tos;
	/**
	 * Constructor
	 * @param string From
	 * @param string Tos
	 * @return XiCurrenciesTypeGetLatestCrossRates
	 */
	public function __construct($_From = null,$_Tos = null)
	{
		parent::__construct(array('From'=>$_From,'Tos'=>$_Tos));
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
	 * Set Tos
	 * @param string Tos
	 * @return string
	 */
	public function setTos($_Tos)
	{
		return ($this->Tos = $_Tos);
	}
	/**
	 * Get Tos
	 * @return string
	 */
	public function getTos()
	{
		return $this->Tos;
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