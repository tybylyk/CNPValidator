<?php

/**
 * @var string
 */
$data['cnp'] = $_POST['cnp'];

require "../src/CNPValidatorClass.php";

$_cnp = new CNPValidator($data['cnp']);

/*
 * Check if there are any error
 * Take a look inside class from what errors can be generated
 */
if (!$_cnp->error) {
    /*
     * First method means to get info about the possessor of CNP in one array
     * 
     * print_r($_cnp->fetchAllData());
     * 
     * 
     * or second method, get specific information about the possessor of CNP
     *
     */

    if ($_cnp->getGenre()[1] == 'm') {
        echo 'Sex: Masculin <br>';
    } else {
        echo 'Sex: Feminin <br>';
    }

    echo 'Anul nasterii: ' . $_cnp->getYear() . '<br>';
    echo 'Luna: ' . $_cnp->getMonth()[1] . '<br>';
    echo 'Ziua: ' . $_cnp->getDay()[0] . '<br>';
    echo 'Judet: ' . $_cnp->getCounty()[1] . '<br>';
    
    echo 'Cifra de control este valida.';
} else {
    echo $_cnp->error;
}
