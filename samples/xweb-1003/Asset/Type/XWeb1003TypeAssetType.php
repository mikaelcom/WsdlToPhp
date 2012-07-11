<?php
/**
 * Class file for XWeb1003TypeAssetType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAssetType
 * @date 09/07/2012
 */
class XWeb1003TypeAssetType extends XWeb1003WsdlClass
{
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
	/**
	 * The Asset_Sequence
	 * @var anonymous160
	 */
	public $Asset_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous160 Asset_Sequence
	 * @return XWeb1003TypeAssetType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Asset_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Asset_Sequence'=>$_Asset_Sequence));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Asset_Sequence
	 * @param anonymous160 Asset_Sequence
	 * @return anonymous160
	 */
	public function setAsset_Sequence($_Asset_Sequence)
	{
		return ($this->Asset_Sequence = $_Asset_Sequence);
	}
	/**
	 * Get Asset_Sequence
	 * @return anonymous160
	 */
	public function getAsset_Sequence()
	{
		return $this->Asset_Sequence;
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