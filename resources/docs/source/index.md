---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Counseling Profile


<!-- START_ac4cee75b9957dd48cbd8b931f50462b -->
## Store counseling profile

== Personal Information ==

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api-doc/example" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"sequi","middle_name":"sit","last_name":"placeat","suffix":7,"preferred_name":"maiores","used_any_other_names":false,"former_first_name":"minima","former_middle_name":"sit","former_last_name":"quibusdam","sex":true,"sex_descr":"qui","birth_date":"officia","address":[{"county":"sit","country_code":9,"country_value":"neque","address_line_1":"occaecati","address_line_2":"libero","address_line_3":"pariatur","city":"sint","state":9,"state_value":"rerum","zip":"necessitatibus"}],"used_mailing_address":false,"mailing_address":[{"county":"maiores","country_code":16,"country_value":"ratione","address_line_1":"et","address_line_2":"sint","address_line_3":"nisi","city":"ullam","state":14,"state_value":"voluptas","zip":"vel"}],"is_temporary_mailing_address":false,"temporary_mailing_address_from_date":"dolores","temporary_mailing_address_to_date":"perferendis","preferred_phone":true,"preferred_phone_number":[{"country_code":"sed","phone_number":"et","extension":"dolore"}],"used_alternate_phone":true,"alternate_phone_number":[{"country_code":"quo","phone_number":"praesentium","extension":"molestiae"}],"religion":12,"religion_descr":"voluptates","us_armed_forces_status":18,"us_military_anticipated_status":17,"us_military_experiences":[{"branch":11,"from_month":"culpa","to_month":"ipsa"}],"ever_received_discharge":false,"discharge_descr":"quae","is_hispanic_or_latino":false,"hispanic_or_latino_identities":[],"hispanic_or_latino_descr":"voluptatem","other_identities":[],"tribal_identity":"ut","is_federally_recognized_tribe":true,"tribe":15,"tribal_enrollment_number":"est","asian_backgrounds":[],"east_asian_descr":"voluptatem","south_asian_descr":"veniam","southeast_asian_descr":"labore","african_american_backgrounds":[],"african_american_descr":"ut","native_hawaiian_or_other_pacific_islander_backgrounds":[],"native_hawaiian_or_other_pacific_islander_descr":"quis","white_backgrounds":[],"white_descr":[],"agreed_terms_demographics":false,"birth_country":20,"birth_city":"velit","birth_state":20,"lived_in_us_yr":2,"lived_outside_us_yr":3,"languages":[{"lang":6,"proficiency":[]}],"citizenship_status":14,"ssn_number":"ducimus","list_citizenship":[],"green_card_file":"est","arn_number":"voluptas","arn_expiration_date":"libero","hold_us_visa":true,"held_visa":12,"visa_number":"sed","visa_date_issued":"corporis","other_visa_type_descr":"nihil","want_to_apply_us_visa":6,"want_to_apply_other_visa_descr":"eligendi","apply_fee_waiver":false,"fee_waiver_indicators":[],"fee_waiver_signature":"et","want_info_from_strive_for_college":false,"parents_marital_status":2,"divorced_yr":"unde","want_to_list_step_parents":true,"step_parents_number":5,"whom_make_your_permanent_home":19,"living_situation_descr":"vel","has_children":false,"children_number":13,"parents":[{"type":"libero","is_living":false,"deceased_date":"amet","first_name":"praesentium","middle_name":"libero","last_name":"occaecati","address_is":"id","country":"nihil","state":"ut","address_line_1":"iure","address_line_2":"dolores","zip":"eius","education_level":"eum"}],"siblings":[{"first_name":"qui","middle_name":"voluptas","last_name":"laudantium","education_level":"molestiae"}],"high_school_name":"sed","is_boarding_high_school":false,"is_graduate_from_school":false,"high_school_name_date_started":"debitis","high_school_name_date_ended":"et","graduate_status":[{"status":"at","reason":"omnis"}],"other_high_schools":[{"name":"voluptates","date_started":"ad","date_ended":"est"}],"why_leave_other_high_school":"voluptas","colleges":[{"name":"suscipit","date_started":"sint","date_ended":"dolorum"}],"graduating_class_size":"culpa","class_rank":5,"year_courses_scheduling_system":"rerum","year_courses":[{"title":"qui","level":"dolorem","schedule":"ut"}],"honors":[{"title":"non","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":"aut","mentor_prefix":"ut","mentor_first_name":"facilis","mentor_last_name":"qui","mentor_email":"quae","mentor_phone":"qui"}],"career_interest":"reprehenderit","sats":[{"taken_date":"non","subject":"et","score":8}],"acts":[{"taken_date":"et","highest_composite_score":15,"composite_date":"ducimus","highest_english_score":6,"english_date":"magni","highest_math_score":2,"math_date":"repellendus","highest_reading_score":6,"reading_date":"nam","highest_science_score":18,"science_date":"sed"}],"aps":[{"taken_date":"eum","subject":"rerum","score":3}],"ibs":[{"taken_date":"modi","subject":"maxime","level":"mollitia","score":5}],"toefls":[{"total_score":14,"total_score_date":"qui","highest_reading_score":5,"reading_date":"qui","highest_speaking_score":3,"speaking_date":"deleniti","highest_listening_score":15,"listening_date":"adipisci","highest_writing_score":13,"writing_date":"incidunt"}],"ielts":[{"total_score":3,"total_score_date":"et","highest_reading_score":5,"reading_date":"nulla","highest_speaking_score":17,"speaking_date":"aut","highest_listening_score":18,"listening_date":"vel","highest_writing_score":20,"writing_date":"eveniet"}],"activities":[{"type":"at","position_des":"at","activity_des":"temporibus","grade_levels":"est","participation_time":[],"hours_spent_per_week":11,"hours_spent_per_year":16,"intend_to_participate":false}]}'

