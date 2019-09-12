<?php
//slider
$carousel = query("SELECT * FROM carousel");
// video\
$video = query("SELECT * FROM video")[0];

//profil
$profil = query("SELECT * FROM profil")[0];
//programs
$programs = query("SELECT * FROM program");
// clients
$clients = query("SELECT * FROM clients ");
// sosmed
$sosmed = query("SELECT * FROM sosial_media")[0];
// whyieduc
$why = query("SELECT * FROM why_ieduc")[0];

