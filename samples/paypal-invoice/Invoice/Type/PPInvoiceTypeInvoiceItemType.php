<?php
/**
 * Class file for PPInvoiceTypeInvoiceItemType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeInvoiceItemType
 * Documentation : Item information about a service or product listed in the invoice.
 * @date 02/07/2012
 */
class PPInvoiceTypeInvoiceItemType extends PPInvoiceWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : SKU or item name.
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Description of the item.
	 * @var string
	 */
	public $description;
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date on which the product or service was provided.
	 * @var dateTime
	 */
	public $date;
	/**
	 * The quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Item count.
	 * @var decimal
	 */
	public $quantity;
	/**
	 * The unitPrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Price of the item, in the currency specified by the invoice.
	 * @var decimal
	 */
	public $unitPrice;
	/**
	 * The taxName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Name of an applicable tax, if any.
	 * @var string
	 */
	public $taxName;
	/**
	 * The taxRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Rate of an applicable tax, if any.
	 * @var decimal
	 */
	public $taxRate;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string name
	 * @param string description
	 * @param dateTime date
	 * @param decimal quantity
	 * @param decimal unitPrice
	 * @param string taxName
	 * @param decimal taxRate
	 * @param DOMDocument any
	 * @return PPInvoiceTypeInvoiceItemType
	 */
	public function __construct($_name,$_description = null,$_date = null,$_quantity,$_unitPrice,$_taxName = null,$_taxRate = null,$_any = null)
	{
		parent::__construct(array('name'=>$_name,'description'=>$_description,'date'=>$_date,'quantity'=>$_quantity,'unitPrice'=>$_unitPrice,'taxName'=>$_taxName,'taxRate'=>$_taxRate,'any'=>$_any));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set date
	 * @param dateTime date
	 * @return dateTime
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set quantity
	 * @param decimal quantity
	 * @return decimal
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get quantity
	 * @return decimal
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set unitPrice
	 * @param decimal unitPrice
	 * @return decimal
	 */
	public function setUnitPrice($_unitPrice)
	{
		return ($this->unitPrice = $_unitPrice);
	}
	/**
	 * Get unitPrice
	 * @return decimal
	 */
	public function getUnitPrice()
	{
		return $this->unitPrice;
	}
	/**
	 * Set taxName
	 * @param string taxName
	 * @return string
	 */
	public function setTaxName($_taxName)
	{
		return ($this->taxName = $_taxName);
	}
	/**
	 * Get taxName
	 * @return string
	 */
	public function getTaxName()
	{
		return $this->taxName;
	}
	/**
	 * Set taxRate
	 * @param decimal taxRate
	 * @return decimal
	 */
	public function setTaxRate($_taxRate)
	{
		return ($this->taxRate = $_taxRate);
	}
	/**
	 * Get taxRate
	 * @return decimal
	 */
	public function getTaxRate()
	{
		return $this->taxRate;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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