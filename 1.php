<?php

    function get_resume(){
        $data = array (
            'name' => 'Aisyah Dewi Hasanah',
            'age' => 22,
            'address'  => "Villa Bogor Indah",
            'hobbies'      => array("membaca", "memasak", "browsing"),
            'is_married'   => false,
            'list_school'  => [
                ["name"=> "Politeknik Negeri Jakarta", "year_in"=>"2015", "year_out"=>"2019", "major"=>"Computer Science"],
                ["name"=> "SMAN 1 Jasinga", "year_in"=>"2012", "year_out"=>"2015", "major"=> "IPA"],
                ["name"=> "SMPN 1 Jasinga", "year_in"=>"2009", "year_out"=>"2012", "major"=> " "],
                ["name"=> "SD MUNCANG", "year_in"=>"2004", "year_out"=>"2009", "major" => " "]
            ],
            'skills' => [
                ["skill_name"=>"PHP", "level"=>"advanced"],
                ["skill_name"=>"Laravel", "level"=>"advanced"],
                ["skill_name"=>"Vue.js", "level"=>"advanced"],
                ["skill_name"=>"Code Igniter", "level"=>"advanced"],
                ["skill_name"=>"Android", "level"=>"advanced"],
                ["skill_name"=>"SQL", "level"=>"advanced"]
                
            ],
            'interest_in_coding' => true

        );
        
    
        $output = json_encode($data);
        echo $output;
     
        
    };

    get_resume();