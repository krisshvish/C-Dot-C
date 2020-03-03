<?php
    session_start();
    $all_symptoms = array("symptom1"=>$_POST['symptom1'],
    "symptom2"=>$_POST['symptom2'],
    "symptom3"=>$_POST['symptom3'],
    "symptom4"=>$_POST['symptom4'],
    "symptom5"=>$_POST['symptom5']);

    $all_symptoms = json_encode($all_symptoms);

    $pat_data = fopen('C:\xampp\htdocs\major\data\pat_data.json', 'w');
    fwrite($pat_data, $all_symptoms);
    fclose($pat_data);
    $_SESSION['disease_result'] = exec('C:\Users\akshay.kumar\Desktop\dis.bat');
    header('location:/major/views/disease.php');
?>