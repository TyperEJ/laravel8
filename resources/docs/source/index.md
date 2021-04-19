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
    -d '{"first_name":"officia","middle_name":"vitae","last_name":"nisi","suffix":15,"preferred_name":"autem","used_any_other_names":true,"former_first_name":"reprehenderit","former_middle_name":"sed","former_last_name":"aliquam","sex":false,"sex_descr":"soluta","birth_date":"reprehenderit","address":[{"county":"ab","country_code":10,"country_value":"non","address_line_1":"omnis","address_line_2":"earum","address_line_3":"sequi","city":"voluptas","state":15,"state_value":"quisquam","zip":"soluta"}],"used_mailing_address":true,"mailing_address":[{"county":"suscipit","country_code":4,"country_value":"quia","address_line_1":"fugiat","address_line_2":"culpa","address_line_3":"veniam","city":"quam","state":18,"state_value":"autem","zip":"et"}],"is_temporary_mailing_address":true,"temporary_mailing_address_from_date":"illum","temporary_mailing_address_to_date":"est","preferred_phone":true,"preferred_phone_number":[{"country_code":"asperiores","phone_number":"nemo","extension":"tenetur"}],"used_alternate_phone":false,"alternate_phone_number":[{"country_code":"veniam","phone_number":"molestias","extension":"architecto"}],"religion":17,"religion_descr":"consequatur","us_armed_forces_status":12,"us_military_anticipated_status":16,"us_military_experience_1_branch":4,"us_military_experience_1_from_month":"eos","us_military_experience_1_to_month":"et","us_military_experience_2_branch":7,"us_military_experience_2_from_month":"et","us_military_experience_2_to_month":"qui","us_military_experience_3_branch":6,"us_military_experience_3_from_month":"doloremque","us_military_experience_3_to_month":"officiis","ever_received_discharge":true,"discharge_descr":"culpa","is_hispanic_or_latino":false,"hispanic_or_latino_identities":[],"hispanic_or_latino_descr":"harum","other_identities":[],"tribal_identity":"expedita","is_federally_recognized_tribe":false,"tribe":13,"tribal_enrollment_number":"labore","asian_backgrounds":[],"east_asian_descr":"quos","south_asian_descr":"ullam","southeast_asian_descr":"laborum","african_american_backgrounds":[],"african_american_descr":"consectetur","native_hawaiian_or_other_pacific_islander_backgrounds":[],"native_hawaiian_or_other_pacific_islander_descr":"ipsam","white_backgrounds":[],"white_descr":[],"agreed_terms_demographics":false,"birth_country":13,"birth_city":"tempora","birth_state":12,"lived_in_us_yr":10,"lived_outside_us_yr":18,"languages":[{"language":"eaque","proficiency":"asperiores"}],"citizenship_status":"neque","list_citizenship":[],"parents_marital_status":"dolorem","whom_make_your_permanent_home":"veritatis","parents":[{"type":"corporis","is_living":true,"deceased_date":"velit","first_name":"ut","middle_name":"quo","last_name":"maiores","address_is":"occaecati","country":"mollitia","state":"et","address_line_1":"eius","address_line_2":"nihil","zip":"iusto","education_level":"tempore"}],"siblings":[{"first_name":"et","middle_name":"cupiditate","last_name":"quibusdam","education_level":"assumenda"}],"high_school_name":"pariatur","is_boarding_high_school":false,"is_graduate_from_school":true,"high_school_name_date_started":"adipisci","high_school_name_date_ended":"nesciunt","graduate_status":[{"status":"ut","reason":"dignissimos"}],"other_high_schools":[{"name":"maiores","date_started":"dolorum","date_ended":"laudantium"}],"why_leave_other_high_school":"quidem","colleges":[{"name":"beatae","date_started":"veniam","date_ended":"quidem"}],"graduating_class_size":"qui","class_rank":2,"year_courses_scheduling_system":"et","year_courses":[{"title":"numquam","level":"consequatur","schedule":"unde"}],"honors":[{"title":"quis","level":[],"level_recognition":[]}],"community_based_organizations":[{"organization_name":"nam","mentor_prefix":"veritatis","mentor_first_name":"asperiores","mentor_last_name":"at","mentor_email":"ipsa","mentor_phone":"reprehenderit"}],"career_interest":"sint","sats":[{"taken_date":"aut","subject":"necessitatibus","score":17}],"acts":[{"taken_date":"sapiente","highest_composite_score":16,"composite_date":"alias","highest_english_score":16,"english_date":"aliquam","highest_math_score":1,"math_date":"ea","highest_reading_score":12,"reading_date":"ab","highest_science_score":16,"science_date":"natus"}],"aps":[{"taken_date":"est","subject":"sit","score":15}],"ibs":[{"taken_date":"ea","subject":"eum","level":"illum","score":4}],"toefls":[{"total_score":8,"total_score_date":"et","highest_reading_score":4,"reading_date":"ipsa","highest_speaking_score":1,"speaking_date":"quo","highest_listening_score":16,"listening_date":"ea","highest_writing_score":8,"writing_date":"iste"}],"ielts":[{"total_score":5,"total_score_date":"fugit","highest_reading_score":1,"reading_date":"incidunt","highest_speaking_score":15,"speaking_date":"est","highest_listening_score":8,"listening_date":"in","highest_writing_score":16,"writing_date":"nam"}],"activities":[{"type":"illo","position_des":"est","activity_des":"amet","grade_levels":"eum","participation_time":[],"hours_spent_per_week":1,"hours_spent_per_year":19,"intend_to_participate":true}]}'

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
    "first_name": "officia",
    "middle_name": "vitae",
    "last_name": "nisi",
    "suffix": 15,
    "preferred_name": "autem",
    "used_any_other_names": true,
    "former_first_name": "reprehenderit",
    "former_middle_name": "sed",
    "former_last_name": "aliquam",
    "sex": false,
    "sex_descr": "soluta",
    "birth_date": "reprehenderit",
    "address": [
        {
            "county": "ab",
            "country_code": 10,
            "country_value": "non",
            "address_line_1": "omnis",
            "address_line_2": "earum",
            "address_line_3": "sequi",
            "city": "voluptas",
            "state": 15,
            "state_value": "quisquam",
            "zip": "soluta"
        }
    ],
    "used_mailing_address": true,
    "mailing_address": [
        {
            "county": "suscipit",
            "country_code": 4,
            "country_value": "quia",
            "address_line_1": "fugiat",
            "address_line_2": "culpa",
            "address_line_3": "veniam",
            "city": "quam",
            "state": 18,
            "state_value": "autem",
            "zip": "et"
        }
    ],
    "is_temporary_mailing_address": true,
    "temporary_mailing_address_from_date": "illum",
    "temporary_mailing_address_to_date": "est",
    "preferred_phone": true,
    "preferred_phone_number": [
        {
            "country_code": "asperiores",
            "phone_number": "nemo",
            "extension": "tenetur"
        }
    ],
    "used_alternate_phone": false,
    "alternate_phone_number": [
        {
            "country_code": "veniam",
            "phone_number": "molestias",
            "extension": "architecto"
        }
    ],
    "religion": 17,
    "religion_descr": "consequatur",
    "us_armed_forces_status": 12,
    "us_military_anticipated_status": 16,
    "us_military_experience_1_branch": 4,
    "us_military_experience_1_from_month": "eos",
    "us_military_experience_1_to_month": "et",
    "us_military_experience_2_branch": 7,
    "us_military_experience_2_from_month": "et",
    "us_military_experience_2_to_month": "qui",
    "us_military_experience_3_branch": 6,
    "us_military_experience_3_from_month": "doloremque",
    "us_military_experience_3_to_month": "officiis",
    "ever_received_discharge": true,
    "discharge_descr": "culpa",
    "is_hispanic_or_latino": false,
    "hispanic_or_latino_identities": [],
    "hispanic_or_latino_descr": "harum",
    "other_identities": [],
    "tribal_identity": "expedita",
    "is_federally_recognized_tribe": false,
    "tribe": 13,
    "tribal_enrollment_number": "labore",
    "asian_backgrounds": [],
    "east_asian_descr": "quos",
    "south_asian_descr": "ullam",
    "southeast_asian_descr": "laborum",
    "african_american_backgrounds": [],
    "african_american_descr": "consectetur",
    "native_hawaiian_or_other_pacific_islander_backgrounds": [],
    "native_hawaiian_or_other_pacific_islander_descr": "ipsam",
    "white_backgrounds": [],
    "white_descr": [],
    "agreed_terms_demographics": false,
    "birth_country": 13,
    "birth_city": "tempora",
    "birth_state": 12,
    "lived_in_us_yr": 10,
    "lived_outside_us_yr": 18,
    "languages": [
        {
            "language": "eaque",
            "proficiency": "asperiores"
        }
    ],
    "citizenship_status": "neque",
    "list_citizenship": [],
    "parents_marital_status": "dolorem",
    "whom_make_your_permanent_home": "veritatis",
    "parents": [
        {
            "type": "corporis",
            "is_living": true,
            "deceased_date": "velit",
            "first_name": "ut",
            "middle_name": "quo",
            "last_name": "maiores",
            "address_is": "occaecati",
            "country": "mollitia",
            "state": "et",
            "address_line_1": "eius",
            "address_line_2": "nihil",
            "zip": "iusto",
            "education_level": "tempore"
        }
    ],
    "siblings": [
        {
            "first_name": "et",
            "middle_name": "cupiditate",
            "last_name": "quibusdam",
            "education_level": "assumenda"
        }
    ],
    "high_school_name": "pariatur",
    "is_boarding_high_school": false,
    "is_graduate_from_school": true,
    "high_school_name_date_started": "adipisci",
    "high_school_name_date_ended": "nesciunt",
    "graduate_status": [
        {
            "status": "ut",
            "reason": "dignissimos"
        }
    ],
    "other_high_schools": [
        {
            "name": "maiores",
            "date_started": "dolorum",
            "date_ended": "laudantium"
        }
    ],
    "why_leave_other_high_school": "quidem",
    "colleges": [
        {
            "name": "beatae",
            "date_started": "veniam",
            "date_ended": "quidem"
        }
    ],
    "graduating_class_size": "qui",
    "class_rank": 2,
    "year_courses_scheduling_system": "et",
    "year_courses": [
        {
            "title": "numquam",
            "level": "consequatur",
            "schedule": "unde"
        }
    ],
    "honors": [
        {
            "title": "quis",
            "level": [],
            "level_recognition": []
        }
    ],
    "community_based_organizations": [
        {
            "organization_name": "nam",
            "mentor_prefix": "veritatis",
            "mentor_first_name": "asperiores",
            "mentor_last_name": "at",
            "mentor_email": "ipsa",
            "mentor_phone": "reprehenderit"
        }
    ],
    "career_interest": "sint",
    "sats": [
        {
            "taken_date": "aut",
            "subject": "necessitatibus",
            "score": 17
        }
    ],
    "acts": [
        {
            "taken_date": "sapiente",
            "highest_composite_score": 16,
            "composite_date": "alias",
            "highest_english_score": 16,
            "english_date": "aliquam",
            "highest_math_score": 1,
            "math_date": "ea",
            "highest_reading_score": 12,
            "reading_date": "ab",
            "highest_science_score": 16,
            "science_date": "natus"
        }
    ],
    "aps": [
        {
            "taken_date": "est",
            "subject": "sit",
            "score": 15
        }
    ],
    "ibs": [
        {
            "taken_date": "ea",
            "subject": "eum",
            "level": "illum",
            "score": 4
        }
    ],
    "toefls": [
        {
            "total_score": 8,
            "total_score_date": "et",
            "highest_reading_score": 4,
            "reading_date": "ipsa",
            "highest_speaking_score": 1,
            "speaking_date": "quo",
            "highest_listening_score": 16,
            "listening_date": "ea",
            "highest_writing_score": 8,
            "writing_date": "iste"
        }
    ],
    "ielts": [
        {
            "total_score": 5,
            "total_score_date": "fugit",
            "highest_reading_score": 1,
            "reading_date": "incidunt",
            "highest_speaking_score": 15,
            "speaking_date": "est",
            "highest_listening_score": 8,
            "listening_date": "in",
            "highest_writing_score": 16,
            "writing_date": "nam"
        }
    ],
    "activities": [
        {
            "type": "illo",
            "position_des": "est",
            "activity_des": "amet",
            "grade_levels": "eum",
            "participation_time": [],
            "hours_spent_per_week": 1,
            "hours_spent_per_year": 19,
            "intend_to_participate": true
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
        `us_military_experience_1_branch` | integer |  required  | question-id-196, if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_1_from_month` | string |  required  | question-id-197, if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_1_to_month` | string |  optional  | question-id-198, if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `us_military_experience_2_branch` | integer |  optional  | question-id-1902, if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_2_from_month` | string |  optional  | question-id-1903, if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_2_to_month` | string |  optional  | question-id-1904, if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `us_military_experience_3_branch` | integer |  optional  | question-id-1905, if "1" or "2" is selected in 'us_armed_forces_status', e.g.3:Air Force 0:Army 4: Coast Guard 1:Marine Corps 2:Navy
        `us_military_experience_3_from_month` | string |  optional  | question-id-1906, if "1" or "2" is selected in 'us_armed_forces_status', e.g."11/2016"
        `us_military_experience_3_to_month` | string |  optional  | question-id-1907, if "1" or "2" is selected in 'us_armed_forces_status', e.g.null, "12/2016"
        `ever_received_discharge` | boolean |  optional  | question-id-199, if "1" or "2" is selected in 'us_armed_forces_status', e.g.0:yes 1:no
        `discharge_descr` | string |  optional  | question-id-1044, if 'ever_receive_discharge' is true, e.g."<p>test<i>xxxxx<u>oooo</u></i></p>"
        `is_hispanic_or_latino` | boolean |  required  | question-id-200, 0:yes 1:no
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
        `birth_country` | integer |  required  | 0:United States of America
        `birth_city` | string |  required  | 
        `birth_state` | integer |  required  | 3:Alabama
        `lived_in_us_yr` | integer |  required  | 
        `lived_outside_us_yr` | integer |  required  | 
        `languages.*.language` | string |  required  | 
        `languages.*.proficiency` | string |  required  | 
        `citizenship_status` | string |  required  | 
        `list_citizenship` | array |  required  | 
        `parents_marital_status` | string |  required  | 
        `whom_make_your_permanent_home` | string |  required  | 
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


