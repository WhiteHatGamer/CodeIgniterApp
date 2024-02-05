<?php

    // Session Start to Check if User Logged In
   @session_start();

    // Checking If User is Logged In
    if(!isset($_SESSION['email'])){
        echo "<h3>You Are Logged out Please Login Again!!!</h3><br>";
        echo '<a href="<?=adminTravelPlannerUrl()?>">Home</a><br>';
        exit;
    }

// Cities Local Database with distance and Hotels with Rate
$city = [
    // Template: 'CityName=>[0=>distance, 1=>['HotelName'=>RateInAED, ...] ]'
    'Ajman'=>array(69,['radison'=>497, 'Crown Palace'=>172, 'mermaid'=>170]),
    'Abu-Dhabi'=>array(242,['Radison'=>732]),
    'Al Ain'=>array(223,['Radison'=>314, 'Al Soft'=>320]),
    'Ar-Rams'=>array(28,['Hilton'=>344, 'Cove Rotana'=>794]),
    'Al Jazirah Al Hamra'=>array(27,['The Ritz Carlton'=>3811, 'SH Hotel'=>123]),
    'Delhi'=>array(2971,['The Ashok'=>422, 'Oberoi Udaivilas'=>3956,'Rambagh Palace'=>16850, 'Umaid Bhavan Palace'=>40476, 'Oberoi'=>1033, 'De Pavilion'=>156]),
    'Dubai'=>array(108,['Radison Blue'=>642, 'Burj Al-Arab'=>45306, 'Atlantis The Royal'=>58108,'Atlantis The Palm'=>33725]),
    'Dibba Al-Fujairah'=>array(60,['Fairmont'=>642]),
    'Dhaid'=>array(53,['Aldar'=>164]),
    'Dibba Al-Hisn'=>array(64,['Mirage'=>202]),
    'Fujairah'=>array(93,['V Hotel'=>120, 'Al Bahar'=>495]),
    'Ghayathi'=>array(456,['Western Hotel'=>250]),
    'Hatta'=>array(134,['Ja Hatta'=>621]),
    'Jebel Ali'=>array(146,['Premier Inn'=>331]),
    'Khorfakkan'=>array(94,['Oceanic'=>508]),
    'Kalba'=>array(108,['KingFisher'=>1882]),
    'Kerala'=>array(4347,['Ginger'=>165, 'ailink Castle'=>155, 'Vivanta tvr'=>341, 'KTDC'=>311]),
    'Liwa Oasis'=>array(438,['Liva'=>588, 'Liva Nights'=>1588]),
    'Madinat Zayed'=>array(365,['Western'=>387]),
    'Pakistan'=>array(2336,['Safi Land'=>291, 'Ramada Plaza'=>331, 'Beach Luxury'=>268]),
    'Ruwais'=>array(431,['Dafra'=>351]),
    // 'riyadh'=>array(1195,[]),
    // 'jeddah'=>array(2330,[]),
    'Cairo'=>array(3680,['Grand Nile'=>561, 'Flamenco'=>351]),
    'Istanbul'=>array(3839,['St Regis'=>2617, 'Concept'=>250, 'Kaya Istanbul'=>435]),
    'Mumbai'=>array(3095,['Niranta'=>284,'Bawa'=>275]),
    'Kochi'=>array(4340,['Ginger'=>165, 'ailink Castle'=>155]),
    'Ahmedabad'=>array(2593,['Comfort'=>206, 'SilverCloud'=>104]),
    'Chennai'=>array(4177,['Pride'=>117, 'YWCA'=>95]),
    'Hyderabad'=>array(3619,['Radison'=>385, 'Siesta'=>145]),
    'Karachi'=>array(1781,['Ramada Plaza'=>331, 'Beach Luxury'=>268]),
    'Manila'=>array(12957,['Peninsula'=>608, 'Mini Suite Eton Tower'=>135, 'Bayview'=>145]),
    'Bangkok'=>array(6748,['Center Point'=>295]),
    'Baku'=>array(2312,['Radison'=>400, 'Holiday Inn'=>323]),
    // 'Tbilisi'=>array(2613,[]),
    // 'paris'=>array(6519,[]),
    // 'london'=>array(6742,[]),
    'Ras Al Khaimah'=>array(0,['Hilton'=>346, 'The Cove Rotana'=>795]),
    'Sharjah'=>array(78,['Crown Palace'=>172,'Crystal Plaza'=>142]),
    'Tamil Nadu'=>array(4254,['Shelter Beach'=>178, 'NK Grand'=>104, 'Pride'=>117, 'YWCA'=>95]),
    'Umm Al Quwain'=>array(60,['Beach Hotel'=>426, 'Pearl'=>323, 'Palma'=>292]),
];
?>