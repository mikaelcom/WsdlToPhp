<?php
/**
 * Class file for SOFastTaxTypeTaxInfoMulti
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeTaxInfoMulti
 * @date 08/07/2012
 */
class SOFastTaxTypeTaxInfoMulti extends SOFastTaxWsdlClass
{
	/**
	 * The TaxInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SOFastTaxTypeTaxInfo
	 */
	public $TaxInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeErr
	 */
	public $Error;
	/**
	 * The myTaxInfoMulti
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeArrayOfAnyType
	 */
	public $myTaxInfoMulti;
	/**
	 * Constructor
	 * @param SOFastTaxTypeTaxInfo TaxInfo
	 * @param SOFastTaxTypeErr Error
	 * @param SOFastTaxTypeArrayOfAnyType myTaxInfoMulti
	 * @return SOFastTaxTypeTaxInfoMulti
	 */
	public function __construct($_TaxInfo = null,$_Error = null,$_myTaxInfoMulti = null)
	{
		parent::__construct(array('TaxInfo'=>$_TaxInfo,'Error'=>$_Error,'myTaxInfoMulti'=>new SOFastTaxTypeArrayOfAnyType($_myTaxInfoMulti)));
	}
	/**
	 * Set TaxInfo
	 * @param TaxInfo TaxInfo
	 * @return TaxInfo
	 */
	public function setTaxInfo($_TaxInfo)
	{
		return ($this->TaxInfo = $_TaxInfo);
	}
	/**
	 * Get TaxInfo
	 * @return SOFastTaxTypeTaxInfo
	 */
	public function getTaxInfo()
	{
		return $this->TaxInfo;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastTaxTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set myTaxInfoMulti
	 * @param ArrayOfAnyType myTaxInfoMulti
	 * @return ArrayOfAnyType
	 */
	public function setMyTaxInfoMulti($_myTaxInfoMulti)
	{
		return ($this->myTaxInfoMulti = $_myTaxInfoMulti);
	}
	/**
	 * Get myTaxInfoMulti
	 * @return SOFastTaxTypeArrayOfAnyType
	 */
	public function getMyTaxInfoMulti()
	{
		return $this->myTaxInfoMulti;
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