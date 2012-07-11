<?php
/**
 * Class file for XiGlobalmasterTypeIndustries
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeIndustries
 * @date 08/07/2012
 */
class XiGlobalmasterTypeIndustries extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Chemicals_MajorDiversified'
	 * @return string 'Chemicals_MajorDiversified'
	 */
	const VALUE_CHEMICALS_MAJORDIVERSIFIED = 'Chemicals_MajorDiversified';
	/**
	 * Constant for value 'Synthetics'
	 * @return string 'Synthetics'
	 */
	const VALUE_SYNTHETICS = 'Synthetics';
	/**
	 * Constant for value 'AgriculturalChemicals'
	 * @return string 'AgriculturalChemicals'
	 */
	const VALUE_AGRICULTURALCHEMICALS = 'AgriculturalChemicals';
	/**
	 * Constant for value 'SpecialtyChemicals'
	 * @return string 'SpecialtyChemicals'
	 */
	const VALUE_SPECIALTYCHEMICALS = 'SpecialtyChemicals';
	/**
	 * Constant for value 'MajorIntegratedOilAndGas'
	 * @return string 'MajorIntegratedOilAndGas'
	 */
	const VALUE_MAJORINTEGRATEDOILANDGAS = 'MajorIntegratedOilAndGas';
	/**
	 * Constant for value 'IndependentOilAndGas'
	 * @return string 'IndependentOilAndGas'
	 */
	const VALUE_INDEPENDENTOILANDGAS = 'IndependentOilAndGas';
	/**
	 * Constant for value 'OilAndGasRefiningAndMarketing'
	 * @return string 'OilAndGasRefiningAndMarketing'
	 */
	const VALUE_OILANDGASREFININGANDMARKETING = 'OilAndGasRefiningAndMarketing';
	/**
	 * Constant for value 'OilAndGasDrillingAndExploration'
	 * @return string 'OilAndGasDrillingAndExploration'
	 */
	const VALUE_OILANDGASDRILLINGANDEXPLORATION = 'OilAndGasDrillingAndExploration';
	/**
	 * Constant for value 'OilAndGasEquipmentAndServices'
	 * @return string 'OilAndGasEquipmentAndServices'
	 */
	const VALUE_OILANDGASEQUIPMENTANDSERVICES = 'OilAndGasEquipmentAndServices';
	/**
	 * Constant for value 'OilAndGasPipelines'
	 * @return string 'OilAndGasPipelines'
	 */
	const VALUE_OILANDGASPIPELINES = 'OilAndGasPipelines';
	/**
	 * Constant for value 'SteelAndIron'
	 * @return string 'SteelAndIron'
	 */
	const VALUE_STEELANDIRON = 'SteelAndIron';
	/**
	 * Constant for value 'Copper'
	 * @return string 'Copper'
	 */
	const VALUE_COPPER = 'Copper';
	/**
	 * Constant for value 'Aluminum'
	 * @return string 'Aluminum'
	 */
	const VALUE_ALUMINUM = 'Aluminum';
	/**
	 * Constant for value 'IndustrialMetalsAndMinerals'
	 * @return string 'IndustrialMetalsAndMinerals'
	 */
	const VALUE_INDUSTRIALMETALSANDMINERALS = 'IndustrialMetalsAndMinerals';
	/**
	 * Constant for value 'Gold'
	 * @return string 'Gold'
	 */
	const VALUE_GOLD = 'Gold';
	/**
	 * Constant for value 'Silver'
	 * @return string 'Silver'
	 */
	const VALUE_SILVER = 'Silver';
	/**
	 * Constant for value 'NonmetallicMineralMining'
	 * @return string 'NonmetallicMineralMining'
	 */
	const VALUE_NONMETALLICMINERALMINING = 'NonmetallicMineralMining';
	/**
	 * Constant for value 'Conglomerates'
	 * @return string 'Conglomerates'
	 */
	const VALUE_CONGLOMERATES = 'Conglomerates';
	/**
	 * Constant for value 'Appliances'
	 * @return string 'Appliances'
	 */
	const VALUE_APPLIANCES = 'Appliances';
	/**
	 * Constant for value 'HomeFurnishingsAndFixtures'
	 * @return string 'HomeFurnishingsAndFixtures'
	 */
	const VALUE_HOMEFURNISHINGSANDFIXTURES = 'HomeFurnishingsAndFixtures';
	/**
	 * Constant for value 'HousewaresAndAccessories'
	 * @return string 'HousewaresAndAccessories'
	 */
	const VALUE_HOUSEWARESANDACCESSORIES = 'HousewaresAndAccessories';
	/**
	 * Constant for value 'BusinessEquipment'
	 * @return string 'BusinessEquipment'
	 */
	const VALUE_BUSINESSEQUIPMENT = 'BusinessEquipment';
	/**
	 * Constant for value 'ElectronicEquipment'
	 * @return string 'ElectronicEquipment'
	 */
	const VALUE_ELECTRONICEQUIPMENT = 'ElectronicEquipment';
	/**
	 * Constant for value 'ToysAndGames'
	 * @return string 'ToysAndGames'
	 */
	const VALUE_TOYSANDGAMES = 'ToysAndGames';
	/**
	 * Constant for value 'SportingGoods'
	 * @return string 'SportingGoods'
	 */
	const VALUE_SPORTINGGOODS = 'SportingGoods';
	/**
	 * Constant for value 'RecreationalGoods_Other'
	 * @return string 'RecreationalGoods_Other'
	 */
	const VALUE_RECREATIONALGOODS_OTHER = 'RecreationalGoods_Other';
	/**
	 * Constant for value 'PhotographicEquipmentAndSupplies'
	 * @return string 'PhotographicEquipmentAndSupplies'
	 */
	const VALUE_PHOTOGRAPHICEQUIPMENTANDSUPPLIES = 'PhotographicEquipmentAndSupplies';
	/**
	 * Constant for value 'Textile_ApparelClothing'
	 * @return string 'Textile_ApparelClothing'
	 */
	const VALUE_TEXTILE_APPARELCLOTHING = 'Textile_ApparelClothing';
	/**
	 * Constant for value 'Textile_ApparelFootwearAndAccessories'
	 * @return string 'Textile_ApparelFootwearAndAccessories'
	 */
	const VALUE_TEXTILE_APPARELFOOTWEARANDACCESSORIES = 'Textile_ApparelFootwearAndAccessories';
	/**
	 * Constant for value 'RubberAndPlastics'
	 * @return string 'RubberAndPlastics'
	 */
	const VALUE_RUBBERANDPLASTICS = 'RubberAndPlastics';
	/**
	 * Constant for value 'PersonalProducts'
	 * @return string 'PersonalProducts'
	 */
	const VALUE_PERSONALPRODUCTS = 'PersonalProducts';
	/**
	 * Constant for value 'PaperAndPaperProducts'
	 * @return string 'PaperAndPaperProducts'
	 */
	const VALUE_PAPERANDPAPERPRODUCTS = 'PaperAndPaperProducts';
	/**
	 * Constant for value 'PackagingAndContainers'
	 * @return string 'PackagingAndContainers'
	 */
	const VALUE_PACKAGINGANDCONTAINERS = 'PackagingAndContainers';
	/**
	 * Constant for value 'CleaningProducts'
	 * @return string 'CleaningProducts'
	 */
	const VALUE_CLEANINGPRODUCTS = 'CleaningProducts';
	/**
	 * Constant for value 'OfficeSupplies'
	 * @return string 'OfficeSupplies'
	 */
	const VALUE_OFFICESUPPLIES = 'OfficeSupplies';
	/**
	 * Constant for value 'AutoManufacturers_Major'
	 * @return string 'AutoManufacturers_Major'
	 */
	const VALUE_AUTOMANUFACTURERS_MAJOR = 'AutoManufacturers_Major';
	/**
	 * Constant for value 'TrucksAndOtherVehicles'
	 * @return string 'TrucksAndOtherVehicles'
	 */
	const VALUE_TRUCKSANDOTHERVEHICLES = 'TrucksAndOtherVehicles';
	/**
	 * Constant for value 'RecreationalVehicles'
	 * @return string 'RecreationalVehicles'
	 */
	const VALUE_RECREATIONALVEHICLES = 'RecreationalVehicles';
	/**
	 * Constant for value 'AutoParts'
	 * @return string 'AutoParts'
	 */
	const VALUE_AUTOPARTS = 'AutoParts';
	/**
	 * Constant for value 'Food_MajorDiversified'
	 * @return string 'Food_MajorDiversified'
	 */
	const VALUE_FOOD_MAJORDIVERSIFIED = 'Food_MajorDiversified';
	/**
	 * Constant for value 'FarmProducts'
	 * @return string 'FarmProducts'
	 */
	const VALUE_FARMPRODUCTS = 'FarmProducts';
	/**
	 * Constant for value 'ProcessedAndPackagedGoods'
	 * @return string 'ProcessedAndPackagedGoods'
	 */
	const VALUE_PROCESSEDANDPACKAGEDGOODS = 'ProcessedAndPackagedGoods';
	/**
	 * Constant for value 'MeatProducts'
	 * @return string 'MeatProducts'
	 */
	const VALUE_MEATPRODUCTS = 'MeatProducts';
	/**
	 * Constant for value 'DairyProducts'
	 * @return string 'DairyProducts'
	 */
	const VALUE_DAIRYPRODUCTS = 'DairyProducts';
	/**
	 * Constant for value 'Confectioners'
	 * @return string 'Confectioners'
	 */
	const VALUE_CONFECTIONERS = 'Confectioners';
	/**
	 * Constant for value 'Beverages_Brewers'
	 * @return string 'Beverages_Brewers'
	 */
	const VALUE_BEVERAGES_BREWERS = 'Beverages_Brewers';
	/**
	 * Constant for value 'Beverages_WineriesAndDistillers'
	 * @return string 'Beverages_WineriesAndDistillers'
	 */
	const VALUE_BEVERAGES_WINERIESANDDISTILLERS = 'Beverages_WineriesAndDistillers';
	/**
	 * Constant for value 'Beverages_SoftDrinks'
	 * @return string 'Beverages_SoftDrinks'
	 */
	const VALUE_BEVERAGES_SOFTDRINKS = 'Beverages_SoftDrinks';
	/**
	 * Constant for value 'Cigarettes'
	 * @return string 'Cigarettes'
	 */
	const VALUE_CIGARETTES = 'Cigarettes';
	/**
	 * Constant for value 'TobaccoProducts_Other'
	 * @return string 'TobaccoProducts_Other'
	 */
	const VALUE_TOBACCOPRODUCTS_OTHER = 'TobaccoProducts_Other';
	/**
	 * Constant for value 'MoneyCenterBanks'
	 * @return string 'MoneyCenterBanks'
	 */
	const VALUE_MONEYCENTERBANKS = 'MoneyCenterBanks';
	/**
	 * Constant for value 'Regional_NortheastBanks'
	 * @return string 'Regional_NortheastBanks'
	 */
	const VALUE_REGIONAL_NORTHEASTBANKS = 'Regional_NortheastBanks';
	/**
	 * Constant for value 'Regional_Mid_AtlanticBanks'
	 * @return string 'Regional_Mid_AtlanticBanks'
	 */
	const VALUE_REGIONAL_MID_ATLANTICBANKS = 'Regional_Mid_AtlanticBanks';
	/**
	 * Constant for value 'Regional_SoutheastBanks'
	 * @return string 'Regional_SoutheastBanks'
	 */
	const VALUE_REGIONAL_SOUTHEASTBANKS = 'Regional_SoutheastBanks';
	/**
	 * Constant for value 'Regional_MidwestBanks'
	 * @return string 'Regional_MidwestBanks'
	 */
	const VALUE_REGIONAL_MIDWESTBANKS = 'Regional_MidwestBanks';
	/**
	 * Constant for value 'Regional_SouthwestBanks'
	 * @return string 'Regional_SouthwestBanks'
	 */
	const VALUE_REGIONAL_SOUTHWESTBANKS = 'Regional_SouthwestBanks';
	/**
	 * Constant for value 'Regional_PacificBanks'
	 * @return string 'Regional_PacificBanks'
	 */
	const VALUE_REGIONAL_PACIFICBANKS = 'Regional_PacificBanks';
	/**
	 * Constant for value 'ForeignMoneyCenterBanks'
	 * @return string 'ForeignMoneyCenterBanks'
	 */
	const VALUE_FOREIGNMONEYCENTERBANKS = 'ForeignMoneyCenterBanks';
	/**
	 * Constant for value 'ForeignRegionalBanks'
	 * @return string 'ForeignRegionalBanks'
	 */
	const VALUE_FOREIGNREGIONALBANKS = 'ForeignRegionalBanks';
	/**
	 * Constant for value 'SavingsAndLoans'
	 * @return string 'SavingsAndLoans'
	 */
	const VALUE_SAVINGSANDLOANS = 'SavingsAndLoans';
	/**
	 * Constant for value 'InvestmentBrokerage_National'
	 * @return string 'InvestmentBrokerage_National'
	 */
	const VALUE_INVESTMENTBROKERAGE_NATIONAL = 'InvestmentBrokerage_National';
	/**
	 * Constant for value 'InvestmentBrokerage_Regional'
	 * @return string 'InvestmentBrokerage_Regional'
	 */
	const VALUE_INVESTMENTBROKERAGE_REGIONAL = 'InvestmentBrokerage_Regional';
	/**
	 * Constant for value 'AssetManagement'
	 * @return string 'AssetManagement'
	 */
	const VALUE_ASSETMANAGEMENT = 'AssetManagement';
	/**
	 * Constant for value 'DiversifiedInvestments'
	 * @return string 'DiversifiedInvestments'
	 */
	const VALUE_DIVERSIFIEDINVESTMENTS = 'DiversifiedInvestments';
	/**
	 * Constant for value 'CreditServices'
	 * @return string 'CreditServices'
	 */
	const VALUE_CREDITSERVICES = 'CreditServices';
	/**
	 * Constant for value 'Closed_EndFund_Debt'
	 * @return string 'Closed_EndFund_Debt'
	 */
	const VALUE_CLOSED_ENDFUND_DEBT = 'Closed_EndFund_Debt';
	/**
	 * Constant for value 'Closed_EndFund_Equity'
	 * @return string 'Closed_EndFund_Equity'
	 */
	const VALUE_CLOSED_ENDFUND_EQUITY = 'Closed_EndFund_Equity';
	/**
	 * Constant for value 'Closed_EndFund_Foreign'
	 * @return string 'Closed_EndFund_Foreign'
	 */
	const VALUE_CLOSED_ENDFUND_FOREIGN = 'Closed_EndFund_Foreign';
	/**
	 * Constant for value 'LifeInsurance'
	 * @return string 'LifeInsurance'
	 */
	const VALUE_LIFEINSURANCE = 'LifeInsurance';
	/**
	 * Constant for value 'AccidentAndHealthInsurance'
	 * @return string 'AccidentAndHealthInsurance'
	 */
	const VALUE_ACCIDENTANDHEALTHINSURANCE = 'AccidentAndHealthInsurance';
	/**
	 * Constant for value 'PropertyAndCasualtyInsurance'
	 * @return string 'PropertyAndCasualtyInsurance'
	 */
	const VALUE_PROPERTYANDCASUALTYINSURANCE = 'PropertyAndCasualtyInsurance';
	/**
	 * Constant for value 'SuretyAndTitleInsurance'
	 * @return string 'SuretyAndTitleInsurance'
	 */
	const VALUE_SURETYANDTITLEINSURANCE = 'SuretyAndTitleInsurance';
	/**
	 * Constant for value 'InsuranceBrokers'
	 * @return string 'InsuranceBrokers'
	 */
	const VALUE_INSURANCEBROKERS = 'InsuranceBrokers';
	/**
	 * Constant for value 'REIT_Diversified'
	 * @return string 'REIT_Diversified'
	 */
	const VALUE_REIT_DIVERSIFIED = 'REIT_Diversified';
	/**
	 * Constant for value 'REIT_Office'
	 * @return string 'REIT_Office'
	 */
	const VALUE_REIT_OFFICE = 'REIT_Office';
	/**
	 * Constant for value 'REIT_HealthcareFacilities'
	 * @return string 'REIT_HealthcareFacilities'
	 */
	const VALUE_REIT_HEALTHCAREFACILITIES = 'REIT_HealthcareFacilities';
	/**
	 * Constant for value 'REIT_Hotel_Motel'
	 * @return string 'REIT_Hotel_Motel'
	 */
	const VALUE_REIT_HOTEL_MOTEL = 'REIT_Hotel_Motel';
	/**
	 * Constant for value 'REIT_Industrial'
	 * @return string 'REIT_Industrial'
	 */
	const VALUE_REIT_INDUSTRIAL = 'REIT_Industrial';
	/**
	 * Constant for value 'REIT_Residential'
	 * @return string 'REIT_Residential'
	 */
	const VALUE_REIT_RESIDENTIAL = 'REIT_Residential';
	/**
	 * Constant for value 'REIT_Retail'
	 * @return string 'REIT_Retail'
	 */
	const VALUE_REIT_RETAIL = 'REIT_Retail';
	/**
	 * Constant for value 'MortgageInvestment'
	 * @return string 'MortgageInvestment'
	 */
	const VALUE_MORTGAGEINVESTMENT = 'MortgageInvestment';
	/**
	 * Constant for value 'PropertyManagement'
	 * @return string 'PropertyManagement'
	 */
	const VALUE_PROPERTYMANAGEMENT = 'PropertyManagement';
	/**
	 * Constant for value 'RealEstateDevelopment'
	 * @return string 'RealEstateDevelopment'
	 */
	const VALUE_REALESTATEDEVELOPMENT = 'RealEstateDevelopment';
	/**
	 * Constant for value 'DrugManufacturers_Major'
	 * @return string 'DrugManufacturers_Major'
	 */
	const VALUE_DRUGMANUFACTURERS_MAJOR = 'DrugManufacturers_Major';
	/**
	 * Constant for value 'DrugManufacturers_Other'
	 * @return string 'DrugManufacturers_Other'
	 */
	const VALUE_DRUGMANUFACTURERS_OTHER = 'DrugManufacturers_Other';
	/**
	 * Constant for value 'Drugs_Generic'
	 * @return string 'Drugs_Generic'
	 */
	const VALUE_DRUGS_GENERIC = 'Drugs_Generic';
	/**
	 * Constant for value 'DrugDeliveryAndAccessories'
	 * @return string 'DrugDeliveryAndAccessories'
	 */
	const VALUE_DRUGDELIVERYANDACCESSORIES = 'DrugDeliveryAndAccessories';
	/**
	 * Constant for value 'DrugRelatedProducts'
	 * @return string 'DrugRelatedProducts'
	 */
	const VALUE_DRUGRELATEDPRODUCTS = 'DrugRelatedProducts';
	/**
	 * Constant for value 'Biotechnology'
	 * @return string 'Biotechnology'
	 */
	const VALUE_BIOTECHNOLOGY = 'Biotechnology';
	/**
	 * Constant for value 'DiagnosticSubstances'
	 * @return string 'DiagnosticSubstances'
	 */
	const VALUE_DIAGNOSTICSUBSTANCES = 'DiagnosticSubstances';
	/**
	 * Constant for value 'MedicalInstrumentsAndSupplies'
	 * @return string 'MedicalInstrumentsAndSupplies'
	 */
	const VALUE_MEDICALINSTRUMENTSANDSUPPLIES = 'MedicalInstrumentsAndSupplies';
	/**
	 * Constant for value 'MedicalAppliancesAndEquipment'
	 * @return string 'MedicalAppliancesAndEquipment'
	 */
	const VALUE_MEDICALAPPLIANCESANDEQUIPMENT = 'MedicalAppliancesAndEquipment';
	/**
	 * Constant for value 'HealthCarePlans'
	 * @return string 'HealthCarePlans'
	 */
	const VALUE_HEALTHCAREPLANS = 'HealthCarePlans';
	/**
	 * Constant for value 'Long_TermCareFacilities'
	 * @return string 'Long_TermCareFacilities'
	 */
	const VALUE_LONG_TERMCAREFACILITIES = 'Long_TermCareFacilities';
	/**
	 * Constant for value 'Hospitals'
	 * @return string 'Hospitals'
	 */
	const VALUE_HOSPITALS = 'Hospitals';
	/**
	 * Constant for value 'MedicalLaboratoriesAndResearch'
	 * @return string 'MedicalLaboratoriesAndResearch'
	 */
	const VALUE_MEDICALLABORATORIESANDRESEARCH = 'MedicalLaboratoriesAndResearch';
	/**
	 * Constant for value 'HomeHealthCare'
	 * @return string 'HomeHealthCare'
	 */
	const VALUE_HOMEHEALTHCARE = 'HomeHealthCare';
	/**
	 * Constant for value 'MedicalPractitioners'
	 * @return string 'MedicalPractitioners'
	 */
	const VALUE_MEDICALPRACTITIONERS = 'MedicalPractitioners';
	/**
	 * Constant for value 'SpecializedHealthServices'
	 * @return string 'SpecializedHealthServices'
	 */
	const VALUE_SPECIALIZEDHEALTHSERVICES = 'SpecializedHealthServices';
	/**
	 * Constant for value 'Aerospace_Defense_MajorDiversified'
	 * @return string 'Aerospace_Defense_MajorDiversified'
	 */
	const VALUE_AEROSPACE_DEFENSE_MAJORDIVERSIFIED = 'Aerospace_Defense_MajorDiversified';
	/**
	 * Constant for value 'Aerospace_DefenseProductsAndServices'
	 * @return string 'Aerospace_DefenseProductsAndServices'
	 */
	const VALUE_AEROSPACE_DEFENSEPRODUCTSANDSERVICES = 'Aerospace_DefenseProductsAndServices';
	/**
	 * Constant for value 'FarmAndConstructionMachinery'
	 * @return string 'FarmAndConstructionMachinery'
	 */
	const VALUE_FARMANDCONSTRUCTIONMACHINERY = 'FarmAndConstructionMachinery';
	/**
	 * Constant for value 'IndustrialEquipmentAndComponents'
	 * @return string 'IndustrialEquipmentAndComponents'
	 */
	const VALUE_INDUSTRIALEQUIPMENTANDCOMPONENTS = 'IndustrialEquipmentAndComponents';
	/**
	 * Constant for value 'DiversifiedMachinery'
	 * @return string 'DiversifiedMachinery'
	 */
	const VALUE_DIVERSIFIEDMACHINERY = 'DiversifiedMachinery';
	/**
	 * Constant for value 'PollutionAndTreatmentControls'
	 * @return string 'PollutionAndTreatmentControls'
	 */
	const VALUE_POLLUTIONANDTREATMENTCONTROLS = 'PollutionAndTreatmentControls';
	/**
	 * Constant for value 'MachineToolsAndAccessories'
	 * @return string 'MachineToolsAndAccessories'
	 */
	const VALUE_MACHINETOOLSANDACCESSORIES = 'MachineToolsAndAccessories';
	/**
	 * Constant for value 'SmallToolsAndAccessories'
	 * @return string 'SmallToolsAndAccessories'
	 */
	const VALUE_SMALLTOOLSANDACCESSORIES = 'SmallToolsAndAccessories';
	/**
	 * Constant for value 'MetalFabrication'
	 * @return string 'MetalFabrication'
	 */
	const VALUE_METALFABRICATION = 'MetalFabrication';
	/**
	 * Constant for value 'IndustrialElectricalEquipment'
	 * @return string 'IndustrialElectricalEquipment'
	 */
	const VALUE_INDUSTRIALELECTRICALEQUIPMENT = 'IndustrialElectricalEquipment';
	/**
	 * Constant for value 'TextileIndustrial'
	 * @return string 'TextileIndustrial'
	 */
	const VALUE_TEXTILEINDUSTRIAL = 'TextileIndustrial';
	/**
	 * Constant for value 'ResidentialConstruction'
	 * @return string 'ResidentialConstruction'
	 */
	const VALUE_RESIDENTIALCONSTRUCTION = 'ResidentialConstruction';
	/**
	 * Constant for value 'ManufacturedHousing'
	 * @return string 'ManufacturedHousing'
	 */
	const VALUE_MANUFACTUREDHOUSING = 'ManufacturedHousing';
	/**
	 * Constant for value 'Lumber_WoodProduction'
	 * @return string 'Lumber_WoodProduction'
	 */
	const VALUE_LUMBER_WOODPRODUCTION = 'Lumber_WoodProduction';
	/**
	 * Constant for value 'Cement'
	 * @return string 'Cement'
	 */
	const VALUE_CEMENT = 'Cement';
	/**
	 * Constant for value 'GeneralBuildingMaterials'
	 * @return string 'GeneralBuildingMaterials'
	 */
	const VALUE_GENERALBUILDINGMATERIALS = 'GeneralBuildingMaterials';
	/**
	 * Constant for value 'HeavyConstruction'
	 * @return string 'HeavyConstruction'
	 */
	const VALUE_HEAVYCONSTRUCTION = 'HeavyConstruction';
	/**
	 * Constant for value 'GeneralContractors'
	 * @return string 'GeneralContractors'
	 */
	const VALUE_GENERALCONTRACTORS = 'GeneralContractors';
	/**
	 * Constant for value 'WasteManagement'
	 * @return string 'WasteManagement'
	 */
	const VALUE_WASTEMANAGEMENT = 'WasteManagement';
	/**
	 * Constant for value 'Lodging'
	 * @return string 'Lodging'
	 */
	const VALUE_LODGING = 'Lodging';
	/**
	 * Constant for value 'ResortsAndCasinos'
	 * @return string 'ResortsAndCasinos'
	 */
	const VALUE_RESORTSANDCASINOS = 'ResortsAndCasinos';
	/**
	 * Constant for value 'Restaurants'
	 * @return string 'Restaurants'
	 */
	const VALUE_RESTAURANTS = 'Restaurants';
	/**
	 * Constant for value 'SpecialtyEateries'
	 * @return string 'SpecialtyEateries'
	 */
	const VALUE_SPECIALTYEATERIES = 'SpecialtyEateries';
	/**
	 * Constant for value 'GamingActivities'
	 * @return string 'GamingActivities'
	 */
	const VALUE_GAMINGACTIVITIES = 'GamingActivities';
	/**
	 * Constant for value 'SportingActivities'
	 * @return string 'SportingActivities'
	 */
	const VALUE_SPORTINGACTIVITIES = 'SportingActivities';
	/**
	 * Constant for value 'GeneralEntertainment'
	 * @return string 'GeneralEntertainment'
	 */
	const VALUE_GENERALENTERTAINMENT = 'GeneralEntertainment';
	/**
	 * Constant for value 'AdvertisingAgencies'
	 * @return string 'AdvertisingAgencies'
	 */
	const VALUE_ADVERTISINGAGENCIES = 'AdvertisingAgencies';
	/**
	 * Constant for value 'MarketingServices'
	 * @return string 'MarketingServices'
	 */
	const VALUE_MARKETINGSERVICES = 'MarketingServices';
	/**
	 * Constant for value 'Entertainment_Diversified'
	 * @return string 'Entertainment_Diversified'
	 */
	const VALUE_ENTERTAINMENT_DIVERSIFIED = 'Entertainment_Diversified';
	/**
	 * Constant for value 'Broadcasting_TV'
	 * @return string 'Broadcasting_TV'
	 */
	const VALUE_BROADCASTING_TV = 'Broadcasting_TV';
	/**
	 * Constant for value 'Broadcasting_Radio'
	 * @return string 'Broadcasting_Radio'
	 */
	const VALUE_BROADCASTING_RADIO = 'Broadcasting_Radio';
	/**
	 * Constant for value 'CATVSystems'
	 * @return string 'CATVSystems'
	 */
	const VALUE_CATVSYSTEMS = 'CATVSystems';
	/**
	 * Constant for value 'MovieProduction_Theaters'
	 * @return string 'MovieProduction_Theaters'
	 */
	const VALUE_MOVIEPRODUCTION_THEATERS = 'MovieProduction_Theaters';
	/**
	 * Constant for value 'Publishing_Newspapers'
	 * @return string 'Publishing_Newspapers'
	 */
	const VALUE_PUBLISHING_NEWSPAPERS = 'Publishing_Newspapers';
	/**
	 * Constant for value 'Publishing_Periodicals'
	 * @return string 'Publishing_Periodicals'
	 */
	const VALUE_PUBLISHING_PERIODICALS = 'Publishing_Periodicals';
	/**
	 * Constant for value 'Publishing_Books'
	 * @return string 'Publishing_Books'
	 */
	const VALUE_PUBLISHING_BOOKS = 'Publishing_Books';
	/**
	 * Constant for value 'ApparelStores'
	 * @return string 'ApparelStores'
	 */
	const VALUE_APPARELSTORES = 'ApparelStores';
	/**
	 * Constant for value 'DepartmentStores'
	 * @return string 'DepartmentStores'
	 */
	const VALUE_DEPARTMENTSTORES = 'DepartmentStores';
	/**
	 * Constant for value 'Discount_VarietyStores'
	 * @return string 'Discount_VarietyStores'
	 */
	const VALUE_DISCOUNT_VARIETYSTORES = 'Discount_VarietyStores';
	/**
	 * Constant for value 'DrugStores'
	 * @return string 'DrugStores'
	 */
	const VALUE_DRUGSTORES = 'DrugStores';
	/**
	 * Constant for value 'GroceryStores'
	 * @return string 'GroceryStores'
	 */
	const VALUE_GROCERYSTORES = 'GroceryStores';
	/**
	 * Constant for value 'ElectronicsStores'
	 * @return string 'ElectronicsStores'
	 */
	const VALUE_ELECTRONICSSTORES = 'ElectronicsStores';
	/**
	 * Constant for value 'HomeImprovementStores'
	 * @return string 'HomeImprovementStores'
	 */
	const VALUE_HOMEIMPROVEMENTSTORES = 'HomeImprovementStores';
	/**
	 * Constant for value 'HomeFurnishingStores'
	 * @return string 'HomeFurnishingStores'
	 */
	const VALUE_HOMEFURNISHINGSTORES = 'HomeFurnishingStores';
	/**
	 * Constant for value 'AutoPartsStores'
	 * @return string 'AutoPartsStores'
	 */
	const VALUE_AUTOPARTSSTORES = 'AutoPartsStores';
	/**
	 * Constant for value 'CatalogAndMailOrderHouses'
	 * @return string 'CatalogAndMailOrderHouses'
	 */
	const VALUE_CATALOGANDMAILORDERHOUSES = 'CatalogAndMailOrderHouses';
	/**
	 * Constant for value 'SportingGoodsStores'
	 * @return string 'SportingGoodsStores'
	 */
	const VALUE_SPORTINGGOODSSTORES = 'SportingGoodsStores';
	/**
	 * Constant for value 'ToyAndHobbyStores'
	 * @return string 'ToyAndHobbyStores'
	 */
	const VALUE_TOYANDHOBBYSTORES = 'ToyAndHobbyStores';
	/**
	 * Constant for value 'JewelryStores'
	 * @return string 'JewelryStores'
	 */
	const VALUE_JEWELRYSTORES = 'JewelryStores';
	/**
	 * Constant for value 'MusicAndVideoStores'
	 * @return string 'MusicAndVideoStores'
	 */
	const VALUE_MUSICANDVIDEOSTORES = 'MusicAndVideoStores';
	/**
	 * Constant for value 'AutoDealerships'
	 * @return string 'AutoDealerships'
	 */
	const VALUE_AUTODEALERSHIPS = 'AutoDealerships';
	/**
	 * Constant for value 'SpecialtyRetail_Other'
	 * @return string 'SpecialtyRetail_Other'
	 */
	const VALUE_SPECIALTYRETAIL_OTHER = 'SpecialtyRetail_Other';
	/**
	 * Constant for value 'AutoPartsWholesale'
	 * @return string 'AutoPartsWholesale'
	 */
	const VALUE_AUTOPARTSWHOLESALE = 'AutoPartsWholesale';
	/**
	 * Constant for value 'BuildingMaterialsWholesale'
	 * @return string 'BuildingMaterialsWholesale'
	 */
	const VALUE_BUILDINGMATERIALSWHOLESALE = 'BuildingMaterialsWholesale';
	/**
	 * Constant for value 'IndustrialEquipmentWholesale'
	 * @return string 'IndustrialEquipmentWholesale'
	 */
	const VALUE_INDUSTRIALEQUIPMENTWHOLESALE = 'IndustrialEquipmentWholesale';
	/**
	 * Constant for value 'ElectronicsWholesale'
	 * @return string 'ElectronicsWholesale'
	 */
	const VALUE_ELECTRONICSWHOLESALE = 'ElectronicsWholesale';
	/**
	 * Constant for value 'MedicalEquipmentWholesale'
	 * @return string 'MedicalEquipmentWholesale'
	 */
	const VALUE_MEDICALEQUIPMENTWHOLESALE = 'MedicalEquipmentWholesale';
	/**
	 * Constant for value 'ComputersWholesale'
	 * @return string 'ComputersWholesale'
	 */
	const VALUE_COMPUTERSWHOLESALE = 'ComputersWholesale';
	/**
	 * Constant for value 'DrugsWholesale'
	 * @return string 'DrugsWholesale'
	 */
	const VALUE_DRUGSWHOLESALE = 'DrugsWholesale';
	/**
	 * Constant for value 'FoodWholesale'
	 * @return string 'FoodWholesale'
	 */
	const VALUE_FOODWHOLESALE = 'FoodWholesale';
	/**
	 * Constant for value 'BasicMaterialsWholesale'
	 * @return string 'BasicMaterialsWholesale'
	 */
	const VALUE_BASICMATERIALSWHOLESALE = 'BasicMaterialsWholesale';
	/**
	 * Constant for value 'Wholesale_Other'
	 * @return string 'Wholesale_Other'
	 */
	const VALUE_WHOLESALE_OTHER = 'Wholesale_Other';
	/**
	 * Constant for value 'BusinessServices'
	 * @return string 'BusinessServices'
	 */
	const VALUE_BUSINESSSERVICES = 'BusinessServices';
	/**
	 * Constant for value 'RentalAndLeasingServices'
	 * @return string 'RentalAndLeasingServices'
	 */
	const VALUE_RENTALANDLEASINGSERVICES = 'RentalAndLeasingServices';
	/**
	 * Constant for value 'PersonalServices'
	 * @return string 'PersonalServices'
	 */
	const VALUE_PERSONALSERVICES = 'PersonalServices';
	/**
	 * Constant for value 'ConsumerServices'
	 * @return string 'ConsumerServices'
	 */
	const VALUE_CONSUMERSERVICES = 'ConsumerServices';
	/**
	 * Constant for value 'StaffingAndOutsourcingServices'
	 * @return string 'StaffingAndOutsourcingServices'
	 */
	const VALUE_STAFFINGANDOUTSOURCINGSERVICES = 'StaffingAndOutsourcingServices';
	/**
	 * Constant for value 'SecurityAndProtectionServices'
	 * @return string 'SecurityAndProtectionServices'
	 */
	const VALUE_SECURITYANDPROTECTIONSERVICES = 'SecurityAndProtectionServices';
	/**
	 * Constant for value 'EducationAndTrainingServices'
	 * @return string 'EducationAndTrainingServices'
	 */
	const VALUE_EDUCATIONANDTRAININGSERVICES = 'EducationAndTrainingServices';
	/**
	 * Constant for value 'TechnicalServices'
	 * @return string 'TechnicalServices'
	 */
	const VALUE_TECHNICALSERVICES = 'TechnicalServices';
	/**
	 * Constant for value 'ResearchServices'
	 * @return string 'ResearchServices'
	 */
	const VALUE_RESEARCHSERVICES = 'ResearchServices';
	/**
	 * Constant for value 'ManagementServices'
	 * @return string 'ManagementServices'
	 */
	const VALUE_MANAGEMENTSERVICES = 'ManagementServices';
	/**
	 * Constant for value 'MajorAirlines'
	 * @return string 'MajorAirlines'
	 */
	const VALUE_MAJORAIRLINES = 'MajorAirlines';
	/**
	 * Constant for value 'RegionalAirlines'
	 * @return string 'RegionalAirlines'
	 */
	const VALUE_REGIONALAIRLINES = 'RegionalAirlines';
	/**
	 * Constant for value 'AirServices_Other'
	 * @return string 'AirServices_Other'
	 */
	const VALUE_AIRSERVICES_OTHER = 'AirServices_Other';
	/**
	 * Constant for value 'AirDeliveryAndFreightServices'
	 * @return string 'AirDeliveryAndFreightServices'
	 */
	const VALUE_AIRDELIVERYANDFREIGHTSERVICES = 'AirDeliveryAndFreightServices';
	/**
	 * Constant for value 'Trucking'
	 * @return string 'Trucking'
	 */
	const VALUE_TRUCKING = 'Trucking';
	/**
	 * Constant for value 'Shipping'
	 * @return string 'Shipping'
	 */
	const VALUE_SHIPPING = 'Shipping';
	/**
	 * Constant for value 'Railroads'
	 * @return string 'Railroads'
	 */
	const VALUE_RAILROADS = 'Railroads';
	/**
	 * Constant for value 'DiversifiedComputerSystems'
	 * @return string 'DiversifiedComputerSystems'
	 */
	const VALUE_DIVERSIFIEDCOMPUTERSYSTEMS = 'DiversifiedComputerSystems';
	/**
	 * Constant for value 'PersonalComputers'
	 * @return string 'PersonalComputers'
	 */
	const VALUE_PERSONALCOMPUTERS = 'PersonalComputers';
	/**
	 * Constant for value 'ComputerBasedSystems'
	 * @return string 'ComputerBasedSystems'
	 */
	const VALUE_COMPUTERBASEDSYSTEMS = 'ComputerBasedSystems';
	/**
	 * Constant for value 'DataStorageDevices'
	 * @return string 'DataStorageDevices'
	 */
	const VALUE_DATASTORAGEDEVICES = 'DataStorageDevices';
	/**
	 * Constant for value 'NetworkingAndCommunicationDevices'
	 * @return string 'NetworkingAndCommunicationDevices'
	 */
	const VALUE_NETWORKINGANDCOMMUNICATIONDEVICES = 'NetworkingAndCommunicationDevices';
	/**
	 * Constant for value 'ComputerPeripherals'
	 * @return string 'ComputerPeripherals'
	 */
	const VALUE_COMPUTERPERIPHERALS = 'ComputerPeripherals';
	/**
	 * Constant for value 'MultimediaAndGraphicsSoftware'
	 * @return string 'MultimediaAndGraphicsSoftware'
	 */
	const VALUE_MULTIMEDIAANDGRAPHICSSOFTWARE = 'MultimediaAndGraphicsSoftware';
	/**
	 * Constant for value 'ApplicationSoftware'
	 * @return string 'ApplicationSoftware'
	 */
	const VALUE_APPLICATIONSOFTWARE = 'ApplicationSoftware';
	/**
	 * Constant for value 'TechnicalAndSystemSoftware'
	 * @return string 'TechnicalAndSystemSoftware'
	 */
	const VALUE_TECHNICALANDSYSTEMSOFTWARE = 'TechnicalAndSystemSoftware';
	/**
	 * Constant for value 'SecuritySoftwareAndServices'
	 * @return string 'SecuritySoftwareAndServices'
	 */
	const VALUE_SECURITYSOFTWAREANDSERVICES = 'SecuritySoftwareAndServices';
	/**
	 * Constant for value 'InformationTechnologyServices'
	 * @return string 'InformationTechnologyServices'
	 */
	const VALUE_INFORMATIONTECHNOLOGYSERVICES = 'InformationTechnologyServices';
	/**
	 * Constant for value 'HealthcareInformationServices'
	 * @return string 'HealthcareInformationServices'
	 */
	const VALUE_HEALTHCAREINFORMATIONSERVICES = 'HealthcareInformationServices';
	/**
	 * Constant for value 'BusinessSoftwareAndServices'
	 * @return string 'BusinessSoftwareAndServices'
	 */
	const VALUE_BUSINESSSOFTWAREANDSERVICES = 'BusinessSoftwareAndServices';
	/**
	 * Constant for value 'InformationAndDeliveryServices'
	 * @return string 'InformationAndDeliveryServices'
	 */
	const VALUE_INFORMATIONANDDELIVERYSERVICES = 'InformationAndDeliveryServices';
	/**
	 * Constant for value 'Semiconductor_BroadLine'
	 * @return string 'Semiconductor_BroadLine'
	 */
	const VALUE_SEMICONDUCTOR_BROADLINE = 'Semiconductor_BroadLine';
	/**
	 * Constant for value 'Semiconductor_MemoryChips'
	 * @return string 'Semiconductor_MemoryChips'
	 */
	const VALUE_SEMICONDUCTOR_MEMORYCHIPS = 'Semiconductor_MemoryChips';
	/**
	 * Constant for value 'Semiconductor_Specialized'
	 * @return string 'Semiconductor_Specialized'
	 */
	const VALUE_SEMICONDUCTOR_SPECIALIZED = 'Semiconductor_Specialized';
	/**
	 * Constant for value 'Semiconductor_IntegratedCircuits'
	 * @return string 'Semiconductor_IntegratedCircuits'
	 */
	const VALUE_SEMICONDUCTOR_INTEGRATEDCIRCUITS = 'Semiconductor_IntegratedCircuits';
	/**
	 * Constant for value 'SemiconductorEquipmentAndMaterials'
	 * @return string 'SemiconductorEquipmentAndMaterials'
	 */
	const VALUE_SEMICONDUCTOREQUIPMENTANDMATERIALS = 'SemiconductorEquipmentAndMaterials';
	/**
	 * Constant for value 'PrintedCircuitBoards'
	 * @return string 'PrintedCircuitBoards'
	 */
	const VALUE_PRINTEDCIRCUITBOARDS = 'PrintedCircuitBoards';
	/**
	 * Constant for value 'DiversifiedElectronics'
	 * @return string 'DiversifiedElectronics'
	 */
	const VALUE_DIVERSIFIEDELECTRONICS = 'DiversifiedElectronics';
	/**
	 * Constant for value 'ScientificAndTechnicalInstruments'
	 * @return string 'ScientificAndTechnicalInstruments'
	 */
	const VALUE_SCIENTIFICANDTECHNICALINSTRUMENTS = 'ScientificAndTechnicalInstruments';
	/**
	 * Constant for value 'WirelessCommunications'
	 * @return string 'WirelessCommunications'
	 */
	const VALUE_WIRELESSCOMMUNICATIONS = 'WirelessCommunications';
	/**
	 * Constant for value 'CommunicationEquipment'
	 * @return string 'CommunicationEquipment'
	 */
	const VALUE_COMMUNICATIONEQUIPMENT = 'CommunicationEquipment';
	/**
	 * Constant for value 'ProcessingSystemsAndProducts'
	 * @return string 'ProcessingSystemsAndProducts'
	 */
	const VALUE_PROCESSINGSYSTEMSANDPRODUCTS = 'ProcessingSystemsAndProducts';
	/**
	 * Constant for value 'TelecomServices_Domestic'
	 * @return string 'TelecomServices_Domestic'
	 */
	const VALUE_TELECOMSERVICES_DOMESTIC = 'TelecomServices_Domestic';
	/**
	 * Constant for value 'LongDistanceCarriers'
	 * @return string 'LongDistanceCarriers'
	 */
	const VALUE_LONGDISTANCECARRIERS = 'LongDistanceCarriers';
	/**
	 * Constant for value 'TelecomServices_Foreign'
	 * @return string 'TelecomServices_Foreign'
	 */
	const VALUE_TELECOMSERVICES_FOREIGN = 'TelecomServices_Foreign';
	/**
	 * Constant for value 'DiversifiedCommunicationServices'
	 * @return string 'DiversifiedCommunicationServices'
	 */
	const VALUE_DIVERSIFIEDCOMMUNICATIONSERVICES = 'DiversifiedCommunicationServices';
	/**
	 * Constant for value 'InternetServiceProviders'
	 * @return string 'InternetServiceProviders'
	 */
	const VALUE_INTERNETSERVICEPROVIDERS = 'InternetServiceProviders';
	/**
	 * Constant for value 'InternetInformationProviders'
	 * @return string 'InternetInformationProviders'
	 */
	const VALUE_INTERNETINFORMATIONPROVIDERS = 'InternetInformationProviders';
	/**
	 * Constant for value 'InternetSoftwareAndServices'
	 * @return string 'InternetSoftwareAndServices'
	 */
	const VALUE_INTERNETSOFTWAREANDSERVICES = 'InternetSoftwareAndServices';
	/**
	 * Constant for value 'ForeignUtilities'
	 * @return string 'ForeignUtilities'
	 */
	const VALUE_FOREIGNUTILITIES = 'ForeignUtilities';
	/**
	 * Constant for value 'ElectricUtilities'
	 * @return string 'ElectricUtilities'
	 */
	const VALUE_ELECTRICUTILITIES = 'ElectricUtilities';
	/**
	 * Constant for value 'GasUtilities'
	 * @return string 'GasUtilities'
	 */
	const VALUE_GASUTILITIES = 'GasUtilities';
	/**
	 * Constant for value 'DiversifiedUtilitities'
	 * @return string 'DiversifiedUtilitities'
	 */
	const VALUE_DIVERSIFIEDUTILITITIES = 'DiversifiedUtilitities';
	/**
	 * Constant for value 'WaterUtilities'
	 * @return string 'WaterUtilities'
	 */
	const VALUE_WATERUTILITIES = 'WaterUtilities';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeIndustries
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_CHEMICALS_MAJORDIVERSIFIED,self::VALUE_SYNTHETICS,self::VALUE_AGRICULTURALCHEMICALS,self::VALUE_SPECIALTYCHEMICALS,self::VALUE_MAJORINTEGRATEDOILANDGAS,self::VALUE_INDEPENDENTOILANDGAS,self::VALUE_OILANDGASREFININGANDMARKETING,self::VALUE_OILANDGASDRILLINGANDEXPLORATION,self::VALUE_OILANDGASEQUIPMENTANDSERVICES,self::VALUE_OILANDGASPIPELINES,self::VALUE_STEELANDIRON,self::VALUE_COPPER,self::VALUE_ALUMINUM,self::VALUE_INDUSTRIALMETALSANDMINERALS,self::VALUE_GOLD,self::VALUE_SILVER,self::VALUE_NONMETALLICMINERALMINING,self::VALUE_CONGLOMERATES,self::VALUE_APPLIANCES,self::VALUE_HOMEFURNISHINGSANDFIXTURES,self::VALUE_HOUSEWARESANDACCESSORIES,self::VALUE_BUSINESSEQUIPMENT,self::VALUE_ELECTRONICEQUIPMENT,self::VALUE_TOYSANDGAMES,self::VALUE_SPORTINGGOODS,self::VALUE_RECREATIONALGOODS_OTHER,self::VALUE_PHOTOGRAPHICEQUIPMENTANDSUPPLIES,self::VALUE_TEXTILE_APPARELCLOTHING,self::VALUE_TEXTILE_APPARELFOOTWEARANDACCESSORIES,self::VALUE_RUBBERANDPLASTICS,self::VALUE_PERSONALPRODUCTS,self::VALUE_PAPERANDPAPERPRODUCTS,self::VALUE_PACKAGINGANDCONTAINERS,self::VALUE_CLEANINGPRODUCTS,self::VALUE_OFFICESUPPLIES,self::VALUE_AUTOMANUFACTURERS_MAJOR,self::VALUE_TRUCKSANDOTHERVEHICLES,self::VALUE_RECREATIONALVEHICLES,self::VALUE_AUTOPARTS,self::VALUE_FOOD_MAJORDIVERSIFIED,self::VALUE_FARMPRODUCTS,self::VALUE_PROCESSEDANDPACKAGEDGOODS,self::VALUE_MEATPRODUCTS,self::VALUE_DAIRYPRODUCTS,self::VALUE_CONFECTIONERS,self::VALUE_BEVERAGES_BREWERS,self::VALUE_BEVERAGES_WINERIESANDDISTILLERS,self::VALUE_BEVERAGES_SOFTDRINKS,self::VALUE_CIGARETTES,self::VALUE_TOBACCOPRODUCTS_OTHER,self::VALUE_MONEYCENTERBANKS,self::VALUE_REGIONAL_NORTHEASTBANKS,self::VALUE_REGIONAL_MID_ATLANTICBANKS,self::VALUE_REGIONAL_SOUTHEASTBANKS,self::VALUE_REGIONAL_MIDWESTBANKS,self::VALUE_REGIONAL_SOUTHWESTBANKS,self::VALUE_REGIONAL_PACIFICBANKS,self::VALUE_FOREIGNMONEYCENTERBANKS,self::VALUE_FOREIGNREGIONALBANKS,self::VALUE_SAVINGSANDLOANS,self::VALUE_INVESTMENTBROKERAGE_NATIONAL,self::VALUE_INVESTMENTBROKERAGE_REGIONAL,self::VALUE_ASSETMANAGEMENT,self::VALUE_DIVERSIFIEDINVESTMENTS,self::VALUE_CREDITSERVICES,self::VALUE_CLOSED_ENDFUND_DEBT,self::VALUE_CLOSED_ENDFUND_EQUITY,self::VALUE_CLOSED_ENDFUND_FOREIGN,self::VALUE_LIFEINSURANCE,self::VALUE_ACCIDENTANDHEALTHINSURANCE,self::VALUE_PROPERTYANDCASUALTYINSURANCE,self::VALUE_SURETYANDTITLEINSURANCE,self::VALUE_INSURANCEBROKERS,self::VALUE_REIT_DIVERSIFIED,self::VALUE_REIT_OFFICE,self::VALUE_REIT_HEALTHCAREFACILITIES,self::VALUE_REIT_HOTEL_MOTEL,self::VALUE_REIT_INDUSTRIAL,self::VALUE_REIT_RESIDENTIAL,self::VALUE_REIT_RETAIL,self::VALUE_MORTGAGEINVESTMENT,self::VALUE_PROPERTYMANAGEMENT,self::VALUE_REALESTATEDEVELOPMENT,self::VALUE_DRUGMANUFACTURERS_MAJOR,self::VALUE_DRUGMANUFACTURERS_OTHER,self::VALUE_DRUGS_GENERIC,self::VALUE_DRUGDELIVERYANDACCESSORIES,self::VALUE_DRUGRELATEDPRODUCTS,self::VALUE_BIOTECHNOLOGY,self::VALUE_DIAGNOSTICSUBSTANCES,self::VALUE_MEDICALINSTRUMENTSANDSUPPLIES,self::VALUE_MEDICALAPPLIANCESANDEQUIPMENT,self::VALUE_HEALTHCAREPLANS,self::VALUE_LONG_TERMCAREFACILITIES,self::VALUE_HOSPITALS,self::VALUE_MEDICALLABORATORIESANDRESEARCH,self::VALUE_HOMEHEALTHCARE,self::VALUE_MEDICALPRACTITIONERS,self::VALUE_SPECIALIZEDHEALTHSERVICES,self::VALUE_AEROSPACE_DEFENSE_MAJORDIVERSIFIED,self::VALUE_AEROSPACE_DEFENSEPRODUCTSANDSERVICES,self::VALUE_FARMANDCONSTRUCTIONMACHINERY,self::VALUE_INDUSTRIALEQUIPMENTANDCOMPONENTS,self::VALUE_DIVERSIFIEDMACHINERY,self::VALUE_POLLUTIONANDTREATMENTCONTROLS,self::VALUE_MACHINETOOLSANDACCESSORIES,self::VALUE_SMALLTOOLSANDACCESSORIES,self::VALUE_METALFABRICATION,self::VALUE_INDUSTRIALELECTRICALEQUIPMENT,self::VALUE_TEXTILEINDUSTRIAL,self::VALUE_RESIDENTIALCONSTRUCTION,self::VALUE_MANUFACTUREDHOUSING,self::VALUE_LUMBER_WOODPRODUCTION,self::VALUE_CEMENT,self::VALUE_GENERALBUILDINGMATERIALS,self::VALUE_HEAVYCONSTRUCTION,self::VALUE_GENERALCONTRACTORS,self::VALUE_WASTEMANAGEMENT,self::VALUE_LODGING,self::VALUE_RESORTSANDCASINOS,self::VALUE_RESTAURANTS,self::VALUE_SPECIALTYEATERIES,self::VALUE_GAMINGACTIVITIES,self::VALUE_SPORTINGACTIVITIES,self::VALUE_GENERALENTERTAINMENT,self::VALUE_ADVERTISINGAGENCIES,self::VALUE_MARKETINGSERVICES,self::VALUE_ENTERTAINMENT_DIVERSIFIED,self::VALUE_BROADCASTING_TV,self::VALUE_BROADCASTING_RADIO,self::VALUE_CATVSYSTEMS,self::VALUE_MOVIEPRODUCTION_THEATERS,self::VALUE_PUBLISHING_NEWSPAPERS,self::VALUE_PUBLISHING_PERIODICALS,self::VALUE_PUBLISHING_BOOKS,self::VALUE_APPARELSTORES,self::VALUE_DEPARTMENTSTORES,self::VALUE_DISCOUNT_VARIETYSTORES,self::VALUE_DRUGSTORES,self::VALUE_GROCERYSTORES,self::VALUE_ELECTRONICSSTORES,self::VALUE_HOMEIMPROVEMENTSTORES,self::VALUE_HOMEFURNISHINGSTORES,self::VALUE_AUTOPARTSSTORES,self::VALUE_CATALOGANDMAILORDERHOUSES,self::VALUE_SPORTINGGOODSSTORES,self::VALUE_TOYANDHOBBYSTORES,self::VALUE_JEWELRYSTORES,self::VALUE_MUSICANDVIDEOSTORES,self::VALUE_AUTODEALERSHIPS,self::VALUE_SPECIALTYRETAIL_OTHER,self::VALUE_AUTOPARTSWHOLESALE,self::VALUE_BUILDINGMATERIALSWHOLESALE,self::VALUE_INDUSTRIALEQUIPMENTWHOLESALE,self::VALUE_ELECTRONICSWHOLESALE,self::VALUE_MEDICALEQUIPMENTWHOLESALE,self::VALUE_COMPUTERSWHOLESALE,self::VALUE_DRUGSWHOLESALE,self::VALUE_FOODWHOLESALE,self::VALUE_BASICMATERIALSWHOLESALE,self::VALUE_WHOLESALE_OTHER,self::VALUE_BUSINESSSERVICES,self::VALUE_RENTALANDLEASINGSERVICES,self::VALUE_PERSONALSERVICES,self::VALUE_CONSUMERSERVICES,self::VALUE_STAFFINGANDOUTSOURCINGSERVICES,self::VALUE_SECURITYANDPROTECTIONSERVICES,self::VALUE_EDUCATIONANDTRAININGSERVICES,self::VALUE_TECHNICALSERVICES,self::VALUE_RESEARCHSERVICES,self::VALUE_MANAGEMENTSERVICES,self::VALUE_MAJORAIRLINES,self::VALUE_REGIONALAIRLINES,self::VALUE_AIRSERVICES_OTHER,self::VALUE_AIRDELIVERYANDFREIGHTSERVICES,self::VALUE_TRUCKING,self::VALUE_SHIPPING,self::VALUE_RAILROADS,self::VALUE_DIVERSIFIEDCOMPUTERSYSTEMS,self::VALUE_PERSONALCOMPUTERS,self::VALUE_COMPUTERBASEDSYSTEMS,self::VALUE_DATASTORAGEDEVICES,self::VALUE_NETWORKINGANDCOMMUNICATIONDEVICES,self::VALUE_COMPUTERPERIPHERALS,self::VALUE_MULTIMEDIAANDGRAPHICSSOFTWARE,self::VALUE_APPLICATIONSOFTWARE,self::VALUE_TECHNICALANDSYSTEMSOFTWARE,self::VALUE_SECURITYSOFTWAREANDSERVICES,self::VALUE_INFORMATIONTECHNOLOGYSERVICES,self::VALUE_HEALTHCAREINFORMATIONSERVICES,self::VALUE_BUSINESSSOFTWAREANDSERVICES,self::VALUE_INFORMATIONANDDELIVERYSERVICES,self::VALUE_SEMICONDUCTOR_BROADLINE,self::VALUE_SEMICONDUCTOR_MEMORYCHIPS,self::VALUE_SEMICONDUCTOR_SPECIALIZED,self::VALUE_SEMICONDUCTOR_INTEGRATEDCIRCUITS,self::VALUE_SEMICONDUCTOREQUIPMENTANDMATERIALS,self::VALUE_PRINTEDCIRCUITBOARDS,self::VALUE_DIVERSIFIEDELECTRONICS,self::VALUE_SCIENTIFICANDTECHNICALINSTRUMENTS,self::VALUE_WIRELESSCOMMUNICATIONS,self::VALUE_COMMUNICATIONEQUIPMENT,self::VALUE_PROCESSINGSYSTEMSANDPRODUCTS,self::VALUE_TELECOMSERVICES_DOMESTIC,self::VALUE_LONGDISTANCECARRIERS,self::VALUE_TELECOMSERVICES_FOREIGN,self::VALUE_DIVERSIFIEDCOMMUNICATIONSERVICES,self::VALUE_INTERNETSERVICEPROVIDERS,self::VALUE_INTERNETINFORMATIONPROVIDERS,self::VALUE_INTERNETSOFTWAREANDSERVICES,self::VALUE_FOREIGNUTILITIES,self::VALUE_ELECTRICUTILITIES,self::VALUE_GASUTILITIES,self::VALUE_DIVERSIFIEDUTILITITIES,self::VALUE_WATERUTILITIES));
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