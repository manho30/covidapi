<?php

// base url of MoH repo
$citf_url = 'https://raw.githubusercontent.com/CITF-Malaysia/citf-public/main/';
$moh_url = 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/';

// vax registration
$vax_reg_my_csv = "{$citf_url}registration/vaxreg_malaysia.csv";
$vax_reg_state_csv = "{$citf_url}registration/vaxreg_state.csv";

// mysejahtera
$mysej_checkin_my_csv = "{$moh_url}mysejahtera/checkin_malaysia.csv";
$mysej_checkin_state_csv = "{$moh_url}mysejahtera/checkin_state.csv";
$mysej_checkin_time_csv = "{$moh_url}mysejahtera/checkin_malaysia_time.csv";
$mysej_trace_my_csv = "{$moh_url}mysejahtera/trace_malaysia.csv";

// cases 
$cases_age_csv = "{$moh_url}epidemic/cases_age.csv";
$cases_my_csv = "{$moh_url}epidemic/cases_malaysia.csv";
$cases_state_csv = "{$moh_url}epidemic/cases_state.csv";

// clusters
$cluster_csv = "{$moh_url}epidemic/clusters.csv";


// death
$death_age_csv = "{$moh_url}epidemic/deaths_age.csv";
$death_my_csv = "{$moh_url}epidemic/deaths_malaysia.csv";
$death_state_csv = "{$moh_url}epidemic/deaths_state.csv";

// hospital
$hospital_csv =  "{$moh_url}epidemic/hospital.csv";

//icu
$icu_csv =  "{$moh_url}epidemic/icu.csv";

//pkrc
$pkrc_csv =  "{$moh_url}epidemic/pkrc.csv";

// covid19 test report
$test_my_csv =  "{$moh_url}epidemic/tests_malaysia.csv"; 
$test_state_csv =  "{$moh_url}epidemic/tests_state.csv"; 

// Static (populatation)
$static_csv = "{$moh_url}static/population.csv";

//vaccination
$vax_my_csv = "{$moh_url}vaccination/vax_malaysia.csv";
$vax_state_csv = "{$moh_url}vaccination/vax_state.csv";
$vax_school_csv = "{$moh_url}vaccination/vax_school.csv";
?>