<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C[Dot]C</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/disease.css">
</head>
<?php 
    session_start();
    $noOfSym = 1;
    $all_symptoms = array('back_pain','constipation','abdominal_pain','diarrhoea','mild_fever','yellow_urine',
    'yellowing_of_eyes','acute_liver_failure','fluid_overload','swelling_of_stomach',
    'swelled_lymph_nodes','malaise','blurred_and_distorted_vision','phlegm','throat_irritation',
    'redness_of_eyes','sinus_pressure','runny_nose','congestion','chest_pain','weakness_in_limbs',
    'fast_heart_rate','pain_during_bowel_movements','pain_in_anal_region','bloody_stool',
    'irritation_in_anus','neck_pain','dizziness','cramps','bruising','obesity','swollen_legs',
    'swollen_blood_vessels','puffy_face_and_eyes','enlarged_thyroid','brittle_nails',
    'swollen_extremeties','excessive_hunger','extra_marital_contacts','drying_and_tingling_lips',
    'slurred_speech','knee_pain','hip_joint_pain','muscle_weakness','stiff_neck','swelling_joints',
    'movement_stiffness','spinning_movements','loss_of_balance','unsteadiness',
    'weakness_of_one_body_side','loss_of_smell','bladder_discomfort','foul_smell_of urine',
    'continuous_feel_of_urine','passage_of_gases','internal_itching','toxic_look_(typhos)',
    'depression','irritability','muscle_pain','altered_sensorium','red_spots_over_body','belly_pain',
    'abnormal_menstruation','dischromic _patches','watering_from_eyes','increased_appetite','polyuria','family_history','mucoid_sputum',
    'rusty_sputum','lack_of_concentration','visual_disturbances','receiving_blood_transfusion',
    'receiving_unsterile_injections','coma','stomach_bleeding','distention_of_abdomen',
    'history_of_alcohol_consumption','fluid_overload','blood_in_sputum','prominent_veins_on_calf',
    'palpitations','painful_walking','pus_filled_pimples','blackheads','scurring','skin_peeling',
    'silver_like_dusting','small_dents_in_nails','inflammatory_nails','blister','red_sore_around_nose',
    'yellow_crust_ooze');
?>
<?php

?>
<body>
    
    <nav id="navbar">
        <ul id="ul_nav">
            <li id="li_nav_options"><a href="index.php">Home</a></li>
            <li id="li_nav_options"><a href="/major/views/disease.php">Predictor</a></li>       
         </ul>
    </nav>

    <div id="disease_div">
        <h3 style="color:crimson;">Disease Predictor</h3>
        <form id="disease_form" action="/major/controllers/disease_submit.php" method="POST">
            <table id="disease_table">
                <tr id="symptoms_drop">
                    <td><select name="symptom<?php echo $noOfSym; $noOfSym++; ?>" id="">
                        <?php
                            foreach($all_symptoms as $symptoms){
                        ?>
                        <option value="<?php echo $symptoms; ?>"><?php echo $symptoms; ?></option>
                            <?php } ?>
                    </select></td>
                </tr>
            </table>
            <button class="add_symptom" type="button" onclick="addSymptom()">Add Symptom</button>
            <button id="dis_button" type="submit">Predict</button>
        </form>
        <h3 style="color:crimson;">You have:<?php 
            if(isset($_SESSION['disease_result'])){
                echo $_SESSION['disease_result'];
                unset($_SESSION['disease_result']);
            } 
            ?></h3>
    </div>

    <div id="doc_image_div">
        <img src="../images/doc.jpg" alt="" height="50%" width="50%">
    </div>

    <script>
        function addSymptom(){
            var symptoms_drop = document.getElementById('symptoms_drop');
            var cloned = symptoms_drop.cloneNode(true);
            console.log(cloned.id);
            document.getElementById('disease_table').appendChild(cloned);
            symptoms_drop.id = "";
        }
    </script>

</body>
</html>