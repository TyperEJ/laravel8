<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * APIs for manage Counseling Profile.
 *
 * @group Counseling Profile
 */
class ExampleController extends Controller
{
    /**
     * Store counseling profile
     *
     * == Personal Information ==
     * @bodyParam first_name string required question-id-173
     * @bodyParam middle_name string question-id-174
     * @bodyParam last_name string required question-id-175
     * @bodyParam suffix integer question-id-176, e.g.0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
     * @bodyParam preferred_name string question-id-179
     *
     * @bodyParam used_any_other_names boolean required question-id-177, e.g.0:yes 1:no
     * if 'used_any_other_names' is true:
     * @bodyParam former_first_name string question-id-1950, if 'used_any_other_names' is true
     * @bodyParam former_middle_name string question-id-1951, if 'used_any_other_names' is true
     * @bodyParam former_last_name string question-id-178, if 'used_any_other_names' is true
     *
     * @bodyParam sex boolean required question-id-180, e.g.0:male 1:female
     * @bodyParam sex_descr string question-id-1901
     * @bodyParam birth_date date required question-id-181, e.g."07/17/2003"
     *
     *
     * == Address ==
     * address e.g.{"county":"Belknap","countryCode":"0","countryValue":"United States of America","address1":"2 Test St","address2":"","address3":"","city":"Belmont","stateValue":"NH","zip":"03220-4052","state":"38"}
     * @bodyParam address.*.county string question-id-182
     * @bodyParam address.*.country_code integer required 0:United States of America 242:Taiwan
     * @bodyParam address.*.country_value string required e.g."United States of America"
     * @bodyParam address.*.address_line_1 string required
     * @bodyParam address.*.address_line_2 string
     * @bodyParam address.*.address_line_3 string
     * @bodyParam address.*.city string required e.g."Overton"
     * @bodyParam address.*.state integer optional, but required if "0"(USA) is selected as country, e.g.null
     * @bodyParam address.*.state_value string optional, but required if "0"(USA) is selected as country, e.g.null, "TN"
     * @bodyParam address.*.zip string optional, but required if "0"(USA) is selected as country, e.g.null, "38541-6781"
     *
     * @bodyParam used_mailing_address boolean required question-id-183, e.g.0:yes 1:no
     * if 'used_mailing_address' is true:
     * mailing_address e.g.{"county":"Belknap","countryCode":"0","countryValue":"United States of America","address1":"2 Test St","address2":"","address3":"","city":"Belmont","stateValue":"NH","zip":"03220-4052","state":"38"}
     * @bodyParam mailing_address.*.county string question-id-186, if 'used_mailing_address' is true
     * @bodyParam mailing_address.*.country_code integer required if 'used_mailing_address' is true, e.g.0:United States of America
     * @bodyParam mailing_address.*.country_value string required if 'used_mailing_address' is true, e.g."United States of America"
     * @bodyParam mailing_address.*.address_line_1 string required if 'used_mailing_address' is true
     * @bodyParam mailing_address.*.address_line_2 string if 'used_mailing_address' is true
     * @bodyParam mailing_address.*.address_line_3 string if 'used_mailing_address' is true
     * @bodyParam mailing_address.*.city string required if 'used_mailing_address' is true, e.g."Overton"
     * @bodyParam mailing_address.*.state integer required if 'used_mailing_address' is true, e.g.52:TN
     * @bodyParam mailing_address.*.state_value string required if 'used_mailing_address' is true, e.g."TN"
     * @bodyParam mailing_address.*.zip string required if 'used_mailing_address' is true, e.g."38541-6781"
     *
     * @bodyParam is_temporary_mailing_address boolean required question-id-1042, if 'used_mailing_address' is true, e.g.0:yes 1:no
     * if 'is_temporary_mailing_address' is true:
     * @bodyParam temporary_mailing_address_from_date date required question-id-184, if 'is_temporary_mailing_address' is true
     * @bodyParam temporary_mailing_address_to_date date required question-id-185, if 'is_temporary_mailing_address' is true
     *
     *
     * == Contact Details ==
     * @bodyParam preferred_phone boolean required question-id-188, e.g.0:home 1:mobile
     * preferred_phone_number e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam preferred_phone_number.*.country_code string required question-id-189, e.g."+886"
     * @bodyParam preferred_phone_number.*.phone_number string required e.g."970824452"
     * @bodyParam preferred_phone_number.*.extension string
     *
     * @bodyParam used_alternate_phone boolean required question-id-190, e.g.0:no 1:home 2:mobile
     * if 'used_alternate_phone' is true:
     * alternate_phone_number e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam alternate_phone_number.*.country_code string required question-id-191, if 'used_alternate_phone' is true, e.g."+886"
     * @bodyParam alternate_phone_number.*.phone_number string required if 'used_alternate_phone' is true, e.g."970824452"
     * @bodyParam alternate_phone_number.*.extension string if 'used_alternate_phone' is true
     *
     *
     * == Demographics ==
     * @bodyParam religion integer question-id-192, e.g.40:Agnostic 0:Anglican (Episcopal) 48:Assemblies of God 41:Atheist 3:Buddhist
     * @bodyParam religion_descr string question-id-193
     *
     * @bodyParam us_armed_forces_status integer required question-id-194, e.g.0:none 1:currently serving 2:previously served 3:current dependent
     * if "1" or "2" is selected in 'us_armed_forces_status':
     * @bodyParam us_military_anticipated_status integer required question-id-195, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:On active duty U.S. military 1:Veteran of U.S. Armed Forces 2:U.S. Reserves or National Guard
     * us_military_experience_1_branch integer required question-id-196, e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
     * us_military_experience_1_from_month string required question-id-197, e.g."11/2016"
     * us_military_experience_1_to_month string question-id-198, e.g.null, "12/2016"
     * us_military_experience_2_branch integer question-id-1902, e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
     * us_military_experience_2_from_month string question-id-1903, e.g."11/2016"
     * us_military_experience_2_to_month string question-id-1904, e.g.null, "12/2016"
     * us_military_experience_3_branch integer question-id-1905, e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
     * us_military_experience_3_from_month string question-id-1906, e.g."11/2016"
     * us_military_experience_3_to_month string question-id-1907, e.g.null, "12/2016"
     * @bodyParam us_military_experiences.*.branch integer required The min length of 'us_military_experiences' is 1 and the max length is 3 if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
     * @bodyParam us_military_experiences.*.from_month string required if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
     * @bodyParam us_military_experiences.*.to_month string if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
     * @bodyParam ever_received_discharge boolean question-id-199, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:yes 1:no
     * if 'ever_receive_discharge' is true:
     * @bodyParam discharge_descr string question-id-1044, if 'ever_receive_discharge' is true, e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
     *
     * @bodyParam is_hispanic_or_latino boolean required question-id-200, e.g.0:yes 1:no
     * if 'is_hispanic_or_latino' is true:
     * @bodyParam hispanic_or_latino_identities array question-id-201, if 'is_hispanic_or_latino' is true, e.g.["0"(Central America), "1"(Cuba), "2"(Mexico), "3"(Puerto Rico), "4"(South America), "5"(Spain), "6"(Other)]
     * @bodyParam hispanic_or_latino_descr string question-id-202
     *
     * @bodyParam other_identities array question-id-203, e.g.["0"(American Indian or Alaska Native), "1"(Asian), "2"(Black or African American), "3"(Native Hawaiian or Other Pacific Islander), "4"(White)]
     *
     * if "0"(American Indian or Alaska Native) is selected in 'other_identities':
     * @bodyParam tribal_identity string question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities'
     * @bodyParam is_federally_recognized_tribe boolean required question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities', e.g.0:yes 1:no
     * if 'is_federally_recognized_tribe' is true:
     * @bodyParam tribe integer question-id-1069, if 'is_federally_recognized_tribe' is true, e.g.null, 0:AK-Agdaagux
     * @bodyParam tribal_enrollment_number string question-id-207, if 'is_federally_recognized_tribe' is true
     *
     * if "1"(Asian) is selected in 'other_identities:
     * @bodyParam asian_backgrounds array question-id-208, if "1"(Asian) is selected in 'other_identities', e.g.["7"(Other East Asia), "8"(Other South Asia), "9"(Other Southeast Asia)]
     * if "7"(Other East Asia) is selected in 'asian_backgrounds':
     * @bodyParam east_asian_descr string question-id-209, if "7"(Other East Asia) is selected in 'asian_backgrounds'
     * if "8"(Other South Asia) is selected in 'asian_backgrounds':
     * @bodyParam south_asian_descr string question-id-210, if "8"(Other South Asia) is selected in 'asian_backgrounds'
     * if "9"(Other Southeast Asia) is selected in 'asian_backgrounds':
     * @bodyParam southeast_asian_descr string question-id-211, if "9"(Other Southeast Asia) is selected in 'asian_backgrounds'
     *
     * if "2"(Black or African American) is selected in 'other_identities':
     * @bodyParam african_american_backgrounds array question-id-212, if "2"(Black or African American) is selected in 'other_identities', e.g.["0"(U.S.)]
     * @bodyParam african_american_descr string question-id-213, if "2"(Black or African American) is selected in 'other_identities'
     *
     * if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities':
     * @bodyParam native_hawaiian_or_other_pacific_islander_backgrounds array  question-id-214, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
     * @bodyParam native_hawaiian_or_other_pacific_islander_descr string question-id-215, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
     *
     * if "4"(White) is selected in 'other_identities':
     * @bodyParam white_backgrounds array question-id-216, if "4"(White) is selected in 'other_identities'
     * @bodyParam white_descr array question-id-217, if "4"(White) is selected in 'other_identities'
     *
     * @bodyParam agreed_terms_demographics boolean required question-id-1782, 1:yes
     *
     *
     * == Geography ==
     * @bodyParam birth_country integer required question-id-218, e.g.0:United States of America
     * @bodyParam birth_city string required question-id-219
     * @bodyParam birth_state integer question-id-220, optional, but required if "0" is selected as 'birth_country', e.g.3:Alabama
     * @bodyParam lived_in_us_yr integer required  question-id-221
     * @bodyParam lived_outside_us_yr integer required question-id-222
     *
     *
     * == Language ==
     * languages_length integer required question-id-223, min:1/max:5
     * language_1 integer required question-id-224, e.g.0:English 1:Spanish 2:Aceh
     * proficiency_1 array required question-id-225, e.g.3:First Language 0:Speak 1:Read 2:Write 4:Spoken at Home
     * language_2 integer required question-id-226
     * proficiency_2 array required question-id-227
     * language_3 integer required question-id-228
     * proficiency_3 array required question-id-229
     * language_4 integer required question-id-230
     * proficiency_4 array required question-id-231
     * language_5 integer required question-id-232
     * proficiency_5 array required question-id-233
     *
     * @bodyParam languages.*.lang integer required The min length of 'languages' is 1, while the max length is 5 with at least 1 language as first language required, e.g.0:English 1:Spanish 2:Aceh
     * @bodyParam languages.*.proficiency array required 3:First Language 0:Speak 1:Read 2:Write 4:Spoken at Home
     *
     *
     * == Citizenship ==
     * @bodyParam citizenship_status integer required question-id-234, e.g.0:U.S. Citizen or U.S. National 1:U.S. Dual Citizen 5:U.S. Permanent Resident 4:U.S. Refugee or Asylee 3:Other (Non-US)
     * @bodyParam ssn_number string question-id-235, e.g."222-11-1111"
     * if "1", "5", "4" or "3" is selected in 'citizenship_status':
     * @bodyParam list_citizenship array required question-id-236, if "1", "5", "4" or "3" is selected in 'citizenship_status', e.g.["0"(Canada), "241"(Taiwan)]
     * if "5" is selected in 'citizenship_status':
     * @bodyParam green_card_file file question-id-237, if "5" is selected in 'citizenship_status',
     * @bodyParam arn_number string question-id-238, if "5" is selected in 'citizenship_status',
     * @bodyParam arn_expiration_date date question-id-239, if "5" is selected in 'citizenship_status', e.g."11/27/2025"
     * if "3" is selected in 'citizenship_status':
     * @bodyParam hold_us_visa boolean required question-id-1836, e.g.0:yes 1:no
     * if 'hold_us_visa' is true:
     * @bodyParam held_visa integer required question-id-240, if 'hold_us_visa' is true, e.g.1:A-1 2:A-2 3:A-3 4:B-2 5:E-2 6:F-1 7:F-2 8:G-1 9:G-2 10:G-3 11:G-4 12:H-4 13:J-1 14:J-2 15:L-2 16:other 17:R-2
     * @bodyParam visa_number string required question-id-242, if 'hold_us_visa' is true
     * @bodyParam visa_date_issued date required question-id-243, if 'hold_us_visa' is true, e.g."11/27/2025"
     * if "16' is selected in 'held_visa':
     * @bodyParam other_visa_type_descr string required question-id-241, if "16' is selected in 'held_visa'
     *
     * @bodyParam want_to_apply_us_visa integer question-id-1837, noticed that "4" is skipped in the options, e.g.null, 21:I do not intend to apply for a U.S. visa 20:I do not know which visa I will hold 1:A-1 2:A-2 3:A-3 5:B-2 6:E-2 7:F-1 8:F-2 9:G-1 10:G-2 11:G-3 12:G-4 13:H-4 14:J-1 15:J-2 16:L-2 17:other 18:R-2
     * if "17" is selected in 'want_to_apply_us_visa':
     * @bodyParam want_to_apply_other_visa_descr string question-id-1838, if "17" is selected in 'want_to_apply_us_visa'
     *
     *
     * == Common App Fee Waiver ==
     * @bodyParam apply_fee_waiver boolean required question-id-1021, e.g.0:yes 1:no
     * if 'apply_fee_waiver' is true:
     * @bodyParam fee_waiver_indicators array required question-id-1805, if 'apply_fee_waiver' is true, e.g.["0"(I have received or am eligible to receive an ACT or SAT testing fee waiver), "1"(I am enrolled in or am eligible to participate in the Federal Free or Reduced Price Lunch program (FRPL))]
     * @bodyParam fee_waiver_signature string required question-id-1022, if 'apply_fee_waiver' is true, e.g."name"
     * @bodyParam want_info_from_strive_for_college boolean question-id-1911, if 'apply_fee_waiver' is true, e.g."", 0:yes 1:no
     *
     *
     * == Household ==
     * @bodyParam parents_marital_status integer required question-id-364, e.g.0:Married 1:Separated 2:Divorced 3:Never Married 4:Widowed 5:Civil Union/Domestic Partners
     * if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status':
     * @bodyParam divorced_yr string required question-id-365, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g."2021"
     * @bodyParam want_to_list_step_parents boolean required question-id-367, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.0:yes 1:no
     * @bodyParam step_parents_number integer required question-id-368, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.1 or 2
     *
     * @bodyParam whom_make_your_permanent_home integer required question-id-366, e.g.0:Parent-1 1:Parent-2 2:Both 3:Legal Guardian 4:Other 5:Ward of the Court/State
     * if "4"(Other) is selected in 'whom_make_your_permanent_home':
     * @bodyParam living_situation_descr string question-id-1921, if "4"(Other) is selected in 'whom_make_your_permanent_home', maxlength:100
     *
     * @bodyParam has_children boolean question-id-369, e.g."", 0:yes 1:no
     * if 'has_children' is true:
     * @bodyParam children_number integer required question-id-370, if 'has_children' is true, min:0/max:99
     *
     *
     * == Parent 1/2 ==
     * parent_1_type integer required question-id-371, e.g.0:Mother 1:Father 2: I have limited information about this parent
     * parent_2_type integer required question-id-453, e.g.0:Mother 1:Father 2: I have limited information about this parent 3:I do not have another parent to list
     *
     * parent_1_is_living boolean required question-id-372, e.g.0:yes 1:no
     * if 'parent_1_is_living' is false:
     * parent_1_deceased_date date required question-id-373, if 'parent_1_is_living' is false, e.g."02/2003"
     *
     * parent_1_prefix integer required question-id-374, e.g.0:Dr. 1:Mr. 2:Ms. 3:Mrs.
     * parent_1_first_name string question-id-375
     * parent_1_middle_name string question-id-376
     * parent_1_last_name string question-id-377
     * parent_1_former_last_name string question-id-1023
     * parent_1_suffix integer question-id-378, e.g.null, 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
     * parent_1_birth_country integer question-id-379, e.g.null, 0:United States of America 1:Canada
     * parent_1_occupation integer question-id-385
     * e.g.null
     *  0:Accountant or actuary
     *  1:Actor or entertainer
     *  2:Architect or urban planner
     *  3:Artist 4:Business (clerical)
     *  5:Business executive (management, administrator)
     *  6:Business owner or proprietor
     *  7:Business salesperson or buyer
     *  8:Clergy (minister, priest)
     *  9:Clergy (other religious)
     *  ...an so on.
     *  44:Other
     * if "44"(Other) is selected in 'parent_1_occupation':
     * parent_1_occupation_descr string question-id-1783, if "44"(Other) is selected in 'parent_1_occupation'
     *
     * parent_1_education_level string question-id-391
     * e.g.null, 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
     * if "10", "11", "7", "8" or "9" is selected as 'education_level':
     * parent_1_attended_institutions_number integer required question-id-392, if "10", "11", "7", "8" or "9" is selected as 'education_level', min:1/max:5
     * parent_1_college_1 object required question-id-393, if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.{"ceebCode":"1700","name":"Aalto University","schoolTypeCode":"4-year college or university","address":{"city":"Aalto","state":"","zip":"FI-00076","countryValue":"FIN","address1":"PO Box 21210","address2":"","address3":"","countryCode":"73","stateValue":""}}
     * parent_1_college_1_degrees_number integer required question-id-394, if "10", "11", "7", "8" or "9" is selected as 'education_level', min:0/max:5
     * parent_1_college_1_degree_received_1 integer required question-id-395 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_1_degree_received_yr_1 string required question-id-396 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g."2021"
     * parent_1_college_1_degree_received_2 integer required question-id-397, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_1_degree_received_yr_2 string required question-id-398, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_1_degree_received_3 integer required question-id-399, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_1_degree_received_yr_3 string required question-id-400, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_1_degree_received_4 integer required question-id-401, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_1_degree_received_yr_4 string required question-id-402, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_1_degree_received_5 integer required question-id-403, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_1_degree_received_yr_5 string required question-id-404, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1:
     * parent_1_college_2 object required question-id-405, if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.{"ceebCode":"1700","name":"Aalto University","schoolTypeCode":"4-year college or university","address":{"city":"Aalto","state":"","zip":"FI-00076","countryValue":"FIN","address1":"PO Box 21210","address2":"","address3":"","countryCode":"73","stateValue":""}}
     * parent_1_college_2_degrees_number integer required question-id-406, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, min:0/max:5
     * parent_1_college_2_degree_received_1 integer required question-id-407, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_2_degree_received_yr_1 string required question-id-408, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_2_degree_received_2 integer required question-id-409, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_2_degree_received_yr_2 string required question-id-410, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_2_degree_received_3 integer required question-id-411, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_2_degree_received_yr_3 string required question-id-412, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_2_degree_received_4 integer required question-id-413, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_2_degree_received_yr_4 string required question-id-414, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * parent_1_college_2_degree_received_5 integer required question-id-415, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * parent_1_college_2_degree_received_yr_5 string required question-id-416, if "10", "11", "7", "8" or "9" is selected as 'education_level' and 'attended_institutions_number' is larger than 1, e.g."2021"
     * ...and so on (max: 5 colleges).
     *
     * The length of 'parents' is 2:
     * @bodyParam parents.*.type integer required The length of 'parents' is 2, e.g.0:Mother 1:Father 2:I have limited information about this parent
     * @bodyParam parents.*.is_living boolean required 0:yes 1:no
     * @bodyParam parents.*.deceased_date date required if 'parents.*.is_living' is false
     * @bodyParam parents.*.prefix integer required 0:Dr. 1:Mr. 2:Ms. 3:Mrs.
     * @bodyParam parents.*.first_name string required
     * @bodyParam parents.*.middle_name string
     * @bodyParam parents.*.last_name string required
     * @bodyParam parents.*.former_last_name string
     * @bodyParam parents.*.suffix integer null, 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
     * @bodyParam parents.*.birth_country integer null, 0:United States of America 1:Canada
     * @bodyParam parents.*.occupation integer null, 0:Accountant or actuary 1:Actor or entertainer 2:Architect or urban planner 3:Artist 4:Business (clerical) 5:Business executive (management, administrator) 6:Business owner or proprietor 7:Business salesperson or buyer 8:Clergy (minister, priest) 9:Clergy (other religious) 44:Other
     * @bodyParam parents.*.occupation_descr string
     * @bodyParam parents.*.education_level integer required null, 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
     *
     * The min length of 'parents.*.colleges' is 0 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level':
     * @bodyParam parents.*.colleges.*.name string required The min length of 'parents.*.colleges' is 0 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g."Aalto University"
     * @bodyParam parents.*.colleges.*.ceeb_code integer e.g."1700"
     * @bodyParam parents.*.colleges.*.school_type_code string e.g."4-year college or university"
     * @bodyParam parents.*.colleges.*.city string e.g."Aalto"
     * @bodyParam parents.*.colleges.*.state string
     * @bodyParam parents.*.colleges.*.state_value string
     * @bodyParam parents.*.colleges.*.zip string e.g."FI-00076"
     * @bodyParam parents.*.colleges.*.country_code integer required e.g."242"
     * @bodyParam parents.*.colleges.*.country_value string required e.g."TWN"
     * @bodyParam parents.*.colleges.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam parents.*.colleges.*.address_line_2 string
     * @bodyParam parents.*.colleges.*.address_line_3 string
     *
     * The min length of 'parents.*.colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level':
     * @bodyParam parents.*.colleges.*.degrees.*.name integer required The min length of 'parents.*.colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * @bodyParam parents.*.colleges.*.degrees.*.received_yr string required e.g."2021"
     *
     *
     * == Legal Guardian ==
     * @bodyParam prefix integer question-id-535, e.g.0:Dr. 1:Mr. 2:Ms. 3:Mrs.
     * @bodyParam first_name string required question-id-536
     * @bodyParam middle_name string question-id-537
     * @bodyParam last_name string required question-id-538
     * @bodyParam former_last_name string question-id-927
     * @bodyParam suffix integer question-id-539, e.g.null, 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
     * @bodyParam relationship string required question-id-540
     * @bodyParam email string question-id-541
     * @bodyParam preferred_phone boolean question-id-542, e.g.0:home 1:mobile 2:other 3:work
     * preferred_phone_number e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam preferred_phone_number.*.country_code string question-id-543, e.g."+886"
     * @bodyParam preferred_phone_number.*.phone_number string  e.g."970824452"
     * @bodyParam preferred_phone_number.*.extension string
     * @bodyParam address_type integer required question-id-544, e.g.0:same as my home address 1:different
     * if "1" is selected in 'address_type':
     * address e.g.{"country":"242","address1":"ssss","address2":"","address3":"","city":"sdasd","state":null,"zip":null,"countryCode":"242","countryValue":"Taiwan","stateValue":null}
     * @bodyParam address.*.county string question-id-545, if "1" is selected in 'address_type'
     * @bodyParam address.*.country_code integer required 0:United States of America 242:Taiwan
     * @bodyParam address.*.country_value string required e.g."United States of America"
     * @bodyParam address.*.address_line_1 string required
     * @bodyParam address.*.address_line_2 string
     * @bodyParam address.*.address_line_3 string
     * @bodyParam address.*.city string required e.g."Overton"
     * @bodyParam address.*.state integer optional, but required if "0"(USA) is selected as country, e.g.null
     * @bodyParam address.*.state_value string optional, but required if "0"(USA) is selected as country, e.g.null, "TN"
     * @bodyParam address.*.zip string optional, but required if "0"(USA) is selected as country, e.g.null, "38541-6781"
     *
     * @bodyParam occupation integer question-id-546
     * e.g.null,
     *  0:Accountant or actuary
     *  1:Actor or entertainer
     *  2:Architect or urban planner
     *  3:Artist 4:Business (clerical)
     *  5:Business executive (management, administrator)
     *  6:Business owner or proprietor
     *  7:Business salesperson or buyer
     *  8:Clergy (minister, priest)
     *  9:Clergy (other religious)
     *  ...an so on.
     *  44:Other
     * if "44"(Other) is selected in 'occupation':
     * @bodyParam occupation_descr string question-id-1785, if "44"(Other) is selected in 'occupation'
     *
     * @bodyParam employment_status integer required question-id-547, e.g.0:Employed 1:Unemployed 2:Retired 3:Self-Employed
     * if "0"(Employed) or "2"(Retired) is selected in 'employment_status':
     * @bodyParam position string question-id-548, if "0"(Employed) or "2"(Retired) is selected in 'employment_status', maxlength:40
     * @bodyParam is_employed_or_retired_college boolean required question-id-549, if "0"(Employed) or "2"(Retired) is selected in 'employment_status', e.g.1:currently employed 2:retired 3:never
     * if "2"(retired) or "3"(never) is selected in 'is_employed_or_retired_college':
     * @bodyParam current_employer_name string required question-id-550, if "2"(retired) or "3"(never) is selected in 'is_employed_or_retired_college'
     * if "1"(currently employed) or "2"(retired) is selected in 'is_employed_or_retired_college':
     * college_employer e.g.{"ceebCode":"","name":"sss","address":{"city":"","state":"7","zip":"38541-6781","countryValue":"USA","address1":"","address2":"","address3":"","countryCode":"0","stateValue":"AZ"}}
     * @bodyParam college_employer.*.name string required question-id-551, if "1"(currently employed) or "2"(retired) is selected in 'is_employed_or_retired_college'
     * @bodyParam college_employer.*.ceeb_code integer e.g."1700"
     * @bodyParam college_employer.*.school_type_code string e.g."4-year college or university"
     * @bodyParam college_employer.*.city string e.g."Aalto"
     * @bodyParam college_employer.*.state string
     * @bodyParam college_employer.*.state_value string
     * @bodyParam college_employer.*.zip string e.g."FI-00076"
     * @bodyParam college_employer.*.country_code integer required e.g."242"
     * @bodyParam college_employer.*.country_value string required e.g."TWN"
     * @bodyParam college_employer.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam college_employer.*.address_line_2 string
     * @bodyParam college_employer.*.address_line_3 string
     * @bodyParam education_level integer question-id-552, e.g.null, 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
     *
     * The min length of 'colleges' is 0 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level':
     * @bodyParam colleges.*.name string required The min length of 'colleges' is 0 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g."Aalto University"
     * @bodyParam colleges.*.ceeb_code integer e.g."1700"
     * @bodyParam colleges.*.school_type_code string e.g."4-year college or university"
     * @bodyParam colleges.*.city string e.g."Aalto"
     * @bodyParam colleges.*.state string
     * @bodyParam colleges.*.state_value string
     * @bodyParam colleges.*.zip string e.g."FI-00076"
     * @bodyParam colleges.*.country_code integer required e.g."242"
     * @bodyParam colleges.*.country_value string required e.g."TWN"
     * @bodyParam colleges.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam colleges.*.address_line_2 string
     * @bodyParam colleges.*.address_line_3 string
     *
     * The min length of 'colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level':
     * @bodyParam colleges.*.degrees.*.name integer required The min length of 'colleges.*.degrees' is 1 and the max length is 5 if "10", "11", "7", "8" or "9" is selected as 'education_level', e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * @bodyParam colleges.*.degrees.*.received_yr string required e.g."2021"
     *
     *
     * == Sibling ==
     * siblings_number integer required question-id-614, min:0/max:5
     * The min length of 'siblings' is 0 and the max length is 5:
     * @bodyParam siblings.*.first_name string required The min length of 'siblings' is 0 and the max length is 5
     * @bodyParam siblings.*.middle_name string
     * @bodyParam siblings.*.last_name string required
     * @bodyParam siblings.*.age integer
     * @bodyParam siblings.*.relationship integer e.g."", 0:brother 1:sister
     * @bodyParam siblings.*.education_level integer required 0:none 1:Some grade/primary school 2:Completed grade/primary school 3:Some high/secondary school 4:Graduated from high/secondary school (or equivalent) 10:Some trade school or community college 11:Graduated from trade school or community college 7:Some college/university 8:Graduated from college/university 9:Graduate school
     *
     * if "10", "11", "7", "8" or "9" is selected as 'siblings.*.education_level':
     * siblings.*.college e.g.null, {"ceebCode":"1700","name":"Aalto University","schoolTypeCode":"4-year college or university","address":{"city":"Aalto","state":"","zip":"FI-00076","countryValue":"FIN","address1":"PO Box 21210","address2":"","address3":"","countryCode":"73","stateValue":""}}
     * @bodyParam siblings.*.college.*.name string required if "10", "11", "7", "8" or "9" is selected as 'siblings.*.education_level'
     * @bodyParam siblings.*.college.*.ceeb_code integer e.g."1700"
     * @bodyParam siblings.*.college.*.school_type_code string e.g."4-year college or university"
     * @bodyParam siblings.*.college.*.city string e.g."Aalto"
     * @bodyParam siblings.*.college.*.state string
     * @bodyParam siblings.*.college.*.state_value string
     * @bodyParam siblings.*.college.*.zip string e.g."FI-00076"
     * @bodyParam siblings.*.college.*.country_code integer required e.g."242"
     * @bodyParam siblings.*.college.*.country_value string required e.g."TWN"
     * @bodyParam siblings.*.college.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam siblings.*.college.*.address_line_2 string
     * @bodyParam siblings.*.college.*.address_line_3 string
     * @bodyParam siblings.*.college.*.degree.*.name integer 0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS)
     * @bodyParam siblings.*.college.*.degree.*.from_month string e.g."03/2021"
     * @bodyParam siblings.*.college.*.degree.*.to_month string e.g."04/2021"
     *
     *
     * == Current or Most Recent Secondary/High School ==
     * high_school question-id-245, e.g.{"ceebCode":"","name":"ddd","schoolTypeCode":"Public","address":{"city":"","state":"7","zip":"03220-4052","countryValue":"USA","address1":"","address2":"","address3":"","countryCode":"0","stateValue":"AZ"}}
     * @bodyParam name string required  question-id-245
     * @bodyParam ceeb_code integer e.g."1700"
     * @bodyParam school_type_code string required e.g."Public" "Charter"
     * @bodyParam city string e.g."Aalto"
     * @bodyParam state string optional, but required if "0"(USA) is selected as country
     * @bodyParam state_value string optional, but required if "0"(USA) is selected as country
     * @bodyParam zip string optional, but required if "0"(USA) is selected as country, e.g."FI-00076"
     * @bodyParam country_code integer required e.g."242"
     * @bodyParam country_value string required e.g."TWN"
     * @bodyParam address_line_1 string e.g."PO Box 21210"
     * @bodyParam address_line_2 string
     * @bodyParam address_line_3 string
     * @bodyParam entry_month string required e.g."02/2020"
     * @bodyParam is_boarding_high_school boolean required 0:yes 1:no
     * @bodyParam live_on_campus boolean required 0:yes 1:no
     * @bodyParam graduate_from_school boolean required 0:yes 1:no
     * @bodyParam high_school_exit_month string required e.g."02/2020"
     * @bodyParam receive_high_school_equivalency boolean required 0:yes 1:no
     * @bodyParam receive_high_school_equivalency_month string required e.g."02/2020"
     * @bodyParam high_school_descr string required e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
     * @bodyParam progression array required question-id-265, e.g.["1"(Did or will graduate early), "2"(Did or will graduate late), "4"(Did or will take time off), "5"(Did or will take gap year), "7"(No change in progression)]
     * if one of "1"(Did or will graduate early), "2"(Did or will graduate late), "4"(Did or will take time off) or "5"(Did or will take gap year) is selected in 'progression':
     * @bodyParam progression_descr string required question-id-836, if one of "1"(Did or will graduate early), "2"(Did or will graduate late), "4"(Did or will take time off) or "5"(Did or will take gap year) is selected in 'progression', minlength:1 maxlength:250
     *
     *
     * == Other Secondary/High Schools ==
     * other_high_schools_length integer required question-id-255, min:0/max:3
     * other_high_school_1 object question-id-256
     * The min length of 'other_high_schools' is 0 and the max length is 3:
     * @bodyParam other_high_schools.*.name string required
     * @bodyParam other_high_schools.*.ceeb_code integer e.g."1700"
     * @bodyParam other_high_schools.*.school_type_code string required e.g."Public" "Charter"     *
     * @bodyParam other_high_schools.*.city string e.g."Aalto"
     * @bodyParam other_high_schools.*.state string optional, but required if "0"(USA) is selected as country
     * @bodyParam other_high_schools.*.state_value string optional, but required if "0"(USA) is selected as country
     * @bodyParam other_high_schools.*.zip string optional, but required if "0"(USA) is selected as country, e.g."38541-6781"
     * @bodyParam other_high_schools.*.country_code integer required e.g."242"
     * @bodyParam other_high_schools.*.country_value string required e.g."TWN"
     * @bodyParam other_high_schools.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam other_high_schools.*.address_line_2 string
     * @bodyParam other_high_schools.*.address_line_3 string
     * @bodyParam other_high_schools.*.from_month string required e.g."04/2021"
     * @bodyParam other_high_schools.*.to_month string required e.g."04/2021"
     * if the length of 'other_high_schools' is larger than 0:
     * @bodyParam why_leave_other_high_school string optional, but required if the length of 'other_high_schools' is larger than 0, e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
     *
     * == Colleges/Universities ==
     * colleges_length integer required question-id-267, min:0/max:3
     * college_1 object
     * The min length of 'colleges' is 0 and the max length is 3:
     * @bodyParam colleges.*.name string required The min length of 'colleges' is 0 and the max length is 3, e.g."Aalto University"
     * @bodyParam colleges.*.ceeb_code integer e.g."1700"
     * @bodyParam colleges.*.school_type_code string e.g."4-year college or university"
     * @bodyParam colleges.*.city string e.g."Aalto"
     * @bodyParam colleges.*.state string
     * @bodyParam colleges.*.state_value string
     * @bodyParam colleges.*.zip string e.g."FI-00076"
     * @bodyParam colleges.*.country_code integer required e.g."242"
     * @bodyParam colleges.*.country_value string required e.g."TWN"
     * @bodyParam colleges.*.address_line_1 string e.g."PO Box 21210"
     * @bodyParam colleges.*.address_line_2 string
     * @bodyParam colleges.*.address_line_3 string
     * @bodyParam colleges.*.course_details integer required 6:Dual enrollment with high school 7:Summer program 8:Credit awarded directly by college
     * @bodyParam colleges.*.from_month string required e.g."11/2016"
     * @bodyParam colleges.*.to_month string required e.g."11/2016"
     * @bodyParam colleges.*.degree integer required e.g."", 0:AA 1:AS 2:BA 3:BS
     *
     *
     * == Grades ==
     * @bodyParam graduating_class_size integer required question-id-303
     * @bodyParam class_rank_reporting integer question-id-297, e.g."", 1:Exact 2:Decile 3:Quintile 4:Quartile 5:None
     * if "1"(Exact) is selected in 'class_rank_reporting':
     * @bodyParam exact_class_rank integer required question-id-298, if "1"(Exact) is selected in 'class_rank_reporting'
     * if "2"(Decile) is selected in 'class_rank_reporting':
     * @bodyParam decile_rank integer required question-id-299, if "2"(Decile) is selected in 'class_rank_reporting', e.g.1:Top 10% 2:Top 20% 3:Top 30% 4:Top 40% 5:Top 50% 6:Top 60% 7:Top 70% 8:Top 80% 9:Top 90% 10:Top 100%
     * if "3"(Quintile) is selected in 'class_rank_reporting':
     * @bodyParam quintile_rank integer required question-id-300, if "3"(Quintile) is selected in 'class_rank_reporting', e.g.1:Top 20% 2:Top 40% 3:Top 60% 4:Top 80% 5:Top 100%
     * if "4"(Quartile) is selected in 'class_rank_reporting':
     * @bodyParam quartile_rank integer required question-id-301, if "4"(Quartile) is selected in 'class_rank_reporting', e.g.1:Top 25% 2:Top 50% 3:Top 75% 4:Top 100%
     * if "1"(Exact), "2"(Decile), "3"(Quintile) or "4"(Quartile) is selected in 'class_rank_reporting':
     * @bodyParam class_rank_weighting integer required if "1"(Exact), "2"(Decile), "3'(Quintile) or "4"(Quartile) is selected in 'class_rank_reporting', e.g.1:weighted 2:unweighted
     *
     * @bodyParam gpa_scale_reporting integer e.g.from 4 to 20, 100, 200:None
     * if "200"(None) is NOT selected in 'gpa_scale_reporting':
     * @bodyParam cumulative_gpa integer optional, but required if "200"(None) is NOT selected in 'gpa_scale_reporting'
     *
     * @bodyParam gpa_weighting integer question-id-306, e.g."", 1:weighted 2:unweighted
     *
     *
     * == Current or Most Recent Year Courses ==
     * courses_length integer required question-id-307, min:1/max:15
     * The min length of 'courses' is 1 and the max length is 15:
     * @bodyParam courses_scheduling_system string required question-id-1803, e.g."Semester", "Trimester", "Quarter"
     * @bodyParam courses.*.title string required question-id-308
     * @bodyParam courses.*.level integer question-id-309, e.g.1:Regular/Standard 0:Accelerated 9:Advanced 2:Advanced Placement (AP) 3:AS/A-level/International A-level, Cambridge AICE  8:College Prep
     * @bodyParam courses.*.schedule array required question-id-311, noticed that the options are related to the value selected in 'courses_scheduling_system' and other options couldn't be selected at the same time if "0"(Full Year) is selected in 'schedule', e.g.["0"(Full Year)], ["2"(First Trimester), "4"(Second Trimester), "5"(Third Trimester)], ["9"(Fourth Quarter)]
     *
     *
     * == Honors ==
     * wish_to_report_honors boolean required question-id-1970, e.g.0:yes 1:no
     * if 'wish_to_report_honors' is true, the length of 'honors' is 4:
     * @bodyParam honors.*.title string required the length of 'honors' is 4
     * @bodyParam honors.*.level array e.g.["0"(9), "1"(10), "2"(11), "3"(12), "4"(Post-graduate)]
     * @bodyParam honors.*.level_recognition array 0:School 1:State/Regional 2:National 3:International
     *
     *
     * == Community-Based Organizations ==
     * community_based_organizations_length integer required min:0/max:3
     * community_based_organization_1 integer question-id-284, e.g.0:100 Black Men 102:Achieve Program 616:Achieving Collegiate Excellence and Success (ACES) 286:Building STEPS
     * community_based_organization_2 integer question-id-285, e.g.0:100 Black Men 102:Achieve Program 616:Achieving Collegiate Excellence and Success (ACES) 286:Building STEPS
     * community_based_organization_3 integer question-id-286, e.g.0:100 Black Men 102:Achieve Program 616:Achieving Collegiate Excellence and Success (ACES) 286:Building STEPS
     * The min length of 'community_based_organizations' is 0 and the max length is 3:
     * @bodyParam community_based_organizations.*.organization_name integer required 0:100 Black Men 102:Achieve Program 616:Achieving Collegiate Excellence and Success (ACES) 286:Building STEPS
     * @bodyParam community_based_organizations.*.mentor_prefix string question-id-290, e.g.0:Dr. 1:Mr. 2:Ms.
     * @bodyParam community_based_organizations.*.mentor_first_name string question-id-291
     * @bodyParam community_based_organizations.*.mentor_last_name string
     * @bodyParam community_based_organizations.*.mentor_email string
     * community_based_organizations.*.mentor_phone_number question-id-296, e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam community_based_organizations.*.mentor_phone_number.*.country_code string e.g.null, "+886"
     * @bodyParam community_based_organizations.*.mentor_phone_number.*.phone_number string e.g."970824452"
     * @bodyParam community_based_organizations.*.mentor_phone_number.*.extension string
     *
     *
     * == Future Plans ==
     * @bodyParam career_interest integer required question-id-1492, e.g.0:Accountant or actuary 1:Actor or entertainer 2:Architect or urban planner 3:Artist 4:Business (clerical) 5:Business executive (management, administrator) 6:Business owner or proprietor 7:Business salesperson or buyer 8:Clergy (minister, priest) 9:Clergy (other religious) 44:Other
     * if "44"(Other) is selected in 'career_interest':
     * @bodyParam career_interest_descr string question-id-1919, if "44"(Other) is selected in 'career_interest'
     *
     * @bodyParam highest_degree_to_earn integer required question-id-1493, e.g.0:Associate's (AA, AS) 1:Bachelor's (BA, BS) 2:Master's (MA, MS) 3:Business (MBA, MAcc) 4:Law (JD, LLM) 5:Medicine (MD, DO, DVM, DDS) 6:Doctorate (PhD, EdD, etc) 7:Other 8:Undecided
     *
     *
     * == Tests Taken ==
     * wish_to_report_tests boolean required question-id-925, e.g.0:yes 1:no
     * gave_leaving_exams boolean question-id-837, noticed that students studying in the US typically answer no to this question, e.g."", 0:yes 1:no
     *
     * if 'wish_to_report_tests' is true:
     * tests_taken array required question-id-11, if 'wish_to_report_tests' is true, e.g.["0"(ACT), "1"(SAT before March 2016), "9"(SAT March 2016 or after), "2"(SAT Subject Tests), "3"(AP Subject Tests), "4"(IB Subject Tests), "5"(TOEFL iBT), "6"(TOEFL Paper), "8"(PTE Academic Tests), "7"(IELTS)]
     *
     * tests e.g.[{"type": 0, "subject": 0, "score": 100, "takenDate": "11/27/2020", "wishToReportNumber": 3, "futureSittingMonths": ["06/2021", "07/2021"]}]
     * @bodyParam tests.*.type integer required 0:ACT 1:SAT (before March 2016) 9:SAT (March 2016 or after) 2:SAT Subject Tests 3:AP Subject Tests 4:IB Subject Tests 5:TOEFL iBT 6:TOEFL Paper 8:PTE Academic Tests 7:IELTS 10:Senior Secondary Leaving Examination
     *
     * if 0"(ACT) is set as 'tests.*.type':
     * composite, english, math, reading, science or writing is available for 'tests.*.subject'
     *
     * if "1"(SAT before March 2016) is set as 'tests.*.type':
     * critical_reading, math or writing is available for 'tests.*.subject'
     *
     * if "9"(SAT March 2016 or after) is set as 'tests.*.type':
     * reading and writing, math or essay is available for 'tests.*.subject'
     *
     * if "2"(SAT Subject Tests) is set as 'tests.*.type':
     * check e.g. in "== SAT Subject Tests =="
     *
     * if "3"(AP Subject Tests) is set as 'tests.*.type':
     * check e.g. in "== AP Subject Tests =="
     *
     * if "4"(IB Subject Tests) is set as 'tests.*.type':
     * check e.g. in "== IB Subject Tests =="
     *
     * if "5"(TOEFL iBT) is set as 'tests.*.type':
     * total, reading, speaking, listening, writing is available for 'tests.*.subject'
     *
     * if "6"(TOEFL Paper) is set as 'tests.*.type':
     * total, reading, listening, writing, TWE is available for 'tests.*.subject'
     *
     * if "8"(PTE Academic Tests) is set as 'tests.*.type':
     * reading, speaking, listening, writing, oral fluency, pronunciation, spelling, vocabulary or discourse is available for 'tests.*.subject'
     *
     * if "7"(IELTS) is set as 'tests.*.type':
     * overall, reading, speaking, listening, writing is available for 'tests.*.subject'
     *
     * if "10"(Senior Secondary Leaving Examination) is set as 'tests.*.type':
     * typeof 'tests.*.subject' is string
     *
     * @bodyParam tests.*.subject integer/string required Please check e.g. in each part of section below.
     * @bodyParam tests.*.score integer/float optional, but required if "3"(AP Subject Tests) is NOT set as 'tests.*.type'. The min number is 1/1/0/10 and the max number is 5/7/30/90 if "3"(AP Subject Tests)/"4"(IB Subject Tests)/"5"(TOEFL iBT)/"8"(PTE Academic Tests) is set as 'tests.*.type'/0, 0.5, 1, 1.5...9 if "7"(IELTS) is set as 'tests.*.type'/typeof 'tests.*.score' is float if "10"(Senior Secondary Leaving Examination) is set as 'tests.*.type'.
     * @bodyParam tests.*.taken_date date required e.g."11/27/2020"
     * @bodyParam tests.*.wish_to_report_number integer optional, but required if "2"(SAT Subject Tests), "3"(AP Subject Tests), "4"(IB Subject Tests) or "10"(Senior Secondary Leaving Examination) is NOT set as 'tests.*.type'
     * @bodyParam tests.*.level integer optional, but required if "4"(IB Subject Tests) is set as 'tests.*.type', e.g.
     * @bodyParam tests.*.future_sitting_months array The min length of 'future_act_sitting_months' is 0 and the max length is 3, noticed that the value should be in between of January 2020 and December 2021 and in "month year" format if "0"(ACT), "9"(SAT March 2016 or after) or "7" is set as 'tests.*.type', e.g.["06/2021", "07/2021"]
     * @bodyParam tests.*.examination_board integer optional, but required if "10"(Senior Secondary Leaving Examination) is set as 'tests.*.type'
     * @bodyParam tests.*.score_type integer optional, but required if "10"(Senior Secondary Leaving Examination) is set as 'tests.*.type', e.g.0:Actual 1:Predicted
     * @bodyParam tests.*.examination_board_descr optional, but required if "10"(Senior Secondary Leaving Examination) is set as 'tests.*.type' and "21"(Other) is set as 'tests.*.examination_board'
     *
     *
     * == ACT Tests ==
     * This section is required by the time "0"(ACT) is selected in 'tests_taken'.
     * acts_number integer required This section is required by the time "0"(ACT) is selected in 'tests_taken', min:0/max:5
     *
     * took_act_plus_writing_test boolean required 0:yes 1:no
     * acts_highest_composite_score integer required
     * acts_composite_date date required e.g."11/27/2020"
     * acts_highest_english_score integer required
     * acts_english_date date required e.g."11/27/2020"
     * acts_highest_math_score integer required
     * acts_math_date date required e.g."11/27/2020"
     * acts_highest_reading_score integer required
     * acts_reading_date date required e.g."11/27/2020"
     * acts_highest_science_score integer required
     * acts_science_date date required e.g."11/27/2020"
     * if 'took_act_plus_writing_test' is true:
     * acts_highest_writing_score integer optional, if 'took_act_plus_writing_test' is true
     * acts_writing_date date optional, required if 'took_act_plus_writing_test' is true, e.g."11/27/2020"
     *
     * future_act_sitting_months_length integer required question-id-13, min:0/max:3
     * The min length of 'future_act_sitting_months' is 0 and the max length is 3:
     * future_act_sitting_months array required The min length of 'future_act_sitting_months' is 0 and the max length is 3, noticed that the value should be in between of January 2020 and December 2021 and in "month year" format, e.g.["06/2021", "07/2021"]
     *
     *
     * == SAT (before March 2016) ==
     * This section is required by the time "1"(SAT before March 2016) is selected in 'tests_taken'.
     * sats_before_march_number integer required This section is required by the time "1"(SAT before March 2016) is selected in 'tests_taken', min:0/max:5
     *
     * sats_before_march_highest_critical_reading_score integer required
     * sats_before_march_critical_reading_date date required e.g."11/27/2020"
     * sats_before_march_highest_math_score integer required
     * sats_before_march_math_date date required e.g."11/27/2020"
     * sats_before_march_highest_writing_score integer required
     * sats_before_march_writing_date date required e.g."11/27/2020"
     *
     *
     * == SAT (March 2016 or after) ==
     * This section is required by the time "9"(SAT March 2016 or after) is selected in 'tests_taken'.
     * sats_after_march_number integer required This section is required by the time "9"(SAT March 2016 or after) is selected in 'tests_taken', min:0/max:5
     *
     * took_sat_essay boolean required 0:yes 1:no
     * sats_after_march_highest_reading_and_writing_score integer required
     * sats_after_march_reading_and_writing_date date required e.g."11/27/2020"
     * sats_after_march_highest_math_score integer required
     * sats_after_march_math_date date required e.g."11/27/2020"
     * if 'took_sat_essay' is true:
     * sats_after_march_highest_essay_score integer optional, but required if 'took_sat_essay' is true
     * sats_after_march_essay_date date optional, but required if 'took_sat_essay' is true, e.g."11/27/2020"
     * future_sat_sitting_months_length integer required question-id-13, min:0/max:3
     * The min length of 'future_sat_sitting_months' is 0 and the max length is 3:
     * future_sat_sitting_months array required The min length of 'future_sat_sitting_months' is 0 and the max length is 3, noticed that the value should be in between of January 2020 and December 2021 and in "month year" format, e.g.["06/2021", "07/2021"]
     *
     *
     * == SAT Subject Tests ==
     * This section is required by the time "2"(SAT Subject Tests) is selected in 'tests_taken'.
     * sats_number integer required This section is required by the time "2"(SAT Subject Tests) is selected in 'tests_taken', min:0/max:10
     * The min length of 'sats' is 0 and the max length is 10 if "2"(SAT Subject Tests) is selected in 'tests_taken':
     *
     * sats.*.taken_month string required The min length of 'sats' is 0 and the max length is 10 if "2"(SAT Subject Tests) is selected in 'tests_taken', e.g."02/2013"
     * sats.*.subject integer required 0:Biology - Ecological 1:Biology - Molecular 24:Writing
     * sats.*.score integer
     *
     *
     * == AP Subject Tests ==
     * This section is required by the time "3"(AP Subject Tests) is selected in 'tests_taken'.
     * aps_number integer required This section is required by the time "3"(AP Subject Tests) is selected in 'tests_taken', min:0/max:15
     * The min length of 'aps' is 0 and the max length is 15 if "3"(AP Subject Tests) is selected in 'tests_taken':
     *
     * aps.*.taken_date date required
     * aps.*.subject string required
     * e.g.1:Art: Studio Art-3-D Design
     *  2:Art: Studio Art-drawing
     *  3:History of Art
     *  4:Biology
     *  5:Calculus AB
     *  6:Calculus BC
     *  7:Calculus BC - AB Subscore Grade
     *  8:Chemistry
     *  9:Chinese Language & Culture
     *  10:Computer Science A
     *  46:Computer Science Principles
     *  12:English Language & Composition
     *  13:English Literature & Composition
     *  14:Environmental Science
     *  15:European History
     *  16:French Language
     *  18:German Language
     *  19:Government & Politics: Comparative
     *  20:Government & Politics: United States
     *  21:Human Geography
     *  23:Italian Language & Culture
     *  24:Japanese Language & Culture
     *  41:Latin
     *  25:Latin: Literature
     *  26:Latin: Vergil
     *  27:Economics: Macroeconomics
     *  28:Economics: Microeconomics
     *  29:Music Theory
     *  30:Music Theory - Aural Subscore
     *  31:Music Theory - Nonaural Subscore
     *  42:Physics 1
     *  43:Physics 2
     *  32:Physics B
     *  33:Physics C - Electricity & Magnetism
     *  34:Physics C Mechanics
     *  35:Psychology
     *  44:Research
     *  45:Seminar
     *  36:Spanish Language
     *  37:Spanish Literature
     *  38:Statistics
     *  39:United States History
     *  40:World History
     *
     * aps.*.score integer e.g.""
     *
     *
     * == IB Subject Tests ==
     * This section is required by the time "4"(IB Subject Tests) is selected in 'tests_taken'.
     * ibs_number integer required This section is required by the time "4"(IB Subject Tests) is selected in 'tests_taken', min:0/max:10
     * The min length of 'ibs' is 0 and the max length is 10 if "4"(IB Subject Tests) is selected in 'tests_taken':
     *
     * ibs.*.taken_date date required e.g."11/27/2020"
     * ibs.*.subject string required
     * e.g.0:Afrikaans A
     *  294:Afrikaans A: Literature
     *  295:Akan A
     *  296:Akan A: Literature
     *
     * ibs.*.level string required 1:high level 0:standard level
     * ibs.*.score integer min:1/max:7
     *
     *
     * == TOEFL iBT ==
     * This section is required by the time if "5"(TOEFL iBT) is selected in 'tests_taken'.
     * toefls_number integer required This section is required by the time "5"(TOEFL iBT) is selected in 'tests_taken', min:0/max:10
     *
     * toefls_total_score integer required
     * toefls_total_score_date date required
     * toefls_highest_reading_score integer required min:0/max:30
     * toefls_reading_date date required
     * toefls_highest_speaking_score integer required min:0/max:30
     * toefls_speaking_date date required
     * toefls_highest_listening_score integer required min:0/max:30
     * toefls_listening_date date required
     * toefls_highest_writing_score integer required min:0/max:30
     * toefls_writing_date date required
     *
     *
     * == TOEFL Paper ==
     * This section is required by the time if "6"(TOEFL Paper) is selected in 'tests_taken'.
     * toefl_papers_number integer required This section is required by the time "6"(TOEFL Paper) is selected in 'tests_taken', min:0/max:5
     *
     * toefl_papers_total_score integer required
     * toefl_papers_total_score_date date required
     * toefl_papers_highest_reading_score integer required
     * toefl_papers_reading_date date required
     * toefl_papers_highest_listening_score integer required
     * toefl_papers_listening_date date required
     * toefl_papers_highest_writing_score integer required
     * toefl_papers_writing_date date required
     * toefl_papers_highest_twe_score integer required
     * toefl_papers_twe_date date required
     *
     *
     * == PTE Academic Tests ==
     * This section is required by the time if "8"(PTE Academic Tests) is selected in 'tests_taken'.
     * ptes_number integer required This section is required by the time "8"(PTE Academic Tests) is selected in 'tests_taken', min:0/max:5
     *
     * ptes_highest_reading_score integer required min:10/max:90
     * ptes_reading_date date required
     * ptes_highest_speaking_score integer required min:10/max:90
     * ptes_speaking_date date required
     * ptes_highest_listening_score integer required min:10/max:90
     * ptes_listening_date date required
     * ptes_highest_writing_score integer required min:10/max:90
     * ptes_writing_date date required
     * ptes_highest_oral_fluency_score integer required min:10/max:90
     * ptes_oral_fluency_date date required
     * ptes_highest_pronunciation_score integer required min:10/max:90
     * ptes_pronunciation_date date required
     * ptes_highest_spelling_score integer required min:10/max:90
     * ptes_spelling_date date required
     * ptes_highest_vocabulary_score integer required min:10/max:90
     * ptes_vocabulary_date date required
     * ptes_highest_discourse_score integer required min:10/max:90
     * ptes_discourse_date date required
     *
     *
     * == IELTS ==
     * This section is required by the time if "7"(IELTS) is selected in 'tests_taken'.
     * ielts_number integer required This section is required by the time "7"(IELTS) is selected in 'tests_taken', min:0/max:5
     *
     * ielts_overall_score integer required e.g.0, 0.5, 1, 1.5...9
     * ielts_overall_score_date date required
     * ielts_highest_reading_score integer required e.g.0, 0.5, 1, 1.5...9
     * ielts_reading_date date required
     * ielts_highest_speaking_score integer required e.g.0, 0.5, 1, 1.5...9
     * ielts_speaking_date date required
     * ielts_highest_listening_score integer required e.g.0, 0.5, 1, 1.5...9
     * ielts_listening_date date required
     * ielts_highest_writing_score integer required e.g.0, 0.5, 1, 1.5...9
     * ielts_writing_date date required
     *
     *
     * == Senior Secondary Leaving Examinations ==
     * This section is required by the time if 'gave_leaving_exams' is true.
     * leaving_exams_number integer required This section is required if 'gave_leaving_exams' is true, min:0/max:5
     * The min length of 'leaving_exams' is 0 and the max length is 5 if 'gave_leaving_exams' is true:
     *
     * leaving_exams.*.taken_date date required e.g."11/27/2020"
     * leaving_exams.*.examination_board integer required 21:Other
     * if "21"(Other) is selected in 'leaving_exams.*.examination_board':
     * leaving_exams.*.examination_board_descr string optional, but required if "21"(Other) is selected in 'leaving_exams.*.examination_board'
     *
     * leaving_exams.*.subject integer required
     * leaving_exams.*.score float required
     * leaving_exams.*.score_type integer required 0:Actual 1:Predicted
     *
     *
     * == Activities ==
     * wish_to_report_activities boolean required question-id-1788, e.g.0:yes 1:no
     * activity_1_type question-id-930
     * activity_2_type question-id-939
     * activity_3_type question-id-948
     * activity_4_type question-id-957
     * activity_5_type question-id-966
     * activity_6_type question-id-975
     * activity_7_type question-id-984
     * activity_8_type question-id-993
     * activity_9_type question-id-1002
     * activity_10_type question-id-1011
     * e.g.0:Academic
     *  1:Art
     *  2:Athletics: Club
     *  3:Athletics: JV/Varsity
     *  4:Career Oriented
     *  5:Community Service (Volunteer)
     *  6:Computer/Technology
     *  7:Cultural
     *  8:Dance 9:Debate/Speech
     *  10:Environmental
     *  11:Family Responsibilities
     *  12:Foreign Exchange
     *  13:Foreign Language
     *  28:Internship
     *  14:Journalism/Publication
     *  15:Junior R.O.T.C.
     *  16:LGBT
     *  17:Music: Instrumental
     *  18:Music: Vocal
     *  19:Religious
     *  27:Research
     *  26:Robotics
     *  20:School Spirit
     *  21:Science/Math
     *  29:Social Justice
     *  22:Student Govt./Politics
     *  23:Theater/Drama
     *  24:Work (Paid)
     *  25:Other Club/Activity
     *
     * if 'wish_to_report_activities' is true, the length of 'activities' is 10:
     * @bodyParam activities.*.type integer required the length of 'activities' is 10, e.g.0:Academic 1:Art 2:Athletics: Club 3:Athletics: JV/Varsity 4:Career Oriented 5:Community Service (Volunteer) 6:Computer/Technology 7:Cultural 8:Dance 9:Debate/Speech 10:Environmental 11:Family Responsibilities 12:Foreign Exchange 13:Foreign Language 28:Internship 14:Journalism/Publication 15:Junior R.O.T.C. 16:LGBT 17:Music: Instrumental 18:Music: Vocal 19:Religious 27:Research 26:Robotics 20:School Spirit 21:Science/Math 29:Social Justice 22:Student Govt./Politics 23:Theater/Drama 24:Work (Paid) 25:Other Club/Activity
     * @bodyParam activities.*.sport integer optional, but required if "2"(Athletics: Club) or "3"(Athletics: JV/Varsity) is set as 'activities.*.type'
     * @bodyParam activities.*.position_descr string required maxLength:50
     * @bodyParam activities.*.organization_name string maxLength:100
     * @bodyParam activities.*.descr string required maxLength:150
     * @bodyParam activities.*.grade_levels array required e.g.["0"(9), "1"(10), "2"(11), "3"(12), "4"(Post-graduate)]
     * @bodyParam activities.*.participation_time array required e.g.["0"(During school year), "1"(During school break), "2"(All year)]
     * @bodyParam activities.*.hours_spent_per_week integer required
     * @bodyParam activities.*.weeks_spent_per_yr integer required
     * @bodyParam activities.*.intend_to_participate_similar_in_college boolean required 0:yes,1:no
     *
     *
     * == Personal Essay ==
     * @bodyParam understand_to_submit_essay boolean required question-id-1828, 1:yes
     * @bodyParam essay_topic integer question-id-831,
     * e.g.""
     *  0:Some students have a background, identity, interest, or talent that is so meaningful they believe their application would be incomplete without it. If this sounds like you, then please share your story.
     *  1:The lessons we take from obstacles we encounter can be fundamental to later success. Recount a time when you faced a challenge, setback, or failure. How did it affect you, and what did you learn from the experience?
     *  2:Reflect on a time when you questioned or challenged a belief or idea. What prompted your thinking? What was the outcome?
     *  3:Describe a problem you've solved or a problem you'd like to solve. It can be an intellectual challenge, a research query, an ethical dilemma-anything that is of personal importance, no matter the scale. Explain its significance to you and what steps you took or could be taken to identify a solution.
     *  4:Discuss an accomplishment, event, or realization that sparked a period of personal growth and a new understanding of yourself or others.
     *  5:Describe a topic, idea, or concept you find so engaging that it makes you lose all track of time. Why does it captivate you? What or who do you turn to when you want to learn more?
     *  6:Share an essay on any topic of your choice. It can be one you've already written, one that responds to a different prompt, or one of your own design.
     * @bodyParam essay_content string question-id-832, minLength:250/max:650, e.g."<p>asdasdasd</p>
     *
     */
    public function document()
    {
        return "Doc";
    }
}
