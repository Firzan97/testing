<?php

namespace App\Traits;


trait InferenceEngine
{



    public function knowledgeBase($fact, &$knownfact)
    {
        $gender = $fact->gender;
        $occNo = $fact->class;
        $contmode = $fact->contribution;
        $planid = $fact->plan;
        $age = $fact->age;
        $budget = $fact->budget;

        //gender
        if ($gender == "Male") {

            $knownfact["Male"] = "gender";


            //occupation
            if ($occNo = "1") {
                $knownfact["1"] = "occNo";
            }
            if ($occNo == "2") {
                $knownfact["2"] = "occNo";
            }



            //contmode
            if ($contmode == "Monthly") {
                $knownfact["Monthly"] = "contmode";
            }
            if ($contmode == "Anually") {
                $knownfact["Anually"] = "contmode";
            }

            //plan id
            if ($planid == "TT201") {
                $knownfact["TT201"] = "planid";
            }
            if ($planid == "TT201P") {
                $knownfact["TT201P"] = "planid";
            }



            //age
            if ($age == "20") {
                $knownfact["20"] = "age";
            }
            if ($age == "21") {
                $knownfact["21"] = "age";
            }
            if ($age == "22") {
                $knownfact["22"] = "age";
            }
            if ($age == "23") {
                $knownfact["23"] = "age";
            }
            if ($age == "24") {
                $knownfact["24"] = "age";
            }
            if ($age == "25") {
                $knownfact["25"] = "age";
            }
            if ($age == "26") {
                $knownfact["26"] = "age";
            }
            if ($age == "27") {
                $knownfact["27"] = "age";
            }
            if ($age == "28") {
                $knownfact["28"] = "age";
            }
            if ($age == "29") {
                $knownfact["29"] = "age";
            }



            //budget
            if ($budget == "50-99") {
                $knownfact["50-99"] = "budget";
            }
            if ($budget == "100-199") {
                $knownfact["100-199"] = "budget";
            }
            if ($budget == "200-299") {
                $knownfact["200-299"] = "budget";
            }
        }
    }

    public function workingMemory($fact, &$knownfact)
    {
        $PlanDetail = [];

        //rule1

        if (array_key_exists("Male", $knownfact)) {
            if (array_key_exists("1", $knownfact)) {
                if (array_key_exists("Monthly", $knownfact)) {
                    if (array_key_exists("TT201", $knownfact)) {
                        if (array_key_exists("20", $knownfact)) {
                            if (array_key_exists("50-99", $knownfact)) {


                                $PlanDetail = [
                                    "PlanId" => "TT201",
                                    "PlanName" => "TAKAFUL TERM 80",
                                    "ContTerm" => "20 years",
                                    "PlanNo" => "2",
                                    "BenefitDeath" => "RM150,000 ",
                                    "CriticalIllness" => "RM150,000",
                                    "AccidentialDeath" => "RM150,000",
                                    "HospitalBenefit" => "RM70.00 ",
                                    "TotalMonthlyContribution" => "RM142.57",
                                    "TotalAnuallyRegularContribution" => "RM1584.00"
                                ];
                            }
                        }
                    }
                }
            }
        }
        //rule2
        if (array_key_exists("Male", $knownfact)) {
            if (array_key_exists("1", $knownfact)) {
                if (array_key_exists("Monthly", $knownfact)) {
                    if (array_key_exists("TT201", $knownfact)) {
                        if (array_key_exists("20", $knownfact)) {
                            if (array_key_exists("100-199", $knownfact)) {

                                $PlanDetail = [
                                    "PlanId" => "TT201",
                                    "PlanName" => "TAKAFUL TERM 80",
                                    "ContTerm" => "20 years",
                                    "PlanNo" => "2",
                                    "BenefitDeath" => "RM150,000 ",
                                    "CriticalIllness" => "RM150,000",
                                    "AccidentialDeath" => "RM150,000",
                                    "HospitalBenefit" => "RM70.00 ",
                                    "TotalMonthlyContribution" => "RM142.57",
                                    "TotalAnuallyRegularContribution" => "RM1584.00"
                                ];
                            }
                        }
                    }
                }
            }
        }
        return $PlanDetail;
    }

    public function inferenceEngine($fact)
    {
        $knownfact = array();
        $this->knowledgeBase($fact, $knownfact);

        $selectedPlan = $this->workingMemory($fact, $knownfact);
        return $selectedPlan;
    }
}
