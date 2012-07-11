<?php
/**
 * Class file for OvhTypeTelephonyDirectoryPJHeadingStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryPJHeadingStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryPJHeadingStruct extends OvhWsdlClass
{
	/**
	 * The codePJ
	 * @var string
	 */
	public $codePJ;
	/**
	 * The labelPJ
	 * @var string
	 */
	public $labelPJ;
	/**
	 * The isAssociatedWithAPE
	 * @var string
	 */
	public $isAssociatedWithAPE;
	/**
	 * Constructor
	 * @param string codePJ
	 * @param string labelPJ
	 * @param string isAssociatedWithAPE
	 * @return OvhTypeTelephonyDirectoryPJHeadingStruct
	 */
	public function __construct($_codePJ = null,$_labelPJ = null,$_isAssociatedWithAPE = null)
	{
		parent::__construct(array('codePJ'=>$_codePJ,'labelPJ'=>$_labelPJ,'isAssociatedWithAPE'=>$_isAssociatedWithAPE));
	}
	/**
	 * Set codePJ
	 * @param string codePJ
	 * @return string
	 */
	public function setCodePJ($_codePJ)
	{
		return ($this->codePJ = $_codePJ);
	}
	/**
	 * Get codePJ
	 * @return string
	 */
	public function getCodePJ()
	{
		return $this->codePJ;
	}
	/**
	 * Set labelPJ
	 * @param string labelPJ
	 * @return string
	 */
	public function setLabelPJ($_labelPJ)
	{
		return ($this->labelPJ = $_labelPJ);
	}
	/**
	 * Get labelPJ
	 * @return string
	 */
	public function getLabelPJ()
	{
		return $this->labelPJ;
	}
	/**
	 * Set isAssociatedWithAPE
	 * @param string isAssociatedWithAPE
	 * @return string
	 */
	public function setIsAssociatedWithAPE($_isAssociatedWithAPE)
	{
		return ($this->isAssociatedWithAPE = $_isAssociatedWithAPE);
	}
	/**
	 * Get isAssociatedWithAPE
	 * @return string
	 */
	public function getIsAssociatedWithAPE()
	{
		return $this->isAssociatedWithAPE;
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