```

```javascript
const url = new URL(
    "http://localhost/api-doc/example"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "sequi",
    "middle_name": "sit",
    "last_name": "placeat",
    "suffix": 7,
    "preferred_name": "maiores",
    "used_any_other_names": false,
    "former_first_name": "minima",
    "former_middle_name": "sit",
    "former_last_name": "quibusdam",
    "sex": true,
    "sex_descr": "qui",
    "birth_date": "officia",
    "address": [
        {
            "county": "sit",
            "country_code": 9,
            "country_value": "neque",
            "address_line_1": "occaecati",
            "address_line_2": "libero",
            "address_line_3": "pariatur",
            "city": "sint",
            "state": 9,
            "state_value": "rerum",
            "zip": "necessitatibus"
        }
    ],
    "used_mailing_address": false,
    "mailing_address": [
        {
            "county": "maiores",
            "country_code": 16,
            "country_value": "ratione",
            "address_line_1": "et",
            "address_line_2": "sint",
            "address_line_3": "nisi",
            "city": "ullam",
            "state": 14,
            "state_value": "voluptas",
            "zip": "vel"
        }
    ],
    "is_temporary_mailing_address": false,
    "temporary_mailing_address_from_date": "dolores",
    "temporary_mailing_address_to_date": "perferendis",
    "preferred_phone": true,
    "preferred_phone_number": [
        {
            "country_code": "sed",
            "phone_number": "et",
            "extension": "dolore"
        }
    ],
    "used_alternate_phone": true,
    "alternate_phone_number": [
        {
            "country_code": "quo",
            "phone_number": "praesentium",
            "extension": "molestiae"
        }
    ],
    "religion": 12,
    "religion_descr": "voluptates",
    "us_armed_forces_status": 18,
    "us_military_anticipated_status": 17,
    "us_military_experiences": [
        {
            "branch": 11,
            "from_month": "culpa",
            "to_month": "ipsa"
        }
    ],
    "ever_received_discharge": false,
    "discharge_descr": "quae",
    "is_hispanic_or_latino": false,
    "hispanic_or_latino_identities": [],
    "hispanic_or_latino_descr": "voluptatem",
    "other_identities": [],
    "tribal_identity": "ut",
    "is_federally_recognized_tribe": true,
    "tribe": 15,
    "tribal_enrollment_number": "est",
    "asian_backgrounds": [],
    "east_asian_descr": "voluptatem",
    "south_asian_descr": "veniam",
    "southeast_asian_descr": "labore",
    "african_american_backgrounds": [],
    "african_american_descr": "ut",
    "native_hawaiian_or_other_pacific_islander_backgrounds": [],
    "native_hawaiian_or_other_pacific_islander_descr": "quis",
    "white_backgrounds": [],
    "white_descr": [],
    "agreed_terms_demographics": false,
    "birth_country": 20,
    "birth_city": "velit",
    "birth_state": 20,
    "lived_in_us_yr": 2,
    "lived_outside_us_yr": 3,
    "languages": [
        {
            "lang": 6,
            "proficiency": []
        }
    ],
    "citizenship_status": 14,
    "ssn_number": "ducimus",
    "list_citizenship": [],
    "green_card_file": "est",
    "arn_number": "voluptas",
    "arn_expiration_date": "libero",
    "hold_us_visa": true,
    "held_visa": 12,
    "visa_number": "sed",
    "visa_date_issued": "corporis",
    "other_visa_type_descr": "nihil",
    "want_to_apply_us_visa": 6,
    "want_to_apply_other_visa_descr": "eligendi",
    "apply_fee_waiver": false,
    "fee_waiver_indicators": [],
    "fee_waiver_signature": "et",
    "want_info_from_strive_for_college": false,
    "parents_marital_status": 2,
    "divorced_yr": "unde",
    "want_to_list_step_parents": true,
    "step_parents_number": 5,
    "whom_make_your_permanent_home": 19,
    "living_situation_descr": "vel",
    "has_children": false,
    "children_number": 13,
    "parents": [
        {
            "type": "libero",
            "is_living": false,
            "deceased_date": "amet",
            "first_name": "praesentium",
            "middle_name": "libero",
            "last_name": "occaecati",
            "address_is": "id",
            "country": "nihil",
            "state": "ut",
            "address_line_1": "iure",
            "address_line_2": "dolores",
            "zip": "eius",
            "education_level": "eum"
        }
    ],
    "siblings": [
        {
            "first_name": "qui",
            "middle_name": "voluptas",
            "last_name": "laudantium",
            "education_level": "molestiae"
        }
    ],
    "high_school_name": "sed",
    "is_boarding_high_school": false,
    "is_graduate_from_school": false,
    "high_school_name_date_started": "debitis",
    "high_school_name_date_ended": "et",
    "graduate_status": [
        {
            "status": "at",
            "reason": "omnis"
        }
    ],
    "other_high_schools": [
        {
            "name": "voluptates",
            "date_started": "ad",
            "date_ended": "est"
        }
    ],
    "why_leave_other_high_school": "voluptas",
    "colleges": [
        {
            "name": "suscipit",
            "date_started": "sint",
            "date_ended": "dolorum"
        }
    ],
    "graduating_class_size": "culpa",
    "class_rank": 5,
    "year_courses_scheduling_system": "rerum",
    "year_courses": [
        {
            "title": "qui",
            "level": "dolorem",
            "schedule": "ut"
        }
    ],
    "honors": [
        {
            "title": "non",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": "aut",
            "mentor_prefix": "ut",
            "mentor_first_name": "facilis",
            "mentor_last_name": "qui",
            "mentor_email": "quae",
            "mentor_phone": "qui"
        }
    ],
    "career_interest": "reprehenderit",
    "sats": [
        {
            "taken_date": "non",
            "subject": "et",
            "score": 8
        }
    ],
    "acts": [
        {
            "taken_date": "et",
            "highest_composite_score": 15,
            "composite_date": "ducimus",
            "highest_english_score": 6,
            "english_date": "magni",
            "highest_math_score": 2,
            "math_date": "repellendus",
            "highest_reading_score": 6,
            "reading_date": "nam",
            "highest_science_score": 18,
            "science_date": "sed"
        }
    ],
    "aps": [
        {
            "taken_date": "eum",
            "subject": "rerum",
            "score": 3
        }
    ],
    "ibs": [
        {
            "taken_date": "modi",
            "subject": "maxime",
            "level": "mollitia",
            "score": 5
        }
    ],
    "toefls": [
        {
            "total_score": 14,
            "total_score_date": "qui",
            "highest_reading_score": 5,
            "reading_date": "qui",
            "highest_speaking_score": 3,
            "speaking_date": "deleniti",
            "highest_listening_score": 15,
            "listening_date": "adipisci",
            "highest_writing_score": 13,
            "writing_date": "incidunt"
        }
    ],
    "ielts": [
        {
            "total_score": 3,
            "total_score_date": "et",
            "highest_reading_score": 5,
            "reading_date": "nulla",
            "highest_speaking_score": 17,
            "speaking_date": "aut",
            "highest_listening_score": 18,
            "listening_date": "vel",
            "highest_writing_score": 20,
            "writing_date": "eveniet"
        }
    ],
    "activities": [
        {
            "type": "at",
            "position_des": "at",
            "activity_des": "temporibus",
            "grade_levels": "est",
            "participation_time": [],
            "hours_spent_per_week": 11,
            "hours_spent_per_year": 16,
            "intend_to_participate": false
        }
    ]
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api-doc/example`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `first_name` | string |  required  | question-id-173
        `middle_name` | string |  optional  | question-id-174
        `last_name` | string |  required  | question-id-175
        `suffix` | integer |  optional  | question-id-176, e.g.0:Jr. 9:Sr. 1:II 2:III 3:IV 4:V
        `preferred_name` | string |  optional  | question-id-179
        `used_any_other_names` | boolean |  required  | question-id-177, e.g.0:yes 1:no
        `former_first_name` | string |  optional  | question-id-1950, if 'used_any_other_names' is true
        `former_middle_name` | string |  optional  | question-id-1951, if 'used_any_other_names' is true
        `former_last_name` | string |  optional  | question-id-178, if 'used_any_other_names' is true
        `sex` | boolean |  required  | question-id-180, e.g.0:male 1:female
        `sex_descr` | string |  optional  | question-id-1901
        `birth_date` | date |  required  | question-id-181, e.g."07/17/2003"
        `address.*.county` | string |  required  | question-id-182
        `address.*.country_code` | integer |  required  | 0:United States of America
        `address.*.country_value` | string |  required  | e.g."United States of America"
        `address.*.address_line_1` | string |  required  | 
        `address.*.address_line_2` | string |  optional  | 
        `address.*.address_line_3` | string |  optional  | 
        `address.*.city` | string |  required  | e.g."Overton"
        `address.*.state` | integer |  required  | 52:TN
        `address.*.state_value` | string |  required  | e.g."TN"
        `address.*.zip` | string |  required  | e.g."38541-6781"
        `used_mailing_address` | boolean |  required  | question-id-183, e.g.0:no 1:yes
        `mailing_address.*.county` | string |  required  | question-id-186, if 'used_mailing_address' is true
        `mailing_address.*.country_code` | integer |  required  | if 'used_mailing_address' is true, e.g.0:United States of America
        `mailing_address.*.country_value` | string |  required  | if 'used_mailing_address' is true, e.g."United States of America"
        `mailing_address.*.address_line_1` | string |  required  | if 'used_mailing_address' is true
        `mailing_address.*.address_line_2` | string |  optional  | if 'used_mailing_address' is true
        `mailing_address.*.address_line_3` | string |  optional  | if 'used_mailing_address' is true
        `mailing_address.*.city` | string |  required  | if 'used_mailing_address' is true, e.g."Overton"
        `mailing_address.*.state` | integer |  required  | if 'used_mailing_address' is true, e.g.52:TN
        `mailing_address.*.state_value` | string |  required  | if 'used_mailing_address' is true, e.g."TN"
        `mailing_address.*.zip` | string |  required  | if 'used_mailing_address' is true, e.g."38541-6781"
        `is_temporary_mailing_address` | boolean |  required  | question-id-1042, if 'used_mailing_address' is true, e.g.0:yes 1:no
        `temporary_mailing_address_from_date` | date |  required  | question-id-184, if 'is_temporary_mailing_address' is true
        `temporary_mailing_address_to_date` | date |  required  | question-id-185, if 'is_temporary_mailing_address' is true
        `preferred_phone` | boolean |  required  | question-id-188, 0:home 1:mobile
        `preferred_phone_number.*.country_code` | string |  required  | question-id-189, e.g."+886"
        `preferred_phone_number.*.phone_number` | string |  required  | e.g."970824452"
        `preferred_phone_number.*.extension` | string |  optional  | 
        `used_alternate_phone` | boolean |  required  | question-id-190, e.g.0:no 1:home 2:mobile
        `alternate_phone_number.*.country_code` | string |  required  | question-id-191, if 'used_alternate_phone' is true, e.g."+886"
        `alternate_phone_number.*.phone_number` | string |  required  | if 'used_alternate_phone' is true, e.g."970824452"
        `alternate_phone_number.*.extension` | string |  optional  | if 'used_alternate_phone' is true
        `religion` | integer |  optional  | question-id-192, e.g.40:Agnostic 0:Anglican (Episcopal) 48:Assemblies of God 41:Atheist 3:Buddhist
        `religion_descr` | string |  optional  | question-id-193
        `us_armed_forces_status` | integer |  required  | question-id-194, e.g.0:none 1:currently serving 2:previously served 3:current dependent
        `us_military_anticipated_status` | integer |  required  | question-id-195, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:On active duty U.S. military 1:Veteran of U.S. Armed Forces 2:U.S. Reserves or National Guard
        `us_military_experiences.*.branch` | integer |  required  | The min length of 'us_military_experiences' is 1 and the max length is 3 if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experiences.*.from_month` | string |  required  | if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experiences.*.to_month` | string |  optional  | if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `ever_received_discharge` | boolean |  optional  | question-id-199, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:yes 1:no
        `discharge_descr` | string |  optional  | question-id-1044, if 'ever_receive_discharge' is true, e.g."<p\>test<i\>xxxxx<u\>oooo</u\></i\></p\>"
        `is_hispanic_or_latino` | boolean |  required  | question-id-200, e.g.0:yes 1:no
        `hispanic_or_latino_identities` | array |  optional  | question-id-201, if 'is_hispanic_or_latino' is true, e.g.["0"(Central America), "1"(Cuba), "2"(Mexico), "3"(Puerto Rico), "4"(South America), "5"(Spain), "6"(Other)]
        `hispanic_or_latino_descr` | string |  optional  | question-id-202
        `other_identities` | array |  optional  | question-id-203, e.g.["0"(American Indian or Alaska Native), "1"(Asian), "2"(Black or African American), "3"(Native Hawaiian or Other Pacific Islander), "4"(White)]
        `tribal_identity` | string |  optional  | question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities'
        `is_federally_recognized_tribe` | boolean |  required  | question-id-205, if "0"(American Indian or Alaska Native) is selected in 'other_identities', e.g.0:yes 1:no
        `tribe` | integer |  optional  | question-id-1069, if 'is_federally_recognized_tribe' is true, e.g.null, 0:AK-Agdaagux
        `tribal_enrollment_number` | string |  optional  | question-id-207, if 'is_federally_recognized_tribe' is true
        `asian_backgrounds` | array |  optional  | question-id-208, if "1"(Asian) is selected in 'other_identities', e.g.["7"(Other East Asia), "8"(Other South Asia), "9"(Other Southeast Asia)]
        `east_asian_descr` | string |  optional  | question-id-209, if "7"(Other East Asia) is selected in 'asian_backgrounds'
        `south_asian_descr` | string |  optional  | question-id-210, if "8"(Other South Asia) is selected in 'asian_backgrounds'
        `southeast_asian_descr` | string |  optional  | question-id-211, if "9"(Other Southeast Asia) is selected in 'asian_backgrounds'
        `african_american_backgrounds` | array |  optional  | question-id-212, if "2"(Black or African American) is selected in 'other_identities', e.g.["0"(U.S.)]
        `african_american_descr` | string |  optional  | question-id-213, if "2"(Black or African American) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_backgrounds` | array |  optional  | question-id-214, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `native_hawaiian_or_other_pacific_islander_descr` | string |  optional  | question-id-215, if "3"(Native Hawaiian or Other Pacific Islander) is selected in 'other_identities'
        `white_backgrounds` | array |  optional  | question-id-216, if "4"(White) is selected in 'other_identities'
        `white_descr` | array |  optional  | question-id-217, if "4"(White) is selected in 'other_identities'
        `agreed_terms_demographics` | boolean |  required  | question-id-1782, 1:yes
        `birth_country` | integer |  required  | question-id-218, e.g.0:United States of America
        `birth_city` | string |  required  | question-id-219
        `birth_state` | integer |  required  | question-id-220, e.g.3:Alabama
        `lived_in_us_yr` | integer |  required  | question-id-221
        `lived_outside_us_yr` | integer |  required  | question-id-222
        `languages.*.lang` | integer |  required  | The min length of 'languages' is 1, while the max length is 5 with at least 1 language as first language required, e.g.0:English 1:Spanish 2:Aceh
        `languages.*.proficiency` | array |  required  | 3:First Language 0:Speak 1:Read 2:Write 4:Spoken at Home
        `citizenship_status` | integer |  required  | question-id-234, e.g.0:U.S. Citizen or U.S. National 1:U.S. Dual Citizen 5:U.S. Permanent Resident 4:U.S. Refugee or Asylee 3:Other (Non-US)
        `ssn_number` | string |  optional  | question-id-235, e.g."222-11-1111"
        `list_citizenship` | array |  required  | question-id-236, if "1", "5", "4" or "3" is selected in 'citizenship_status', e.g.["0"(Canada), "241"(Taiwan)]
        `green_card_file` | file |  optional  | question-id-237, if "5" is selected in 'citizenship_status',
        `arn_number` | string |  optional  | question-id-238, if "5" is selected in 'citizenship_status',
        `arn_expiration_date` | date |  optional  | question-id-239, if "5" is selected in 'citizenship_status', e.g."11/27/2025"
        `hold_us_visa` | boolean |  required  | question-id-1836, e.g.0:yes 1:no
        `held_visa` | integer |  required  | question-id-240, if 'hold_us_visa' is true, e.g.1:A-1 2:A-2 3:A-3 4:B-2 5:E-2 6:F-1 7:F-2 8:G-1 9:G-2 10:G-3 11:G-4 12:H-4 13:J-1 14:J-2 15:L-2 16:other 17:R-2
        `visa_number` | string |  required  | question-id-242, if 'hold_us_visa' is true
        `visa_date_issued` | date |  required  | question-id-243, if 'hold_us_visa' is true, e.g."11/27/2025"
        `other_visa_type_descr` | string |  required  | question-id-241, if "16' is selected in 'held_visa'
        `want_to_apply_us_visa` | integer |  optional  | question-id-1837, noticed that "4" is skipped in the options, e.g.null, 21:I do not intend to apply for a U.S. visa 20:I do not know which visa I will hold 1:A-1 2:A-2 3:A-3 5:B-2 6:E-2 7:F-1 8:F-2 9:G-1 10:G-2 11:G-3 12:G-4 13:H-4 14:J-1 15:J-2 16:L-2 17:other 18:R-2
        `want_to_apply_other_visa_descr` | string |  optional  | question-id-1838, if "17" is selected in 'want_to_apply_us_visa'
        `apply_fee_waiver` | boolean |  required  | question-id-1021, e.g.0:yes 1:no
        `fee_waiver_indicators` | array |  required  | question-id-1805, if 'apply_fee_waiver' is true, e.g.["0"(I have received or am eligible to receive an ACT or SAT testing fee waiver), "1"(I am enrolled in or am eligible to participate in the Federal Free or Reduced Price Lunch program (FRPL))]
        `fee_waiver_signature` | string |  required  | question-id-1022, if 'apply_fee_waiver' is true, e.g."name"
        `want_info_from_strive_for_college` | boolean |  optional  | question-id-1911, if 'apply_fee_waiver' is true, e.g."", 0:yes 1:no
        `parents_marital_status` | integer |  required  | question-id-364, e.g.0:Married 1:Separated 2:Divorced 3:Never Married 4:Widowed 5:Civil Union/Domestic Partners
        `divorced_yr` | string |  required  | question-id-365, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g."2021"
        `want_to_list_step_parents` | boolean |  required  | question-id-367, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.0:yes 1:no
        `step_parents_number` | integer |  required  | question-id-368, if "2"(Divorced), "3"(Never Married) or "4"(Widowed) is selected in 'parents_marital_status', e.g.1 or 2
        `whom_make_your_permanent_home` | integer |  required  | question-id-366, e.g.0:Parent-1 1:Parent-2 2:Both 3:Legal Guardian 4:Other 5:Ward of the Court/State
        `living_situation_descr` | string |  optional  | question-id-1921, if "4"(Other) is selected in 'whom_make_your_permanent_home', maxlength:100
        `has_children` | boolean |  optional  | question-id-369, e.g."", 0:yes 1:no
        `children_number` | integer |  required  | question-id-370, if 'has_children' is true, min:0 max:99
        `parents.*.type` | string |  required  | 
        `parents.*.is_living` | boolean |  required  | 
        `parents.*.deceased_date` | date |  required  | 
        `parents.*.first_name` | string |  required  | 
        `parents.*.middle_name` | string |  optional  | 
        `parents.*.last_name` | string |  required  | 
        `parents.*.address_is` | string |  required  | 
        `parents.*.country` | string |  required  | 
        `parents.*.state` | string |  required  | 
        `parents.*.address_line_1` | string |  required  | 
        `parents.*.address_line_2` | string |  optional  | 
        `parents.*.zip` | string |  optional  | 
        `parents.*.education_level` | string |  required  | 
        `siblings.*.first_name` | string |  required  | 
        `siblings.*.middle_name` | string |  optional  | 
        `siblings.*.last_name` | string |  required  | 
        `siblings.*.education_level` | string |  required  | 
        `high_school_name` | string |  required  | 
        `is_boarding_high_school` | boolean |  required  | 
        `is_graduate_from_school` | boolean |  required  | 
        `high_school_name_date_started` | date |  required  | 
        `high_school_name_date_ended` | date |  required  | 
        `graduate_status.*.status` | string |  required  | 
        `graduate_status.*.reason` | string |  required  | 
        `other_high_schools.*.name` | string |  required  | 
        `other_high_schools.*.date_started` | date |  required  | 
        `other_high_schools.*.date_ended` | date |  required  | 
        `why_leave_other_high_school` | string |  required  | 
        `colleges.*.name` | string |  required  | 
        `colleges.*.date_started` | date |  required  | 
        `colleges.*.date_ended` | date |  required  | 
        `graduating_class_size` | string |  required  | 
        `class_rank` | integer |  required  | 1:weighted 2:unweighted
        `year_courses_scheduling_system` | string |  required  | 
        `year_courses.*.title` | string |  required  | 
        `year_courses.*.level` | string |  optional  | 
        `year_courses.*.schedule` | string |  required  | 
        `honors.*.title` | string |  required  | 
        `honors.*.level` | array |  optional  | 
        `honors.*.level_recognition` | array |  optional  | 
        `community_based_organizations.*.organization_name` | string |  required  | 
        `community_based_organizations.*.mentor_prefix` | string |  optional  | 
        `community_based_organizations.*.mentor_first_name` | string |  optional  | 
        `community_based_organizations.*.mentor_last_name` | string |  optional  | 
        `community_based_organizations.*.mentor_email` | string |  optional  | 
        `community_based_organizations.*.mentor_phone` | string |  optional  | 
        `career_interest` | string |  required  | 
        `sats.*.taken_date` | date |  required  | 
        `sats.*.subject` | string |  required  | 
        `sats.*.score` | integer |  optional  | 
        `acts.*.taken_date` | date |  required  | 
        `acts.*.highest_composite_score` | integer |  required  | 
        `acts.*.composite_date` | date |  required  | 
        `acts.*.highest_english_score` | integer |  required  | 
        `acts.*.english_date` | date |  required  | 
        `acts.*.highest_math_score` | integer |  required  | 
        `acts.*.math_date` | date |  required  | 
        `acts.*.highest_reading_score` | integer |  required  | 
        `acts.*.reading_date` | date |  required  | 
        `acts.*.highest_science_score` | integer |  required  | 
        `acts.*.science_date` | date |  required  | 
        `aps.*.taken_date` | date |  required  | 
        `aps.*.subject` | string |  required  | 
        `aps.*.score` | integer |  optional  | 
        `ibs.*.taken_date` | date |  required  | 
        `ibs.*.subject` | string |  required  | 
        `ibs.*.level` | string |  required  | 1:high level 0:standard level
        `ibs.*.score` | integer |  optional  | 
        `toefls.*.total_score` | integer |  required  | 
        `toefls.*.total_score_date` | date |  required  | 
        `toefls.*.highest_reading_score` | integer |  required  | 
        `toefls.*.reading_date` | date |  required  | 
        `toefls.*.highest_speaking_score` | integer |  required  | 
        `toefls.*.speaking_date` | date |  required  | 
        `toefls.*.highest_listening_score` | integer |  required  | 
        `toefls.*.listening_date` | date |  required  | 
        `toefls.*.highest_writing_score` | integer |  required  | 
        `toefls.*.writing_date` | date |  required  | 
        `ielts.*.total_score` | integer |  required  | 
        `ielts.*.total_score_date` | date |  required  | 
        `ielts.*.highest_reading_score` | integer |  required  | 
        `ielts.*.reading_date` | date |  required  | 
        `ielts.*.highest_speaking_score` | integer |  required  | 
        `ielts.*.speaking_date` | date |  required  | 
        `ielts.*.highest_listening_score` | integer |  required  | 
        `ielts.*.listening_date` | date |  required  | 
        `ielts.*.highest_writing_score` | integer |  required  | 
        `ielts.*.writing_date` | date |  required  | 
        `activities.*.type` | string |  required  | 
        `activities.*.position_des` | string |  required  | 
        `activities.*.activity_des` | string |  required  | 
        `activities.*.grade_levels` | string |  required  | 
        `activities.*.participation_time` | array |  required  | 
        `activities.*.hours_spent_per_week` | integer |  required  | 
        `activities.*.hours_spent_per_year` | integer |  required  | 
        `activities.*.intend_to_participate` | boolean |  required  | 
    
<!-- END_ac4cee75b9957dd48cbd8b931f50462b -->

#general


<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_b77aedc454e9471a35dcb175278ec997 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET password/confirm`


<!-- END_b77aedc454e9471a35dcb175278ec997 -->

<!-- START_54462d3613f2262e741142161c0e6fea -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/confirm`


<!-- END_54462d3613f2262e741142161c0e6fea -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->

<!-- START_bebeab1cacfefde0ff0fdd3bbbcf2f6f -->
## Bind facebook account to user

> Example request:

```bash
curl -X GET \
    -G "http://localhost/facebook/bind" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/facebook/bind"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET facebook/bind`


<!-- END_bebeab1cacfefde0ff0fdd3bbbcf2f6f -->

<!-- START_01e3fa7ada689d295e212467fdfc3df7 -->
## Facebook login

> Example request:

```bash
curl -X GET \
    -G "http://localhost/facebook/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/facebook/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET facebook/login`


<!-- END_01e3fa7ada689d295e212467fdfc3df7 -->


