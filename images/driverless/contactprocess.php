<?php
session_start();
$email = $_SESSION['email'];
include_once 'database.php';

if(isset($_POST['view'])){
echo'  <div class="col-sm-12 text-center temp navpadding">
            <div class="innertemp" id="signupcon">
                <h3>Our Frequently Asked Questions of Driverless that have been Answered</h3>
                    <div class="parts">
                    <h4>Q: Are these cars secure?:</h4>
                    <p>
                     Of course they are secured, they are have been tested by several algorithms and trained with systems such are Deep Learning, by which in 2023 no security issue shall occur
                    </p>
                    <h4>Q: Can these vehicles be completely trusted?</h4>
                    <p>
                     It is still a process of verification, testing and trial as well some of products are still not reliable to be frank, but some are ready to be deployed and completely used
                    </p>
                    <h4>Q: What kind of accidents have occured?</h4>
                    <p>
                       Several Accidents have occured such as accidently bumping into a pedestrian, some of our earlier products where confused in road map directions
                    </p>
                    
                
            </div>
                   
                        <div class="parts">
                            <h4>Q: How much fuel do these vehicles consume?</h4>
                            <p>
                                These vehicles are designed to not focus on fuel-consumption (prevent combustion and ozone layer damage), and rather are charged by electricity.
                            </p>
                            <h4>Q: Are they expensive</h4>
                            <p>
                                With the total costs in design and concept building, they are obviously expensive than manual(human-driven) vehicles
                            </p>
                            <h4>Q: What\'s the point of all this?</h4>
                            <p>
                                Our aim is to prohibit the number of accidents occuring world-wide, and taking control road systems in a structured and organised pattern
                            </p>
                        </div>
               
                    <form id="send" onsubmit="Send(event)">
                        <button class="btn btn-primary">Still Send?</button>
                    </form>
    </div>
        </div>';

    $_SESSION['email'] = mysqli_real_escape_string($conn, $_POST['email']);
    $_SESSION['subject'] = mysqli_real_escape_string($conn, $_POST['subject']);
    $_SESSION['question'] = mysqli_real_escape_string($conn, $_POST['question']);

}

elseif(isset($_POST['send'])){
    $email = $_SESSION['email'];
    $subject = $_SESSION['subject'];
    $question = $_SESSION['question'];
    $sql = "SELECT * FROM questions where questionname = '$email'";
    $query = mysqli_query($conn, $sql);
    if(!$query){
        echo "Ooops! An error occured! " . mysqli_error($conn);
    }
    else{
        if(mysqli_num_rows($query) > 0){
            echo "Question has already been answered!";
        }
        else{
            $sqlnew = "INSERT INTO questions(email, subject, questionname) VALUES('$email', '$subject', '$question')";
            $newquery = mysqli_query($conn, $sqlnew);
            if(!$newquery){
                echo "Ooops! An error occured! " . mysqli_error($conn);
            }
            else{
                echo "SUCCESS";
            }
        }
    }
}