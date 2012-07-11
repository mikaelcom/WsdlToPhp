<?php
/**
 * Class file for XiStatisticsTypeChart
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeChart
 * @date 08/07/2012
 */
class XiStatisticsTypeChart extends XiStatisticsTypeCommon
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The Help
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Help;
	/**
	 * Constructor
	 * @param string Url
	 * @param string Help
	 * @return XiStatisticsTypeChart
	 */
	public function __construct($_Url = null,$_Help = null)
	{
		XiStatisticsWsdlClass::__construct(array('Url'=>$_Url,'Help'=>$_Help));
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set Help
	 * @param string Help
	 * @return string
	 */
	public function setHelp($_Help)
	{
		return ($this->Help = $_Help);
	}
	/**
	 * Get Help
	 * @return string
	 */
	public function getHelp()
	{
		return $this->Help;
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