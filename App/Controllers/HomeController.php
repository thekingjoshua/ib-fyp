<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Session;
use Framework\Validation;

class HomeController
{
    protected $db;

    public function __construct()
    {
        $configs = require basePath('./configs/db.php');
        $this->db = new Database($configs);
    }
    /**
     * Show the latest listings
     *
     * @return void
     */
    public function index()
    {
        loadView('home');
    }
    public function login()
    {
        // Email = 'neptunian48@gmail.com'
        // Password = 'Percy$126'
        loadView('login');
    }
    public function auth_login()
    {
        $successMessages = [];
        $errorMessages = [];

        $enteredEmail = $_POST['email'];
        $enteredPassword = $_POST['password'];

        $validEmail = 'neptunian48@gmail.com';
        $validPassword = 'Percy$126';

        // CHECKING IF THE ENTERED EMAIL AND PASSWORD MATCHES
        if (Validation::match($validEmail, $enteredEmail)) {
            $successMessages[] = 'Login Successful';
            redirect('./dashboard');
        } else {
            $errorMessages[] = 'Invalid Credentials';
        };

        loadView('login', [
            "successMessages" => $successMessages,
            "errorMessages" => $errorMessages,
        ]);
    }
    public function stage_one()
    {
        $originalCaseFiles = $this->db->query("SELECT * FROM original_case_files")->fetchAll();
        loadView('stage-one', ["originalCaseFiles" => $originalCaseFiles]);
    }
    public function stage_two()
    {
        loadView('stage-two');
    }
    public function stage_three()
    {
        loadView('stage-three');
    }
    public function analysis_result()
    {
        loadView('analysis-result');
    }
    public function analysis(){
        $analysisResults = $this->db->query("SELECT * FROM analysis_results")->fetchAll();
        loadView('analysis', ['analysisResults' => $analysisResults]);
    }
    public function dashboard()
    {
        $originalCaseFiles = $this->db->query("SELECT * FROM analysis_results")->fetchAll();
        loadView('home', ["originalCaseFiles" => $originalCaseFiles]);
        Session::clearAll();
    }
    public function uploadOriginal()
    {
        loadView('upload-original');
    }
    public function submitOriginalFile()
    {
        $caseFileName = $_POST['case_file_name'];
        $investigatorName = $_POST['investigator_name'];

        $original_file = $_FILES['original_file']['name'];
        $original_file_temp = $_FILES['original_file']['tmp_name'];

        $fullFileName = date('Y-m-d_H-i-s') . $original_file;
        // DEFINING THE VALID FILE TYPES
        // 0: .txt file
        // 1: .pdf file
        // 2: .docx file
        // 3: .xlsx file
        $allowed_types = ['text/plain', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
        $file_type = mime_content_type($original_file_temp);

        // HASHING THE UPLOADED FILE USING SHA-512 ALGORITHM
        $originalFileHash = hash('sha512', $original_file);
        $params = [
            "original_file_hash" => $originalFileHash,
            "case_file_name" => $caseFileName,
            "investigator_name" => $investigatorName,
            "original_file_path" => "uploads/$fullFileName",
            "original_file_unique_id" => generateRandomString(7)
        ];
        if (in_array($file_type, $allowed_types)) {
            // UPLOADING THE FILE TO THE UPLOAD FOLDER IF IT IS A VALID FILE TYPE
            // move_uploaded_file($original_file_temp, "uploads/$fullFileName");

            // SUBMITTING THE FILE TO THE DATABASE IF IT IS A VALID FILE TYPE
            $this->db->query("INSERT INTO `original_case_files` (`file_hash`, `case_file_name`, `investigator`, `case_file_path`, `unique_id`) VALUES (:original_file_hash, :case_file_name, :investigator_name, :original_file_path, :original_file_unique_id)", $params);
            // 
            loadView('upload-original');
        } else {
            // REDIRECTING THE USER TO THE DASHBOARD
            redirect('http://localhost/ib-fyp/dashboard');
        }
    }
    public function originalFiles()
    {
        $originalCaseFiles = $this->db->query("SELECT * FROM original_case_files")->fetchAll();

        loadView('original-files', [
            "originalCaseFiles" => $originalCaseFiles
        ]);
    }
    public function analyse_stage_one()
    {
        // DEFINING THE VALID FILE TYPES
        // 0: .txt file
        // 1: .pdf file
        // 2: .docx file
        // 3: .xlsx file
        $allowed_types = ['text/plain', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

        $stage_one_file = $_FILES['stage_one_file']['name'];
        $stage_one_file_type = $_FILES['stage_one_file']['type'];
        $original_case_file_ID = $_POST['select_original_case_file'];
        $investigator_name = $_POST['investigator_name'];

        $original_case_file_name = $this->db->query("SELECT * FROM original_case_files WHERE id = $original_case_file_ID")->fetch()->case_file_name;
        if (in_array($stage_one_file_type, $allowed_types)) {
            // IF THE UPLOADED FILE IS VALID
            $stage_one_file_hash = hash('sha512', $stage_one_file);
            Session::set('stage_one_file_hash', $stage_one_file_hash);
            Session::set('original_case_file_ID', $original_case_file_ID);
            Session::set('investigator_name', $investigator_name);
            Session::set('original_case_file_name', $original_case_file_name);
        } else {
            // REDIRECTING THE USER TO THE DASHBOARD
            redirect('http://localhost/ib-fyp/dashboard/analysis/stage-one');
        }
        redirect('http://localhost/ib-fyp/dashboard/analysis/stage-two');
    }
    public function analyse_stage_two()
    {
        // DEFINING THE VALID FILE TYPES
        // 0: .txt file
        // 1: .pdf file
        // 2: .docx file
        // 3: .xlsx file
        $allowed_types = ['text/plain', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

        $stage_two_file = $_FILES['stage_two_file']['name'];
        $stage_two_file_type = $_FILES['stage_two_file']['type'];

        if (in_array($stage_two_file_type, $allowed_types)) {
            // IF THE UPLOADED FILE IS VALID
            $stage_two_file_hash = hash('sha512', $stage_two_file);
            Session::set('stage_two_file_hash', $stage_two_file_hash);
        } else {
            // REDIRECTING THE USER TO THE DASHBOARD
            redirect('http://localhost/ib-fyp/dashboard/analysis/stage-two');
        }

        redirect('http://localhost/ib-fyp/dashboard/analysis/stage-three');
    }

    public function analyse_stage_three()
    {
        
        // DEFINING THE VALID FILE TYPES
        // 0: .txt file
        // 1: .pdf file
        // 2: .docx file
        // 3: .xlsx file
        $allowed_types = ['text/plain', 'application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

        $stage_three_file = $_FILES['stage_three_file']['name'];
        $stage_three_file_type = $_FILES['stage_three_file']['type'];

        if (in_array($stage_three_file_type, $allowed_types)) {
            // IF THE UPLOADED FILE IS VALID
            $stage_three_file_hash = hash('sha512', $stage_three_file);
            Session::set('stage_three_file_hash', $stage_three_file_hash);
        } else {
            // REDIRECTING THE USER TO THE DASHBOARD
            redirect('http://localhost/ib-fyp/dashboard/analysis/stage-two');
        }
        $stageOneScore = 0;
        $stageTwoScore = 0;
        $stageThreeScore = 0;
        $originalCaseFileID = Session::get('original_case_file_ID');
        $investigator_name = Session::get('investigator_name');

        $originalFileHash = $this->db->query("SELECT * FROM original_case_files WHERE id = $originalCaseFileID")->fetch()->file_hash;

        $stageOneFileHash = Session::get('stage_one_file_hash');
        $stageTwoFileHash = Session::get('stage_two_file_hash');
        $stageThreeFileHash = Session::get('stage_three_file_hash');
        $original_case_file_name = Session::get('original_case_file_name');

        if(Validation::match($stageOneFileHash, $originalFileHash)){
            $stageOneScore = 100;
        }
        if(Validation::match($stageTwoFileHash, $originalFileHash)){
            $stageTwoScore = 100;
        }
        if(Validation::match($stageThreeFileHash, $originalFileHash)){
            $stageThreeScore = 100;
        }

        $totalScore = $stageOneScore + $stageTwoScore + $stageThreeScore;
        $analysisResult = floor($totalScore / 3) ;

        $generatedAnalysisID = generateRandomString(7);

        // SUBMITTING ANALYSIS RESULT TO THE DATABASE
        $params = [
            "stage_one_results" => $stageOneScore,
            "stage_two_results" => $stageTwoScore,
            "stage_three_results" => $stageThreeScore,
            "analysis_result" => $analysisResult,
            "investigator_name" => $investigator_name,
            "original_case_file_name" => $original_case_file_name,
            "analysis_file_unique_id" => $generatedAnalysisID
        ];
        $this->db->query("INSERT INTO `analysis_results` (`stage_one_results`, `stage_two_results`, `stage_three_results`, `analysis_result`, `investigator_name`, `file_name`, `unique_id`) VALUES (:stage_one_results, :stage_two_results, :stage_three_results, :analysis_result, :investigator_name, :original_case_file_name, :analysis_file_unique_id)", $params);
        Session::set('stage_one_score', $stageOneScore);
        Session::set('stage_two_score', $stageTwoScore);
        Session::set('stage_three_score', $stageThreeScore);
        Session::set('analysis_result', $analysisResult);
        Session::set('generated_analyis_ID', $generatedAnalysisID);

        redirect('http://localhost/ib-fyp/dashboard/analysis/result');
    }
}
