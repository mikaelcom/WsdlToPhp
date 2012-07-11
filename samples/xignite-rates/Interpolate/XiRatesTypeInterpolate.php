<?php
/**
 * Class file for XiRatesTypeInterpolate
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeInterpolate
 * @date 08/07/2012
 */
class XiRatesTypeInterpolate extends XiRatesWsdlClass
{
	/**
	 * The Methodology
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeMethodologyTypes
	 */
	public $Methodology;
	/**
	 * The KnownXValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KnownXValues;
	/**
	 * The KnownYValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KnownYValues;
	/**
	 * The XValuesToPlot
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $XValuesToPlot;
	/**
	 * Constructor
	 * @param XiRatesTypeMethodologyTypes Methodology
	 * @param string KnownXValues
	 * @param string KnownYValues
	 * @param string XValuesToPlot
	 * @return XiRatesTypeInterpolate
	 */
	public function __construct($_Methodology,$_KnownXValues = null,$_KnownYValues = null,$_XValuesToPlot = null)
	{
		parent::__construct(array('Methodology'=>$_Methodology,'KnownXValues'=>$_KnownXValues,'KnownYValues'=>$_KnownYValues,'XValuesToPlot'=>$_XValuesToPlot));
	}
	/**
	 * Set Methodology
	 * @param MethodologyTypes Methodology
	 * @return MethodologyTypes
	 */
	public function setMethodology($_Methodology)
	{
		return ($this->Methodology = XiRatesTypeMethodologyTypes::valueIsValid($_Methodology)?$_Methodology:null);
	}
	/**
	 * Get Methodology
	 * @return XiRatesTypeMethodologyTypes
	 */
	public function getMethodology()
	{
		return $this->Methodology;
	}
	/**
	 * Set KnownXValues
	 * @param string KnownXValues
	 * @return string
	 */
	public function setKnownXValues($_KnownXValues)
	{
		return ($this->KnownXValues = $_KnownXValues);
	}
	/**
	 * Get KnownXValues
	 * @return string
	 */
	public function getKnownXValues()
	{
		return $this->KnownXValues;
	}
	/**
	 * Set KnownYValues
	 * @param string KnownYValues
	 * @return string
	 */
	public function setKnownYValues($_KnownYValues)
	{
		return ($this->KnownYValues = $_KnownYValues);
	}
	/**
	 * Get KnownYValues
	 * @return string
	 */
	public function getKnownYValues()
	{
		return $this->KnownYValues;
	}
	/**
	 * Set XValuesToPlot
	 * @param string XValuesToPlot
	 * @return string
	 */
	public function setXValuesToPlot($_XValuesToPlot)
	{
		return ($this->XValuesToPlot = $_XValuesToPlot);
	}
	/**
	 * Get XValuesToPlot
	 * @return string
	 */
	public function getXValuesToPlot()
	{
		return $this->XValuesToPlot;
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