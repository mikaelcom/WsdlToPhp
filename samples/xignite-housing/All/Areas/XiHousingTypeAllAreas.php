<?php
/**
 * Class file for XiHousingTypeAllAreas
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeAllAreas
 * @date 08/07/2012
 */
class XiHousingTypeAllAreas extends XiHousingWsdlClass
{
	/**
	 * Constant for value 'Undefined'
	 * @return string 'Undefined'
	 */
	const VALUE_UNDEFINED = 'Undefined';
	/**
	 * Constant for value 'UnitedStates'
	 * @return string 'UnitedStates'
	 */
	const VALUE_UNITEDSTATES = 'UnitedStates';
	/**
	 * Constant for value 'Northeast'
	 * @return string 'Northeast'
	 */
	const VALUE_NORTHEAST = 'Northeast';
	/**
	 * Constant for value 'Midwest'
	 * @return string 'Midwest'
	 */
	const VALUE_MIDWEST = 'Midwest';
	/**
	 * Constant for value 'South'
	 * @return string 'South'
	 */
	const VALUE_SOUTH = 'South';
	/**
	 * Constant for value 'West'
	 * @return string 'West'
	 */
	const VALUE_WEST = 'West';
	/**
	 * Constant for value 'NewEngland'
	 * @return string 'NewEngland'
	 */
	const VALUE_NEWENGLAND = 'NewEngland';
	/**
	 * Constant for value 'MiddleAtlantic'
	 * @return string 'MiddleAtlantic'
	 */
	const VALUE_MIDDLEATLANTIC = 'MiddleAtlantic';
	/**
	 * Constant for value 'EastNorthCentral'
	 * @return string 'EastNorthCentral'
	 */
	const VALUE_EASTNORTHCENTRAL = 'EastNorthCentral';
	/**
	 * Constant for value 'WestNorthCentral'
	 * @return string 'WestNorthCentral'
	 */
	const VALUE_WESTNORTHCENTRAL = 'WestNorthCentral';
	/**
	 * Constant for value 'SouthAtlantic'
	 * @return string 'SouthAtlantic'
	 */
	const VALUE_SOUTHATLANTIC = 'SouthAtlantic';
	/**
	 * Constant for value 'EastSouthCentral'
	 * @return string 'EastSouthCentral'
	 */
	const VALUE_EASTSOUTHCENTRAL = 'EastSouthCentral';
	/**
	 * Constant for value 'WestSouthCentral'
	 * @return string 'WestSouthCentral'
	 */
	const VALUE_WESTSOUTHCENTRAL = 'WestSouthCentral';
	/**
	 * Constant for value 'Mountain'
	 * @return string 'Mountain'
	 */
	const VALUE_MOUNTAIN = 'Mountain';
	/**
	 * Constant for value 'Pacific'
	 * @return string 'Pacific'
	 */
	const VALUE_PACIFIC = 'Pacific';
	/**
	 * Constant for value 'Connecticut'
	 * @return string 'Connecticut'
	 */
	const VALUE_CONNECTICUT = 'Connecticut';
	/**
	 * Constant for value 'Alabama'
	 * @return string 'Alabama'
	 */
	const VALUE_ALABAMA = 'Alabama';
	/**
	 * Constant for value 'Alaska'
	 * @return string 'Alaska'
	 */
	const VALUE_ALASKA = 'Alaska';
	/**
	 * Constant for value 'Arizona'
	 * @return string 'Arizona'
	 */
	const VALUE_ARIZONA = 'Arizona';
	/**
	 * Constant for value 'Arkansas'
	 * @return string 'Arkansas'
	 */
	const VALUE_ARKANSAS = 'Arkansas';
	/**
	 * Constant for value 'California'
	 * @return string 'California'
	 */
	const VALUE_CALIFORNIA = 'California';
	/**
	 * Constant for value 'Colorado'
	 * @return string 'Colorado'
	 */
	const VALUE_COLORADO = 'Colorado';
	/**
	 * Constant for value 'Delaware'
	 * @return string 'Delaware'
	 */
	const VALUE_DELAWARE = 'Delaware';
	/**
	 * Constant for value 'DistrictofColumbia'
	 * @return string 'DistrictofColumbia'
	 */
	const VALUE_DISTRICTOFCOLUMBIA = 'DistrictofColumbia';
	/**
	 * Constant for value 'Florida'
	 * @return string 'Florida'
	 */
	const VALUE_FLORIDA = 'Florida';
	/**
	 * Constant for value 'Georgia'
	 * @return string 'Georgia'
	 */
	const VALUE_GEORGIA = 'Georgia';
	/**
	 * Constant for value 'Hawaii'
	 * @return string 'Hawaii'
	 */
	const VALUE_HAWAII = 'Hawaii';
	/**
	 * Constant for value 'Idaho'
	 * @return string 'Idaho'
	 */
	const VALUE_IDAHO = 'Idaho';
	/**
	 * Constant for value 'Illinois'
	 * @return string 'Illinois'
	 */
	const VALUE_ILLINOIS = 'Illinois';
	/**
	 * Constant for value 'Indiana'
	 * @return string 'Indiana'
	 */
	const VALUE_INDIANA = 'Indiana';
	/**
	 * Constant for value 'Iowa'
	 * @return string 'Iowa'
	 */
	const VALUE_IOWA = 'Iowa';
	/**
	 * Constant for value 'Kansas'
	 * @return string 'Kansas'
	 */
	const VALUE_KANSAS = 'Kansas';
	/**
	 * Constant for value 'Kentucky'
	 * @return string 'Kentucky'
	 */
	const VALUE_KENTUCKY = 'Kentucky';
	/**
	 * Constant for value 'Louisiana'
	 * @return string 'Louisiana'
	 */
	const VALUE_LOUISIANA = 'Louisiana';
	/**
	 * Constant for value 'Maine'
	 * @return string 'Maine'
	 */
	const VALUE_MAINE = 'Maine';
	/**
	 * Constant for value 'Maryland'
	 * @return string 'Maryland'
	 */
	const VALUE_MARYLAND = 'Maryland';
	/**
	 * Constant for value 'Massachusetts'
	 * @return string 'Massachusetts'
	 */
	const VALUE_MASSACHUSETTS = 'Massachusetts';
	/**
	 * Constant for value 'Michigan'
	 * @return string 'Michigan'
	 */
	const VALUE_MICHIGAN = 'Michigan';
	/**
	 * Constant for value 'Minnesota'
	 * @return string 'Minnesota'
	 */
	const VALUE_MINNESOTA = 'Minnesota';
	/**
	 * Constant for value 'Mississippi'
	 * @return string 'Mississippi'
	 */
	const VALUE_MISSISSIPPI = 'Mississippi';
	/**
	 * Constant for value 'Missouri'
	 * @return string 'Missouri'
	 */
	const VALUE_MISSOURI = 'Missouri';
	/**
	 * Constant for value 'Montana'
	 * @return string 'Montana'
	 */
	const VALUE_MONTANA = 'Montana';
	/**
	 * Constant for value 'Nebraska'
	 * @return string 'Nebraska'
	 */
	const VALUE_NEBRASKA = 'Nebraska';
	/**
	 * Constant for value 'Nevada'
	 * @return string 'Nevada'
	 */
	const VALUE_NEVADA = 'Nevada';
	/**
	 * Constant for value 'NewHampshire'
	 * @return string 'NewHampshire'
	 */
	const VALUE_NEWHAMPSHIRE = 'NewHampshire';
	/**
	 * Constant for value 'NewJersey'
	 * @return string 'NewJersey'
	 */
	const VALUE_NEWJERSEY = 'NewJersey';
	/**
	 * Constant for value 'NewMexico'
	 * @return string 'NewMexico'
	 */
	const VALUE_NEWMEXICO = 'NewMexico';
	/**
	 * Constant for value 'NewYork'
	 * @return string 'NewYork'
	 */
	const VALUE_NEWYORK = 'NewYork';
	/**
	 * Constant for value 'NorthCarolina'
	 * @return string 'NorthCarolina'
	 */
	const VALUE_NORTHCAROLINA = 'NorthCarolina';
	/**
	 * Constant for value 'NorthDakota'
	 * @return string 'NorthDakota'
	 */
	const VALUE_NORTHDAKOTA = 'NorthDakota';
	/**
	 * Constant for value 'Ohio'
	 * @return string 'Ohio'
	 */
	const VALUE_OHIO = 'Ohio';
	/**
	 * Constant for value 'Oklahoma'
	 * @return string 'Oklahoma'
	 */
	const VALUE_OKLAHOMA = 'Oklahoma';
	/**
	 * Constant for value 'Oregon'
	 * @return string 'Oregon'
	 */
	const VALUE_OREGON = 'Oregon';
	/**
	 * Constant for value 'Pennsylvania'
	 * @return string 'Pennsylvania'
	 */
	const VALUE_PENNSYLVANIA = 'Pennsylvania';
	/**
	 * Constant for value 'RhodeIsland'
	 * @return string 'RhodeIsland'
	 */
	const VALUE_RHODEISLAND = 'RhodeIsland';
	/**
	 * Constant for value 'SouthCarolina'
	 * @return string 'SouthCarolina'
	 */
	const VALUE_SOUTHCAROLINA = 'SouthCarolina';
	/**
	 * Constant for value 'SouthDakota'
	 * @return string 'SouthDakota'
	 */
	const VALUE_SOUTHDAKOTA = 'SouthDakota';
	/**
	 * Constant for value 'Tennessee'
	 * @return string 'Tennessee'
	 */
	const VALUE_TENNESSEE = 'Tennessee';
	/**
	 * Constant for value 'Texas'
	 * @return string 'Texas'
	 */
	const VALUE_TEXAS = 'Texas';
	/**
	 * Constant for value 'Utah'
	 * @return string 'Utah'
	 */
	const VALUE_UTAH = 'Utah';
	/**
	 * Constant for value 'Vermont'
	 * @return string 'Vermont'
	 */
	const VALUE_VERMONT = 'Vermont';
	/**
	 * Constant for value 'Virginia'
	 * @return string 'Virginia'
	 */
	const VALUE_VIRGINIA = 'Virginia';
	/**
	 * Constant for value 'Washington'
	 * @return string 'Washington'
	 */
	const VALUE_WASHINGTON = 'Washington';
	/**
	 * Constant for value 'WestVirginia'
	 * @return string 'WestVirginia'
	 */
	const VALUE_WESTVIRGINIA = 'WestVirginia';
	/**
	 * Constant for value 'Wisconsin'
	 * @return string 'Wisconsin'
	 */
	const VALUE_WISCONSIN = 'Wisconsin';
	/**
	 * Constant for value 'Wyoming'
	 * @return string 'Wyoming'
	 */
	const VALUE_WYOMING = 'Wyoming';
	/**
	 * Constant for value 'Akron_OH'
	 * @return string 'Akron_OH'
	 */
	const VALUE_AKRON_OH = 'Akron_OH';
	/**
	 * Constant for value 'Albany_Schenectady_Troy_NY'
	 * @return string 'Albany_Schenectady_Troy_NY'
	 */
	const VALUE_ALBANY_SCHENECTADY_TROY_NY = 'Albany_Schenectady_Troy_NY';
	/**
	 * Constant for value 'Albuquerque_NM'
	 * @return string 'Albuquerque_NM'
	 */
	const VALUE_ALBUQUERQUE_NM = 'Albuquerque_NM';
	/**
	 * Constant for value 'Allentown_Bethlehem_Easton_PA_NJ'
	 * @return string 'Allentown_Bethlehem_Easton_PA_NJ'
	 */
	const VALUE_ALLENTOWN_BETHLEHEM_EASTON_PA_NJ = 'Allentown_Bethlehem_Easton_PA_NJ';
	/**
	 * Constant for value 'Amarillo_TX'
	 * @return string 'Amarillo_TX'
	 */
	const VALUE_AMARILLO_TX = 'Amarillo_TX';
	/**
	 * Constant for value 'Anaheim_SantaAna_CA'
	 * @return string 'Anaheim_SantaAna_CA'
	 */
	const VALUE_ANAHEIM_SANTAANA_CA = 'Anaheim_SantaAna_CA';
	/**
	 * Constant for value 'Appleton_WI'
	 * @return string 'Appleton_WI'
	 */
	const VALUE_APPLETON_WI = 'Appleton_WI';
	/**
	 * Constant for value 'Atlanta_SandySprings_Marietta_GA'
	 * @return string 'Atlanta_SandySprings_Marietta_GA'
	 */
	const VALUE_ATLANTA_SANDYSPRINGS_MARIETTA_GA = 'Atlanta_SandySprings_Marietta_GA';
	/**
	 * Constant for value 'AtlanticCity_NJ'
	 * @return string 'AtlanticCity_NJ'
	 */
	const VALUE_ATLANTICCITY_NJ = 'AtlanticCity_NJ';
	/**
	 * Constant for value 'Austin_RoundRock_TX'
	 * @return string 'Austin_RoundRock_TX'
	 */
	const VALUE_AUSTIN_ROUNDROCK_TX = 'Austin_RoundRock_TX';
	/**
	 * Constant for value 'Baltimore_Towson_MD'
	 * @return string 'Baltimore_Towson_MD'
	 */
	const VALUE_BALTIMORE_TOWSON_MD = 'Baltimore_Towson_MD';
	/**
	 * Constant for value 'BarnstableTown_MA'
	 * @return string 'BarnstableTown_MA'
	 */
	const VALUE_BARNSTABLETOWN_MA = 'BarnstableTown_MA';
	/**
	 * Constant for value 'BatonRouge_LA'
	 * @return string 'BatonRouge_LA'
	 */
	const VALUE_BATONROUGE_LA = 'BatonRouge_LA';
	/**
	 * Constant for value 'Beaumont_PortArthur_TX'
	 * @return string 'Beaumont_PortArthur_TX'
	 */
	const VALUE_BEAUMONT_PORTARTHUR_TX = 'Beaumont_PortArthur_TX';
	/**
	 * Constant for value 'Binghamton_NY'
	 * @return string 'Binghamton_NY'
	 */
	const VALUE_BINGHAMTON_NY = 'Binghamton_NY';
	/**
	 * Constant for value 'Birmingham_Hoover_AL'
	 * @return string 'Birmingham_Hoover_AL'
	 */
	const VALUE_BIRMINGHAM_HOOVER_AL = 'Birmingham_Hoover_AL';
	/**
	 * Constant for value 'Bismarck_ND'
	 * @return string 'Bismarck_ND'
	 */
	const VALUE_BISMARCK_ND = 'Bismarck_ND';
	/**
	 * Constant for value 'Bloomington_Normal_IL'
	 * @return string 'Bloomington_Normal_IL'
	 */
	const VALUE_BLOOMINGTON_NORMAL_IL = 'Bloomington_Normal_IL';
	/**
	 * Constant for value 'BoiseCity_Nampa_ID'
	 * @return string 'BoiseCity_Nampa_ID'
	 */
	const VALUE_BOISECITY_NAMPA_ID = 'BoiseCity_Nampa_ID';
	/**
	 * Constant for value 'Boston_Cambridge_Quincy_MA_NH'
	 * @return string 'Boston_Cambridge_Quincy_MA_NH'
	 */
	const VALUE_BOSTON_CAMBRIDGE_QUINCY_MA_NH = 'Boston_Cambridge_Quincy_MA_NH';
	/**
	 * Constant for value 'Boulder_CO'
	 * @return string 'Boulder_CO'
	 */
	const VALUE_BOULDER_CO = 'Boulder_CO';
	/**
	 * Constant for value 'Bridgeport_Stamford_Norwalk_CT'
	 * @return string 'Bridgeport_Stamford_Norwalk_CT'
	 */
	const VALUE_BRIDGEPORT_STAMFORD_NORWALK_CT = 'Bridgeport_Stamford_Norwalk_CT';
	/**
	 * Constant for value 'Buffalo_NiagaraFalls_NY'
	 * @return string 'Buffalo_NiagaraFalls_NY'
	 */
	const VALUE_BUFFALO_NIAGARAFALLS_NY = 'Buffalo_NiagaraFalls_NY';
	/**
	 * Constant for value 'Canton_Massillon_OH'
	 * @return string 'Canton_Massillon_OH'
	 */
	const VALUE_CANTON_MASSILLON_OH = 'Canton_Massillon_OH';
	/**
	 * Constant for value 'CapeCoral_FortMyers_FL'
	 * @return string 'CapeCoral_FortMyers_FL'
	 */
	const VALUE_CAPECORAL_FORTMYERS_FL = 'CapeCoral_FortMyers_FL';
	/**
	 * Constant for value 'CedarRapids_IA'
	 * @return string 'CedarRapids_IA'
	 */
	const VALUE_CEDARRAPIDS_IA = 'CedarRapids_IA';
	/**
	 * Constant for value 'Champaign_Urbana_IL'
	 * @return string 'Champaign_Urbana_IL'
	 */
	const VALUE_CHAMPAIGN_URBANA_IL = 'Champaign_Urbana_IL';
	/**
	 * Constant for value 'Charleston_NorthCharleston_SC'
	 * @return string 'Charleston_NorthCharleston_SC'
	 */
	const VALUE_CHARLESTON_NORTHCHARLESTON_SC = 'Charleston_NorthCharleston_SC';
	/**
	 * Constant for value 'Charleston_WV'
	 * @return string 'Charleston_WV'
	 */
	const VALUE_CHARLESTON_WV = 'Charleston_WV';
	/**
	 * Constant for value 'Charlotte_Gastonia_Concord_NC_SC'
	 * @return string 'Charlotte_Gastonia_Concord_NC_SC'
	 */
	const VALUE_CHARLOTTE_GASTONIA_CONCORD_NC_SC = 'Charlotte_Gastonia_Concord_NC_SC';
	/**
	 * Constant for value 'Chattanooga_TN_GA'
	 * @return string 'Chattanooga_TN_GA'
	 */
	const VALUE_CHATTANOOGA_TN_GA = 'Chattanooga_TN_GA';
	/**
	 * Constant for value 'Chicago_Naperville_Joliet_IL'
	 * @return string 'Chicago_Naperville_Joliet_IL'
	 */
	const VALUE_CHICAGO_NAPERVILLE_JOLIET_IL = 'Chicago_Naperville_Joliet_IL';
	/**
	 * Constant for value 'Cincinnati_Middletown_OH_KY_IN'
	 * @return string 'Cincinnati_Middletown_OH_KY_IN'
	 */
	const VALUE_CINCINNATI_MIDDLETOWN_OH_KY_IN = 'Cincinnati_Middletown_OH_KY_IN';
	/**
	 * Constant for value 'Cleveland_Elyria_Mentor_OH'
	 * @return string 'Cleveland_Elyria_Mentor_OH'
	 */
	const VALUE_CLEVELAND_ELYRIA_MENTOR_OH = 'Cleveland_Elyria_Mentor_OH';
	/**
	 * Constant for value 'ColordoSprings_CO'
	 * @return string 'ColordoSprings_CO'
	 */
	const VALUE_COLORDOSPRINGS_CO = 'ColordoSprings_CO';
	/**
	 * Constant for value 'Columbia_MO'
	 * @return string 'Columbia_MO'
	 */
	const VALUE_COLUMBIA_MO = 'Columbia_MO';
	/**
	 * Constant for value 'Columbia_SC'
	 * @return string 'Columbia_SC'
	 */
	const VALUE_COLUMBIA_SC = 'Columbia_SC';
	/**
	 * Constant for value 'Columbus_OH'
	 * @return string 'Columbus_OH'
	 */
	const VALUE_COLUMBUS_OH = 'Columbus_OH';
	/**
	 * Constant for value 'CorpusChristi_TX'
	 * @return string 'CorpusChristi_TX'
	 */
	const VALUE_CORPUSCHRISTI_TX = 'CorpusChristi_TX';
	/**
	 * Constant for value 'Cumberland_MD_WV'
	 * @return string 'Cumberland_MD_WV'
	 */
	const VALUE_CUMBERLAND_MD_WV = 'Cumberland_MD_WV';
	/**
	 * Constant for value 'Dallas_FortWorth_Arlington_TX'
	 * @return string 'Dallas_FortWorth_Arlington_TX'
	 */
	const VALUE_DALLAS_FORTWORTH_ARLINGTON_TX = 'Dallas_FortWorth_Arlington_TX';
	/**
	 * Constant for value 'Danville_IL'
	 * @return string 'Danville_IL'
	 */
	const VALUE_DANVILLE_IL = 'Danville_IL';
	/**
	 * Constant for value 'Davenport_Moline_RockIsland_IA_IL'
	 * @return string 'Davenport_Moline_RockIsland_IA_IL'
	 */
	const VALUE_DAVENPORT_MOLINE_ROCKISLAND_IA_IL = 'Davenport_Moline_RockIsland_IA_IL';
	/**
	 * Constant for value 'Dayton_OH'
	 * @return string 'Dayton_OH'
	 */
	const VALUE_DAYTON_OH = 'Dayton_OH';
	/**
	 * Constant for value 'Decatur_IL'
	 * @return string 'Decatur_IL'
	 */
	const VALUE_DECATUR_IL = 'Decatur_IL';
	/**
	 * Constant for value 'Deltona_DaytonaBeach_OrmondBeach_FL'
	 * @return string 'Deltona_DaytonaBeach_OrmondBeach_FL'
	 */
	const VALUE_DELTONA_DAYTONABEACH_ORMONDBEACH_FL = 'Deltona_DaytonaBeach_OrmondBeach_FL';
	/**
	 * Constant for value 'Denver_Aurora_CO'
	 * @return string 'Denver_Aurora_CO'
	 */
	const VALUE_DENVER_AURORA_CO = 'Denver_Aurora_CO';
	/**
	 * Constant for value 'DesMoines_IA'
	 * @return string 'DesMoines_IA'
	 */
	const VALUE_DESMOINES_IA = 'DesMoines_IA';
	/**
	 * Constant for value 'Detroit_Warren_Livonia_MI'
	 * @return string 'Detroit_Warren_Livonia_MI'
	 */
	const VALUE_DETROIT_WARREN_LIVONIA_MI = 'Detroit_Warren_Livonia_MI';
	/**
	 * Constant for value 'Dover_DE'
	 * @return string 'Dover_DE'
	 */
	const VALUE_DOVER_DE = 'Dover_DE';
	/**
	 * Constant for value 'Durham_NC'
	 * @return string 'Durham_NC'
	 */
	const VALUE_DURHAM_NC = 'Durham_NC';
	/**
	 * Constant for value 'Edison_NJ'
	 * @return string 'Edison_NJ'
	 */
	const VALUE_EDISON_NJ = 'Edison_NJ';
	/**
	 * Constant for value 'Elmira_NY'
	 * @return string 'Elmira_NY'
	 */
	const VALUE_ELMIRA_NY = 'Elmira_NY';
	/**
	 * Constant for value 'ElPaso_TX'
	 * @return string 'ElPaso_TX'
	 */
	const VALUE_ELPASO_TX = 'ElPaso_TX';
	/**
	 * Constant for value 'Erie_PA'
	 * @return string 'Erie_PA'
	 */
	const VALUE_ERIE_PA = 'Erie_PA';
	/**
	 * Constant for value 'Eugene_Springfield_OR'
	 * @return string 'Eugene_Springfield_OR'
	 */
	const VALUE_EUGENE_SPRINGFIELD_OR = 'Eugene_Springfield_OR';
	/**
	 * Constant for value 'Fargo_ND_MN'
	 * @return string 'Fargo_ND_MN'
	 */
	const VALUE_FARGO_ND_MN = 'Fargo_ND_MN';
	/**
	 * Constant for value 'Farmington_NM'
	 * @return string 'Farmington_NM'
	 */
	const VALUE_FARMINGTON_NM = 'Farmington_NM';
	/**
	 * Constant for value 'Florence_SC'
	 * @return string 'Florence_SC'
	 */
	const VALUE_FLORENCE_SC = 'Florence_SC';
	/**
	 * Constant for value 'FtWayne_IN'
	 * @return string 'FtWayne_IN'
	 */
	const VALUE_FTWAYNE_IN = 'FtWayne_IN';
	/**
	 * Constant for value 'Gainesville_FL'
	 * @return string 'Gainesville_FL'
	 */
	const VALUE_GAINESVILLE_FL = 'Gainesville_FL';
	/**
	 * Constant for value 'Gary_Hammond_IN'
	 * @return string 'Gary_Hammond_IN'
	 */
	const VALUE_GARY_HAMMOND_IN = 'Gary_Hammond_IN';
	/**
	 * Constant for value 'GlensFalls_NY'
	 * @return string 'GlensFalls_NY'
	 */
	const VALUE_GLENSFALLS_NY = 'GlensFalls_NY';
	/**
	 * Constant for value 'GrandRapids_MI'
	 * @return string 'GrandRapids_MI'
	 */
	const VALUE_GRANDRAPIDS_MI = 'GrandRapids_MI';
	/**
	 * Constant for value 'GreenBay_WI'
	 * @return string 'GreenBay_WI'
	 */
	const VALUE_GREENBAY_WI = 'GreenBay_WI';
	/**
	 * Constant for value 'Greensboro_HighPoint_NC'
	 * @return string 'Greensboro_HighPoint_NC'
	 */
	const VALUE_GREENSBORO_HIGHPOINT_NC = 'Greensboro_HighPoint_NC';
	/**
	 * Constant for value 'Greenville_SC'
	 * @return string 'Greenville_SC'
	 */
	const VALUE_GREENVILLE_SC = 'Greenville_SC';
	/**
	 * Constant for value 'Gulfport_Biloxi_MS'
	 * @return string 'Gulfport_Biloxi_MS'
	 */
	const VALUE_GULFPORT_BILOXI_MS = 'Gulfport_Biloxi_MS';
	/**
	 * Constant for value 'Hagerstown_Martinsburg_MD_WV'
	 * @return string 'Hagerstown_Martinsburg_MD_WV'
	 */
	const VALUE_HAGERSTOWN_MARTINSBURG_MD_WV = 'Hagerstown_Martinsburg_MD_WV';
	/**
	 * Constant for value 'Hartford_WestHartford_EastHartford_CT'
	 * @return string 'Hartford_WestHartford_EastHartford_CT'
	 */
	const VALUE_HARTFORD_WESTHARTFORD_EASTHARTFORD_CT = 'Hartford_WestHartford_EastHartford_CT';
	/**
	 * Constant for value 'Honolulu_HI'
	 * @return string 'Honolulu_HI'
	 */
	const VALUE_HONOLULU_HI = 'Honolulu_HI';
	/**
	 * Constant for value 'Houston_Baytown_SugarLand_TX'
	 * @return string 'Houston_Baytown_SugarLand_TX'
	 */
	const VALUE_HOUSTON_BAYTOWN_SUGARLAND_TX = 'Houston_Baytown_SugarLand_TX';
	/**
	 * Constant for value 'Indianapolis_IN'
	 * @return string 'Indianapolis_IN'
	 */
	const VALUE_INDIANAPOLIS_IN = 'Indianapolis_IN';
	/**
	 * Constant for value 'Jackson_MS'
	 * @return string 'Jackson_MS'
	 */
	const VALUE_JACKSON_MS = 'Jackson_MS';
	/**
	 * Constant for value 'Jacksonville_FL'
	 * @return string 'Jacksonville_FL'
	 */
	const VALUE_JACKSONVILLE_FL = 'Jacksonville_FL';
	/**
	 * Constant for value 'Kalamazoo_Portage_MI'
	 * @return string 'Kalamazoo_Portage_MI'
	 */
	const VALUE_KALAMAZOO_PORTAGE_MI = 'Kalamazoo_Portage_MI';
	/**
	 * Constant for value 'Kankakee_Bradley_IL'
	 * @return string 'Kankakee_Bradley_IL'
	 */
	const VALUE_KANKAKEE_BRADLEY_IL = 'Kankakee_Bradley_IL';
	/**
	 * Constant for value 'KansasCity_MO_KS'
	 * @return string 'KansasCity_MO_KS'
	 */
	const VALUE_KANSASCITY_MO_KS = 'KansasCity_MO_KS';
	/**
	 * Constant for value 'Kennewick_Richland_Pasco_WA'
	 * @return string 'Kennewick_Richland_Pasco_WA'
	 */
	const VALUE_KENNEWICK_RICHLAND_PASCO_WA = 'Kennewick_Richland_Pasco_WA';
	/**
	 * Constant for value 'Kingston_NY'
	 * @return string 'Kingston_NY'
	 */
	const VALUE_KINGSTON_NY = 'Kingston_NY';
	/**
	 * Constant for value 'Knoxville_TN'
	 * @return string 'Knoxville_TN'
	 */
	const VALUE_KNOXVILLE_TN = 'Knoxville_TN';
	/**
	 * Constant for value 'Lansing_ELansing_MI'
	 * @return string 'Lansing_ELansing_MI'
	 */
	const VALUE_LANSING_ELANSING_MI = 'Lansing_ELansing_MI';
	/**
	 * Constant for value 'LasVegas_Paradise_NV'
	 * @return string 'LasVegas_Paradise_NV'
	 */
	const VALUE_LASVEGAS_PARADISE_NV = 'LasVegas_Paradise_NV';
	/**
	 * Constant for value 'Lexington_Fayette_KY'
	 * @return string 'Lexington_Fayette_KY'
	 */
	const VALUE_LEXINGTON_FAYETTE_KY = 'Lexington_Fayette_KY';
	/**
	 * Constant for value 'Lincoln_NE'
	 * @return string 'Lincoln_NE'
	 */
	const VALUE_LINCOLN_NE = 'Lincoln_NE';
	/**
	 * Constant for value 'LittleRock_NLittleRock_AR'
	 * @return string 'LittleRock_NLittleRock_AR'
	 */
	const VALUE_LITTLEROCK_NLITTLEROCK_AR = 'LittleRock_NLittleRock_AR';
	/**
	 * Constant for value 'LosAngeles_LongBeach_SantaAna_CA'
	 * @return string 'LosAngeles_LongBeach_SantaAna_CA'
	 */
	const VALUE_LOSANGELES_LONGBEACH_SANTAANA_CA = 'LosAngeles_LongBeach_SantaAna_CA';
	/**
	 * Constant for value 'Louisville_KY_IN'
	 * @return string 'Louisville_KY_IN'
	 */
	const VALUE_LOUISVILLE_KY_IN = 'Louisville_KY_IN';
	/**
	 * Constant for value 'Madison_WI'
	 * @return string 'Madison_WI'
	 */
	const VALUE_MADISON_WI = 'Madison_WI';
	/**
	 * Constant for value 'Manchester_Nashua_NH'
	 * @return string 'Manchester_Nashua_NH'
	 */
	const VALUE_MANCHESTER_NASHUA_NH = 'Manchester_Nashua_NH';
	/**
	 * Constant for value 'Memphis_TN_MS_AR'
	 * @return string 'Memphis_TN_MS_AR'
	 */
	const VALUE_MEMPHIS_TN_MS_AR = 'Memphis_TN_MS_AR';
	/**
	 * Constant for value 'Miami_FortLauderdale_MiamiBeach_FL'
	 * @return string 'Miami_FortLauderdale_MiamiBeach_FL'
	 */
	const VALUE_MIAMI_FORTLAUDERDALE_MIAMIBEACH_FL = 'Miami_FortLauderdale_MiamiBeach_FL';
	/**
	 * Constant for value 'Milwaukee_Waukesha_WestAllis_WI'
	 * @return string 'Milwaukee_Waukesha_WestAllis_WI'
	 */
	const VALUE_MILWAUKEE_WAUKESHA_WESTALLIS_WI = 'Milwaukee_Waukesha_WestAllis_WI';
	/**
	 * Constant for value 'Minneapolis_StPaul_Bloomington_MN_WI'
	 * @return string 'Minneapolis_StPaul_Bloomington_MN_WI'
	 */
	const VALUE_MINNEAPOLIS_STPAUL_BLOOMINGTON_MN_WI = 'Minneapolis_StPaul_Bloomington_MN_WI';
	/**
	 * Constant for value 'Mobile_AL'
	 * @return string 'Mobile_AL'
	 */
	const VALUE_MOBILE_AL = 'Mobile_AL';
	/**
	 * Constant for value 'Montgomery_AL'
	 * @return string 'Montgomery_AL'
	 */
	const VALUE_MONTGOMERY_AL = 'Montgomery_AL';
	/**
	 * Constant for value 'Nashville_Davidson__Murfreesboro_TN'
	 * @return string 'Nashville_Davidson__Murfreesboro_TN'
	 */
	const VALUE_NASHVILLE_DAVIDSON__MURFREESBORO_TN = 'Nashville_Davidson__Murfreesboro_TN';
	/**
	 * Constant for value 'Nassau_Suffolk_NY'
	 * @return string 'Nassau_Suffolk_NY'
	 */
	const VALUE_NASSAU_SUFFOLK_NY = 'Nassau_Suffolk_NY';
	/**
	 * Constant for value 'Newark_Union_NJ_PA'
	 * @return string 'Newark_Union_NJ_PA'
	 */
	const VALUE_NEWARK_UNION_NJ_PA = 'Newark_Union_NJ_PA';
	/**
	 * Constant for value 'NewHaven_Milford_CT'
	 * @return string 'NewHaven_Milford_CT'
	 */
	const VALUE_NEWHAVEN_MILFORD_CT = 'NewHaven_Milford_CT';
	/**
	 * Constant for value 'NewOrleans_Metairie_Kenner_LA'
	 * @return string 'NewOrleans_Metairie_Kenner_LA'
	 */
	const VALUE_NEWORLEANS_METAIRIE_KENNER_LA = 'NewOrleans_Metairie_Kenner_LA';
	/**
	 * Constant for value 'NewYork_NorthernNewJersey_LongIsland_NY_NJ_PA'
	 * @return string 'NewYork_NorthernNewJersey_LongIsland_NY_NJ_PA'
	 */
	const VALUE_NEWYORK_NORTHERNNEWJERSEY_LONGISLAND_NY_NJ_PA = 'NewYork_NorthernNewJersey_LongIsland_NY_NJ_PA';
	/**
	 * Constant for value 'NewYork_Wayne_WhitePlains_NY_NJ'
	 * @return string 'NewYork_Wayne_WhitePlains_NY_NJ'
	 */
	const VALUE_NEWYORK_WAYNE_WHITEPLAINS_NY_NJ = 'NewYork_Wayne_WhitePlains_NY_NJ';
	/**
	 * Constant for value 'Norwich_NewLondon_CT'
	 * @return string 'Norwich_NewLondon_CT'
	 */
	const VALUE_NORWICH_NEWLONDON_CT = 'Norwich_NewLondon_CT';
	/**
	 * Constant for value 'Ocala_FL'
	 * @return string 'Ocala_FL'
	 */
	const VALUE_OCALA_FL = 'Ocala_FL';
	/**
	 * Constant for value 'OklahomaCity_OK'
	 * @return string 'OklahomaCity_OK'
	 */
	const VALUE_OKLAHOMACITY_OK = 'OklahomaCity_OK';
	/**
	 * Constant for value 'Omaha_NE_IA'
	 * @return string 'Omaha_NE_IA'
	 */
	const VALUE_OMAHA_NE_IA = 'Omaha_NE_IA';
	/**
	 * Constant for value 'Orlando_FL'
	 * @return string 'Orlando_FL'
	 */
	const VALUE_ORLANDO_FL = 'Orlando_FL';
	/**
	 * Constant for value 'PalmBay_Melbourne_Titusville_FL'
	 * @return string 'PalmBay_Melbourne_Titusville_FL'
	 */
	const VALUE_PALMBAY_MELBOURNE_TITUSVILLE_FL = 'PalmBay_Melbourne_Titusville_FL';
	/**
	 * Constant for value 'Pensacola_FerryPass_Brent_FL'
	 * @return string 'Pensacola_FerryPass_Brent_FL'
	 */
	const VALUE_PENSACOLA_FERRYPASS_BRENT_FL = 'Pensacola_FerryPass_Brent_FL';
	/**
	 * Constant for value 'Peoria_IL'
	 * @return string 'Peoria_IL'
	 */
	const VALUE_PEORIA_IL = 'Peoria_IL';
	/**
	 * Constant for value 'Philadelphia_Camden_Wilmington_PA_NJ_DE_MD'
	 * @return string 'Philadelphia_Camden_Wilmington_PA_NJ_DE_MD'
	 */
	const VALUE_PHILADELPHIA_CAMDEN_WILMINGTON_PA_NJ_DE_MD = 'Philadelphia_Camden_Wilmington_PA_NJ_DE_MD';
	/**
	 * Constant for value 'Phoenix_Mesa_Scottsdale_AZ'
	 * @return string 'Phoenix_Mesa_Scottsdale_AZ'
	 */
	const VALUE_PHOENIX_MESA_SCOTTSDALE_AZ = 'Phoenix_Mesa_Scottsdale_AZ';
	/**
	 * Constant for value 'Pittsburgh_PA'
	 * @return string 'Pittsburgh_PA'
	 */
	const VALUE_PITTSBURGH_PA = 'Pittsburgh_PA';
	/**
	 * Constant for value 'Pittsfield_MA'
	 * @return string 'Pittsfield_MA'
	 */
	const VALUE_PITTSFIELD_MA = 'Pittsfield_MA';
	/**
	 * Constant for value 'Portland_SouthPortland_Biddeford_ME'
	 * @return string 'Portland_SouthPortland_Biddeford_ME'
	 */
	const VALUE_PORTLAND_SOUTHPORTLAND_BIDDEFORD_ME = 'Portland_SouthPortland_Biddeford_ME';
	/**
	 * Constant for value 'Portland_Vancouver_Beaverton_OR_WA'
	 * @return string 'Portland_Vancouver_Beaverton_OR_WA'
	 */
	const VALUE_PORTLAND_VANCOUVER_BEAVERTON_OR_WA = 'Portland_Vancouver_Beaverton_OR_WA';
	/**
	 * Constant for value 'Providence_NewBedford_FallRiver_RI_MA'
	 * @return string 'Providence_NewBedford_FallRiver_RI_MA'
	 */
	const VALUE_PROVIDENCE_NEWBEDFORD_FALLRIVER_RI_MA = 'Providence_NewBedford_FallRiver_RI_MA';
	/**
	 * Constant for value 'Raleigh_Cary_NC'
	 * @return string 'Raleigh_Cary_NC'
	 */
	const VALUE_RALEIGH_CARY_NC = 'Raleigh_Cary_NC';
	/**
	 * Constant for value 'Reading_PA'
	 * @return string 'Reading_PA'
	 */
	const VALUE_READING_PA = 'Reading_PA';
	/**
	 * Constant for value 'Reno_Sparks_NV'
	 * @return string 'Reno_Sparks_NV'
	 */
	const VALUE_RENO_SPARKS_NV = 'Reno_Sparks_NV';
	/**
	 * Constant for value 'Richmond_VA'
	 * @return string 'Richmond_VA'
	 */
	const VALUE_RICHMOND_VA = 'Richmond_VA';
	/**
	 * Constant for value 'Riverside_SanBernardino_Ontario_CA'
	 * @return string 'Riverside_SanBernardino_Ontario_CA'
	 */
	const VALUE_RIVERSIDE_SANBERNARDINO_ONTARIO_CA = 'Riverside_SanBernardino_Ontario_CA';
	/**
	 * Constant for value 'Rochester_NY'
	 * @return string 'Rochester_NY'
	 */
	const VALUE_ROCHESTER_NY = 'Rochester_NY';
	/**
	 * Constant for value 'Rockford_IL'
	 * @return string 'Rockford_IL'
	 */
	const VALUE_ROCKFORD_IL = 'Rockford_IL';
	/**
	 * Constant for value 'Sacramento__Arden_Arcade__Roseville_CA'
	 * @return string 'Sacramento__Arden_Arcade__Roseville_CA'
	 */
	const VALUE_SACRAMENTO__ARDEN_ARCADE__ROSEVILLE_CA = 'Sacramento__Arden_Arcade__Roseville_CA';
	/**
	 * Constant for value 'Saginaw_SaginawTownshipNorth_MI'
	 * @return string 'Saginaw_SaginawTownshipNorth_MI'
	 */
	const VALUE_SAGINAW_SAGINAWTOWNSHIPNORTH_MI = 'Saginaw_SaginawTownshipNorth_MI';
	/**
	 * Constant for value 'SaintLouis_MO_IL'
	 * @return string 'SaintLouis_MO_IL'
	 */
	const VALUE_SAINTLOUIS_MO_IL = 'SaintLouis_MO_IL';
	/**
	 * Constant for value 'Salem_OR'
	 * @return string 'Salem_OR'
	 */
	const VALUE_SALEM_OR = 'Salem_OR';
	/**
	 * Constant for value 'SaltLakeCity_UT'
	 * @return string 'SaltLakeCity_UT'
	 */
	const VALUE_SALTLAKECITY_UT = 'SaltLakeCity_UT';
	/**
	 * Constant for value 'SanAntonio_TX'
	 * @return string 'SanAntonio_TX'
	 */
	const VALUE_SANANTONIO_TX = 'SanAntonio_TX';
	/**
	 * Constant for value 'SanDiego_Carlsbad_SanMarcos_CA'
	 * @return string 'SanDiego_Carlsbad_SanMarcos_CA'
	 */
	const VALUE_SANDIEGO_CARLSBAD_SANMARCOS_CA = 'SanDiego_Carlsbad_SanMarcos_CA';
	/**
	 * Constant for value 'SanFrancisco_Oakland_Fremont_CA'
	 * @return string 'SanFrancisco_Oakland_Fremont_CA'
	 */
	const VALUE_SANFRANCISCO_OAKLAND_FREMONT_CA = 'SanFrancisco_Oakland_Fremont_CA';
	/**
	 * Constant for value 'SanJose_Sunnyvale_SantaClara_CA'
	 * @return string 'SanJose_Sunnyvale_SantaClara_CA'
	 */
	const VALUE_SANJOSE_SUNNYVALE_SANTACLARA_CA = 'SanJose_Sunnyvale_SantaClara_CA';
	/**
	 * Constant for value 'Sarasota_Bradenton_Venice_FL'
	 * @return string 'Sarasota_Bradenton_Venice_FL'
	 */
	const VALUE_SARASOTA_BRADENTON_VENICE_FL = 'Sarasota_Bradenton_Venice_FL';
	/**
	 * Constant for value 'Seattle_Tacoma_Bellevue_WA'
	 * @return string 'Seattle_Tacoma_Bellevue_WA'
	 */
	const VALUE_SEATTLE_TACOMA_BELLEVUE_WA = 'Seattle_Tacoma_Bellevue_WA';
	/**
	 * Constant for value 'Shreveport_BossierCity_LA'
	 * @return string 'Shreveport_BossierCity_LA'
	 */
	const VALUE_SHREVEPORT_BOSSIERCITY_LA = 'Shreveport_BossierCity_LA';
	/**
	 * Constant for value 'SiouxFalls_SD'
	 * @return string 'SiouxFalls_SD'
	 */
	const VALUE_SIOUXFALLS_SD = 'SiouxFalls_SD';
	/**
	 * Constant for value 'SouthBend_Mishawaka_IN'
	 * @return string 'SouthBend_Mishawaka_IN'
	 */
	const VALUE_SOUTHBEND_MISHAWAKA_IN = 'SouthBend_Mishawaka_IN';
	/**
	 * Constant for value 'Spartanburg_SC'
	 * @return string 'Spartanburg_SC'
	 */
	const VALUE_SPARTANBURG_SC = 'Spartanburg_SC';
	/**
	 * Constant for value 'Spokane_WA'
	 * @return string 'Spokane_WA'
	 */
	const VALUE_SPOKANE_WA = 'Spokane_WA';
	/**
	 * Constant for value 'Springfield_IL'
	 * @return string 'Springfield_IL'
	 */
	const VALUE_SPRINGFIELD_IL = 'Springfield_IL';
	/**
	 * Constant for value 'Springfield_MA'
	 * @return string 'Springfield_MA'
	 */
	const VALUE_SPRINGFIELD_MA = 'Springfield_MA';
	/**
	 * Constant for value 'Springfield_MO'
	 * @return string 'Springfield_MO'
	 */
	const VALUE_SPRINGFIELD_MO = 'Springfield_MO';
	/**
	 * Constant for value 'Syracuse_NY'
	 * @return string 'Syracuse_NY'
	 */
	const VALUE_SYRACUSE_NY = 'Syracuse_NY';
	/**
	 * Constant for value 'Tallahassee_FL'
	 * @return string 'Tallahassee_FL'
	 */
	const VALUE_TALLAHASSEE_FL = 'Tallahassee_FL';
	/**
	 * Constant for value 'Tampa_StPetersburg_Clearwater_FL'
	 * @return string 'Tampa_StPetersburg_Clearwater_FL'
	 */
	const VALUE_TAMPA_STPETERSBURG_CLEARWATER_FL = 'Tampa_StPetersburg_Clearwater_FL';
	/**
	 * Constant for value 'Toledo_OH'
	 * @return string 'Toledo_OH'
	 */
	const VALUE_TOLEDO_OH = 'Toledo_OH';
	/**
	 * Constant for value 'Topeka_KS'
	 * @return string 'Topeka_KS'
	 */
	const VALUE_TOPEKA_KS = 'Topeka_KS';
	/**
	 * Constant for value 'Trenton_Ewing_NJ'
	 * @return string 'Trenton_Ewing_NJ'
	 */
	const VALUE_TRENTON_EWING_NJ = 'Trenton_Ewing_NJ';
	/**
	 * Constant for value 'Tucson_AZ'
	 * @return string 'Tucson_AZ'
	 */
	const VALUE_TUCSON_AZ = 'Tucson_AZ';
	/**
	 * Constant for value 'Tulsa_OK'
	 * @return string 'Tulsa_OK'
	 */
	const VALUE_TULSA_OK = 'Tulsa_OK';
	/**
	 * Constant for value 'VirginiaBeach_Norfolk_NewportNews_VA_NC'
	 * @return string 'VirginiaBeach_Norfolk_NewportNews_VA_NC'
	 */
	const VALUE_VIRGINIABEACH_NORFOLK_NEWPORTNEWS_VA_NC = 'VirginiaBeach_Norfolk_NewportNews_VA_NC';
	/**
	 * Constant for value 'Washington_Arlington_Alexandria_DC_VA_MD_WV'
	 * @return string 'Washington_Arlington_Alexandria_DC_VA_MD_WV'
	 */
	const VALUE_WASHINGTON_ARLINGTON_ALEXANDRIA_DC_VA_MD_WV = 'Washington_Arlington_Alexandria_DC_VA_MD_WV';
	/**
	 * Constant for value 'Waterloo_CedarFalls_IA'
	 * @return string 'Waterloo_CedarFalls_IA'
	 */
	const VALUE_WATERLOO_CEDARFALLS_IA = 'Waterloo_CedarFalls_IA';
	/**
	 * Constant for value 'Wichita_KS'
	 * @return string 'Wichita_KS'
	 */
	const VALUE_WICHITA_KS = 'Wichita_KS';
	/**
	 * Constant for value 'Worcester_MA'
	 * @return string 'Worcester_MA'
	 */
	const VALUE_WORCESTER_MA = 'Worcester_MA';
	/**
	 * Constant for value 'Yakima_WA'
	 * @return string 'Yakima_WA'
	 */
	const VALUE_YAKIMA_WA = 'Yakima_WA';
	/**
	 * Constant for value 'Youngstown_Warren_Boardman_OH_PA'
	 * @return string 'Youngstown_Warren_Boardman_OH_PA'
	 */
	const VALUE_YOUNGSTOWN_WARREN_BOARDMAN_OH_PA = 'Youngstown_Warren_Boardman_OH_PA';
	/**
	 * Constant for value 'Abilene_TX'
	 * @return string 'Abilene_TX'
	 */
	const VALUE_ABILENE_TX = 'Abilene_TX';
	/**
	 * Constant for value 'Burlington_SouthBurlington_VT'
	 * @return string 'Burlington_SouthBurlington_VT'
	 */
	const VALUE_BURLINGTON_SOUTHBURLINGTON_VT = 'Burlington_SouthBurlington_VT';
	/**
	 * Constant for value 'Decatur_AL'
	 * @return string 'Decatur_AL'
	 */
	const VALUE_DECATUR_AL = 'Decatur_AL';
	/**
	 * Constant for value 'Huntsville_AL'
	 * @return string 'Huntsville_AL'
	 */
	const VALUE_HUNTSVILLE_AL = 'Huntsville_AL';
	/**
	 * Constant for value 'York_Hanover_PA'
	 * @return string 'York_Hanover_PA'
	 */
	const VALUE_YORK_HANOVER_PA = 'York_Hanover_PA';
	/**
	 * Constructor
	 * @return XiHousingTypeAllAreas
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
		return in_array($_value,array(self::VALUE_UNDEFINED,self::VALUE_UNITEDSTATES,self::VALUE_NORTHEAST,self::VALUE_MIDWEST,self::VALUE_SOUTH,self::VALUE_WEST,self::VALUE_NEWENGLAND,self::VALUE_MIDDLEATLANTIC,self::VALUE_EASTNORTHCENTRAL,self::VALUE_WESTNORTHCENTRAL,self::VALUE_SOUTHATLANTIC,self::VALUE_EASTSOUTHCENTRAL,self::VALUE_WESTSOUTHCENTRAL,self::VALUE_MOUNTAIN,self::VALUE_PACIFIC,self::VALUE_CONNECTICUT,self::VALUE_ALABAMA,self::VALUE_ALASKA,self::VALUE_ARIZONA,self::VALUE_ARKANSAS,self::VALUE_CALIFORNIA,self::VALUE_COLORADO,self::VALUE_DELAWARE,self::VALUE_DISTRICTOFCOLUMBIA,self::VALUE_FLORIDA,self::VALUE_GEORGIA,self::VALUE_HAWAII,self::VALUE_IDAHO,self::VALUE_ILLINOIS,self::VALUE_INDIANA,self::VALUE_IOWA,self::VALUE_KANSAS,self::VALUE_KENTUCKY,self::VALUE_LOUISIANA,self::VALUE_MAINE,self::VALUE_MARYLAND,self::VALUE_MASSACHUSETTS,self::VALUE_MICHIGAN,self::VALUE_MINNESOTA,self::VALUE_MISSISSIPPI,self::VALUE_MISSOURI,self::VALUE_MONTANA,self::VALUE_NEBRASKA,self::VALUE_NEVADA,self::VALUE_NEWHAMPSHIRE,self::VALUE_NEWJERSEY,self::VALUE_NEWMEXICO,self::VALUE_NEWYORK,self::VALUE_NORTHCAROLINA,self::VALUE_NORTHDAKOTA,self::VALUE_OHIO,self::VALUE_OKLAHOMA,self::VALUE_OREGON,self::VALUE_PENNSYLVANIA,self::VALUE_RHODEISLAND,self::VALUE_SOUTHCAROLINA,self::VALUE_SOUTHDAKOTA,self::VALUE_TENNESSEE,self::VALUE_TEXAS,self::VALUE_UTAH,self::VALUE_VERMONT,self::VALUE_VIRGINIA,self::VALUE_WASHINGTON,self::VALUE_WESTVIRGINIA,self::VALUE_WISCONSIN,self::VALUE_WYOMING,self::VALUE_AKRON_OH,self::VALUE_ALBANY_SCHENECTADY_TROY_NY,self::VALUE_ALBUQUERQUE_NM,self::VALUE_ALLENTOWN_BETHLEHEM_EASTON_PA_NJ,self::VALUE_AMARILLO_TX,self::VALUE_ANAHEIM_SANTAANA_CA,self::VALUE_APPLETON_WI,self::VALUE_ATLANTA_SANDYSPRINGS_MARIETTA_GA,self::VALUE_ATLANTICCITY_NJ,self::VALUE_AUSTIN_ROUNDROCK_TX,self::VALUE_BALTIMORE_TOWSON_MD,self::VALUE_BARNSTABLETOWN_MA,self::VALUE_BATONROUGE_LA,self::VALUE_BEAUMONT_PORTARTHUR_TX,self::VALUE_BINGHAMTON_NY,self::VALUE_BIRMINGHAM_HOOVER_AL,self::VALUE_BISMARCK_ND,self::VALUE_BLOOMINGTON_NORMAL_IL,self::VALUE_BOISECITY_NAMPA_ID,self::VALUE_BOSTON_CAMBRIDGE_QUINCY_MA_NH,self::VALUE_BOULDER_CO,self::VALUE_BRIDGEPORT_STAMFORD_NORWALK_CT,self::VALUE_BUFFALO_NIAGARAFALLS_NY,self::VALUE_CANTON_MASSILLON_OH,self::VALUE_CAPECORAL_FORTMYERS_FL,self::VALUE_CEDARRAPIDS_IA,self::VALUE_CHAMPAIGN_URBANA_IL,self::VALUE_CHARLESTON_NORTHCHARLESTON_SC,self::VALUE_CHARLESTON_WV,self::VALUE_CHARLOTTE_GASTONIA_CONCORD_NC_SC,self::VALUE_CHATTANOOGA_TN_GA,self::VALUE_CHICAGO_NAPERVILLE_JOLIET_IL,self::VALUE_CINCINNATI_MIDDLETOWN_OH_KY_IN,self::VALUE_CLEVELAND_ELYRIA_MENTOR_OH,self::VALUE_COLORDOSPRINGS_CO,self::VALUE_COLUMBIA_MO,self::VALUE_COLUMBIA_SC,self::VALUE_COLUMBUS_OH,self::VALUE_CORPUSCHRISTI_TX,self::VALUE_CUMBERLAND_MD_WV,self::VALUE_DALLAS_FORTWORTH_ARLINGTON_TX,self::VALUE_DANVILLE_IL,self::VALUE_DAVENPORT_MOLINE_ROCKISLAND_IA_IL,self::VALUE_DAYTON_OH,self::VALUE_DECATUR_IL,self::VALUE_DELTONA_DAYTONABEACH_ORMONDBEACH_FL,self::VALUE_DENVER_AURORA_CO,self::VALUE_DESMOINES_IA,self::VALUE_DETROIT_WARREN_LIVONIA_MI,self::VALUE_DOVER_DE,self::VALUE_DURHAM_NC,self::VALUE_EDISON_NJ,self::VALUE_ELMIRA_NY,self::VALUE_ELPASO_TX,self::VALUE_ERIE_PA,self::VALUE_EUGENE_SPRINGFIELD_OR,self::VALUE_FARGO_ND_MN,self::VALUE_FARMINGTON_NM,self::VALUE_FLORENCE_SC,self::VALUE_FTWAYNE_IN,self::VALUE_GAINESVILLE_FL,self::VALUE_GARY_HAMMOND_IN,self::VALUE_GLENSFALLS_NY,self::VALUE_GRANDRAPIDS_MI,self::VALUE_GREENBAY_WI,self::VALUE_GREENSBORO_HIGHPOINT_NC,self::VALUE_GREENVILLE_SC,self::VALUE_GULFPORT_BILOXI_MS,self::VALUE_HAGERSTOWN_MARTINSBURG_MD_WV,self::VALUE_HARTFORD_WESTHARTFORD_EASTHARTFORD_CT,self::VALUE_HONOLULU_HI,self::VALUE_HOUSTON_BAYTOWN_SUGARLAND_TX,self::VALUE_INDIANAPOLIS_IN,self::VALUE_JACKSON_MS,self::VALUE_JACKSONVILLE_FL,self::VALUE_KALAMAZOO_PORTAGE_MI,self::VALUE_KANKAKEE_BRADLEY_IL,self::VALUE_KANSASCITY_MO_KS,self::VALUE_KENNEWICK_RICHLAND_PASCO_WA,self::VALUE_KINGSTON_NY,self::VALUE_KNOXVILLE_TN,self::VALUE_LANSING_ELANSING_MI,self::VALUE_LASVEGAS_PARADISE_NV,self::VALUE_LEXINGTON_FAYETTE_KY,self::VALUE_LINCOLN_NE,self::VALUE_LITTLEROCK_NLITTLEROCK_AR,self::VALUE_LOSANGELES_LONGBEACH_SANTAANA_CA,self::VALUE_LOUISVILLE_KY_IN,self::VALUE_MADISON_WI,self::VALUE_MANCHESTER_NASHUA_NH,self::VALUE_MEMPHIS_TN_MS_AR,self::VALUE_MIAMI_FORTLAUDERDALE_MIAMIBEACH_FL,self::VALUE_MILWAUKEE_WAUKESHA_WESTALLIS_WI,self::VALUE_MINNEAPOLIS_STPAUL_BLOOMINGTON_MN_WI,self::VALUE_MOBILE_AL,self::VALUE_MONTGOMERY_AL,self::VALUE_NASHVILLE_DAVIDSON__MURFREESBORO_TN,self::VALUE_NASSAU_SUFFOLK_NY,self::VALUE_NEWARK_UNION_NJ_PA,self::VALUE_NEWHAVEN_MILFORD_CT,self::VALUE_NEWORLEANS_METAIRIE_KENNER_LA,self::VALUE_NEWYORK_NORTHERNNEWJERSEY_LONGISLAND_NY_NJ_PA,self::VALUE_NEWYORK_WAYNE_WHITEPLAINS_NY_NJ,self::VALUE_NORWICH_NEWLONDON_CT,self::VALUE_OCALA_FL,self::VALUE_OKLAHOMACITY_OK,self::VALUE_OMAHA_NE_IA,self::VALUE_ORLANDO_FL,self::VALUE_PALMBAY_MELBOURNE_TITUSVILLE_FL,self::VALUE_PENSACOLA_FERRYPASS_BRENT_FL,self::VALUE_PEORIA_IL,self::VALUE_PHILADELPHIA_CAMDEN_WILMINGTON_PA_NJ_DE_MD,self::VALUE_PHOENIX_MESA_SCOTTSDALE_AZ,self::VALUE_PITTSBURGH_PA,self::VALUE_PITTSFIELD_MA,self::VALUE_PORTLAND_SOUTHPORTLAND_BIDDEFORD_ME,self::VALUE_PORTLAND_VANCOUVER_BEAVERTON_OR_WA,self::VALUE_PROVIDENCE_NEWBEDFORD_FALLRIVER_RI_MA,self::VALUE_RALEIGH_CARY_NC,self::VALUE_READING_PA,self::VALUE_RENO_SPARKS_NV,self::VALUE_RICHMOND_VA,self::VALUE_RIVERSIDE_SANBERNARDINO_ONTARIO_CA,self::VALUE_ROCHESTER_NY,self::VALUE_ROCKFORD_IL,self::VALUE_SACRAMENTO__ARDEN_ARCADE__ROSEVILLE_CA,self::VALUE_SAGINAW_SAGINAWTOWNSHIPNORTH_MI,self::VALUE_SAINTLOUIS_MO_IL,self::VALUE_SALEM_OR,self::VALUE_SALTLAKECITY_UT,self::VALUE_SANANTONIO_TX,self::VALUE_SANDIEGO_CARLSBAD_SANMARCOS_CA,self::VALUE_SANFRANCISCO_OAKLAND_FREMONT_CA,self::VALUE_SANJOSE_SUNNYVALE_SANTACLARA_CA,self::VALUE_SARASOTA_BRADENTON_VENICE_FL,self::VALUE_SEATTLE_TACOMA_BELLEVUE_WA,self::VALUE_SHREVEPORT_BOSSIERCITY_LA,self::VALUE_SIOUXFALLS_SD,self::VALUE_SOUTHBEND_MISHAWAKA_IN,self::VALUE_SPARTANBURG_SC,self::VALUE_SPOKANE_WA,self::VALUE_SPRINGFIELD_IL,self::VALUE_SPRINGFIELD_MA,self::VALUE_SPRINGFIELD_MO,self::VALUE_SYRACUSE_NY,self::VALUE_TALLAHASSEE_FL,self::VALUE_TAMPA_STPETERSBURG_CLEARWATER_FL,self::VALUE_TOLEDO_OH,self::VALUE_TOPEKA_KS,self::VALUE_TRENTON_EWING_NJ,self::VALUE_TUCSON_AZ,self::VALUE_TULSA_OK,self::VALUE_VIRGINIABEACH_NORFOLK_NEWPORTNEWS_VA_NC,self::VALUE_WASHINGTON_ARLINGTON_ALEXANDRIA_DC_VA_MD_WV,self::VALUE_WATERLOO_CEDARFALLS_IA,self::VALUE_WICHITA_KS,self::VALUE_WORCESTER_MA,self::VALUE_YAKIMA_WA,self::VALUE_YOUNGSTOWN_WARREN_BOARDMAN_OH_PA,self::VALUE_ABILENE_TX,self::VALUE_BURLINGTON_SOUTHBURLINGTON_VT,self::VALUE_DECATUR_AL,self::VALUE_HUNTSVILLE_AL,self::VALUE_YORK_HANOVER_PA));
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