@extends('layouts.app')

@section('title','Rules')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="general" class="section scrollspy">
                    <h3>Rules</h3>
                    <p class="information-text">
                        Here, you can find all pertinent rules and regulations regarding the tournament. If you have any questions or think
                        we missed something after reading through the page, please <a href="{{ url('/contact') }}">contact us</a>.
                    </p>
                </div>

                <div id="eligibility" class="section scrollspy">
                    <h5>Tournament Eligibility</h5>
                    <ul class="collection">
                        <li class="collection-item">Student competitors must be enrolled in a high school in one of grades 9-12 for the current academic school year - or if home-schooled, be of high school standing.</li>
                        <li class="collection-item">Each team must consist of 4 students, and each school may send only 1 team.</li>
                        <li class="collection-item">All team members must be from the same high school.</li>
                        <li class="collection-item">Each team must be accompanied by an advisor who is a <b>faculty member</b> at the team's high school OR a <b>parent/guardian</b> of one of the team members.</li>
                    </ul>
                </div>

                <div id="structure" class="section scrollspy">
                    <h5>Tournament Structure</h5>
                    <ul class="collection">
                        <li class="collection-item">The tournament consists of an individual round and a team-based quiz-bowl round.</li>
                        <li class="collection-item">For the individual round, all team members must complete the exam by themselves and at the same time as all other participants to ensure question security.</li>
                        <li class="collection-item">
                            The quiz-bowl is a team component and is conducted in a double-elimination format. A similar bracket to be used can be found <a href="https://printyourbrackets.com/pdfbrackets/16teamdouble.pdf" target="_blank">here</a>.
                            <ul class="browser-default">
                                <li>Team matchups for the initial round is predetermined randomly by the competition organizers.</li>
                                <li>The winning teams of the first round are placed in the upper bracket while the losing teams are placed in the lower bracket.</li>
                                <li>If a team loses in the upper bracket, it is placed into the lower bracket.</li>
                                <li>If a team loses in the lower bracket, it is eliminated from the quiz bowl.</li>
                            </ul>
                        </li>
                        <li class="collection-item">If there is an odd number of teams for the initial round, one randomly chosen team will win that round by default. </li>
                    </ul>
                </div>

                <div id="curriculum" class="section scrollspy">
                    <h5>Curriculum Breakdown</h5>
                    <div class="row">
                        <div class="col s12 m6">
                            <div class="card blue-grey lighten-1">
                                <div class="card-content white-text z-depth-5">
                                    <span class="card-title">Individual Exam</span>
                                    <ul class="browser-default">
                                        <li>45% Macroeconomics</li>
                                        <li>45% Microeconomics</li>
                                        <li>10% Current Events</li>
                                        <br><br><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card blue-grey lighten-1">
                                <div class="card-content white-text z-depth-5">
                                    <span class="card-title">Quiz Bowl</span>
                                    <ul class="browser-default">
                                        <li>30% Macroeconomics</li>
                                        <li>30% Microeconomics</li>
                                        <li>15% Current Events</li>
                                        <li>15% Economic History</li>
                                        <li>5% Modern Economics Research</li>
                                        <li>5% Wildcard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="individual" class="section scrollspy">
                    <h5>Individual Exam Rules</h5>
                    <ul class="collection">
                        <li class="collection-item">The individual exam is a written component, and consists of <i>60 questions</i> to be completed in <i>60 minutes</i>.</li>
                        <li class="collection-item">Each correct answer receives 1 point. Incorrect or unanswered questions receive 0 points - thus there is no penalty for guessing.</li>
                        <li class="collection-item">No calculators, notes, or any other helping tools may be used during the exam. Scrap paper is provided.</li>
                    </ul>
                </div>

                <div id="quizbowl" class="section scrollspy">
                    <h5>Quiz Bowl Rules</h5>
                    <ul class="collection">
                        <li class="collection-item">Each quiz bowl round is <i>10 minutes</i> or consists of <i>15 questions</i>, whichever comes first.</li>
                        <li class="collection-item">Each correctly answered question is worth 1 point. Incorrect answers are worth 0 points.</li>
                        <li class="collection-item">Each team designates a team captain to buzz in.</li>
                        <li class="collection-item">
                            A team may buzz in while the question is being read. At that point, the moderator will stop reading the question, and the team will have 10 seconds to provide an answer.
                            <ul class="browser-default">
                                <li>If the team answers incorrectly, the other team may choose to answer immediately following within 10 seconds or indicate to the moderator that they would like more of the question to be read.</li>
                                <li>In the case more of the question is read, either team may buzz in again. Same procedures as above will be followed.</li>
                                <li>Each team gets a total of 2 chances to answer each question. If neither team can provide a correct answer, the question will be skipped.</li>
                                <li>If the moderator has finished the question and neither team has buzzed in after 20 seconds, the question will be skipped.</li>
                            </ul>
                        </li>
                        <li class="collection-item">If there is a tie at the end of 10 minutes or 15 questions, an additional tiebreaker question will be asked adhering to the rules above. The team that answers correctly first will advance.</li>

                    </ul>
                </div>

                <div id="awards" class="section scrollspy">
                    <h5>Awards & Cash Prizes</h5>
                    <ul class="collection">
                        <li class="collection-item">
                            Top overall highest-scoring student on the individual exam.
                            <ul class="browser-default">
                                <li>Certificate of recognition signed by the Northwestern Economics Department Chair</li>
                                <li>$60 in cash prizes (given as a Visa&reg; gift card)</li>
                                <li>In the event of ties, we will have a best out of 5 question quiz-bowl style tiebreaker.</li>
                            </ul>
                        </li>
                        <li class="collection-item">
                            Quiz-bowl overall champion team
                            <ul class="browser-default">
                                <li>Certificate of recognition signed by the Northwestern Economics Department Chair</li>
                                <li>$140 in cash prizes (given as a Visa&reg; gift card)</li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div id="supplementary" class="section scrollspy">
                    <h5>Supplementary Rules</h5>
                    <ul class="collection">
                        <li class="collection-item">The competition organizers may change the structure of the individual exam and/or quiz bowl depending on the number of teams attending. Students will be notified before the tournament if such a change has occurred.</li>
                        <li class="collection-item">Only a student participant may challenge individual exam questions, and they must be brought to the attention of the competition organizers within <b>15 minutes</b> of the end of the exam.</li>
                        <li class="collection-item">A team may not challenge the validity of quiz bowl questions or answers. In the case of rule violations (e.g. the moderator accepting an answer past the time limit), the team captain may challenge the decision of the moderator before the next question is read.</li>
                        <li class="collection-item">If a team suspects scoring inaccuracy, the team captain must inform the moderator immediately after the quiz bowl round ends.</li>
                        <li class="collection-item">The decision of the moderator is final.</li>
                    </ul>
                </div>
            </div>

            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <ul class="section table-of-contents">
                        <li><a href="#general">General</a></li>
                        <li><a href="#eligibility">Tournament Eligibility</a></li>
                        <li><a href="#structure">Tournament Structure</a></li>
                        <li><a href="#curriculum">Curriculum Breakdown</a></li>
                        <li><a href="#individual">Individual Exam Rules</a></li>
                        <li><a href="#quizbowl">Quiz Bowl Rules</a></li>
                        <li><a href="#awards">Awards & Cash Prizes</a></li>
                        <li><a href="#supplementary">Supplementary Rules</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection