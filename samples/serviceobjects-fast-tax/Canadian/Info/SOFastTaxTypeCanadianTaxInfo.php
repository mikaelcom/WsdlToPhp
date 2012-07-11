<?php
/**
 * Class file for SOFastTaxTypeCanadianTaxInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeCanadianTaxInfo
 * @date 08/07/2012
 */
class SOFastTaxTypeCanadianTaxInfo extends SOFastTaxWsdlClass
{
	/**
	 * The ProvinceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProvinceName;
	/**
	 * The ProvinceAbbreviation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ProvinceAbbreviation;
	/**
	 * The GoodsSalesTax
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $GoodsSalesTax;
	/**
	 * The ProvinceSalesTax
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $ProvinceSalesTax;
	/**
	 * The HarmonizedSalesTax
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $HarmonizedSalesTax;
	/**
	 * The ApplyGSTFirst
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ApplyGSTFirst;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastTaxTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string ProvinceName
	 * @param string ProvinceAbbreviation
	 * @param decimal GoodsSalesTax
	 * @param decimal ProvinceSalesTax
	 * @param decimal HarmonizedSalesTax
	 * @param string ApplyGSTFirst
	 * @param SOFastTaxTypeErr Error
	 * @return SOFastTaxTypeCanadianTaxInfo
	 */
	public function __construct($_ProvinceName = null,$_ProvinceAbbreviation = null,$_GoodsSalesTax,$_ProvinceSalesTax,$_HarmonizedSalesTax,$_ApplyGSTFirst = null,$_Error = null)
	{
		parent::__construct(array('ProvinceName'=>$_ProvinceName,'ProvinceAbbreviation'=>$_ProvinceAbbreviation,'GoodsSalesTax'=>$_GoodsSalesTax,'ProvinceSalesTax'=>$_ProvinceSalesTax,'HarmonizedSalesTax'=>$_HarmonizedSalesTax,'ApplyGSTFirst'=>$_ApplyGSTFirst,'Error'=>$_Error));
	}
	/**
	 * Set ProvinceName
	 * @param string ProvinceName
	 * @return string
	 */
	public function setProvinceName($_ProvinceName)
	{
		return ($this->ProvinceName = $_ProvinceName);
	}
	/**
	 * Get ProvinceName
	 * @return string
	 */
	public function getProvinceName()
	{
		return $this->ProvinceName;
	}
	/**
	 * Set ProvinceAbbreviation
	 * @param string ProvinceAbbreviation
	 * @return string
	 */
	public function setProvinceAbbreviation($_ProvinceAbbreviation)
	{
		return ($this->ProvinceAbbreviation = $_ProvinceAbbreviation);
	}
	/**
	 * Get ProvinceAbbreviation
	 * @return string
	 */
	public function getProvinceAbbreviation()
	{
		return $this->ProvinceAbbreviation;
	}
	/**
	 * Set GoodsSalesTax
	 * @param decimal GoodsSalesTax
	 * @return decimal
	 */
	public function setGoodsSalesTax($_GoodsSalesTax)
	{
		return ($this->GoodsSalesTax = $_GoodsSalesTax);
	}
	/**
	 * Get GoodsSalesTax
	 * @return decimal
	 */
	public function getGoodsSalesTax()
	{
		return $this->GoodsSalesTax;
	}
	/**
	 * Set ProvinceSalesTax
	 * @param decimal ProvinceSalesTax
	 * @return decimal
	 */
	public function setProvinceSalesTax($_ProvinceSalesTax)
	{
		return ($this->ProvinceSalesTax = $_ProvinceSalesTax);
	}
	/**
	 * Get ProvinceSalesTax
	 * @return decimal
	 */
	public function getProvinceSalesTax()
	{
		return $this->ProvinceSalesTax;
	}
	/**
	 * Set HarmonizedSalesTax
	 * @param decimal HarmonizedSalesTax
	 * @return decimal
	 */
	public function setHarmonizedSalesTax($_HarmonizedSalesTax)
	{
		return ($this->HarmonizedSalesTax = $_HarmonizedSalesTax);
	}
	/**
	 * Get HarmonizedSalesTax
	 * @return decimal
	 */
	public function getHarmonizedSalesTax()
	{
		return $this->HarmonizedSalesTax;
	}
	/**
	 * Set ApplyGSTFirst
	 * @param string ApplyGSTFirst
	 * @return string
	 */
	public function setApplyGSTFirst($_ApplyGSTFirst)
	{
		return ($this->ApplyGSTFirst = $_ApplyGSTFirst);
	}
	/**
	 * Get ApplyGSTFirst
	 * @return string
	 */
	public function getApplyGSTFirst()
	{
		return $this->ApplyGSTFirst;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>