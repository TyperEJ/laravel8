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
     * @bodyParam first_name string required
     * @bodyParam middle_name string optional
     * @bodyParam last_name string required
     * @bodyParam suffix integer optional 0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
     * @bodyParam preferred_name string optional
     * @bodyParam used_any_other_names boolean required 0:yes 1:no
     * @bodyParam sex boolean required 0:male 1:female
     * @bodyParam sex_descr string optional
     * @bodyParam birth_date date required e.g."07/17/2003"
     * @bodyParam address object required e.g.{"county":"Overton","countryCode":"0","countryValue":"United States of America","address1":"102 Www Ln","address2":"","address3":"","city":"Allons","stateValue":"TN","zip":"38541-6781","state":"52"}
     * @bodyParam used_mailing_address boolean required 0:no 1:yes
     * @bodyParam mailing_address object required e.g.{"county":"Overton","countryCode":"0","countryValue":"United States of America","address1":"102 Www Ln","address2":"","address3":"","city":"Allons","stateValue":"TN","zip":"38541-6781","state":"52"}
     * @bodyParam is_temporary_mailing_address boolean required 0:yes 1:no
     * @bodyParam temporary_mailing_address_from_date string required
     * @bodyParam temporary_mailing_address_to_date string required
     * @bodyParam preferred_phone boolean required 0:home 1:mobile
     * @bodyParam preferred_phone_number object required e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam alternate_phone boolean required 0:no 1:home 2:mobile
     * @bodyParam alternate_phone_number object required e.g.{"countryCode":"+886","phoneNumber":"970824452","extension":""}
     * @bodyParam birth_country string required
     * @bodyParam birth_city string required
     * @bodyParam lived_in_us_number integer required
     * @bodyParam lived_outside_us_number integer required
     * @bodyParam languages.*.language string required
     * @bodyParam languages.*.proficiency string required
     * @bodyParam citizenship_status string required
     * @bodyParam list_citizenship array required
     * @bodyParam parents_marital_status string required
     * @bodyParam whom_make_your_permanent_home string required
     * @bodyParam parents.*.type string required
     * @bodyParam parents.*.is_living boolean required
     * @bodyParam parents.*.deceased_date date required
     * @bodyParam parents.*.first_name string required
     * @bodyParam parents.*.middle_name string optional
     * @bodyParam parents.*.last_name string required
     * @bodyParam parents.*.address_is string required
     * @bodyParam parents.*.country string required
     * @bodyParam parents.*.state string required
     * @bodyParam parents.*.address_line_1 string required
     * @bodyParam parents.*.address_line_2 string optional
     * @bodyParam parents.*.zip string optional
     * @bodyParam parents.*.education_level string required
     * @bodyParam siblings.*.first_name string required
     * @bodyParam siblings.*.middle_name string optional
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
     * @bodyParam year_courses.*.level string optional
     * @bodyParam year_courses.*.schedule string required
     * @bodyParam honors.*.title string required
     * @bodyParam honors.*.level array optional
     * @bodyParam honors.*.level_recognition array optional
     * @bodyParam community_based_organizations.*.organization_name string required
     * @bodyParam community_based_organizations.*.mentor_prefix string optional
     * @bodyParam community_based_organizations.*.mentor_first_name string optional
     * @bodyParam community_based_organizations.*.mentor_last_name string optional
     * @bodyParam community_based_organizations.*.mentor_email string optional
     * @bodyParam community_based_organizations.*.mentor_phone string optional
     * @bodyParam career_interest string required
     * @bodyParam sats.*.taken_date date required
     * @bodyParam sats.*.subject string required
     * @bodyParam sats.*.score integer optional
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
     * @bodyParam aps.*.score integer optional
     * @bodyParam ibs.*.taken_date date required
     * @bodyParam ibs.*.subject string required
     * @bodyParam ibs.*.level string required 1:high level 0:standard level
     * @bodyParam ibs.*.score integer optional
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
