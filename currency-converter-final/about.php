<?php 
  session_start();
   
  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: authentication/login.php");
      exit;
  }
?>


<?php require('templatefile/header.php');?>
<title>Инфо</title>
<style>

    div {
        text-align: center;
    }

</style>
<?php require('templatefile/container.php');?>
<div calss="about-div">
    <div class="about-text">
        <h2>Информация за наличните валути</h2>
    </div>
        <br>
        <br>
        <p>Конвертора на валута е направен с помощта на
        <a href="http://www.onlinestudys.com/currency-converter-system-using-php/">onlinestudys</a> за учебни цели.</p>
        <p>Конвертор на валута се използва с цел конвертиране на една валута в друга.</p>
        <p>Този сайт за конвертиране на валута позволява конвертирането на всчики валутни курсове включително и биткойни.</p>
        <p>Всички налични валути:<br>
        <a href="https://en.wikipedia.org/wiki/Afghan_afghani">AFN Afghan Afghani</a>, 
        <a href="https://en.wikipedia.org/wiki/Albanian_lek">ALL Albanian Lek</a>, 
        <a href="https://en.wikipedia.org/wiki/Algerian_dinar">DZD Algerian Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Angolan_kwanza">AOA Angolan Kwanza</a>, 
        <a href="https://en.wikipedia.org/wiki/Argentine_peso">ARS Argentine Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Armenian_dram">AMD Armenian Dram</a>, 
        <a href="https://en.wikipedia.org/wiki/Aruban_florin">AWG Aruban Florin</a>, 
        <a href="https://en.wikipedia.org/wiki/Australian_dollar">AUD Australian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Azerbaijani_manat">AZN Azerbaijani Manat</a>, 
        <a href="https://en.wikipedia.org/wiki/Bahamian Dollar">BSD Bahamian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Bahraini Dinar">BHD Bahraini Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Bangladeshi Taka">BDT Bangladeshi Taka</a>, 
        <a href="https://en.wikipedia.org/wiki/Barbadian Dollar">BBD Barbadian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Belarusian Ruble">BYR Belarusian Ruble</a>, 
        <a href="https://en.wikipedia.org/wiki/Belize Dollar">BZD Belize Dollar</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Bhutanese Ngultrum">BTN Bhutanese Ngultrum</a>, 
        <a href="https://en.wikipedia.org/wiki/Bitcoin">BTC Bitcoin</a>, 
        <a href="https://en.wikipedia.org/wiki/Bolivian Boliviano">BOB Bolivian Boliviano</a>, 
        <a href="https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark">BAM Bosnia And Herzegovina Konvertibilna Marka</a>, 
        <a href="https://en.wikipedia.org/wiki/Botswana Pula">BWP Botswana Pula</a>
        <a href="https://en.wikipedia.org/wiki/Brazilian Real">BRL Brazilian Real</a>, 
        <a href="https://en.wikipedia.org/wiki/British Pound">GBP British Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Brunei Dollar">BND Brunei Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Bulgarian Lev">BGN Bulgarian Lev</a>, 
        <a href="https://en.wikipedia.org/wiki/Burundi Franc">BIF Burundi Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Cambodian Riel">KHR Cambodian Riel</a>, 
        <a href="https://en.wikipedia.org/wiki/Canadian Dollar">CAD Canadian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Cape Verdean Escudo">CVE Cape Verdean Escudo</a>
        <a href="https://en.wikipedia.org/wiki/Cayman Islands Dollar">KYD Cayman Islands Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Central African CFA Franc">XAF Central African CFA Franc</a><br><br>
        <a href="https://en.wikipedia.org/wiki/CFP Franc">XPF CFP Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Chilean Peso">CLP Chilean Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Chinese Yuan">CNY Chinese Yuan</a>, 
        <a href="https://en.wikipedia.org/wiki/Colombian Peso">COP Colombian Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Comorian Franc">KMF Comorian Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Congolese Franc">CDF Congolese Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Costa Rican Colon">CRC Costa Rican Colon</a>, 
        <a href="https://en.wikipedia.org/wiki/Croatian Kuna">HRK Croatian Kuna</a>, 
        <a href="https://en.wikipedia.org/wiki/Cuban Peso">CUP Cuban Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Czech Koruna">CZK Czech Koruna</a>, 
        <a href="https://en.wikipedia.org/wiki/Danish Krone">DKK Danish Krone</a>, 
        <a href="https://en.wikipedia.org/wiki/Djiboutian Franc">DJF Djiboutian Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Dominican Peso">DOP Dominican Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/East Caribbean Dollar">XCD East Caribbean Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Egyptian Pound">EGP Egyptian Pound</a><br><br> 
        <a href="https://en.wikipedia.org/wiki/Eritrean Nakfa">ERN Eritrean Nakfa</a>, 
        <a href="https://en.wikipedia.org/wiki/Ethiopian Birr">ETB Ethiopian Birr</a>, 
        <a href="https://en.wikipedia.org/wiki/Euro">EUR Euro</a>, 
        <a href="https://en.wikipedia.org/wiki/Falkland Islands Pound">FKP Falkland Islands Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Fijian Dollar">FJD Fijian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Gambian Dalasi">GMD Gambian Dalasi</a>, 
        <a href="https://en.wikipedia.org/wiki/Georgian Lari">GEL Georgian Lari</a>, 
        <a href="https://en.wikipedia.org/wiki/Ghanaian Cedi">GHS Ghanaian Cedi</a>, 
        <a href="https://en.wikipedia.org/wiki/Gibraltar Pound">GIP Gibraltar Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Guatemalan Quetzal">GTQ Guatemalan Quetzal</a>, 
        <a href="https://en.wikipedia.org/wiki/Guinean Franc">GNF Guinean Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Guyanese Dollar">GYD Guyanese Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Haitian Gourde">HTG Haitian Gourde</a>, 
        <a href="https://en.wikipedia.org/wiki/Honduran Lempira">HNLHonduran Lempira</a>, 
        <a href="https://en.wikipedia.org/wiki/Hong Kong Dollar">HKD Hong Kong Dollar</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Hungarian Forint">HUF Hungarian Forint</a>, 
        <a href="https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na">ISK Icelandic Krona</a>, 
        <a href="https://en.wikipedia.org/wiki/Indian Rupee">INR Indian Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Indonesian Rupiah">IDR Indonesian Rupiah</a>, 
        <a href="https://en.wikipedia.org/wiki/Iranian Rial">IRR Iranian Rial</a>, 
        <a href="https://en.wikipedia.org/wiki/Iraqi Dinar">IQD Iraqi Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Israeli New Sheqel">ILS Israeli New Sheqel</a>, 
        <a href="https://en.wikipedia.org/wiki/Jamaican Dollar">JMD Jamaican Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Japanese Yen">JPY Japanese Yen</a>, 
        <a href="https://en.wikipedia.org/wiki/Jordanian Dinar">JOD Jordanian Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Kazakhstani Tenge">KZT Kazakhstani Tenge</a>, 
        <a href="https://en.wikipedia.org/wiki/Kenyan Shilling">KES Kenyan Shilling</a>, 
        <a href="https://en.wikipedia.org/wiki/Kuwaiti Dinar">KWD Kuwaiti Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Kyrgyzstani_Som">KGS Kyrgyzstani Som</a>, 
        <a href="https://en.wikipedia.org/wiki/Lao_Kip">LAK Lao Kip</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Latvian_Lats">LVL Latvian Lats</a>, 
        <a href="https://en.wikipedia.org/wiki/Lebanese_Lira">LBP Lebanese Lira</a>, 
        <a href="https://en.wikipedia.org/wiki/Lesotho_Loti">LSL Lesotho Loti</a>, 
        <a href="https://en.wikipedia.org/wiki/Liberian_Dollar">LRD Liberian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Libyan_Dinar">LYD Libyan Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Macanese_Pataca">MOP Macanese Pataca</a>, 
        <a href="https://en.wikipedia.org/wiki/Macedonian_Denar">MKD Macedonian Denar</a>, 
        <a href="https://en.wikipedia.org/wiki/Malagasy_Ariary">MGA Malagasy Ariary</a>, 
        <a href="https://en.wikipedia.org/wiki/Malawian Kwacha">MWK Malawian Kwacha</a>, 
        <a href="https://en.wikipedia.org/wiki/Malaysian Ringgit">MYR Malaysian Ringgit</a>, 
        <a href="https://en.wikipedia.org/wiki/Maldivian Rufiyaa">MVR Maldivian Rufiyaa</a>, 
        <a href="https://en.wikipedia.org/wiki/Mauritanian Ouguiya">MRO Mauritanian Ouguiya</a>, 
        <a href="https://en.wikipedia.org/wiki/Mauritian Rupee">MUR Mauritian Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Mexican Peso">MXN Mexican Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Moldovan Leu">MDL Moldovan Leu</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Mongolian_tögrög">MNT Mongolian Tugrik</a>, 
        <a href="https://en.wikipedia.org/wiki/Moroccan Dirham">MAD Moroccan Dirham</a>, 
        <a href="https://en.wikipedia.org/wiki/Mozambican Metical">MZN Mozambican Metical</a>, 
        <a href="https://en.wikipedia.org/wiki/Myanma Kyat">MMK Myanma Kyat</a>, 
        <a href="https://en.wikipedia.org/wiki/Namibian Dollar">NAD Namibian Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Nepalese Rupee">NPR Nepalese Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder">ANG Netherlands Antillean Gulden</a>, 
        <a href="https://en.wikipedia.org/wiki/Belarusian_ruble">BYN New Belarusian Ruble</a>, 
        <a href="https://en.wikipedia.org/wiki/New Taiwan Dollar">TWD New Taiwan Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/New Zealand Dollar">NZD New Zealand Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba">NIO Nicaraguan Cordoba</a>, 
        <a href="https://en.wikipedia.org/wiki/Nigerian Naira">NGN Nigerian Naira</a>, 
        <a href="https://en.wikipedia.org/wiki/North Korean Won">KPW North Korean Won</a>, 
        <a href="https://en.wikipedia.org/wiki/Norwegian Krone">NOK Norwegian Krone</a>, 
        <a href="https://en.wikipedia.org/wiki/Omani Rial">OMR Omani Rial</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Paanga ">TOP Paanga</a>, 
        <a href="https://en.wikipedia.org/wiki/Pakistani_rupee">PKR Pakistni Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Panamanian Balboa">PAB Panamanian Balboa</a>, 
        <a href="https://en.wikipedia.org/wiki/Papua New Guinean Kina">PGK Papua New Guinean Kina</a>, 
        <a href="https://en.wikipedia.org/wiki/Paraguayan Guarani">PYG Paraguayan Guarani</a>, 
        <a href="https://en.wikipedia.org/wiki/Peruvian Nuevo Sol">PEN Peruvian Nuevo Sol</a>, 
        <a href="https://en.wikipedia.org/wiki/Philippine Peso">PHP Philippine Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Polish Zloty">PLN Polish Zloty</a>, 
        <a href="https://en.wikipedia.org/wiki/Qatari Riyal">QAR Qatari Riyal</a>, 
        <a href="https://en.wikipedia.org/wiki/Romanian Leu">RON Romanian Leu</a>, 
        <a href="https://en.wikipedia.org/wiki/Russian Ruble">RUB Russian Ruble</a>, 
        <a href="https://en.wikipedia.org/wiki/Rwandan Franc">RWF Rwandan Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Saint Helena Pound">SHP Saint Helena Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Samoan Tala">WST Samoan Tala</a>, 
        <a href="https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra">STD Sao Tome And Principe Dobra</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Saudi Riyal">SAR Saudi Riyal</a>, 
        <a href="https://en.wikipedia.org/wiki/Serbian Dinar">RSD Serbian Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Seychellois Rupee">SCR Seychellois Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Sierra Leonean Leone">SLL Sierra Leonean Leone</a>, 
        <a href="https://en.wikipedia.org/wiki/Singapore Dollar">SGD Singapore Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Solomon Islands Dollar">SBD Solomon Islands Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Somali Shilling">SOS Somali Shilling</a>, 
        <a href="https://en.wikipedia.org/wiki/South African Rand">ZAR South African Rand</a>, 
        <a href="https://en.wikipedia.org/wiki/South Korean Won">KRW South Korean Won</a>, 
        <a href="https://en.wikipedia.org/wiki/Special Drawing Rights">XDR Special Drawing Rights</a>, 
        <a href="https://en.wikipedia.org/wiki/Sri Lankan Rupee">LKR Sri Lankan Rupee</a>, 
        <a href="https://en.wikipedia.org/wiki/Sudanese Pound">SDG Sudanese Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Surinamese Dollar">SRD Surinamese Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Swazi Lilangeni">SZL Swazi Lilangeni</a>, 
        <a href="https://en.wikipedia.org/wiki/Swedish Krona">SEK Swedish Krona</a><br><br>
        <a href="https://en.wikipedia.org/wiki/Swiss Franc">CHF Swiss Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Syrian Pound">SYP Syrian Pound</a>, 
        <a href="https://en.wikipedia.org/wiki/Tajikistani Somoni">TJS Tajikistani Somoni</a>, 
        <a href="https://en.wikipedia.org/wiki/Tanzanian Shilling">TZS Tanzanian Shilling</a>, 
        <a href="https://en.wikipedia.org/wiki/Thai Baht">THB Thai Baht</a>, 
        <a href="https://en.wikipedia.org/wiki/Trinidad and Tobago Dollar">TTD Trinidad and Tobago Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Tunisian Dinar">TND Tunisian Dinar</a>, 
        <a href="https://en.wikipedia.org/wiki/Turkish New Lira">TRY Turkish New Lira</a>, 
        <a href="https://en.wikipedia.org/wiki/Turkmenistan Manat">TMT Turkmenistan Manat</a>, 
        <a href="https://en.wikipedia.org/wiki/UAE Dirham">AED UAE Dirham</a>, 
        <a href="https://en.wikipedia.org/wiki/Ugandan Shilling">UGX Ugandan Shilling</a>, 
        <a href="https://en.wikipedia.org/wiki/Ukrainian Hryvnia">UAH Ukrainian Hryvnia</a>, 
        <a href="https://en.wikipedia.org/wiki/United States Dollar">USD United States Dollar</a>, 
        <a href="https://en.wikipedia.org/wiki/Uruguayan Peso">UYU Uruguayan Peso</a>, 
        <a href="https://en.wikipedia.org/wiki/Uzbekistani Som">UZS Uzbekistani Som</a>, 
        <a href="https://en.wikipedia.org/wiki/Vanuatu Vatu">VUV Vanuatu Vatu</a>, 
        <a href="https://en.wikipedia.org/wiki/Venezuelan Bolivar">VEF Venezuelan Bolivar</a>, 
        <a href="https://en.wikipedia.org/wiki/Vietnamese Dong">VND Vietnamese Dong</a>, 
        <a href="https://en.wikipedia.org/wiki/West African CFA Franc">XOF West African CFA Franc</a>, 
        <a href="https://en.wikipedia.org/wiki/Yemeni Rial">YER Yemeni Rial</a>, 
        <a href="https://en.wikipedia.org/wiki/Zambian Kwacha">ZMW Zambian Kwacha</a>, 
        </p>
    </div>
</div>