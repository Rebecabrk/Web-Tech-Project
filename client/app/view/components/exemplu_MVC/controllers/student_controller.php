<?php
require ('../models/student_model.php');

$result = getAcountsList();

include ('../views/student_view.php');

//include si require fac acelasi lucru, insa require 
//opreste executia atunci cand intalneste eroare
//iar include nu opreste, putem manipula usor
//aceste cazuri