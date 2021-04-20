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
     * @bodyParam address.*.county string required question-id-182
     * @bodyParam address.*.country_code integer required 0:United States of America
     * @bodyParam address.*.country_value string required e.g."United States of America"
     * @bodyParam address.*.address_line_1 string required
     * @bodyParam address.*.address_line_2 string
     * @bodyParam address.*.address_line_3 string
     * @bodyParam address.*.city string required e.g."Overton"
     * @bodyParam address.*.state integer required 52:TN
     * @bodyParam address.*.state_value string required e.g."TN"
     * @bodyParam address.*.zip string required e.g."38541-6781"
     *
     * @bodyParam used_mailing_address boolean required question-id-183, e.g.0:no 1:yes
     * if 'used_mailing_address' is true:
     * mailing_address e.g.{"county":"Belknap","countryCode":"0","countryValue":"United States of America","address1":"2 Test St","address2":"","address3":"","city":"Belmont","stateValue":"NH","zip":"03220-4052","state":"38"}
     * @bodyParam mailing_address.*.county string required question-id-186, if 'used_mailing_address' is true
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
     * @bodyParam preferred_phone boolean required question-id-188, 0:home 1:mobile
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
     * @bodyParam is_hispanic_or_latino boolean required question-id-200, 0:yes 1:no
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
     * @bodyParam birth_state integer required question-id-220, e.g.3:Alabama
     * @bodyParam lived_in_us_yr integer required  question-id-221
     * @bodyParam lived_outside_us_yr integer required question-id-222
     *
     *
     * == Language ==
     * languages_length integer required question-id-223, min:1 max:5
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
     * @bodyParam parents_marital_status string required
     * @bodyParam whom_make_your_permanent_home string required
     * @bodyParam parents.*.type string required
     * @bodyParam parents.*.is_living boolean required
     * @bodyParam parents.*.deceased_date date required
     * @bodyParam parents.*.first_name string required
     * @bodyParam parents.*.middle_name string
     * @bodyParam parents.*.last_name string required
     * @bodyParam parents.*.address_is string required
     * @bodyParam parents.*.country string required
     * @bodyParam parents.*.state string required
     * @bodyParam parents.*.address_line_1 string required
     * @bodyParam parents.*.address_line_2 string
     * @bodyParam parents.*.zip string
     * @bodyParam parents.*.education_level string required
     * @bodyParam siblings.*.first_name string required
     * @bodyParam siblings.*.middle_name string
     * @bodyParam siblings.*.last_name string required
     * @bodyParam siblings.*.education_level string required
     * @bodyParam high_school_name string required
     * @bodyParam is_boarding_high_school boolean required
     * @bodyParam is_graduate_from_school boolean required
     * @bodyParam high_school_name_date_started date required
     * @bodyParam high_school_name_date_ended date required
     * @bodyParam graduate_status.*.status string required
     * @bodyParam graduate_status.*.reason string required
     * @bodyParam other_high_schools.*.name string required
     * @bodyParam other_high_schools.*.date_started date required
     * @bodyParam other_high_schools.*.date_ended date required
     * @bodyParam why_leave_other_high_school string required
     * @bodyParam colleges.*.name string required
     * @bodyParam colleges.*.date_started date required
     * @bodyParam colleges.*.date_ended date required
     * @bodyParam graduating_class_size string required
     * @bodyParam class_rank integer required 1:weighted 2:unweighted
     * @bodyParam year_courses_scheduling_system string required
     * @bodyParam year_courses.*.title string required
     * @bodyParam year_courses.*.level string
     * @bodyParam year_courses.*.schedule string required
     * @bodyParam honors.*.title string required
     * @bodyParam honors.*.level array
     * @bodyParam honors.*.level_recognition array
     * @bodyParam community_based_organizations.*.organization_name string required
     * @bodyParam community_based_organizations.*.mentor_prefix string
     * @bodyParam community_based_organizations.*.mentor_first_name string
     * @bodyParam community_based_organizations.*.mentor_last_name string
     * @bodyParam community_based_organizations.*.mentor_email string
     * @bodyParam community_based_organizations.*.mentor_phone string
     * @bodyParam career_interest string required
     * @bodyParam sats.*.taken_date date required
     * @bodyParam sats.*.subject string required
     * @bodyParam sats.*.score integer
     * @bodyParam acts.*.taken_date date required
     * @bodyParam acts.*.highest_composite_score integer required
     * @bodyParam acts.*.composite_date date required
     * @bodyParam acts.*.highest_english_score integer required
     * @bodyParam acts.*.english_date date required
     * @bodyParam acts.*.highest_math_score integer required
     * @bodyParam acts.*.math_date date required
     * @bodyParam acts.*.highest_reading_score integer required
     * @bodyParam acts.*.reading_date date required
     * @bodyParam acts.*.highest_science_score integer required
     * @bodyParam acts.*.science_date date required
     * @bodyParam aps.*.taken_date date required
     * @bodyParam aps.*.subject string required
     * @bodyParam aps.*.score integer
     * @bodyParam ibs.*.taken_date date required
     * @bodyParam ibs.*.subject string required
     * @bodyParam ibs.*.level string required 1:high level 0:standard level
     * @bodyParam ibs.*.score integer
     * @bodyParam toefls.*.total_score integer required
     * @bodyParam toefls.*.total_score_date date required
     * @bodyParam toefls.*.highest_reading_score integer required
     * @bodyParam toefls.*.reading_date date required
     * @bodyParam toefls.*.highest_speaking_score integer required
     * @bodyParam toefls.*.speaking_date date required
     * @bodyParam toefls.*.highest_listening_score integer required
     * @bodyParam toefls.*.listening_date date required
     * @bodyParam toefls.*.highest_writing_score integer required
     * @bodyParam toefls.*.writing_date date required
     * @bodyParam ielts.*.total_score integer required
     * @bodyParam ielts.*.total_score_date date required
     * @bodyParam ielts.*.highest_reading_score integer required
     * @bodyParam ielts.*.reading_date date required
     * @bodyParam ielts.*.highest_speaking_score integer required
     * @bodyParam ielts.*.speaking_date date required
     * @bodyParam ielts.*.highest_listening_score integer required
     * @bodyParam ielts.*.listening_date date required
     * @bodyParam ielts.*.highest_writing_score integer required
     * @bodyParam ielts.*.writing_date date required
     * @bodyParam activities.*.type string required
     * @bodyParam activities.*.position_des string required
     * @bodyParam activities.*.activity_des string required
     * @bodyParam activities.*.grade_levels string required
     * @bodyParam activities.*.participation_time array required
     * @bodyParam activities.*.hours_spent_per_week integer required
     * @bodyParam activities.*.hours_spent_per_year integer required
     * @bodyParam activities.*.intend_to_participate boolean required
     *
     */
    public function document()
    {
        return "Doc";
    }
}
