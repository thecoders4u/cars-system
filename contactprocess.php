<?php
session_start();
$email = $_SESSION['email'];
include_once 'database.php';
//show set FAQ answers to user
if(isset($_POST['view'])){
echo'  <div class="col-sm-12 text-center temp navpadding">
            <div class="innertemp" id="signupcon">
                <h3>Our Frequently Asked Questions of Driverless that have been Answered</h3>
                    <div class="parts">
                    <h4>Q: Are these cars secure?:</h4>
                    <p>
                     A:Of course they are secured, they are have been tested by several algorithms and trained with systems such are Deep Learning, by which in 2023 no security issue shall occur
                    </p>
                    <h4>Q: Can these vehicles be completely trusted?</h4>
                    <p>
                     A:It is still a process of verification, testing and trial as well some of products are still not reliable to be frank, but some are ready to be deployed and completely used
                    </p>
                    <h4>Q: What kind of accidents have occured?</h4>
                    <p>
                       Several Accidents have occured such as accidently bumping into a pedestrian, some of our earlier products where confused in road map directions
                    </p> 
                    </div>
                        <div class="parts">
                            <h4>Q: How much fuel do these vehicles consume?</h4>
                            <p>
                                A:These vehicles are designed to not focus on fuel-consumption (prevent combustion and ozone layer damage), and rather are charged by electricity.
                            </p>
                            <h4>Q: Are they expensive?</h4>
                            <p>
                               A: With the total costs in design and concept building, they are obviously expensive than manual(human-driven) vehicles
                            </p>
                            <h4>Q: What is the point of all this?</h4>
                            <p>
                                A:Our aim is to prohibit the number of accidents occuring world-wide, and taking control road systems in a structured and organised pattern
                            </p>
                        </div>
               
                    <form id="send" onsubmit="Send(event)">
                        <button class="btn btn-primary">Still Send?</button>
                    </form>
    </div>
        </div>';
    //temporarily store user's submission before final submission
    $_SESSION['contact_email'] = mysqli_real_escape_string($conn, $_POST['email']);
    $_SESSION['contact_subject'] = mysqli_real_escape_string($conn, $_POST['subject']);
    $_SESSION['contact_question'] = mysqli_real_escape_string($conn, $_POST['question']);

}

elseif(isset($_POST['send'])){
    //Perform final submission of question if not asked already
    $email = $_SESSION['contact_email'];
    $subject = $_SESSION['contact_subject'];
    $question = $_SESSION['contact_question'];
    $sql = "SELECT * FROM questions where questionname = '$question'";
    $query = mysqli_query($conn, $sql);
    if(!$query){
        echo "Ooops! An error occured! " . mysqli_error($conn);
    }
    else{
        if(mysqli_num_rows($query) > 0){
            echo "Question has already been answered! or is being answered!";
        }
        else{
            $sqlnew = "INSERT INTO questions(questionname, email, subject) VALUES('$question', '$email', '$subject')";
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