<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'id' => '1',
                'iso' => 'AF',
                'name' => 'AFGHANISTAN',
                'iso3' => 'AFG',
                'numcode' => '4',
                'phonecode' => '93',
                'status' => 1,


            ],

            [
                'id' => '2',
                'iso' => 'AL',
                'name' => 'ALBANIA',
                'iso3' => 'ALB',
                'numcode' => '8',
                'phonecode' => '355',
                'status' => 1,


            ],

            [
                'id' => '3',
                'iso' => 'DZ',
                'name' => 'ALGERIA',
                'iso3' => 'DZA',
                'numcode' => '12',
                'phonecode' => '213',
                'status' => 1,


            ],

            [
                'id' => '4',
                'iso' => 'AS',
                'name' => 'AMERICAN SAMOA',
                'iso3' => 'ASM',
                'numcode' => '16',
                'phonecode' => '1684',
                'status' => 1,


            ],

            [
                'id' => '5',
                'iso' => 'AD',
                'name' => 'ANDORRA',
                'iso3' => 'AND',
                'numcode' => '20',
                'phonecode' => '376',
                'status' => 1,


            ],

            [
                'id' => '6',
                'iso' => 'AO',
                'name' => 'ANGOLA',
                'iso3' => 'AGO',
                'numcode' => '24',
                'phonecode' => '244',
                'status' => 1,


            ],

            [
                'id' => '7',
                'iso' => 'AI',
                'name' => 'ANGUILLA',
                'iso3' => 'AIA',
                'numcode' => '660',
                'phonecode' => '1264',
                'status' => 1,


            ],

            [
                'id' => '8',
                'iso' => 'AQ',
                'name' => 'ANTARCTICA',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '9',
                'iso' => 'AG',
                'name' => 'ANTIGUA AND BARBUDA',
                'iso3' => 'ATG',
                'numcode' => '28',
                'phonecode' => '1268',
                'status' => 1,


            ],

            [
                'id' => '10',
                'iso' => 'AR',
                'name' => 'ARGENTINA',
                'iso3' => 'ARG',
                'numcode' => '32',
                'phonecode' => '54',
                'status' => 1,


            ],

            [
                'id' => '11',
                'iso' => 'AM',
                'name' => 'ARMENIA',
                'iso3' => 'ARM',
                'numcode' => '51',
                'phonecode' => '374',
                'status' => 1,


            ],

            [
                'id' => '12',
                'iso' => 'AW',
                'name' => 'ARUBA',
                'iso3' => 'ABW',
                'numcode' => '533',
                'phonecode' => '297',
                'status' => 1,


            ],

            [
                'id' => '13',
                'iso' => 'AU',
                'name' => 'AUSTRALIA',
                'iso3' => 'AUS',
                'numcode' => '36',
                'phonecode' => '61',
                'status' => 1,


            ],

            [
                'id' => '14',
                'iso' => 'AT',
                'name' => 'AUSTRIA',
                'iso3' => 'AUT',
                'numcode' => '40',
                'phonecode' => '43',
                'status' => 1,


            ],

            [
                'id' => '15',
                'iso' => 'AZ',
                'name' => 'AZERBAIJAN',
                'iso3' => 'AZE',
                'numcode' => '31',
                'phonecode' => '994',
                'status' => 1,


            ],

            [
                'id' => '16',
                'iso' => 'BS',
                'name' => 'BAHAMAS',
                'iso3' => 'BHS',
                'numcode' => '44',
                'phonecode' => '1242',
                'status' => 1,


            ],

            [
                'id' => '17',
                'iso' => 'BH',
                'name' => 'BAHRAIN',
                'iso3' => 'BHR',
                'numcode' => '48',
                'phonecode' => '973',
                'status' => 1,


            ],

            [
                'id' => '18',
                'iso' => 'BD',
                'name' => 'BANGLADESH',
                'iso3' => 'BGD',
                'numcode' => '50',
                'phonecode' => '880',
                'status' => 1,


            ],

            [
                'id' => '19',
                'iso' => 'BB',
                'name' => 'BARBADOS',
                'iso3' => 'BRB',
                'numcode' => '52',
                'phonecode' => '1246',
                'status' => 1,


            ],

            [
                'id' => '20',
                'iso' => 'BY',
                'name' => 'BELARUS',
                'iso3' => 'BLR',
                'numcode' => '112',
                'phonecode' => '375',
                'status' => 1,


            ],

            [
                'id' => '21',
                'iso' => 'BE',
                'name' => 'BELGIUM',
                'iso3' => 'BEL',
                'numcode' => '56',
                'phonecode' => '32',
                'status' => 1,


            ],

            [
                'id' => '22',
                'iso' => 'BZ',
                'name' => 'BELIZE',
                'iso3' => 'BLZ',
                'numcode' => '84',
                'phonecode' => '501',
                'status' => 1,


            ],

            [
                'id' => '23',
                'iso' => 'BJ',
                'name' => 'BENIN',
                'iso3' => 'BEN',
                'numcode' => '204',
                'phonecode' => '229',
                'status' => 1,


            ],

            [
                'id' => '24',
                'iso' => 'BM',
                'name' => 'BERMUDA',
                'iso3' => 'BMU',
                'numcode' => '60',
                'phonecode' => '1441',
                'status' => 1,


            ],

            [
                'id' => '25',
                'iso' => 'BT',
                'name' => 'BHUTAN',
                'iso3' => 'BTN',
                'numcode' => '64',
                'phonecode' => '975',
                'status' => 1,


            ],

            [
                'id' => '26',
                'iso' => 'BO',
                'name' => 'BOLIVIA',
                'iso3' => 'BOL',
                'numcode' => '68',
                'phonecode' => '591',
                'status' => 1,


            ],

            [
                'id' => '27',
                'iso' => 'BA',
                'name' => 'BOSNIA AND HERZEGOVINA',
                'iso3' => 'BIH',
                'numcode' => '70',
                'phonecode' => '387',
                'status' => 1,


            ],

            [
                'id' => '28',
                'iso' => 'BW',
                'name' => 'BOTSWANA',
                'iso3' => 'BWA',
                'numcode' => '72',
                'phonecode' => '267',
                'status' => 1,


            ],

            [
                'id' => '29',
                'iso' => 'BV',
                'name' => 'BOUVET ISLAND',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '30',
                'iso' => 'BR',
                'name' => 'BRAZIL',
                'iso3' => 'BRA',
                'numcode' => '76',
                'phonecode' => '55',
                'status' => 1,


            ],

            [
                'id' => '31',
                'iso' => 'IO',
                'name' => 'BRITISH INDIAN OCEAN TERRITORY',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '246',
                'status' => 1,


            ],

            [
                'id' => '32',
                'iso' => 'BN',
                'name' => 'BRUNEI DARUSSALAM',
                'iso3' => 'BRN',
                'numcode' => '96',
                'phonecode' => '673',
                'status' => 1,


            ],

            [
                'id' => '33',
                'iso' => 'BG',
                'name' => 'BULGARIA',
                'iso3' => 'BGR',
                'numcode' => '100',
                'phonecode' => '359',
                'status' => 1,


            ],

            [
                'id' => '34',
                'iso' => 'BF',
                'name' => 'BURKINA FASO',
                'iso3' => 'BFA',
                'numcode' => '854',
                'phonecode' => '226',
                'status' => 1,


            ],

            [
                'id' => '35',
                'iso' => 'BI',
                'name' => 'BURUNDI',
                'iso3' => 'BDI',
                'numcode' => '108',
                'phonecode' => '257',
                'status' => 1,


            ],

            [
                'id' => '36',
                'iso' => 'KH',
                'name' => 'CAMBODIA',
                'iso3' => 'KHM',
                'numcode' => '116',
                'phonecode' => '855',
                'status' => 1,


            ],

            [
                'id' => '37',
                'iso' => 'CM',
                'name' => 'CAMEROON',
                'iso3' => 'CMR',
                'numcode' => '120',
                'phonecode' => '237',
                'status' => 1,


            ],

            [
                'id' => '38',
                'iso' => 'CA',
                'name' => 'CANADA',
                'iso3' => 'CAN',
                'numcode' => '124',
                'phonecode' => '1',
                'status' => 1,


            ],

            [
                'id' => '39',
                'iso' => 'CV',
                'name' => 'CAPE VERDE',
                'iso3' => 'CPV',
                'numcode' => '132',
                'phonecode' => '238',
                'status' => 1,


            ],

            [
                'id' => '40',
                'iso' => 'KY',
                'name' => 'CAYMAN ISLANDS',
                'iso3' => 'CYM',
                'numcode' => '136',
                'phonecode' => '1345',
                'status' => 1,


            ],

            [
                'id' => '41',
                'iso' => 'CF',
                'name' => 'CENTRAL AFRICAN REPUBLIC',
                'iso3' => 'CAF',
                'numcode' => '140',
                'phonecode' => '236',
                'status' => 1,


            ],

            [
                'id' => '42',
                'iso' => 'TD',
                'name' => 'CHAD',
                'iso3' => 'TCD',
                'numcode' => '148',
                'phonecode' => '235',
                'status' => 1,


            ],

            [
                'id' => '43',
                'iso' => 'CL',
                'name' => 'CHILE',
                'iso3' => 'CHL',
                'numcode' => '152',
                'phonecode' => '56',
                'status' => 1,


            ],

            [
                'id' => '44',
                'iso' => 'CN',
                'name' => 'CHINA',
                'iso3' => 'CHN',
                'numcode' => '156',
                'phonecode' => '86',
                'status' => 1,


            ],

            [
                'id' => '45',
                'iso' => 'CX',
                'name' => 'CHRISTMAS ISLAND',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '61',
                'status' => 1,


            ],

            [
                'id' => '46',
                'iso' => 'CC',
                'name' => 'COCOS [KEELING] ISLANDS',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '672',
                'status' => 1,


            ],

            [
                'id' => '47',
                'iso' => 'CO',
                'name' => 'COLOMBIA',
                'iso3' => 'COL',
                'numcode' => '170',
                'phonecode' => '57',
                'status' => 1,


            ],

            [
                'id' => '48',
                'iso' => 'KM',
                'name' => 'COMOROS',
                'iso3' => 'COM',
                'numcode' => '174',
                'phonecode' => '269',
                'status' => 1,


            ],

            [
                'id' => '49',
                'iso' => 'CG',
                'name' => 'CONGO',
                'iso3' => 'COG',
                'numcode' => '178',
                'phonecode' => '242',
                'status' => 1,


            ],

            [
                'id' => '50',
                'iso' => 'CD',
                'name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
                'iso3' => 'COD',
                'numcode' => '180',
                'phonecode' => '242',
                'status' => 1,


            ],

            [
                'id' => '51',
                'iso' => 'CK',
                'name' => 'COOK ISLANDS',
                'iso3' => 'COK',
                'numcode' => '184',
                'phonecode' => '682',
                'status' => 1,


            ],

            [
                'id' => '52',
                'iso' => 'CR',
                'name' => 'COSTA RICA',
                'iso3' => 'CRI',
                'numcode' => '188',
                'phonecode' => '506',
                'status' => 1,


            ],

            [
                'id' => '53',
                'iso' => 'CI',
                'name' => 'COTE D\'IVOIRE',
                'iso3' => 'CIV',
                'numcode' => '384',
                'phonecode' => '225',
                'status' => 1,


            ],

            [
                'id' => '54',
                'iso' => 'HR',
                'name' => 'CROATIA',
                'iso3' => 'HRV',
                'numcode' => '191',
                'phonecode' => '385',
                'status' => 1,


            ],

            [
                'id' => '55',
                'iso' => 'CU',
                'name' => 'CUBA',
                'iso3' => 'CUB',
                'numcode' => '192',
                'phonecode' => '53',
                'status' => 1,


            ],

            [
                'id' => '56',
                'iso' => 'CY',
                'name' => 'CYPRUS',
                'iso3' => 'CYP',
                'numcode' => '196',
                'phonecode' => '357',
                'status' => 1,


            ],

            [
                'id' => '57',
                'iso' => 'CZ',
                'name' => 'CZECH REPUBLIC',
                'iso3' => 'CZE',
                'numcode' => '203',
                'phonecode' => '420',
                'status' => 1,


            ],

            [
                'id' => '58',
                'iso' => 'DK',
                'name' => 'DENMARK',
                'iso3' => 'DNK',
                'numcode' => '208',
                'phonecode' => '45',
                'status' => 1,


            ],

            [
                'id' => '59',
                'iso' => 'DJ',
                'name' => 'DJIBOUTI',
                'iso3' => 'DJI',
                'numcode' => '262',
                'phonecode' => '253',
                'status' => 1,


            ],

            [
                'id' => '60',
                'iso' => 'DM',
                'name' => 'DOMINICA',
                'iso3' => 'DMA',
                'numcode' => '212',
                'phonecode' => '1767',
                'status' => 1,


            ],

            [
                'id' => '61',
                'iso' => 'DO',
                'name' => 'DOMINICAN REPUBLIC',
                'iso3' => 'DOM',
                'numcode' => '214',
                'phonecode' => '1809',
                'status' => 1,


            ],

            [
                'id' => '62',
                'iso' => 'EC',
                'name' => 'ECUADOR',
                'iso3' => 'ECU',
                'numcode' => '218',
                'phonecode' => '593',
                'status' => 1,


            ],

            [
                'id' => '63',
                'iso' => 'EG',
                'name' => 'EGYPT',
                'iso3' => 'EGY',
                'numcode' => '818',
                'phonecode' => '20',
                'status' => 1,


            ],

            [
                'id' => '64',
                'iso' => 'SV',
                'name' => 'EL SALVADOR',
                'iso3' => 'SLV',
                'numcode' => '222',
                'phonecode' => '503',
                'status' => 1,


            ],

            [
                'id' => '65',
                'iso' => 'GQ',
                'name' => 'EQUATORIAL GUINEA',
                'iso3' => 'GNQ',
                'numcode' => '226',
                'phonecode' => '240',
                'status' => 1,


            ],

            [
                'id' => '66',
                'iso' => 'ER',
                'name' => 'ERITREA',
                'iso3' => 'ERI',
                'numcode' => '232',
                'phonecode' => '291',
                'status' => 1,


            ],

            [
                'id' => '67',
                'iso' => 'EE',
                'name' => 'ESTONIA',
                'iso3' => 'EST',
                'numcode' => '233',
                'phonecode' => '372',
                'status' => 1,


            ],

            [
                'id' => '68',
                'iso' => 'ET',
                'name' => 'ETHIOPIA',
                'iso3' => 'ETH',
                'numcode' => '231',
                'phonecode' => '251',
                'status' => 1,


            ],

            [
                'id' => '69',
                'iso' => 'FK',
                'name' => 'FALKLAND ISLANDS [MALVINAS]',
                'iso3' => 'FLK',
                'numcode' => '238',
                'phonecode' => '500',
                'status' => 1,


            ],

            [
                'id' => '70',
                'iso' => 'FO',
                'name' => 'FAROE ISLANDS',
                'iso3' => 'FRO',
                'numcode' => '234',
                'phonecode' => '298',
                'status' => 1,


            ],

            [
                'id' => '71',
                'iso' => 'FJ',
                'name' => 'FIJI',
                'iso3' => 'FJI',
                'numcode' => '242',
                'phonecode' => '679',
                'status' => 1,


            ],

            [
                'id' => '72',
                'iso' => 'FI',
                'name' => 'FINLAND',
                'iso3' => 'FIN',
                'numcode' => '246',
                'phonecode' => '358',
                'status' => 1,


            ],

            [
                'id' => '73',
                'iso' => 'FR',
                'name' => 'FRANCE',
                'iso3' => 'FRA',
                'numcode' => '250',
                'phonecode' => '33',
                'status' => 1,


            ],

            [
                'id' => '74',
                'iso' => 'GF',
                'name' => 'FRENCH GUIANA',
                'iso3' => 'GUF',
                'numcode' => '254',
                'phonecode' => '594',
                'status' => 1,


            ],

            [
                'id' => '75',
                'iso' => 'PF',
                'name' => 'FRENCH POLYNESIA',
                'iso3' => 'PYF',
                'numcode' => '258',
                'phonecode' => '689',
                'status' => 1,


            ],

            [
                'id' => '76',
                'iso' => 'TF',
                'name' => 'FRENCH SOUTHERN TERRITORIES',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '77',
                'iso' => 'GA',
                'name' => 'GABON',
                'iso3' => 'GAB',
                'numcode' => '266',
                'phonecode' => '241',
                'status' => 1,


            ],

            [
                'id' => '78',
                'iso' => 'GM',
                'name' => 'GAMBIA',
                'iso3' => 'GMB',
                'numcode' => '270',
                'phonecode' => '220',
                'status' => 1,


            ],

            [
                'id' => '79',
                'iso' => 'GE',
                'name' => 'GEORGIA',
                'iso3' => 'GEO',
                'numcode' => '268',
                'phonecode' => '995',
                'status' => 1,


            ],

            [
                'id' => '80',
                'iso' => 'DE',
                'name' => 'GERMANY',
                'iso3' => 'DEU',
                'numcode' => '276',
                'phonecode' => '49',
                'status' => 1,


            ],

            [
                'id' => '81',
                'iso' => 'GH',
                'name' => 'GHANA',
                'iso3' => 'GHA',
                'numcode' => '288',
                'phonecode' => '233',
                'status' => 1,


            ],

            [
                'id' => '82',
                'iso' => 'GI',
                'name' => 'GIBRALTAR',
                'iso3' => 'GIB',
                'numcode' => '292',
                'phonecode' => '350',
                'status' => 1,


            ],

            [
                'id' => '83',
                'iso' => 'GR',
                'name' => 'GREECE',
                'iso3' => 'GRC',
                'numcode' => '300',
                'phonecode' => '30',
                'status' => 1,


            ],

            [
                'id' => '84',
                'iso' => 'GL',
                'name' => 'GREENLAND',
                'iso3' => 'GRL',
                'numcode' => '304',
                'phonecode' => '299',
                'status' => 1,


            ],

            [
                'id' => '85',
                'iso' => 'GD',
                'name' => 'GRENADA',
                'iso3' => 'GRD',
                'numcode' => '308',
                'phonecode' => '1473',
                'status' => 1,


            ],

            [
                'id' => '86',
                'iso' => 'GP',
                'name' => 'GUADELOUPE',
                'iso3' => 'GLP',
                'numcode' => '312',
                'phonecode' => '590',
                'status' => 1,


            ],

            [
                'id' => '87',
                'iso' => 'GU',
                'name' => 'GUAM',
                'iso3' => 'GUM',
                'numcode' => '316',
                'phonecode' => '1671',
                'status' => 1,


            ],

            [
                'id' => '88',
                'iso' => 'GT',
                'name' => 'GUATEMALA',
                'iso3' => 'GTM',
                'numcode' => '320',
                'phonecode' => '502',
                'status' => 1,


            ],

            [
                'id' => '89',
                'iso' => 'GN',
                'name' => 'GUINEA',
                'iso3' => 'GIN',
                'numcode' => '324',
                'phonecode' => '224',
                'status' => 1,


            ],

            [
                'id' => '90',
                'iso' => 'GW',
                'name' => 'GUINEA-BISSAU',
                'iso3' => 'GNB',
                'numcode' => '624',
                'phonecode' => '245',
                'status' => 1,


            ],

            [
                'id' => '91',
                'iso' => 'GY',
                'name' => 'GUYANA',
                'iso3' => 'GUY',
                'numcode' => '328',
                'phonecode' => '592',
                'status' => 1,


            ],

            [
                'id' => '92',
                'iso' => 'HT',
                'name' => 'HAITI',
                'iso3' => 'HTI',
                'numcode' => '332',
                'phonecode' => '509',
                'status' => 1,


            ],

            [
                'id' => '93',
                'iso' => 'HM',
                'name' => 'HEARD ISLAND AND MCDONALD ISLANDS',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '94',
                'iso' => 'VA',
                'name' => 'HOLY SEE [VATICAN CITY STATE]',
                'iso3' => 'VAT',
                'numcode' => '336',
                'phonecode' => '39',
                'status' => 1,


            ],

            [
                'id' => '95',
                'iso' => 'HN',
                'name' => 'HONDURAS',
                'iso3' => 'HND',
                'numcode' => '340',
                'phonecode' => '504',
                'status' => 1,


            ],

            [
                'id' => '96',
                'iso' => 'HK',
                'name' => 'HONG KONG',
                'iso3' => 'HKG',
                'numcode' => '344',
                'phonecode' => '852',
                'status' => 1,


            ],

            [
                'id' => '97',
                'iso' => 'HU',
                'name' => 'HUNGARY',
                'iso3' => 'HUN',
                'numcode' => '348',
                'phonecode' => '36',
                'status' => 1,


            ],

            [
                'id' => '98',
                'iso' => 'IS',
                'name' => 'ICELAND',
                'iso3' => 'ISL',
                'numcode' => '352',
                'phonecode' => '354',
                'status' => 1,


            ],

            [
                'id' => '99',
                'iso' => 'IN',
                'name' => 'INDIA',
                'iso3' => 'IND',
                'numcode' => '356',
                'phonecode' => '91',
                'status' => 1,


            ],

            [
                'id' => '100',
                'iso' => 'ID',
                'name' => 'INDONESIA',
                'iso3' => 'IDN',
                'numcode' => '360',
                'phonecode' => '62',
                'status' => 1,


            ],

            [
                'id' => '101',
                'iso' => 'IR',
                'name' => 'IRAN, ISLAMIC REPUBLIC OF',
                'iso3' => 'IRN',
                'numcode' => '364',
                'phonecode' => '98',
                'status' => 1,


            ],

            [
                'id' => '102',
                'iso' => 'IQ',
                'name' => 'IRAQ',
                'iso3' => 'IRQ',
                'numcode' => '368',
                'phonecode' => '964',
                'status' => 1,


            ],

            [
                'id' => '103',
                'iso' => 'IE',
                'name' => 'IRELAND',
                'iso3' => 'IRL',
                'numcode' => '372',
                'phonecode' => '353',
                'status' => 1,


            ],

            [
                'id' => '104',
                'iso' => 'IL',
                'name' => 'ISRAEL',
                'iso3' => 'ISR',
                'numcode' => '376',
                'phonecode' => '972',
                'status' => 1,


            ],

            [
                'id' => '105',
                'iso' => 'IT',
                'name' => 'ITALY',
                'iso3' => 'ITA',
                'numcode' => '380',
                'phonecode' => '39',
                'status' => 1,


            ],

            [
                'id' => '106',
                'iso' => 'JM',
                'name' => 'JAMAICA',
                'iso3' => 'JAM',
                'numcode' => '388',
                'phonecode' => '1876',
                'status' => 1,


            ],

            [
                'id' => '107',
                'iso' => 'JP',
                'name' => 'JAPAN',
                'iso3' => 'JPN',
                'numcode' => '392',
                'phonecode' => '81',
                'status' => 1,


            ],

            [
                'id' => '108',
                'iso' => 'JO',
                'name' => 'JORDAN',
                'iso3' => 'JOR',
                'numcode' => '400',
                'phonecode' => '962',
                'status' => 1,


            ],

            [
                'id' => '109',
                'iso' => 'KZ',
                'name' => 'KAZAKHSTAN',
                'iso3' => 'KAZ',
                'numcode' => '398',
                'phonecode' => '7',
                'status' => 1,


            ],

            [
                'id' => '110',
                'iso' => 'KE',
                'name' => 'KENYA',
                'iso3' => 'KEN',
                'numcode' => '404',
                'phonecode' => '254',
                'status' => 1,


            ],

            [
                'id' => '111',
                'iso' => 'KI',
                'name' => 'KIRIBATI',
                'iso3' => 'KIR',
                'numcode' => '296',
                'phonecode' => '686',
                'status' => 1,


            ],

            [
                'id' => '112',
                'iso' => 'KP',
                'name' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',
                'iso3' => 'PRK',
                'numcode' => '408',
                'phonecode' => '850',
                'status' => 1,


            ],

            [
                'id' => '113',
                'iso' => 'KR',
                'name' => 'KOREA, REPUBLIC OF',
                'iso3' => 'KOR',
                'numcode' => '410',
                'phonecode' => '82',
                'status' => 1,


            ],

            [
                'id' => '114',
                'iso' => 'KW',
                'name' => 'KUWAIT',
                'iso3' => 'KWT',
                'numcode' => '414',
                'phonecode' => '965',
                'status' => 1,


            ],

            [
                'id' => '115',
                'iso' => 'KG',
                'name' => 'KYRGYZSTAN',
                'iso3' => 'KGZ',
                'numcode' => '417',
                'phonecode' => '996',
                'status' => 1,


            ],

            [
                'id' => '116',
                'iso' => 'LA',
                'name' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',
                'iso3' => 'LAO',
                'numcode' => '418',
                'phonecode' => '856',
                'status' => 1,


            ],

            [
                'id' => '117',
                'iso' => 'LV',
                'name' => 'LATVIA',
                'iso3' => 'LVA',
                'numcode' => '428',
                'phonecode' => '371',
                'status' => 1,


            ],

            [
                'id' => '118',
                'iso' => 'LB',
                'name' => 'LEBANON',
                'iso3' => 'LBN',
                'numcode' => '422',
                'phonecode' => '961',
                'status' => 1,


            ],

            [
                'id' => '119',
                'iso' => 'LS',
                'name' => 'LESOTHO',
                'iso3' => 'LSO',
                'numcode' => '426',
                'phonecode' => '266',
                'status' => 1,


            ],

            [
                'id' => '120',
                'iso' => 'LR',
                'name' => 'LIBERIA',
                'iso3' => 'LBR',
                'numcode' => '430',
                'phonecode' => '231',
                'status' => 1,


            ],

            [
                'id' => '121',
                'iso' => 'LY',
                'name' => 'LIBYAN ARAB JAMAHIRIYA',
                'iso3' => 'LBY',
                'numcode' => '434',
                'phonecode' => '218',
                'status' => 1,


            ],

            [
                'id' => '122',
                'iso' => 'LI',
                'name' => 'LIECHTENSTEIN',
                'iso3' => 'LIE',
                'numcode' => '438',
                'phonecode' => '423',
                'status' => 1,


            ],

            [
                'id' => '123',
                'iso' => 'LT',
                'name' => 'LITHUANIA',
                'iso3' => 'LTU',
                'numcode' => '440',
                'phonecode' => '370',
                'status' => 1,


            ],

            [
                'id' => '124',
                'iso' => 'LU',
                'name' => 'LUXEMBOURG',
                'iso3' => 'LUX',
                'numcode' => '442',
                'phonecode' => '352',
                'status' => 1,


            ],

            [
                'id' => '125',
                'iso' => 'MO',
                'name' => 'MACAO',
                'iso3' => 'MAC',
                'numcode' => '446',
                'phonecode' => '853',
                'status' => 1,


            ],

            [
                'id' => '126',
                'iso' => 'MK',
                'name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
                'iso3' => 'MKD',
                'numcode' => '807',
                'phonecode' => '389',
                'status' => 1,


            ],

            [
                'id' => '127',
                'iso' => 'MG',
                'name' => 'MADAGASCAR',
                'iso3' => 'MDG',
                'numcode' => '450',
                'phonecode' => '261',
                'status' => 1,


            ],

            [
                'id' => '128',
                'iso' => 'MW',
                'name' => 'MALAWI',
                'iso3' => 'MWI',
                'numcode' => '454',
                'phonecode' => '265',
                'status' => 1,


            ],

            [
                'id' => '129',
                'iso' => 'MY',
                'name' => 'MALAYSIA',
                'iso3' => 'MYS',
                'numcode' => '458',
                'phonecode' => '60',
                'status' => 1,


            ],

            [
                'id' => '130',
                'iso' => 'MV',
                'name' => 'MALDIVES',
                'iso3' => 'MDV',
                'numcode' => '462',
                'phonecode' => '960',
                'status' => 1,


            ],

            [
                'id' => '131',
                'iso' => 'ML',
                'name' => 'MALI',
                'iso3' => 'MLI',
                'numcode' => '466',
                'phonecode' => '223',
                'status' => 1,


            ],

            [
                'id' => '132',
                'iso' => 'MT',
                'name' => 'MALTA',
                'iso3' => 'MLT',
                'numcode' => '470',
                'phonecode' => '356',
                'status' => 1,


            ],

            [
                'id' => '133',
                'iso' => 'MH',
                'name' => 'MARSHALL ISLANDS',
                'iso3' => 'MHL',
                'numcode' => '584',
                'phonecode' => '692',
                'status' => 1,


            ],

            [
                'id' => '134',
                'iso' => 'MQ',
                'name' => 'MARTINIQUE',
                'iso3' => 'MTQ',
                'numcode' => '474',
                'phonecode' => '596',
                'status' => 1,


            ],

            [
                'id' => '135',
                'iso' => 'MR',
                'name' => 'MAURITANIA',
                'iso3' => 'MRT',
                'numcode' => '478',
                'phonecode' => '222',
                'status' => 1,


            ],

            [
                'id' => '136',
                'iso' => 'MU',
                'name' => 'MAURITIUS',
                'iso3' => 'MUS',
                'numcode' => '480',
                'phonecode' => '230',
                'status' => 1,


            ],

            [
                'id' => '137',
                'iso' => 'YT',
                'name' => 'MAYOTTE',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '269',
                'status' => 1,


            ],

            [
                'id' => '138',
                'iso' => 'MX',
                'name' => 'MEXICO',
                'iso3' => 'MEX',
                'numcode' => '484',
                'phonecode' => '52',
                'status' => 1,


            ],

            [
                'id' => '139',
                'iso' => 'FM',
                'name' => 'MICRONESIA, FEDERATED STATES OF',
                'iso3' => 'FSM',
                'numcode' => '583',
                'phonecode' => '691',
                'status' => 1,


            ],

            [
                'id' => '140',
                'iso' => 'MD',
                'name' => 'MOLDOVA, REPUBLIC OF',
                'iso3' => 'MDA',
                'numcode' => '498',
                'phonecode' => '373',
                'status' => 1,


            ],

            [
                'id' => '141',
                'iso' => 'MC',
                'name' => 'MONACO',
                'iso3' => 'MCO',
                'numcode' => '492',
                'phonecode' => '377',
                'status' => 1,


            ],

            [
                'id' => '142',
                'iso' => 'MN',
                'name' => 'MONGOLIA',
                'iso3' => 'MNG',
                'numcode' => '496',
                'phonecode' => '976',
                'status' => 1,


            ],

            [
                'id' => '143',
                'iso' => 'MS',
                'name' => 'MONTSERRAT',
                'iso3' => 'MSR',
                'numcode' => '500',
                'phonecode' => '1664',
                'status' => 1,


            ],

            [
                'id' => '144',
                'iso' => 'MA',
                'name' => 'MOROCCO',
                'iso3' => 'MAR',
                'numcode' => '504',
                'phonecode' => '212',
                'status' => 1,


            ],

            [
                'id' => '145',
                'iso' => 'MZ',
                'name' => 'MOZAMBIQUE',
                'iso3' => 'MOZ',
                'numcode' => '508',
                'phonecode' => '258',
                'status' => 1,


            ],

            [
                'id' => '146',
                'iso' => 'MM',
                'name' => 'MYANMAR',
                'iso3' => 'MMR',
                'numcode' => '104',
                'phonecode' => '95',
                'status' => 1,


            ],

            [
                'id' => '147',
                'iso' => 'NA',
                'name' => 'NAMIBIA',
                'iso3' => 'NAM',
                'numcode' => '516',
                'phonecode' => '264',
                'status' => 1,


            ],

            [
                'id' => '148',
                'iso' => 'NR',
                'name' => 'NAURU',
                'iso3' => 'NRU',
                'numcode' => '520',
                'phonecode' => '674',
                'status' => 1,


            ],

            [
                'id' => '149',
                'iso' => 'NP',
                'name' => 'NEPAL',
                'iso3' => 'NPL',
                'numcode' => '524',
                'phonecode' => '977',
                'status' => 1,


            ],

            [
                'id' => '150',
                'iso' => 'NL',
                'name' => 'NETHERLANDS',
                'iso3' => 'NLD',
                'numcode' => '528',
                'phonecode' => '31',
                'status' => 1,


            ],

            [
                'id' => '151',
                'iso' => 'AN',
                'name' => 'NETHERLANDS ANTILLES',
                'iso3' => 'ANT',
                'numcode' => '530',
                'phonecode' => '599',
                'status' => 1,


            ],

            [
                'id' => '152',
                'iso' => 'NC',
                'name' => 'NEW CALEDONIA',
                'iso3' => 'NCL',
                'numcode' => '540',
                'phonecode' => '687',
                'status' => 1,


            ],

            [
                'id' => '153',
                'iso' => 'NZ',
                'name' => 'NEW ZEALAND',
                'iso3' => 'NZL',
                'numcode' => '554',
                'phonecode' => '64',
                'status' => 1,


            ],

            [
                'id' => '154',
                'iso' => 'NI',
                'name' => 'NICARAGUA',
                'iso3' => 'NIC',
                'numcode' => '558',
                'phonecode' => '505',
                'status' => 1,


            ],

            [
                'id' => '155',
                'iso' => 'NE',
                'name' => 'NIGER',
                'iso3' => 'NER',
                'numcode' => '562',
                'phonecode' => '227',
                'status' => 1,


            ],

            [
                'id' => '156',
                'iso' => 'NG',
                'name' => 'NIGERIA',
                'iso3' => 'NGA',
                'numcode' => '566',
                'phonecode' => '234',
                'status' => 1,


            ],

            [
                'id' => '157',
                'iso' => 'NU',
                'name' => 'NIUE',
                'iso3' => 'NIU',
                'numcode' => '570',
                'phonecode' => '683',
                'status' => 1,


            ],

            [
                'id' => '158',
                'iso' => 'NF',
                'name' => 'NORFOLK ISLAND',
                'iso3' => 'NFK',
                'numcode' => '574',
                'phonecode' => '672',
                'status' => 1,


            ],

            [
                'id' => '159',
                'iso' => 'MP',
                'name' => 'NORTHERN MARIANA ISLANDS',
                'iso3' => 'MNP',
                'numcode' => '580',
                'phonecode' => '1670',
                'status' => 1,


            ],

            [
                'id' => '160',
                'iso' => 'NO',
                'name' => 'NORWAY',
                'iso3' => 'NOR',
                'numcode' => '578',
                'phonecode' => '47',
                'status' => 1,


            ],

            [
                'id' => '161',
                'iso' => 'OM',
                'name' => 'OMAN',
                'iso3' => 'OMN',
                'numcode' => '512',
                'phonecode' => '968',
                'status' => 1,


            ],

            [
                'id' => '162',
                'iso' => 'PK',
                'name' => 'PAKISTAN',
                'iso3' => 'PAK',
                'numcode' => '586',
                'phonecode' => '92',
                'status' => 1,


            ],

            [
                'id' => '163',
                'iso' => 'PW',
                'name' => 'PALAU',
                'iso3' => 'PLW',
                'numcode' => '585',
                'phonecode' => '680',
                'status' => 1,


            ],

            [
                'id' => '164',
                'iso' => 'PS',
                'name' => 'PALESTINIAN TERRITORY, OCCUPIED',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '970',
                'status' => 1,


            ],

            [
                'id' => '165',
                'iso' => 'PA',
                'name' => 'PANAMA',
                'iso3' => 'PAN',
                'numcode' => '591',
                'phonecode' => '507',
                'status' => 1,


            ],

            [
                'id' => '166',
                'iso' => 'PG',
                'name' => 'PAPUA NEW GUINEA',
                'iso3' => 'PNG',
                'numcode' => '598',
                'phonecode' => '675',
                'status' => 1,


            ],

            [
                'id' => '167',
                'iso' => 'PY',
                'name' => 'PARAGUAY',
                'iso3' => 'PRY',
                'numcode' => '600',
                'phonecode' => '595',
                'status' => 1,


            ],

            [
                'id' => '168',
                'iso' => 'PE',
                'name' => 'PERU',
                'iso3' => 'PER',
                'numcode' => '604',
                'phonecode' => '51',
                'status' => 1,


            ],

            [
                'id' => '169',
                'iso' => 'PH',
                'name' => 'PHILIPPINES',
                'iso3' => 'PHL',
                'numcode' => '608',
                'phonecode' => '63',
                'status' => 1,


            ],

            [
                'id' => '170',
                'iso' => 'PN',
                'name' => 'PITCAIRN',
                'iso3' => 'PCN',
                'numcode' => '612',
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '171',
                'iso' => 'PL',
                'name' => 'POLAND',
                'iso3' => 'POL',
                'numcode' => '616',
                'phonecode' => '48',
                'status' => 1,


            ],

            [
                'id' => '172',
                'iso' => 'PT',
                'name' => 'PORTUGAL',
                'iso3' => 'PRT',
                'numcode' => '620',
                'phonecode' => '351',
                'status' => 1,


            ],

            [
                'id' => '173',
                'iso' => 'PR',
                'name' => 'PUERTO RICO',
                'iso3' => 'PRI',
                'numcode' => '630',
                'phonecode' => '1787',
                'status' => 1,


            ],

            [
                'id' => '174',
                'iso' => 'QA',
                'name' => 'QATAR',
                'iso3' => 'QAT',
                'numcode' => '634',
                'phonecode' => '974',
                'status' => 1,


            ],

            [
                'id' => '175',
                'iso' => 'RE',
                'name' => 'REUNION',
                'iso3' => 'REU',
                'numcode' => '638',
                'phonecode' => '262',
                'status' => 1,


            ],

            [
                'id' => '176',
                'iso' => 'RO',
                'name' => 'ROMANIA',
                'iso3' => 'ROM',
                'numcode' => '642',
                'phonecode' => '40',
                'status' => 1,


            ],

            [
                'id' => '177',
                'iso' => 'RU',
                'name' => 'RUSSIAN FEDERATION',
                'iso3' => 'RUS',
                'numcode' => '643',
                'phonecode' => '70',
                'status' => 1,


            ],

            [
                'id' => '178',
                'iso' => 'RW',
                'name' => 'RWANDA',
                'iso3' => 'RWA',
                'numcode' => '646',
                'phonecode' => '250',
                'status' => 1,


            ],

            [
                'id' => '179',
                'iso' => 'SH',
                'name' => 'SAINT HELENA',
                'iso3' => 'SHN',
                'numcode' => '654',
                'phonecode' => '290',
                'status' => 1,


            ],

            [
                'id' => '180',
                'iso' => 'KN',
                'name' => 'SAINT KITTS AND NEVIS',
                'iso3' => 'KNA',
                'numcode' => '659',
                'phonecode' => '1869',
                'status' => 1,


            ],

            [
                'id' => '181',
                'iso' => 'LC',
                'name' => 'SAINT LUCIA',
                'iso3' => 'LCA',
                'numcode' => '662',
                'phonecode' => '1758',
                'status' => 1,


            ],

            [
                'id' => '182',
                'iso' => 'PM',
                'name' => 'SAINT PIERRE AND MIQUELON',
                'iso3' => 'SPM',
                'numcode' => '666',
                'phonecode' => '508',
                'status' => 1,


            ],

            [
                'id' => '183',
                'iso' => 'VC',
                'name' => 'SAINT VINCENT AND THE GRENADINES',
                'iso3' => 'VCT',
                'numcode' => '670',
                'phonecode' => '1784',
                'status' => 1,


            ],

            [
                'id' => '184',
                'iso' => 'WS',
                'name' => 'SAMOA',
                'iso3' => 'WSM',
                'numcode' => '882',
                'phonecode' => '684',
                'status' => 1,


            ],

            [
                'id' => '185',
                'iso' => 'SM',
                'name' => 'SAN MARINO',
                'iso3' => 'SMR',
                'numcode' => '674',
                'phonecode' => '378',
                'status' => 1,


            ],

            [
                'id' => '186',
                'iso' => 'ST',
                'name' => 'SAO TOME AND PRINCIPE',
                'iso3' => 'STP',
                'numcode' => '678',
                'phonecode' => '239',
                'status' => 1,


            ],

            [
                'id' => '187',
                'iso' => 'SA',
                'name' => 'SAUDI ARABIA',
                'iso3' => 'SAU',
                'numcode' => '682',
                'phonecode' => '966',
                'status' => 1,


            ],

            [
                'id' => '188',
                'iso' => 'SN',
                'name' => 'SENEGAL',
                'iso3' => 'SEN',
                'numcode' => '686',
                'phonecode' => '221',
                'status' => 1,


            ],

            [
                'id' => '189',
                'iso' => 'CS',
                'name' => 'SERBIA AND MONTENEGRO',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '381',
                'status' => 1,


            ],

            [
                'id' => '190',
                'iso' => 'SC',
                'name' => 'SEYCHELLES',
                'iso3' => 'SYC',
                'numcode' => '690',
                'phonecode' => '248',
                'status' => 1,


            ],

            [
                'id' => '191',
                'iso' => 'SL',
                'name' => 'SIERRA LEONE',
                'iso3' => 'SLE',
                'numcode' => '694',
                'phonecode' => '232',
                'status' => 1,


            ],

            [
                'id' => '192',
                'iso' => 'SG',
                'name' => 'SINGAPORE',
                'iso3' => 'SGP',
                'numcode' => '702',
                'phonecode' => '65',
                'status' => 1,


            ],

            [
                'id' => '193',
                'iso' => 'SK',
                'name' => 'SLOVAKIA',
                'iso3' => 'SVK',
                'numcode' => '703',
                'phonecode' => '421',
                'status' => 1,


            ],

            [
                'id' => '194',
                'iso' => 'SI',
                'name' => 'SLOVENIA',
                'iso3' => 'SVN',
                'numcode' => '705',
                'phonecode' => '386',
                'status' => 1,


            ],

            [
                'id' => '195',
                'iso' => 'SB',
                'name' => 'SOLOMON ISLANDS',
                'iso3' => 'SLB',
                'numcode' => '90',
                'phonecode' => '677',
                'status' => 1,


            ],

            [
                'id' => '196',
                'iso' => 'SO',
                'name' => 'SOMALIA',
                'iso3' => 'SOM',
                'numcode' => '706',
                'phonecode' => '252',
                'status' => 1,


            ],

            [
                'id' => '197',
                'iso' => 'ZA',
                'name' => 'SOUTH AFRICA',
                'iso3' => 'ZAF',
                'numcode' => '710',
                'phonecode' => '27',
                'status' => 1,


            ],

            [
                'id' => '198',
                'iso' => 'GS',
                'name' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '0',
                'status' => 1,


            ],

            [
                'id' => '199',
                'iso' => 'ES',
                'name' => 'SPAIN',
                'iso3' => 'ESP',
                'numcode' => '724',
                'phonecode' => '34',
                'status' => 1,


            ],

            [
                'id' => '200',
                'iso' => 'LK',
                'name' => 'SRI LANKA',
                'iso3' => 'LKA',
                'numcode' => '144',
                'phonecode' => '94',
                'status' => 1,


            ],

            [
                'id' => '201',
                'iso' => 'SD',
                'name' => 'SUDAN',
                'iso3' => 'SDN',
                'numcode' => '736',
                'phonecode' => '249',
                'status' => 1,


            ],

            [
                'id' => '202',
                'iso' => 'SR',
                'name' => 'SURINAME',
                'iso3' => 'SUR',
                'numcode' => '740',
                'phonecode' => '597',
                'status' => 1,


            ],

            [
                'id' => '203',
                'iso' => 'SJ',
                'name' => 'SVALBARD AND JAN MAYEN',
                'iso3' => 'SJM',
                'numcode' => '744',
                'phonecode' => '47',
                'status' => 1,


            ],

            [
                'id' => '204',
                'iso' => 'SZ',
                'name' => 'SWAZILAND',
                'iso3' => 'SWZ',
                'numcode' => '748',
                'phonecode' => '268',
                'status' => 1,


            ],

            [
                'id' => '205',
                'iso' => 'SE',
                'name' => 'SWEDEN',
                'iso3' => 'SWE',
                'numcode' => '752',
                'phonecode' => '46',
                'status' => 1,


            ],

            [
                'id' => '206',
                'iso' => 'CH',
                'name' => 'SWITZERLAND',
                'iso3' => 'CHE',
                'numcode' => '756',
                'phonecode' => '41',
                'status' => 1,


            ],

            [
                'id' => '207',
                'iso' => 'SY',
                'name' => 'SYRIAN ARAB REPUBLIC',
                'iso3' => 'SYR',
                'numcode' => '760',
                'phonecode' => '963',
                'status' => 1,


            ],

            [
                'id' => '208',
                'iso' => 'TW',
                'name' => 'TAIWAN, PROVINCE OF CHINA',
                'iso3' => 'TWN',
                'numcode' => '158',
                'phonecode' => '886',
                'status' => 1,


            ],

            [
                'id' => '209',
                'iso' => 'TJ',
                'name' => 'TAJIKISTAN',
                'iso3' => 'TJK',
                'numcode' => '762',
                'phonecode' => '992',
                'status' => 1,


            ],

            [
                'id' => '210',
                'iso' => 'TZ',
                'name' => 'TANZANIA, UNITED REPUBLIC OF',
                'iso3' => 'TZA',
                'numcode' => '834',
                'phonecode' => '255',
                'status' => 1,


            ],

            [
                'id' => '211',
                'iso' => 'TH',
                'name' => 'THAILAND',
                'iso3' => 'THA',
                'numcode' => '764',
                'phonecode' => '66',
                'status' => 1,


            ],

            [
                'id' => '212',
                'iso' => 'TL',
                'name' => 'TIMOR-LESTE',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '670',
                'status' => 1,


            ],

            [
                'id' => '213',
                'iso' => 'TG',
                'name' => 'TOGO',
                'iso3' => 'TGO',
                'numcode' => '768',
                'phonecode' => '228',
                'status' => 1,


            ],

            [
                'id' => '214',
                'iso' => 'TK',
                'name' => 'TOKELAU',
                'iso3' => 'TKL',
                'numcode' => '772',
                'phonecode' => '690',
                'status' => 1,


            ],

            [
                'id' => '215',
                'iso' => 'TO',
                'name' => 'TONGA',
                'iso3' => 'TON',
                'numcode' => '776',
                'phonecode' => '676',
                'status' => 1,


            ],

            [
                'id' => '216',
                'iso' => 'TT',
                'name' => 'TRINIDAD AND TOBAGO',
                'iso3' => 'TTO',
                'numcode' => '780',
                'phonecode' => '1868',
                'status' => 1,


            ],

            [
                'id' => '217',
                'iso' => 'TN',
                'name' => 'TUNISIA',
                'iso3' => 'TUN',
                'numcode' => '788',
                'phonecode' => '216',
                'status' => 1,


            ],

            [
                'id' => '218',
                'iso' => 'TR',
                'name' => 'TURKEY',
                'iso3' => 'TUR',
                'numcode' => '792',
                'phonecode' => '90',
                'status' => 1,


            ],

            [
                'id' => '219',
                'iso' => 'TM',
                'name' => 'TURKMENISTAN',
                'iso3' => 'TKM',
                'numcode' => '795',
                'phonecode' => '7370',
                'status' => 1,


            ],

            [
                'id' => '220',
                'iso' => 'TC',
                'name' => 'TURKS AND CAICOS ISLANDS',
                'iso3' => 'TCA',
                'numcode' => '796',
                'phonecode' => '1649',
                'status' => 1,


            ],

            [
                'id' => '221',
                'iso' => 'TV',
                'name' => 'TUVALU',
                'iso3' => 'TUV',
                'numcode' => '798',
                'phonecode' => '688',
                'status' => 1,


            ],

            [
                'id' => '222',
                'iso' => 'UG',
                'name' => 'UGANDA',
                'iso3' => 'UGA',
                'numcode' => '800',
                'phonecode' => '256',
                'status' => 1,


            ],

            [
                'id' => '223',
                'iso' => 'UA',
                'name' => 'UKRAINE',
                'iso3' => 'UKR',
                'numcode' => '804',
                'phonecode' => '380',
                'status' => 1,


            ],

            [
                'id' => '224',
                'iso' => 'AE',
                'name' => 'UNITED ARAB EMIRATES',
                'iso3' => 'ARE',
                'numcode' => '784',
                'phonecode' => '971',
                'status' => 1,


            ],

            [
                'id' => '225',
                'iso' => 'GB',
                'name' => 'UNITED KINGDOM',
                'iso3' => 'GBR',
                'numcode' => '826',
                'phonecode' => '44',
                'status' => 1,


            ],

            [
                'id' => '226',
                'iso' => 'US',
                'name' => 'UNITED STATES',
                'iso3' => 'USA',
                'numcode' => '840',
                'phonecode' => '1',
                'status' => 1,


            ],

            [
                'id' => '227',
                'iso' => 'UM',
                'name' => 'UNITED STATES MINOR OUTLYING ISLANDS',
                'iso3' => NULL,
                'numcode' => NULL,
                'phonecode' => '1',
                'status' => 1,


            ],

            [
                'id' => '228',
                'iso' => 'UY',
                'name' => 'URUGUAY',
                'iso3' => 'URY',
                'numcode' => '858',
                'phonecode' => '598',
                'status' => 1,


            ],

            [
                'id' => '229',
                'iso' => 'UZ',
                'name' => 'UZBEKISTAN',
                'iso3' => 'UZB',
                'numcode' => '860',
                'phonecode' => '998',
                'status' => 1,


            ],

            [
                'id' => '230',
                'iso' => 'VU',
                'name' => 'VANUATU',
                'iso3' => 'VUT',
                'numcode' => '548',
                'phonecode' => '678',
                'status' => 1,


            ],

            [
                'id' => '231',
                'iso' => 'VE',
                'name' => 'VENEZUELA',
                'iso3' => 'VEN',
                'numcode' => '862',
                'phonecode' => '58',
                'status' => 1,


            ],

            [
                'id' => '232',
                'iso' => 'VN',
                'name' => 'VIET NAM',
                'iso3' => 'VNM',
                'numcode' => '704',
                'phonecode' => '84',
                'status' => 1,


            ],

            [
                'id' => '233',
                'iso' => 'VG',
                'name' => 'VIRGIN ISLANDS, BRITISH',
                'iso3' => 'VGB',
                'numcode' => '92',
                'phonecode' => '1284',
                'status' => 1,


            ],

            [
                'id' => '234',
                'iso' => 'VI',
                'name' => 'VIRGIN ISLANDS, U.S.',
                'iso3' => 'VIR',
                'numcode' => '850',
                'phonecode' => '1340',
                'status' => 1,


            ],

            [
                'id' => '235',
                'iso' => 'WF',
                'name' => 'WALLIS AND FUTUNA',
                'iso3' => 'WLF',
                'numcode' => '876',
                'phonecode' => '681',
                'status' => 1,


            ],

            [
                'id' => '236',
                'iso' => 'EH',
                'name' => 'WESTERN SAHARA',
                'iso3' => 'ESH',
                'numcode' => '732',
                'phonecode' => '212',
                'status' => 1,


            ],

            [
                'id' => '237',
                'iso' => 'YE',
                'name' => 'YEMEN',
                'iso3' => 'YEM',
                'numcode' => '887',
                'phonecode' => '967',
                'status' => 1,


            ],

            [
                'id' => '238',
                'iso' => 'ZM',
                'name' => 'ZAMBIA',
                'iso3' => 'ZMB',
                'numcode' => '894',
                'phonecode' => '260',
                'status' => 1,


            ],

            [
                'id' => '239',
                'iso' => 'ZW',
                'name' => 'ZIMBABWE',
                'iso3' => 'ZWE',
                'numcode' => '716',
                'phonecode' => '263',
                'status' => 1,


            ],
        ];

        foreach ($countries as $country) {
            Country::firstOrCreate(
                ['name' => $country['name']],
                [
                    'iso' => $country['iso'],
                    'name' => $country['name'],
                    'iso3' => $country['iso3'],
                    'numcode' => $country['numcode'],
                    'phonecode' => $country['phonecode'],
                    'status' => $country['status'],
                ]
            );
        }
    }
}
